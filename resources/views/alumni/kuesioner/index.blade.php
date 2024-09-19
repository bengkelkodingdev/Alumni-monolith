@extends('alumni.layouts.main')
@section('title', 'Tracer Study Alumni')
@section('content')
    <!-- Navbar -->
    <nav class="sb-topnav navbar navbar-expand">
        <a class="navbar-brand" href="{{ route('alumni') }}">
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
        <div class="container-fluid px-4 mt-3">
            <h2><b>Tracer Study Alumni</b></h2>
            <p>Detail informasi berikut ini.</p><hr>
            <div class="row justify-content">
                <div class="col-md-12">
                    <div class="card border-0 shadow-sm rounded">
                        <div class="card-body form-container">
                            @foreach ($kuesioners as $kuesioner)
                                <!-- Tampilan data tanpa form input -->
                                <div class="form-group">
                                    <div class="row mb-3">
                                        <label for="nama_alumni" class="col-sm-3 col-form-label">Nama Alumni</label>
                                        <div class="col-sm-9">
                                            <p><b>: &nbsp;&nbsp;</b>{{ $kuesioner->nama_alumni }}</p>
                                        </div>
                                </div>
                                <div class="form-group">
                                    <div class="row mb-3">
                                        <label for="nim" class="col-sm-3 col-form-label">Jenis Kelamin</label>
                                        <div class="col-sm-9">
                                            <p><b>: &nbsp;&nbsp;</b>{{ $kuesioner->jns_kelamin }}</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="row mb-3">
                                        <label for="nim" class="col-sm-3 col-form-label">NIM</label>
                                        <div class="col-sm-9">
                                            <p><b>: &nbsp;&nbsp;</b>{{ $kuesioner->nim }}</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="row mb-3">
                                        <label for="tahun_masuk" class="col-sm-3 col-form-label">Tahun Masuk</label>
                                        <div class="col-sm-9">
                                            <p><b>: &nbsp;&nbsp;</b>{{ $kuesioner->tahun_masuk }}</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="row mb-3">
                                        <label for="tahun_lulus" class="col-sm-3 col-form-label">Tahun Lulus</label>
                                        <div class="col-sm-9">
                                            <p><b>: &nbsp;&nbsp;</b>{{ $kuesioner->tahun_lulus }}</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="row mb-3">
                                        <label for="email" class="col-sm-3 col-form-label">Alamat Email</label>
                                        <div class="col-sm-9">
                                            <p><b>: &nbsp;&nbsp;</b>{{ $kuesioner->email }}</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="row mb-3">
                                        <label for="email" class="col-sm-3 col-form-label">No WhatsApp</label>
                                        <div class="col-sm-9">
                                            <p><b>: &nbsp;&nbsp;</b>{{ $kuesioner->no_hp }}</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="row mb-3">
                                        <label for="email" class="col-sm-3 col-form-label">Status</label>
                                        <div class="col-sm-9">
                                            <p><b>: &nbsp;&nbsp;</b>{{ $kuesioner->status }}</p>
                                        </div>
                                    </div>
                                </div>
                                @if($kuesioner->status == "Bekerja Full Time" || $kuesioner->status == "Bekerja Part Time" || $kuesioner->status == "Wiraswasta")
                                <div class="form-group">
                                    <div class="row mb-3">
                                        <label for="email" class="col-sm-3 col-form-label">Bidang Pekerjaan</label>
                                        <div class="col-sm-9">
                                            <p><b>: &nbsp;&nbsp;</b>{{ $kuesioner->bidang_job }}</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="row mb-3">
                                        <label for="email" class="col-sm-3 col-form-label">Kategori Pekerjaan</label>
                                        <div class="col-sm-9">
                                            <p><b>: &nbsp;&nbsp;</b>{{ $kuesioner->jns_job }}</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="row mb-3">
                                        <label for="email" class="col-sm-3 col-form-label">Nama Instansi</label>
                                        <div class="col-sm-9">
                                            <p><b>: &nbsp;&nbsp;</b>{{ $kuesioner->nama_job }}</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="row mb-3">
                                        <label for="email" class="col-sm-3 col-form-label">Jabatan Pekerjaan</label>
                                        <div class="col-sm-9">
                                            <p><b>: &nbsp;&nbsp;</b>{{ $kuesioner->jabatan_job }}</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="row mb-3">
                                        <label for="email" class="col-sm-3 col-form-label">Tingkat Pekerjaan</label>
                                        <div class="col-sm-9">
                                            <p><b>: &nbsp;&nbsp;</b>{{ $kuesioner->lingkup_job }}</p>
                                        </div>
                                    </div>
                                </div>
                                @elseif($kuesioner->status == "Melanjutkan Pendidikan")
                                <div class="form-group">
                                    <div class="row mb-3">
                                        <label for="email" class="col-sm-3 col-form-label">Sumber Biaya Studi</label>
                                        <div class="col-sm-9">
                                            <p><b>: &nbsp;&nbsp;</b>{{ $kuesioner->biaya_studi }}</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="row mb-3">
                                        <label for="email" class="col-sm-3 col-form-label">Nama Universitas</label>
                                        <div class="col-sm-9">
                                            <p><b>: &nbsp;&nbsp;</b>{{ $kuesioner->nama_studi }}</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="row mb-3">
                                        <label for="email" class="col-sm-3 col-form-label">Program Studi</label>
                                        <div class="col-sm-9">
                                            <p><b>: &nbsp;&nbsp;</b>{{ $kuesioner->prodi }}</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="row mb-3">
                                        <label for="email" class="col-sm-3 col-form-label">Tanggal Mulai Studi</label>
                                        <div class="col-sm-9">
                                            <p><b>: &nbsp;&nbsp;</b>{{ $kuesioner->tgl_studi }}</p>
                                        </div>
                                    </div>
                                </div>
                                @endif
                                <!-- Button Edit -->
                                <!-- <div class="modal-footer">
                                    <a href="{{ route('kuesioner.edit', $kuesioner->id) }}" class="btn btn-primary">Edit</a>
                                </div>                             -->
                            @endforeach
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
