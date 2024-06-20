<?php

namespace App\Form;

use App\Entity\MileStone;
use App\Entity\Project;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;

class ProjectType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
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
                    return $mileStone->getId() . ' - ' . $mileStone->getName();
                },
                'attr' => ['class' => 'form-control'],
                'row_attr' => ['class' => 'form-group'],
            ]);
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Project::class,
        ]);
    }
}
