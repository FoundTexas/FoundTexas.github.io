<?php

// src/Form/ProjectType.php

namespace App\Form;

use App\Entity\MileStone;
use App\Entity\Organization;
use App\Entity\Project;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\CollectionType;
use Symfony\Component\Form\Extension\Core\Type\FileType;

class ProjectType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('name', TextType::class, [
                'attr' => ['class' => 'form-control'],
                'row_attr' => ['class' => 'form-group'],
            ])
            ->add('description', TextareaType::class, [
                'attr' => ['class' => 'form-control', 'rows' => 5],
                'row_attr' => ['class' => 'form-group'],
            ])
            ->add('fileref', TextType::class, [
                'required' => false,
                'attr' => ['class' => 'form-control'],
                'row_attr' => ['class' => 'form-group'],
            ])
            ->add('iconref', TextType::class, [
                'attr' => ['class' => 'form-control'],
                'row_attr' => ['class' => 'form-group'],
            ])
            ->add('linkref', TextType::class, [
                'attr' => ['class' => 'form-control'],
                'row_attr' => ['class' => 'form-group'],
            ])
            ->add('type', ChoiceType::class, [
                'choices' => [
                    'Web Main' => 'web-main',
                    'Web' => 'web',
                    'Game Main' => 'game-main',
                    'Game' => 'game',
                ],
                'label' => 'Type',
                'required' => true,
                'placeholder' => 'Choose a type',
                'attr' => ['class' => 'form-control'],
                'row_attr' => ['class' => 'form-group'],
            ])
            ->add('mileStone', EntityType::class, [
                'class' => MileStone::class,
                'choice_label' => function (MileStone $mileStone) {
                    $organization = $mileStone->getOrganization();
                    return $mileStone->getId() . ' - ' . ($organization ? $organization->getName() : 'No Organization');
                },
                'attr' => ['class' => 'form-control'],
                'row_attr' => ['class' => 'form-group'],
            ])
            ->add('gallery', CollectionType::class, [
                'entry_type' => TextType::class,
                'entry_options' => [
                    'label' => false,
                    'attr' => ['class' => 'form-control'],
                    'row_attr' => [
                        'class' => 'form-group my-1 row justify-content-center collection-entry'
                    ],
                ],
                'allow_delete' => true,
                'allow_add' => true,
                'by_reference' => false,
                'prototype' => true,
                'prototype_name' => '__name__',
                'attr' => ['class' => 'collection no-add'],
            ])
            ->add('galleryuploads', FileType::class, [
                'label' => 'Upload Images',
                'multiple' => true,
                'mapped' => false,
                'required' => false,
                'attr' => [
                    'class' => 'form-control',
                    'accept' => 'image/*',
                ],
            ]);
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Project::class,
        ]);
    }
}
