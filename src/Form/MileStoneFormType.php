<?php

// src/Form/MileStoneFormType.php

namespace App\Form;

use App\Entity\MileStone;
use App\Entity\Organization;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\CollectionType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class MileStoneFormType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('organization', EntityType::class, [
                'class' => Organization::class,
                'choice_label' => function (Organization $organization) {
                    return $organization->getId() . ' - ' . $organization->getName();
                },
                'attr' => ['class' => 'form-control'],
                'row_attr' => ['class' => 'form-group'],
            ])
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
            ->add('description', TextareaType::class, [
                'attr' => ['class' => 'form-control', 'rows' => 5],
                'row_attr' => ['class' => 'form-group'],
            ])
            ->add('bulletpoints', CollectionType::class, [
                'label' => 'Bullet Points',
                'entry_type' => BulletPointType::class,
                'entry_options' => [
                    'label' => false,
                    'attr' => ['class' => 'ps-4'],
                ],
                'allow_add' => true,
                'allow_delete' => true,
                'prototype' => true,
                'by_reference' => false,
                'attr' => ['class' => 'collection ps-2'],
            ]);
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => MileStone::class,
        ]);
    }
}
