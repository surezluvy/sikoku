<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Paket Soal</h1>
    <a href="{{ route('admin-tambahPaketSoal') }}">Tambah paket soal</a>
    <table style="width:100%" border="2" bordercolor="green">
            @foreach($paketSoal as $paket)
            <tr>
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
                <td>
                    <a href="{{ route('admin-ubahPaketSoal', $paket->paket_soal_id) }}" id="ubah_paket_soal_{{ $paket->paket_soal_id }}">Ubah paket ini</a>
                    <a href="{{ route('admin-hapusPaketSoal', $paket->paket_soal_id) }}" id="hapus_paket_soal_{{ $paket->paket_soal_id }}">Hapus paket ini</a>
                    <a href="{{ route('admin-tesHapusPaketSoal', $paket->paket_soal_id) }}" id="tes_hapus_paket_soal_{{ $paket->paket_soal_id }}">Tes hapus paket ini</a>
                </td>
            </tr>
            @endforeach
    </table>
</body>
</html>
