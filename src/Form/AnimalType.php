<?php

namespace App\Form;


use App\Entity\Habitat;
use App\Entity\Race;
use App\Entity\Animal;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;


class AnimalType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('name')
            ->add('description')
            ->add('medianlife')
            ->add('diet')
            ->add('weight')
            ->add('size')
            ->add('status', ChoiceType::class ,[
                'choices' => [
                    'Non menacé' => 'Non menacé',
                    'Vulnérable' => 'Vulnérable',
                    'En danger' => 'En danger',
                    'En danger critique'=>'En danger critique',
                    'Préoccupation mineure'=>'Préoccupation mineure',
                    'Quasi menacé'=>'Quasi menacé',
                ]
            ])
            ->add('images', FileType::class, [
                'label' => false,
                'multiple' => true,
                'mapped' => false,
                'required' => false,
            ])
            
            ->add('race_id', EntityType::class, [
                'class' => Race::class,
                'choice_label' => 'name',
            ])
            ->add('habitat_id', EntityType::class, [
                'class' => Habitat::class,
                'choice_label' => 'title',
            ])

    
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Animal::class,
        ]);
    }
}
