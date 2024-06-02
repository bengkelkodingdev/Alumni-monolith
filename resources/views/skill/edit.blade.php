<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>TracerStudy</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            background-color: #EFF7FF;
            color: #000000;
        }
        .btn-custom {
            background-color: #0853A6;
            border: none;
            color: #FFFFFF;
        }
        .btn-custom:hover {
            background-color: #074b93;
        }
        .btn-warning-custom {
            background-color: #F68955;
            border: none;
            color: #FFFFFF;
        }
        .btn-warning-custom:hover {
            background-color: #e67842;
        }
        .card {
            border: #074b93;
            border-radius: 10px;
        }
        .form{
            border: 2px solid #FFDFD0;
            padding: 15px;
            margin-top: 10px;
            border-radius: 10px;
        }
        .form-group label {
            font-weight: bold;
            color: #0853A6;
        }
        .form-control {
            border-radius: 5px;
            border-color: #0853A6;
        }
        .form-control:focus {
            border-color: #F68955;
            box-shadow: none;
        }
        .container {
            padding-top: 50px;
        }
    </style>
</head>
<body>
    <div class="container mt-5 mb-5">
        <div class="row">
            <div class="col-md-12">
                <div class="card border-0 shadow-sm rounded">
                    <div class="card-body">
                    <b><h1 class="text-left mb-4" style="color: #F68955;">Form Skill</h1></b>
                        <div class="form">
                            <form action="{{ route('skill.update', $skill->id) }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                @method('PUT')

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
                                    <button type="reset" class="btn btn-md btn-warning-custom mr-2">RESET</button>
                                    <button type="submit" class="btn btn-md btn-custom">UPDATE</button>
                                </div>
                            </form> 
                        </div>                        
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script src="https://cdn.ckeditor.com/4.13.1/standard/ckeditor.js"></script>
<script>
    CKEDITOR.replace( 'content' );
</script>
</body>
</html>