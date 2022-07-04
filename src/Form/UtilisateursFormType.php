<?php

namespace App\Form;

use App\Entity\Utilisateurs;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\BirthdayType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Validator\Constraints\IsTrue;
use Symfony\Component\Validator\Constraints\Length;
use Symfony\Component\Validator\Constraints\NotBlank;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
// use Symfony\Component\Form\Extension\Core\Type\RadioType;
use Symfony\Component\Form\Extension\Core\Type\RepeatedType;

class UtilisateursFormType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
        ->add('formation', ChoiceType::class, [
            'label' => 'Votre formation :',
            'required' => true,
            'choices' => ["PINFO" => "PINFO", "DA" => "DA", "PREPA" => "PREPA", "CRCD" => "CRCD", "EAA" => "EAA", "DWWM" => "DWWM", "PMTA" => "PMTA", "AAI" => "AAI"],
            'multiple' => false,
        ])
        
        ->add('civilite', ChoiceType::class, [
                'label' => 'Votre civilité',
                'required' => false,
                'choices' => ["Madame" => "Madame", "Monsieur" => "Monsieur"],
                'multiple' => false,
            ])

            ->add('nom', TextType::class, [
                'label' => 'Votre nom',
                'required' => false
            ])
            
            ->add('prenom', TextType::class, [
                'label' => 'Votre prénom',
                'required' => false
            ])

            ->add('adresse', TextType::class, [
                'label' => 'Votre adresse :',
                'required' => true
            ])

            ->add('code_postal', TextType::class, [
                'label' => 'Votre code postal :',
                'required' => true
            ])

            ->add('villes', TextType::class, [
                'label' => 'Votre ville :',
                'required' => true
            ])

            ->add('telephone', TextType::class, [
                'label' => 'Votre téléphone :',
                'required' => true
            ])

            ->add('email', TextType::class, [
                'label' => 'Votre Email :',
                'required' => true
            ])

            ->add('password', PasswordType::class, [
                'mapped' => false,
               'required' => true,
               'label' => 'Entrez votre mot de passe',
               'constraints' => [
                   new Length([
                       'min' => 6,
                       'minMessage' => 'ça suffit {{ limit }} caractères !',
                       // max length allowed by Symfony for security reasons
                       'max' => 4096,
                   ]),
               ]
           ])
           

            ->add('medias', MediasType::class, [
                'mapped' => false,
                'by_reference' => false,
                'required' => false
                ])

            ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Utilisateurs::class,
        ]);
    }
}
