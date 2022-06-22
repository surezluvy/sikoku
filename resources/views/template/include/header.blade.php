<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no">
    <title>Daftar Soal | Pilihan Ganda | SIKOKU </title>
    <link rel="icon" type="image/x-icon" href="{{ asset('admin/src/assets/img/favicon.ico') }}" />
    <link href="{{ asset('admin/layouts/vertical-light-menu/css/light/loader.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('admin/layouts/vertical-light-menu/css/dark/loader.css') }}" rel="stylesheet" type="text/css" />
    <script src="{{ asset('admin/layouts/vertical-light-menu/loader.js') }}"></script>
    <!-- BEGIN GLOBAL MANDATORY STYLES -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:400,600,700" rel="stylesheet">
    <link href="{{ asset('admin/src/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('admin/layouts/vertical-light-menu/css/light/plugins.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('admin/layouts/vertical-light-menu/css/dark/plugins.css') }}" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="{{ asset('admin/src/plugins/src/font-icons/fontawesome/css/regular.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/src/plugins/src/font-icons/fontawesome/css/fontawesome.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

    <link href="{{ asset('admin/src/assets/css/light/components/font-icons.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('admin/src/assets/css/dark/components/font-icons.css') }}" rel="stylesheet" type="text/css">

    <link rel="stylesheet" type="text/css" href="{{ asset('admin/src/plugins/src/table/datatable/datatables.css') }}">

    <link rel="stylesheet" type="text/css" href="{{ asset('admin/src/plugins/css/light/table/datatable/dt-global_style.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('admin/src/plugins/css/light/table/datatable/custom_dt_miscellaneous.css') }}">
    <link rel="stylesheet" type="text/css" href="../src/plugins/css/light/table/datatable/custom_dt_custom.css">

    <link rel="stylesheet" type="text/css" href="{{ asset('admin/src/plugins/css/dark/table/datatable/dt-global_style.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('admin/src/plugins/css/dark/table/datatable/custom_dt_miscellaneous.css') }}">
    <link rel="stylesheet" type="text/css" href="../src/plugins/css/dark/table/datatable/custom_dt_custom.css">
    
    <link href="{{ asset('admin/src/assets/css/light/scrollspyNav.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('admin/src/assets/css/light/components/carousel.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('admin/src/assets/css/light/components/modal.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('admin/src/assets/css/light/components/tabs.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('admin/src/assets/css/dark/scrollspyNav.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('admin/src/assets/css/dark/components/carousel.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('admin/src/assets/css/dark/components/modal.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('admin/src/assets/css/dark/components/tabs.css') }}" rel="stylesheet" type="text/css">

    <link href="{{ asset('admin/src/assets/css/light/components/list-group.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('admin/src/assets/css/dark/components/list-group.css') }}" rel="stylesheet" type="text/css">

    <link rel="stylesheet" href="{{ asset('admin/src/plugins/src/filepond/filepond.min.css') }}">
    <!-- <link rel="stylesheet" href="{{ asset('admin/src/plugins/src/filepond/FilePondPluginImagePreview.min.css') }}"> -->
    <link href="{{ asset('admin/src/plugins/css/light/filepond/custom-filepond.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('admin/src/plugins/css/dark/filepond/custom-filepond.css') }}" rel="stylesheet" type="text/css" />

    {{-- Form Wizard --}}
    <link rel="stylesheet" type="text/css" href="{{  asset('admin/src/plugins/src/stepper/bsStepper.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{  asset('admin/src/plugins/css/dark/stepper/custom-bsStepper.css') }}">
    <link rel="stylesheet" type="text/css" href="{{  asset('admin/src/plugins/css/light/stepper/custom-bsStepper.css') }}">

    {{-- Invoice --}}
    <link href="{{  asset('admin/src/assets/css/light/apps/invoice-preview.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{  asset('admin/src/assets/css/dark/apps/invoice-preview.css') }}" rel="stylesheet" type="text/css" />

    <link href="{{ asset('admin/src/assets/css/dark/components/font-icons.css') }}" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="{{ asset('admin/src/plugins/src/font-icons/fontawesome/css/regular.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/src/plugins/src/font-icons/fontawesome/css/fontawesome.css') }}">
    <link href="{{ asset('admin/src/assets/css/light/components/font-icons.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('admin/src/assets/css/dark/components/font-icons.css') }}" rel="stylesheet" type="text/css">
    
    @if(Route::is('admin') || Route::is('dashboard'))
        <link href="{{ asset('admin/src/plugins/src/apex/apexcharts.css') }}" rel="stylesheet" type="text/css">
        <link href="{{ asset('admin/src/assets/css/light/dashboard/dash_1.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('admin/src/assets/css/dark/dashboard/dash_1.css') }}" rel="stylesheet" type="text/css" />
    @endif

    <style>
        body.dark .layout-px-spacing,
        .layout-px-spacing {
            min-height: calc(100vh - 155px) !important;
        }
    </style>

</head>