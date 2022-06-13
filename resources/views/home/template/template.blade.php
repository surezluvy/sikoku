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
@include('home.template.include.navigasi')

<!-- ========== Start TENTANG ========== -->
@include('home.template.include.tentang')
<!-- ========== End TENTANG ========== -->

<!-- ========== Start FITUR ========== -->
@include('home.template.include.fitur')
<!-- ========== End FITUR ========== -->

<!-- ========== Start PAKET ========== -->
@include('home.template.include.paket')
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
                <button type="submit" class="tombol btn" name="submit">Cari Passion</button>
                <button type="submit" class="tombol btn" name="submit">Lihat Testimoni</button>
            </div>
        </div>
    </div>
</section>
<!-- ========== End SECTION ========== -->

<!-- ========== Start TESTIMONI ========== -->
@include('home.template.include.testimoni')
<!-- ========== End TESTIMONI ========== -->

<!-- ========== Start FOOTER ========== -->
@include('home.template.include.footer')
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
