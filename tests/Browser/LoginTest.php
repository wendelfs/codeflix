<<<<<<< HEAD
<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class LoginTest extends DuskTestCase
{
    use DatabaseMigrations;

    /**
     * A Dusk test example.
     *
     * @return void
     */
    public function testLoginFailed()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/admin/login')
                ->type('email', 'asdasd@user.com')
                ->type('password', '123456')
                ->press('LoginPage')
                ->assertSee('LoginPage');
        });
    }

    public function testLoginSuccess()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/admin/login')
                ->type('email', 'admin@user.com')
                ->type('password', 'secret')
                ->press('LoginPage')
                ->assertPathIs('/admin/dashboard');
        });
    }
}
=======
<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class LoginTest extends DuskTestCase
{
    use DatabaseMigrations;

    /**
     * A Dusk test example.
     *
     * @return void
     */
    public function testLoginFailed()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/admin/login')
                ->type('email', 'asdasd@user.com')
                ->type('password', '123456')
                ->press('LoginPage')
                ->assertSee('LoginPage');
        });
    }

    public function testLoginSuccess()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/admin/login')
                ->type('email', 'admin@user.com')
                ->type('password', 'secret')
                ->press('LoginPage')
                ->assertPathIs('/admin/dashboard');
        });
    }
}
>>>>>>> 71264fc544af9982104d1172c51d8a1fa9fa3377
