<?php

namespace App\Controller;

use App\Entity\User;
use App\Form\RegistrationFormType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;
use Symfony\Component\HttpFoundation\JsonResponse;
use FOS\RestBundle\Controller\AbstractFOSRestController;
use Symfony\Component\Validator\Validator\ValidatorInterface;
use Symfony\Component\Serializer\SerializerInterface;


 /** 
  * @Route("/api")
  */
class RegistrationController extends AbstractFOSRestController
{
    /**
     * @Route("/register", name="app_register",methods={"POST"})
     */
    public function register(Request $request, UserPasswordEncoderInterface $passwordEncoder, ValidatorInterface $validator,SerializerInterface $serializer,  EntityManagerInterface $entityManager): Response
    {
        $user = new User();
        $form = $this->createForm(RegistrationFormType::class, $user);
        $form->handleRequest($request);
        //$data=json_decode($request->getContent(),true);
        $data=$request->request->all();
        $file=$request->files->all()['imageFile'];
        $form->submit($data);
        $errors = $validator->validate($user);
        
        if (count($errors) > 0) {
            $errorsString = (string) $errors;

            return new Response($errorsString);
        }
        
        if((!$form->get('plainPassword')->getData()) || ($form->get('plainPassword')->getData()) < 6) {
            if(!$form->get('plainPassword')->getData())
            {
                $error = "le mot de passe ne doit pas etre vide.";

            }
            else
            {
                $error= "Mot de Passe doit etre superieur ou égal à 6 caractéres.";
            }
        return $this->handleView($this->view(['erreur'=>$error],Response::HTTP_UNAUTHORIZED));

            
        }
        

        if ($form->isSubmitted() && $form->isValid()) {
            // encode the plain password
            $user->setPassword(
                $passwordEncoder->encodePassword(
                    $user,
                    $form->get('plainPassword')->getData()
                )
            );
            $utilisateur = $this->getUser();
        if($utilisateur->getRoles()[0]=='ROLE_SUPERADMIN'){
            $user->setEntreprise('WARI');
            $user->setRoles(['ROLE_CAISSIER']);

        }
        else if($utilisateur->getRoles()[0]=='ROLE_AdminPartenaire'){
                $user->setEntreprise($utilisateur->getEntreprise());
                $user->setRoles(['ROLE_USER']);

        }
        //$user->setRoles(['ROLE_SUPERADMIN']);
            $user->setUpdatedAt(new \Datetime());
            $user->setImageFile($file);
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($user);
            $entityManager->flush();
            return $this->handleView($this->view(['status'=>'l\'utilisateur a été crée'],Response::HTTP_CREATED));
        }
        return $this->handleView($this->view($form->getErrors()));

    }
    /**
     * @Route("/login", name="login", methods={"POST"})
     */
    public function login(Request $request)
    {
        $user = $this->getUser();
        return $this->json([
            'username' => $user->getUsername(),
            'roles' => $user->getRoles()
        ]);
    }
    /** 
     * @Route("/user/{id}", name="statut", methods={"PUT"})
     */
    public function statut(User $user,EntityManagerInterface $entityManager)
    {
        if($user->getStatut()=="actif")
        {
            $user->setStatut("bloquer");
        
        }
        else
        {
            $user->setStatut("actif");
        
        }
        $entityManager->persist($user);
        $entityManager->flush();
        $data = [
            'status' => 200,
            'message' => 'Le partenaire a bien été mis à jour'
        ];
        return new JsonResponse($data);
    }

}
