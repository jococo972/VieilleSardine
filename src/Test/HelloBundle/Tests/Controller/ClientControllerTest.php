<?php

namespace Test\HelloBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class ClientControllerTest extends WebTestCase
{
    public function testGetclients()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/clients');
    }

}
