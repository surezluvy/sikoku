<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Tambah Soal 2</h1>

    <form action="{{ route('admin-prosesTambahJawaban') }}" method="post">
        @csrf
        <input type="text" name="soal_id" value="{{ $last_id }}">

        <div>
            {{--TODO: Name harusnya pake array karena memasukan lebih dari 1 soal--}}
            <input type="text" name="tipe_soal" value="{{ $tipe_soal }}">
            <input type="text" name="pilihan">
            <input type="number" name="value_pilihan">
        </div>

        <button>Tambah kolom jawaban</button>

        <button type="submit" value="Selesai">Selesai</button>
    </form>
</body>
</html>
