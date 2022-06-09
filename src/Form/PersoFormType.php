<?php

namespace App\Form;

use App\Entity\Utilisateurs;
use App\Entity\Messages;
use App\Entity\contacts;
use App\Entity\activites;

use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\Extension\Core\Type\BirthdayType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Validator\Constraints\IsTrue;
use Symfony\Component\Validator\Constraints\Length;
use Symfony\Component\Validator\Constraints\NotBlank;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\CollectionType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
// use Symfony\Component\Form\Extension\Core\Type\RadioType;
use Symfony\Component\Form\Extension\Core\Type\RepeatedType;

class PersoFormType extends AbstractType
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
                'required' => true,
                'choices' => ["Madame" => "Madame", "Monsieur" => "Monsieur"],
                'multiple' => false,
            ])

            ->add('nom', TextType::class, [
                'label' => 'Votre nom',
                'required' => true
            ])
            ->add('prenom', TextType::class, [
                'label' => 'Votre prénom',
                'required' => true
            ])
            
            ->add('adresse', TextType::class, [
                'label' => 'Votre adresse :',
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
                        
            ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Utilisateurs::class,
        ]);
    }
}
