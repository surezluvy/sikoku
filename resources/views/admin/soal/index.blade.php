
@extends('template.admin')
@section('content')
<div id="content" class="main-content">
    <div class="layout-px-spacing">

        <div class="middle-content container-xxl p-0">

            <!-- BREADCRUMB -->
            <div class="page-meta">
                <nav class="breadcrumb-style-one" aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ url()->previous() }}">Soal</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Pilihan Ganda</li>
                    </ol>
                </nav>
            </div>
            <!-- /BREADCRUMB -->

            <!-- CONTENT AREA -->
            <div class="row layout-top-spacing">

                <div class="seperator-header">
                    <button type="button" class="btn btn-primary mr-2" data-bs-toggle="modal"
                        data-bs-target="#tambah-excel">
                        Tambah Excel
                    </button>
                    <button type="button" class="btn btn-primary mr-2" data-bs-toggle="modal"
                        data-bs-target="#exampleModal">
                        Tambah Soal
                    </button>
                </div>

                <!-- Tambah Soal -->
                <div class="modal fade bd-example-modal-lg" id="exampleModal" tabindex="-1" role="dialog"
                    aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-lg" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Tambah Pilihan Ganda</h5>
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
                            <form method="post" action="{{ route('admin-prosesTambahSoal', $tipe) }}">
                                @csrf
                                <input type="hidden" name="tipe" value="{{ $tipe }}">
                                <div class="modal-body">
                                    <div class="row">
                                        <div class="col-lg-12 col-12 ">
                                            <div class="form-group">
                                                <label for="pertanyaan" class="">Pertanyaan</label>
                                                <input id="pertanyaan" type="text" name="pertanyaan"
                                                placeholder="Some Text..." class="form-control" required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mt-4">
                                        <div class="col-12 d-flex justify-content-between align-items-center">
                                            <button type="button" class="btn btn-primary mr-2 tambah">
                                                Tambah Jawaban
                                            </button>
                                            <button type="button" class="btn btn-light mr-2 icon">
                                                Hapus
                                            </button>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12 ">
                                            <div class="form-group">
                                                <div class="form">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button class="btn" data-bs-dismiss="modal"><i class="flaticon-cancel-12"></i>
                                        Discard</button>
                                        <button type="submit" class="btn btn-primary">Save</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

                <!-- Tambah Excel -->
                <div class="modal fade bd-example-modal-xl" id="tambah-excel" tabindex="-1" role="dialog"
                    aria-labelledby="exampleModalLabel" aria-hidden="true" data-backdrop="static">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Masukkan Excel</h5>
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
                            <form action="{{ route('admin-prosesTambahSoalExcel') }}" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="modal-body">
                                    <div class="row">
                                        <div class="col-lg-12 col-12 ">
                                            <a target="blank" href="https://docs.google.com/spreadsheets/d/1Z4dO_p0G5CMDc_UItvLadfAD8V414kESm_kppEgMxEM/edit?usp=sharing" class="btn btn-primary mb-4">Download format Excel</a>
                                            <input type="hidden" name="tipe" value="{{ $tipe }}">
                                            <input type="file" name="soal" class="form-control file-upload-input" accept="application/vnd.openxmlformats-officedocument.spreadsheetml.sheet, application/vnd.ms-excel" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button class="btn" data-bs-dismiss="modal"><i class="flaticon-cancel-12"></i>
                                        Discard</button>
                                    <button type="submit" class="btn btn-primary">Save</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

                @foreach($kumpulan_soal as $soal)
                <!-- Edit Soal -->
                <div class="modal fade bd-example-modal-xl" id="edit-soal{{ $soal->$id }}" tabindex="-1" role="dialog"
                    aria-labelledby="exampleModalLabel" aria-hidden="true" data-backdrop="static">
                    <div class="modal-dialog modal-lg" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Ubah Pilihan Ganda</h5>
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
                            <form action="{{ route('admin-prosesUbahSoal', $tipe) }}" method="post">
                                @csrf
                                <input type="hidden" name="tipe" value="{{ $tipe }}">
                                <input type="hidden" name="id" value="{{ $soal->$id }}">
                                <div class="modal-body">
                                    <div class="row">
                                        <div class="col-lg-12 col-12 ">
                                            <div class="form-group">
                                                <label for="pertanyaan" class="">Pertanyaan</label>
                                                <textarea id="pertanyaan" type="text" name="pertanyaan"
                                                    placeholder="Some Text..." class="form-control" required>{{ $soal->pertanyaan }}</textarea>
                                            </div>
                                            <div class="row">
                                                <div class="col-12 ">
                                                    <div class="form-group"><br>
                                                        <label for="pertanyaan" class="">Jawaban & Poin</label>
                                                        @foreach($soal->key as $key)
                                                            <input type="hidden" name="id_key[]" value="{{ $key->$id_key }}">
                                                            <div class="form mt-4">
                                                                <input type="text" name="pilihan[]" value="{{ $key->pilihan }}" placeholder="A" class="form-control mb-2 pilihan">
                                                                <input type="number" value="{{ $key->value_pilihan }}" name="value_pilihan[]" placeholder="Point A" class="form-control mb-2">
                                                                <hr>
                                                            </div>
                                                        @endforeach
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button class="btn" data-bs-dismiss="modal"><i class="flaticon-cancel-12"></i>
                                        Discard</button>
                                    <button type="submit" class="btn btn-primary">Save</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

                <!-- Hapus Soal -->
                <div class="modal fade" id="deleteConformation{{ $soal->$id }}" tabindex="-1" role="dialog"
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
                                <h5 class="modal-title" id="exampleModalLabel">Menghapus Pilihan Ganda?</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <p class="">Apakah anda yakin ingin menghapus pertanyaan <strong>{{ $soal->pertanyaan }}</strong> beserta jawabannya?</p>
                            </div>
                            <div class="modal-footer">
                                <form action="" method="get">
                                    <button type="button" class="btn" data-bs-dismiss="modal">Cancel</button>
                                    <a href="{{ route('admin-prosesHapusSoal', [$soal->$id, $tipe]) }}" id="hapus_soal_{{ $soal->$id }}" class="btn btn-danger" data-remove="task">Delete</a>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Jawaban Soal -->
                <div class="modal fade bd-example-modal-xl" id="jawaban-soal{{ $soal->$id }}" tabindex="-1" role="dialog"
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
                                            @foreach($soal->key as $key)
                                                <li class="list-group-item">{{ $key->pilihan }} [{{ $key->value_pilihan }}]</li>
                                            @endforeach
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button class="btn" data-bs-dismiss="modal"><i
                                        class="flaticon-cancel-12"></i>
                                    Kembali</button>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach

                <div class="row">
                    <div class="col-xl-12 col-lg-12 col-sm-12 layout-spacing">

                        <div class="statbox widget box box-shadow">
                            <div class="widget-content widget-content-area">
                                <table class="multi-table table table-striped dt-table-hover table-bordered"
                                    style="width:100%">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Pertanyaan</th>
                                            <th>Jawaban</th>
                                            <th class="text-center dt-no-sorting">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @php
                                            $no = 1;
                                        @endphp
                                        @foreach($kumpulan_soal as $soal)
                                            <tr>
                                                <td>{{ $no++ }}</td>
                                                <td>{{ Str::limit($soal->pertanyaan, 75) }}</td>
                                                <td>
                                                    <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#jawaban-soal{{ $soal->$id }}">Lihat jawaban</button>
                                                </td>
                                                <td class="text-center">
                                                    <div class="dropdown">
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
                                                            <a class="dropdown-item"
                                                                href=""
                                                                data-bs-toggle="modal"
                                                                data-bs-target="#edit-soal{{ $soal->$id }}">Edit</a>
                                                            <a class="dropdown-item"
                                                                href=""
                                                                data-bs-toggle="modal"
                                                                data-bs-target="#deleteConformation{{ $soal->$id }}">Hapus</a>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            <th>No</th>
                                            <th>Pertanyaan</th>
                                            <th class="text-center">Action</th>
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

    <div class="footer-wrapper">
        <div class="footer-section f-section-1">
            <p class="">Copyright © <span class="dynamic-year">2022</span> <a target="_blank"
                    href="https://designreset.com/cork-admin/">SIKOKU</a>, All rights reserved.</p>
        </div>
        <div class="footer-section f-section-2">
            <p class="">Coded with <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                    stroke-linecap="round" stroke-linejoin="round" class="feather feather-heart">
                    <path
                        d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z">
                    </path>
                </svg></p>
        </div>
    </div>

</div>
@endsection
