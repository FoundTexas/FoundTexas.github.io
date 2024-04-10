<?php
// src/Form/MileStoneType.php

namespace App\Form;

use App\Entity\MileStone;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\HiddenType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\CollectionType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class MileStoneFormType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('name', TextType::class)
            ->add('description', TextType::class)
            ->add('startDate', DateType::class, [
                'years' => range(2000, date('Y') + 10),
            ])
            ->add('endDate', DateType::class, ['required' => false])
            ->add('tags', CollectionType::class, [
                'entry_type' => TextType::class,
                'entry_options' => ['label' => false], // Hide labels for individual tag fields
                'allow_add' => true,
                'allow_delete' => true,
                'prototype' => true,
                'by_reference' => false, // Ensure the data is passed by reference
            ]);
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => MileStone::class,
        ]);
    }
}
