@extends('alumni.layouts.main')
@section('title', 'Quiz')
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
            <a href="{{ route('academic.create') }}" class="btn btn-md btn-custom">TAMBAH POST</a>
        </div>
        <div class="form" style="overflow-x: auto">
            <table class="table table-hover table-bordered">
                <thead>
                    <tr>
                        <th scope="col">NIM</th>
                        <th scope="col">Nama</th>
                        <th scope="col">Email</th>
                        <th scope="col">IPK</th>
                        <th scope="col">Judul Skripsi</th>
                        <th scope="col">Dosen Wali</th>
                        <th scope="col">Tahun Lulus</th>
                        <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($academics as $academic)
                        <tr>
                            <td>{{ $academic->nim }}</td>
                            <td>{{ $academic->nama_mhs }}</td>
                            <td>{{ $academic->email }}</td>
                            <td>{{ $academic->ipk }}</td>
                            <td>{{ $academic->judul_skripsi }}</td>
                            <td>{{ $academic->dosen_wali }}</td>
                            <td>{{ $academic->tahun_lulus }}</td>
                            <td class="text-center">
                                <form onsubmit="return confirm('Apakah Anda Yakin ?');" action="{{ route('alumni.quiz.academic.destroy', $academic->id) }}" method="POST">
                                    <a href="{{ route('alumni.quiz.academic.edit', $academic->id) }}" class="btn btn-sm btn-primary m-2">EDIT</a>
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-sm btn-danger">HAPUS</button>
                                </form>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="8" class="text-center alert alert-warning">Data belum Tersedia.</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
            {{ $academics->links() }}   
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