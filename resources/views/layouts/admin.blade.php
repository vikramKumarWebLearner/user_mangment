<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title> @yield('title') | {{ config('app.name', 'Laravel') }}</title>

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- plugins:css -->
    <link rel="stylesheet" href="{{ asset('admin/vendors/mdi/css/materialdesignicons.min.css') }}">
    <link rel="stylesheet" href="admin/vendors/base/vendor.bundle.base.css">
    <!-- endinject -->
    <!-- plugin css for this page -->
    <link rel="stylesheet" href="admin/vendors/datatables.net-bs4/dataTables.bootstrap4.css">
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <link rel="stylesheet" href="{{ asset('admin/css/style.css') }}">
    <!-- endinject -->
    <link rel="shortcut icon" href="{{ asset('admin/images/favicon.png') }}" />

    {{-- Font icon --}}
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">

    <style>
        .form-control {
            border: 1px solid #ddd;
        }

        .sidebar .nav .nav-item.active {
            background: #e9e9e9;
        }
    </style>
    @livewireStyles
</head>

<body>

    <div class="container-scroller">
        @include('layouts.inculde.admin.navbar')
        <div class="container-fluid page-body-wrapper">
            @include('layouts.inculde.admin.sidebar')

            <div class="main-panel">
                <div class="content-wrapper">
                    @yield('content')

                </div>
            </div>
        </div>
    </div>

    <script>
        let dialogBoxId = document.getElementById("dialogBox")

        function showDialog() {
            dialogBoxId.addEventListener("keydown", (e) => {
                if (e.key === "Escape") {
                    e.preventDefault();
                }
            });
            dialogBoxId.showModal();
        }

        function closeDialog() {
            dialogBoxId.close();
        }
    </script>
    <!-- plugins:js -->
    <script src="{{ asset('admin/vendors/base/vendor.bundle.base.js') }}"></script>
    <!-- endinject -->

    <!-- Plugin js for this page-->
    <script src="{{ asset('admin/vendors/datatables.net/jquery.dataTables.js') }}"></script>
    <script src="{{ asset('admin/vendors/datatables.net-bs4/dataTables.bootstrap4.js') }}"></script>
    <!-- End plugin js for this page-->

    <!-- inject:js -->
    <script src="{{ asset('admin/js/off-canvas.js') }}"></script>
    <script src="{{ asset('admin/js/hoverable-collapse.js') }}"></script>
    <script src="{{ asset('admin/js/template.js') }}"></script>
    <!-- endinject -->

    <!-- Custom js for this page-->
    <script src="{{ asset('admin/js/dashboard.js') }}"></script>
    <script src="{{ asset('admin/js/data-table.js') }}"></script>
    <script src="{{ asset('admin/js/jquery.dataTables.js') }}"></script>
    <script src="{{ asset('admin/js/dataTables.bootstrap4.js') }}"></script>
    <!-- End custom js for this page-->

    @yield('script')
    @livewireScripts
    @stack('script')
</body>

</html>
