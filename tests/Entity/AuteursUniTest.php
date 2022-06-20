<?php

namespace App\Tests\Entity;

use PHPUnit\Framework\TestCase;
use App\Entity\Auteurs;

class AuteursUniTest extends TestCase
{
    public function testAuteursValid(): void
    {

        $auteurs = new Auteurs();
        
        $auteurs
        ->setNom('nom');

        
        
        
        $this->assertTrue($auteurs->getResume() === 'resume');
        
    }

    public function testAuteursVide(): void
    {
        $auteurs = new Auteurs();
        
         $this->assertEmpty($auteurs->getNom());
        
        $this->assertEmpty($auteurs->getResume());
        
        $this->assertEmpty($auteurs->getId());  
    }

       }
