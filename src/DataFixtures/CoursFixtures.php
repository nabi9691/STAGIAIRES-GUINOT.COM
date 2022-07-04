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
                        //->setLangages($langages)

           ;
            
            $manager->persist($cours);
        
            $manager->flush();  
    }   
    }     
}
