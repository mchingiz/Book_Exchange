<?php

namespace Tests\Browser;

use Tests\DuskTestCase;
use Laravel\Dusk\Browser;
use Illuminate\Foundation\Testing\DatabaseMigrations;

class SuccessfulLoginTest extends DuskTestCase
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
                    ->type('input[name=email]','chingizmammadli@kitabtap.az')
                    ->type('input[name=password]','123456')
                    ->press('.btn.btn-primary')
                    // ->assertPathIs('/home');
                    ->assertDontSee('These credentials do not match our records');
        });
    }
}
