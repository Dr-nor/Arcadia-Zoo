<?php

namespace App\Form;

use App\Entity\Testimonial;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints\Regex;
use Symfony\Component\Security\Core\Authorization\AuthorizationCheckerInterface;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Validator\Constraints as Assert;




class TestimonialType extends AbstractType
{
    private $authChecker;

    public function __construct(AuthorizationCheckerInterface $authChecker)
    {
        $this->authChecker = $authChecker;
    }
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {        
        $builder
            ->add('pseudonym')
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
            ->add('comment')
            ->add('note')
            ;
            if (true === $this->authChecker->isGranted('ROLE_ADMIN')) {
                    $builder->add('active');
            }
        
            
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Testimonial::class,
        ]);
    }
}
