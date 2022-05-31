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
    {{ auth()->user()->role }}
    @endauth

    @guest
    <a href="{{ route('masuk') }}">Login</a>
    @endguest
    <h1>Paket soal</h1>

    <table style="width:100%">
        <tr>
            <th>id</th>
            <th>nama</th>
            <th>aksi</th>
        </tr>
        <tr>
            @foreach($paketsoal as $soal)
                <td>{{ $soal->id_paketsoal }}</td>
                <td>{{ $soal->name }}</td>
                <td><a href="{{ route('detailPaket', $soal->id_paketsoal) }}" id="paket_soal_{{ $soal->id_paketsoal }}">Pilih paket ini</a></td>
            @endforeach
        </tr>
    </table>
</body>

</html>
