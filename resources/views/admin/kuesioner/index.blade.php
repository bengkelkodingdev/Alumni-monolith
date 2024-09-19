@extends('admin.layouts.main')
@section('title', 'Tracerstudy Alumni')
@section('content')
    <!-- Navbar -->
    <nav class="sb-topnav navbar navbar-expand">
        <a class="navbar-brand" href="{{ route('admin') }}" >
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
    <div class="container-border">
        <h1>Data Untuk Status {{ $status }}</h1>        
        <p>Berikut adalah informasi datanya.</p><hr>
        @if($data->isEmpty())
        <p style="text-align: center; padding: 15px; margin-bottom: 20px; border: 1px solid #ddd; border-radius: 8px; background-color: #f9f9f9;">Tidak ada data untuk status ini.</p>
        @else
            @switch($status)
                @case('Bekerja Full Time') 
                    @include('admin.kuesioner.partials.status1', ['data' => $data])
                    @break

                @case('Bekerja Part Time')
                    @include('admin.kuesioner.partials.status2', ['data' => $data])
                    @break

                @case('Wiraswasta')
                    @include('admin.kuesioner.partials.status3', ['data' => $data])
                    @break

                @case('Melanjutkan Pendidikan')
                    @include('admin.kuesioner.partials.status4', ['data' => $data])
                    @break
                    
                @case('Tidak Bekerja Tetapi Sedang Mencari Pekerjaan')
                    @include('admin.kuesioner.partials.status5', ['data' => $data])
                    @break

                @case('Belum Memungkinkan Bekerja')
                    @include('admin.kuesioner.partials.status6', ['data' => $data])
                    @break
                    
                @case('Menikah/Mengurus Keluarga')
                    @include('admin.kuesioner.partials.status7', ['data' => $data])
                    @break

                <!-- Tambahkan case lainnya untuk status lainnya -->
                @default
                    <p>Status tidak ditemukan.</p>
            @endswitch
        @endif  
    </div>

    <!--Dialog Info Logbook-->

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