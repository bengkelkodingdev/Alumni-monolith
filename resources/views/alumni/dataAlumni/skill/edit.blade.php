@foreach ($skills as $skill)
<!-- Modal -->
<div class="modal fade" id="dialogEditSkill{{ $skill->id }}" tabindex="-1" aria-labelledby="dialogEditSkillLabel{{ $skill->id }}" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
    <div class="modal-content">
        <div class="modal-header">
        <h5 class="modal-title" id="dialogEditSkillLabel{{ $skill->id }}">Edit Pelatihan</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">  
            <div class="container">
            <form action="{{ route('skill.update', $skill->id) }}" method="POST">
                @csrf
                @method('PUT')
                <!-- form fields here -->
                <div class="form-group">
                    <div class="row mb-3">
                    <label class="col-sm-3 col-form-label">Kerjasama Tim</label>
                        <div class="col-sm-9">
                        <select class="selectpicker form-control" data-live-search="true" name="kerjasama_skill" value="{{ old('kerjasama_skill',$skill->kerjasama_skill) }}">
                            <option selected disabled>Pilih Tingkat Kemampuan</option>
                            <option value="Sangat Baik" {{ $skill->kerjasama_skill == 'Sangat Baik' ? 'selected' : '' }}>Sangat Baik</option>
                            <option value="Baik" {{ $skill->kerjasama_skill == 'Baik' ? 'selected' : '' }}>Baik</option>
                            <option value="Cukup" {{ $skill->kerjasama_skill == 'Cukup' ? 'selected' : '' }}>Cukup</option>
                            <option value="Kurang" {{ $skill->kerjasama_skill == 'Kurang' ? 'selected' : '' }}>Kurang</option>
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
                        <select class="selectpicker form-control" data-live-search="true" name="ahli_skill" value="{{ old('ahli_skill',$skill->ahli_skill) }}">
                            <option selected disabled>Pilih Tingkat Kemampuan</option>
                            <option value="Sangat Baik" {{ $skill->ahli_skill == 'Sangat Baik' ? 'selected' : '' }}>Sangat Baik</option>
                            <option value="Baik" {{ $skill->ahli_skill == 'Baik' ? 'selected' : '' }}>Baik</option>
                            <option value="Cukup" {{ $skill->ahli_skill == 'Cukup' ? 'selected' : '' }}>Cukup</option>
                            <option value="Kurang" {{ $skill->ahli_skill == 'Kurang' ? 'selected' : '' }}>Kurang</option>
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
                        <select class="selectpicker form-control" data-live-search="true" name="inggris_skill" value="{{ old('inggris_skill',$skill->inggris_skill) }}">
                            <option selected disabled>Pilih Tingkat Kemampuan</option>
                            <option value="Sangat Baik" {{ $skill->inggris_skill == 'Sangat Baik' ? 'selected' : '' }}>Sangat Baik</option>
                            <option value="Baik" {{ $skill->inggris_skill == 'Baik' ? 'selected' : '' }}>Baik</option>
                            <option value="Cukup" {{ $skill->inggris_skill == 'Cukup' ? 'selected' : '' }}>Cukup</option>
                            <option value="Kurang" {{ $skill->inggris_skill == 'Kurang' ? 'selected' : '' }}>Kurang</option>
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
                    <label class="col-sm-3 col-form-label">Pengembangan Diri</label>
                        <div class="col-sm-9">
                        <select class="selectpicker form-control" data-live-search="true" name="pengembangan_skill" value="{{ old('pengembangan_skill',$skill->pengembangan_skill) }}">
                            <option selected disabled>Pilih Tingkat Kemampuan</option>
                            <option value="Sangat Baik" {{ $skill->pengembangan_skill == 'Sangat Baik' ? 'selected' : '' }}>Sangat Baik</option>
                            <option value="Baik" {{ $skill->pengembangan_skill == 'Baik' ? 'selected' : '' }}>Baik</option>
                            <option value="Cukup" {{ $skill->pengembangan_skill == 'Cukup' ? 'selected' : '' }}>Cukup</option>
                            <option value="Kurang" {{ $skill->pengembangan_skill == 'Kurang' ? 'selected' : '' }}>Kurang</option>
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
                    <label class="col-sm-3 col-form-label">Kemampuan Berkomunikasi</label>
                        <div class="col-sm-9">
                        <select class="selectpicker form-control" data-live-search="true" name="komunikasi_skill" value="{{ old('komunikasi_skill',$skill->komunikasi_skill) }}">
                            <option selected disabled>Pilih Tingkat Kemampuan</option>
                            <option value="Sangat Baik" {{ $skill->komunikasi_skill == 'Sangat Baik' ? 'selected' : '' }}>Sangat Baik</option>
                            <option value="Baik" {{ $skill->komunikasi_skill == 'Baik' ? 'selected' : '' }}>Baik</option>
                            <option value="Cukup" {{ $skill->komunikasi_skill == 'Cukup' ? 'selected' : '' }}>Cukup</option>
                            <option value="Kurang" {{ $skill->komunikasi_skill == 'Kurang' ? 'selected' : '' }}>Kurang</option>
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
                    <label class="col-sm-3 col-form-label">Kepemimpinan</label>
                        <div class="col-sm-9">
                        <select class="selectpicker form-control" data-live-search="true" name="kepemimpinan_skill" value="{{ old('kepemimpinan_skill',$skill->kepemimpinan_skill) }}">
                            <option selected disabled>Pilih Tingkat Kemampuan</option>
                            <option value="Sangat Baik" {{ $skill->kepemimpinan_skill == 'Sangat Baik' ? 'selected' : '' }}>Sangat Baik</option>
                            <option value="Baik" {{ $skill->kepemimpinan_skill == 'Baik' ? 'selected' : '' }}>Baik</option>
                            <option value="Cukup" {{ $skill->kepemimpinan_skill == 'Cukup' ? 'selected' : '' }}>Cukup</option>
                            <option value="Kurang" {{ $skill->kepemimpinan_skill == 'Kurang' ? 'selected' : '' }}>Kurang</option>
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
                        <select class="selectpicker form-control" data-live-search="true" name="etoskerja_skill" value="{{ old('etoskerja_skill',$skill->etoskerja_skill) }}">
                            <option selected disabled>Pilih Tingkat Kemampuan</option>
                            <option value="Sangat Baik" {{ $skill->etoskerja_skill == 'Sangat Baik' ? 'selected' : '' }}>Sangat Baik</option>
                            <option value="Baik" {{ $skill->etoskerja_skill == 'Baik' ? 'selected' : '' }}>Baik</option>
                            <option value="Cukup" {{ $skill->etoskerja_skill == 'Cukup' ? 'selected' : '' }}>Cukup</option>
                            <option value="Kurang" {{ $skill->etoskerja_skill == 'Kurang' ? 'selected' : '' }}>Kurang</option>
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