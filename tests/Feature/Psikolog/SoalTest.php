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

class SoalTest extends TestCase
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
    public function psikolog_dapat_menambahkan_soal_dan_melihat_soal_yang_telah_ditambahkan()
    {
        $this->psikolog_login();
        // SEBAGAI CONTOH MENAMBAHKAN SOAL PILGAN
        $this->click('Pilihan Ganda');
        $this->click('Tambah soal');

        $this->submitForm('lanjut', [
            'pertanyaan'    => 'Apa itu hewan?'
        ]);
        $this->submitForm('Selesai', [
            'pilihan'    => 'Hewan adalah kodok',
            'value_pilihan' => 50,
        ]);
        // SEBAGAI CONTOH MENAMBAHKAN SOAL PILGAN
        $this->seePageIs('/admin/soal/pilgan');
        // Melihat apakah data yang di inputkan masuk ke dalam database dan ke dalam view
        $this->seeText('Apa itu hewan?');
    }

    /** @test */
    public function psikolog_dapat_mengubah_soal_dan_jawaban_yang_telah_dibuat(){
        $this->psikolog_login();

        $kumpulan_soal = SoalPilgan::factory(3)->create();
        $kumpulan_jawaban = KeyPilgan::factory(3)->create();

        // Cek apakah data masuk ke dalam database
        for($i = 0; $i <= 2; $i++){
            $this->seeInDatabase('soal_pilgan', [
                'pertanyaan'    => $kumpulan_soal[$i]->pertanyaan,
            ]);
            $this->seeInDatabase('key_pilgan', [
                'soal_pg_id'    => 1,
                'pilihan' => $kumpulan_jawaban[$i]->pilihan,
                'value_pilihan' => $kumpulan_jawaban[$i]->value_pilihan
            ]);
        }

        // Melihat list soal pilihan ganda
        $this->click('Pilihan Ganda');

        // Psikolog melihat list kumpulan soal dan jawaban
        for($i = 0; $i <= 2; $i++){
            $this->seeText($kumpulan_soal[$i]->pertanyaan);
        }

        $this->click('ubah_soal_1');
        $this->seePageIs('/admin/soal/ubah/1/pilgan');
        $this->submitForm('lanjut', [
            'pertanyaan'    => 'Apa itu kawan?'
        ]);
        $this->seePageIs('/admin/soal/ubah-jawaban/1/pilgan');
        $this->submitForm('Selesai', [
            'pilihan[1]'    => 'pilihan 1',
            'pilihan[2]'    => 'pilihan 2',
            'pilihan[3]'    => 'pilihan 3',
            'value_pilihan[1]' => 50,
            'value_pilihan[2]' => 100,
            'value_pilihan[3]' => 150,
        ]);

        // Cek apakah di database terdapat perubahan
        $this->seeInDatabase('key_pilgan', [
            'key_pilgan_id' => 1,
            'pilihan'    => 'pilihan 1',
        ]);
        $this->seePageIs('/admin/soal/pilgan');
    }

    /** @test */
    public function psikolog_dapat_menghapus_soal_yang_telah_dibuat_dan_jawaban_dari_soal_tersebut_otomatis_terhapus(){
        $this->psikolog_login();

        $kumpulan_soal = SoalPilgan::factory(3)->create();
        $kumpulan_jawaban = KeyPilgan::factory(3)->create();

        // Cek apakah data masuk ke dalam database
        for($i = 0; $i <= 2; $i++){
            $this->seeInDatabase('soal_pilgan', [
                'pertanyaan'    => $kumpulan_soal[$i]->pertanyaan,
            ]);
            $this->seeInDatabase('key_pilgan', [
                'soal_pg_id'    => 1,
                'pilihan' => $kumpulan_jawaban[$i]->pilihan,
                'value_pilihan' => $kumpulan_jawaban[$i]->value_pilihan
            ]);
        }

        // SEBAGAI CONTOH MENAMBAHKAN SOAL PILGAN
        $this->click('Pilihan Ganda');

        // Psikolog melihat list kumpulan soal dan jawaban
        for($i = 0; $i <= 2; $i++){
            $this->seeText($kumpulan_soal[$i]->pertanyaan);
        }

        $this->click('hapus_soal_1');

        // Data soal dan jawaban dihapus
        $this->dontSeeInDatabase('soal_pilgan', [
            'pertanyaan'    => $kumpulan_soal[0]->pertanyaan,
        ]);
        for($i = 0; $i <= 2; $i++){
            $this->dontSeeInDatabase('key_pilgan', [
                'soal_pg_id'    => 1,
                'pilihan' => $kumpulan_jawaban[$i]->pilihan,
                'value_pilihan' => $kumpulan_jawaban[$i]->value_pilihan
            ]);
        }

        $this->seePageIs('/admin/soal/pilgan');

        // Psikolog tidak melihat kumpulan soal yang telah terhapus
        $this->dontSeeText($kumpulan_soal[0]->pertanyaan);
    }

}
