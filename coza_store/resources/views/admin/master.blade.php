<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Start your development with a Dashboard for Bootstrap 4.">
    <meta name="author" content="Creative Tim">
    <title>Argon Dashboard - Free Dashboard for Bootstrap 4</title>
    <!-- Favicon -->
    <link href="{{asset('/')}}/admin/assets/img/brand/favicon.png" rel="icon" type="image/png">
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
    <!-- Icons -->
    <link href="{{asset('/')}}/admin/assets/vendor/nucleo/css/nucleo.css" rel="stylesheet">
    <link href="{{asset('/')}}/admin/assets/vendor/@fortawesome/fontawesome-free/css/all.min.css" rel="stylesheet">
    <!-- Argon CSS -->
    <link type="text/css" href="{{asset('/')}}/admin/assets/css/argon.css?v=1.0.0" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('/')}}/admin/assets/ckeditor/samples/css/samples.css">
    <link rel="stylesheet" href="{{asset('/')}}/admin/assets/samples/ckeditor/toolbarconfigurator/lib/codemirror/neo.css">
    <style>
        .sidenav {
            height: 100%;
            width: 200px;
            position: fixed;
            z-index: 1;
            top: 0;
            left: 0;
            background-color: #111;
            overflow-x: hidden;
            padding-top: 20px;
        }

        /* Style the sidenav links and the dropdown button */
        .sidenav a, .dropdown-btn {
            padding: 6px 8px 6px 16px;
            text-decoration: none;
            font-size: 20px;
            color: #818181;
            display: block;
            border: none;
            background: none;
            width:100%;
            text-align: left;
            cursor: pointer;
            outline: none;
        }

        /* On mouse-over */
        .sidenav a:hover, .dropdown-btn:hover {
            color: #f1f1f1;
        }

        /* Main content */
        .main {
            margin-left: 200px; /* Same as the width of the sidenav */
            font-size: 20px; /* Increased text to enable scrolling */
            padding: 0px 10px;
        }

        /* Add an active class to the active dropdown button */
        .active {
            background-color: green;
            color: white;
        }

        /* Dropdown container (hidden by default). Optional: add a lighter background color and some left padding to change the design of the dropdown content */
        .dropdown-container {
            display: none;
            background-color: #262626;
            padding-left: 8px;
        }

        /* Optional: Style the caret down icon */
        .fa-caret-down {
            float: right;
            padding-right: 8px;
        }
    </style>
</head>

<body>
<!-- Sidenav -->
@include('admin.includes.navbar')
<!-- Main content -->
<div class="main-content">
    <!-- Top navbar -->
    @include('admin.includes.header')
    <!-- Header -->
    @yield('body')
        <!-- Footer -->
    @include('admin.includes.footer')
</div>

<!-- Argon Scripts -->
<!-- Core -->
<script src="{{asset('/')}}/admin/assets/vendor/jquery/dist/jquery.min.js"></script>
<script src="{{asset('/')}}/admin/assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
<!-- Optional JS -->
<script src="{{asset('/')}}/admin/assets/vendor/chart.js/dist/Chart.min.js"></script>
<script src="{{asset('/')}}/admin/assets/vendor/chart.js/dist/Chart.extension.js"></script>
<!-- Argon JS -->
<script src="{{asset('/')}}/admin/assets/js/argon.js?v=1.0.0"></script>
</body>

</html>