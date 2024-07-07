@foreach ($internships as $internship)
<!-- Modal -->
<div class="modal fade" id="dialogEditInternship{{ $internship->id }}" tabindex="-1" aria-labelledby="dialogEditInternshipLabel{{ $internship->id }}" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
    <div class="modal-content">
        <div class="modal-header">
        <h5 class="modal-title" id="dialogEditInternshipLabel{{ $internship->id }}">Edit Pelatihan</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">  
            <div class="container">
            <form action="{{ route('internship.update', $internship->id) }}" method="POST">
                @csrf
                @method('PUT')
                <!-- form fields here -->
                <div class="form-group">
                    <div class="row mb-3">
                        <label class="col-sm-3 col-form-label">Nama Instansi</label>
                        <div class="col-sm-9">
                        <input type="text" class="form-control @error('nama_intern') is-invalid @enderror" name="nama_intern" value="{{ old('nama_intern',$internship->nama_intern) }}" placeholder="Masukkan Nama Instansi"> 
                        </div>  
                    </div>  
                    <!-- error message untuk nim -->
                    @error('nama_intern')
                        <div class="alert alert-danger mt-2">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="form-group">
                    <div class="row mb-3">
                        <label class="col-sm-3 col-form-label">Periode (MM/YYYY)</label>
                        <div class="col-sm-4">
                            <input type="text" class="form-control @error('periode_masuk_intern') is-invalid @enderror" name="periode_masuk_intern" value="{{ old('periode_masuk_intern',$internship->periode_masuk_intern) }}" placeholder="Masukkan Periode Masuk Mahasiswa"> 
                        </div>  
                        <label class="col-sm-1 col-form-label">Sampai</label>
                        <div class="col-sm-4">
                            <input type="text" class="form-control @error('periode_keluar_intern') is-invalid @enderror" name="periode_keluar_intern" value="{{ old('periode_keluar_intern',$internship->periode_keluar_intern) }}" placeholder="Masukkan Periode Keluar Mahasiswa">
                        </div>                                     
                    </div>                       
                    <!-- error message untuk periode_masuk_intern -->
                    @error('periode_masuk_intern')
                        <div class="alert alert-danger mt-2">
                            {{ $message }}
                        </div>
                    @enderror
                    <!-- error message untuk periode_keluar_intern -->
                    @error('periode_keluar_intern')
                        <div class="alert alert-danger mt-2">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                
                <div class="form-group">
                    <div class="row mb-3">
                        <label class="col-sm-3 col-form-label">Alamat Instansi</label>
                        <div class="col-sm-9">
                        <input type="text" class="form-control @error('alamat_intern') is-invalid @enderror" name="alamat_intern" value="{{ old('alamat_intern',$internship->alamat_intern) }}"  placeholder="Masukkan Alamat Instansi">
                        </div>  
                    </div>  
                    <!-- error message untuk alamat_intern -->
                    @error('alamat_intern')
                        <div class="alert alert-danger mt-2">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="form-group">
                    <div class="row mb-3">
                        <label class="col-sm-3 col-form-label">Lingkup Pekerjaan</label>
                        <div class="col-sm-9">
                        <select class="selectpicker form-control" data-live-search="true" name="lingkup_intern" value="{{ old('lingkup_intern',$internship->lingkup_intern) }}">
                                <option selected disabled>Pilih Lingkup Pekerjaan</option>
                                <option value="Internasional" {{ $internship->lingkup_intern == 'Internasional' ? 'selected' : '' }}>Internasional</option>
                                <option value="Nasional" {{ $internship->lingkup_intern == 'Nasional' ? 'selected' : '' }}>Nasional</option>
                                <option value="Wirausaha" {{ $internship->lingkup_intern == 'Wirausaha' ? 'selected' : '' }}>Wirausaha</option>
                            </select>
                        </div>  
                    </div>  
                    <!-- error message untuk lingkup_intern -->
                    @error('lingkup_intern')
                        <div class="alert alert-danger mt-2">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="form-group">
                    <div class="row mb-3">
                        <label class="col-sm-3 col-form-label">Bidang Pekerjaan</label>
                        <div class="col-sm-9">
                        <select class="selectpicker form-control" data-live-search="true" name="bidang_intern" value="{{ old('bidang_intern',$internship->bidang_intern) }}">
                                <option selected disabled>Pilih Bidang Pekerjaan</option>
                                <option value="Infokom" {{ $internship->bidang_intern == 'Infokom' ? 'selected' : '' }}>Infokom</option>
                                <option value="Non Infokom" {{ $internship->bidang_intern == 'Non Infokom' ? 'selected' : '' }}>Non Infokom</option>
                            </select>
                        </div>  
                    </div>  
                    <!-- error message untuk bidang_intern -->
                    @error('bidang_intern')
                        <div class="alert alert-danger mt-2">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="form-group">
                    <div class="row mb-3">
                        <label class="col-sm-3 col-form-label">Jenis Instansi</label>
                        <div class="col-sm-9">
                            <select class="selectpicker form-control" data-live-search="true" name="jns_intern" value="{{ old('jns_intern',$internship->jns_intern) }}">
                                <option selected disabled>Pilih Jenis Instansi</option>
                                <option value="Swasta" {{ $internship->jns_intern == 'Swasta' ? 'selected' : '' }}>Swasta</option>
                                <option value="Pemerintah" {{ $internship->jns_intern == 'Pemerintah' ? 'selected' : '' }}>Pemerintah</option>
                                <option value="Publik" {{ $internship->jns_intern == 'Publik' ? 'selected' : '' }}>Publik</option>
                                <option value="Non Profit" {{ $internship->jns_intern == 'Non Profit' ? 'selected' : '' }}>Non Profit</option>
                            </select>
                        </div>  
                    </div>  
                    <!-- error message untuk jns_intern -->
                    @error('jns_intern')
                        <div class="alert alert-danger mt-2">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="form-group">
                    <div class="row mb-3">
                        <label class="col-sm-3 col-form-label">Jabatan Pekerjaan</label>
                        <div class="col-sm-9">
                        <input type="text" class="form-control @error('jabatan_intern') is-invalid @enderror" name="jabatan_intern" value="{{ old('jabatan_intern',$internship->jabatan_intern) }}" placeholder="Masukkan Jabatan Pekerjaan">
                        </div>  
                    </div>  
                    <!-- error message untuk jabatan_intern -->
                    @error('jabatan_intern')
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