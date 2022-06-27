<?php

namespace App\Form;

use App\Entity\Formations;
// use App\Entity\Messages;

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

class FormationsFormType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
        ->add('civilite', ChoiceType::class, [
            'label' => 'Votre civilité',
            'required' => true,
            'choices' => ["Madame" => "Madame", "Monsieur" => "Monsieur"],
            'multiple' => false,
        ])

        ->add('nom', TextType::class, [
            'label' => 'Le nom du stagiaire :',
            'required' => false
        ])
        
        ->add('telephone', TextType::class, [
            'label' => 'Le numéro du téléphone du stagiaire :',
            'required' => true
        ])
        ->add('email', TextType::class, [
            'label' => 'Email du stagiaire :',
            'required' => true
        ])


                ->add('nom_formation', ChoiceType::class, [
                'label' => 'Votre formation :',
                'required' => true,
                'choices' => ["Langage PHP" => "Langage PHP", "Langage JAVA" => "Langage JAVA", "Langage JAVASCRIPT" => "Langage JAVASCRIPT", "Langage PYTHON" => "Langage PYTHON", "SYMFONY" => "SYMFONY", "DOTNET" => "DOTNET", "MYSQL" => "MYSQL", "CSS" => "CSS"],
                'multiple' => false,
            ])
            
          

            ->add('date_formation', BirthdayType::class, [
                'label' => 'Votre date de formation :',
                'required' => false,
                'widget' => 'single_text'
            ])
        
            ->add('cout_formation', TextType::class, [
                'label' => 'Le cout de la formation :',
                'required' => true
            ])
            
           
            ;   
        
            }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Formations::class,
        ]);
    }
}
