<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources/css/app.css','resources/js/app.js'])
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>
    
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/login.css') }}">
    <title>Register</title>
</head>
<body>
    <div class="container d-flex justify-content-center align-items-center min-vh-100">
        <div class="row border rounded-5 p-3 bg-white shadow box-area">
            <div class="col-md-6 rounded-4 d-flex justify-content-center align-items-center flex-column left-box">
                <div class="featured-image mb-3">
                    <!--<img src="images/1.png" class="img-fluid" style="width: 250px;">-->
                </div>
                <p class="text-white fs-2">Alumni</p>
                <small class="text-white text-wrap text-center">Universitas Dian Nuswantoro</small>
            </div>
            <div class="col-md-6 right-box">
                <div class="row align-items-center">
                    <div class="header-text mb-4">
                        <h2>Register</h2>
                    </div>
                    
                    {{-- Form register --}}
                    <form action="{{ route('registersimpan') }}" method="POST">
                        @csrf
                        <div class="input-group mb-3">
                            <input id="nama_pengguna" type="text" class="form-control form-control-lg bg-light fs-6"
                                placeholder="Masukkan Nama Lengkap" name="nama_pengguna" required autofocus>
                        </div>

                        {{-- Tampilkan error jika ada --}}
                        @if ($errors->has('nama_pengguna'))
                            <span class="text-danger">{{ $errors->first('nama_pengguna') }}</span>
                        @endif

                        <div class="input-group mb-3">
                            <input id="email" type="email" class="form-control form-control-lg bg-light fs-6"
                                placeholder="Masukkan Email" name="email" required>
                        </div>

                        {{-- Tampilkan error jika ada --}}
                        @if ($errors->has('email'))
                            <span class="text-danger">{{ $errors->first('email') }}</span>
                        @endif

                        <div class="input-group mb-3">
                            <input id="password" type="password" class="form-control form-control-lg bg-light fs-6"
                                placeholder="Masukkan Password" name="password" required>
                        </div>

                        {{-- Tampilkan error jika ada --}}
                        @if ($errors->has('password'))
                            <span class="text-danger">{{ $errors->first('password') }}</span>
                        @endif

                        <div class="form-group mb-3">
                            <input type="text" class="form-control" name="role" value="alumni" id="role" readonly>
                        </div>

                        <div class="d-grid">
                            <button name="submit" type="submit" class="btn btn-primary">Register</button>
                        </div>
                    </form>

                    {{-- Tampilkan notifikasi sukses/error --}}
                    @if (session('error'))
                        <div class="alert alert-danger mt-3">
                            {{ session('error') }}
                        </div>
                    @endif

                    @if (session('success'))
                        <div class="alert alert-success mt-3">
                            {{ session('success') }}
                        </div>
                    @endif

                </div> 
            </div>
        </div>
    </div>

    {{-- Bootstrap JS --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2JDzZBp3pSM9J5p1zVMAwjlWj8lXPsBxlAP7ENtMfIHUxQ1I1lJA0a1Qb8A" crossorigin="anonymous"></script>
</body>
</html>
