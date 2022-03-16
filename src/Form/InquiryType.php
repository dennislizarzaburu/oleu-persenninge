<?php

namespace App\Form;

use App\Entity\Inquiry;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\RadioType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class InquiryType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('firstname', null, [
                'label' => 'form.fields.firstname'
            ])
            ->add('lastname', null, [
                'label' => 'form.fields.lastname'
            ])
            ->add('email', null, [
                'label' => 'form.fields.email'
            ])
            ->add('phone', null, [
                'label' => 'form.fields.phone'
            ])
            ->add('gender', ChoiceType::class, [
                'choices' => [
                    'Herr' => 'male',
                    'Female' => 'female'
                ],
                'expanded' => true,
                'multiple' => false
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Inquiry::class,
        ]);
    }
}
