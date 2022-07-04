<?php

namespace App\DataFixtures;

use App\Entity\Messages;
use App\Entity\Utilisateurs;

use Faker; 
use Faker\Factory;

use Doctrine\Persistence\ObjectManager;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Symfony\Component\Security\Core\Role\Role;
use Symfony\Component\Validator\Constraints\DateTime;

class UtilisateursFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $faker = Faker\Factory::create('fr_FR');
        
        // Liste des utilisateurs :
        for ($i = 1; $i < 20; $i++) 
        {
            $utilisateurs = new Utilisateurs();
            $civilite = ["Femme", "Homme"];
            shuffle($civilite);
            $status = ['connecter', 'déconnecter', 'anonyme'];
            shuffle($status);
    $roles = ['ROLE_ANONYMOUSE', 'ROLE_USER', 'ROLE_ADMIN', 'ROLE_ABONNER'];
            shuffle($roles);

$email = $faker->email;

            $utilisateurs
                ->setCivilite($civilite[0])
                ->setNom($faker->lastName)
                ->setPrenom($faker->firstName)
        
                ->setDateDeNaissance(new \DateTime())
        ->setAdresse($faker->address)
        ->setEmail($email)
        ->setIsVerified(true)
        ->setLogin($email)
        ->setPassword($faker->password())
                ->setVilles($faker->city)
                                ->setCodePostal($faker->postcode)
                ->setPays($faker->city)
                ->setTelephone($faker->phoneNumber)
                //->setPeriode($faker->date())
                    ->setStatus($status[0])
                ->setRoles($roles[0]);
                                    
            $manager->persist($utilisateurs);
    
        // Liste des messages :
        for ($j=1; $j<20 ; $j++ ) 
    {
        $status = ['Nouveau Message', 'Ancien message', 'Message Privé', 'Message Annonyme', 'Message Archivé', 'Message Professionnel', 'Message Publicitaire'];
        shuffle($status);
        $pays = ['France', 'Espagne', 'Royaume-Uni', 'Italie', 'Allemagne', 'Russie', 'Nigeria', 'Danemark', 'Irlande', 'Argentine', ];
        shuffle($pays);
$utilisateurs = ['Gilles', 'Paul', 'Marie', 'Richard', 'Bernard', 'Julie', 'Omar', 'Sidi', 'Pierre', 'Caroline'];
shuffle($utilisateurs);
        
            $messages = new Messages();
            $messages
            ->setTitreMessage($faker->name)
            ->setContenuMessage($faker->sentence())
            ->setCreerDate(new \DateTime());
        
                        $manager->persist($messages);
                    }        
       $manager->flush();  
    }
    }     
}
