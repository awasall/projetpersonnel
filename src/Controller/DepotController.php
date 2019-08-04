<?php

namespace App\Controller;

use App\Entity\User;
use Symfony\Component\Routing\Annotation\Route;
use FOS\RestBundle\Controller\Annotations as Rest;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Serializer\SerializerInterface;
use  App\Entity\Depot;
use App\Form\DepotType;
use FOS\RestBundle\Controller\FOSRestController;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;
use Symfony\Component\Validator\Validator\ValidatorInterface;


class DepotController extends FOSRestController
{
    /**
     *  @Route("/api/depot",name="depot",methods={"POST"})
     */
    public function versement(Request $request,ValidatorInterface $validator, SerializerInterface $serializer)
    {
        $depot = new Depot();
        $form=$this->createForm(DepotType::class,$depot);
        $data=json_decode($request->getContent(),true);
        $form->submit($data);
        $errors = $validator->validate($depot);
            if(count($errors)) {
                $errors = $serializer->serialize($errors, 'json');
                return new Response($errors, 500, [
                    'Content-Type' => 'application/json'
                ]);
            }
        if($form->isSubmitted() && $form->isValid()){
            
            $depot->setDateDepot(new \Datetime());
            
            //$user = $this->getUser();
            //$depot->setCaissier($user->getId());
            //var_dump($depot);die();
            $em=$this->getDoctrine()->getManager();
            $em->persist($depot);
            $em->flush();
        $compte=$depot->getCompte();
        $value=$compte->getSolde()+$depot->getMontant();
        $compte->setSolde($value);
        $em->persist($compte);
        $em->flush();
        
            return $this->handleView($this->view(['status'=>'ok'],Response::HTTP_CREATED));

        }
        return $this->handleView($this->view($form->getErrors()));

        
    }
}
