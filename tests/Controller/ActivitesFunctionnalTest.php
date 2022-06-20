<?php

namespace App\Tests\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class ActivitesFunctionnalTest extends WebTestCase
{
    public function testIndex(): void
    {
        $client = static::createClient();
        $crawler = $client->request('GET', '/activites');

        $this->assertResponseIsSuccessful();
        //$this->assertResponseStatusCodeSame(Response::HTTP_OK);
  }

  public function testFormulaireActivites(): void
    {
        $client = static::createClient();
        $crawler = $client->request('GET', 'formulaireActivites');
                
        $this->assertResponseIsSuccessful();
        //$this->assertResponseStatusCodeSame(Response::HTTP_OK);
  }

  public function testNouvelleActivite(): void
    {
        $client = static::createClient();
        $crawler = $client->request('GET', 'nouvelleActivite');
                
        $this->assertResponseIsSuccessful();
        //$this->assertResponseStatusCodeSame(Response::HTTP_OK);
  }
 
  public function testAfficherActivite(): void
    {
        $client = static::createClient();
        $crawler = $client->request('GET', 'afficherActivite');
                
        $this->assertResponseIsSuccessful();
        //$this->assertResponseStatusCodeSame(Response::HTTP_OK);
  }
  
  public function testmodifierActivite(): void
    {
        $client = static::createClient();
        $crawler = $client->request('GET', 'modifierActivite');
                
        $this->assertResponseIsSuccessful();
        //$this->assertResponseStatusCodeSame(Response::HTTP_OK);
  }

  public function testsupprimerActivite(): void
    {
        $client = static::createClient();
        $crawler = $client->request('GET', 'supprimerActivite');
                
        $this->assertResponseIsSuccessful();
        //$this->assertResponseStatusCodeSame(Response::HTTP_OK);
    
    
      }
    }