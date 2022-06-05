<?php

namespace Tests\Feature\Guru;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

use App\Models\User;

class AuthTest extends TestCase
{
    use RefreshDatabase;
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function guru_login()
    {
        $this->visit('/masuk');

        $user = User::factory()->create([
            'name' => 'guru',
            'email' => 'guru@gmail.com',
            'role' => 'guru',
            'password' => bcrypt('passwordguru'),
        ]);

        $this->submitForm('masuk', [
            'email'    => 'guru@gmail.com',
            'password' => 'passwordguru',
        ]);

        $this->seePageIs('/dashboard');
    }

    /** @test */
    function guru_dapat_daftar_dan_memasuki_dashboard(){
        $this->visit('/masuk');
        $this->click('Daftar');

        $this->submitForm('daftar', [
            'name'    => 'guru',
            'email'    => 'guru@gmail.com',
            'role'    => 'guru',
            'password' => 'passwordguru',
        ]);

        $this->seeInDatabase('users', [
            'name'    => 'guru',
            'email'    => 'guru@gmail.com',
        ]);

        $this->seePageIs('masuk');
        $this->submitForm('masuk', [
            'email'    => 'guru@gmail.com',
            'password' => 'passwordguru',
        ]);
        $this->seePageIs('/dashboard');
    }

    /** @test */
    public function guru_yang_telah_login_dapat_logout(){
        $this->guru_login();
        $this->click('Logout');
        $this->seePageIs('/');
    }
}
