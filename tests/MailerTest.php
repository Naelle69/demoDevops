<?php

namespace App\Tests;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class MailerTest extends WebTestCase
{
    public function testMailSend(): void
    {
        $client = static::createClient();
        $client->request('GET', '/send-mail');

        $this->assertResponseIsSuccessful();
        $this->assertEmailCount(1);
    }
}
