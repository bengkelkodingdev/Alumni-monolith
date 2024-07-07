<div class="modal fade" id="dialogTambahSkill" tabindex="-1" aria-labelledby="dialogTambahSkillLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="dialogTambahSkillLabel">Tambah Pelatihan</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="container">
                <form action="{{ route('skill.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <div class="row mb-3">
                            <label class="col-sm-3 col-form-label">Kerjasama Tim</label>
                            <div class="col-sm-9">
                                <select class="selectpicker form-control" data-live-search="true" name="kerjasama_skill" value="{{ old('kerjasama_skill') }}" >
                                    <option selected disabled>Pilih Tingkat Kemampuan</option>
                                    <option value="Sangat Baik">Sangat Baik</option>
                                    <option value="Baik">Baik</option>
                                    <option value="Cukup">Cukup</option>
                                    <option value="Kurang">Kurang</option>
                                </select>  
                            </div>  
                        </div>  
                        <!-- error message untuk kerjasama_skill -->
                        @error('kerjasama_skill')
                            <div class="alert alert-danger mt-2">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>                               

                    <div class="form-group">
                        <div class="row mb-3">
                            <label class="col-sm-3 col-form-label">Keahlian di Bidang IT</label>
                            <div class="col-sm-9">
                                <select class="selectpicker form-control" data-live-search="true" name="ahli_skill" value="{{ old('ahli_skill') }}" >
                                    <option selected disabled>Pilih Tingkat Kemampuan</option>
                                    <option value="Sangat Baik">Sangat Baik</option>
                                    <option value="Baik">Baik</option>
                                    <option value="Cukup">Cukup</option>
                                    <option value="Kurang">Kurang</option>
                                </select>  
                            </div>  
                        </div>  
                        <!-- error message untuk ahli_skill -->
                        @error('ahli_skill')
                            <div class="alert alert-danger mt-2">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <div class="row mb-3">
                            <label class="col-sm-3 col-form-label">Kemampuan Berbahasa Inggris</label>
                            <div class="col-sm-9">
                                <select class="selectpicker form-control" data-live-search="true" name="inggris_skill" value="{{ old('inggris_skill') }}" >
                                    <option selected disabled>Pilih Tingkat Kemampuan</option>
                                    <option value="Sangat Baik">Sangat Baik</option>
                                    <option value="Baik">Baik</option>
                                    <option value="Cukup">Cukup</option>
                                    <option value="Kurang">Kurang</option>
                                </select>  
                            </div>  
                        </div>  
                        <!-- error message untuk inggris_skill -->
                        @error('inggris_skill')
                            <div class="alert alert-danger mt-2">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <div class="row mb-3">
                            <label class="col-sm-3 col-form-label">Kemampuan Berkomunikasi</label>
                            <div class="col-sm-9">
                                <select class="selectpicker form-control" data-live-search="true" name="komunikasi_skill" value="{{ old('komunikasi_skill') }}" >
                                    <option selected disabled>Pilih Tingkat Kemampuan</option>
                                    <option value="Sangat Baik">Sangat Baik</option>
                                    <option value="Baik">Baik</option>
                                    <option value="Cukup">Cukup</option>
                                    <option value="Kurang">Kurang</option>
                                </select>  
                            </div>  
                        </div>  
                        <!-- error message untuk komunikasi_skill -->
                        @error('komunikasi_skill')
                            <div class="alert alert-danger mt-2">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <div class="row mb-3">
                            <label class="col-sm-3 col-form-label">Pengembangan Diri</label>
                            <div class="col-sm-9">
                                <select class="selectpicker form-control" data-live-search="true" name="pengembangan_skill" value="{{ old('pengembangan_skill') }}" >
                                    <option selected disabled>Pilih Tingkat Kemampuan</option>
                                    <option value="Sangat Baik">Sangat Baik</option>
                                    <option value="Baik">Baik</option>
                                    <option value="Cukup">Cukup</option>
                                    <option value="Kurang">Kurang</option>
                                </select>  
                            </div>  
                        </div>  
                        <!-- error message untuk pengembangan_skill -->
                        @error('pengembangan_skill')
                            <div class="alert alert-danger mt-2">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <div class="row mb-3">
                            <label class="col-sm-3 col-form-label">Kepemimpinan</label>
                            <div class="col-sm-9">
                                <select class="selectpicker form-control" data-live-search="true" name="kepemimpinan_skill" value="{{ old('kepemimpinan_skill') }}" >
                                    <option selected disabled>Pilih Tingkat Kemampuan</option>
                                    <option value="Sangat Baik">Sangat Baik</option>
                                    <option value="Baik">Baik</option>
                                    <option value="Cukup">Cukup</option>
                                    <option value="Kurang">Kurang</option>
                                </select>  
                            </div>  
                        </div>  
                        <!-- error message untuk kepemimpinan_skill -->
                        @error('kepemimpinan_skill')
                            <div class="alert alert-danger mt-2">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <div class="row mb-3">
                            <label class="col-sm-3 col-form-label">Etos Kerja</label>
                            <div class="col-sm-9">
                                <select class="selectpicker form-control" data-live-search="true" name="etoskerja_skill" value="{{ old('etoskerja_skill') }}" >
                                    <option selected disabled>Pilih Tingkat Kemampuan</option>
                                    <option value="Sangat Baik">Sangat Baik</option>
                                    <option value="Baik">Baik</option>
                                    <option value="Cukup">Cukup</option>
                                    <option value="Kurang">Kurang</option>
                                </select>  
                            </div>  
                        </div>  
                        <!-- error message untuk etoskerja_skill -->
                        @error('etoskerja_skill')
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