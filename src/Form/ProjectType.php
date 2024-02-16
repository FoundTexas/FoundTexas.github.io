<?php

namespace App\Form;

use App\Entity\MileStone;
use App\Entity\Project;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;

class ProjectType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('name')
            ->add('description')
            ->add('fileref')
            ->add('iconref')
            ->add('linkref')
            ->add('type', ChoiceType::class, [
                'choices' => [
                    'Web Main' => 'web-main',
                    'Web' => 'web',
                    'Game Main' => 'game-main',
                    'Game' => 'game',
                ],
                'label' => 'Type',
                'required' => true,
                'placeholder' => 'Choose a type', // Optional placeholder text
            ])
            ->add('mileStone', EntityType::class, [
                'class' => MileStone::class,
                'choice_label' => function (MileStone $mileStone) {
                    return $mileStone->getId() . ' - ' . $mileStone->getName();
                },
            ]);
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Project::class,
        ]);
    }
}
