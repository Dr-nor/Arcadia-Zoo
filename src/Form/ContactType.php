<?php

namespace App\Form;

use App\Entity\Contact;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints\Regex;
use Symfony\Component\Validator\Constraints as Assert;

class ContactType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('fullname', TextType::class,[
                'attr'=>[
                    'minlength'=>'2',
                    'maxlength'=>'50',
                ],
                'label'=> 'Nom & Prénom'
            ])
            ->add('email', EmailType::class,[
                'attr'=>[
                    'minlength'=>'2',
                    'maxlength'=>'180',
                ],
                'label'=> 'Adresse email',
                'constraints'=>[
                    new Assert\NotBlank(),
                    new Assert\Email(),
                    new Assert\Length(['min'=>2,'max'=>180])

                ]
            ])
            ->add('phone', NumberType::class, options:[
                'label' => 'Numéro de téléphone',
                'required' => false,
                'constraints' => array(new Regex("/^(\+\d{1,3}[- ]?)?\d{9}$/"))

            ])
            ->add('subject', TextType::class,[
                'attr'=>[
                    'minlength'=>'2',
                    'maxlength'=>'100',
                ],
                'label'=> 'Sujet',
                'constraints'=>[
                    new Assert\NotBlank()
                ]
            ])
            ->add('message', TextareaType::class,[
                'label'=> 'Message',
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Contact::class,
        ]);
    }
}
