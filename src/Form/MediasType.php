<?php

namespace App\Form;

use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use App\Entity\Medias;

use App\Entity\Categories;
//use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
//use Symfony\Component\Form\FormBuilderInterface;
//use Symfony\Component\OptionsResolver\OptionsResolver;

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
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
// use Symfony\Component\Form\Extension\Core\Type\RadioType;
use Symfony\Component\Form\Extension\Core\Type\RepeatedType;

class MediasType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            
        ->add('imageFile', FileType::class, [
            'label' => 'Uploader votre image :',
            'required' => true
        ])
        ->add('contenu', TextareaType::class)
        ->add('date', BirthdayType::class, [
            'label' => 'Votre date importation ',
            'required' => false,
            'widget' => 'single_text'
        ])

        ->add('categories', EntityType::class, [
            'label' => 'Catégorie du médias :',
                 //'placeholder' => 'Sélectionner',
                 // looks for choices from this entity
                 'class' =>Categories::class,
                 // Sur quelle propriete je fais le choix
                 'choice_label' => 'nom',
                 'mapped' => false,

                 // used to render a select box, check boxes or radios
             // 'multiple' => false,
                //'expanded' => true,)
//            'required' => false
        ])
        
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Medias::class,
        ]);
    }
}
