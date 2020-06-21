<?php

namespace App\Form;

use App\Entity\Wod;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class WodType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('wod_begginer')
            ->add('wod_intermediate')
            ->add('wod_difficult')
            ->add('description')
            ->add('video')
            ->add('name')
            ->add('image')
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Wod::class,
        ]);
    }
}
