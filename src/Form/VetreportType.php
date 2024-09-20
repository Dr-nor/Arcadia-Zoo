<?php

namespace App\Form;

use App\Entity\Animal;
use App\Entity\Vetreport;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;


class VetreportType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('state')
            ->add('diet')
            ->add('grammage')
            ->add('detail')
            ->add('animal_id', EntityType::class, [
                'class' => Animal::class,
                'choice_label' => 'name',
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Vetreport::class,
        ]);
    }
}
