<?php

namespace App\Controller;

use Symfony\Component\Routing\Annotation\Route;
use FOS\RestBundle\Controller\FOSRestController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use  App\Entity\Compte;
use App\Form\CompteType;

class CompteController extends FOSRestController
{
    /**
    * @Route("/api/compte",name="compte",methods={"POST"})
     */
    public function compte(Request $request)
    {
        $compte = new Compte();
        $form=$this->createForm(CompteType::class,$compte);
        $data=json_decode($request->getContent(),true);
        $form->submit($data);
        
        if($form->isSubmitted() && $form->isValid()){
            $compte->setSolde(0);
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
}
