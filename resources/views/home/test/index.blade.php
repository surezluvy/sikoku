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
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
            integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
            integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
            crossorigin="anonymous" referrerpolicy="no-referrer" />

        <!-- CSS -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
            integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
            crossorigin="anonymous" referrerpolicy="no-referrer" />
        <link rel="stylesheet" href="{{ asset('home/css/token.css') }}">
        <title>Token Guru</title>
    </head>

    <body>

        <!-- ========== Start NAVIGASI ========== -->
        <nav class="navbar navbar-expand-xl">
            <div class="container-fluid justify-content-xl-center">
                <a class="navbar-brand d-xl-none d-lg-block" href="#">
                    <img src="{{ asset('home/assets/Vector.svg') }}" alt="vektor" title="vektor">
                    <img src="{{ asset('home/assets/SIKOKU.svg') }}" alt="sikoku" title="sikoku">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-center" id="navbarNavAltMarkup">
                    <div class="navbar-nav align-items-center justify-content-center">
                        <a class="nav-link logo me-auto mx-auto d-xl-flex d-none" href="#">
                            <img src="{{ asset('home/assets/Vector.svg') }}" alt="vektor" title="vektor">
                            <img src="{{ asset('home/assets/SIKOKU.svg') }}" alt="sikoku" title="sikoku">
                        </a>
                        <a class="nav-link mx-auto" aria-current="page" href="{{ route('index') }}#tentang">Tentang</a>
                        <a class="nav-link mx-auto" href="{{ route('index') }}#fitur">Fitur-fitur</a>
                        <a class="nav-link mx-auto" href="{{ route('index') }}#paket">Paket</a>
                        <a class="nav-link mx-auto" href="{{ route('index') }}#testimoni">Testimonial</a>
                        <a class="nav-link link mx-auto ms-xl-4" href="{{ route('masuk') }}">Masuk sebagai guru</a>
                        <!-- <div class="col-xl-2 col-lg-3 col-md-4 col-sm-5 col-6 d-xl-flex justify-content-xl-end mx-auto
                                align-items-xl-center d-flex justify-content-center align-items-center
                                mt-xl-0 mt-2 ms-xl-5 d-lg-none d-md-none d-sm-none d-block">
                            <button type="submit" class="btn" name="submit" disabled>Mulai Tes</button>
                        </div> -->
                    </div>
                </div>
            </div>
        </nav>
        <!-- ========== End NAVIGASI ========== -->

        <!-- ========== Start TOKEN ========== -->
        <section class="token">
            <div class="container">
                <form action="{{ route('inputToken') }}" class="needs-validation" method="post" novalidate>
                    @csrf
                    <div class="row d-flex justify-content-center">
                        <div class="col-10 d-flex justify-content-center">
                            <img src="{{ asset('home/assets/gambar2.svg') }}" alt="Gambar token" title="Gambar token">
                        </div>
                        <div class="col-xl-6 col-lg-8 col-md-8 col-sm-10 col-12 text-center">
                            <h4>Silahkan masukan token terlebih dahulu, minta dari gurumu</h4>
                            <p>Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type</p>
                        </div>
                    </div>
                    <div class="row d-flex justify-content-center">
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-8 col-10 form">
                            <input name="token" type="text" class="form-control" id="exampleFormControlInput1"
                                placeholder="Masukkan Token Disini" required>

                                {{-- BUG: Tidak muncul feedback --}}
                                @if(session('error'))
                                    <p class="text-danger text-center mt-0">{{ session('error') }}</p>
                                @endif

                        </div>
                    </div>
                    <div class="row d-flex justify-content-center">
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-8 col-10 d-flex justify-content-center">
                            <button type="submit" class="btn" name="submit">Selanjutnya</button>
                        </div>
                    </div>
                </form>
            </div>
        </section>
        <!-- ========== End TOKEN ========== -->

        <!-- JS BOOTSTRAP -->
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js"
            integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous">
        </script>
        <script cript src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js"
            integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy" crossorigin="anonymous">
        </script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"
            integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ=="
            crossorigin="anonymous" referrerpolicy="no-referrer"></script>

        <!-- JS -->
        <script src="{{ asset('home/js/token.js') }}"></script>
    </body>

</html>
