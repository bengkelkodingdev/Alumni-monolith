<div class="modal fade" id="dialogTambahOrganization" tabindex="-1" aria-labelledby="dialogTambahOrganizationLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="dialogTambahOrganizationLabel">Tambah Pelatihan</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="container">
                <form action="{{ route('organization.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <div class="row mb-3">
                            <label class="col-sm-3 col-form-label">Nama Organisasi</label>
                            <div class="col-sm-9">  
                            <input type="text" class="form-control @error('nama_org') is-invalid @enderror" name="nama_org" value="{{ old('nama_org') }}" placeholder="Masukkan Nama Instansi">      
                            </div>  
                        </div>  
                        <!-- error message untuk nama_org -->
                        @error('nama_org')
                            <div class="alert alert-danger mt-2">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <div class="row mb-3">
                            <label class="col-sm-3 col-form-label">Periode (YYYY/YYYY)</label>
                            <div class="col-sm-9">        
                                <input type="text" class="form-control @error('periode_org') is-invalid @enderror" name="periode_org" value="{{ old('periode_org') }}" placeholder="Masukkan Tahun Periode Organisasi ">
                            </div>  
                        </div>  
                        <!-- error message untuk periode_org -->
                        @error('periode_org')
                            <div class="alert alert-danger mt-2">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    
                    <div class="form-group">
                        <div class="row mb-3">
                            <label class="col-sm-3 col-form-label">Tautan/Website</label>
                            <div class="col-sm-9">        
                            <input type="link" class="form-control @error('link_org') is-invalid @enderror" name="link_org" value="{{ old('link_org') }}" placeholder="Masukkan Tautan/Website Organisasi">
                            </div>  
                        </div>  
                        <!-- error message untuk link_org -->
                        @error('link_org')
                            <div class="alert alert-danger mt-2">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <div class="row mb-3">
                            <label class="col-sm-3 col-form-label">Tingkat Organisasi</label>
                            <div class="col-sm-9">  
                                <select class="selectpicker form-control" data-live-search="true" name="tingkat_org" value="{{ old('tingkat_org') }}" >
                                    <option selected disabled>Pilih Tingkat Organisasi</option>
                                    <option value="Lokal">Lokal</option>
                                    <option value="Nasional">Nasional</option>
                                    <option value="Internasional">Internasional</option>
                                </select>          
                            </div>  
                        </div>                                  
                        <!-- error message untuk tingkat_org -->
                        @error('tingkat_org')
                            <div class="alert alert-danger mt-2">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <div class="row mb-3">
                            <label class="col-sm-3 col-form-label">Jenis Organisasi</label>
                            <div class="col-sm-9">   
                                <select class="selectpicker form-control" data-live-search="true" name="jns_org" value="{{ old('jns_org') }}" >
                                    <option selected disabled>Pilih Jenis Organisasi</option>
                                    <option value="Ormawa">Ormawa (Organisasi Mahasiswa)</option>
                                    <option value="UKM">UKM (Unit Kegiatan Mahasiswa)</option>
                                    <option value="LSM">LSM (Lembaga Swadaya Masyarakat)</option>
                                    <option value="partai Politik">partai Politik</option>
                                    <option value="Ormas">Ormas (Organisasi Masyarakat)</option>
                                    <option value="Profesi">Profesi</option>
                                    <option value="Lainnya">Lainnya</option>
                                </select>        
                            </div>  
                        </div>  
                        <!-- error message untuk jns_org -->
                        @error('jns_org')
                            <div class="alert alert-danger mt-2">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <div class="row mb-3">
                            <label class="col-sm-3 col-form-label">Jabatan Organisasi</label>
                            <div class="col-sm-9">        
                                <input type="text" class="form-control @error('jabatan_org') is-invalid @enderror" name="jabatan_org" value="{{ old('jabatan_org') }}" placeholder="Masukkan Jabatan Pekerjaan">
                            </div>  
                        </div>  
                        <!-- error message untuk jabatan_org -->
                        @error('jabatan_org')
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