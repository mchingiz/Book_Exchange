<?php

namespace Tests\Browser;

use Tests\DuskTestCase;
use Laravel\Dusk\Browser;
use Illuminate\Foundation\Testing\DatabaseMigrations;

class FailedLoginTest extends DuskTestCase
{
    /**
     * A Dusk test example.
     *
     * @return void
     */
    public function test()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/login')
                    ->type('input[name=email]','mkoelpin@ledner.com')
                    ->type('input[name=password]','asdfgh')
                    ->press('.btn.btn-primary')
                    // ->assertPathIs('/home');
                    ->assertSee('These credentials do not match our records');
        });
    }
}
