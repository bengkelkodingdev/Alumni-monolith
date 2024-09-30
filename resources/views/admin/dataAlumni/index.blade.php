@extends('admin.layouts.main')
@section('title', 'Data Alumni')
@section('content')
<!-- Navbar -->
<nav class="sb-topnav navbar navbar-expand">
    <a class="navbar-brand" href="{{ route('admin') }}" >
        <img src="{{ asset('images/logo-sti.png') }}" alt="Logo TI" width="250">
        <img src="{{ asset('images/logo-udinus.png') }}" alt="Logo udinus" width="55">
        <img src="{{ asset('images/logo-unggul.png') }}" alt="Logo udinus" width="40">
    </a>
    <form action="{{ route('dataAlumni.index') }}" class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0">
        <div class="input-group">
            <input class="form-control" type="text" placeholder="Search here..." aria-label="Search for..."
                aria-describedby="btnNavbarSearch"/>
            <button class="btn" id="btnNavbarSearch" type="button"><i class="fas fa-search"></i></button>
        </div>
    </form>
    <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4">
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button"
            data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
        </li>
    </ul>
</nav>

<main class="container">
    <h1>Data Alumni</h1>
    <p>Berikut adalah informasi data dari masing - masing akun alumni.</p>
    <hr>
    <div class="alumni-cards" style="display: flex; flex-wrap: wrap; gap: 15px;">
        @foreach($alumniData as $alumni)
            <div class="card text-white shadow-sm h-100" style="border: 1px solid #ddd; border-radius: 12px; background-color: #114D91; padding: 15px; box-shadow: 0 2px 4px rgba(0,0,0,0.1); flex: 1 1 calc(50% - 30px); color: white; cursor:pointer">
                <div class="card-content">
                    <h5 class="card-title" style="margin: 0;">{{ $alumni->nama_alumni }}</h5>
                    <span class="badge text-dark mt-1" style="background-color: white;">{{ $alumni->email }}</span>
                </div>
            </div>
        @endforeach
    </div>
</main>



<footer class="py-4 mt-auto">
    <div class="container-fluid px-4">
        <div class="d-flex align-items-center justify-content-between small">
            <div class="text-muted">Copyright &copy; Alumni</div>
            <div>
                <a href="#" class="text-secondary">Privacy Policy</a>
                &middot;
                <a href="#" class="text-secondary">Terms &amp; Conditions</a>
            </div>
        </div>
    </div>
</footer>
@endsection
