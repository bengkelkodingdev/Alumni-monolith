<div class="modal fade" id="dialogTambahJob" tabindex="-1" aria-labelledby="dialogTambahJobLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="dialogTambahJobLabel">Tambah Pekerjaaan</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="container">
                <form action="{{ route('job.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
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
                            <label class="col-sm-3 col-form-label">Tingkat Pekerjaan</label>
                            <div class="col-sm-9">
                                <select class="selectpicker form-control" data-live-search="true" name="lingkup_job" value="{{ old('lingkup_job') }}">
                                    <option selected disabled>Pilih Tingkat Pekerjaan</option>
                                    <option value="Lokal/Wilayah Tidak Berbadan Hukum">Lokal/Wilayah Tidak Berbadan Hukum</option>
                                    <option value="Lokal/Wilayah Berbadan Hukum">Lokal/Wilayah Berbadan Hukum</option>
                                    <option value="Nasional">Nasional</option>
                                    <option value="Multinasional">Multinasional</option>
                                    <option value="Internasional">Internasional</option>
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
                            <label class="col-sm-3 col-form-label">Kategori Pekerjaan</label>
                            <div class="col-sm-9">  
                                <select class="selectpicker form-control" data-live-search="true" name="jns_job" value="{{ old('jns_job') }}">
                                    <option selected disabled>Pilih Kategori Perusahaan Tempat Anda Bekerja</option>
                                    <option value="Perusahaan Swasta">Perusahaan Swasta</option>
                                    <option value="Perusahaan Nirlaba">Perusahaan Nirlaba</option>
                                    <option value="Institusi/Organisasi Multilateral">BUMN/BUMD</option>
                                    <option value="Lembaga Pemerintah">Lembaga Pemerintah</option>
                                    <option value="BUMN/BUMD">BUMN/BUMD</option>
                                    <option value="Wirausaha">Wirausaha</option>
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
                                <select class="selectpicker form-control" data-live-search="true" name="jns_job" value="{{ old('jabatan_job') }}">
                                    <option selected disabled>Pilih Jabatan Pekerjaan Anda</option>
                                    <option value="Founder">Founder</option>
                                    <option value="Co-Founder">Co-Founder</option>
                                    <option value="Staff">Staff</option>
                                    <option value="Freelance">Freelance</option>
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
                    <div class="modal-footer">
                        <button type="reset" class="btn btn btn-warning">Reset</button>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </form>
                </div>
            </div>
        </div>
    </div>
</div>