<?php

namespace App\Form;

use App\Entity\Depot;
use App\Entity\Compte;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;

class DepotType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('montant')
            ->add('compte',EntityType::class,[
                'class'=>Compte::class
            ])
            ->add('utilisateur',EntityType::class,[
                'class'=>User::class
            ])
            ->add('save',SubmitType::class)
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Depot::class,
            'csrf_protection'=>false
        ]);
    }
}
