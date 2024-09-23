@extends('alumni.layouts.main')
@section('title', 'Dashboard Alumni')
@section('content')
    <!-- Navbar -->
    <nav class="sb-topnav navbar navbar-expand">
        <a class="navbar-brand" href="{{ route('alumni') }}" >
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
        <h1 class="mb-3">Dashboard Admin</h1>
        <!-- welcome user -->
        <div class="container-dashboard">
            <h1>Welcome,</h1>
            <div class="type">
                {{-- mengambil nama dari controller --}}
                    <h1>{{ Auth::user()->nama_pengguna }}</h1> 
            </div>
            {{-- <p>Siap untuk lulus cepat hari ini?</p> --}}
        </div>
        <!-- menu admin -->
        <div class="row justify-content-center">
            <!-- Card 1 -->
            <div class="col-md-4 mb-3">
                <div class="card text-white shadow-sm h-100" style="background-color: #114D91; border-radius: 12px; min-height: 50px;">
                    <div class="card-body d-flex justify-content-between align-items-center">
                        <div>
                            <h5 class="card-title">Tracerstudy</h5>
                            <a href="{{ route('kuesioner.index') }}" class="btn btn-light btn-sm mt-2">See Details <i class="fas fa-arrow-right"></i></a>
                        </div>
                        <i class="fas fa-graduation-cap fa-2x"></i>
                    </div>
                </div>
            </div>
            <!-- Card 2 -->
            <div class="col-md-4 mb-3">
                <div class="card text-white shadow-sm h-100" style="background-color: #114D91; border-radius: 12px; min-height: 50px;">
                    <div class="card-body d-flex justify-content-between align-items-center">
                        <div>
                            <h5 class="card-title">Data Alumni</h5>
                            <a href="{{ route('cv.index') }}" class="btn btn-light btn-sm mt-2">See Details <i class="fas fa-arrow-right"></i></a>
                        </div>
                        <i class="fas fa-users fa-2x"></i>
                    </div>
                </div>
            </div>
            <!-- Card 3 -->
            <div class="col-md-4 mb-3">
                <div class="card text-white shadow-sm h-100" style="background-color: #114D91; border-radius: 12px; min-height: 50px;">
                    <div class="card-body d-flex justify-content-between align-items-center">
                        <div>
                            <h5 class="card-title">Profile</h5>
                            <a href="{{ route('alumni-profile') }}" class="btn btn-light btn-sm mt-2">See Details <i class="fas fa-arrow-right"></i></a>
                        </div>
                        <i class="fas fa-info-circle fa-2x"></i>
                    </div>
                </div>
            </div>
            <!-- Card 4 -->
            <div class="col-md-4 mb-3">
                <div class="card text-white shadow-sm h-100" style="background-color: #114D91; border-radius: 12px; min-height: 50px;">
                    <div class="card-body d-flex justify-content-between align-items-center">
                        <div>
                            <h5 class="card-title">Lowongan Kerja</h5>
                            <a href="{{ route('loker.index') }}" class="btn btn-light btn-sm mt-2">See Details <i class="fas fa-arrow-right"></i></a>
                        </div>
                        <i class="fas fa-book fa-2x"></i>
                    </div>
                </div>
            </div>
            <!-- Card 5 -->
            <div class="col-md-4 mb-3">
                <div class="card text-white shadow-sm h-100" style="background-color: #114D91; border-radius: 12px; min-height: 50px;">
                    <div class="card-body d-flex justify-content-between align-items-center">
                        <div>
                            <h5 class="card-title">Lowongan Magang</h5>
                            <a href="{{ route('logang.index') }}" class="btn btn-light btn-sm mt-2">See Details <i class="fas fa-arrow-right"></i></a>
                        </div>
                        <i class="fas fa-tasks fa-2x"></i>
                    </div>
                </div>
            </div>
            <!-- card tgl hari ini -->
            <div class="col-md-4 mb-3">
                <div class="card shadow-sm h-100" style="background-color: #fff; border-radius: 12px; border: 1px solid #ddd; position: relative; overflow: hidden;">
                    <!-- Hiasan background melingkar -->
                    <div style="position: absolute; top: -40px; right: -40px; width: 120px; height: 120px; background-color: #114D91; border-radius: 50%; opacity: 0.1;"></div>
                    <div class="card-body d-flex justify-content-between align-items-center">
                        <div>
                            <h5 class="card-title text-dark">Tanggal Hari Ini</h5>
                            <b><p class="card-text text-dark" id="currentDate"></p></b>
                        </div>
                    </div>
                </div>
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

@section('scripts')
<!-- Bootstrap 5 JS & FontAwesome -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
<script>
    // Script untuk menampilkan tanggal
    function updateDate() {
        var today = new Date();
        var options = { weekday: 'long', year: 'numeric', month: 'long', day: 'numeric' };
        var dateString = today.toLocaleDateString('id-ID', options);
        document.getElementById("currentDate").innerHTML = dateString;
    }
    updateDate();
</script>
@endsection