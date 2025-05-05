<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Simple Laravel 11 CRUD Application Tutorial</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css" rel="stylesheet">
</head>
<body> 

<div class="container mt-3">

    <!-- Title and Logout Row -->
    <div class="row align-items-center mb-3">
        <div class="col-md-6">
            <h3>Simple Laravel 11 CRUD Application Tutorial</h3>
        </div>
        <div class="col-md-6 text-end">
            <form method="POST" action="{{ route('logout') }}">
                @csrf
                <button type="submit" class="btn btn-danger btn-sm">
                    <i class="bi bi-box-arrow-right"></i> Log Out
                </button>
            </form>
        </div>
    </div>

    <!-- Main Content -->
    @yield('content')

    <!-- Footer -->
    <div class="row justify-content-center text-center mt-5">
        <div class="col-md-12">
            <p>
                Return to Website: 
                <a href="https://www.usjr.edu.ph/" target="_blank">
                    <strong>University of San Jose - Recoletos</strong>
                </a>
            </p>
        </div>
    </div>

</div>

<!-- Bootstrap Bundle JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
