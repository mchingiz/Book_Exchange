<?php

namespace Tests\Browser;

use Tests\DuskTestCase;
use Laravel\Dusk\Browser;
use Illuminate\Foundation\Testing\DatabaseMigrations;

class ChatTest extends DuskTestCase
{
    /**
     * A Dusk test example.
     *
     * @return void
     */
    public function testExample()
    {
        $this->browse(function ($first, $second) {
            $first->visit('/login')
                    ->type('input[name=email]','chingizmammadli@kitabtap.az')
                    ->type('input[name=password]','123456')
                    ->press('.btn.btn-primary')
                    ->visit('/chat/1');

            
            $second->visit('/login')
                    ->type('input[name=email]','bahruzaydinli@kitabtap.az')
                    ->type('input[name=password]','123456')
                    ->press('.btn.btn-primary')
                    ->visit('/chat/2');

            $first->type('.input_msg_write input','automatically sent message')
                    ->press('.msg_send_btn');

            $second->pause(1000)
                    ->assertSee('automatically sent message');
        });
    }
}
