<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<<<<<<< HEAD
    <title>E-Coop</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-warning">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">E-Coop</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="/">Beranda</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('customer.index') }}">Nasabah</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('mandatory-saving.index') }}">Simpanan Wajib</a>
                    </li>
                    <li><a class="nav-link" href="{{ route('users.index') }}">Manage Users</a></li>
                    <li><a class="nav-link" href="{{ route('roles.index') }}">Manage Role</a></li>
                    @if(Auth::check())
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ Auth::user()->name }} <span class="caret"></span>
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                                         document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </div>
                    </li>
                    @endif
                </ul>
            </div>
        </div>
    </nav>

    <section class="content">
        <div class="container mt-4">
            <h1 class="text-center">Manfaat Koperasi</h1>
            <p class="text-center">Koperasi memberikan berbagai manfaat bagi anggotanya, termasuk:</p>
            <ul class="list-unstyled">
                <li>Peningkatan kesejahteraan anggota</li>
                <li>Akses ke modal dan kredit yang lebih mudah</li>
                <li>Pelatihan dan pendidikan untuk meningkatkan keterampilan</li>
                <li>Pengembangan usaha bersama yang menguntungkan</li>
            </ul>
            <div class="text-center">
                <h2>Kegiatan Koperasi</h2>
                <img src="path/to/your/image1.jpg" class="img-fluid mb-3" alt="Kegiatan 1">
                <img src="path/to/your/image2.jpg" class="img-fluid mb-3" alt="Kegiatan 2">
                <img src="path/to/your/image3.jpg" class="img-fluid mb-3" alt="Kegiatan 3">
            </div>
        </div>
    </section>

    <footer class="bg-warning text-center text-white py-4">
        <div class="container">
            <img src="path/to/your/logo.png" class="img-fluid mb-2" alt="Logo Koperasi">
            <p>Koperasi Sejahtera Bersama</p>
            <p>Jl. Kebahagiaan No. 123, Jakarta</p>
            <p>Telepon: (021) 12345678</p>
        </div>
    </footer>

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+Xjg+YFj0LlJ68+Fkfq6N+74I1pi" crossorigin="anonymous"></script>
</body>
</html>
=======
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Navbar</title>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">Navbar</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="/">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{ route ('person.create') }}">Pendaftaran</a>
              </li>
      </nav>
</body>
</html>
>>>>>>> 519d056291fcfc67a547d63fc1f7bd084e471e1a
