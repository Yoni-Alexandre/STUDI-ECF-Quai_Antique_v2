<?php

namespace App\Form;

use App\Entity\Reservations;
use Cassandra\Type\UserType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\TimeType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints\GreaterThan;
use DateTime;

class ReservationType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('firstname', TextType::class, [
                'label' => 'Votre prénom',
                'attr' => [
                    'placeholder' => 'Merci de saisir de votre prénom',
                    'class' => 'form-control'
                ],
            ])
            ->add('lastname', TextType::class, [
                'label' => 'Votre nom',
                'attr' => [
                    'placeholder' => 'Merci de saisir de votre nom',
                    'class' => 'form-control'
                ],
            ])
            ->add('numberOfGuest', IntegerType::class, [
                'label' => 'Un nombre de personnes',
                'attr' => [
                    'placeholder' => 'Merci de saisir le nombre de personnes',
                    'class' => 'form-control'
                ],
            ])
            ->add('ReservationDate', DateType::class, [
                'label' => 'Choisir une date',
                'attr' => [
                    'class' => 'form-control'
                ],
                'data' => new DateTime(),
                'constraints' => [
                    new GreaterThan('today'),
                ],
            ])
            ->add('reservationTime', TimeType::class, [
                'label' => 'Un horaire',
                'attr' => [
                    'class' => 'form-control',
                ],
                'data' => new DateTime(),
                'minutes' => range(0, 30, 30),
                'html5' => false
            ])
            ->add('allergie', TextType::class, [
                'label' => 'Signaler vos allergies ?',
                'attr' => [
                    'placeholder' => 'Crustacés, gluten, lactose, etc...',
                    'class' => 'form-control'
                ],
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Reservations::class,
        ]);
    }
}
