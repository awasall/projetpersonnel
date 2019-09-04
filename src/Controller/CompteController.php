<?php

namespace App\Controller;

use Symfony\Component\Routing\Annotation\Route;
use FOS\RestBundle\Controller\FOSRestController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use  App\Entity\Compte;
use Symfony\Component\Serializer\SerializerInterface;
use Symfony\Component\Validator\Validator\ValidatorInterface;
use Doctrine\ORM\EntityManagerInterface;

use App\Form\RechercheCompteType;
use App\Repository\CompteRepository;

use App\Form\CompteType;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;

class CompteController extends FOSRestController
{
    /**
    * @Route("/api/compte",name="compte",methods={"POST"})
     * @Security("has_role('ROLE_SUPERADMIN')")
    */
    public function compte(Request $request)
    {
        $compte = new Compte();
        $form=$this->createForm(CompteType::class,$compte);
        $data=json_decode($request->getContent(),true);
        $form->submit($data);
        if(!$compte->getPartenaire()){
            return $this->handleView($this->view(['erreur'=>'ce partenaire nexiste pas'],Response::HTTP_UNAUTHORIZED));
  
        }
        if($form->isSubmitted() && $form->isValid()){
            $compte->setSolde("0");
            $data=date("Y").date("m").date("d").date("H").date("i").date("s");
            $compte->setNumerCompte($data);
            var_dump($data);
            $em=$this->getDoctrine()->getManager();
            $em->persist($compte);
            $em->flush();
    
            return $this->handleView($this->view(['status'=>'compte bien ajouté'],Response::HTTP_CREATED));

        }
        return $this->handleView($this->view($form->getErrors()));

        
    }

    //deposer
     /**
    * @Route("/api/rechercheCompte",name="rechercheComptecompte",methods={"POST"})
     */
    public function recherchCompte(CompteRepository $repository , Request $request,SerializerInterface $serializer,ValidatorInterface $validator,EntityManagerInterface $entityManager)
    {
        
        $data=json_decode($request->getContent(),true);
        $ncompte=$data['numerCompte'];

        $compt = $repository->findOneBy(['numerCompte' => $ncompte]);
        //var_dump($compt);die();

        if(!$compt){
            return $this->handleView($this->view(['erreur'=>'ce compte nexiste pas'],Response::HTTP_UNAUTHORIZED));
  
        }
        $data = $serializer->serialize($compt, 'json');
            return new Response($data, 200, [
                'Content-Type' => 'application/json'
    
            ]);
    }
    /**
     * @Route("/api/listeCompte", name="list_compte", methods={"GET"})
     * @Security("has_role('ROLE_CAISSIER')")
     */
    public function list(CompteRepository $repo,SerializerInterface $serializer)
    {
        $compte = $repo->findAll();
        $data = $serializer->serialize($compte, 'json');
        return new Response($data, 200, [
            'Content-Type' => 'application/json'

        ]);

    }

}
