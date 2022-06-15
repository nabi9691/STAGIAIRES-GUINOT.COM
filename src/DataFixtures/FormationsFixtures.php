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
        
    for ($f = 1; $f < 500; $f++) 
        {
            
            $formations = new Formations();
            
            $cout = ['1500 euros', '2000 euros', '2500 euros', '3000 euros', '3500 euros', '5000 euros', '4500 euros', '6000 euros'];
            shuffle($cout);

            $civilite = ["Femme", "Homme"];
            shuffle($civilite);
            
            $status = ['Nouveau stagiaire', 'Ancien stagiaire', 'Débutant', 'salarié','Employé', 'Retraité', 'étudiant', 'Reconversion professionnelle'];
            shuffle($status);

            $nom_formation = ['PHP', 'JAVA', 'JAVASCRIPT', 'SYMFONY', 'DOTNET', 'C++', 'SQL', 'PYTHON'];
shuffle($nom_formation);

$sessions = ['Session 01', 'Session 02'];
shuffle($sessions);


$email = $faker->email;

            $formations
            ->setNom($faker->lastName)
            ->setPrenom($faker->firstName)

            ->setTelephone($faker->phoneNumber)
->setEmail($email)
                    ->setNomFormation($nom_formation[0])
                                                        ->setCivilite($civilite[0])
                        ->setObjectifFormation($faker->sentence())
            ->setDateFormation(new \DateTime())
->setCoutFormation($cout[0])
            ->setTitreProfessionnel($faker->sentence())
           ->setPreRequis($faker->sentence())
            ->setSessions($sessions[0])
                ->setStatus($status[0]);
            
            $manager->persist($formations);
       $manager->flush();  
    }   
    }     
}
