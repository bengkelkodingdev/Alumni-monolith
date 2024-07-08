<div class="modal fade" id="dialogTambahAcademic" tabindex="-1" aria-labelledby="dialogTambahAcademicLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="dialogTambahAcademicLabel">Tambah Sertifikasi</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="container">
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
                        
                        <div class="d-flex justify-content-end mt-5">
                            <button type="reset" class="btn btn-md btn-warning-custom mr-2">RESET</button>
                            <button type="submit" class="btn btn-md btn-custom">SIMPAN</button>
                        </div>
                    </form> 
                </div>
            </div>
        </div>
    </div>
</div>