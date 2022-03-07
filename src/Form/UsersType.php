<<<<<<< Updated upstream
<<<<<<<< Updated upstream:src/Form/UsersType.php
<?php

namespace App\Form;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\DateTimeType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;



class UsersType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder

            ->add('nom')
            ->add('prenom')
            ->add('telephone')
            ->add('adresse')
            ->add('mail')
            ->add('role')
            ->add('Submit',SubmitType::class)

        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            // Configure your form options here
        ]);
    }
}
========
<?php

namespace App\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
=======
<?php

namespace App\Form;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\DateTimeType;
>>>>>>> Stashed changes
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

<<<<<<< Updated upstream
class HotelType extends AbstractType
=======


class UsersType extends AbstractType
>>>>>>> Stashed changes
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
<<<<<<< Updated upstream
            ->add('nom')
            ->add('address')
            ->add('etoile')
            ->add('etat',ChoiceType::class, [
                'choices'  => [
                    'Disponible' => 'Disponible',
                    'non Disponible' => 'non Disponible',

                ],

            ])
            ->add('nbrChambre')
            ->add('image',FileType::class, array('data_class' => null))
            ->add('description',TextareaType::class)
            ->add('Submit',SubmitType::class)



=======

            ->add('nom')
            ->add('prenom')
            ->add('telephone')
            ->add('adresse')
            ->add('mail')
            ->add('role')
            ->add('Submit',SubmitType::class)

>>>>>>> Stashed changes
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            // Configure your form options here
        ]);
    }
}
<<<<<<< Updated upstream
>>>>>>>> Stashed changes:src/Form/HotelType.php
=======
>>>>>>> Stashed changes
