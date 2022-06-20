<?php

namespace App\Tests\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class LangagesFunctionnalTest extends WebTestCase
{
    public function testIndex(): void
    {
        $client = static::createClient();
        $crawler = $client->request('GET', '/langages');

        $this->assertResponseIsSuccessful();
        //$this->assertResponseStatusCodeSame(Response::HTTP_OK);
  }

  public function testFormulaireLangages(): void
    {
        $client = static::createClient();
        $crawler = $client->request('GET', 'formulaireLangages');
                
        $this->assertResponseIsSuccessful();
        //$this->assertResponseStatusCodeSame(Response::HTTP_OK);
  }

  public function testNouveauLangage(): void
    {
        $client = static::createClient();
        $crawler = $client->request('GET', 'nouveauLangage');
                
        $this->assertResponseIsSuccessful();
        //$this->assertResponseStatusCodeSame(Response::HTTP_OK);
  }
 
  public function testAfficherLangage(): void
    {
        $client = static::createClient();
        $crawler = $client->request('GET', 'afficherLangage');
                
        $this->assertResponseIsSuccessful();
        //$this->assertResponseStatusCodeSame(Response::HTTP_OK);
  }
  
  public function testmodifierLangage(): void
    {
        $client = static::createClient();
        $crawler = $client->request('GET', 'modifierLangage');
                
        $this->assertResponseIsSuccessful();
        //$this->assertResponseStatusCodeSame(Response::HTTP_OK);
  }

  public function testsupprimerLangage(): void
    {
        $client = static::createClient();
        $crawler = $client->request('GET', 'supprimerLangage');
                
        $this->assertResponseIsSuccessful();
        //$this->assertResponseStatusCodeSame(Response::HTTP_OK);
    
    
      }
    }