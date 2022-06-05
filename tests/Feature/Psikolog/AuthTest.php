<?php

namespace Tests\Feature\Psikolog;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

use App\Models\User;
use App\Models\SoalPilgan;
use App\Models\Soal2d;
use App\Models\KeyPilgan;
use App\Models\PaketSoal;

class AuthTest extends TestCase
{
    use RefreshDatabase;
    /**
     * A basic feature test example.
     *
     * @return void
     */

    public function psikolog_login(){
        $this->visit('/masuk');
        $user = User::factory()->create([
            'name' => 'psikolog',
            'email' => 'psikolog@gmail.com',
            'role' => 'psikolog',
            'password' => bcrypt('passwordpsikolog'),
        ]);
        $this->submitForm('masuk', [
            'email'    => 'psikolog@gmail.com',
            'password' => 'passwordpsikolog',
        ]);
        $this->seePageIs('/admin');
    }

    /** @test */
    public function psikolog_dapat_memasuki_dashboard()
    {
        $this->visit('/');
        $this->click('Masuk');
        $this->click('Daftar');

        $this->submitForm('daftar', [
            'name'    => 'psikolog',
            'email'    => 'psikolog@gmail.com',
            'role'    => 'psikolog',
            'password' => 'passwordpsikolog',
        ]);

        $this->seeInDatabase('users', [
            'name'    => 'psikolog',
            'email'    => 'psikolog@gmail.com',
        ]);

        $this->seePageIs('masuk');
        $this->submitForm('masuk', [
            'email'    => 'psikolog@gmail.com',
            'password' => 'passwordpsikolog',
        ]);
        $this->seePageIs('/admin');
    }

    /** @test */
    public function psikolog_yang_telah_login_dapat_logout(){
        $this->psikolog_login();
        $this->click('Logout');
        $this->seePageIs('/');
    }
}
