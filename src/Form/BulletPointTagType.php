<?php

// src/Form/BulletPointTagType.php

namespace App\Form;

use App\Entity\BulletPointTag;
use App\Entity\Tag;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class BulletPointTagType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('tag', EntityType::class, [
                'class' => Tag::class,
                'choice_label' => 'name',
                'attr' => ['class' => 'form-control'],
                'row_attr' => ['class' => 'form-group'],
            ]);
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => BulletPointTag::class,
        ]);
    }
}
