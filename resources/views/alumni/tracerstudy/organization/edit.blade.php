@foreach ($organizations as $organization)
<!-- Modal -->
<div class="modal fade" id="dialogEditOrganization{{ $organization->id }}" tabindex="-1" aria-labelledby="dialogEditOrganizationLabel{{ $organization->id }}" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
    <div class="modal-content">
        <div class="modal-header">
        <h5 class="modal-title" id="dialogEditOrganizationLabel{{ $organization->id }}">Edit Pelatihan</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">  
            <div class="container">
            <form action="{{ route('organization.update', $organization->id) }}" method="POST">
                @csrf
                @method('PUT')
                <!-- form fields here -->
                <div class="form-group">
                    <div class="row mb-3">
                        <label class="col-sm-3 col-form-label">Nama Organisasi</label>
                        <div class="col-sm-9">     
                            <input type="text" class="form-control @error('nama_org') is-invalid @enderror" name="nama_org" value="{{ old('nama_org',$organization->nama_org) }}" placeholder="Masukkan Nama Instansi">   
                        </div>  
                    </div> 
                    <!-- error message untuk nim -->
                    @error('nama_org')
                        <div class="alert alert-danger mt-2">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="form-group">
                    <div class="row mb-3">
                        <label class="col-sm-3 col-form-label">Periode Organisasi</label>
                        <div class="col-sm-9">  
                            <input type="text" class="form-control @error('periode_org') is-invalid @enderror" name="periode_org" value="{{ old('periode_org',$organization->periode_org) }}" placeholder="Masukkan Tahun Periode Organisasi">      
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
                            <input type="text" class="form-control @error('link_org') is-invalid @enderror" name="link_org" value="{{ old('link_org',$organization->link_org) }}" placeholder="Masukkan Tautan/website Instansi">
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
                            <select class="selectpicker form-control" data-live-search="true" name="tingkat_org" value="{{ old('tingkat_org',$organization->tingkat_org) }}">
                                <option selected disabled>Pilih Tingkat Award</option>
                                <option value="Lokal" {{ $organization->tingkat_org == 'Lokal' ? 'selected' : '' }}>Lokal</option>
                                <option value="Nasional" {{ $organization->tingkat_org == 'Nasional' ? 'selected' : '' }}>Nasional</option>
                                <option value="Internasional" {{ $organization->tingkat_org == 'Internasional' ? 'selected' : '' }}>Internasional</option>
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
                            <select class="selectpicker form-control" data-live-search="true" name="jns_org" value="{{ old('jns_org',$organization->jns_org) }}">
                                <option selected disabled>Pilih Tingkat Award</option>
                                <option value="Ormawa" {{ $organization->jns_org == 'Ormawa' ? 'selected' : '' }}>Ormawa (Organisasi Mahasiswa)</option>
                                <option value="UKM" {{ $organization->jns_org == 'UKM' ? 'selected' : '' }}>UKM (Unit Kegiatan Mahasiswa)</option>
                                <option value="LSM" {{ $organization->jns_org == 'LSM' ? 'selected' : '' }}>LSM (Lembaga Swadaya Masyarakat)</option>
                                <option value="partai Politik" {{ $organization->jns_org == 'partai Politik' ? 'selected' : '' }}>partai Politik</option>
                                <option value="Ormas" {{ $organization->jns_org == 'Ormas' ? 'selected' : '' }}>Ormas (Organisasi Masyarakat)</option>
                                <option value="Profesi" {{ $organization->jns_org == 'Profesi' ? 'selected' : '' }}>Profesi</option>
                                <option value="Lainnya" {{ $organization->jns_org == 'Lainnya' ? 'selected' : '' }}>Lainnya</option>
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
                        <label class="col-sm-3 col-form-label">Jabatan</label>
                        <div class="col-sm-9">        
                            <input type="text" class="form-control @error('jabatan_org') is-invalid @enderror" name="jabatan_org" value="{{ old('jabatan_org',$organization->jabatan_org) }}" placeholder="Masukkan Jabatan Organisasi">
                        </div>  
                    </div> 
                    <!-- error message untuk jabatan_org -->
                    @error('jabatan_org')
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