<?php

namespace App\DataFixtures;

use App\Entity\Formations;
//use App\Entity\Utilisateurs;
//use App\Entity\Contacts;
//use App\Entity\Medias;


use Faker; 
use Faker\Factory;

use Doctrine\Persistence\ObjectManager;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Symfony\Component\Security\Core\Role\Role;
use Symfony\Component\Validator\Constraints\DateTime;

class FormationsFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $faker = Faker\Factory::create('fr_FR');
            
//         Liste des formations :
        
    for ($f = 1; $f < 10; $f++) 
        {
            
            $formations = new Formations();
            
            $cout = ['1500 euros', '2000 euros', '2500 euros', '3000 euros', '3500 euros', '5000 euros', '4500 euros', '6000 euros'];
            shuffle($cout);

            $civilite = ["Femme", "Homme"];
            shuffle($civilite);
            

            $nom_formation = ['PHP', 'JAVA', 'JAVASCRIPT', 'SYMFONY', 'DOTNET', 'C++', 'SQL', 'PYTHON'];
shuffle($nom_formation);



$email = $faker->email;

            $formations
            ->setCivilite($civilite[0])
            ->setNom($faker->lastName)
            ->setTelephone($faker->phoneNumber)
            ->setEmail($email)
            ->setNomFormation($nom_formation[0])     
            ->setDateFormation(new \DateTime())
            ->setCoutFormation($cout[0])
        
           ;
            
            $manager->persist($formations);
       $manager->flush();  
    }   
    }     
}
