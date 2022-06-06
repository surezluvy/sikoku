<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>BERISI INVOICE DISURUH UNTUK BAYAR, dan tombol kembali</h1>
    <a href="{{ url('/dashboard/paket-soal') }}">Kembali</a>
    <form action="{{ route('dashboard-prosesBayarPaket') }}" method="post">
        @csrf
        <input type="hidden" name="user_id" value="{{ auth()->user()->user_id }}">
        <input type="hidden" name="paket_soal_id" value="{{ $id }}">
        <button type="submit" value="Bayar">Bayar</button>
    </form>
</body>
</html>
