<?php

namespace Tests\Feature\Guru;

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

class BatchTest extends TestCase
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
    public function guru_berhasil_memilih_dan_membayar_paket_soal(){
        $soalPilgan = SoalPilgan::factory(3)->create();
        $keyPilgan = KeyPilgan::factory(3)->create();
        $soal2d = Soal2d::factory(3)->create();
        $key2d = Key2d::factory(3)->create();
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

        $this->click('Pilih paket soal ini');
        $this->submitForm('Bayar',[]);

        $this->seeInDatabase('transaksi', [
            'paket_soal_id' => 1,
            'user_id' => 1,
            // Test langsung terbayar karena factory semua tgl_bayar diisi
        ]);
    }

    /** @test */
    function guru_dapat_melihat_batch_ujian(){
        $this->guru_login();
        PaketSoal::factory(3)->create();
        Transaksi::factory(3)->create();
        $batch = BatchUjian::factory(3)->create();

        $this->seePageIs('/dashboard');
        $this->click('Batch ujian');

        for($i = 0; $i <= 2; $i++){
            $this->see($batch[$i]->batch_id);
        }
    }

    /** @test */
    function guru_dapat_membuat_batch_ujian(){
        $this->guru_login();

        // Membuat tes, kalau sebelumnya user_id 1 telah membeli paket soal 1
        PaketSoal::factory(1)->create();
        Transaksi::factory(1)->create();

        // Menambah tabel transaksi
        $this->guru_berhasil_memilih_dan_membayar_paket_soal();

        $this->seePageIs('/dashboard/batch-ujian');
        $this->click('Tambah batch');

        $file = public_path('siswa.xlsx');
        $this->submitForm('Tambah', [
            'transaksi_id' => '1',
            'tanggal_pelaksanaan' => '2022-06-04',
            'jam_pelaksanaan' => '00:00:00',
            'siswa' => $file
        ]);
        $this->seeInDatabase('batch_ujian', [
            'transaksi_id' => 1,
            'tanggal_pelaksanaan' => '2022-06-04',
            'jam_pelaksanaan' => '00:00:00',
        ]);

        $this->seePageIs('/dashboard/batch-ujian');
    }
}
