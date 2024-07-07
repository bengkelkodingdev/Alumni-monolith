@foreach ($awards as $award)
<!-- Modal -->
<div class="modal fade" id="dialogEditAward{{ $award->id }}" tabindex="-1" aria-labelledby="dialogEditAwardLabel{{ $award->id }}" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
    <div class="modal-content">
        <div class="modal-header">
        <h5 class="modal-title" id="dialogEditAwardLabel{{ $award->id }}">Edit Pelatihan</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">  
            <div class="container">
            <form action="{{ route('award.update', $award->id) }}" method="POST">
                @csrf
                @method('PUT')
                <!-- form fields here -->
                <div class="form-group">
                    <div class="row mb-3">
                        <label for="nama_award" class="col-sm-3 col-form-label">Nama Award</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control @error('nama_award') is-invalid @enderror" name="nama_award" value="{{ old('nama_award',$award->nama_award) }}"placeholder="Masukkan Nama Award">    
                        </div>   
                    </div >                
                
                    <!-- error message untuk nama_award -->
                    @error('nama_award')
                        <div class="alert alert-danger mt-2">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="form-group">
                    <div class="row mb-3">
                        <label class="col-sm-3 col-form-label">Nama Institusi</label>                   
                        <div class="col-sm-9">
                        <input type="text" class="form-control @error('institusi_award') is-invalid @enderror" name="institusi_award" value="{{ old('institusi_award',$award->institusi_award) }}"placeholder="Masukkan Nama Institusi Award">
                        </div>  
                    </div> 

                    <!-- error message untuk institusi_award -->
                    @error('institusi_award')
                        <div class="alert alert-danger mt-2">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                
                <div class="form-group">
                    <div class="row mb-3">
                    <label class="col-sm-3 col-form-label">Tingkat Award</label>
                        <div class="col-sm-9">
                        <select class="selectpicker form-control" data-live-search="true" name="tingkat_award" value="{{ old('tingkat_award',$award->tingkat_award) }}">
                            <option selected disabled>Pilih Tingkat Award</option>
                            <option value="Lokal" {{ $award->tingkat_award == 'Lokal' ? 'selected' : '' }}>Lokal</option>
                            <option value="Nasional" {{ $award->tingkat_award == 'Nasional' ? 'selected' : '' }}>Nasional</option>
                            <option value="Internasional" {{ $award->tingkat_award == 'Internasional' ? 'selected' : '' }}>Internasional</option>
                        </select>
                        </div>  
                    </div>  
                    <!-- error message untuk tingkat_award -->
                    @error('tingkat_award')
                        <div class="alert alert-danger mt-2">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="form-group">
                    <div class="row mb-3">
                    <label class="col-sm-3 col-form-label">Tahun Award (YYYY)</label>
                        <div class="col-sm-9">
                        <input type="text" class="form-control @error('tahun_award') is-invalid @enderror" name="tahun_award" value="{{ old('tahun_award',$award->tahun_award) }}" placeholder="Masukkan Tahun Award" pattern="[0-9]{4}" >
                        </div>  
                    </div>  
                    <!-- error message untuk tahun_award -->
                    @error('tahun_award')
                        <div class="alert alert-danger mt-2">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="form-group">
                    <div class="row mb-3">
                        <label class="col-sm-3 col-form-label">Deskripsi Award</label>
                        <div class="col-sm-9">
                        <input type="text" class="form-control @error('deskripsi_award') is-invalid @enderror" name="deskripsi_award" value="{{ old('deskripsi_award',$award->deskripsi_award) }}"placeholder="Masukkan Jabatan Pekerjaan">
                        </div>  
                    </div>  
                    <!-- error message untuk deskripsi_award -->
                    @error('deskripsi_award')
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