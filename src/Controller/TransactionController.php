<?php
namespace App\Controller;
use App\Entity\User;
use App\Entity\Compte;
use  App\Entity\Partenaire;
use App\Form\RetraitType;
use App\Entity\Transaction;
use App\Form\OperationType;
use App\Form\TransactionType;
use App\Repository\TarifRepository;
use Doctrine\ORM\EntityManagerInterface;
use App\Repository\TransactionRepository;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Serializer\SerializerInterface;
use FOS\RestBundle\Controller\AbstractFOSRestController;
use Symfony\Component\Validator\Validator\ValidatorInterface;
use Dompdf\Dompdf;
use Dompdf\Options;

class TransactionController extends AbstractFOSRestController
{
    /**
     * @Route("/", name="transaction_index", methods={"GET"})
     */
    public function index(TransactionRepository $transactionRepository): Response
    {
        return $this->render('transaction/index.html.twig', [
            'transactions' => $transactionRepository->findAll(),
        ]);
    }

    /**
     * @Route("/api/transaction",name="transaction",methods={"POST"})
     */
    public function new(Request $request,ValidatorInterface $validator,TarifRepository $transy): Response
    {
        $transaction = new Transaction();
        $form = $this->createForm(TransactionType::class, $transaction);
        $form->handleRequest($request);
        $data=json_decode($request->getContent(),true);
        
        $form->submit($data);
        $errors = $validator->validate($transaction);
        
        if (count($errors) > 0) {
            $errorsString = (string) $errors;

            return new Response($errorsString);
        }
        if ($form->isSubmitted() && $form->isValid()) {
            $data=date("Y").date("m").date("d").date("H").date("i").date("s");
            $transaction->setCode($data);
            $transaction->setdateEnv(new \DateTime());
            $valeur=$transaction->getMontant();
            $value= $transy->findFrais($valeur);
            //var_dump($transaction);die();
            $transaction->setcommisionEnv($value[0]->getValeur()*10/100);
            $transaction->setcommissionRetr($value[0]->getValeur()*20/100);
            $transaction->setcommissionPropre($value[0]->getValeur()*30/100);
            $transaction->setCommisionEtat($value[0]->getValeur()*40/100);
            $transaction->setFrais($value[0]->getValeur());
            $transaction->setStatut("disponible");
            $user = $this->getUser();
            $transaction->setUserEnv($user);
            $transaction->setCompteEnv($user->getCompte());
            $compte=$user->getCompte();
            if ($transaction->getMontant() > $compte->getSolde()){
                return $this->handleView($this->view(['erreur montant'=>'ce montant est supérieur au solde'],Response::HTTP_UNAUTHORIZED));
            }
    
            //var_dump($transaction);die();
            $val=$compte->getSolde()-$transaction->getMontant()+$transaction->getcommisionEnv();
            $compte->setSolde($val);
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($compte);
            $entityManager->persist($transaction);
            $entityManager->flush();
            
            return $this->handleView($this->view(['status'=>'Transaction Effectué'],Response::HTTP_CREATED));
        }
        return $this->handleView($this->view($form->getErrors()));

    }
    //retrait
    /** 
     * @Route("/api/retrait", name="statut", methods={"POST"})
     */
    public function retrait(Request $request,TarifRepository $transy,TRansactionRepository $repository,ValidatorInterface $validator,EntityManagerInterface $entityManager)
    {
        $retrait = new Transaction();
        $form = $this->createForm(RetraitType::class, $retrait);
        $form->handleRequest($request);
        $data=json_decode($request->getContent(),true);
        $form->submit($data);
        $errors = $validator->validate($retrait);
        if (count($errors) > 0) {
            $errorsString = (string) $errors;
            return new Response($errorsString);
        }

        $transaction = $repository->findOneBy(['code' => $retrait->getCode()]);
       // var_dump($transaction);die();
        
        
        //if ($form->isSubmitted() && $form->isValid()) {
        $transaction->setDateRetrait(new \DateTime());
        $transaction->setStatut("retirer");
        $user = $this->getUser();
        $transaction->setUserRetrait($user);
        $transaction->setTypePieceBenef($retrait->getTypePieceBenef());
        $transaction->setNumPieceBenef($retrait->getNumPieceBenef());
        $transaction->setCompteRetrait($user->getCompte());
        $compte=$user->getCompte();
        $val=$compte->getSolde()+$retrait->getMontant()+$retrait->getCommissionRetr();
        $compte->setSolde($val);
        $entityManager->persist($compte);
        $entityManager->persist($transaction);
        $entityManager->flush();
        return $this->handleView($this->view(['status'=>'Retrait Effectué'],Response::HTTP_CREATED));

 //   }
    //return $this->handleView($this->view($form->getErrors()));
}

    /**
     * @Route("/{id}", name="transaction_show", methods={"GET"})
     */
    public function show(Transaction $transaction): Response
    {
        return $this->render('transaction/show.html.twig', [
            'transaction' => $transaction,
        ]);
    }

    //lister opération par partenaire
    /**
     * @Route("/api/listeoperation/{id}", name="list_operation", methods={"POST"})
     */
    public function list(Partenaire $partenaire, Request $request,TransactionRepository $repo,SerializerInterface $serializer,ValidatorInterface $validator,EntityManagerInterface $entityManager)
    {
        $operation = new Transaction();
       
        $data=json_decode($request->getContent(),true);
       
       // if{} ($form->isSubmitted() ) 
            $date1=$data['date1'];
            $date2=$data['date2'];
            //var_dump($date1);
            $date1=(new \DateTime($date1));
            $date2=(new \DateTime($date2));

            $op=[];
            $operation = $repo->afficheOperation($date1,$date2);
            for ($i=0; $i < count($operation); $i++) { 
                if($operation[$i]->getUserEnv()->getPartenaire()==$partenaire || ($operation[$i]->getUserRetrait()!=NULL && $operation[$i]->getUserRetrait()->getPartenaire()==$partenaire))
                {
                    $op[]=$operation[$i];
                }
            }
           
            $data = $serializer->serialize($op, 'json', ['groups' => 'envoi']);
            return new Response($data, 200, [
                'Content-Type' => 'application/json'
    
            ]);
            
  // }
        

    }
    //rechercher code
     /**
    * @Route("/api/rechercheCode",name="rechercheCode",methods={"POST"})
     */
    public function recherchCode(TransactionRepository $repository , Request $request,SerializerInterface $serializer,ValidatorInterface $validator,EntityManagerInterface $entityManager)
    {
        
        $data=json_decode($request->getContent(),true);
        $ncode=$data['code'];

        $transaction = $repository->findOneBy(['code' => $ncode]);
        //var_dump($compt);die();
        if(!$transaction){
            return $this->handleView($this->view(['erreur'=>'ce code n\'existe pas '],Response::HTTP_UNAUTHORIZED));
  
        }
        if($transaction->getStatut()=="retirer"){
            return $this->handleView($this->view(['erreur'=>'deja retirer'],Response::HTTP_UNAUTHORIZED));
        }
        
        $data = $serializer->serialize($transaction, 'json');
            return new Response($data, 200, [
                'Content-Type' => 'application/json'
    
            ]);
    }
}
