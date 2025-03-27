<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Öch Farm')</title>
    <script type="module" src="{{ asset('js/app.js') }}"></script>

    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    <!-- DataTables CSS -->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
<header class="position-relative">
    <div class="banner position-relative text-white text-center d-flex align-items-center justify-content-center" style="background: url('{{ asset('img/banner.jpg') }}') center/cover no-repeat; height: 300px;">
        <div class="overlay position-absolute top-0 start-0 w-100 h-100" style="background: rgba(0, 0, 0, 0.5);"></div>
        <div class="position-relative d-flex align-items-center justify-content-center w-100">
            <img src="{{ asset('img/elch.jpeg') }}" alt="Site Logo" class="rounded-circle shadow-lg me-3" height="100" width="100">
            <h1 class="fw-bold m-0">Welcome to Öch Farm</h1>
            <img src="{{ asset('img/elch.jpeg') }}" alt="Site Logo" class="rounded-circle shadow-lg ms-3" height="100" width="100">
        </div>
    </div>
</header>

<div class="content">
    @yield('content')
</div>

<!-- Bootstrap JS -->
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js"></script>

<!-- DataTables JS -->
<script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>

</body>
</html>
