<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    {{$id}}
    @if($id <= count(session('soal')))
        <h1>Pertanyaan</h1>
        <p>{{ session('soal')[$id-1]['pertanyaan'] }}</p>

        <form action="{{ route('test-mulai', $id+1) }}" method="post">
            <input type="text" name="soal_pg_id" value="{{ session('soal')[$id-1]['soal_pg_id'] }}"><br>
            <input type="text" name="pertanyaan" value="{{ session('soal')[$id-1]['pertanyaan'] }}"><br>
            @csrf
            @foreach(session('soal')[$id-1]['jawaban'] as $jwb)
                <input type="radio" name="pilihan" required value="{{ $jwb['pilihan'] }}"> {{ $jwb['pilihan'] }}
                <input type="text" name="value_pilihan" value="{{ $jwb['value_pilihan'] }}"><br>
            @endforeach

            <br>

            @if($id == count(session('soal')))
                <button type="submit">Selesai</button>
            @else
                <button type="submit">Lanjut</button>
            @endif
        </form>
    @else
        <h1>TEST TELAH SELESAI, terimakasih</h1>
        <h5>Poin anda adalah: {{ session('point') }}</h5>
        <a href="{{ route('test-selesai') }}">Kirim jawaban</a>
    @endif

    <a href="{{ route('test-hapusSessionJawabanSiswa') }}">Hapus session jawaban siswa</a>

    {{-- DEBUG --}}
    {{-- <pre>{{ print_r(session('jawaban_siswa')) }}</pre>
    <pre>{{ print_r(session('soal')) }}</pre>

    <ul>
        <p>List soal</p>
        @foreach(session('soal') as $soal)
            <li>{{ $soal['pertanyaan'] }}</li>
            <ul>
                <p>Pilihan</p>
                @foreach($soal['jawaban'] as $jwb)
                    <li>{{ $jwb['pilihan'] }}</li>
                @endforeach
            </ul>
        @endforeach
    </ul> --}}
</body>
</html>
