<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{ asset('asset/css/bootstrap.min.css') }}">
    <style>
        .navbar {
            background-color: #f506a2; /* Warna latar belakang navbar */
        }
        .navbar .nav-link {
            color: #ffffff; /* Warna teks link navbar */
        }
        .navbar .nav-link.active {
            color: #ffffff; /* Warna teks link navbar aktif */
        }
        body {
            background-color: #f8f9fa; /* Warna latar belakang halaman */
            color: #212529; /* Warna teks halaman */
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Navbar</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown"
                aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav me-auto">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="home">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{Request::is('student')? 'active':''}}" href="/student">Student</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{Request::is('class')? 'active':''}}"" href="class">Class</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{Request::is('contact')? 'active':''}}"" href="contact">Contact</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            Dropdown link
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Action</a></li>
                            <li><a class="dropdown-item" href="#">Another action</a></li>
                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="container">
        @yield('content')
    </div>
    <script src="{{ asset('asset/js/bootstrap.bundle.min.js') }}"></script>
</body>
</html>
