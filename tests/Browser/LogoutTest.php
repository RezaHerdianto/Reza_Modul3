<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class LogoutTest extends DuskTestCase
{
    /**
     * A Dusk test example,
     * @group logout
     */
    public function testExample(): void
    {
        $this->browse(function (Browser $browser) {
            $browser-> visit('/')
            -> clickLink('Log in')
            -> type ('email', 'reza@gmail.com')
            -> type ('password', '1202220365')
            -> press('LOG IN')
            ->assertPathIs('/dashboard')
            -> press('reza')
            -> clicklink ('Log Out')
            -> assertPathIs('/');
        });
    }
}
