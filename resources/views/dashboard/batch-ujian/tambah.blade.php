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

    @if($transaksi->isEmpty())
        {{-- POP UP KALAU BELUM MEMILIKI/MEMBELI PAKET SOAL --}}
        {{-- SEHINGGA TIDAK BISA MEMBUAT BATCH UJIAN --}}
        <p>Paket soal tidak ada, silahkan membeli dahulu</p>
    @else
        <form action="{{ route('dashboard-prosesTambahBatch') }}" method="post" enctype="multipart/form-data">
            @csrf
            <select name="transaksi_id">
                @foreach($transaksi as $t)
                    <option value="{{ $t->transaksi_id }}">{{ $t->paketSoal[0]->nama_paket }}</option>
                    {{-- @foreach($t->paketSoal as $paketSoal)
                        <option value="{{ $t->transaksi_id }}">{{ $t->paketSoal[0]->nama_paket }}</option>
                    @endforeach --}}
                @endforeach
            </select>
            <input type="datetime-local" name="waktu_pelaksanaan">
            <input type="file" name="siswa">
            <button type="submit" value="Tambah">Tambah</button>
        </form>
    @endif
</body>
</html>
