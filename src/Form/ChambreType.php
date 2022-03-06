<?php

namespace App\Form;

use App\Entity\Chambre;
use Doctrine\DBAL\Types\FloatType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ChambreType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('numChambre')
            ->add('numEtage',ChoiceType::class, [
                'choices'  => [
                    '1' => '1',
                    '2' => '2',
                    '3' => '3',

                ],

            ])


            ->add('typeNbBLit',ChoiceType::class, [
                'choices'  => [
                    'double' => 'double',
                    'single' => 'single',
                    'triple' => 'triple',

                ],

            ])

            ->add('prixParNuit')

            ->add('hotel',EntityType::class,
                array(
                    'class'=> 'App\Entity\Hotel',
                    'choice_label'=>'nom',
                    'multiple'=>false))
        ->add('Submit',SubmitType::class);



    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Chambre::class,
        ]);
    }
}
