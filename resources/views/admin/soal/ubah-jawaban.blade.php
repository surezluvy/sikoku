<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Ubah jawaban</h1>

    <form action="{{ route('admin-prosesUbahJawaban') }}" method="post">
        @csrf
        <input type="text" name="tipe_soal" value="{{ $tipe_soal }}">
        @php
            $counter = 1;
        @endphp
        @foreach($soal->key as $key)
            <input type="text" name="id[{{ $counter }}]" value="{{ $key->$id_jwb }}">
            <input type="text" name="pilihan[{{ $counter }}]" value="{{ $key->pilihan }}">
            <input type="number" name="value_pilihan[{{ $counter }}]" value="{{ $key->value_pilihan }}">
            @php
                $counter++;
            @endphp
        @endforeach
        <button type="submit" value="Selesai">Selesai</button>
    </form>
</body>
</html>
