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
            <h2><b>Quiz</b></h2>
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
                            <label for="nim" class="col-sm-3 col-form-label">NIM</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control @error('nim') is-invalid @enderror" name="nim" value="{{ old('nim') }}" placeholder="Masukkan NIM Mahasiswa" id="nim">
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
                            <label for="nama_mhs" class="col-sm-3 col-form-label">Nama Mahasiswa</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control @error('nama_mhs') is-invalid @enderror" name="nama_mhs" value="{{ old('nama_mhs') }}" placeholder="Masukkan Nama Mahasiswa" id="nama_mhs">
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
                            <label for="email" class="col-sm-3 col-form-label">Email Pribadi</label>
                            <div class="col-sm-9">
                                <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" placeholder="Masukkan Email Mahasiswa" id="email">
                            </div>
                        </div>   
                        @error('email')
                            <div class="alert alert-danger mt-2">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <div class="row mb-3">
                            <label for="ipk" class="col-sm-3 col-form-label">IPK Mahasiswa</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control @error('ipk') is-invalid @enderror" name="ipk" value="{{ old('ipk') }}" placeholder="Masukkan IPK Mahasiswa" id="ipk" step="0.01">
                                </div>
                        </div>   
                        @error('ipk')
                            <div class="alert alert-danger mt-2">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <div class="row mb-3">
                        <label for="judul_skripsi" class="col-sm-3 col-form-label">Judul Skripsi</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control @error('judul_skripsi') is-invalid @enderror" name="judul_skripsi" value="{{ old('judul_skripsi') }}" placeholder="Masukkan Judul Skripsi Mahasiswa" id="judul_skripsi">
                            </div>
                        </div>   
                        @error('judul_skripsi')
                            <div class="alert alert-danger mt-2">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <div class="row mb-3">
                        <label for="dosen_wali" class="col-sm-3 col-form-label">Dosen Wali</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control @error('dosen_wali') is-invalid @enderror" name="dosen_wali" value="{{ old('dosen_wali') }}" placeholder="Masukkan Nama Dosen Wali Mahasiswa" id="dosen_wali">
                            </div>
                        </div>   
                        @error('dosen_wali')
                            <div class="alert alert-danger mt-2">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <div class="row mb-3">
                            <label for="tahun_lulus" class="col-sm-3 col-form-label">Tahun Lulus</label>
                                <div class="col-sm-9">
                                    <input type="number" class="form-control @error('tahun_lulus') is-invalid @enderror" name="tahun_lulus" value="{{ old('tahun_lulus') }}" placeholder="Masukkan Tahun Lulus Mahasiswa" id="tahun_lulus" min="1900" max="2024" step="1">
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
                            <label class="col-sm-3 col-form-label">Nama Instansi</label>
                            <div class="col-sm-9">        
                                <input type="text" class="form-control @error('nama_job') is-invalid @enderror" name="nama_job" value="{{ old('nama_job') }}" placeholder="Masukkan Nama Instansi">
                            </div>  
                        </div> 
                        <!-- error message untuk nim -->
                        @error('nama_job')
                            <div class="alert alert-danger mt-2">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <div class="row mb-3">
                            <label class="col-sm-3 col-form-label">Periode (MM/YYYY)</label>
                            <div class="col-sm-4">
                                <input type="text" class="form-control @error('periode_masuk_job') is-invalid @enderror" name="periode_masuk_job" value="{{ old('periode_masuk_job') }}" placeholder="Masukkan Bulan dan Tahun Periode Masuk Mahasiswa"> 
                            </div>  
                            <label class="col-sm-1 col-form-label">Sampai</label>
                            <div class="col-sm-4">
                                <input type="text" class="form-control @error('periode_keluar_job') is-invalid @enderror" name="periode_keluar_job" value="{{ old('periode_keluar_job') }}" placeholder="Masukkan Bulan dan Tahun Periode Keluar Mahasiswa">
                            </div>                                     
                        </div>                       
                        <!-- error message untuk periode_masuk_intern -->
                        @error('periode_masuk_job')
                            <div class="alert alert-danger mt-2">
                                {{ $message }}
                            </div>
                        @enderror
                        <!-- error message untuk periode_keluar_intern -->
                        @error('periode_keluar_job')
                            <div class="alert alert-danger mt-2">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    
                    <div class="form-group">
                        <div class="row mb-3">
                            <label class="col-sm-3 col-form-label">Alamat Instansi</label>
                            <div class="col-sm-9">  
                                <input type="text" class="form-control @error('alamat_job') is-invalid @enderror" name="alamat_job" value="{{ old('alamat_job') }}" placeholder="Masukkan Alamat Instansi">      
                            </div>  
                        </div> 
                        <!-- error message untuk alamat_job -->
                        @error('alamat_job')
                            <div class="alert alert-danger mt-2">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    
                    <div class="form-group">
                        <div class="row mb-3">
                            <label class="col-sm-3 col-form-label">Lingkup Pekerjaan</label>
                            <div class="col-sm-9">
                            <select class="selectpicker form-control" data-live-search="true" name="lingkup_job" value="{{ old('lingkup_job') }}">
                                    <option selected disabled>Pilih Lingkup Pekerjaan</option>
                                    <option value="Internasional">Internasional</option>
                                    <option value="Nasional">Nasional</option>
                                    <option value="Wirausaha">Wirausaha</option>
                            </select>    
                        </div>  
                        </div>  
                        <!-- error message untuk lingkup_job -->
                        @error('lingkup_job')
                            <div class="alert alert-danger mt-2">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <div class="row mb-3">
                            <label class="col-sm-3 col-form-label">Bidang Pekerjaan</label>
                            <div class="col-sm-9">
                            <select class="selectpicker form-control" data-live-search="true" name="bidang_job" value="{{ old('bidang_job') }}">
                                    <option selected disabled>Pilih Bidang Pekerjaan</option>
                                    <option value="Infokom">Infokom</option>
                                    <option value="Non Infokom">Non Infokom</option>
                            </select>    
                        </div>  
                        </div>  
                        <!-- error message untuk bidang_job -->
                        @error('bidang_job')
                            <div class="alert alert-danger mt-2">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <div class="row mb-3">
                            <label class="col-sm-3 col-form-label">Jenis Instansi</label>
                            <div class="col-sm-9">  
                                <select class="selectpicker form-control" data-live-search="true" name="jns_job" value="{{ old('jns_job') }}">
                                    <option selected disabled>Pilih Jenis Instansi</option>
                                    <option value="Swasta">Swasta</option>
                                    <option value="Pemerintah">Pemerintah</option>
                                    <option value="Publik">Publik</option>
                                    <option value="Non Profit">Non Profit</option>
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
                            <label class="col-sm-3 col-form-label">Jabatan Pekerjaan</label>
                            <div class="col-sm-9">  
                                <input type="text" class="form-control @error('jabatan_job') is-invalid @enderror" name="jabatan_job" value="{{ old('jabatan_job') }}" placeholder="Masukkan Jabatan Pekerjaan">      
                            </div>  
                        </div> 
                        <!-- error message untuk jabatan_job -->
                        @error('jabatan_job')
                            <div class="alert alert-danger mt-2">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <div class="row mb-3">
                            <label class="col-sm-3 col-form-label">Biaya Melanjutkan Studi</label>
                            <div class="col-sm-9">  
                                <select class="selectpicker form-control" data-live-search="true" name="jns_job" value="{{ old('jns_job') }}">
                                    <option selected disabled>Pilih Biaya Melanjutkan Studi</option>
                                    <option value="Sendiri">Sendiri</option>
                                    <option value="Beasiswa">Beasiswa</option>
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
                            <label class="col-sm-3 col-form-label">Nama Perguruan Tinggi</label>
                            <div class="col-sm-9">  
                                <input type="text" class="form-control @error('jabatan_job') is-invalid @enderror" name="jabatan_job" value="{{ old('jabatan_job') }}" placeholder="Masukkan Nama Perguruan Tinggi Tempat Melakukan Studi">      
                            </div>  
                        </div> 
                        <!-- error message untuk jabatan_job -->
                        @error('jabatan_job')
                            <div class="alert alert-danger mt-2">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <div class="row mb-3">
                            <label class="col-sm-3 col-form-label">Program Studi</label>
                            <div class="col-sm-9">  
                                <input type="text" class="form-control @error('jabatan_job') is-invalid @enderror" name="jabatan_job" value="{{ old('jabatan_job') }}" placeholder="Masukkan Program Studi yang Anda Tempuh">      
                            </div>  
                        </div> 
                        <!-- error message untuk jabatan_job -->
                        @error('jabatan_job')
                            <div class="alert alert-danger mt-2">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <div class="row mb-3">
                            <label class="col-sm-3 col-form-label">Tanggal Mulai Studi</label>
                            <div class="col-sm-9">  
                                <input type="date" class="form-control @error('jabatan_job') is-invalid @enderror" name="jabatan_job" value="{{ old('jabatan_job') }}" placeholder="Masukkan Tanggal Mulai Studi Lanjutan">      
                            </div>  
                        </div> 
                        <!-- error message untuk jabatan_job -->
                        @error('jabatan_job')
                            <div class="alert alert-danger mt-2">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary">Submit</button>
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