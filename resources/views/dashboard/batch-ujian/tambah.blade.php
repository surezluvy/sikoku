{{-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body> --}}
    {{-- Navbar --}}
    {{-- Menampilkan user profil dengan tombol logout --}}
    {{-- {{ auth()->user()->name }} --}}

    {{-- @if($transaksi->isEmpty()) --}}
        {{-- POP UP KALAU BELUM MEMILIKI/MEMBELI PAKET SOAL --}}
        {{-- SEHINGGA TIDAK BISA MEMBUAT BATCH UJIAN --}}
        {{-- <p>Paket soal tidak ada, silahkan membeli dahulu</p>
    @else
        <form action="{{ route('dashboard-prosesTambahBatch') }}" method="post" enctype="multipart/form-data">
            @csrf
            <select name="transaksi_id">
                @foreach($transaksi as $t)
                    <option value="{{ $t->transaksi_id }}">{{ $t->paketSoal[0]->nama_paket }}</option> --}}
                    {{-- @foreach($t->paketSoal as $paketSoal)
                        <option value="{{ $t->transaksi_id }}">{{ $t->paketSoal[0]->nama_paket }}</option>
                    @endforeach --}}
                {{-- @endforeach
            </select>
            <input type="datetime-local" name="waktu_pelaksanaan">
            <input type="file" name="siswa">
            <button type="submit" value="Tambah">Tambah</button>
        </form>
    @endif
</body>
</html> --}}

@extends('template.admin')
@section('content')
<div id="content" class="main-content">
    <div class="container">

        <div class="container">

            <!-- BREADCRUMB -->
            <div class="page-meta">
                <nav class="breadcrumb-style-one" aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ url()->previous() }}">Batch Ujian</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Tambah batch</li>
                    </ol>
                </nav>
            </div>
            <!-- /BREADCRUMB -->
            
            <div class="row layout-top-spacing">
            
                <div class="col-lg-12 col-12 layout-spacing">
                    <div class="statbox widget box box-shadow">
                        <div class="widget-header">                                
                            <div class="row">
                                <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                    <h4>Tambah batch ujian</h4>
                                </div>
                            </div>
                        </div>
                        <div class="widget-content widget-content-area" style="padding: 25px">
                            <form action="{{ route('dashboard-prosesTambahBatch') }}" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group mb-4">
                                    <label for="exampleFormControlSelect1">Paket soal:</label>
                                    <small>*Jika kosong, silahkan beli paket soal dahulu</small>
                                    <select class="form-select" id="exampleFormControlSelect1" name="transaksi_id">
                                        @foreach($transaksi as $t)
                                            @if(isset($t->paketSoal[0]))
                                                <option value="{{ $t->transaksi_id }}">
                                                    {{ $t->paketSoal[0]->nama_paket }}
                                                </option>
                                            @else 
                                                <option value="0">
                                                    Paket soal tidak ada atau telah di hapus
                                                </option>
                                            @endif
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group mb-4 col-12">
                                    <label for="dateTimeFlatpickr">Waktu Pelaksanaan</label>
                                    <input class="form-control" type="datetime-local" name="waktu_pelaksanaan">
                                </div>
                                <div class="form-group mb-4 mt-3">
                                    <label for="exampleFormControlFile1">Daftar siswa</label><br>
                                    <a href="https://docs.google.com/spreadsheets/d/17WMG9pFh5jRpi5jkvJK3VQri-yQ7yxXp/edit?usp=sharing&ouid=115603411936891051531&rtpof=true&sd=true" class="btn btn-block btn-primary" style="margin-bottom: 15px;">Download format excel</a>
                                    <input type="file" name="siswa" class="form-control file-upload-input" required>    
                                </div>
                                <input type="submit" name="time" class="mt-4 mb-4 btn btn-primary">
                            </form>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

    @include('template.include.footer')
    
</div>
@endsection