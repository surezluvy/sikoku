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
        Selamat datang {{ auth()->user()->name }}
    @endauth

    @guest
        <a href="{{ route('masuk') }}">Masuk</a>
    @endguest
    <h1>LANDING</h1>
    <a href="{{ route('paketsoal') }}">Lihat paket soal</a>

    {{-- POPUP ERROR --}}
    @if(session('error'))
        {{ session('error') }}
    @endif
    {{-- INI FORM POPUP KETIKA TOMBOL MASUKAN TOKEN DI CLICK --}}
    <form action="{{ route('inputToken') }}" method="post">
        @csrf
        <input type="text" name="token">
        <button type="submit">Mulai tes</button>
    </form>
    <a href="{{ route('test') }}">Mulai tes</a>
</body>
</html>
