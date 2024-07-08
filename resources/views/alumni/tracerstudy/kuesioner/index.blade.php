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
        <div class="container-fluid px-4 mt-3 ">
            <h2><b>Kuesioner</b></h2>
            <p>Wajib mengisi form berikut ini.</p>
        </div>
        <div class="row">
            <!-- ini isi kontennya disini -->
            <div class="card border-0 shadow-sm rounded">
            <div class="card-body">
                <form action="{{ route('academic.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    
                    <div class="form-group">
                        <div class="row mb-3">
                            <label for="nama_mhs" class="col-sm-3 col-form-label">Nama Alumni</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control @error('nama_mhs') is-invalid @enderror" name="nama_mhs" value="{{ old('nama_mhs') }}" placeholder="Masukkan Nama Alumni" id="nama_mhs">
                            </div>
                        </div>                                  
                        @error('nama_mhs')
                            <div class="alert alert-danger mt-2">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <div class="row mb-3">
                            <label class="col-sm-3 col-form-label">Jenis Kelamin</label>
                            <div class="col-sm-9">  
                                <select class="selectpicker form-control" data-live-search="true" name="jns_job" value="{{ old('jns_job') }}">
                                    <option selected disabled>Pilih Jenis Kelamin</option>
                                    <option value="Perempuan">Perempuan</option>
                                    <option value="Laki-Laki">Laki-Laki</option>
                                </select>      
                            </div>  
                        </div> 
                        <!-- error message untuk jns_job -->
                        @error('jns_job')
                            <div class="alert alert-danger mt-2">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <div class="row mb-3">
                            <label for="nim" class="col-sm-3 col-form-label">NIM</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control @error('nim') is-invalid @enderror" name="nim" value="{{ old('nim') }}" placeholder="Masukkan NIM Sewaktu Mahasiswa" id="nim">
                            </div>
                        </div>                              
                        @error('nim')
                            <div class="alert alert-danger mt-2">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <div class="row mb-3">
                            <label for="tahun_masuk" class="col-sm-3 col-form-label">Tahun Masuk</label>
                                <div class="col-sm-9">
                                    <input type="number" class="form-control @error('tahun_masuk') is-invalid @enderror" name="tahun_masuk" value="{{ old('tahun_masuk') }}" placeholder="Masukkan Tahun Masuk Perkuliahan" id="tahun_masuk" min="1900" max="2024" step="1">
                                </div>
                        </div>   
                        @error('tahun_masuk')
                            <div class="alert alert-danger mt-2">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <div class="row mb-3">
                            <label for="tahun_lulus" class="col-sm-3 col-form-label">Tahun Lulus</label>
                                <div class="col-sm-9">
                                    <input type="number" class="form-control @error('tahun_lulus') is-invalid @enderror" name="tahun_lulus" value="{{ old('tahun_lulus') }}" placeholder="Masukkan Tahun Lulus Perkuliahan" id="tahun_lulus" min="1900" max="2024" step="1">
                                </div>
                        </div>   
                        @error('tahun_lulus')
                            <div class="alert alert-danger mt-2">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <div class="row mb-3">
                            <label for="email" class="col-sm-3 col-form-label">Nomer Hp (WhatsApp)</label>
                            <div class="col-sm-9">
                                <input type="number" class="form-control @error('nomer_hp') is-invalid @enderror" name="nomer_hp" value="{{ old('nomer_hp') }}" placeholder="Masukkan Nomer Handphone yang terhubung WhatsApp" id="nomer_hp">
                            </div>
                        </div>   
                        @error('nomer_hp')
                            <div class="alert alert-danger mt-2">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <div class="row mb-3">
                            <label for="email" class="col-sm-3 col-form-label"> Alamat Email</label>
                            <div class="col-sm-9">
                                <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" placeholder="Masukkan Email Pribadi" id="email">
                            </div>
                        </div>   
                        @error('email')
                            <div class="alert alert-danger mt-2">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary">Next</button>
                    </div>
                </form>
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