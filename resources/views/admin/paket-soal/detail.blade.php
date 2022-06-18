@extends('template.admin')
@section('content')
<div id="content" class="main-content">
    <div class="layout-px-spacing">

        <div class="middle-content container-xxl p-0">

            <!-- BREADCRUMB -->
            <div class="page-meta">
                <nav class="breadcrumb-style-one" aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ url()->previous() }}">Daftar Paket</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Detail Paket Soal - {{ $paketSoal->nama_paket }}</li>
                    </ol>
                </nav>
            </div>
            <!-- /BREADCRUMB -->

            <!-- CONTENT AREA -->
            <div class="row layout-top-spacing">
                
                <!-- Jawaban Soal -->
                @for($u = 0; $u <= count($paketSoal->soal) - 1; $u++)
                    <div class="modal fade bd-example-modal-xl" id="jawaban-soal{{ $u }}" tabindex="-1" role="dialog"
                        aria-labelledby="exampleModalLabel" aria-hidden="true" data-backdrop="static">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">List Jawaban</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close">
                                        <svg aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24"
                                            height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                            class="feather feather-x">
                                            <line x1="18" y1="6" x2="6" y2="18"></line>
                                            <line x1="6" y1="6" x2="18" y2="18"></line>
                                        </svg>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <div class="row">
                                        <div class="col-lg-12 col-12 ">
                                            <!-- Links -->
                                            <div class="list-group">
                                                @foreach($paketSoal->soal[$u]['jawaban'] as $jawaban)
                                                    <li class="list-group-item">{{ $jawaban['pilihan'] }} [{{ $jawaban['value_pilihan'] }}]</li>
                                                @endforeach
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button class="btn" data-bs-dismiss="modal"><i class="flaticon-cancel-12"></i>
                                        Kembali</button>
                                </div>
                            </div>
                        </div>
                    </div>
                @endfor

                <div class="row">
                    <div class="col-xl-12 col-lg-12 col-sm-12 layout-spacing">

                        <div class="statbox widget box box-shadow">
                            <div class="widget-content widget-content-area">
                                <table class="multi-table table table-striped dt-table-hover table-bordered"
                                    style="width:100%">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Tipe soal</th>
                                            <th>Pertanyaan</th>
                                            <th class="text-center dt-no-sorting">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @php
                                            $no = 1;
                                        @endphp
                                        @for($u = 0; $u <= count($paketSoal->soal) - 1; $u++)
                                            <tr>
                                                <td>{{ $no++ }}</td>
                                                <td>
                                                    @if(isset($paketSoal->soal[$u]['tipe_soal']))
                                                        {{ ucfirst($paketSoal->soal[$u]['tipe_soal']) }}
                                                    @else
                                                        Kosong
                                                    @endif
                                                </td>
                                                <td>{{ $paketSoal->soal[$u]['pertanyaan'] }}</td>
                                                <td class="text-center">
                                                    <button class="btn btn-primary" data-bs-toggle="modal"
                                                        data-bs-target="#jawaban-soal{{ $u }}">
                                                        Jawaban
                                                    </button>
                                                </td>
                                            </tr>
                                        @endfor
                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            <th>No</th>
                                            <th>Tipe soal</th>
                                            <th>Pertanyaan</th>
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