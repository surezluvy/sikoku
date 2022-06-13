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
    <link rel="stylesheet" href="{{ asset('home/css/index.css') }}">
    <title>Landing Page</title>
</head>

<body>
<!-- Back to top button -->
<button type="button" class="btn btn-floating btn-lg" id="btn-back-to-top">
    <i class="fas fa-arrow-up"></i>
</button>

<!-- <div class="background-2"></div> -->
<!-- ========== Start NAVIGASI ========== -->
<section class="jumbotron">
    <nav class="navbar navbar-expand-xl">
        <div class="container-fluid justify-content-xl-center">
            <a class="navbar-brand d-xl-none d-lg-block" href="#">
                <img src="{{ asset('home/assets/Vector.svg') }}" alt="vektor" title="vektor">
                <img src="{{ asset('home/assets/SIKOKU.svg') }}" alt="sikoku" title="sikoku">
            </a>
            <div class="d-xl-none d-lg-flex d-md-flex d-sm-flex d-none muncul justify-content-center">
                <a href="{{ route('test') }}" class="btn" name="submit">Mulai Tes</a>
            </div>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false"
                    aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-center"
                 id="navbarNavAltMarkup">
                <div
                    class="navbar-nav align-items-center">
                    <a class="nav-link logo d-xl-block d-none" href="#">
                        <img src="{{ asset('home/assets/Vector.svg') }}" alt="vektor" title="vektor">
                        <img src="{{ asset('home/assets/SIKOKU.svg') }}" alt="sikoku" title="sikoku">
                    </a>
                    <a class="nav-link mx-auto mt-xl-0 mt-4" aria-current="page" href="#tentang">Tentang</a>
                    <a class="nav-link mx-auto" href="#fitur">Fitur-fitur</a>
                    <a class="nav-link mx-auto" href="#paket">Paket</a>
                    <a class="nav-link mx-auto" href="#testimoni">Testimonial</a>
                    <a class="nav-link link mx-auto ms-xl-2" href="{{ route('masuk') }}">Masuk sebagai guru</a>
                    <form action="token.html" method="get">
                        <div
                            class="d-xl-flex d-lg-none d-md-none d-sm-none d-block button justify-content-end mt-xl-0 mt-2">
                            <a href="{{ route('test') }}" class="btn" name="submit">Mulai Tes</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </nav>
    <!-- ========== End NAVIGASI ========== -->

    <div class="container-fluid fluid">
        <header>
            <div class="row d-flex justify-content-center">
                <div class="col-11 text-center">
                    <h1>Temukan minat bakatmu sekarang</h1>
                </div>
                <div class="col-12 text-center">
                    <p>
                        Hindari salah jurusan yang bisa berdampak pada bidang studi-mu dengan mengetahui minat
                        bakat dan potensi kognitif-mu bersama SIKOKU
                    </p>
                </div>
            </div>
        </header>
    </div>
    <div class="rumah justify-content-center d-xl-flex d-lg-flex-d-md-flex d-sm-flex d-none">
        <img src="{{ asset('home/assets/Mask group.svg') }}" alt="sekolah" title="sekolah">
    </div>
    <div class="pohon">
        <img src="{{ asset('home/assets/Union.svg') }}" alt="pohon" title="pohon">
    </div>
</section>


<!-- ========== Start TENTANG ========== -->
<section id="tentang" class="tentang">
    <div class="container">
        <div class="row justify-content-md-center justify-content-center gap-5">
            <div class="col-xl-5 col-lg-6 col-md-12 col-sm-12 col-10 my-lg-auto">
                <div class="content">
                    <p class="tag">#TENTANG SIKOKU</p>
                    <h1>Platform Website Untuk Menemukan Minat Bakat</h1>
                    <p>Sikoku.id merupakan platform psikotest untuk anak-anak maupun remaja menggabungkan konsep
                        gamifikasi (game design, point, bedge, mission) dilengkapi user experience yang memudahkan
                        anak-anak atau remaja melakukan aktivitas seperti psikotest (minat bakat, karakter, dll).
                    </p>
                </div>
            </div>
            <div class="col-xl-6 col-lg-5 col-md-12 col-sm-12 col-10 col-10 ms-xl-auto">
                <div class="accordion" id="accordionPanelsStayOpenExample">
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button accordion-button-1" type="button"
                                    data-bs-toggle="collapse"
                                    data-bs-target="#collapsed1" aria-expanded="true" aria-controls="collapsed1">
                                <div class="row d-flex justify-content-end">
                                    <div class="col-10 align-items-center d-flex">
                                        <p>Sistem SIKOKU</p>
                                    </div>
                                    <div class="col-2 ms-auto">
                                        <div class="tanda tanda-1 d-flex justify-content-center">
                                            <img class="img" src="{{ asset('home/assets/tanda.svg') }}" alt="tanda" title="tanda">
                                        </div>
                                    </div>
                                </div>
                            </button>
                        </h2>
                        <div id="collapsed1" class="accordion-collapse collapse show" aria-labelledby="heading1">
                            <div class="accordion-body">
                                <p>
                                    Sikoku menggunakan sistem tes untuk mengetahui minat bakat
                                    dan potensi kognitif pengguna. Soal soal tes yang dipaparkan
                                    kepada pengguna sudah ter-integrasi psikologi berpengalaman,
                                    sehingga pengguna tidak perlu meragukan kualitas dan hak cipta
                                    soal yang dipaparkan.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapsed2" aria-expanded="true" aria-controls="collapsed2">
                                <div class="row d-flex justify-content-end">
                                    <div class="col-10 align-items-center d-flex">
                                        <p>Partner</p>
                                    </div>
                                    <div class="col-2 ms-auto">
                                        <div class="tanda d-flex justify-content-center">
                                            <img class="img" src="{{ asset('home/assets/tanda.svg') }}" alt="tanda" title="tanda">
                                        </div>
                                    </div>
                                </div>
                            </button>
                        </h2>
                        <div id="collapsed2" class="accordion-collapse collapse" aria-labelledby="heading1">
                            <div class="accordion-body">
                                <p>
                                    Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
                                    when an unknown printer took a galley of type and scrambled it to make a type
                                    specimen book. It has survived not only five centuries, but also the leap into
                                    electronic typesetting, remaining essentially unchanged
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapsed3" aria-expanded="true" aria-controls="collapsed3">
                                <div class="row d-flex justify-content-end">
                                    <div class="col-10 align-items-center d-flex">
                                        <p>Visi &amp; Misi</p>
                                    </div>
                                    <div class="col-2 ms-auto">
                                        <div class="tanda d-flex justify-content-center">
                                            <img class="img" src="{{ asset('home/assets/tanda.svg') }}" alt="tanda" title="tanda">
                                        </div>
                                    </div>
                                </div>
                            </button>
                        </h2>
                        <div id="collapsed3" class="accordion-collapse collapse" aria-labelledby="heading1">
                            <div class="accordion-body">
                                <p>
                                    Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
                                    when an unknown printer took a galley of type and scrambled it to make a type
                                    specimen book. It has survived not only five centuries, but also the leap into
                                    electronic typesetting, remaining essentially unchanged
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ========== End TENTANG ========== -->

<!-- ========== Start FITUR ========== -->
<section class="fitur">
    <div id="fitur" class="container-fluid">
        <img class="img-fluid pohon-1" src="{{ asset('home/assets/Group 105.svg') }}" alt="illustration" title="illustration">
        <!-- <div class="background"></div> -->
        <!-- <img class="otak1 d-xl-block d-none" src="{{ asset('home/assets/otak.svg') }}" alt="otak" title="otak">
            <img class="otak2 d-xl-block d-none" src="{{ asset('home/assets/otak1.svg') }}" alt="otak" title="otak"> -->
        <div class="header">
            <p class="tag text-center">#FITUR SIKOKU</p>
            <div class="col-5 mx-auto text-center">
                <h1>Beberapa fitur menarik yang kami tawarkan</h1>
            </div>
        </div>
        <div class="container-lg">
            <div class="row">
                <div class="col-xl-5 col-lg-5 col-md-5 col-sm-10 col-10 d-flex justify-content-center flex-column mx-auto mb-xl-0 mb-5">
                    <h4>Aplkasi yang user
                        friendly untuk pelajar</h4>
                    <p>Aplikasi dirancang agar mudah dipahami oleh pelajar, dengan harapan pelajar akan nyaman dan
                        enjoy saat menggunakanya.</p>
                    <button type="submit" class="btn" name="submit">Cari Passion</button>
                </div>
                <div
                    class="col-xl-6 col-lg-6 col-md-6 col-sm-10 col-10 ms-xl-auto mx-auto d-xl-flex justify-content-xl-end d-flex justify-content-left">
                    <img src="{{ asset('home/assets/illustration/Group 124.svg') }}" class="rounded img-fluid" alt="gambar">
                </div>
            </div>
            <div class="row">
                <div
                    class="col-xl-6 col-lg-6 col-md-6 col-sm-10 col-10 me-xl-auto mx-auto d-xl-flex justify-content-xl-start d-flex justify-content-left">
                    <img src="{{ asset('home/assets/illustration/Group 125.svg') }}" class="rounded img-fluid" alt="gambar">
                </div>
                <div
                    class="col-xl-5 col-lg-5 col-md-5 col-sm-10 col-10 d-flex justify-content-center flex-column mx-auto mt-xl-0 mt-5">
                    <h4>Hasil tes yang bisa
                        langsung dilihat</h4>
                    <p>Setelah menyelesaikan tes, pengguna bisa
                        langsung melihat hasil/skor yang diperoleh
                        secara real time</p>
                    <button type="submit" class="btn" name="submit">Cari Passion</button>
                </div>
            </div>
            <div class="row">
                <div
                    class="col-xl-5 col-lg-5 col-md-5 col-sm-10 col-10 d-flex justify-content-center flex-column mx-auto mb-xl-0 mb-5">
                    <h4>Sertifikat tes yang
                        resmi dari psikolog</h4>
                    <p>Setelah pengguna menyelesaikan tes, Pengguna akan dipersilahkan untuk mendownload sertifikat
                        yang bertandatangan psikolog</p>
                    <button type="submit" class="btn" name="submit">Cari Passion</button>
                </div>
                <div
                    class="col-xl-6 col-lg-6 col-md-6 col-sm-10 col-10 ms-xl-auto mx-auto d-xl-flex justify-content-xl-end d-flex justify-content-left">
                    <img src="{{ asset('home/assets/illustration/Group 126.svg') }}" class="rounded img-fluid" alt="gambar">
                </div>
            </div>
        </div>
        <img class="text" src="{{ asset('home/assets/SIKOKU-text.svg') }}" alt="sikoku" title="sikoku">
        <div class="pohon">
            <img src="{{ asset('home/assets/pohon1.svg') }}" alt="pohon" title="pohon">
        </div>
    </div>
</section>
<!-- ========== End FITUR ========== -->

<!-- ========== Start PAKET ========== -->
<section class="paket">
    <div id="paket" class="container-fluid">
        <p class="tag">#PAKET SIKOKU</p>
        <div class="col-xl-6 col-10 mx-auto">
            <h1>Pilih paket terbaik untuk
                menghemat pengeluaran</h1>
        </div>
        <div class="container d-xl-block d-none">
            <div class="row row-1 d-flex align-items-center">
                <div class="col-2 items">
                    <div class="list-paket px-lg-0">
                        <p>Paket Poke</p>
                    </div>
                </div>
                <div class="col-2 items">
                    <p class="main">Tes Psikotes</p>
                    <p class="sub-main">1 Peserta</p>
                </div>
                <div class="col-2 items">
                    <p class="main">Tes IQ</p>
                    <p class="sub-main">-</p>
                </div>
                <div class="col-2 items">
                    <p class="main">Tes Minat Bakat</p>
                    <p class="sub-main">-</p>
                </div>
                <div class="col-2 items">
                    <p class="main">Konsultasi Psikolog</p>
                    <p class="sub-main">-</p>
                </div>
                <div class="col-2 items">
                    <div class="list-paket px-xl-2">
                        <p>Rp. 70.000</p>
                    </div>
                </div>
            </div>
            <div class="row row-1 d-flex align-items-center">
                <div class="col-2 items">
                    <div class="list-paket px-xl-2">
                        <p>Paket Epic</p>
                    </div>
                </div>
                <div class="col-2 items">
                    <p class="main">Tes Psikotes</p>
                    <p class="sub-main">10 peserta</p>
                </div>
                <div class="col-2 items">
                    <p class="main">Tes IQ</p>
                    <p class="sub-main">10 peserta</p>
                </div>
                <div class="col-2 items">
                    <p class="main">Tes Minat Bakat</p>
                    <p class="sub-main">10 peserta</p>
                </div>
                <div class="col-2 items">
                    <p class="main">Konsultasi Psikolog</p>
                    <p class="sub-main">-</p>
                </div>
                <div class="col-2 items">
                    <div class="list-paket px-xl-2">
                        <p>Rp. 270.000</p>
                    </div>
                </div>
            </div>
            <div class="row row-1 d-flex align-items-center">
                <div class="col-2 items">
                    <div class="list-paket px-xl-2">
                        <p>Paket Mythic</p>
                    </div>
                </div>
                <div class="col-2 items">
                    <p class="main">Tes Psikotes</p>
                    <p class="sub-main">20 peserta</p>
                </div>
                <div class="col-2 items">
                    <p class="main">Tes IQ</p>
                    <p class="sub-main">20 peserta</p>
                </div>
                <div class="col-2 items">
                    <p class="main">Tes Minat Bakat</p>
                    <p class="sub-main">20 peserta</p>
                </div>
                <div class="col-2 items">
                    <p class="main">Konsultasi Psikolog</p>
                    <p class="sub-main">Yes</p>
                </div>
                <div class="col-2 items">
                    <div class="list-paket px-xl-2">
                        <p>Rp. 570.000</p>
                    </div>
                </div>
            </div>
            <div class="row row-1 d-flex align-items-center">
                <div class="col-2 items">
                    <div class="list-paket px-xl-2">
                        <p>Paket Glory</p>
                    </div>
                </div>
                <div class="col-2 items">
                    <p class="main">Tes Psikotes</p>
                    <p class="sub-main">50 peserta</p>
                </div>
                <div class="col-2 items">
                    <p class="main">Tes IQ</p>
                    <p class="sub-main">50 peserta</p>
                </div>
                <div class="col-2 items">
                    <p class="main">Tes Minat Bakat</p>
                    <p class="sub-main">50 peserta</p>
                </div>
                <div class="col-2 items">
                    <p class="main">Konsultasi Psikolog</p>
                    <p class="sub-main">Yes</p>
                </div>
                <div class="col-2 items">
                    <div class="list-paket px-xl-2">
                        <p>Rp. 770.000</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="container d-xl-none d-block">
            <div class="row row-2 row-cols-lg-4 row-cols-md-2 row-cols-sm-1 row-cols-1">
                <div class="col mb-xl-0 mb-lg-4 mb-md-4 mb-sm-4 mb-4">
                    <div class="list-paket">
                        <p>Paket Poke</p>
                    </div>
                    <p class="main pt-2">Tes Psikotes</p>
                    <p class="sub-main pb-2">1 Peserta</p>
                    <p class="main pt-2">Tes IQ</p>
                    <p class="sub-main pb-2">-</p>
                    <p class="main pt-2">Tes Minat Bakat</p>
                    <p class="sub-main pb-2">-</p>
                    <p class="main pt-2">Konsultasi Psikolog</p>
                    <p class="sub-main pb-2">-</p>
                    <div class="list-paket px-xl-2">
                        <p>Rp. 70.000</p>
                    </div>
                </div>
                <div class="col mb-xl-0 mb-lg-4 mb-md-4 mb-sm-4 mb-4">
                    <div class="list-paket">
                        <p>Paket Epic</p>
                    </div>
                    <p class="main pt-2">Tes Psikotes</p>
                    <p class="sub-main pb-2">10 peserta</p>
                    <p class="main pt-2">Tes IQ</p>
                    <p class="sub-main pb-2">10 peserta</p>
                    <p class="main pt-2">Tes Minat Bakat</p>
                    <p class="sub-main pb-2">10 peserta</p>
                    <p class="main pt-2">Konsultasi Psikolog</p>
                    <p class="sub-main pb-2">-</p>
                    <div class="list-paket px-xl-2">
                        <p>Rp. 270.000</p>
                    </div>
                </div>
                <div class="col mb-xl-0 mb-lg-0 mb-md-0 mb-sm-4 mb-4">
                    <div class="list-paket">
                        <p>Paket Mythic</p>
                    </div>
                    <p class="main pt-2">Tes Psikotes</p>
                    <p class="sub-main pb-2">20 peserta</p>
                    <p class="main pt-2">Tes IQ</p>
                    <p class="sub-main pb-2">20 peserta</p>
                    <p class="main pt-2">Tes Minat Bakat</p>
                    <p class="sub-main pb-2">20 peserta</p>
                    <p class="main pt-2">Konsultasi Psikolog</p>
                    <p class="sub-main pb-2">Yes</p>
                    <div class="list-paket px-xl-2">
                        <p>Rp. 570.000</p>
                    </div>
                </div>
                <div class="col mb-xl-0 mb-lg-0 mb-md-0 mb-sm-4 mb-4">
                    <div class="list-paket">
                        <p>Paket Glory</p>
                    </div>
                    <p class="main pt-2">Tes Psikotes</p>
                    <p class="sub-main pb-2">50 peserta</p>
                    <p class="main pt-2">Tes IQ</p>
                    <p class="sub-main pb-2">50 peserta</p>
                    <p class="main pt-2">Tes Minat Bakat</p>
                    <p class="sub-main pb-2">50 peserta</p>
                    <p class="main pt-2">Konsultasi Psikolog</p>
                    <p class="sub-main pb-2">Yes</p>
                    <div class="list-paket px-xl-2">
                        <p>Rp. 770.000</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ========== End PAKET ========== -->

<!-- ========== Start SECTION ========== -->
<section class="section">
    <div class="container-fluid">
        <div class="row align-items-center justify-content-xl-between justify-content-center d-lg-flex">
            <div class="col-xl-2 col-md-10 col-10 d-xl-block d-none">
                <img class="img-fluid" src="{{ asset('home/assets/gambar3.svg') }}" alt="gambar" title="gambar">
            </div>
            <div class="col-xl-6 col-lg-8 col-md-10 col-sm-12 col-12 me-xl-5">
                <h1 class="text-center text-xl-start">Temukan minat bakatmu sekarang juga !</h1>
            </div>
            <div
                class="col-xl-3 col-md-6 col-10 d-flex flex-column justify-content-center align-items-xl-end align-items-center">
                <button type="submit" class="btn" name="submit">Cari Passion</button>
                <button type="submit" class="btn" name="submit">
                    Lihat Testimoni
                </button>
            </div>
        </div>
    </div>
</section>
<!-- ========== End SECTION ========== -->

<!-- ========== Start TESTIMONI ========== -->
<section class="testimoni">
    <div id="testimoni" class="container-fluid">
        <div class="content">
            <!-- <img class="background" src="{{ asset('home/assets/background-testimoni.svg') }}" alt="" title=""> -->
            <div class="header">
                <p>#TESTIMONI PENGGUNA</p>
                <div class="col-xl-8 col-12 mx-auto">
                    <h1>Dengarkan kata mereka, yang
                        membuat anda semakin yakin</h1>
                </div>
            </div>
            <div class="row row-cols-xl-4 row-cols-lg-2 row-cols-md-2 row-cols-sm-1 row-cols-1">
                <div class="col">
                    <div class="card">
                        <!-- <img class="kutip" src="{{ asset('home/assets/kutip.svg') }}" alt="kutip" title="kutip"> -->
                        <div class="card-body">
                            <div class="row name">
                                <div
                                    class="col-xl-3 col-lg-2 col-md-2 col-sm-2 col-2 align-items-center d-flex my-auto">
                                    <div class="logo">
                                        <img src="{{ asset('home/assets/testimoni/gambar1.svg') }}" alt="gambar" title="gambar">
                                    </div>
                                </div>
                                <div class="col-xl-9 col-lg-10 col-md-10 col-sm-10 col-10">
                                    <h6>Xochitl Lagertha</h6>
                                    <p>Mahasiswa</p>
                                </div>
                            </div>
                            <p class="card-text">
                                Saya yang dulunya hilang arah akan minat bakat saya bagaikan layangan putus yang berkeliaran ke angkasa. Namun karena adanya platform SIKOKU saya berhasil menemukan minat bakat yang sesuai dengan kemampuan saya, alhasil saya tidak salah mengambil jurusan di perguruan tinggi
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card">
                        <!-- <img class="kutip" src="{{ asset('home/assets/kutip.svg') }}" alt="kutip" title="kutip"> -->
                        <div class="card-body">
                            <div class="row name">
                                <div
                                    class="col-xl-3 col-lg-2 col-md-2 col-sm-2 col-2 align-items-center d-flex my-auto">
                                    <div class="logo">
                                        <img src="{{ asset('home/assets/testimoni/gambar2.svg') }}" alt="gambar" title="gambar">
                                    </div>
                                </div>
                                <div class="col-xl-9 col-lg-10 col-md-10 col-sm-10 col-10">
                                    <h6>Bjorn Ironside</h6>
                                    <p>SMA</p>
                                </div>
                            </div>
                            <p class="card-text">
                                Saya yang dulunya hilang arah akan minat bakat saya bagaikan layangan putus yang berkeliaran ke angkasa. Namun karena adanya platform SIKOKU saya berhasil menemukan minat bakat yang sesuai dengan kemampuan saya, alhasil saya tidak salah mengambil jurusan di perguruan tinggi
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card">
                        <!-- <img class="kutip" src="{{ asset('home/assets/kutip.svg') }}" alt="kutip" title="kutip"> -->
                        <div class="card-body">
                            <div class="row name">
                                <div
                                    class="col-xl-3 col-lg-2 col-md-2 col-sm-2 col-2 align-items-center d-flex my-auto">
                                    <div class="logo">
                                        <img src="{{ asset('home/assets/testimoni/gambar3.svg') }}" alt="gambar" title="gambar">
                                    </div>
                                </div>
                                <div class="col-xl-9 col-lg-10 col-md-10 col-sm-10 col-10">
                                    <h6>Emerick Magnus </h6>
                                    <p>SMK</p>
                                </div>
                            </div>
                            <p class="card-text">
                                Saya yang dulunya hilang arah akan minat bakat saya bagaikan layangan putus yang berkeliaran ke angkasa. Namun karena adanya platform SIKOKU saya berhasil menemukan minat bakat yang sesuai dengan kemampuan saya, alhasil saya tidak salah mengambil jurusan di perguruan tinggi
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card">
                        <!-- <img class="kutip" src="{{ asset('home/assets/kutip.svg') }}" alt="kutip" title="kutip"> -->
                        <div class="card-body">
                            <div class="row name">
                                <div
                                    class="col-xl-3 col-lg-2 col-md-2 col-sm-2 col-2 align-items-center d-flex my-auto">
                                    <div class="logo">
                                        <img src="{{ asset('home/assets/testimoni/gambar4.svg') }}" alt="gambar" title="gambar">
                                    </div>
                                </div>
                                <div class="col-xl-9 col-lg-10 col-md-10 col-sm-10 col-10">
                                    <h6>Ragnar Koyek</h6>
                                    <p>SMP</p>
                                </div>
                            </div>
                            <p class="card-text">
                                Saya yang dulunya hilang arah akan minat bakat saya bagaikan layangan putus yang berkeliaran ke angkasa. Namun karena adanya platform SIKOKU saya berhasil menemukan minat bakat yang sesuai dengan kemampuan saya, alhasil saya tidak salah mengambil jurusan di perguruan tinggi
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="pagination d-flex align-items-center justify-content-center">
                <div class="tanda-1 d-flex align-items-center justify-content-center">
                    <img src="{{ asset('home/assets/tanda.svg') }}" alt="tanda" title="tanda">
                </div>
                <p>7<span> / 24</span></p>
                <div class="tanda-2 d-flex align-items-center justify-content-center"">
                <img src="{{ asset('home/assets/tanda.svg') }}" alt="tanda" title="tanda">
            </div>
        </div>
    </div>
    </div>
</section>
<!-- ========== End TESTIMONI ========== -->

<!-- ========== Start FOOTER ========== -->
<footer>
    <div class="container">
        <div class="row d-flex justify-content-between">
            <div class="col-xl-4 col-lg-6 col-md-8 col-sm-10 col-12 inform me-auto">
                <img src="{{ asset('home/assets/modif/Vector.svg') }}" alt="vektor" title="vektor">
                <img src="{{ asset('home/assets/modif/SIKOKU.svg') }}" alt="sikoku" title="sikoku">
                <p>Platform Website untuk menemukan
                    minat bakat dan potensi kognitif-mu
                    dengan sistem tes.</p>
                <p class="copy">Purwokerto, Jawa Tengah Indonesia</p>
            </div>
            <div class="col-xl-6 col-lg-6 col-md-8 col-sm-10 col-12 d-flex flex-column mt-xl-0 mt-lg-0 mt-md-5 mt-sm-5 mt-5 ms-auto">
                <div class="social-media d-flex flex-row align-items-end justify-content-end">
                    <a href="#" class="social d-flex justify-content-center align-items-center me-2">
                        <i class="fa-brands fa-instagram"></i>
                    </a>
                    <a href="#" class="social d-flex justify-content-center align-items-center me-2">
                        <i class="fa-brands fa-whatsapp"></i>
                    </a>
                    <a href="#" class="social d-flex justify-content-center align-items-center me-2">
                        <i class="fa-brands fa-linkedin"></i>
                    </a>
                    <a href="#" class="social d-flex justify-content-center align-items-center">
                        <i class="fa-brands fa-twitter"></i>
                    </a>
                </div>
                <div class="col-6 justify-content-end d-flex ms-auto">
                    <button type="submit" class="tombol btn" name="submit">Hubungi Helpdesk</button>
                </div>
                <p class="ms-auto mt-xl-auto mt-lg-5 mt-md-5 mt-sm-5 mt-5">Copyright All Right Reserved 2022</p>
            </div>
        </div>
    </div>
</footer>
<!-- ========== End FOOTER ========== -->

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
<script src="{{ asset('home/js/index.js') }}"></script>
</body>

</html>
