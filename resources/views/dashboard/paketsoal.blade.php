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
    <h1>DASHBOARD PAKET SOAL</h1>

    <table style="width:100%">
        <tr>
            <th>id</th>
            <th>nama</th>
            <th>aksi</th>
        </tr>
        <tr>
            @foreach($paketsoal as $soal)
                <td>{{ $soal->nama_paket }}</td>
                <td>{{ $soal->soal }}</td>
                <td><a href="{{ route('dashboard-detailPaket', $soal->paket_soal_id) }}" id="paket_soal_{{ $soal->paket_soal_id }}">Pilih paket ini</a></td>
            @endforeach
        </tr>
    </table>
</body>

</html>
