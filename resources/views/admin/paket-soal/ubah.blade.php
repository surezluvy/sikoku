{{-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Ubah Paket Soal</h1>

    <form action="{{ route('admin-prosesUbahPaketSoal', $paketSoal->paket_soal_id) }}" method="post">
        @csrf
        <input type="text" name="nama_paket" value="{{ $paketSoal->nama_paket }}">
        <button type="submit" value="Simpan">Simpan</button>
    </form>
</body>
</html> --}}
@extends('template.admin')
@section('content')
<div id="content" class="main-content">
    <div class="">
        <div class="container">

            <!-- BREADCRUMB -->
            <div class="page-meta">
                <nav class="breadcrumb-style-one" aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ url()->previous() }}">Form</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Wizards</li>
                    </ol>
                </nav>
            </div>
            <!-- /BREADCRUMB -->

            <div class="row layout-top-spacing" id="cancel-row">

                <div id="wizard_Default" class="col-lg-12 layout-spacing">
                    <div class="statbox widget box box-shadow">
                        <div class="widget-header">
                            <div class="row">
                                <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                    <h4>Default</h4>
                                </div>
                            </div>
                        </div>
                        <div class="widget-content widget-content-area">
                            <div class="bs-stepper stepper-form-one">
                                <div class="bs-stepper-header" role="tablist">
                                    <div class="step" data-target="#defaultStep-one">
                                        <button type="button" class="step-trigger" role="tab">
                                            <span class="bs-stepper-circle">1</span>
                                            <span class="bs-stepper-label">Deskripsi paket</span>
                                        </button>
                                    </div>
                                    <div class="line"></div>
                                    <div class="step" data-target="#defaultStep-two">
                                        <button type="button" class="step-trigger" role="tab">
                                            <span class="bs-stepper-circle">2</span>
                                            <span class="bs-stepper-label">Pilih soal pilihan ganda</span>
                                        </button>
                                    </div>
                                    <div class="line"></div>
                                    <div class="step" data-target="#defaultStep-three">
                                        <button type="button" class="step-trigger" role="tab">
                                            <span class="bs-stepper-circle">3</span>
                                            <span class="bs-stepper-label">
                                                <span class="bs-stepper-title">Pilih soal 2d</span>
                                            </span>
                                        </button>
                                    </div>
                                </div>
                                <form action="{{ route('admin-prosesUbahPaketSoal', $paketSoal->paket_soal_id) }}" method="post" class="form-check form-check-primary">
                                    @csrf
                                    <div class="bs-stepper-content">
                                        <div id="defaultStep-one" class="content" role="tabpanel">
                                            <div class="form-group mb-4">
                                                <label for="defaultForm-name">Nama paket</label>
                                                <input type="text" name="nama_paket" class="form-control" id="defaultForm-name" value="{{ $paketSoal->nama_paket }}" required>
                                            </div>
                                            <div class="form-group mb-4">
                                                <label for="defaultForm-name">Waktu pengerjaan</label>
                                                <input id="timeFlatpickr"
                                                    class="form-control flatpickr flatpickr-input active"
                                                    type="time" placeholder="Select Date.."
                                                    name="waktu_pengerjaan" value="{{ $paketSoal->waktu_pengerjaan }}">
                                            </div>
                                            <div class="form-group mb-4">
                                                <label for="defaultForm-name">Harga paket</label>
                                                <input class="form-control" type="number" name="harga" value="{{ $paketSoal->harga }}">
                                            </div>

                                            <div class="button-action mt-5">
                                                <button class="btn btn-secondary btn-prev me-3" disabled>Prev</button>
                                                <button type="button" class="btn btn-secondary btn-nxt">Next</button>
                                            </div>
                                        </div>
                                        <div id="defaultStep-two" class="content" role="tabpanel">
                                            <div class="row layout-top-spacing">
                    
                                                <div class="col-xl-12 col-lg-12 col-sm-12  layout-spacing">
                                                    <div class="widget-content widget-content-area br-8">
                                                        <table id="zero-config" class="table table-striped dt-table-hover" style="width:100%">
                                                            <thead>
                                                                <tr>
                                                                    <th>No</th>
                                                                    <th class="text-center"></th>
                                                                    <th class="text-center">Pertanyaan</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                @php
                                                                    $no = 1;
                                                                @endphp
                                                                @foreach($soalPilgan as $pilgan)
                                                                    <tr>
                                                                        <td> {{ $no++ }} </td>
                                                                        <td>
                                                                            <input class="form-check-input" type="checkbox" id="form-check-default-checked" name="soalPilgan[]" value="{{ $pilgan->soal_pg_id }}"
                                                                                @foreach($paketSoal->soal as $soal)
                                                                                    @if(isset($soal['soal_pg_id']))
                                                                                        @if($pilgan->soal_pg_id == $soal['soal_pg_id'])
                                                                                            checked
                                                                                        @endif
                                                                                    @endif
                                                                                @endforeach
                                                                            >
                                                                        </td>
                                                                        <td>{{ $pilgan->pertanyaan }}</td>
                                                                    </tr>
                                                                @endforeach
                                                            </tbody>
                                                            <tfoot>
                                                                <tr>
                                                                    <th>No</th>
                                                                    <th class="text-center"></th>
                                                                    <th class="text-center">Pertanyaan</th>
                                                                </tr>
                                                            </tfoot>
                                                        </table>
                                                    </div>
                                                </div>
                            
                                            </div>

                                            <div class="button-action mt-5">
                                                <button class="btn btn-secondary btn-prev me-3">Prev</button>
                                                <button type="button" class="btn btn-secondary btn-nxt">Next</button>
                                            </div>
                                        </div>
                                        <div id="defaultStep-three" class="content" role="tabpanel">
                                            <div class="row layout-top-spacing">
                    
                                                <div class="col-xl-12 col-lg-12 col-sm-12  layout-spacing">
                                                    <div class="widget-content widget-content-area br-8">
                                                        <table id="zero-config2" class="table table-striped dt-table-hover" style="width:100%">
                                                            <thead>
                                                                <tr>
                                                                    <th>No</th>
                                                                    <th class="text-center"></th>
                                                                    <th class="text-center">Pertanyaan</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                @php
                                                                    $no = 1;
                                                                @endphp
                                                                @foreach($soal2d as $s2d)
                                                                    <tr>
                                                                        <td> {{ $no++ }} </td>
                                                                        <td>
                                                                            <input class="form-check-input" type="checkbox" id="form-check-default-checked"  name="soal2d[]" value="{{ $s2d->soal_2d_id }}"
                                                                            @foreach($paketSoal->soal as $soal)
                                                                                @if(isset($soal['soal_2d_id']))
                                                                                    @if($s2d->soal_2d_id == $soal['soal_2d_id'])
                                                                                        checked
                                                                                    @endif
                                                                                @endif
                                                                            @endforeach
                                                                            >
                                                                        </td>
                                                                        <td>{{ $s2d->pertanyaan }}</td>
                                                                    </tr>
                                                                @endforeach
                                                            </tbody>
                                                            <tfoot>
                                                                <tr>
                                                                    <th>No</th>
                                                                    <th class="text-center"></th>
                                                                    <th class="text-center">Pertanyaan</th>
                                                                </tr>
                                                            </tfoot>
                                                        </table>
                                                    </div>
                                                </div>
                            
                                            </div>

                                            <div class="button-action mt-3">
                                                <button class="btn btn-secondary btn-prev me-3">Prev</button>
                                                <button class="btn btn-success me-3" type="submit">Submit</button>
                                            </div>
                                        </div>
                                    </div>
                                    
                                </form>
                            </div>

                        </div>
                    </div>
                </div>

            </div>

        </div>
    </div>

    @include('template.include.footer')

</div>
@endsection
