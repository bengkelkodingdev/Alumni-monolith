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
                        <label class="col-sm-3 col-form-label"><br>(ex : Januari 2000)</label>
                        <div class="col-sm-4">
                            <input type="text" class="form-control @error('periode_masuk_job') is-invalid @enderror" name="periode_masuk_job" value="{{ old('periode_masuk_job',$job->periode_masuk_job) }}" > 
                        </div>  
                        <label class="col-sm-2 col-form-label">Sampai</label>
                        <div class="col-sm-3">
                            <input type="text" class="form-control @error('periode_keluar_job') is-invalid @enderror" name="periode_keluar_job" value="{{ old('periode_keluar_job',$job->periode_keluar_job) }}">
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
                        <label class="col-sm-3 col-form-label">Jabatan Pekerjaan</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control @error('jabatan_job') is-invalid @enderror" name="jabatan_job" value="{{ old('jabatan_job',$job->jabatan_job) }}">
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
                        <label for="kota" class="col-sm-3 col-form-label">Kota</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control @error('kota') is-invalid @enderror" name="kota" value="{{ old('kota', $job->kota) }}"  id="kota">
                        </div>
                    </div>   
                    <!-- error message untuk nim -->                            
                    @error('kota')
                        <div class="alert alert-danger mt-2">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="form-group">
                    <div class="row mb-3">
                        <label for="negara" class="col-sm-3 col-form-label">Negara</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control @error('negara') is-invalid @enderror" name="negara" value="{{ old('negara', $job->negara) }}"  id="negara">
                        </div>
                    </div>   
                    <!-- error message untuk nim -->                            
                    @error('negara')
                        <div class="alert alert-danger mt-2">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="form-group">
                    <div class="row mb-3">
                        <label for="negara" class="col-sm-3 col-form-label">Catatan</label>
                        <div class="col-sm-9">
                            <textarea class="form-control @error('catatan') is-invalid @enderror" name="catatan" id="catatan" rows="5">{{ old('catatan', $job->catatan) }}</textarea>
                        </div>
                    </div>   
                    <!-- error message untuk nim -->                            
                    @error('catatan')
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