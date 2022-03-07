<?php

namespace App\Form;

<<<<<<< Updated upstream

use App\Entity\User;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\RepeatedType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\SubmitButton;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;



class UserType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('email', EmailType::class,array('attr'=>array('class'=>'form-control')))
            ->add('name', TextType::class,array('attr'=>array('class'=>'form-control')))

            ->add('password', RepeatedType::class, [
                'type' => PasswordType::class,
                'first_options' => ['label' => 'Password'],
                'second_options' => ['label' => 'Confirm Password'],'attr'=>array('class'=>'form-control')
            ])


        ;
    }

    public function configureOptions(OptionsResolver $resolver)
=======
use App\Entity\User;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;

class UserType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('name',TextType::class)
            ->add('fname',TextType::class)

            ->add('gender',ChoiceType::class,[
                'choices' =>[
                    '' =>[
                        'Male' =>'Male',
                        'Female' =>'Female',
                    ],
                ],
            ])
            ->add('num',IntegerType::class)
            ->add('email',EmailType::class)
            ->add('image', FileType::class, array('data_class'=>null,'required'=>false))
            ->add('password',PasswordType::class)
            ->add('confirmpassword',PasswordType::class)
            ->add('birthday',DateType::class)
        ;
    }
    public function configureOptions(OptionsResolver $resolver): void
>>>>>>> Stashed changes
    {
        $resolver->setDefaults([
            'data_class' => User::class,
        ]);
    }
<<<<<<< Updated upstream
}
=======
}
>>>>>>> Stashed changes