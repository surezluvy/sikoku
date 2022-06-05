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
    <td>Nama Paket: {{ $paketsoal->nama_paket }}</td>
    @foreach($paketsoal->soal as $soal)
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

    <a href="{{ route('pilihPaket', $paketsoal->paket_soal_id) }}">Pilih paket soal ini</a>
</body>

</html>
