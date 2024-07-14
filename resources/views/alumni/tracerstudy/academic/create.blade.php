<div class="modal fade" id="dialogTambahAcademic" tabindex="-1" aria-labelledby="dialogTambahAcademicLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="dialogTambahAcademicLabel">Tambah Data Akademik</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="container">
                    <form action="{{ route('academic.store') }}" method="POST" enctype="multipart/form-data">
                        
                        @csrf

                        <div class="form-group">
                            <div class="row mb-3">
                                <label for="nama_studi" class="col-sm-3 col-form-label">Nama Universitas</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control @error('nama_studi') is-invalid @enderror" name="nama_studi" value="{{ old('nama_studi') }}" placeholder="Masukkan Nama Universitas" id="nama_studi">
                                </div>
                            </div>                              
                            @error('nama_studi')
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
                                <label for="tahun_masuk" class="col-sm-3 col-form-label">Tahun Masuk</label>
                                    <div class="col-sm-9">
                                        <input type="number" class="form-control @error('tahun_masuk') is-invalid @enderror" name="tahun_masuk" value="{{ old('tahun_masuk') }}" placeholder="Masukkan Tahun Masuk Mahasiswa" id="tahun_masuk" min="1900" max="2024" step="1">
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