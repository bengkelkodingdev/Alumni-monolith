@extends('admin.layouts.main')
@section('title', 'Profile Admin')
@section('content')
  <!-- Navbar -->
  <nav class="sb-topnav navbar navbar-expand">
    <a class="navbar-brand" href="/admin">
        <img src="{{ asset('images/logo-sti.png') }}" alt="Logo TI" width="250">
        <img src="{{ asset('images/logo-udinus.png') }}" alt="Logo udinus" width="55">
        <img src="{{ asset('images/logo-unggul.png') }}" alt="Logo udinus" width="40">
    </a>
    <form action="/loker" class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0">
        <div class="input-group">
            <input class="form-control" type="text" placeholder="Search here..." aria-label="Search for..." name="search"
                aria-describedby="btnNavbarSearch"/>
            <button class="btn" id="btnNavbarSearch" type="submit"><i class="fas fa-search"></i></button>
        </div>
    </form>
    <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4">
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button"
            data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
        </li>
    </ul>
  </nav>

  <div class="container-border">
    <div class="container mt-5">
        <h1 class="text-center mb-4">Profil </h1>
        <div class="text-center mb-4 ">
            @if(Auth::user()->profile_picture)
                <img src="{{ asset('storage/profile_pictures/' . Auth::user()->profile_picture) }}" alt="Profile Picture" style="border-radius: 50%; width: 150px; height: 150px;" onclick="openModal(this)">
            @else
                <p>Gambar tidak ditemukan.</p>
            @endif
        </div>

        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Informasi Pribadi:</h5>
                <div class="row">
                    <div class="col-md-6">
                        <div class="info-item">
                            <p class="card-text"><strong>Nama:</strong> <span>{{ Auth::user()->nama_alumni }}</span></p>
                        </div>
                        <div class="info-item">
                            <p class="card-text"><strong>Email:</strong> <span>{{ Auth::user()->email }}</span></p>
                        </div>
                        {{-- <div class="info-item">
                            <p class="card-text"><strong>NIM:</strong> <span></span></p>
                        </div>
                        <div class="info-item">
                            <p class="card-text"><strong>Jenis Kelamin:</strong> <span></span></p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="info-item">
                            <p class="card-text"><strong>Tahun Masuk:</strong> <span></span></p>
                        </div>
                        <div class="info-item">
                            <p class="card-text"><strong>Tahun Lulus:</strong> <span></span></p>
                        </div>
                        <div class="info-item">
                            <p class="card-text"><strong>No WhatsApp:</strong> <span></span></p>
                        </div>
                        <div class="info-item">
                            <p class="card-text"><strong>Status:</strong> <span></span></p>
                        </div>
                    </div> --}}
                </div>

                <!-- Tombol untuk membuka modal upload foto -->
                <div class="form-group">
                <button type="button" class="btn btn-primary mt-4  bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded" data-bs-toggle="modal" data-bs-target="#uploadModal">
                    Unggah Foto Profil
                </button>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal upload foto -->
    <div class="modal fade" id="uploadModal" tabindex="-1" aria-labelledby="uploadModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="uploadModalLabel">Unggah Foto Profil</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="{{ route('alumni-store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="profile_picture">Pilih Foto:</label>
                            <input type="file" class="form-control" id="profile_picture" name="profile_picture" required>
                        </div>
                        <button type="submit" class="btn btn-primary mt-2">Unggah</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal untuk memperbesar gambar -->
    <div class="modal fade" id="imageModal" tabindex="-1" aria-labelledby="imageModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="imageModalLabel">Foto Profil</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <img id="modalImage" src="" alt="Foto Profil" class="img-fluid">
                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.1.3/js/bootstrap.bundle.min.js"></script>
    <script>
        function openModal(img) {
            var modalImage = document.getElementById('modalImage');
            modalImage.src = img.src;
            $('#imageModal').modal('show');
        }
    </script>

    <style>
        :root {
            --primary-color: #007bff;
            --secondary-color: #6c757d;
            --background-color: #f8f9fa;
            --text-color: #212529;
        }

        .info-item {
            display: flex;
            align-items: center;
        }

        .info-item .card-text {
            width: 100%;
            display: flex;
            justify-content: space-between;
        }

        .info-item .card-text strong {
            min-width: 100px; /* Adjust width as needed */
            text-align: left;
        }

        .info-item .card-text span {
            flex: 1;
            text-align: left;
        }

        body {
            background-color: var(--background-color);
            color: var(--text-color);
        }

        .card {
            border: none;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            border-radius: 15px;
        }

        .card-title {
            color: var(--primary-color);
        }

        .btn-primary {
            background-color: var(--primary-color);
            border-color: var(--primary-color);
        }

        .btn-primary:hover {
            background-color: var(--secondary-color);
            border-color: var(--secondary-color);
        }

        .profile-pic-container {
            width: 200px;
            height: 200px;
            border-radius: 50%;
            overflow: hidden;
            margin: 0 auto;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease;
        }

        .profile-pic-container:hover {
            transform: scale(1.05);
        }

        .profile-pic {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .modal-content {
            border-radius: 15px;
        }

        .modal-header {
            border-bottom: none;
        }

        .modal-title {
            color: var(--primary-color);
        }

        .btn-close {
            background-color: var(--primary-color);
            color: #fff;
        }

        .btn-close:hover {
            background-color: var(--secondary-color);
        }
    </style>
  </div>
@endsection
