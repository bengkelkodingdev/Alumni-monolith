@extends('alumni.layouts.main')
@section('title', 'Tracer Study Alumni')
@section('content')
    <!-- Navbar -->
    <nav class="sb-topnav navbar navbar-expand">
        <a class="navbar-brand" href="/admin">
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
            <h2><b>Edit Tracer Study Alumni</b></h2>
            <p>Edit isi form berikut ini.</p><hr>
            <div class="row justify-content">
                <!-- ini isi kontennya disini -->
                <div class="col-md-12">
                    <div class="card border-0 shadow-sm rounded">
                        <div class="card-body form-container">
                            <form action="{{ route('kuesioner.update', $kuesioner->id) }}" method="POST">
                                @csrf
                                @method('PUT')
                                                                
                                <!-- form 1 -->
                                <div class="form-group">
                                    <div class="row mb-3">
                                        <label for="nama_alumni" class="col-sm-3 col-form-label">Nama Alumni</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control @error('nama_alumni') is-invalid @enderror" name="nama_alumni" value="{{ old('nama_alumni', $kuesioner->nama_alumni) }}" id="nama_alumni" readonly>
                                        </div>
                                    </div>                                                         
                                    @error('nama_alumni')
                                        <div class="alert alert-danger mt-2">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <!-- form 2 -->
                                <div class="form-group">
                                    <div class="row mb-3">
                                        <label class="col-sm-3 col-form-label">Jenis Kelamin</label>
                                        <div class="col-sm-9">  
                                            <select class="selectpicker form-control" data-live-search="true" name="jns_kelamin" value="{{ old('jns_kelamin', $kuesioner->jns_kelamin) }}">
                                                <option selected disabled>Pilih Jenis Kelamin</option>
                                                <option value="Perempuan"{{ $kuesioner->jns_kelamin == 'Perempuan' ? 'selected' : '' }}>Perempuan</option>
                                                <option value="Laki-Laki"{{ $kuesioner->jns_kelamin == 'Laki-Laki' ? 'selected' : '' }}>Laki-Laki</option>
                                            </select>      
                                        </div>  
                                    </div> 
                                    <!-- error message untuk jns_kelamin -->
                                    @error('jns_kelamin')
                                        <div class="alert alert-danger mt-2">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <!-- form 3 -->
                                <div class="form-group">
                                    <div class="row mb-3">
                                        <label for="nim" class="col-sm-3 col-form-label">NIM</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control @error('nim') is-invalid @enderror" name="nim" value="{{old('nim', $kuesioner->nim) }}" placeholder="Masukkan NIM Sewaktu Mahasiswa" id="nim">
                                        </div>
                                    </div>                              
                                    @error('nim')
                                        <div class="alert alert-danger mt-2">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <!-- form 4 -->
                                <div class="form-group">
                                    <div class="row mb-3">
                                        <label for="tahun_masuk" class="col-sm-3 col-form-label">Tahun Masuk</label>
                                            <div class="col-sm-9">
                                                <input type="number" class="form-control @error('tahun_masuk') is-invalid @enderror" name="tahun_masuk" value="{{ old('tahun_masuk', $kuesioner->tahun_masuk)  }}" placeholder="Masukkan Tahun Masuk Perkuliahan" id="tahun_masuk" min="1900" max="2024" step="1">
                                            </div>
                                    </div>   
                                    @error('tahun_masuk')
                                        <div class="alert alert-danger mt-2">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <!-- form 5 -->
                                <div class="form-group">
                                    <div class="row mb-3">
                                        <label for="tahun_lulus" class="col-sm-3 col-form-label">Tahun Lulus</label>
                                            <div class="col-sm-9">
                                                <input type="number" class="form-control @error('tahun_lulus') is-invalid @enderror" name="tahun_lulus" value="{{ old('tahun_lulus', $kuesioner->tahun_lulus)  }}" placeholder="Masukkan Tahun Lulus Perkuliahan" id="tahun_lulus" min="1900" max="2024" step="1">
                                            </div>
                                    </div>   
                                    @error('tahun_lulus')
                                        <div class="alert alert-danger mt-2">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <!-- form 6 -->
                                <div class="form-group">
                                    <div class="row mb-3">
                                        <label for="no_hp" class="col-sm-3 col-form-label">Nomer Hp (WhatsApp)</label>
                                        <div class="col-sm-9">
                                            <input type="number" class="form-control @error('no_hp') is-invalid @enderror" name="no_hp" value="{{old('no_hp', $kuesioner->no_hp)  }}" placeholder="Masukkan Nomer Handphone yang terhubung WhatsApp" id="no_hp">
                                        </div>
                                    </div>   
                                    @error('no_hp')
                                        <div class="alert alert-danger mt-2">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <!-- form 7 -->
                                <div class="form-group">
                                    <div class="row mb-3">
                                        <label for="email" class="col-sm-3 col-form-label">Alamat Email</label>
                                        <div class="col-sm-9">
                                            <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email', $kuesioner->email) }}" id="email" readonly>
                                        </div>
                                    </div>   
                                    @error('email')
                                        <div class="alert alert-danger mt-2">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <!-- form 8 -->
                                <div class="form-group">
                                    <div class="row mb-3">
                                        <label class="col-sm-3 col-form-label">Jelaskan Status Anda Saat Ini</label>
                                        <div class="col-sm-9">  
                                            <select class="selectpicker form-control" data-live-search="true" name="status" id="status" value="{{ old('status', $kuesioner->status)  }}" onchange="handleStatusChange()">
                                                <option selected disabled>Pilih Status Anda Saat Ini</option>
                                                <option value="Bekerja Full Time"{{ $kuesioner->status == 'Bekerja Full Time' ? 'selected' : '' }}>Bekerja Full Time</option>
                                                <option value="Bekerja Part Time"{{ $kuesioner->status == 'Bekerja Part Time' ? 'selected' : '' }}>Bekerja Part Time</option>
                                                <option value="Wiraswasta"{{ $kuesioner->status == 'Wiraswasta' ? 'selected' : '' }}>Wiraswasta</option>
                                                <option value="Melanjutkan Pendidikan"{{ $kuesioner->status == 'Melanjutkan Pendidikan' ? 'selected' : '' }}>Melanjutkan Pendidikan</option>
                                                <option value="Tidak Bekerja Tetapi Sedang Mencari Pekerjaan"{{ $kuesioner->status == 'Tidak Bekerja Tetapi Sedang Mencari Pekerjaan' ? 'selected' : '' }}>Tidak Bekerja Tetapi Sedang Mencari Pekerjaan</option>
                                                <option value="Belum Memungkinkan Bekerja"{{ $kuesioner->status == 'Belum Memungkinkan Bekerja' ? 'selected' : '' }}>Belum Memungkinkan Bekerja</option>
                                                <option value="Menikah/Mengurus Keluarga"{{ $kuesioner->status == 'Menikah/Mengurus Keluarga' ? 'selected' : '' }}>Menikah/Mengurus Keluarga</option>
                                            </select>      
                                        </div>  
                                    </div> 
                                    <!-- error message untuk status -->
                                    @error('status')
                                        <div class="alert alert-danger mt-2">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                
                                <!-- Form 9-12, hanya ditampilkan jika status bekerja full time/part time/Wiraswasta -->
                                <div id="job-fields" class="d-none">                                    
                                    <!-- form 9 -->
                                    <div class="form-group">
                                        <div class="row mb-3">
                                            <label class="col-sm-3 col-form-label">Bidang Pekerjaan</label>
                                            <div class="col-sm-9">
                                            <select class="selectpicker form-control" data-live-search="true" name="bidang_job" value="{{ old('bidang_job',$kuesioner->bidang_job) }}">
                                                    <option selected disabled>Pilih Bidang Pekerjaan</option>
                                                    <option value="Infokom" {{ $kuesioner->bidang_job == 'Infokom' ? 'selected' : '' }}>Infokom</option>
                                                    <option value="Non Infokom" {{ $kuesioner->bidang_job == 'Non Infokom' ? 'selected' : '' }}>Non Infokom</option>
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
                                    <!-- form 10 -->
                                    <div class="form-group">
                                        <div class="row mb-3">
                                            <label class="col-sm-3 col-form-label">Kategori Perusahaan</label>
                                            <div class="col-sm-9">    
                                                <select class="selectpicker form-control" data-live-search="true" name="jns_job" value="{{ old('jns_job',$kuesioner->jns_job) }}">
                                                    <option selected disabled>Pilih Kategori Perusahaan Tempat Anda Bekerja</option>
                                                    <option value="Perusahaan Swasta" {{ $kuesioner->jns_job == 'Perusahaan Swasta' ? 'selected' : '' }}>Perusahaan Swasta</option>
                                                    <option value="Perusahaan Nirlaba" {{ $kuesioner->jns_job == 'Perusahaan Nirlaba' ? 'selected' : '' }}>Perusahaan Nirlaba</option>
                                                    <option value="Lembaga Pemerintah" {{ $kuesioner->jns_job == 'Lembaga Pemerintah' ? 'selected' : '' }}>Lembaga Pemerintah</option>
                                                    <option value="BUMN/BUMD" {{ $kuesioner->jns_job == 'BUMN/BUMD' ? 'selected' : '' }}>BUMN/BUMD</option>
                                                    <option value="Non Profit" {{ $kuesioner->jns_job == 'Non Profit' ? 'selected' : '' }}>Non Profit</option>
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
                                    <!-- form 11 -->
                                    <div class="form-group">
                                        <div class="row mb-3">
                                            <label class="col-sm-3 col-form-label">Nama Instansi</label>
                                            <div class="col-sm-9">        
                                                <input type="text" class="form-control @error('nama_job') is-invalid @enderror" name="nama_job" value="{{ old('nama_job', $kuesioner->nama_job) }}" placeholder="Masukkan Nama Instansi">
                                            </div>  
                                        </div> 
                                        <!-- error message untuk nim -->
                                        @error('nama_job')
                                            <div class="alert alert-danger mt-2">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                    <!-- form 12 -->
                                    <div class="form-group">
                                        <div class="row mb-3">
                                            <label class="col-sm-3 col-form-label">Jabatan Pekerjaan</label>
                                            <div class="col-sm-9">       
                                                <select class="selectpicker form-control" data-live-search="true" name="jabatan_job" value="{{ old('jabatan_job',$kuesioner->jabatan_job) }}">
                                                    <option selected disabled>Pilih Kategori Perusahaan Tempat Anda Bekerja</option>
                                                    <option value="Founder" {{ $kuesioner->jabatan_job == 'Founder' ? 'selected' : '' }}>Founder</option>
                                                    <option value="Co-Founder" {{ $kuesioner->jabatan_job == 'Co-Founder' ? 'selected' : '' }}>Co-Founder</option>
                                                    <option value="Staff" {{ $kuesioner->jabatan_job == 'Staff' ? 'selected' : '' }}>Staff</option>
                                                    <option value="Freelance" {{ $kuesioner->jabatan_job == 'Freelance' ? 'selected' : '' }}>Freelance</option>
                                                </select>     
                                            </div>  
                                        </div>  
                                        <!-- error message untuk jabatan_job -->
                                        @error('jabatan_job')
                                            <div class="alert alert-danger mt-2">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                    <!-- form 13 -->
                                    <div class="form-group">
                                        <div class="row mb-3">
                                            <label class="col-sm-3 col-form-label">Tingkat Pekerjaan</label>
                                            <div class="col-sm-9">
                                                <select class="selectpicker form-control" data-live-search="true" name="lingkup_job" value="{{ old('lingkup_job',$kuesioner->lingkup_job) }}">
                                                    <option selected disabled>Pilih Tingkat Pekerjaan</option>
                                                    <option value="Lokal/Wilayah Tidak Berbadan Hukum" {{ $kuesioner->lingkup_job == 'Lokal/Wilayah Tidak Berbadan Hukum' ? 'selected' : '' }}>Lokal/Wilayah Tidak Berbadan Hukum</option>
                                                    <option value="Lokal/Wilayah Berbadan Hukum" {{ $kuesioner->lingkup_job == 'Lokal/Wilayah Berbadan Hukum' ? 'selected' : '' }}>Lokal/Wilayah Berbadan Hukum</option>
                                                    <option value="Nasional" {{ $kuesioner->lingkup_job == 'Nasional' ? 'selected' : '' }}>Nasional</option>
                                                    <option value="Multinasional" {{ $kuesioner->lingkup_job == 'Multinasional' ? 'selected' : '' }}>Multinasional</option>
                                                    <option value="Internasional" {{ $kuesioner->lingkup_job == 'Internasional' ? 'selected' : '' }}>Internasional</option>
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
                                </div>

                                <!-- Form 14-17, hanya ditampilkan jika melanjutkan studi -->
                                <div id="education-fields" class="d-none">
                                    <!-- form 14 -->
                                    <div class="form-group">
                                        <div class="row mb-3">
                                            <label class="col-sm-3 col-form-label">Sumber Biaya Melanjutkan Studi</label>
                                            <div class="col-sm-9">
                                                <select class="selectpicker form-control" data-live-search="true" name="biaya_studi" value="{{ old('biaya_studi', $kuesioner->biaya_studi) }}">
                                                    <option selected disabled>Pilih Sumber Biaya Melanjutkan Studi</option>
                                                    <option value="Sendiri"{{ $kuesioner->biaya_studi == 'Sendiri' ? 'selected' : '' }}>Sendiri</option>
                                                    <option value="Beasiswa" {{ $kuesioner->biaya_studi == 'Beasiswa' ? 'selected' : '' }}>Beasiswa</option>
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
                                    <!-- form 15 -->
                                    <div class="form-group">
                                        <div class="row mb-3">
                                            <label for="nama_studi" class="col-sm-3 col-form-label">Nama Perguruan Tinggi Lanjutan Studi</label>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control @error('nama_studi') is-invalid @enderror" name="nama_studi" value="{{ old('nama_job', $kuesioner->nama_job) }}" placeholder="Masukkan Nama Perguruan Tinggi Tempat Anda Melakukan Studi" id="nama_studi">
                                            </div>
                                        </div>                              
                                        @error('nama_studi')
                                            <div class="alert alert-danger mt-2">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                    <!-- form 16 -->
                                    <div class="form-group">
                                        <div class="row mb-3">
                                            <label for="prodi" class="col-sm-3 col-form-label">Nama Program Studi yang Sedang Anda Tempuh</label>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control @error('prodi') is-invalid @enderror" name="prodi" value="{{ old('nama_job', $kuesioner->nama_job) }}" placeholder="Masukkan Nama Program Studi yang Sedang Anda Tempuh" id="prodi">
                                            </div>
                                        </div>                              
                                        @error('prodi')
                                            <div class="alert alert-danger mt-2">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                    <!-- form 17 -->
                                    <div class="form-group">
                                        <div class="row mb-3">
                                            <label for="tgl_studi" class="col-sm-3 col-form-label">Tanggal Masuk/Mulai Studi Lanjutan</label>
                                            <div class="col-sm-9">
                                                <input type="date" class="form-control @error('tgl_studi') is-invalid @enderror" name="tgl_studi" value="{{ old('nama_job', $kuesioner->nama_job) }}" placeholder="Masukkan Tanggal Masuk/Mulai Masuk Studi Lanjutan" id="tgl_studi">
                                            </div>
                                        </div>                              
                                        @error('tgl_studi')
                                            <div class="alert alert-danger mt-2">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="submit" class="btn btn-primary">Simpan</button>
                                </div>
                            </form>
                        </div> 
                    </div>
                </div>
            </div>
        </div>
    </main>
    <script>
        function handleStatusChange() {
            var status = document.getElementById("status").value;
            var jobFields = document.getElementById("job-fields");
            var educationFields = document.getElementById("education-fields");

            if (status === "Bekerja Full Time" || status === "Bekerja Part Time" || status === "Wiraswasta") {
                jobFields.classList.remove('d-none');
                educationFields.classList.add('d-none');
            } else if (status === "Melanjutkan Pendidikan") {
                educationFields.classList.remove('d-none');
                jobFields.classList.add('d-none');
            } else {
                jobFields.classList.add('d-none');
                educationFields.classList.add('d-none');
            }
        }
    </script>
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