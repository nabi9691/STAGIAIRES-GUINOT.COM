<?php

namespace App\DataFixtures;

use App\Entity\Messages;
use App\Entity\Utilisateurs;
//use App\Entity\Contacts;
//use App\Entity\Medias;

use Faker; 
use Faker\Factory;

use Doctrine\Persistence\ObjectManager;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Symfony\Component\Security\Core\Role\Role;
use Symfony\Component\Validator\Constraints\DateTime;

class MessagesFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $faker = Faker\Factory::create('fr_FR');
        
// Liste des utilisateurs :
for ($u = 1; $u < 100; $u++) 
{
    $utilisateurs = new Utilisateurs();
    $email = $faker->email;

$utilisateurs
//->setFormation($formation)
//->setCivilite($civilite)
->setNom($nom)
->setPrenom($prenom)
->setDateDeNaissance($date_de_naissance)
->setAdresse($adresse)
->setCodePostal($code_postal)
->setVilles($villes)
//->setDepartement($departement)
//->setPays($pays)
->setTelephone($telephone)
->setEmail($email)
//->setStatus($status)
->setMessagesEnvoyer($messages_envoyer)
->setMessagesReçu($messages_reçu)
->setMedias($medias);

$manager->persist($utilisateurs);
    
        // Liste des messages :
        for ($m = 1; $m < 100; $m++) 
        {
            $messages = new Messages();
            //$expediteur = new Expediteur();
            //$destinataire = new Destinataire();
$utilisateurs = new Utilisateurs();

            $email = $faker->email;

            $messages
            ->setTitreMessage($faker->name)
            ->setContenuMessage($faker->sentence())
            ->setCreerDate(new \DateTime())
            ->setSiMessageLu($faker->sentence())
            ->setExpediteur($utilisateurs)
            ->setDestinataire($utilisateurs);
            
            $manager->persist($messages);
        }    
       $manager->flush();  
    }   
    }     
}
