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
    public function guru_dapat_mengunjungi_website_memilih_paketsoal()
    {
        $this->visit('/');
        $this->seeText('LANDING');

        $paketsoal = PaketSoal::factory(3)->create();
        // dd($paketsoal);
        $this->click('Lihat paket soal');
        $this->seeText('Paket soal');

        for($i = 0; $i <= 2; $i++){
            $this->see($paketsoal[$i]->nama_paket);

            $this->seeElement('a', [
                'href' => url('paketsoal/detail/'.$paketsoal[$i]->paket_soal_id)
            ]);
        }

        $this->click('paket_soal_'.$paketsoal[0]->paket_soal_id);
        $this->seePageIs('/paketsoal/detail/'.$paketsoal[0]->paket_soal_id);
        $this->click('Pilih paket soal ini');
        $this->seePageIs('/masuk');
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
    function guru_terdaftar_dapat_memasuki_dashboard(){
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
    function guru_dapat_memilih_paket_soal_pada_dashboard(){
        $this->visit('/masuk');

        $user = User::factory()->create([
            'name' => 'guru',
            'email' => 'guru@gmail.com',
            'role' => 'guru',
            'password' => bcrypt('passwordguru'),
        ]);

        $this->submitform('masuk', [
            'email' => 'guru@gmail.com',
            'password' => 'passwordguru',
        ]);

        $this->seePageIs('/dashboard');
        $paketsoal = PaketSoal::factory(3)->create();
        $this->click('Paket soal');

        for($i = 0; $i <= 2; $i++){
            $this->see($paketsoal[$i]->nama_paket);

            $this->seeElement('a', [
                'href' => url('dashboard/paketsoal/'.$paketsoal[$i]->paket_soal_id)
            ]);
        }

        $this->click('paket_soal_'.$paketsoal[0]->paket_soal_id);
        $this->seePageIs('/dashboard/paketsoal/'.$paketsoal[0]->paket_soal_id);
    }
}
