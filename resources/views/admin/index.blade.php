<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>ADMIN DASHBOARD</h1>
    {{ auth()->user()->role }}

    {{-- NAVBAR --}}
    <ul>
        <h1>Soal</h1>
        <li>
            <a href="{{ route('admin-soal', 'pilgan') }}">Pilihan Ganda</a>
            <a href="{{ route('admin-soal', '2d') }}">Pilihan 2d</a>
        </li>
        <li>
            <a href="{{ route('admin-paketSoal') }}">Paket Soal</a>
        </li>
    </ul>

    <a href="{{ route('admin-logout') }}">Logout</a>
</body>
</html>
