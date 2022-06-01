<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    @auth
    {{ auth()->user()->role }}
    @endauth

    @guest
    <a href="{{ route('masuk') }}">Login</a>
    @endguest
    <h1>Paket soal</h1>
    <h4>{{ $paketsoal->nama_paket }}</h4>
    <p>{{ $paketsoal->soal }}</p>

    <a href="{{ route('pilihPaket', $paketsoal->paket_soal_id) }}">Pilih paket soal ini</a>
</body>

</html>
