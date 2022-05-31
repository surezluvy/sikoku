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
        Selamat datang {{ auth()->user()->username }}
    @endauth

    @guest
        <a href="{{ route('masuk') }}">Masuk</a>
    @endguest
    <h1>INDEX</h1>
    <a href="{{ route('paketsoal') }}">Pilih paket soal</a>
</body>
</html>
