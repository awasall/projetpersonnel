<?php

namespace App\Controller;

use Exception;
use App\Entity\User;
use App\Form\AffectationType;
use App\Form\RegistrationFormType;
use App\Repository\UserRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Serializer\SerializerInterface;
use FOS\RestBundle\Controller\AbstractFOSRestController;
use Symfony\Component\Validator\Validator\ValidatorInterface;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;



 /** 
  * @Route("/api")
  */
class RegistrationController extends AbstractFOSRestController
{
    /**
     * @Route("/register", name="app_register",methods={"POST"})
     * @Security("has_role('ROLE_SUPERADMIN') or has_role('ROLE_AdminPartenaire')")
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
        
        if((!$form->get('plainPassword')->getData()) || strlen($form->get('plainPassword')->getData()) < 6) {
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
                $passwordEncoder->encodePassword($user,
                    $form->get('plainPassword')->getData()
                )
            );
            $utilisateur = $this->getUser();

        if($utilisateur->getRoles()[0]=="ROLE_AdminPartenaire"){
            
            $user->setPartenaire($utilisateur->getPartenaire());
            
        }
           
        if($user->getRole()=='USER'){
            
            $user->setRoles(['ROLE_USER']);
            
        }
        if($user->getRole()=='AdminPartenaire'){
            $user->setRoles(["ROLE_AdminPartenaire"]);

        }
        if($user->getRole()=='AdminSimple'){
            $user->setRoles(["ROLE_AdminSimple"]);

        }
        if($user->getRole()=='Caissier'){
            $user->setRoles(["ROLE_CAISSIER"]);

        }
        
            $user->setStatut('actif');
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
            'email' => $user->getUsername(),
            'roles' => $user->getRoles()
        ]);
    }
    /** 
     * @Route("/statut/{id}", name="statutt", methods={"GET"})
     * @Security("has_role('ROLE_AdminPartenaire') or has_role('ROLE_SUPERADMIN') or has_role('ROLE_AdminSimple') ")
     */
    public function statut(User $user,EntityManagerInterface $entityManager)
    {
        $connect=$this-> getUser();
        if ($connect==$user) {
            throw new Exception("Vous ne pouvez pas bloquer votre propre compte"); 
        }elseif ($connect->getRoles()[0]=='ROLE_AdminSimple' && $user->getRoles()[0]=='ROLE_AdminPartenaire') {
            throw new Exception("Vous ne pouvez pas bloquer votre super admin");
        }
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
            'message' => 'Lutilisateur a bien été mis à jour'
        ];
        return new JsonResponse($data);
    }
    
    /**
     * @Route("/listeuser", name="list_user", methods={"GET"})
     */
    public function list(UserRepository $repo,SerializerInterface $serializer)
    {
        $user = $this->getUser();
        //var_dump($user);die();

        if($user->getRoles()[0]=="ROLE_AdminPartenaire" || $user->getRoles()[0]=="ROLE_AdminSimple"){
            $users = $repo->findBy(['partenaire'=>$user->getPartenaire()]);
        
        }
        else if($user->getRoles()[0]=="ROLE_SUPERADMIN" ){
            $userss = $repo->findAll();
            $users=[];
            for ($i=0; $i < count($userss); $i++) { 
                if ($userss[$i]->getPartenaire()==NULL) {
                    $users[]=$userss[$i];
                }
            }
        }
        //var_dump($users);die();
        $data = $serializer->serialize($users, 'json');
        return new Response($data, 200, [
            'Content-Type' => 'application/json'

        ]);
            
    }
    /** 
     * @Route("/affectation/{id}", name="affectation", methods={"PUT"})
     */
    public function affectation(User $user,ValidatorInterface $validator,Request $request,EntityManagerInterface $entityManager)
    {
        $form = $this->createForm(AffectationType::class, $user);
        $form->handleRequest($request);
        $data=json_decode($request->getContent(),true);
        $form->submit($data);
        $errors = $validator->validate($user);
        if (count($errors) > 0) {
            $errorsString = (string) $errors;
            return new Response($errorsString);
        }
        if ($form->isSubmitted() && $form->isValid()) {
            $utilisateur = $this->getUser();
            if($utilisateur->getPartenaire()!=$user->getCompte()->getPartenaire())
            {
                
                return $this->handleView($this->view(['status'=>'Ce compte n\'appartient pas à l\'entreprise'],Response::HTTP_CREATED));

            }
            $entityManager->persist($user);
            $entityManager->flush();
            return $this->handleView($this->view(['status'=>'affectation de compte reussi'],Response::HTTP_CREATED));
    
        }
        return $this->handleView($this->view($form->getErrors()));
    }
    }


