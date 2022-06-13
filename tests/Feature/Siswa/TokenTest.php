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

        $this->visit('/');
        $this->click('Mulai Tes');
        $this->submitForm('Selanjutnya', [
            // TODO: Token masih ngawur jadi kemungkinan besar salah
            'token' => '1',
        ]);
        $this->seePageIs('/test/validasi');
    }

    /** @test */
    public function siswa_dapat_memulai_tes(){
        $this->siswa_dapat_memasuki_website_dan_memasukan_token();

        $this->click('Mulai Tes');
        $this->seePageIs('test/detail');
        $this->click('Mulai test');

        // TODO: Disini harusnya keluar instruksi, tapi di skip karena erd belum dibuat
        $soal = session('soal');
        $id = session('id')-1;

        // Siswa mengisi semua soal
        for($i = 0, $iMax = count($soal); $i < $iMax; $i++) {
            if($id < count($soal)-1) {
                $this->submitForm('Pertanyaan Selanjutnya',[
                    'pilihan' => $soal[$id]['jawaban'][0]['pilihan'],
                ]);
                $id++;
            }else{
                $this->submitForm('Selesai',[
                    'pilihan' => $soal[$id]['jawaban'][0]['pilihan'],
                ]);
            }
        }

        // BUG: Tidak bisa mengirim jawaban no such table: main.batch
        // Siswa melihat tulisan Test Telah selesai
        $this->seeText('Silahkan kirim jawaban anda sebelum keluar, sebelum mengakhiri sesi tes ini, Terima kasih');
        $this->click('Kirim jawaban');
    }
}
