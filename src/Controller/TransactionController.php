<?php

namespace App\Controller;
use App\Entity\User;
use App\Entity\Compte;
use App\Entity\Transaction;
use App\Form\TransactionType;
use App\Repository\TarifRepository;
use App\Repository\TransactionRepository;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\JsonResponse;
use FOS\RestBundle\Controller\AbstractFOSRestController;
use Symfony\Component\Validator\Validator\ValidatorInterface;


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
            $value = $transy->findFrais($valeur);
            $transaction->setcommisionEnv($value[0]->getValeur()*10/100);
            $transaction->setcommissionRetr($value[0]->getValeur()*20/100);
            $transaction->setcommissionPropre($value[0]->getValeur()*30/100);
            $transaction->setCommisionEtat($value[0]->getValeur()*40/100);
            $transaction->setFrais($value[0]->getValeur());
            $transaction->setStatut("disponible");
            $user = $this->getUser();
            $transaction->setUserEnv($user);
            $transaction->setCompteEnv($user->getCompte());
            $compte=$transaction->getCompteEnv();
            $val=$compte->getSolde()+$transaction->getMontant()-$transaction->getcommisionEnv();
            $compte->setSolde($val);
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($compte);
            $entityManager->persist($transaction);
            $entityManager->flush();

            return $this->handleView($this->view(['status'=>'Transaction Effectué'],Response::HTTP_CREATED));
        }
        return $this->handleView($this->view($form->getErrors()));

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

    
}
