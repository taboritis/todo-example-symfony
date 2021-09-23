<?php

namespace App\Tests\Pages;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class LoginPageTest extends WebTestCase
{
    /** @test */
    public function anonymous_user_cannot_see_dashboard(): void
    {
        static::createClient()->request('GET', '/');

        $this->assertResponseRedirects('/login');
    }

}
