<?php

namespace App\Controller;
use App\Entity\User;
use App\Entity\Compte;
use  App\Entity\Partenaire;
use App\Form\PartenaireType;
use App\Form\RegistrationFormType;
use App\Repository\PartenaireRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use FOS\RestBundle\Controller\Annotations as Rest;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Serializer\SerializerInterface;
use FOS\RestBundle\Controller\AbstractFOSRestController;
use Symfony\Component\Validator\Validator\ValidatorInterface;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;

/**
 * @Route("/api")
 */

class PartenaireController extends AbstractFOSRestController
{
    /**
     * @Route("/partenaire", name="partenaire", methods={"POST"})
     */
    public function ajout(Request $request, ValidatorInterface $validator, EntityManagerInterface $entityManager, UserPasswordEncoderInterface $passwordEncoder): Response
    {
        $partenaire = new Partenaire();
        $form = $this->createForm(PartenaireType::class, $partenaire);
        $form->handleRequest($request);
        //$data=json_decode($request->getContent(),true);
        $data=$request->request->all();
        $file=$request->files->all()['imageFile'];
        $form->submit($data);
        $errors = $validator->validate($partenaire);
        if (count($errors) > 0) {
            $errorsString = (string) $errors;

            return new Response($errorsString);
        }
        $errors = [];
        
       
     
        if ($form->isSubmitted() && $form->isValid()) {
            //$partenaire->setImageFile($file);
            $comptes = new Compte();
            $comptes->setSolde("0");
            $data=date("Y").date("m").date("d").date("H").date("i").date("s");
            $comptes->setNumerCompte($data);
           $comptes->setPartenaire($partenaire);
            //$comptes->setPartenaire($partenaire->getId());
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($partenaire);
            $entityManager->persist($comptes);
            $entityManager->flush();
            $user = new User();
            $user->setUsername($partenaire->getEmail());
            $user->setPassword($passwordEncoder->encodePassword($user, 'passer'));
            $user->setRoles(['ROLE_AdminPartenaire']);
            $user->setPrenom($partenaire->getPrenom());
            $user->setNom($partenaire->getNom());
            $entreprise=$partenaire->getId()."";
            $user->setEntreprise($entreprise);
            $user->setAdresse($partenaire->getAdresse());
            //$user->setCompte($comptes->getId());
           $compte=$comptes->getId()."";
           $user->setCompte($compte);
            $user->setTelephone($partenaire->getTelephone());
            $user->setStatut('actif');
            $user->setImageFile($file);

            $entityManager->persist($user);

            $entityManager->flush();
            return $this->handleView($this->view(['status'=>'le partenaire a été crée'],Response::HTTP_CREATED));
        }
        return $this->handleView($this->view($form->getErrors()));

    }
    /**
     * @Route("/listepartenaire", name="list_partenaire", methods={"GET"})
     */
    public function list(PartenaireRepository $repo,SerializerInterface $serializer)
    {
        $partenaires = $repo->findAll();
        $data = $serializer->serialize($partenaires, 'json');
        return new Response($data, 200, [
            'Content-Type' => 'application/json'

        ]);

    }
    /**
     * @Route("/partenaire/{id}", name="updatepartenaire", methods={"PUT"})
     */
    public function update(Request $request, SerializerInterface $serializer, Partenaire $partenaire, ValidatorInterface $validator, EntityManagerInterface $entityManager)
    {
        $partenaireUpdate = $entityManager->getRepository(Partenaire::class)->find($partenaire->getId());
        $data = json_decode($request->getContent());
        foreach ($data as $key => $value){
            if($key && !empty($value)) {
                $name = ucfirst($key);
                $setter = 'set'.$name;
                $partenaireUpdate->$setter($value);
            }
        }
        $errors = $validator->validate($partenaireUpdate);
        if(count($errors)) {
            $errors = $serializer->serialize($errors, 'json');
            return new Response($errors, 500, [
                'Content-Type' => 'application/json'
            ]);
        }
        $entityManager->flush();
        $data = [
            'status' => 200,
            'message' => 'Le partenaire a bien été mis à jour'
        ];
        return new JsonResponse($data);
    }


}
