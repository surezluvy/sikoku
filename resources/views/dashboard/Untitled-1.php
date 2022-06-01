<?php

namespace Tests\Feature\Admin;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\User;
use App\Models\PaketSoal;

class GuruTest extends TestCase
{
    use RefreshDatabase;
    /**
     * A basic feature test example.
     *
     * @return void
     */

    /** @test */
    public function guru_dapat_mengunjungi_website_memilih_paketsoal_dan_mendaftar()
    {
        $this->visit('/');
        $this->seeText('LANDING');

        $this->click('Pilih paket soal');
        $paketsoal = PaketSoal::factory(3)->create();
        $this->seeText('Paket soal');
        $this->dump();
        for($i = 0; $i <= 2; $i++){
            $this->see($paketsoal[$i]->name);

            $this->seeElement('a', [
                'href' => url('paketsoal/detail/'.$paketsoal[$i]->id)
            ]);
        }

        $this->click('paket_soal_'.$paketsoal[0]->id);

        // DISINI HARUSNYA USER CLICK PAKETSOAL DENGAN ID 1
        // Setelah masuk view detail paket soal, user click pilih paket soal ini lalu masuk ke bagian login

        $this->visit('/masuk');
        $this->click('Daftar');
        $this->seePageIs('/daftar');

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
    }

    public function guru_dapat_memilih_paketsoal()
    {
        $this->visit('/login');
        $user = User::factory()->create([
            'name' => 'guru',
            'email' => 'guru@gmail.com',
            'role' => 'guru',
            'password' => bcript('passwordguru'),
        ]);
        $this->submitform('masuk', [
            'email' => 'guru@gmail.com',
            'password' => 'passwordguru',
        ]);

        $this->seePageIs('/home');
        $this->seeText('SELAMAT DATANG guru');
    }
}

