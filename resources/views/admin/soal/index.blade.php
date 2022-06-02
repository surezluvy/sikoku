<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>SOAL</h1>
    <a href="{{ route('admin-tambahSoal', $tipe) }}">Tambah soal</a>
    <form action="{{ route('admin-prosesTambahSoal', $tipe) }}" method="post">
        @csrf
        <input type="text" name="tipe" value="{{ $tipe }}">
        <input type="text" name="pertanyaan">
        <button type="submit" value="Tambah soal">Tambah soal</button>
    </form>
    <table style="width:100%">
        <tr>
            <th>Pertanyaan</th>
            <th>Jawaban</th>
            <th>aksi</th>
        </tr>
        <tr>
            @foreach($kumpulan_soal as $soal)
                <td>{{ $soal->pertanyaan }}</td>
                <td>
                    <ul>
                        @foreach($soal->key as $key)
                            <li>{{ $key->pilihan }} [{{ $key->value_pilihan }}]</li>
                        @endforeach
                    </ul>
                </td>
                <td>
                    <a href="{{ route('admin-ubahSoal', [$soal->soal_pg_id, $tipe]) }}" id="ubah_soal_{{ $soal->soal_pg_id }}">Ubah soal ini</a>
                    <a href="{{ route('admin-prosesHapusSoal', [$soal->soal_pg_id, $tipe]) }}" id="hapus_soal_{{ $soal->soal_pg_id }}">Hapus soal ini</a>
                </td>
            @endforeach
        </tr>
    </table>
</body>
</html>
