<?php

namespace App\DataFixtures;

use App\Entity\Langages;
//use App\Entity\Utilisateurs;
//use App\Entity\Contacts;
//use App\Entity\Medias;


use Faker; 
use Faker\Factory;

use Doctrine\Persistence\ObjectManager;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Symfony\Component\Security\Core\Role\Role;
use Symfony\Component\Validator\Constraints\DateTime;

class LangagesFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $faker = Faker\Factory::create('fr_FR');
            
//         Liste des langages :
        
    for ($l = 1; $l < 10; $l++) 
        {
            
            $langages = new Langages();
            
            $cout = ['1500 euros', '2000 euros', '2500 euros', '3000 euros', '3500 euros', '5000 euros', '4500 euros', '6000 euros'];
            shuffle($cout);

            $civilite = ["Femme", "Homme"];
            shuffle($civilite);
            
            $status = ['Nouveau stagiaire', 'Ancien stagiaire', 'Débutant', 'salarié','Employé', 'Retraité', 'étudiant', 'Reconversion professionnelle'];
            shuffle($status);

            $nom_langage = ['PHP', 'JAVA', 'JAVASCRIPT', 'SYMFONY', 'DOTNET', 'C++', 'SQL', 'PYTHON'];
shuffle($nom_langage);

$sessions = ['Session 01', 'Session 02'];
shuffle($sessions);
$coefficient = ['1', '3', '4', '5', '6'];
shuffle($coefficient);
$email = $faker->email;

            $langages
            ->setNom($faker->lastName)
//            ->setTelephone($faker->phoneNumber)
//->setEmail($email)
                    ->setNomLangage($nom_langage[0])
                                                        //->setCivilite($civilite[0])
                        ->setObjectif($faker->sentence())
            ->setDate(new \DateTime())
->setCoutFormation($cout[0])
->setCoefficient($coefficient[0])
            //->setTitreProfessionnel($faker->sentence())
           //->setPreRequis($faker->sentence())
            //->setSessions($sessions[0])
                ->setStatus($status[0])
            ;
            $manager->persist($langages);
       $manager->flush();  
    }   
    }     
}
