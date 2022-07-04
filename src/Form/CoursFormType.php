<?php

namespace App\Form;

use App\Entity\Cours;
 use App\Entity\Langages;

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

class CoursFormType extends AbstractType
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
        
        ->add('titre_cours', TextType::class, [
            'label' => 'Le titre du cours :',
            'required' => false
        ])

        ->add('resume', TextType::class, [
            'label' => 'Le résumé du cours :',
            'required' => false
        ])

                ->add('type_cours', ChoiceType::class, [
                'label' => 'Le type du cours :',
                'required' => true,
                'choices' => ["Cours en PHP" => "Cours en PHP", "Cours en  fichiers Word" => "Cours en fichiers Word", "Cours en vidéo" => "Cours en vidéo", "Cours en présentiel" => "Cours en présentiel", "Cours en distanciel" => "Cours en distanciel", "Cours théoriques" => "Cours théoriques", "Cours en traveaux-pratiques" => "Cours en traveaux-pratiques", "Cours et exercices" => "Cours et exercices"],
                'multiple' => false,
            ])
            
            ->add('date_cours', BirthdayType::class, [
                'label' => 'La date de votre cours :',
                'required' => false,
                'widget' => 'single_text'
            ])
        
            ;   
        
            }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Cours::class,
        ]);
    }
}
