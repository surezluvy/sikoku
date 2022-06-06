<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    {{-- Navbar --}}
    {{-- Menampilkan user profil dengan tombol logout --}}
    {{ auth()->user()->name }}

    <a href="{{ route('dashboard-tambahBatch') }}">Tambah batch</a>

    {{-- List batch dengan user id yang sedang login --}}
    @if($batch->isEmpty())
        <p>Tidak ada batch</p>
    @else
        @foreach($batch as $b)
            <p>{{ $b->batch_id }}</p>
            <p>Tanggal pelaksanaan: {{ $b->tanggal_pelaksanaan }}</p>
            <p>jam pelaksanaan: {{ $b->jam_pelaksanaan }}</p>
            <ul>
                @foreach($b->siswa as $siswa)
                    <li>{{ $siswa['nama_siswa'] }} || {{ $siswa['token'] }}</li>
                @endforeach
            </ul>
        @endforeach
        {{-- @foreach($batch as $b)
            <p>Batch {{ $b->batch_id }}</p>
            <p>Tanggal pelaksanaan: {{ $b->tanggal_pelaksanaan }}</p>
            <p>jam pelaksanaan: {{ $b->jam_pelaksanaan }}</p>
            <ul>
                @foreach ($b->siswa[0] as $siswa)
                    <li>{{ $siswa['nama_siswa'] }} | {{ $siswa['token'] }}</li>
                @endforeach
            </ul>
        @endforeach --}}
    @endif
</body>
</html>
