<?php

// src/Form/MileStoneFormType.php

namespace App\Form;

use App\Entity\MileStone;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\CollectionType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class MileStoneFormType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('name', TextType::class, [
                'attr' => ['class' => 'form-control'],
                'row_attr' => ['class' => 'form-group'],
            ])
            ->add('startDate', DateType::class, [
                'years' => range(2000, date('Y') + 10),
                'widget' => 'single_text',
                'attr' => ['class' => 'form-control'],
                'row_attr' => ['class' => 'form-group'],
            ])
            ->add('endDate', DateType::class, [
                'required' => false,
                'widget' => 'single_text',
                'attr' => ['class' => 'form-control'],
                'row_attr' => ['class' => 'form-group'],
            ])
            ->add('description', TextType::class, [
                'attr' => ['class' => 'form-control'],
                'row_attr' => ['class' => 'form-group'],
            ])
            ->add('bulletpoints', CollectionType::class, [
                'label' => 'Bullet Points',
                'entry_type' => BulletPointType::class,
                'entry_options' => [
                    'label' => false,
                ],
                'allow_add' => true,
                'allow_delete' => true,
                'prototype' => true,
                'by_reference' => false,
                'attr' => ['class' => 'collection'],
            ]);
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => MileStone::class,
        ]);
    }
}
