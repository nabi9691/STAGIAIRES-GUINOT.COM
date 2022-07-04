<?php

namespace App\DataFixtures;

use App\Entity\Cours;
//use App\Entity\Utilisateurs;
//use App\Entity\Contacts;
use App\Entity\Formations;
use App\Entity\Langages;

use Faker; 
use Faker\Factory;

use Doctrine\Persistence\ObjectManager;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Symfony\Component\Security\Core\Role\Role;
use Symfony\Component\Validator\Constraints\DateTime;

class CoursFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $faker = Faker\Factory::create('fr_FR');

        //         Liste des formations :
        
    for ($f = 1; $f < 10; $f++) 
    {
        
        $formations = new Formations();
        //$utilisateurs = new Utilisateurs();
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

//         Liste des langages :
        
for ($l = 1; $l < 10; $l++) 
{
    
    $langages = new Langages();
    
    $cout_formation = ['1500 euros', '2000 euros', '2500 euros', '3000 euros', '3500 euros', '5000 euros', '4500 euros', '6000 euros'];
    shuffle($cout_formation);

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

                                                //->setCivilite($civilite[0])
    ->setNom($faker->lastName)
    //->setPrenom($faker->firstName)
    //->setTelephone($faker->phoneNumber)
//->setEmail($email)
            ->setNomLangage($nom_langage[0])
                                                                ->setObjectif($faker->sentence())
    ->setDate(new \DateTime())
->setCoutFormation($cout_formation[0])
//->setCoefficient($coefficient[0])
    ->setTitreProfessionnel($faker->sentence())
   //->setPreRequis($faker->sentence())
    //->setSessions($sessions[0])
        ->setStatus($status[0])
->setFormations($formations)        
        
;
    
    $manager->persist($langages);

        //         Liste des cours :
        
    for ($c = 1; $c < 10; $c++) 
        {
            
            $cours = new Cours();
            
            $cout = ['1500 euros', '2000 euros', '2500 euros', '3000 euros', '3500 euros', '5000 euros', '4500 euros', '6000 euros'];
            shuffle($cout);

            $civilite = ["Femme", "Homme"];
            shuffle($civilite);
            
            $titre_cours = ['PHP', 'JAVA', 'JAVASCRIPT', 'SYMFONY', 'DOTNET', 'C++', 'SQL', 'PYTHON'];
shuffle($titre_cours);
$type_cours = ["Cours en PHP", "Cours en fichiers Word", "Cours en vidéo", "Cours en présentiel", "Cours en distanciel", "Cours théoriques", "Cours en traveaux-pratiques", "Cours et exercices"];
shuffle($type_cours);
$resume = ['Nouveau stagiaire', 'Ancien stagiaire', 'Débutant', 'salarié','Employé', 'Retraité', 'étudiant', 'Reconversion professionnelle'];
    shuffle($resume);

$email = $faker->email;

            $cours
            ->setCivilite($civilite[0])
            ->setNom($faker->lastName)
            ->setResume($resume[0])
                        ->setTitreCours($titre_cours[0])
                        ->setTypeCours($type_cours[0])
                        ->setDateCours(new \DateTime())
                        ->setLangages($langages)

           ;
            
            $manager->persist($cours);
        }
    }
            $manager->flush();  
    }   
    }     
}
