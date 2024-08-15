@extends('alumni.layouts.main')
@section('title', 'Dashboard Alumni')
@section('content')
    <!-- Navbar -->
    <nav class="sb-topnav navbar navbar-expand">
        <a class="navbar-brand" href="/admin" >
            <img src="{{ asset('images/logo-sti.png') }}" alt="Logo TI" width="250">
            <img src="{{ asset('images/logo-udinus.png') }}" alt="Logo udinus" width="55">
            <img src="{{ asset('images/logo-unggul.png') }}" alt="Logo udinus" width="40">
        </a>
        <form class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0">
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
    <main class="container-border">
        <div class="container-fluid px-4 mt-3 mb-5">
            <h2><b>Dashboard Alumni</b></h2>
        </div>
        <div class="container-dashboard">
            <h1>Welcome,</h1>
            <div class="type">
                {{-- mengambil nama dari controller --}}
                  <h1>{{ Auth::user()->nama_alumni }}</h1> 
            </div>
            {{-- <p>Siap untuk lulus cepat hari ini?</p> --}}
        </div>
        <div class="row">
            <div class="col-md-4 mb-5">
                <a href="{{ route('kuesioner.index') }}" class="menu-box">
                    <i class="fas fa-search menu-icon"></i>
                    <h2 class="menu-title">Tracerstudy</h2>
                    <p class="menu-description">Kelola data perkembangan karir alumni Anda.</p>
                </a>
            </div>
            <div class="col-md-4 mb-5">
                <a href="{{ route('loker.index') }}" class="menu-box">
                    <i class="fas fa-chalkboard-teacher menu-icon"></i>
                    <h2 class="menu-title">Lowongan Kerja</h2>
                    <p class="menu-description">Temukan pekerjaan yang sesuai dengan keahlian Anda.</p>
                </a>
            </div>
            <div class="col-md-4 mb-5">
                <a href="{{ route('logang.index') }}" class="menu-box">
                    <i class="fas fa-briefcase menu-icon"></i>
                    <h2 class="menu-title">Lowongan Magang</h2>
                    <p class="menu-description">Temukan program magang untuk mengembangkan skill Anda.</p>
                </a>
            </div>
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