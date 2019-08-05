<?php

namespace App\Tests;
use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class TestControllerTest extends WebTestCase
{
    /*public function testIndex()
    {
        $client = static::createClient([],[
            'PHP_AUTH_USER'=>"ousseynou@gmail.com",
            'PHP_AUTH_PW'=>"passer"
        ]);
        $crawler = $client->request('GET', '/api/listepartenaire');
        $rep=$client->getResponse();
        $this->assertSame(200,$client->getResponse()->getStatusCode());
        //$this->assertJsonStringEqualsJsonString($jsonstring,$rep->getContent());
    }*/

    public function testAjoutpartenaire()
    {
        $client = static::createClient([],[
            'PHP_AUTH_USER'=>"sallawa622@gmail.com",
            'PHP_AUTH_PW'=>"passer"
        ]);
        $crawler = $client->request('POST', '/api/partenaire',[],[],
        ['CONTENT_TYPE'=>"application/json"],
        '{
            "ninea":"0001L",
            "raisonsociale":"Ndoyeservice",
            "adresse":"Dakar",
            "email":"ndoye@gmail.com",
            "telephone":"787878795",
            "prenom":"awa",
            "nom":"sall"
            }');
        $rep=$client->getResponse();
        var_dump($rep);
        $this->assertSame(201,$client->getResponse()->getStatusCode());
    }

}
