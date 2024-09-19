<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources/css/app.css','resources/js/app.js'])
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>
    <!-- CSS only -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/login.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
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
        <form action="{{ route('registersimpan') }}" method="POST">
            @csrf
            <div class="input-group mb-3">
                <input id="nama_alumni" type="nama_alumni" class="form-control form-control-lg bg-light fs-6"
                    placeholder="Masukkan Nama" name="nama_alumni" required autofocus>
            </div>
            <div class="input-group mb-3">
                <input id="email" type="email" class="form-control form-control-lg bg-light fs-6"
                    placeholder="Masukkan Email" name="email" required autofocus>
            </div>
            <div class="input-group mb-3">
                <input id="password" type="password" class="form-control form-control-lg bg-light fs-6"
                    placeholder="Masukkan Password" name="password" required>
            </div>
            <div class="form-group mb-3">
                <input type="text" class="form-control{{ $errors->has('role') ? 'is-invalid' : '' }}" name="role" value="alumni" id="role" readonly>
            </div>
            <div class="d-grid">
                <button name="submit" type="submit" class="btn btn-primary">Register</button>
            </div>
        </form>
    </div> 
    </div>
</body>
</html>