<?php

// src/Form/BulletPointType.php

namespace App\Form;

use App\Entity\BulletPoint;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\CollectionType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class BulletPointType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('description', TextType::class, [
                'attr' => ['class' => 'form-control'],
                'row_attr' => ['class' => 'form-group'],
            ])
            ->add('bulletPointTags', CollectionType::class, [
                'label' => 'Tags',
                'entry_type' => BulletPointTagType::class,
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
            'data_class' => BulletPoint::class,
        ]);
    }
}
