<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources/css/app.css','resources/js/app.js'])
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>
    <link rel="stylesheet" href="{{ asset('css/login.css') }}">
    <link rel="icon" href="{{ asset('images/favicon.ico') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <title>Login</title>
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
                    
                    <!-- Tampilkan pesan peringatan email belum terdaftar -->
                    @if($errors->has('email_tidak_terdaftar'))
                        <div class="alert alert-warning">
                            {{ $errors->first('email_tidak_terdaftar') }}
                        </div>
                    @endif

                    <!-- Tampilkan pesan peringatan password salah -->
                    @if($errors->has('login_gagal'))
                        <div class="alert alert-danger">
                            {{ $errors->first('login_gagal') }}
                        </div>
                    @endif

                    <form action="" method="POST">
                        @csrf
                        <div class="header-text mb-4">
                            <h2>Login</h2>
                        </div>
                        <div class="input-group mb-3">
                            <input id="email" type="email" class="form-control form-control-lg bg-light fs-6"
                                placeholder="Masukkan Email" name="email" required autofocus>
                        </div>
                        <div class="input-group mb-1">
                            <input id="password" type="password" class="form-control form-control-lg bg-light fs-6"
                                placeholder="Masukkan Password" name="password" required>
                        </div>
                        <a href="{{ route('password.request') }}" class="text-decoration-none mb-3 d-block" style="font-size: 14px; color: blue;">Lupa Password?</a>
                        <div class="input-group mb-5 d-flex justify-content-between">
                        </div>
                        <div class="form-group">
                            <button name="submit" type="submit" class="btn btn-primary bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Login</button>
                            <a href="{{ route('register') }}" class="btn btn-primary bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                                Register
                            </a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
