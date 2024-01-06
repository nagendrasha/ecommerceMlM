<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="description" content="dmr - Admin Dashboard eCommerce HTML Template.">

    <title>DMR Admin - {{ config('app.name') }}</title>

    <!-- GOOGLE FONTS -->
    <link rel="preconnect" href="https://fonts.googleapis.com/">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Montserrat:wght@200;300;400;500;600;700;800&amp;family=Poppins:wght@300;400;500;600;700;800;900&amp;family=Roboto:wght@400;500;700;900&amp;display=swap"
        rel="stylesheet">

    <link href="{{ asset('admin/cdn.jsdelivr.net/npm/%40mdi/font%404.4.95/css/materialdesignicons.min.css') }}"
        rel="stylesheet" />

    <!-- PLUGINS CSS STYLE -->
    <link href="{{ asset('admin/assets/plugins/daterangepicker/daterangepicker.css') }}" rel="stylesheet">
    <link href="{{ asset('admin/assets/plugins/simplebar/simplebar.css') }}" rel="stylesheet" />

    <!-- dmr CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
        integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link id="dmr-css" href="{{ asset('admin/assets/css/ekka.css') }}" rel="stylesheet" />
    <link id="style-css" href="{{ asset('admin/assets/css/style.css') }}" rel="stylesheet" />

    <!-- FAVICON -->
    <link href="{{ asset('Front/assets/images/logo/logo.png') }}" rel="shortcut icon" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&amp;display=swap">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="{{ asset('toastr/toastr.css') }}">

    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Scripts -->
    <script>
        window.Laravel = {!! json_encode([
            'csrfToken' => csrf_token(),
        ]) !!};
    </script>
</head>

<body class="ec-header-fixed ec-sidebar-fixed ec-sidebar-light ec-header-light" id="body">

    <!-- WRAPPER -->
    <div class="wrapper">

        <!-- LEFT MAIN SIDEBAR -->
        @include('admin.common.sidebar')

        <!-- PAGE WRAPPER -->
        <div class="ec-page-wrapper">

            <!-- Header -->
            @include('admin.common.header')

            <!-- CONTENT WRAPPER -->
            @yield('content')

            <!-- Footer -->
            @include('admin.common.footer')

        </div> <!-- End Page Wrapper -->
    </div> <!-- End Wrapper -->

    <!-- Common Javascript -->

    <script src="{{ asset('admin/assets/plugins/jquery/jquery-3.5.1.min.js') }}"></script>
    <script src="//cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>
    <script src="{{ asset('admin/assets/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('admin/assets/plugins/simplebar/simplebar.min.js') }}"></script>
    <script src="{{ asset('admin/assets/plugins/jquery-zoom/jquery.zoom.min.js') }}"></script>
    <script src="{{ asset('admin/assets/plugins/slick/slick.min.js') }}"></script>

    <!-- Chart -->
    <script src="{{ asset('admin/assets/plugins/charts/Chart.min.js') }}"></script>
    <script src="{{ asset('admin/assets/js/chart.js') }}"></script>

    <!-- Google map chart -->
    <script src="{{ asset('admin/assets/plugins/charts/google-map-loader.js') }}"></script>
    <script src="{{ asset('admin/assets/plugins/charts/google-map.js') }}"></script>

    <!-- Date Range Picker -->
    <script src="{{ asset('admin/assets/plugins/daterangepicker/moment.min.js') }}"></script>
    <script src="{{ asset('admin/assets/plugins/daterangepicker/daterangepicker.js') }}"></script>
    <script src="{{ asset('admin/assets/js/date-range.js') }}"></script>

    <!-- Option Switcher -->
    <script src="{{ asset('admin/assets/plugins/options-sidebar/optionswitcher.js') }}"></script>

    <script src="{{ asset('admin/assets/js/ekka.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
    <script src="https://cdn.tiny.cloud/1/yvwadjig2ij1bu89ksnw4asb6c942cv1jlbop920al1pkkuu/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>
    @stack('scripts')
	<script src="{{asset('toastr/toastr.js')}}"></script>
    <script>
		@if(Session::has('success_message'))
        toastr.options.closeHtml = '<button class="closebtn"><i class="bi bi-x"></i></button>';
        toastr.success("{{Session::get('success_message')}}", 'Success');
		@endif
    </script>

    <!-- Place the following <script> and <textarea> tags your HTML's <body> -->
    <script>
      tinymce.init({
        selector: '#textarea-editor',
        plugins: 'ai tinycomments mentions anchor autolink charmap codesample emoticons image link lists media searchreplace table visualblocks wordcount checklist mediaembed casechange export formatpainter pageembed permanentpen footnotes advtemplate advtable advcode editimage tableofcontents mergetags powerpaste tinymcespellchecker autocorrect a11ychecker typography inlinecss',
        toolbar: 'undo redo | blocks fontfamily fontsize | bold italic underline strikethrough | link image media table mergetags | align lineheight | tinycomments | checklist numlist bullist indent outdent | emoticons charmap | removeformat',
        tinycomments_mode: 'embedded',
        tinycomments_author: 'Author name',
        mergetags_list: [
          { value: 'First.Name', title: 'First Name' },
          { value: 'Email', title: 'Email' },
        ],
        ai_request: (request, respondWith) => respondWith.string(() => Promise.reject("See docs to implement AI Assistant")),
      });
    </script>
</body>


</html>
