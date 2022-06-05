<?php

namespace Tests\Feature\Psikolog;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

use App\Models\User;
use App\Models\SoalPilgan;
use App\Models\Soal2d;
use App\Models\KeyPilgan;
use App\Models\Key2d;
use App\Models\PaketSoal;

class PaketSoalTest extends TestCase
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
    public function psikolog_dapat_melihat_paket_soal_pada_dashboard(){
        $this->psikolog_login();
        $this->visit('/admin');
        $soalPilgan = SoalPilgan::factory(3)->create();
        $keyPilgan = KeyPilgan::factory(3)->create();
        $soal2d = Soal2d::factory(3)->create();
        $key2d = Key2d::factory(3)->create();
        $paketSoal = PaketSoal::factory(3)->create();
        $this->click('Paket Soal');
    }

    /** @test */
    public function psikolog_dapat_membuat_paket_soal_dari_beberapa_soal(){
        $this->psikolog_login();
        $this->click('Paket Soal');

        $soalPilgan = SoalPilgan::factory(3)->create();
        $keyPilgan = KeyPilgan::factory(3)->create();
        $soal2d = Soal2d::factory(3)->create();
        $key2d = Key2d::factory(3)->create();

        $this->click('Tambah paket soal');
        $this->seePageIs('/admin/paket-soal/tambah');

        $this->submitForm('Tambah paket soal', [
            'nama_paket'    => 'Paket 1',
            'soalPilgan[1]' => $soalPilgan[0]->soal_pg_id,
            'soalPilgan[3]' => $soalPilgan[2]->soal_pg_id,
            'soal2d[1]' => $soal2d[0]->soal_2d_id,
            'soal2d[2]' => $soal2d[1]->soal_2d_id,
        ]);

        $this->seeInDatabase('paket_soal', [
            'nama_paket'    => 'Paket 1',
        ]);

        $this->seePageIs('/admin/paket-soal');
    }

    /** @test */
    public function psikolog_dapat_mengubah_paket_soal(){
        $this->psikolog_login();

        $soalPilgan = SoalPilgan::factory(3)->create();
        $keyPilgan = KeyPilgan::factory(3)->create();
        $soal2d = Soal2d::factory(3)->create();
        $key2d = Key2d::factory(3)->create();
        $paketSoal = PaketSoal::factory(3)->create();

        $this->click('Paket Soal');
        $this->click('ubah_paket_soal_'. $paketSoal[0]->paket_soal_id);

        // BARU BISA MENGUBAH NAMA PAKET, SOAL BELUM BISA DIUBAH
        $this->submitForm('Simpan', [
            'nama_paket' => 'Paket telah di ubah'
        ]);

        $this->seeInDatabase('paket_soal', [
            'nama_paket' => 'Paket telah di ubah'
        ]);

        $this->seePageIs('/admin/paket-soal');
    }

    /** @test */
    public function psikolog_dapat_menghapus_paket_soal(){
        $this->psikolog_login();

        $soalPilgan = SoalPilgan::factory(3)->create();
        $keyPilgan = KeyPilgan::factory(3)->create();
        $soal2d = Soal2d::factory(3)->create();
        $key2d = Key2d::factory(3)->create();
        $paketSoal = PaketSoal::factory(3)->create();

        $this->click('Paket Soal');
        $this->click('hapus_paket_soal_'. $paketSoal[0]->paket_soal_id);

        $this->dontSeeInDatabase('paket_soal', [
            'paket_soal_id'    => $paketSoal[0]->paket_soal_id,
        ]);

        $this->seePageIs('/admin/paket-soal');
    }
}
