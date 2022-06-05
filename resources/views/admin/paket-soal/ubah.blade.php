<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Ubah Paket Soal</h1>

    <form action="{{ route('admin-prosesUbahPaketSoal', $paketSoal->paket_soal_id) }}" method="post">
        @csrf
        <input type="text" name="nama_paket" value="{{ $paketSoal->nama_paket }}">
        <button type="submit" value="Simpan">Simpan</button>
    </form>
</body>
</html>
