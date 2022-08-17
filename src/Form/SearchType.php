<?php

namespace App\Form;


use App\Entity\Search;
use App\Entity\Category;
use App\Entity\Competent;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;

class SearchType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
        ->add('string', TextType::class, [
            'label' => false,
            'required' => false,
            'attr' => [
                'placeholder' => 'Votre recherche'
            ]
        ])
        ->add('categories', EntityType::class, [
            'label' => false,
            'required' => false,
            'class' => Category::class,
            'expanded' => true,
            'multiple' => true
        ])
        // ->add('competent', EntityType::class, [
        //     'label' => false,
        //     'required' => false,
        //     'class' => Competent::class,
        //     'expanded' => true,
        //     'multiple' => true
        // ])
        ->add('submit', SubmitType::class, [
            'label' => 'Filtrer',
            'attr' => [
                'class' => 'btn-block btn-info'
            ]

        ])
        // ->add('min', NumberType::class, [
        //     'label' => false,
        //     'required' => false,
        //     'attr' => [
        //         'placeholder' => 'Prix min'
        //     ]
        // ])
        // ->add('max', NumberType::class, [
        //     'label' => false,
        //     'required' => false,
        //     'attr' => [
        //         'placeholder' => 'Prix max'
        //     ]
        // ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class'        => Search::class,
            'method'            => 'GET',
            'csrf_protection'   => false 
        ]);
    }

    public function getBlockPrefix()
    {
        return '';
    }
}
