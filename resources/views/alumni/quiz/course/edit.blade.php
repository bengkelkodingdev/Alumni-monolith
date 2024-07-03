@foreach ($courses as $course)
<!-- Modal -->
<div class="modal fade" id="dialogEditCourse{{ $course->id }}" tabindex="-1" aria-labelledby="dialogEditCourseLabel{{ $course->id }}" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
    <div class="modal-content">
        <div class="modal-header">
        <h5 class="modal-title" id="dialogEditCourseLabel{{ $course->id }}">Edit Pelatihan</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">  
            <div class="container">
            <form action="{{ route('course.update', $course->id) }}" method="POST">
                @csrf
                @method('PUT')
                <!-- form fields here -->
                <div class="form-group">
                    <div class="row mb-3">
                        <label class="col-sm-3 col-form-label">Nama Pelatihan</label>
                        <div class="col-sm-9">   
                            <input type="text" class="form-control @error('nama_course') is-invalid @enderror" name="nama_course" id="nama_course" value="{{ old('nama_course',$course->nama_course) }}"placeholder="Masukkan Nama Course">     
                        </div>  
                    </div>  
                    <!-- error message untuk nama_course -->
                    @error('nama_course')
                        <div class="alert alert-danger mt-2">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="form-group">
                    <div class="row mb-3">
                        <label class="col-sm-3 col-form-label">Nama Institusi</label>
                        <div class="col-sm-9">  
                            <input type="text" class="form-control @error('institusi_course') is-invalid @enderror" name="institusi_course" value="{{ old('institusi_course',$course->institusi_course) }}"placeholder="Masukkan Nama Institusi Course">      
                        </div>  
                    </div>  
                    <!-- error message untuk institusi_course -->
                    @error('institusi_course')
                        <div class="alert alert-danger mt-2">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                
                <div class="form-group">
                    <div class="row mb-3">
                        <label class="col-sm-3 col-form-label">Tingkat Pelatihan</label>
                        <div class="col-sm-9">   
                            <select class="selectpicker form-control" data-live-search="true" name="tingkat_course" value="{{ old('tingkat_course',$course->tingkat_course) }}">
                                <option selected disabled>Pilih Tingkat Pelatihan</option>
                                <option value="Lokal" {{ $course->tingkat_course == 'Lokal' ? 'selected' : '' }}>Lokal</option>
                                <option value="Nasional" {{ $course->tingkat_course == 'Nasional' ? 'selected' : '' }}>Nasional</option>
                                <option value="Internasional" {{ $course->tingkat_course == 'Internasional' ? 'selected' : '' }}>Internasional</option>
                            </select>    
                        </div>  
                    </div>  
                    <!-- error message untuk tingkat_course -->
                    @error('tingkat_course')
                        <div class="alert alert-danger mt-2">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="form-group">
                    <div class="row mb-3">
                        <label class="col-sm-3 col-form-label">Tahun Pelatihan</label>
                        <div class="col-sm-9"> 
                        <input type="text" class="form-control @error('tahun_course') is-invalid @enderror" name="tahun_course" value="{{ old('tahun_course',$course->tahun_course) }}"placeholder="Masukkan Tahun Course" pattern="[0-9]{4}">       
                        </div>  
                    </div>  
                    <!-- error message untuk tahun_course -->
                    @error('tahun_course')
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