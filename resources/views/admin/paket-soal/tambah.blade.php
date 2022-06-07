<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Tambah paket soal</h1>
    <form action="{{ route('admin-prosesTambahPaketSoal') }}" method="post">
        <input type="text" name="nama_paket">
        <input type="time" name="waktu_pengerjaan">
        <div>
            <h4>Soal Pilihan Ganda</h4>
            @foreach($soalPilgan as $s)
                <input type="checkbox" name="soalPilgan[{{ $no++ }}]" value="{{ $s->soal_pg_id }}">
            @endforeach

            <h4>Soal 2D</h4>
            @foreach($soal2d as $s)
                <input type="checkbox" name="soal2d[{{ $s->soal_2d_id }}]" value="{{ $s->soal_2d_id }}">
            @endforeach
        </div>
        <button type="submit" value="Tambah paket soal">Tambah paket soal</button>
    </form>
</body>
</html>
