<?php

namespace App\Tests\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class CoursFunctionnalTest extends WebTestCase
{
    public function testIndex(): void
    {
        $client = static::createClient();
        $crawler = $client->request('GET', '/cours');

        $this->assertResponseIsSuccessful();
        //$this->assertResponseStatusCodeSame(Response::HTTP_OK);
  }

  public function testFormulaireCours(): void
    {
        $client = static::createClient();
        $crawler = $client->request('GET', 'formulaireCours');
                
        $this->assertResponseIsSuccessful();
        //$this->assertResponseStatusCodeSame(Response::HTTP_OK);
  }

  public function testNouvelleCours(): void
    {
        $client = static::createClient();
        $crawler = $client->request('GET', 'nouvelleCours');
                
        $this->assertResponseIsSuccessful();
        //$this->assertResponseStatusCodeSame(Response::HTTP_OK);
  }
 
  public function testAfficherCours(): void
    {
        $client = static::createClient();
        $crawler = $client->request('GET', 'afficherCours');
                
        $this->assertResponseIsSuccessful();
        //$this->assertResponseStatusCodeSame(Response::HTTP_OK);
  }
  
  public function testmodifierCours(): void
    {
        $client = static::createClient();
        $crawler = $client->request('GET', 'modifierCours');
                
        $this->assertResponseIsSuccessful();
        //$this->assertResponseStatusCodeSame(Response::HTTP_OK);
  }

  public function testsupprimerCours(): void
    {
        $client = static::createClient();
        $crawler = $client->request('GET', 'supprimerCours');
                
        $this->assertResponseIsSuccessful();
        //$this->assertResponseStatusCodeSame(Response::HTTP_OK);
    
    
      }
    }