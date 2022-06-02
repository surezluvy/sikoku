<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Tambah Soal</h1>

    <form action="{{ route('admin-prosesTambahSoal', $tipe) }}" method="post">
        @csrf
        <input type="text" name="tipe" value="{{ $tipe }}">
        <input type="text" name="pertanyaan">
        <button type="submit" value="lanjut">lanjut</button>
    </form>
</body>
</html>
