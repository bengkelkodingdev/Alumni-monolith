@extends('admin.layouts.main')
@section('title', 'Statistik Alumni')
@section('content')
    <!-- Navbar -->
    <nav class="sb-topnav navbar navbar-expand">
        <a class="navbar-brand" href="/alumni" >
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
        <div class="container-fluid mt-3 mb-3 d-flex justify-content-between align-items-center">
            <h1>Statistik Jumlah Lulusan Alumni</h1>
            <button type="submit" class="btn btn-custom btn-primary me-2" data-bs-toggle="modal" data-bs-target="#dialogTambahStatistik">
                <i class="fas fa-plus"></i> Tambah
            </button>
        </div>
        <div class="card">
            <div class="card-body">
            <div class="table-container table-logbook">
                <table class="table table-hover table-bordered text-center">
                    <thead>
                        <tr>
                            <th scope="col">Tahun Lulus</th>
                            <th scope="col">Total Alumni</th>
                            <th scope="col">Alumni Terdeteksi</th>
                            <th scope="col">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($statistiks as $statistik)
                            <tr>
                                <td>{{ $statistik->tahun_lulus }}</td>
                                <td>{{ $statistik->alumni_total }}</td>
                                <td>{{ $statistik->alumni_terlacak }}</td>
                                <td class="text-center">
                                    <div class="d-inline-flex gap-2">
                                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#dialogEditStatistik{{ $statistik->id }}">
                                            <i class="far fa-edit"></i>
                                        </button>
                                        <form onsubmit="return confirm('Apakah Anda Yakin ?');" action="{{ route('statistik.destroy', $statistik->id) }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger">
                                                <i class="fas fa-trash"></i>
                                            </button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="4" class="text-center">
                                    <div class="alert alert-warning">Data belum Tersedia.</div>
                                </td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
            <div class="d-flex justify-content-end">
                {{ $statistiks->links('pagination::bootstrap-5') }}
            </div>  
            </div>
        </div>  
    </div>
    
    <!-- Dialog Tambah Statistik -->
    @include('admin.statistik.create')

    <!-- Dialog Edit Statistik -->
    @include('admin.statistik.edit')

    <footer class=" mt-auto">
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