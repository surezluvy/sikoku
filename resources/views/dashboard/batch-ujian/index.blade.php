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

    {{-- <a href="{{ route('dashboard-tambahBatch') }}">Tambah batch</a> --}}

    {{-- List batch dengan user id yang sedang login --}}
    {{-- @if($batch->isEmpty())
        <p>Tidak ada batch</p>
    @else
        @foreach($batch as $b)
            <p>{{ $b->batch_id }}</p>
            <p>Waktu pelaksanaan: {{ $b->waktu_pelaksanaan }}</p>
            <ul>
                @foreach($b->siswa as $siswa)
                    <li>{{ $siswa['nama_siswa'] }} || {{ $siswa['token'] }}</li>
                @endforeach
            </ul>
        @endforeach --}}
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
    {{-- @endif
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
                        <li class="breadcrumb-item"><a href="#">Batch Ujian</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Daftar Batch Ujian</li>
                    </ol>
                </nav>
            </div>
            <!-- /BREADCRUMB -->

            <!-- CONTENT AREA -->
            <div class="row layout-top-spacing">
                <!-- Hapus Soal -->
                <div class="modal fade" id="deleteConformation" tabindex="-1" role="dialog"
                    aria-labelledby="deleteConformationLabel" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content" id="deleteConformationLabel">
                            <div class="modal-header">
                                <div class="icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round"
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
                                <p class="">Apakah anda yakin ingin menghapus?</p>
                            </div>
                            <div class="modal-footer">
                                <form action="" method="get">
                                    <button type="button" class="btn" data-bs-dismiss="modal">Cancel</button>
                                    <button type="button" class="btn btn-danger"
                                        data-remove="task">Delete</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- <div class="seperator-header">
                </div> -->
                <div class="col-xl-12 col-lg-12 col-sm-12 layout-spacing">

                    <div class="statbox widget box box-shadow">
                        <div class="widget-content widget-content-area">

                            <table class="multi-table table table-striped dt-table-hover table-bordered"
                                style="width:100%">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Nama Paket</th>
                                        <th>Waktu Pelaksanaan</th>
                                        <th>Waktu Pengerjaan</th>
                                        <th class="text-center dt-no-sorting">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php
                                        $no = 1;
                                    @endphp
                                    @foreach($batch as $b)
                                        @php
                                            $paket = \App\Models\PaketSoal::where('paket_soal_id', $b->transaksi->paket_soal_id)->first();
                                        @endphp
                                        <tr>
                                            <td>{{ $no++ }}</td>
                                            <td>{{ $paket->nama_paket }}</td>
                                            <td>{{ $b->waktu_pelaksanaan }}</td>
                                            <td>{{ $paket->waktu_pengerjaan }}</td>
                                            <td class="text-center">
                                                <div class="action-btns">
                                                    <a href="{{ route('dashboard-detailBatch', $b->batch_id) }}" class="action-btn btn-view bs-tooltip me-2" data-toggle="tooltip"
                                                        data-placement="top" title="" data-bs-original-title="View">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                            class="feather feather-eye">
                                                            <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z">
                                                            </path>
                                                            <circle cx="12" cy="12" r="3"></circle>
                                                        </svg>
                                                    </a>
                                                    {{-- <a href="Ubah-paket.html" class="action-btn btn-edit bs-tooltip me-2" data-toggle="tooltip" data-placement="top"
                                                        title="" data-bs-original-title="Edit">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                            class="feather feather-edit-2">
                                                            <path d="M17 3a2.828 2.828 0 1 1 4 4L7.5 20.5 2 22l1.5-5.5L17 3z">
                                                            </path>
                                                        </svg>
                                                    </a>
                                                    <a href="" class="action-btn btn-delete bs-tooltip" data-bs-toggle="modal" data-bs-target="#deleteConformation"
                                                        data-placement="top" title="" data-bs-original-title="Delete">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                            class="feather feather-trash-2">
                                                            <polyline points="3 6 5 6 21 6"></polyline>
                                                            <path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2">
                                                            </path>
                                                            <line x1="10" y1="11" x2="10" y2="17"></line>
                                                            <line x1="14" y1="11" x2="14" y2="17"></line>
                                                        </svg>
                                                    </a> --}}
                                                </div>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th>Nama Paket</th>
                                        <th>Waktu Pelaksanaan</th>
                                        <th>Waktu Pengerjaan</th>
                                        <th class="text-center">Action</th>
                                    </tr>
                                </tfoot>
                            </table>

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