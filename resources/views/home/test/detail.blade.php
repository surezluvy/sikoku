<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

    @if(session()->has('success'))
        <h1>{{ session('success') }}</h1>
    @elseif(session()->has('error'))
        {{-- Menampilkan error dengan popup yang tidak bisa di close dan ada tombol back --}}
        <h1>{{ session('error') }}</h1>
    @endif

    <h1>Selamat datang, {{ $siswa[0]['nama_siswa'] }}</h1>
    <small>Tanggal lahir anda adalah {{ $siswa[0]['tanggal_lahir'] }}</small>

    {{-- Menampilkan informasi batch --}}
    <h1>Anda akan mengerjakan paket soal {{ $paketSoal->nama_paket }}</h1>
    <h3>Waktu pengerjaan paket soal ini adalah {{ $paketSoal->waktu_pengerjaan }} jam</h3>

    @if($paketSoal->user_add != NULL)
        // FIXME: user_add masih id, harusnya relasi ke tabel user dan memanggil nama psikolog
        <small>Paket soal ini dibuat oleh psikolog {{ $paketSoal->user_add }}</small>
    @endif

    <h4>Guru yang mendaftarkan anda adalah {{ $guru->name }}</h4>

    <a href="{{ route('test-mulai', 1) }}">Mulai test</a>
</body>
</html>
