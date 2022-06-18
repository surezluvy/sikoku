<!DOCTYPE html>
<html lang="en">

@include('template.include.header')

<body class="layout-boxed">

    <!-- BEGIN LOADER -->
    @include('template.include.loader')
    <!--  END LOADER -->

    <!--  BEGIN NAVBAR  -->
    @include('template.include.navbar')
    <!--  END NAVBAR  -->

    <!--  BEGIN MAIN CONTAINER  -->
    <div class="main-container " id="container">

        <div class="overlay"></div>
        <div class="search-overlay"></div>

        <!--  BEGIN SIDEBAR  -->
        @include('template.include.sidebar')
        <!--  END SIDEBAR  -->

        <!--  BEGIN CONTENT AREA  -->
        @yield('content')
        <!--  END CONTENT AREA  -->
    </div>
    <!-- END MAIN CONTAINER -->

    @include('template.include.script')

</body>

</html>