@extends('alumni.layouts.main')
@section('title', 'Pelatihan')
@section('content')
    <!-- Navbar -->
    <nav class="sb-topnav navbar navbar-expand">
        <a class="navbar-brand" href=""{{ route('alumni') }}" >
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
            <h2><b>Kemampuan Diri</b></h2>
            <button type="submit" class="btn btn-custom btn-primary me-2" data-bs-toggle="modal" data-bs-target="#dialogTambahSkill">
                <i class="fas fa-plus"></i> Tambah
            </button>
        </div>
        <div class="card">
            <div class="table-container table-logbook">
                <table class="table table-hover table-bordered">
                    <thead>
                        <tr>
                            <th scope="col">Kerjasama Tim</th>
                            <th scope="col">Keahlian di Bidang IT</th>
                            <th scope="col">Kemampuan Berbahasa Inggris</th>
                            <th scope="col">Kemampuan Berkomunikasi</th>
                            <th scope="col">Pengembangan Diri</th>
                            <th scope="col">Kepemimpinan</th>
                            <th scope="col">Etos Kerja</th>
                            <th scope="col">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($skills as $skill)
                            <tr class="text-center">
                                <td>{{ $skill->kerjasama_skill }}</td>
                                <td>{{ $skill->ahli_skill }}</td>
                                <td>{{ $skill->inggris_skill }}</td>
                                <td>{{ $skill->komunikasi_skill }}</td>
                                <td>{{ $skill->pengembangan_skill }}</td>
                                <td>{{ $skill->kepemimpinan_skill }}</td>
                                <td>{{ $skill->etoskerja_skill }}</td>
                                <td class="text-center">
                                    <div class="d-inline-flex gap-2">
                                        <button type="button" class="btn btn-primary" data-bs-toggle="modal"  data-bs-target="#dialogEditSkill{{ $skill->id }}">
                                            <i class="far fa-edit"></i>
                                        </button>
                                        <form onsubmit="return confirm('Apakah Anda Yakin ?');" action="{{ route('skill.destroy', $skill->id) }}" method="POST">
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
                            <td colspan="9" class="text-center">
                                <div class="alert alert-warning mb-0">Data belum Tersedia.</div>
                            </td>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
        <div class="d-flex justify-content-end">
            {{ $skills->links('pagination::bootstrap-4') }}
        </div>
    </div>
    
    <!--Dialog Tambah Logbook-->
    @include('alumni.tracerstudy.skill.create')

    <!--Dialog Edit Logbook-->
    @include('alumni.tracerstudy.skill.edit')

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