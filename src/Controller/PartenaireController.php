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
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Dompdf\Dompdf;
use Dompdf\Options;
/**
 * @Route("/api")
 * @Security("has_role('ROLE_SUPERADMIN')")
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
       
        if ($form->isSubmitted() && $form->isValid()) {
            //$partenaire->setImageFile($file);
            $compte = new Compte();
            $compte->setSolde("0");
            $data=date("Y").date("m").date("d").date("H").date("i").date("s");
            $compte->setNumerCompte($data);
            $compte->setPartenaire($partenaire);
            $partenaire->setStatut('actif');

            //$comptes->setPartenaire($partenaire->getId());
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($partenaire);
            $entityManager->persist($compte);
            $entityManager->flush();
            $user = new User();
            $user->setUsername($partenaire->getEmail());
            $user->setPassword($passwordEncoder->encodePassword($user, 'passer'));
            $user->setRoles(['ROLE_AdminPartenaire']);
            $user->setPrenom($partenaire->getPrenom());
            $user->setNom($partenaire->getNom());
            $user->setPartenaire($partenaire);
            $user->setAdresse($partenaire->getAdresse());
            $user->setCompte($compte);
            $user->setTelephone($partenaire->getTelephone());
            $user->setStatut($partenaire->getStatut());
            $user->setImageFile($file);

            $entityManager->persist($user);
            $entityManager->flush();
            $pdfOptions = new Options();
        $pdfOptions->set('defaultFont', 'Arial');
        
        // Instantiate Dompdf with our options
        $dompdf = new Dompdf($pdfOptions);
        
        // Retrieve the HTML generated in our twig file
        $html = $this->renderView('partenaire/contrat.html.twig', [
            'partenaire' => $partenaire
        ]);
        
        // Load HTML to Dompdf
        $dompdf->loadHtml($html);
        
        // (Optional) Setup the paper size and orientation 'portrait' or 'portrait'
        $dompdf->setPaper('A4', 'portrait');

        // Render the HTML as PDF
        $dompdf->render();

        // Output the generated PDF to Browser (force download)
        $dompdf->stream("mypdf.pdf", [
            "Attachment" => true
        ]);
            //return $this->handleView($this->view(['status'=>'le partenaire a été crée'],Response::HTTP_CREATED));
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

    /** 
     * @Route("/partenairestatut/{id}", name="partenairestatut", methods={"PUT"})
     * @Security("has_role('ROLE_SUPERADMIN') ")

     */
    public function statut(Partenaire $partenaire,EntityManagerInterface $entityManager)
    {
        if($partenaire->getStatut()=="actif")
        {
            $partenaire->setStatut("bloquer");
        }
        else
        {
            $partenaire->setStatut("actif");
        
        }
        $entityManager->persist($partenaire);
        $entityManager->flush();
        $data = [
            'status' => 200,
            'message' => 'Le partenaire a bien été mis à jour'
        ];
        return new JsonResponse($data);
    }


    


}
