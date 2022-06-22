<script src="{{ asset('admin/src/plugins/src/global/vendors.min.js') }}"></script>
    <script src="{{ asset('admin/src/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('admin/src/plugins/src/perfect-scrollbar/perfect-scrollbar.min.js') }}"></script>
    <script src="{{ asset('admin/src/plugins/src/mousetrap/mousetrap.min.js') }}"></script>
    <script src="{{ asset('admin/layouts/vertical-light-menu/app.js') }}"></script>
    <script src="{{ asset('admin/src/assets/js/custom.js') }}"></script>
    <script src="{{ asset('admin/src/assets/js/coba.js') }}"></script>
    <script src="{{ asset('admin/src/plugins/src/highlight/highlight.pack.js') }}"></script>
    <script src="{{ asset('admin/src/plugins/src/jquery-ui/jquery-ui.min.js') }}"></script>

    <script src="{{ asset('admin/src/plugins/src/filepond/filepond.min.js') }}"></script>
    <script src="{{ asset('admin/src/plugins/src/filepond/FilePondPluginFileValidateType.min.js') }}"></script>
    <script src="{{ asset('admin/src/plugins/src/filepond/FilePondPluginImageExifOrientation.min.js') }}"></script>
    <!-- <script src="{{ asset('admin/src/plugins/src/filepond/FilePondPluginImagePreview.min.js') }}"></script> -->
    <script src="{{ asset('admin/src/plugins/src/filepond/FilePondPluginImageCrop.min.js') }}"></script>
    <script src="{{ asset('admin/src/plugins/src/filepond/FilePondPluginImageResize.min.js') }}"></script>
    <script src="{{ asset('admin/src/plugins/src/filepond/FilePondPluginImageTransform.min.js') }}"></script>
    <script src="{{ asset('admin/src/plugins/src/filepond/filepondPluginFileValidateSize.min.js') }}"></script>
    <script src="{{ asset('admin/src/plugins/src/filepond/custom-filepond.js') }}"></script>
    
    <script src="{{ asset('admin/src/assets/js/scrollspyNav.js') }}"></script>
    <script src="{{ asset('admin/src/plugins/src/font-icons/feather/feather.min.js') }}"></script>
    <script>
        feather.replace();
    </script>

    <script>
        function addVideoInModal(btnSelector, videoSource, modalSelector, iframeHeight, iframeWidth, iframeContainer) {
            var myModal = new bootstrap.Modal(document.getElementById(modalSelector), {
                keyboard: false
            })
            document.querySelector(btnSelector).addEventListener('click', function () {
                var src = videoSource;
                myModal.show('show');
                var ifrm = document.createElement("iframe");
                ifrm.setAttribute("src", src);
                ifrm.setAttribute('width', iframeWidth);
                ifrm.setAttribute('height', iframeHeight);
                ifrm.style.border = "0";
                ifrm.setAttribute("allow", "encrypted-media");
                document.querySelector(iframeContainer).appendChild(ifrm);
            })
        }

        addVideoInModal('#yt-video-link', 'https://www.youtube.com/embed/YE7VzlLtp-4', 'videoMedia1', '315', '560',
            '.yt-container')

        addVideoInModal('#vimeo-video-link', 'https://player.vimeo.com/video/1084537', 'videoMedia2', '315', '560',
            '.vimeo-container')
    </script>

    <script src="{{ asset('admin/src/plugins/src/table/datatable/datatables.js') }}"></script>
    <script src="{{ asset('admin/src/plugins/src/table/datatable/button-ext/dataTables.buttons.min.js') }}"></script>
    <script src="{{ asset('admin/src/plugins/src/table/datatable/button-ext/jszip.min.js') }}"></script>
    <script src="{{ asset('admin/src/plugins/src/table/datatable/button-ext/buttons.html5.min.js') }}"></script>
    <script src="{{ asset('admin/src/plugins/src/table/datatable/button-ext/buttons.print.min.js') }}"></script>
    <script src="{{ asset('admin/src/plugins/src/table/datatable/custom_miscellaneous.js') }}"></script>

    <script>
        FilePond.registerPlugin(
            // FilePondPluginImagePreview,
            FilePondPluginImageExifOrientation,
            FilePondPluginFileValidateSize,
            // FilePondPluginImageEdit
        );

        // Select the file input and use 
        // create() to turn it into a pond
        FilePond.create(
            document.querySelector('.file-upload-multiple')
        );
    </script>

    
@if(Route::is('admin') || Route::is('dashboard'))
    <script src="{{ asset('admin/src/plugins/src/apex/apexcharts.min.js') }}"></script>
    <script src="{{ asset('admin/src/assets/js/dashboard/dash_1.js') }}"></script>
@elseif(Route::is('dashboard-tambahBatch'))
    <script src="{{ asset('admin/src/plugins/src/flatpickr/flatpickr.js') }}"></script>
    <script src="{{ asset('admin/plugins/src/flatpickr/custom-flatpickr.js') }}"></script>
    <script>
        var f2 = flatpickr(document.getElementById('dateTimeFlatpickr'), {
            enableTime: true,
            dateFormat: "Y-m-d H:i",
        });
    </script>
@endif

{{-- form wizard --}}

<script src="{{ asset('admin/src/plugins/src/stepper/bsStepper.min.js') }}"></script>
<script src="{{ asset('admin/src/plugins/src/stepper/custom-bsStepper.min.js') }}"></script>

<script>
    $('#zero-config').DataTable({
        "dom": "<'dt--top-section'<'row'<'col-12 col-sm-6 d-flex justify-content-sm-start justify-content-center'l><'col-12 col-sm-6 d-flex justify-content-sm-end justify-content-center mt-sm-0 mt-3'f>>>" +
    "<'table-responsive'tr>" +
    "<'dt--bottom-section d-sm-flex justify-content-sm-between text-center'<'dt--pages-count  mb-sm-0 mb-3'i><'dt--pagination'p>>",
        "oLanguage": {
            "oPaginate": { "sPrevious": '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-left"><line x1="19" y1="12" x2="5" y2="12"></line><polyline points="12 19 5 12 12 5"></polyline></svg>', "sNext": '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-right"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>' },
            "sInfo": "Showing page _PAGE_ of _PAGES_",
            "sSearch": '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-search"><circle cx="11" cy="11" r="8"></circle><line x1="21" y1="21" x2="16.65" y2="16.65"></line></svg>',
            "sSearchPlaceholder": "Search...",
           "sLengthMenu": "Results :  _MENU_",
        },
        "stripeClasses": [],
        "lengthMenu": [7, 10, 20, 50],
        "pageLength": 10 
    });
    $('#zero-config2').DataTable({
        "dom": "<'dt--top-section'<'row'<'col-12 col-sm-6 d-flex justify-content-sm-start justify-content-center'l><'col-12 col-sm-6 d-flex justify-content-sm-end justify-content-center mt-sm-0 mt-3'f>>>" +
    "<'table-responsive'tr>" +
    "<'dt--bottom-section d-sm-flex justify-content-sm-between text-center'<'dt--pages-count  mb-sm-0 mb-3'i><'dt--pagination'p>>",
        "oLanguage": {
            "oPaginate": { "sPrevious": '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-left"><line x1="19" y1="12" x2="5" y2="12"></line><polyline points="12 19 5 12 12 5"></polyline></svg>', "sNext": '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-right"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>' },
            "sInfo": "Showing page _PAGE_ of _PAGES_",
            "sSearch": '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-search"><circle cx="11" cy="11" r="8"></circle><line x1="21" y1="21" x2="16.65" y2="16.65"></line></svg>',
            "sSearchPlaceholder": "Search...",
           "sLengthMenu": "Results :  _MENU_",
        },
        "stripeClasses": [],
        "lengthMenu": [7, 10, 20, 50],
        "pageLength": 10 
    });
</script>