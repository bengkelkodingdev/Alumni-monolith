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
                        <b><h1 class="text-left mb-4" style="color: #F68955;">Form Internship</h1></b>
                        <div class="form">
                            <form action="{{ route('internship.store') }}" method="POST" enctype="multipart/form-data">
                                
                                @csrf

                                <div class="form-group">
                                    <div class="row mb-3">
                                        <label class="col-sm-3 col-form-label">Nama Instansi</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control @error('nama_intern') is-invalid @enderror" name="nama_intern" value="{{ old('nama_intern') }}" placeholder="Masukkan Nama Instansi">                                            
                                        </div>  
                                    </div>                                
                                    <!-- error message untuk nama_intern -->
                                    @error('nama_intern')
                                        <div class="alert alert-danger mt-2">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <div class="row mb-3">
                                        <label class="col-sm-3 col-form-label">Periode (MM/YYYY)</label>
                                        <div class="col-sm-4">
                                            <input type="text" class="form-control @error('periode_masuk_intern') is-invalid @enderror" name="periode_masuk_intern" value="{{ old('periode_masuk_intern') }}" placeholder="Masukkan Bulan dan Tahun Periode Masuk Mahasiswa"> 
                                        </div>  
                                        <label class="col-sm-1 col-form-label">Sampai</label>
                                        <div class="col-sm-4">
                                            <input type="text" class="form-control @error('periode_keluar_intern') is-invalid @enderror" name="periode_keluar_intern" value="{{ old('periode_keluar_intern') }}" placeholder="Masukkan Bulan dan Tahun Periode Keluar Mahasiswa">
                                        </div>                                     
                                    </div>                       
                                    <!-- error message untuk periode_masuk_intern -->
                                    @error('periode_masuk_intern')
                                        <div class="alert alert-danger mt-2">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                    <!-- error message untuk periode_keluar_intern -->
                                    @error('periode_keluar_intern')
                                        <div class="alert alert-danger mt-2">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                
                                <div class="form-group">
                                    <div class="row mb-3">
                                        <label class="col-sm-3 col-form-label">Alamat Instansi</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control @error('alamat_intern') is-invalid @enderror" name="alamat_intern" value="{{ old('alamat_intern') }}" placeholder="Masukkan Alamat Instansi">
                                        </div>  
                                    </div>  
                                    <!-- error message untuk alamat_intern -->
                                    @error('alamat_intern')
                                        <div class="alert alert-danger mt-2">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <div class="row mb-3">
                                        <label class="col-sm-3 col-form-label">Lingkup Pekerjaan</label>
                                        <div class="col-sm-9">
                                        <select class="selectpicker form-control" data-live-search="true" name="lingkup_intern" value="{{ old('lingkup_intern') }}">
                                            <option selected disabled>Pilih Lingkup Pekerjaan</option>
                                            <option value="Internasional">Internasional</option>
                                            <option value="Nasional">Nasional</option>
                                            <option value="Wirausaha">Wirausaha</option>
                                        </select>    
                                    </div>  
                                    </div>  
                                    <!-- error message untuk lingkup_intern -->
                                    @error('lingkup_intern')
                                        <div class="alert alert-danger mt-2">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <div class="row mb-3">
                                        <label class="col-sm-3 col-form-label">Bidang Pekerjaan</label>
                                        <div class="col-sm-9">
                                        <select class="selectpicker form-control" data-live-search="true" name="bidang_intern" value="{{ old('bidang_intern') }}">
                                            <option selected disabled>Pilih Bidang Pekerjaan</option>
                                            <option value="Infokom">Infokom</option>
                                            <option value="Non Infokom">Non Infokom</option>
                                        </select>    
                                    </div>  
                                    </div>  
                                    <!-- error message untuk bidang_intern -->
                                    @error('bidang_intern')
                                        <div class="alert alert-danger mt-2">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <div class="row mb-3">
                                        <label class="col-sm-3 col-form-label">Jenis Instansi</label>
                                        <div class="col-sm-9">
                                            <select class="selectpicker form-control" data-live-search="true" name="jns_intern" value="{{ old('jns_intern') }}">
                                                <option selected disabled>Pilih Jenis Instansi</option>
                                                <option value="Swasta">Swasta</option>
                                                <option value="Pemerintah">Pemerintah</option>
                                                <option value="Publik">Publik</option>
                                                <option value="Non Profit">Non Profit</option>
                                            </select>
                                        </div>  
                                    </div>  
                                    <!-- error message untuk jns_intern -->
                                    @error('jns_intern')
                                        <div class="alert alert-danger mt-2">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <div class="row mb-3">
                                        <label class="col-sm-3 col-form-label">Jabatan Pekerjaan</label>
                                        <div class="col-sm-9">
                                        <input type="text" class="form-control @error('jabatan_intern') is-invalid @enderror" name="jabatan_intern" value="{{ old('jabatan_intern') }}" placeholder="Masukkan Jabatan Pekerjaan">
                                        </div>  
                                    </div>  
                                    <!-- error message untuk jabatan_intern -->
                                    @error('jabatan_intern')
                                        <div class="alert alert-danger mt-2">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>

                                <div class="d-flex justify-content-end mt-5">
                                    <button type="reset" class="btn btn-md btn-warning-custom mr-2">RESET</button>
                                    <button type="submit" class="btn btn-md btn-custom">SIMPAN</button>
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
</body>
</html>