@extends('template.admin')
@section('content')
<div id="content" class="main-content">
    <div class="layout-px-spacing">

        <div class="middle-content container-xxl p-0">
            
            <div class="row layout-top-spacing">
                <div class="container-fluid error-content">
                    <div class="">
                        <h1 class="error-number text-center">404</h1>
                        <p class="mini-text text-center">Ooops!</p>
                        <p class="error-text text-center">Anda belum membuat batch ujian!</p>
                        <div class="row d-flex justify-content-center mt-4">
                            <div class="col-6 d-flex justify-content-center">
                                <img src="{{ asset('admin/src/assets/img/error.svg') }}" alt="cork-admin-404" class="error-img">
                            </div>
                        </div>
                        <div class="row d-flex justify-content-center mb-4">
                            <div class="col-4 d-flex justify-content-center">
                                <a href="{{ route('dashboard-tambahBatch') }}" class="btn btn-dark mt-5">Buat batch ujian</a>
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