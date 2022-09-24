<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        // \App\Models\Soal2d::factory(10)->create();
        // \App\Models\SoalPilgan::factory(10)->create();
        // \App\Models\Key2d::factory(10)->create();
        // \App\Models\KeyPilgan::factory(10)->create();
        // \App\Models\PaketSoal::factory(10)->create();
        // \App\Models\Transaksi::factory(10)->create();
        // \App\Models\BatchUjian::factory(10)->create();

        $user_ = [
            ['Admin', 'admin@gmail.com', Hash::make('qweasdzxc'), 'admin'],
            ['Psikolog', 'psikolog@gmail.com', Hash::make('qweasdzxc'), 'psikolog'],
            ['Guru', 'guru@gmail.com', Hash::make('qweasdzxc'), 'guru'],
        ];
        $soalPilgan_ = [
            "Adanya gerakan bulan mengelilingi matahari menyebabkan terjadinya fenomena dibawah ini",
            "Sebutkan ciri ciri yang dimiliki oleh planet mars", 
            "Urutan metamorphosis hewan di bawah ini yang sempurna adalah", 
            "Sebutkan alasan mengapa Tumbuhan sangat dibutuhkan oleh semua makhluk hidup!", 
            "Pada komunitas sawah terdapat rumput, belalang, katak, ular, elang dan bakteri. Peran bakteri pada rantai makanan tersebut adalah"
        ];
        $soal2d_ = ["Salah satu upaya yang bisa dikategorikan sebagai pencegahan banjir di kawasan perkotaan adalah diantaranya", "Salah satu penyakit yang menyerang sel darah merah disebut", "Apa alasan sambungan rel kereta api dibuat bercelah?", "Berikut adalah jenis benda yang bersifat isolator yaitu", "Perpindahan panas secara radiasi terjadi pada peristiwa dibawah ini"];
        $keyPilgan_ = [
            ['1', 'Gerhana bulan, karena posisi bulan berada diantara bumi dan matahari', 20],
            ['1', 'Fase bulan terjadi karena luasan permukaan bulan yang memantulkan cahaya matahari selalu berubah', 80],
            ['2', 'Berwarna merah dan memiliki satelit phobos dan deimos', 30],
            ['2', 'Mengandung hidrogen dan helium, berwarna kemerahan', 70],
            ['3', 'Telur, Larva, Pupa, Jentik jentik, Nyamuk', 90],
            ['3', 'Telur, Kupu kupu, ulat, kepompong', 10],
            ['4', 'Hewan ternak memperoleh makanan dari tumbuhan', 30],
            ['4', 'Tumbuhan menghasilkan kayu untuk bahan bangunan', 70],
            ['5', 'Pengurai unsur hara', 40],
            ['5', 'Produsen', 60]
        ];
        $key2d_ = [
            ['1', 'membersihkan saluran air dari sampah dan lumpur', 20],
            ['1', 'membangun lapangan di pusat kota', 80],
            ['2', 'hepatitis', 70],
            ['2', 'leukemia', 30],
            ['3', 'mencegah rel melengkung saat terjadi pemuaian', 30],
            ['3', 'mengurangi gaya gesek antara rel dengan roda kereta', 70],
            ['4', 'Timah', 80],
            ['4', 'Kayu bakar', 20],
            ['5', 'Bapak menjemur ikan asin saat cuaca terik', 30],
            ['5', 'Ibu mengaduk air kopi panas dengan sendok logam', 70],
        ];

        foreach($user_ as $user){
            \App\Models\User::factory()->create([
                'name' => $user[0],
                'email' => $user[1],
                'password' => $user[2],
                'role' => $user[3]
            ]);
        };
        foreach($soalPilgan_ as $soalPilgan){
            \App\Models\SoalPilgan::factory()->create([
                'pertanyaan' => $soalPilgan
            ]);
        };
        foreach($soal2d_ as $soal2d){
            \App\Models\Soal2d::factory()->create([
                'pertanyaan' => $soal2d
            ]);
        };
        foreach($keyPilgan_ as $keyPilgan){
            \App\Models\KeyPilgan::factory()->create([
                'soal_pg_id' => $keyPilgan[0],
                'pilihan' =>  $keyPilgan[1],
                'value_pilihan' => $keyPilgan[2],
            ]);
        };
        foreach($key2d_ as $key2d){
            \App\Models\Key2d::factory()->create([
                'soal_2d_id' => $key2d[0],
                'pilihan' =>  $key2d[1],
                'value_pilihan' => $key2d[2],
            ]);
        };

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
