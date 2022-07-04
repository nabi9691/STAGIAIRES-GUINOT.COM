<?php

namespace App\Form;

use App\Entity\Langages;
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

class LangagesFormType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder

        ->add('nom', TextType::class, [
            'label' => 'Le nom du stagiaire :',
            'required' => false
        ])
        
                ->add('nom_langage', ChoiceType::class, [
                'label' => 'Votre langage :',
                'required' => true,
                'choices' => ["Langage PHP" => "Langage PHP", "Langage JAVA" => "Langage JAVA", "Langage JAVASCRIPT" => "Langage JAVASCRIPT", "Langage PYTHON" => "Langage PYTHON", "SYMFONY" => "SYMFONY", "DOTNET" => "DOTNET", "MYSQL" => "MYSQL", "CSS" => "CSS"],
                'multiple' => false,
            ])
            
            ->add('objectif', TextType::class, [
                'label' => 'Objectif du langage :',
                'required' => true
            ])

            ->add('date', BirthdayType::class, [
                'label' => 'Votre date de langage :',
                'required' => false,
                'widget' => 'single_text'
            ])
        
                
            ;   
        
            }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Langages::class,
        ]);
    }
}
