<?php

namespace App\Tests\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class FormationsFunctionnalTest extends WebTestCase
{
    public function testIndex(): void
    {
        $client = static::createClient();
        $crawler = $client->request('GET', '/formations');

        $this->assertResponseIsSuccessful();
        //$this->assertResponseStatusCodeSame(Response::HTTP_OK);
  }

  public function testFormulaireFormations(): void
    {
        $client = static::createClient();
        $crawler = $client->request('GET', 'formulaireFormation');
                
        $this->assertResponseIsSuccessful();
        //$this->assertResponseStatusCodeSame(Response::HTTP_OK);
  }

  public function testNouvelleFormation(): void
    {
        $client = static::createClient();
        $crawler = $client->request('GET', 'nouvelleFormation');
                
        $this->assertResponseIsSuccessful();
        //$this->assertResponseStatusCodeSame(Response::HTTP_OK);
  }
 
  public function testAfficherFormation(): void
    {
        $client = static::createClient();
        $crawler = $client->request('GET', 'afficherFormation');
                
        $this->assertResponseIsSuccessful();
        //$this->assertResponseStatusCodeSame(Response::HTTP_OK);
  }
  
  public function testmodifierFormation(): void
    {
        $client = static::createClient();
        $crawler = $client->request('GET', 'modifierFormation');
                
        $this->assertResponseIsSuccessful();
        //$this->assertResponseStatusCodeSame(Response::HTTP_OK);
  }

  public function testsupprimerFormations(): void
    {
        $client = static::createClient();
        $crawler = $client->request('GET', 'supprimerFormation');
                
        $this->assertResponseIsSuccessful();
        //$this->assertResponseStatusCodeSame(Response::HTTP_OK);
    
    
      }
    }