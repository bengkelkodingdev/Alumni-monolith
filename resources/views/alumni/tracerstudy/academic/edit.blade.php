@foreach ($academics as $academic)
<!-- Modal -->
<div class="modal fade" id="dialogEditAcademic{{ $academic->id }}" tabindex="-1" aria-labelledby="dialogEditAcademicLabel{{ $academic->id }}" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
    <div class="modal-content">
        <div class="modal-header">
        <h5 class="modal-title" id="dialogEditAcademicLabel{{ $academic->id }}">Edit Pelatihan</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">  
            <div class="container">
            <form action="{{ route('academic.update', $academic->id) }}" method="POST">
                @csrf
                @method('PUT')
                <!-- form fields here -->
                <div class="form-group">
                    <div class="row mb-3">
                        <label for="nim" class="col-sm-3 col-form-label">NIM</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control @error('nim') is-invalid @enderror" name="nim" value="{{ old('nim', $academic->nim) }}" placeholder="Masukkan NIM Mahasiswa" id="nim">
                        </div>
                    </div>   
                    
                    <!-- error message untuk nim -->                            
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
                            <input type="text" class="form-control @error('nama_mhs') is-invalid @enderror" name="nama_mhs" value="{{ old('nama_mhs', $academic->nama_mhs) }}" placeholder="Masukkan Nama Mahasiswa" id="nama_mhs">
                        </div>
                    </div>   
                    <!-- error message untuk nama_mhs -->                               
                    @error('nama_mhs')
                        <div class="alert alert-danger mt-2">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="form-group">
                    <div class="row mb-3">
                        <label for="email" class="col-sm-3 col-form-label">Email Mahasiswa</label>
                        <div class="col-sm-9">
                            <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email', $academic->email) }}" placeholder="Masukkan Email Mahasiswa">
                        </div>
                    </div>                                 
                    <!-- error message untuk email -->
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
                            <input type="text" class="form-control @error('ipk') is-invalid @enderror" name="ipk" value="{{ old('ipk', $academic->ipk) }}" placeholder="Masukkan IPK Mahasiswa" id="ipk" step="0.01">
                        </div>
                    </div>  
                
                    <!-- error message untuk nama_mhs -->
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
                            <input type="text" class="form-control @error('judul_skripsi') is-invalid @enderror" name="judul_skripsi" value="{{ old('judul_skripsi', $academic->judul_skripsi) }}" placeholder="Masukkan Judul Skripsi Mahasiswa">
                        </div>
                    </div>  
                    <!-- error message untuk nama_mhs -->
                    @error('judul_skripsi')
                        <div class="alert alert-danger mt-2">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="form-group">
                    <div class="row mb-3">
                        <label for="dosen_wali"class="col-sm-3 col-form-label">Dosen Wali</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control @error('dosen_wali') is-invalid @enderror" name="dosen_wali" value="{{ old('dosen_wali', $academic->dosen_wali) }}" placeholder="Masukkan Nama Dosen Wali Mahasiswa">
                        </div>
                    </div>  
                    <!-- error message untuk nama_mhs -->
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
                            <input type="number" class="form-control @error('tahun_lulus') is-invalid @enderror" name="tahun_lulus" value="{{ old('tahun_lulus', $academic->tahun_lulus) }}" placeholder="Masukkan Tahun Lulus Mahasiswa" id="tahun_lulus" min="1900" max="2024" step="1">
                        </div>
                    </div>  
                
                    <!-- error message untuk tahun_lulus -->
                    @error('tahun_lulus')
                        <div class="alert alert-danger mt-2">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="d-flex justify-content-end mt-5">
                    <button type="submit" class="btn btn-primary">Update</button>
                </div>  
            </form>
            </div>
        </div>
    </div>
    </div>
</div>
@endforeach