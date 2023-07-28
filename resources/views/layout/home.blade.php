<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <title>Dashboard</title>
</head>
<body>
    {{-- Navbar --}}
    <nav class="navbar navbar-expand-lg bg-primary">
        <div class="container-fluid">
          <a class="navbar-brand" href="/home">RENCAR.ID</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse justify-content-end me-5" id="navbarNav">
            <ul class="navbar-nav">
              <li class="nav-item me-2">
                <a class="nav-link active " aria-current="page" href="/home">Home</a>
              </li>
              <li class="nav-item me-2">
                <a class="nav-link" href="{{ route('car.store') }}">Daftar Mobil</a>
              </li>
              <li class="nav-item me-5">
                <a class="nav-link" href="{{ route('rental.store') }}">Pricing</a>
              </li>
              <li class="nav-item">
                <a href="{{ route('logout') }}"><button class="btn btn-info">Logout</button></a>
              </li>
            </ul>
          </div>
          </div>
        </div>
      </nav>
{{-- Tutup Navbar --}}


{{-- Home --}}

@yield('content')

{{-- Tutup Home --}}

    </body>
</html>
