<div class="modal fade" id="dialogTambahAward" tabindex="-1" aria-labelledby="dialogTambahAwardLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="dialogTambahAwardLabel">Tambah Pelatihan</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="container">
                <form action="{{ route('award.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group ">
                        <div class="row mb-3">
                            <label class="col-sm-3 col-form-label">Nama Award</label>
                            <div class="col-sm-9">
                            <input type="text" class="form-control @error('nama_award') is-invalid @enderror" name="nama_award" value="{{ old('nama_award') }}" placeholder="Masukkan Nama Award">
                            </div>  
                        </div>
                        <!-- error message untuk nama_award -->
                        @error('nama_award')
                            <div class="alert alert-danger mt-2">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <div class="row mb-3">
                        <label class="col-sm-3 col-form-label">Nama Institusi Award</label>
                            <div class="col-sm-9">
                            <input type="text" class="form-control @error('institusi_award') is-invalid @enderror" name="institusi_award" value="{{ old('institusi_award') }}" placeholder="Masukkan Nama Institusi Pemberi Award ">
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
                                <select class="selectpicker form-control" data-live-search="true" name="tingkat_award" value="{{ old('tingkat_award') }}" >
                                    <option selected disabled>Pilih Tingkat Award</option>
                                    <option value="Lokal">Lokal</option>
                                    <option value="Nasional">Nasional</option>
                                    <option value="Internasional">Internasional</option>
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
                            <input type="text" class="form-control @error('tahun_award') is-invalid @enderror" name="tahun_award" value="{{ old('tahun_award') }}" placeholder="Masukkan Tingkat Award" pattern="[0-9]{4}" >
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
                            <label  class="col-sm-3 col-form-label">Deskripsi Award</label>
                            <div class="col-sm-9">
                                <textarea class="form-control @error('deskripsi_award') is-invalid @enderror" name="deskripsi_award" id="deskripsi_award" rows="5" placeholder="Masukkan Deskripsi Award">{{ old('deskripsi_award') }}</textarea>
                            </div>  
                        </div>  
                        <!-- error message untuk deskripsi_award -->
                        @error('deskripsi_award')
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