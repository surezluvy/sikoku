@extends('template.admin')
@section('content')
<div id="content" class="main-content">
    <div class="layout-px-spacing">

        <div class="middle-content container-xxl p-0">

            <!-- BREADCRUMB -->
            <div class="page-meta">
                <nav class="breadcrumb-style-one" aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">Datatables</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Miscellaneous</li>
                    </ol>
                </nav>
            </div>
            <!-- /BREADCRUMB -->
            <br>
            <div class="row">
            
                <div class="col-xl-12 col-lg-12 col-sm-12  layout-spacing">
                    <div class="statbox widget box box-shadow">
                        <div class="widget-content widget-content-area">
                            <table id="html5-extension" class="table dt-table-hover" style="width:100%">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Nama Siswa</th>
                                        <th>Token</th>
                                        <th>Status</th>
                                        <th>Aksi</th>
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
                                            <td>
                                                {{-- TODO: Menurutku disini membuat page load lambat --}}
                                                @if (array_key_exists('status', $siswa) && $siswa['status'] == 'selesai')
                                                    <span class="badge badge-success mb-2 me-4">Sudah tes</span>
                                                @else
                                                    <span class="badge badge-dark mb-2 me-4">Belum tes</span>
                                                @endif
                                            </td>
                                            <td>
                                                @if (array_key_exists('status', $siswa) && $siswa['status'] == 'selesai')
                                                    <a href="{{ route('dashboard-ubahTokenBatch', [$batch->batch_id, $siswa['token']]) }}" class="disabled btn btn-primary">Ubah token</a>
                                                @else
                                                    <a href="{{ route('dashboard-ubahTokenBatch', [$batch->batch_id, $siswa['token']]) }}" class="btn btn-primary">Ubah token</a>
                                                @endif
                                                
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        
    </div>
    
    @include('template.include.footer')
</div>
@endsection