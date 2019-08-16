<?php

namespace App\Form; 

use App\Entity\User;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Vich\UploaderBundle\Form\Type\VichImageType;
use Symfony\Component\Validator\Constraints\IsTrue;
use Symfony\Component\Validator\Constraints\Length;
use Symfony\Component\Validator\Constraints\NotBlank;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\CollectionType;
 
class RegistrationFormType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('username')
            ->add('plainPassword', PasswordType::class, [
                // instead of being set onto the object directly,
                // this is read and encoded in the controller
                'mapped' => false
            ])
            ->add('role', ChoiceType::class, [
                'choices'  => [
                    'Utilisateur' => "USER",
                    'Admin Partenaire' => "AdminPartenaire",
                    'Admin Simple' => "AdminSimple",
                    'Caissier' => "Caissier"

                ],
            ])
            ->add('prenom')
            ->add('nom')
            ->add('telephone')
            ->add('imageFile' ,VichImageType::class, [
                'required' => false
            ])
            ->add('adresse')
            ->add('statut')

            ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => User::class,
            'csrf_protection'=>false
        ]);
    }
}
