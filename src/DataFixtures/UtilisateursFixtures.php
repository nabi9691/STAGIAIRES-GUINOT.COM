<?php

namespace App\DataFixtures;

use Faker; 
use Faker\Factory;

//use App\Entity\mediats;
use App\Entity\Mediats;

use App\Entity\Utilisateurs;
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
        for ($i = 1; $i < 150; $i++) 
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
                ->setNom($faker->lastName)
        ->setPrenom($faker->firstName)
        ->setCivilite($civilite[0])
        ->setDateDeNaissance(new \DateTime())
        ->setTelephone($faker->phoneNumber)
        ->setEmail($email)
        ->setAdresse($faker->address)
        ->setCodePostal($faker->postcode)
        ->setVille($faker->city)
        //->setDepartement($faker->city)
                        ->setPays($faker->city)
        ->setLogin($email)
->setPassword($faker->password())
//->setIsVerified(true)
            ->setStatus($status[0])
            ->setRoles($roles[0]);
                            
    $manager->persist($utilisateurs);

            // Liste des médias :
for ($j = 1; $j < 100; $j++) 
{
    $mediats = new Mediats();

            $mediats
            ->setImageName($faker->name)
            ->setContenu($faker->sentence())
            ->setDate(new \DateTime())
            ->setUtilisateurs($utilisateurs);
    
                        $manager->persist($mediats);
}
    $manager->flush();  
        }
    }
}
