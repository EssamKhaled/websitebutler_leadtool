<?php

namespace Tests\CompanyMapperBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class CompanyControllerTest extends WebTestCase
{
    public function testIndex()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/company');

        $this->assertEquals(200, $client->getResponse()->getStatusCode());
        $this->assertContains('Adding a new Company List', $crawler->filter('.container h1')->text());
    }
}
