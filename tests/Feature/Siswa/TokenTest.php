<?php

namespace Tests\Feature\Siswa;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

use App\Models\User;
use App\Models\SoalPilgan;
use App\Models\Soal2d;
use App\Models\KeyPilgan;
use App\Models\Key2d;
use App\Models\PaketSoal;

use App\Models\Transaksi;
use App\Models\BatchUjian;

class TokenTest extends TestCase
{
    use RefreshDatabase;
    /**
     * A basic feature test example.
     *
     * @return void
     */

    /** @test */
    public function siswa_dapat_memasuki_website_dan_memasukan_token()
    {
        User::factory(3)->create();
        PaketSoal::factory(3)->create();
        Transaksi::factory(3)->create();
        BatchUjian::factory(3)->create();

        $this->visit('/test');
        $this->submitForm('Mulai tes', [
            // TODO: Token masih ngawur jadi kemungkinan besar salah
            'token' => '1',
        ]);
        $this->seePageIs('/test/validasi');
    }

    /** @test */
    public function siswa_dapat_memulai_tes(){
        $this->siswa_dapat_memasuki_website_dan_memasukan_token();

        $this->click('Lanjut');
        $this->dump();
    }
}
