<?php

namespace App\Form;

use App\Entity\Reservation;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\DateTimeType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\FormTypeInterface;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;





class ReservationType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('typePension',ChoiceType::class, [
                'choices'  => [
                    'logement petit dejeuner' => 'logement petit dejeuner',
                    'demi pension' => 'demi pension',
                    'pension complete' => 'pension complete',

                ],

            ])
            ->add('darrive', DateTimeType::class, [
                'date_label' => 'Starts On'])
            ->add('dquitte', DateTimeType::class, [
                'date_label' => 'Starts On'])
            ->add('Submit',SubmitType::class)


        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Reservation::class,
        ]);
    }
}
