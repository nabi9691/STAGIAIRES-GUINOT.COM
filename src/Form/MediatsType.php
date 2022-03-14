<?php

namespace App\Form;

use App\Entity\Mediats;
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
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
// use Symfony\Component\Form\Extension\Core\Type\RadioType;
use Symfony\Component\Form\Extension\Core\Type\RepeatedType;



class MediatsType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            
        ->add('titre', TextType::class, [
            'label' => 'Le titre du médiats !',
            'required' => false
        ])
        ->add('contenu', TextType::class, [
            'label' => 'Le contenu de votre médiats :',
            'required' => false
        ])
        
        ->add('date', BirthdayType::class, [
            'label' => 'Date de la création du médiats :',
            'required' => false,
            'widget' => 'single_text'
        ])
        ->add('status', TextType::class, [
            'label' => 'Le status du médiats :',
            'required' => true
        ])
        ->add('categories', TextType::class, [
            'label' => 'La catégorie du médiat :',
            'required' => true
        ])
        ->add('auteurs', TextType::class, [
            'label' => 'auteur du médiat :',
            'required' => true
        ])
        ->add('utilisateur', TextType::class, [
            'label' => 'Nom de l utilisateur :',
            'required' => true
        ])
        


        ;
        }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Mediats::class,
        ]);
    }
}
