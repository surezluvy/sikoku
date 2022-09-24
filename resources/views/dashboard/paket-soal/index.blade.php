{{-- <!DOCTYPE html>
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

</html> --}}
@extends('template.admin')
@section('content')
<div id="content" class="main-content">
    <div class="layout-px-spacing">

        <div class="middle-content container-xxl p-0">

            <!-- BREADCRUMB -->
            <div class="page-meta">
                <nav class="breadcrumb-style-one" aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ url()->previous() }}">Paket Soal</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Daftar Paket</li>
                    </ol>
                </nav>
            </div>
            <!-- /BREADCRUMB -->

            <!-- CONTENT AREA -->
            <div class="row layout-top-spacing">
                <!-- <div class="seperator-header"> -->

                    <!-- Hapus Soal -->
                    @foreach($paketSoal as $paket)
                    <div class="modal fade" id="deleteConformation{{ $paket->paket_soal_id }}" tabindex="-1" role="dialog"
                        aria-labelledby="deleteConformationLabel" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content" id="deleteConformationLabel">
                                <div class="modal-header">
                                    <div class="icon">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                            class="feather feather-trash-2">
                                            <polyline points="3 6 5 6 21 6"></polyline>
                                            <path
                                                d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2">
                                            </path>
                                            <line x1="10" y1="11" x2="10" y2="17"></line>
                                            <line x1="14" y1="11" x2="14" y2="17"></line>
                                        </svg>
                                    </div>
                                    <h5 class="modal-title" id="exampleModalLabel">Delete the task?</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <p class="">Apakah anda yakin ingin menghapus paket soal <strong>{{ $paket->nama_paket }}</strong>?</p>
                                </div>
                                <div class="modal-footer">
                                    <form action="" method="get">
                                        <button type="button" class="btn"
                                            data-bs-dismiss="modal">Cancel</button>
                                        <a href="{{ route('admin-hapusPaketSoal', $paket->paket_soal_id) }}" class="btn btn-danger"
                                            data-remove="task">Delete</a>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach

                <!-- </div> -->

                <div class="row layout-spacing">
                    <div class="col-lg-12">
                        
                        <div class="statbox widget box box-shadow">
                            <div class="widget-content widget-content-area">
                                
                                <table class="multi-table table table-striped dt-table-hover table-bordered"
                                    style="width:100%">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Nama Paket</th>
                                            <th>User Add</th>
                                            <th>Harga</th>
                                            <th>Lama Waktu Pengerjaan</th>
                                            <th>Punya saya</th>
                                            <th class="text-center dt-no-sorting">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @php
                                            $no = 1;
                                        @endphp
                                        @foreach($paketSoal as $paket)
                                            <tr>
                                                <td>{{ $no++ }}</td>
                                                <td>{{ $paket->nama_paket }}</td>
                                                <td>
                                                    @if($paket->user_add == null)
                                                        Anonymous
                                                    @else
                                                        {{ ucfirst($paket->userAdd->name) }}
                                                    @endif
                                                </td>
                                                <td>
                                                    @if($paket->harga == null)
                                                        Gratis
                                                    @else
                                                        Rp. {{ number_format($paket->harga,0,',','.') }}
                                                    @endif
                                                </td>
                                                <td>{{ $paket->waktu_pengerjaan }}</td>
                                                <td>
                                                    @if (\App\Models\Transaksi::where('user_id', auth()->user()->user_id)->where('paket_soal_id', $paket->paket_soal_id)->first())
                                                        <span class="badge badge-success mb-2 me-4">Owned</span>
                                                    @else
                                                        <span class="badge badge-danger mb-2 me-4">Not Owned</span>
                                                    @endif
                                                </td>
                                                <td class="text-center">
                                                    
                                                    @if (\App\Models\Transaksi::where('user_id', auth()->user()->user_id)->where('paket_soal_id', $paket->paket_soal_id)->first())
                                                        <a href="{{ route('dashboard-batch') }}" class="dropdown-item">Tambah batch</a>
                                                    @else
                                                        <a class="dropdown-item" href="{{ route('dashboard-detailPaket', $paket->paket_soal_id) }}">Detail</a>
                                                    @endif
                                                    <!-- <div class="dropdown">
                                                        <a class="dropdown-toggle" href="#" role="button"
                                                            id="dropdownMenuLink1" data-bs-toggle="dropdown"
                                                            aria-haspopup="true" aria-expanded="true">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                height="24" viewBox="0 0 24 24" fill="none"
                                                                stroke="currentColor" stroke-width="2"
                                                                stroke-linecap="round" stroke-linejoin="round"
                                                                class="feather feather-more-horizontal">
                                                                <circle cx="12" cy="12" r="1"></circle>
                                                                <circle cx="19" cy="12" r="1"></circle>
                                                                <circle cx="5" cy="12" r="1"></circle>
                                                            </svg>
                                                        </a>
                                                        <div class="dropdown-menu"
                                                            aria-labelledby="dropdownMenuLink1">
                                                            @if (\App\Models\Transaksi::where('user_id', auth()->user()->user_id)->where('paket_soal_id', $paket->paket_soal_id)->first())
                                                                <a href="{{ route('dashboard-batch') }}" class="dropdown-item">Tambah batch</a>
                                                            @else
                                                                <a class="dropdown-item" href="{{ route('dashboard-detailPaket', $paket->paket_soal_id) }}">Detail</a>
                                                            @endif
                                                        </div>
                                                    </div> -->
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            <th>No</th>
                                            <th>Nama Paket</th>
                                            <th>User Add</th>
                                            <th>Harga</th>
                                            <th>Lama Waktu Pengerjaan</th>
                                            <th class="text-center dt-no-sorting">Action</th>
                                        </tr>
                                    </tfoot>
                                </table>

                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>
            <!-- CONTENT AREA -->

        </div>

    </div>

    @include('template.include.footer')

</div>
@endsection