<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>TracerStudy</title>
    @vite(['resources/css/app.css','resources/js/app.js'])
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #EFF7FF;
            color: #000000;
        }
        footer {
            position:absolute;
            width:100%;
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
        .form {
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
            padding-top: 30px;
            margin: auto;
        }
        .steps-container {
            display: flex;
            justify-content: space-between;
            align-items: center;
            position: relative;
            max-width: 800px;
            margin: auto;
            font-weight: bold;
        }
        .step {
            display: flex;
            flex-direction: column;
            align-items: center;
            color: #aaa;
            position: relative;
        }
        .step.active {
            color: #0056b3;
        }
        .step.completed {
            color: #0056b3;
        }
        .step-circle {
            width: 70px;
            height: 70px;
            border-radius: 50%;
            background-color: #eee;
            display: flex;
            justify-content: center;
            align-items: center;
        }
        .step-circle.active, .step-circle.completed {
            background-color: #0056b3;
            color: #fff;
        }
        .step-line {
            width: 100px;
            height: 6px;
            background-color: #eee;
            position: absolute;
            top: 35px;
            z-index: -1;
            transition: background-color 0.3s;
        }
        .step-line.completed {
            background-color: #0056b3;
        }
        .form-step {
            display: none;
        }
        .form-step.active {
            display: block;
        }
        .form-navigation {
            display: flex;
            justify-content: flex-end;
            margin-top: 20px;
        }
    </style>
</head>
<body>
    <!-- navbar -->
    <nav class="bg-white border-gray-200 dark:bg-gray-900">
        <div class="flex flex-wrap justify-between items-center mx-auto max-w-screen-xl p-4">
            <a href="" class="flex items-center space-x-3 rtl:space-x-reverse">
                <img src="https://sti.dinus.ac.id/wp-content/uploads/sites/45/2021/11/logo-ti-01.png" class="h-20" alt="Flowbite Logo" />
                <img src="https://sti.dinus.ac.id/wp-content/uploads/sites/45/2022/08/Logo_udinus1.png" class="h-20" alt="Flowbite Logo" />
                <img src="https://kediri.dinus.ac.id/wp-content/uploads/2022/04/Logo-Unggul-01-1639x2048.png" class="h-20" alt="Flowbite Logo" />
                <span class="self-center text-2xl font-semibold whitespace-nowrap dark:text-white"></span>
            </a>
                
            <form class="flex md:order-2">   
            <label for="simple-search" class="sr-only">Search</label>
            <div class="relative w-full">
                <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
                    <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 20">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5v10M3 5a2 2 0 1 0 0-4 2 2 0 0 0 0 4Zm0 10a2 2 0 1 0 0 4 2 2 0 0 0 0-4Zm12 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4Zm0 0V6a3 3 0 0 0-3-3H9m1.5-2-2 2 2 2"/>
                    </svg>
                </div>
                <input type="text" id="simple-search" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full ps-10 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Search" required />
            </div>
            <button type="submit" class="p-2.5 ms-2 text-sm font-medium text-white bg-blue-700 rounded-lg border border-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z"/>
                </svg>
                <span class="sr-only">Search</span>
            </button>
            </form>

            <button data-collapse-toggle="navbar-search" type="button" class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600" aria-controls="navbar-search" aria-expanded="false">
                <span class="sr-only">Open main menu</span>
                <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 17 14">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1h15M1 7h15M1 13h15"/>
                </svg>
            </button>
        </div>
    </nav>
    <nav class="bg-blue-500 dark:bg-gray-700">
        <div class="max-w-screen-xl px-4 py-3 mx-auto">
            <div class="flex items-center">
            <ul class="flex flex-row font-medium mt-0 space-x-8 rtl:space-x-reverse text-sm">
                <button id="dropdownNavbarLink" data-dropdown-toggle="dropdownNavbar" class="flex items-center justify-between w-full py-2 px-3 text-gray-900 hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 md:w-auto dark:text-white md:dark:hover:text-blue-500 dark:focus:text-white dark:hover:bg-gray-700 md:dark:hover:bg-transparent">Akademik 
                <svg class="w-2.5 h-2.5 ms-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4"/>
                </svg>
                </button>
                <button id="dropdownNavbarLink" data-dropdown-toggle="dropdownNavbar" class="flex items-center justify-between w-full py-2 px-3 text-gray-900 hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 md:w-auto dark:text-white md:dark:hover:text-blue-500 dark:focus:text-white dark:hover:bg-gray-700 md:dark:hover:bg-transparent">Penelitian 
                <svg class="w-2.5 h-2.5 ms-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4"/>
                </svg>
                </button>
                <button id="dropdownNavbarLink" data-dropdown-toggle="dropdownNavbar" class="flex items-center justify-between w-full py-2 px-3 text-gray-900 hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 md:w-auto dark:text-white md:dark:hover:text-blue-500 dark:focus:text-white dark:hover:bg-gray-700 md:dark:hover:bg-transparent">Informasi 
                <svg class="w-2.5 h-2.5 ms-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4"/>
                </svg>
                </button>
                <button id="dropdownNavbarLink" data-dropdown-toggle="dropdownNavbar" class="flex items-center justify-between w-full py-2 px-3 text-gray-900 hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 md:w-auto dark:text-white md:dark:hover:text-blue-500 dark:focus:text-white dark:hover:bg-gray-700 md:dark:hover:bg-transparent">Tentang 
                <svg class="w-2.5 h-2.5 ms-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4"/>
                </svg>
                </button>
                <!-- Dropdown menu -->
                <div id="dropdownNavbar" class="z-10 hidden font-normal bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700 dark:divide-gray-600">
                <li>
                    <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Alumni</a>
                </li>
                <li>
                    <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Data Alumni</a>
                </li>
                <li>
                    <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Tracer Study</a>
                </li>
                <li>
                    <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Lowongan Magang</a>
                </li>
                <li>
                    <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Lowongan Kerja</a>
                </li>          
                </div>
                <button id="dropdownNavbarLink" data-dropdown-toggle="dropdownNavbar" class="flex items-center justify-between w-full py-2 px-3 text-gray-900 hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 md:w-auto dark:text-white md:dark:hover:text-blue-500 dark:focus:text-white dark:hover:bg-gray-700 md:dark:hover:bg-transparent">Mitra 
                <svg class="w-2.5 h-2.5 ms-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4"/>
                </svg>
                </button>
                <button id="dropdownNavbarLink" data-dropdown-toggle="dropdownNavbar" class="flex items-center justify-between w-full py-2 px-3 text-gray-900 hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 md:w-auto dark:text-white md:dark:hover:text-blue-500 dark:focus:text-white dark:hover:bg-gray-700 md:dark:hover:bg-transparent">Alumni 
                <svg class="w-2.5 h-2.5 ms-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4"/>
                </svg>
                </button>
            </ul>
            </div>
        </div>
    </nav> 

    <div class="container">
        <div class="steps-container">
            <div class="step active">
                <div class="step-circle">1</div>
                <div class="step-label">Step 1</div>
                <div class="step-line"></div>
            </div>
            <div class="step">
                <div class="step-circle">2</div>
                <div class="step-label">Step 2</div>
                <div class="step-line"></div>
            </div>
            <div class="step">
                <div class="step-circle">3</div>
                <div class="step-label">Step 3</div>
            </div>
        </div>
        
        <div class="container mt-5 mb-5">
            <div class="row">
                <div class="col-md-12">
                    <div class="card border-0 shadow-sm rounded">
                        <div class="card-body">
                            <form action="{{ route('tracerstudy.store') }}" method="POST" id="multi-step-form">
                                @csrf
                                <!-- academic -->
                                <div class="form-step" id="form-step-1">
                                    <b><h1 class="text-left mb-4" style="color: #F68955;">Form Academic</h1></b>
                                    <div class="form "> 
                                        <div class="form-group">
                                            <div class="row mb-3">
                                                <label for="nim" class="col-sm-3 col-form-label">NIM</label>
                                                <div class="col-sm-9">
                                                    <input type="text" class="form-control @error('nim') is-invalid @enderror" name="nim" value="{{ old('nim') }}" placeholder="Masukkan NIM Mahasiswa" id="nim">
                                                </div>
                                            </div>                              
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
                                                    <input type="text" class="form-control @error('nama_mhs') is-invalid @enderror" name="nama_mhs" value="{{ old('nama_mhs') }}" placeholder="Masukkan Nama Mahasiswa" id="nama_mhs">
                                                </div>
                                            </div>                                  
                                            @error('nama_mhs')
                                                <div class="alert alert-danger mt-2">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>

                                        <div class="form-group">
                                            <div class="row mb-3">
                                                <label for="email" class="col-sm-3 col-form-label">Email Pribadi</label>
                                                <div class="col-sm-9">
                                                    <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" placeholder="Masukkan Email Mahasiswa" id="email">
                                                </div>
                                            </div>   
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
                                                        <input type="text" class="form-control @error('ipk') is-invalid @enderror" name="ipk" value="{{ old('ipk') }}" placeholder="Masukkan IPK Mahasiswa" id="ipk" step="0.01">
                                                    </div>
                                            </div>   
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
                                                <input type="text" class="form-control @error('judul_skripsi') is-invalid @enderror" name="judul_skripsi" value="{{ old('judul_skripsi') }}" placeholder="Masukkan Judul Skripsi Mahasiswa" id="judul_skripsi">
                                                </div>
                                            </div>   
                                            @error('judul_skripsi')
                                                <div class="alert alert-danger mt-2">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>

                                        <div class="form-group">
                                            <div class="row mb-3">
                                            <label for="dosen_wali" class="col-sm-3 col-form-label">Dosen Wali</label>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control @error('dosen_wali') is-invalid @enderror" name="dosen_wali" value="{{ old('dosen_wali') }}" placeholder="Masukkan Nama Dosen Wali Mahasiswa" id="dosen_wali">
                                                </div>
                                            </div>   
                                            @error('dosen_wali')
                                                <div class="alert alert-danger mt-2">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                    </div>
                                </div>

                                <!-- job -->
                                <div class="form-step" id="form-step-2">
                                    <b><h1 class="text-left mb-4" style="color: #F68955;">Form Job</h1></b>
                                    <div class="form">
                                        <div class="form-group">
                                            <div class="row mb-3">
                                                <label class="col-sm-3 col-form-label">Nama Instansi</label>
                                                <div class="col-sm-9">        
                                                    <input type="text" class="form-control @error('nama_job') is-invalid @enderror" name="nama_job" value="{{ old('nama_job') }}" placeholder="Masukkan Nama Instansi">
                                                </div>  
                                            </div> 
                                            <!-- error message untuk nim -->
                                            @error('nama_job')
                                                <div class="alert alert-danger mt-2">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>

                                        <div class="form-group">
                                            <div class="row mb-3">
                                                <label class="col-sm-3 col-form-label">Periode (MM/YYYY)</label>
                                                <div class="col-sm-4">
                                                    <input type="text" class="form-control @error('periode_masuk_job') is-invalid @enderror" name="periode_masuk_job" value="{{ old('periode_masuk_job') }}" placeholder="Masukkan Bulan dan Tahun Periode Masuk Mahasiswa"> 
                                                </div>  
                                                <label class="col-sm-1 col-form-label">Sampai</label>
                                                <div class="col-sm-4">
                                                    <input type="text" class="form-control @error('periode_keluar_job') is-invalid @enderror" name="periode_keluar_job" value="{{ old('periode_keluar_job') }}" placeholder="Masukkan Bulan dan Tahun Periode Keluar Mahasiswa">
                                                </div>                                     
                                            </div>                       
                                            <!-- error message untuk periode_masuk_intern -->
                                            @error('periode_masuk_job')
                                                <div class="alert alert-danger mt-2">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                            <!-- error message untuk periode_keluar_intern -->
                                            @error('periode_keluar_job')
                                                <div class="alert alert-danger mt-2">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                        
                                        <div class="form-group">
                                            <div class="row mb-3">
                                                <label class="col-sm-3 col-form-label">Alamat Instansi</label>
                                                <div class="col-sm-9">  
                                                    <input type="text" class="form-control @error('alamat_job') is-invalid @enderror" name="alamat_job" value="{{ old('alamat_job') }}" placeholder="Masukkan Alamat Instansi">      
                                                </div>  
                                            </div> 
                                            <!-- error message untuk alamat_job -->
                                            @error('alamat_job')
                                                <div class="alert alert-danger mt-2">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                        
                                        <div class="form-group">
                                            <div class="row mb-3">
                                                <label class="col-sm-3 col-form-label">Tautan/Website</label>
                                                <div class="col-sm-9">    
                                                    <input type="text" class="form-control @error('link_job') is-invalid @enderror" name="link_job" value="{{ old('link_job') }}" placeholder="Masukkan Kota/Kabupaten Instansi">    
                                                </div>  
                                            </div> 
                                            <!-- error message untuk link_job -->
                                            @error('link_job')
                                                <div class="alert alert-danger mt-2">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>

                                        <div class="form-group">
                                            <div class="row mb-3">
                                                <label class="col-sm-3 col-form-label">Jenis Instansi</label>
                                                <div class="col-sm-9">  
                                                    <select class="selectpicker form-control" data-live-search="true" name="jns_job" value="{{ old('jns_job') }}">
                                                        <option selected disabled>Pilih Jenis Instansi</option>
                                                        <option value="Swasta">Swasta</option>
                                                        <option value="Pemerintah">Pemerintah</option>
                                                        <option value="Publik">Publik</option>
                                                        <option value="Non Profit">Non Profit</option>
                                                    </select>      
                                                </div>  
                                            </div> 
                                            <!-- error message untuk jns_job -->
                                            @error('jns_job')
                                                <div class="alert alert-danger mt-2">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>

                                        <div class="form-group">
                                            <div class="row mb-3">
                                                <label class="col-sm-3 col-form-label">Jabatan Pekerjaan</label>
                                                <div class="col-sm-9">  
                                                    <input type="text" class="form-control @error('jabatan_job') is-invalid @enderror" name="jabatan_job" value="{{ old('jabatan_job') }}" placeholder="Masukkan Jabatan Pekerjaan">      
                                                </div>  
                                            </div> 
                                            <!-- error message untuk jabatan_job -->
                                            @error('jabatan_job')
                                                <div class="alert alert-danger mt-2">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                    </div>
                                </div>

                                <!-- internship -->
                                <div class="form-step" id="form-step-3">
                                    <b><h1 class="text-left mb-4" style="color: #F68955;">Form Internship</h1></b>
                                    <div class="form">
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
                                                <label class="col-sm-3 col-form-label">Tautan/Website</label>
                                                <div class="col-sm-9">
                                                <input type="text" class="form-control @error('link_intern') is-invalid @enderror" name="link_intern" value="{{ old('link_intern') }}" placeholder="Masukkan Kota/Kabupaten Instansi">
                                                </div>  
                                            </div>  
                                            <!-- error message untuk link_intern -->
                                            @error('link_intern')
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
                                    </div>
                                </div>
                                
                                <!-- organization -->
                                <div class="form-step" id="form-step-4">
                                    <b><h1 class="text-left mb-4" style="color: #F68955;">Form Organization</h1></b>
                                    <div class="form">
                                        <div class="form-group">
                                            <div class="row mb-3">
                                                <label class="col-sm-3 col-form-label">Nama Organisasi</label>
                                                <div class="col-sm-9">  
                                                <input type="text" class="form-control @error('nama_org') is-invalid @enderror" name="nama_org" value="{{ old('nama_org') }}" placeholder="Masukkan Nama Instansi">      
                                                </div>  
                                            </div>  
                                            <!-- error message untuk nama_org -->
                                            @error('nama_org')
                                                <div class="alert alert-danger mt-2">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>

                                        <div class="form-group">
                                            <div class="row mb-3">
                                                <label class="col-sm-3 col-form-label">Periode (YYYY/YYYY)</label>
                                                <div class="col-sm-9">        
                                                    <input type="text" class="form-control @error('periode_org') is-invalid @enderror" name="periode_org" value="{{ old('periode_org') }}" placeholder="Masukkan Tahun Periode Organisasi ">
                                                </div>  
                                            </div>  
                                            <!-- error message untuk periode_org -->
                                            @error('periode_org')
                                                <div class="alert alert-danger mt-2">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                        
                                        <div class="form-group">
                                            <div class="row mb-3">
                                                <label class="col-sm-3 col-form-label">Tautan/Website</label>
                                                <div class="col-sm-9">        
                                                <input type="link" class="form-control @error('link_org') is-invalid @enderror" name="link_org" value="{{ old('link_org') }}" placeholder="Masukkan Tautan/Website Organisasi">
                                                </div>  
                                            </div>  
                                            <!-- error message untuk link_org -->
                                            @error('link_org')
                                                <div class="alert alert-danger mt-2">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>

                                        <div class="form-group">
                                            <div class="row mb-3">
                                                <label class="col-sm-3 col-form-label">Tingkat Organisasi</label>
                                                <div class="col-sm-9">  
                                                    <select class="selectpicker form-control" data-live-search="true" name="tingkat_org" value="{{ old('tingkat_org') }}" >
                                                        <option selected disabled>Pilih Tingkat Organisasi</option>
                                                        <option value="Lokal">Lokal</option>
                                                        <option value="Nasional">Nasional</option>
                                                        <option value="Internasional">Internasional</option>
                                                    </select>          
                                                </div>  
                                            </div>                                  
                                            <!-- error message untuk tingkat_org -->
                                            @error('tingkat_org')
                                                <div class="alert alert-danger mt-2">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>

                                        <div class="form-group">
                                            <div class="row mb-3">
                                                <label class="col-sm-3 col-form-label">Jenis Organisasi</label>
                                                <div class="col-sm-9">   
                                                    <select class="selectpicker form-control" data-live-search="true" name="jns_org" value="{{ old('jns_org') }}" >
                                                        <option selected disabled>Pilih Jenis Organisasi</option>
                                                        <option value="Ormawa">Ormawa (Organisasi Mahasiswa)</option>
                                                        <option value="UKM">UKM (Unit Kegiatan Mahasiswa)</option>
                                                        <option value="LSM">LSM (Lembaga Swadaya Masyarakat)</option>
                                                        <option value="partai Politik">partai Politik</option>
                                                        <option value="Ormas">Ormas (Organisasi Masyarakat)</option>
                                                        <option value="Profesi">Profesi</option>
                                                        <option value="Lainnya">Lainnya</option>
                                                    </select>        
                                                </div>  
                                            </div>  
                                            <!-- error message untuk jns_org -->
                                            @error('jns_org')
                                                <div class="alert alert-danger mt-2">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>

                                        <div class="form-group">
                                            <div class="row mb-3">
                                                <label class="col-sm-3 col-form-label">Jabatan Organisasi</label>
                                                <div class="col-sm-9">        
                                                    <input type="text" class="form-control @error('jabatan_org') is-invalid @enderror" name="jabatan_org" value="{{ old('jabatan_org') }}" placeholder="Masukkan Jabatan Pekerjaan">
                                                </div>  
                                            </div>  
                                            <!-- error message untuk jabatan_org -->
                                            @error('jabatan_org')
                                                <div class="alert alert-danger mt-2">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                    </div>
                                </div>

                                
                                <!-- award -->
                                <div class="form-step" id="form-step-5">
                                    <b><h1 class="text-left mb-4" style="color: #F68955;">Form Award</h1></b>
                                    <div class="form">
                                        <div class="form-group ">
                                            <div class="row mb-3">
                                                <label class="col-sm-3 col-form-label">Nama Award</label>
                                                <div class="col-sm-9">
                                                <input type="text" class="form-control @error('nama_award') is-invalid @enderror" name="nama_award" value="{{ old('nama_award') }}" placeholder="Masukkan Nama Award">
                                                </div>  
                                            </div>
                                            <!-- error message untuk nama_award -->
                                            @error('nama_award')
                                                <div class="alert alert-danger mt-2">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>

                                        <div class="form-group">
                                            <div class="row mb-3">
                                            <label class="col-sm-3 col-form-label">Nama Institusi Award</label>
                                                <div class="col-sm-9">
                                                <input type="text" class="form-control @error('institusi_award') is-invalid @enderror" name="institusi_award" value="{{ old('institusi_award') }}" placeholder="Masukkan Nama Institusi Pemberi Award ">
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
                                                    <select class="selectpicker form-control" data-live-search="true" name="tingkat_award" value="{{ old('tingkat_award') }}" >
                                                        <option selected disabled>Pilih Tingkat Award</option>
                                                        <option value="Lokal">Lokal</option>
                                                        <option value="Nasional">Nasional</option>
                                                        <option value="Internasional">Internasional</option>
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
                                                <input type="text" class="form-control @error('tahun_award') is-invalid @enderror" name="tahun_award" value="{{ old('tahun_award') }}" placeholder="Masukkan Tingkat Award" pattern="[0-9]{4}" >
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
                                                <label  class="col-sm-3 col-form-label">Deskripsi Award</label>
                                                <div class="col-sm-9">
                                                <input type="text" class="form-control @error('deskripsi_award') is-invalid @enderror" name="deskripsi_award" value="{{ old('deskripsi_award') }}" placeholder="Masukkan Deskripsi Award">
                                                </div>  
                                            </div>  
                                            <!-- error message untuk deskripsi_award -->
                                            @error('deskripsi_award')
                                                <div class="alert alert-danger mt-2">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                
                                <!-- course -->
                                <div class="form-step" id="form-step-6">
                                    <b><h1 class="text-left mb-4" style="color: #F68955;">Form Course</h1></b>
                                    <div class="form">
                                        <div class="form-group">
                                            <div class="row mb-3">
                                                <label class="col-sm-3 col-form-label">Nama Course</label>
                                                <div class="col-sm-9">
                                                    <input type="text" class="form-control @error('nama_course') is-invalid @enderror" name="nama_course" value="{{ old('nama_course') }}" placeholder="Masukkan Nama Course">
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
                                                <input type="text" class="form-control @error('institusi_course') is-invalid @enderror" name="institusi_course" value="{{ old('institusi_course') }}" placeholder="Masukkan Nama Institusi Course">
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
                                                <label class="col-sm-3 col-form-label">Tingkat Course</label>
                                                <div class="col-sm-9">
                                                    <select class="selectpicker form-control" data-live-search="true" name="tingkat_course" value="{{ old('tingkat_course') }}" >
                                                        <option selected disabled>Pilih Tingkat Course</option>
                                                        <option value="Lokal">Lokal</option>
                                                        <option value="Nasional">Nasional</option>
                                                        <option value="Internasional">Internasional</option>
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
                                                <label class="col-sm-3 col-form-label">Tahun Course (YYYY)</label>
                                                <div class="col-sm-9">
                                                <input type="text" class="form-control @error('tahun_course') is-invalid @enderror" name="tahun_course" value="{{ old('tahun_course') }}" placeholder="Masukkan Tahun Course" pattern="[0-9]{4}">
                                                </div>  
                                            </div> 
                                            <!-- error message untuk tahun_course -->
                                            @error('tahun_course')
                                                <div class="alert alert-danger mt-2">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                    </div>
                                </div>

                                <!-- skill -->
                                <div class="form-step" id="form-step-7">
                                    <b><h1 class="text-left mb-4" style="color: #F68955;">Form Skill</h1></b>
                                    <div class="form">
                                        
                                    </div>
                                </div>

                                <!-- button -->
                                <div class="d-flex justify-content-end mt-3">
                                    <div class="form-navigation">
                                        <button type="button" class="btn btn-md btn-warning-custom mr-2" id="prev-btn" disabled>PREVIOUS</button>
                                        <button type="reset" class="btn btn-md btn-custom mr-2">RESET</button>
                                        <button type="button" class="btn btn-md btn-warning-custom mr-2" id="next-btn">NEXT</button>
                                        <button type="submit" class="btn btn-md btn-custom" id="submit-btn" style="display: none;">SUBMIT</button>
                                    </div>                
                                </div>
                            </form>                                          
                        </div>
                    </div>
                </div>
            </div>
        </div> 
    </div>    

    <!-- javascript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            let currentStep = 1;
            const totalSteps = document.querySelectorAll('.step').length;

            const updateStep = (step) => {
                document.querySelectorAll('.form-step').forEach((element, index) => {
                    element.classList.remove('active');
                    if (index === step - 1) {
                        element.classList.add('active');
                    }
                });

                document.querySelectorAll('.step').forEach((element, index) => {
                    element.classList.remove('active', 'completed');
                    if (index < step - 1) {
                        element.classList.add('completed');
                    } else if (index === step - 1) {
                        element.classList.add('active');
                    }
                });

                document.getElementById('prev-btn').disabled = step === 1;
                document.getElementById('next-btn').style.display = step === totalSteps ? 'none' : 'inline-block';
                document.getElementById('submit-btn').style.display = step === totalSteps ? 'inline-block' : 'none';
            };

            document.getElementById('prev-btn').addEventListener('click', function () {
                if (currentStep > 1) {
                    currentStep--;
                    updateStep(currentStep);
                }
            });

            document.getElementById('next-btn').addEventListener('click', function () {
                if (currentStep < totalSteps) {
                    currentStep++;
                    updateStep(currentStep);
                }
            });

            updateStep(currentStep);
        });
    </script>
    <footer class="bg-blue-200 rounded-lg shadow mt-10 dark:bg-gray-800">
            <div class="w-full mx-auto max-w-screen-xl p-4 md:flex md:items-center md:justify-between">
                <a href="" class="flex items-center space-x-3 rtl:space-x-reverse">
                    <img src="https://sti.dinus.ac.id/wp-content/uploads/sites/45/2021/11/logo-ti-01.png" class="h-20" alt="Flowbite Logo" />
                    <img src="https://sti.dinus.ac.id/wp-content/uploads/sites/45/2022/08/Logo_udinus1.png" class="h-20" alt="Flowbite Logo" />
                    <img src="https://kediri.dinus.ac.id/wp-content/uploads/2022/04/Logo-Unggul-01-1639x2048.png" class="h-20" alt="Flowbite Logo" />
                    <span class="self-center text-2xl font-semibold whitespace-nowrap dark:text-white"></span>
                </a>
                <ul class="flex flex-wrap items-center mt-3 text-sm font-medium text-gray-500 dark:text-gray-400 sm:mt-0">
                    <li>
                        <a href="#" class="hover:underline me-4 md:me-6">About</a>
                    </li>
                    <li>
                        <a href="#" class="hover:underline me-4 md:me-6">Privacy Policy</a>
                    </li>
                    <li>
                        <a href="#" class="hover:underline me-4 md:me-6">Licensing</a>
                    </li>
                    <li>
                        <a href="#" class="hover:underline">Contact</a>
                    </li>
                </ul>
            </div>
        </footer>
</body>
</html>