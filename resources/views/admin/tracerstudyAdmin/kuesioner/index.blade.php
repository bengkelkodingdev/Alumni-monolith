@extends('admin.layouts.main')
@section('title', 'Tracerstudy Alumni')
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
    <div class="container-border">
        <div class="container-fluid mt-3 mb-3 d-flex justify-content-between align-items-center">
            <h2><b>Tracerstudy Alumni</b></h2>
        </div>

        <div class="table-container table-logbook">
            <table class="table table-hover table-bordered text-start">
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Nama</th>
                        <th scope="col">Jenis Kelamin</th>
                        <th scope="col">NIM</th>
                        <th scope="col">Tahun Masuk</th>
                        <th scope="col">Tahun Lulus</th>
                        <th scope="col">No WhatsApp</th>
                        <th scope="col">Email</th>
                        <th scope="col">Status</th>
                        <th scope="col">Bidang Pekerjaan</th>
                        <th scope="col">Jenis Pekerjaan</th>
                        <th scope="col">Nama Pekerjaan</th>
                        <th scope="col">Jabatan Pekerjaan</th>
                        <th scope="col">Lingkup Pekerjaan</th>
                        <th scope="col">Biaya Studi</th>
                        <th scope="col">Nama Universitas</th>
                        <th scope="col">Program Studi</th>
                        <th scope="col">Tanggal Studi</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($kuesioners as $kuesioner)
                        <tr>
                            <td>{{ $loop->iteration }}</td> <!-- For numbering -->
                            <td>{{ $kuesioner->nama_alumni }}</td>
                            <td>{{ $kuesioner->jns_kelamin }}</td>
                            <td>{{ $kuesioner->nim }}</td>
                            <td>{{ $kuesioner->tahun_masuk }}</td>
                            <td>{{ $kuesioner->tahun_lulus }}</td>
                            <td>{{ $kuesioner->no_hp }}</td>
                            <td>{{ $kuesioner->email }}</td>
                            <td>{{ $kuesioner->status }}</td>
                            <td>{{ $kuesioner->bidang_job }}</td>
                            <td>{{ $kuesioner->jns_job }}</td>
                            <td>{{ $kuesioner->nama_job }}</td>
                            <td>{{ $kuesioner->jabatan_job }}</td>
                            <td>{{ $kuesioner->lingkup_job }}</td>
                            <td>{{ $kuesioner->biaya_studi }}</td>
                            <td>{{ $kuesioner->nama_studi }}</td>
                            <td>{{ $kuesioner->prodi }}</td>
                            <td>{{ $kuesioner->tgl_studi }}</td>
                        </tr>
                    @empty
                        <td colspan="22" class="text-center">
                            <div class="alert alert-warning mb-0">Data belum Tersedia.</div>
                        </td>
                    @endforelse
                </tbody>
            </table>
        </div>
        <div class="d-flex justify-content-end">
            {{ $kuesioners->links('pagination::bootstrap-4') }}
        </div>     
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