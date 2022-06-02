<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Ubah Soal</h1>

    <form action="{{ route('admin-prosesUbahSoal', $tipe) }}" method="post">
        @csrf
        <input type="text" name="tipe" value="{{ $tipe }}">
        <input type="text" name="id" value="{{ $soal->soal_pg_id }}">
        <input type="text" name="pertanyaan" value="{{ $soal->pertanyaan }}">
        <button type="submit" value="lanjut">lanjut</button>
    </form>
</body>
</html>
