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


    <table style="width:100%" border="2" bordercolor="green">
        <tr>
            @foreach($paketsoal as $paket)
                <td>Nama Paket: {{ $paket->nama_paket }}</td>
                @foreach($paket->soal as $soal)
                    <td>Pertanyaan:  {{ $soal['pertanyaan'] }}
                        <table border="2" bordercolor="blue">
                            <tr>
                                @foreach($soal['jawaban'] as $jawaban)
                                    <td>{{ $jawaban['pilihan'] }}</td>
                                @endforeach
                            </tr>
                        </table>
                    </td>
                @endforeach
                <a href="{{ route('dashboard-detailPaket', $paket->paket_soal_id) }}" id="paket_soal_{{ $paket->paket_soal_id }}">Detail paket soal</a>
            @endforeach
        </tr>
    </table>
</body>

</html>
