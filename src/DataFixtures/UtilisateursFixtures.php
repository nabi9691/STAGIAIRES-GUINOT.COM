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
        for ($i = 1; $i < 200; $i++) 
        {
            $utilisateurs = new Utilisateurs();
            $civilite = ["Femme", "Homme"];
            shuffle($civilite);
            $status = ['connecter', 'déconnecter', 'anonyme'];
            shuffle($status);
    $roles = ['Anonymes', 'Utilisateurs', 'Usagers', 'Utilisateur connectés', 'Administrateurs'];
            shuffle($roles);

            $utilisateurs
                ->setCivilite($civilite[0])
                ->setNom($faker->lastName)
                ->setPrenom($faker->firstName)
        ->setDateNaiss(new \DateTime())
        ->setAdresse($faker->address)
        ->setEmail($faker->email)
                ->setVille($faker->ville)
                                ->setCodePostal($faker->codePostal)
                ->setPays($faker->pays)
                ->setTelephone($faker->telephone)
                ->setPeriode($faker->periode)
                    ->setStatus($status[0])
                ->setRoles($roles[0]);
                                    
            $manager->persist($utilisateurs);
    
        // Liste des messages :
        for ($j=1; $j<150 ; $j++ ) 
    {
        $status = ['Nouveau Message', 'Ancien message', 'Message Privé', 'Message Annonyme', 'Message Archivé', 'Message Professionnel', 'Message Publicitaire'];
        shuffle($status);
        $pays = ['France', 'Espagne', 'Royaume-Uni', 'Italie', 'Allemagne', 'Russie', 'Nigeria', 'Danemark', 'Irlande', 'Argentine', ];
        shuffle($pays);
        
            $messages = new Messages();
            $messages
            ->setTitre($faker->name)
            ->setResume($faker->sentence())
            ->setCreatedAt(new \DateTime())
            ->setPays($pays[0])
            ->setStatus($status[0])
->setUtilisateur($utilisateurs);
            
                        $manager->persist($messages);
                    }        
        $manager->flush();
    }
    }   
}
