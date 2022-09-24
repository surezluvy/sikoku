<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- G FONTS -->
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap');
    </style>
    <!-- BOOTSTRAP -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
          integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
          crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    @if($id <= count(session('soal')))
        <link rel="stylesheet" href="{{ asset('home/css/pilihan-ganda.css') }}">
    @else
        <link rel="stylesheet" href="{{ asset('home/css/kirim-jawaban.css') }}">
    @endif
    <title>Pilihan Ganda</title>
</head>
<body>
<!-- ========== Start NAVIGASI ========== -->
<nav>
    <div class="container-fluid">
        <div class="row justify-content-center d-flex align-items-center">
            <div class="col-xl-2 col-lg-3 col-md-3 col-sm-6 col-6 mx-auto">
                <img src="{{ asset('home/assets/Vector.svg') }}" alt="vektor" title="vektor">
                <img src="{{ asset('home/assets/SIKOKU.svg') }}" alt="sikoku" title="sikoku">
            </div>
            <div
                class="col-xl-8 col-lg-6 col-md-6 d-xl-flex d-lg-flex d-md-flex d-sm-none d-none justify-content-center">
                @if($id <= count(session('soal')))
                    <p>Subtest 1 / Bagian 1 / <span>Pertanyaan 10</span> dari 20</p>
                @else
                    <p>Terimakasih banyak telah mengikuti tes kali ini</p>
                @endif
            </div>
            <div
                class="col-xl-2 col-lg-3 col-md-3 col-sm-6 col-6 d-flex align-items-center justify-content-end">
                <h4 class="me-xl-3 me-lg-3 me-md-3 me-sm-3 me-3">{{ ucfirst(session('siswa')[0]['nama_siswa']) }}</h4>
                <div class="avatar d-flex justify-content-center align-items-center">
                    <i class="fa-solid fa-user"></i>
                </div>
            </div>
        </div>
    </div>
</nav>
<!-- ========== End NAVIGASI ========== -->

<div
    class="col-xl-4 col-lg-4 col-md-4 d-xl-none d-lg-none d-md-none d-sm-flex d-flex justify-content-center mx-auto mb-4 muncul">
    @if($id <= count(session('soal')))
        <p>Subtest 1 / Bagian 1 / <span>Pertanyaan 10</span> dari 20</p>
    @else
        <p>Terimakasih banyak telah mengikuti tes kali ini</p>
    @endif
</div>

@if($id <= count(session('soal')))
    <!-- WAKTU -->
    <section class="waktu">
        <div class="container">
            <div class="row">
                <div class="sisawaktu col-6 d-flex justify-content-center align-items-center flex-column mx-auto">
                    <h4>Sisa Waktu</h4>
                    <div class="waktu d-flex justify-content-center align-items-center">
                        <img src="{{ asset('home/assets/Waktu.svg') }}" alt="waktu" title="waktu">
                        <p class="countdown">{{ session('waktu_pengerjaan') }}</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- END WAKTU -->


    <!-- ========== Start Soal ========== -->
    <section class="soal">
        <div class="container">
            <form class="needs-validation" action="{{ route('test-mulai', $id+1) }}" method="post">
                @csrf
                <div class="text-soal row">
                    <div class="col-8 col-sm-10 col-md-10 col-lg-8 col-xl-6 mx-auto">
                        <p class="text-center">{{ session('soal')[$id-1]['pertanyaan'] }}</p>
                    </div>
                </div>

                @if(session('soal')[$id-1]['tipe_soal'] == 'pilgan')
                    <input type="hidden" name="soal_pg_id" value="{{ session('soal')[$id-1]['soal_pg_id'] }}"><br>
                @elseif(session('soal')[$id-1]['tipe_soal'] == '2d')
                    <input type="hidden" name="soal_2d_id" value="{{ session('soal')[$id-1]['soal_2d_id'] }}"><br>
                @endif
                <input type="hidden" name="pertanyaan" value="{{ session('soal')[$id-1]['pertanyaan'] }}"><br>

                <div class="row">
                    <div class="col-8 col-sm-10 col-md-10 col-lg-8 col-xl-6 mx-auto">
                        @foreach(session('soal')[$id-1]['jawaban'] as $jwb)
                            <div class="form-check mb-3">
                                <input name="pilihan" class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1" value="{{ $jwb['pilihan'] }}" required>
                                <label class="form-check-label" for="flexRadioDefault1">
                                    {{ $jwb['pilihan'] }}
                                </label>
                                <input type="hidden" name="value_pilihan" value="{{ $jwb['value_pilihan'] }}">
                            </div>
                        @endforeach
                    </div>
                </div>
                @if($id == count(session('soal')))
                    <div class="col-6 col-sm-6 col-md-6 col-lg-4 col-xl-4 mx-auto">
                        <button type="submit" class="btn" name="submit" disabled>Selesai</button>
                    </div>
                @else
                    <div class="col-6 col-sm-6 col-md-6 col-lg-4 col-xl-4 mx-auto">
                        <button type="submit" class="btn" name="submit" disabled>Pertanyaan Selanjutnya</button>
                    </div>
                @endif
            </form>
        </div>
    </section>
    <!-- ========== End Soal ========== -->
@else
    <section class="token">
        <div class="container">
            <div class="row d-flex justify-content-center">
                <div class="col-10 d-flex justify-content-center">
                    <img src="{{ asset('home/assets/gambar2.svg') }}" alt="Gambar token" title="Gambar token">
                </div>
                <div class="col-xl-6 col-lg-8 col-md-8 col-sm-10 col-12 text-center">
                    <div class="row">
                        <div class="col-xl-5 col-lg-5 col-md-6 col-sm-6 col-6 mx-auto">
                            <h4>Terima kasih, {{ ucfirst(session('siswa')[0]['nama_siswa']) }}</h4>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xl-9 col-lg-9 col-md-10 col-sm-11 col-12 mx-auto">
                            <p>Silahkan kirim jawaban anda sebelum keluar,
                                sebelum mengakhiri sesi tes ini, Terima kasih</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row d-flex justify-content-center btn-1">
                <div class="col-xl-5 col-lg-5 col-md-5 col-sm-7 col-9 d-flex justify-content-center">
                    <button type="submit" class="btn" name="submit" data-bs-toggle="modal"
                            data-bs-target="#staticBackdrop">Kirim Jawaban</button>
                </div>
            </div>
            <form action="{{ route('index') }}" method="get">
                <div class="row d-flex justify-content-center btn-2">
                    <div class="col-xl-5 col-lg-5 col-md-5 col-sm-7 col-9 d-flex justify-content-center">
                        <button type="submit" class="btn" name="submit" disabled>Keluar</button>
                    </div>
                </div>
            </form>
        </div>
    </section>
    <!-- Modal -->
    <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false"
         tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="staticBackdropLabel">Kirim Jawaban</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                            aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    Apakah anda yakin untuk mengirimkan jawaban?
                </div>
                <div class="modal-footer">
                    <form action="">
                        <button type="button" class="btn btn-secondary"
                                data-bs-dismiss="modal">Batal</button>
                        <a href="{{ route('test-kirimJawaban') }}" class="btn btn-primary yakin">Kirim jawaban</a>
                    </form>
                </div>
            </div>
        </div>
    </div
        {{--    <h5>Poin anda adalah: {{ session('point') }}</h5>--}}
        @endif

        <!-- JS BOOTSTRAP -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
    <script cript src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"
            integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ=="
            crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <!-- JS -->
    <!-- <script src="./js/script1.js"></script> -->
    <script src="{{ asset('home/js/pilihan-ganda.js') }}"></script>

</body>
</html>
