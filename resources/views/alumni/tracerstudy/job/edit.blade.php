@foreach ($jobs as $job)
<!-- Modal -->
<div class="modal fade" id="dialogEditJob{{ $job->id }}" tabindex="-1" aria-labelledby="dialogEditJobLabel{{ $job->id }}" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
    <div class="modal-content">
        <div class="modal-header">
        <h5 class="modal-title" id="dialogEditJobLabel{{ $job->id }}">Edit Pekerjaan</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">  
            <div class="container">
            <form action="{{ route('job.update', $job->id) }}" method="POST">
                @csrf
                @method('PUT')
                <!-- form fields here -->
                <div class="form-group">
                    <div class="row mb-3">
                        <label class="col-sm-3 col-form-label">Nama Instansi</label>
                        <div class="col-sm-9"> 
                            <input type="text" class="form-control @error('nama_job') is-invalid @enderror" name="nama_job" value="{{ old('nama_job',$job->nama_job) }}" placeholder="Masukkan Nama Instansi">       
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
                            <input type="text" class="form-control @error('periode_masuk_job') is-invalid @enderror" name="periode_masuk_job" value="{{ old('periode_masuk_job',$job->periode_masuk_job) }}" placeholder="Masukkan Periode Masuk Pekerjaan"> 
                        </div>  
                        <label class="col-sm-1 col-form-label">Sampai</label>
                        <div class="col-sm-4">
                            <input type="text" class="form-control @error('periode_keluar_job') is-invalid @enderror" name="periode_keluar_job" value="{{ old('periode_keluar_job',$job->periode_keluar_job) }}" placeholder="Masukkan Periode Keluar Pekerjaan">
                        </div>                                     
                    </div>                       
                    <!-- error message untuk periode_masuk_job -->
                    @error('periode_masuk_job')
                        <div class="alert alert-danger mt-2">
                            {{ $message }}
                        </div>
                    @enderror
                    <!-- error message untuk periode_keluar_job -->
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
                            <input type="text" class="form-control @error('alamat_job') is-invalid @enderror" name="alamat_job" value="{{ old('alamat_job',$job->alamat_job) }}"  placeholder="Masukkan Alamat Instansi"> 
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
                        <select class="selectpicker form-control" data-live-search="true" name="lingkup_job" value="{{ old('lingkup_job',$job->lingkup_job) }}">
                                <option selected disabled>Pilih Tingkat Pekerjaan</option>
                                <option value="Lokal/Wilayah Tidak Berbadan Hukum" {{ $job->lingkup_job == 'Lokal/Wilayah Tidak Berbadan Hukum' ? 'selected' : '' }}>Lokal/Wilayah Tidak Berbadan Hukum</option>
                                <option value="Lokal/Wilayah Berbadan Hukum" {{ $job->lingkup_job == 'Lokal/Wilayah Berbadan Hukum' ? 'selected' : '' }}>Lokal/Wilayah Berbadan Hukum</option>
                                <option value="Nasional" {{ $job->lingkup_job == 'Nasional' ? 'selected' : '' }}>Nasional</option>
                                <option value="Multinasional" {{ $job->lingkup_job == 'Multinasional' ? 'selected' : '' }}>Multinasional</option>
                                <option value="Internasional" {{ $job->lingkup_job == 'Internasional' ? 'selected' : '' }}>Internasional</option>
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
                        <select class="selectpicker form-control" data-live-search="true" name="bidang_job" value="{{ old('bidang_job',$job->bidang_job) }}">
                                <option selected disabled>Pilih Bidang Pekerjaan</option>
                                <option value="Infokom" {{ $job->bidang_job == 'Infokom' ? 'selected' : '' }}>Infokom</option>
                                <option value="Non Infokom" {{ $job->bidang_job == 'Non Infokom' ? 'selected' : '' }}>Non Infokom</option>
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
                        <label class="col-sm-3 col-form-label">Kategori Perusahaan</label>
                        <div class="col-sm-9">    
                            <select class="selectpicker form-control" data-live-search="true" name="jns_job" value="{{ old('jns_job',$job->jns_job) }}">
                                <option selected disabled>Pilih Kategori Perusahaan Tempat Anda Bekerja</option>
                                <option value="Perusahaan Swasta" {{ $job->jns_job == 'Perusahaan Swasta' ? 'selected' : '' }}>Perusahaan Swasta</option>
                                <option value="Perusahaan Nirlaba" {{ $job->jns_job == 'Perusahaan Nirlaba' ? 'selected' : '' }}>Perusahaan Nirlaba</option>
                                <option value="Lembaga Pemerintah" {{ $job->jns_job == 'Lembaga Pemerintah' ? 'selected' : '' }}>Lembaga Pemerintah</option>
                                <option value="BUMN/BUMD" {{ $job->jns_job == 'BUMN/BUMD' ? 'selected' : '' }}>BUMN/BUMD</option>
                                <option value="Non Profit" {{ $job->jns_job == 'Non Profit' ? 'selected' : '' }}>Non Profit</option>
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
                            <select class="selectpicker form-control" data-live-search="true" name="jns_job" value="{{ old('jabatan_job',$job->jabatan_job) }}">
                                <option selected disabled>Pilih Kategori Perusahaan Tempat Anda Bekerja</option>
                                <option value="Founder" {{ $job->jns_job == 'Founder' ? 'selected' : '' }}>Founder</option>
                                <option value="Co-Founder" {{ $job->jns_job == 'Co-Founder' ? 'selected' : '' }}>Co-Founder</option>
                                <option value="Staff" {{ $job->jns_job == 'Staff' ? 'selected' : '' }}>Staff</option>
                                <option value="Freelance" {{ $job->jns_job == 'Freelance' ? 'selected' : '' }}>Freelance</option>
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