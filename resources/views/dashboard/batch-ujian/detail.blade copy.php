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
                        <li class="breadcrumb-item"><a href="Daftar-batch-ujian.html">Daftar Batch Ujian</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Detail Batch Ujian</li>
                    </ol>
                </nav>
            </div>
            <!-- /BREADCRUMB -->

            <!-- CONTENT AREA -->
            <div class="row layout-top-spacing">

                <div class="col-xl-12 col-lg-12 col-sm-12  layout-spacing">
                    <div class="widget-content widget-content-area br-8" style="padding: 25px">
                        <table id="zero-config" class="table table-striped dt-table-hover" style="width:100%">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nama Siswa</th>
                                    <th>Token</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php
                                    $no = 1;
                                @endphp
                                @foreach ($batch->siswa as $siswa)
                                    <tr>
                                        <td>{{ $no++ }}</td>
                                        <td>{{ ucfirst($siswa['nama_siswa']) }}</td>
                                        <td>{{ $siswa['token'] }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                            <tfoot>
                                <tr>
                                    <th>Nama Siswa</th>
                                    <th>Token</th>
                                </tr>
                            </tfoot>
                        </table>
                    </div>
                </div>
            </div>
            <!-- CONTENT AREA -->

        </div>

    </div>

    @include('template.include.footer')

</div>
@endsection