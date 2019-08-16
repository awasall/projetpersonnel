<?php

namespace App\Form;

use App\Entity\Transaction;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;

class TransactionType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('prenomEnv')
            ->add('nomEnv')
            ->add('telephoneEn')
            ->add('typePieceEnv', ChoiceType::class, [
                'choices'  => [
                    'CNI' => 'cni',
                    'passport' => 'passport',
                    'permi' => 'permis',
                ],
            ])
            ->add('numPieceEnv')
            ->add('prenomBenef')
            ->add('nomBenef')
            ->add('telephoneBenef')

            
            ->add('montant')
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Transaction::class,
            'csrf_protection'=>false

        ]);
    }
}
