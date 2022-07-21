<?php

namespace App\Form;

use App\Entity\Competent;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class Competent2Type extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('email')
            ->add('roles')
            ->add('password')
            ->add('firstName')
            ->add('lastName')
            ->add('tarif')
            ->add('experience')
            ->add('sectorActivity')
            ->add('formation')
            ->add('diplomes')
            ->add('certification')
            ->add('langues')
            ->add('imageName')
            ->add('imageSize')
            ->add('updatedAt')
            ->add('Job')
            ->add('cities')
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Competent::class,
        ]);
    }
}
