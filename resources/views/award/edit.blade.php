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
                    <b><h1 class="text-left mb-4" style="color: #F68955;">Form Award</h1></b>
                        <div class="form">
                            <form action="{{ route('award.update', $award->id) }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                @method('PUT')

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