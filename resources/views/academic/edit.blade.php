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
            border: none;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            background-color: #FFFFFF;
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
                        <b><h1 class="text-left mb-4" style="color: #F68955;">Form Academic</h1></b>
                        <div class="form">
                            <form action="{{ route('academic.update', $academic->id) }}" method="POST" enctype="multipart/form-data">
                                
                                @csrf
                                @method('PUT')                                                       
                                <!-- Form group untuk Nama Mahasiswa, Email, IPK Mahasiswa, Judul Skripsi, dan Dosen Wali -->
                                
                                <div class="form-group">
                                    <div class="row mb-3">
                                        <label for="nim" class="col-sm-3 col-form-label">NIM</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control @error('nim') is-invalid @enderror" name="nim" value="{{ old('nim', $academic->nim) }}" placeholder="Masukkan NIM Mahasiswa" id="nim">
                                        </div>
                                    </div>   
                                    
                                    <!-- error message untuk nim -->                            
                                    @error('nim')
                                        <div class="alert alert-danger mt-2">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <div class="row mb-3">
                                        <label for="nama_mhs" class="col-sm-3 col-form-label">Nama Mahasiswa</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control @error('nama_mhs') is-invalid @enderror" name="nama_mhs" value="{{ old('nama_mhs', $academic->nama_mhs) }}" placeholder="Masukkan Nama Mahasiswa" id="nama_mhs">
                                        </div>
                                    </div>   
                                    <!-- error message untuk nama_mhs -->                               
                                    @error('nama_mhs')
                                        <div class="alert alert-danger mt-2">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <div class="row mb-3">
                                        <label for="email" class="col-sm-3 col-form-label">Email Mahasiswa</label>
                                        <div class="col-sm-9">
                                            <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email', $academic->email) }}" placeholder="Masukkan Email Mahasiswa">
                                        </div>
                                    </div>                                 
                                    <!-- error message untuk email -->
                                    @error('email')
                                        <div class="alert alert-danger mt-2">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                
                                <div class="form-group">
                                    <div class="row mb-3">
                                        <label for="ipk" class="col-sm-3 col-form-label">IPK Mahasiswa</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control @error('ipk') is-invalid @enderror" name="ipk" value="{{ old('ipk', $academic->ipk) }}" placeholder="Masukkan IPK Mahasiswa" id="ipk" step="0.01">
                                        </div>
                                    </div>  
                                
                                    <!-- error message untuk nama_mhs -->
                                    @error('ipk')
                                        <div class="alert alert-danger mt-2">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>

                                <div class="form-group">
                                <div class="row mb-3">
                                    <label for="judul_skripsi" class="col-sm-3 col-form-label">Judul Skripsi</label>
                                    <div class="col-sm-9">
                                    <input type="text" class="form-control @error('judul_skripsi') is-invalid @enderror" name="judul_skripsi" value="{{ old('judul_skripsi', $academic->judul_skripsi) }}" placeholder="Masukkan Judul Skripsi Mahasiswa">
                                    </div>
                                    </div>  
                                    <!-- error message untuk nama_mhs -->
                                    @error('judul_skripsi')
                                        <div class="alert alert-danger mt-2">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>

                                <div class="form-group">
                                <div class="row mb-3">
                                    <label for="dosen_wali"class="col-sm-3 col-form-label">Dosen Wali</label>
                                    <div class="col-sm-9">
                                    <input type="text" class="form-control @error('dosen_wali') is-invalid @enderror" name="dosen_wali" value="{{ old('dosen_wali', $academic->dosen_wali) }}" placeholder="Masukkan Nama Dosen Wali Mahasiswa">
                                    </div>
                                    </div>  
                                    <!-- error message untuk nama_mhs -->
                                    @error('dosen_wali')
                                        <div class="alert alert-danger mt-2">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <div class="row mb-3">
                                        <label for="tahun_lulus" class="col-sm-3 col-form-label">Tahun Lulus</label>
                                        <div class="col-sm-9">
                                            <input type="number" class="form-control @error('tahun_lulus') is-invalid @enderror" name="tahun_lulus" value="{{ old('tahun_lulus', $academic->tahun_lulus) }}" placeholder="Masukkan Tahun Lulus Mahasiswa" id="tahun_lulus" min="1900" max="2024" step="1">
                                        </div>
                                    </div>  
                                
                                    <!-- error message untuk tahun_lulus -->
                                    @error('tahun_lulus')
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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script>
        CKEDITOR.replace( 'content' );
    </script>
</body>
</html>