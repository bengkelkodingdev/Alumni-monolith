@extends('alumni.layouts.main')
@section('title', 'Pekerjaan Populer')
@section('content')
  <!-- Navbar -->
  <nav class="sb-topnav navbar navbar-expand">
    <a class="navbar-brand" href="/admin" >
        <img src="{{ asset('images/logo-sti.png') }}" alt="Logo TI" width="250">
        <img src="{{ asset('images/logo-udinus.png') }}" alt="Logo udinus" width="55">
        <img src="{{ asset('images/logo-unggul.png') }}" alt="Logo udinus" width="40">
    </a>
    <form class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0">
        <div class="input-group">
            <input class="form-control" type="text" placeholder="Search here..." aria-label="Search for..."
                aria-describedby="btnNavbarSearch"/>
            <button class="btn" id="btnNavbarSearch" type="button"><i class="fas fa-search"></i></button>
        </div>
    </form>
    <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4">
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button"
            data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
        </li>
    </ul>
  </nav>
<div class="container">
    <div class="mb-6 ml-5">
        <button class="bg-laravel text-white rounded py-2 px-2 hover:bg-white">
            <a href="/admin/alumni" class="hover:text-laravel"><i class="fa-solid fa-arrow-left"></i> Back </a>
        </button>
        <button class="bg-laravel text-white rounded py-2 px-2 hover:bg-white">
            <a href="/postLoker" class="hover:text-laravel"><i class="fa-solid fa-upload"></i> Post Lowongan </a>
        </button>
        <button class="bg-laravel text-white rounded py-2 px-2 hover:bg-white">
            <a href="/manageLoker" class="hover:text-laravel"><i class="fa-solid fa-gear"></i> Manage Lowongan </a>
        </button>
    </div>

    @include('partials._search')

    <div style="font-family: Arial; font-size: 2em; color: #114D91; font-weight: bold; margin-left: 2%;">
        Pekerjaan Populer
    </div>

    <div style="display: flex; justify-content: space-between;">
        <!-- Tabel Lowongan -->
        <div style="width: 60%;">
            <div class="p-2.5">
                @unless(count($listings) == 0)
                    @foreach($listings as $listing)
                        <x-listing-card :listing="$listing" />
                    @endforeach
                @else
                    <p>No Lowongan Found</p>
                @endunless
            </div>
        </div>

        <!-- Tabel Pengalaman Kerja -->
        <div style="width: 35%;">
            <form id="filterForm" method="GET" action="{{ route('listings.index') }}">
                <!-- Pengalaman Kerja -->
                <div class="bg-blue-500 text-white p-2 rounded-t-lg mr-10 mt-3">
                    Pengalaman Kerja
                </div>
                <div class="border border-blue-500 bg-blue-100 p-4 rounded-b-lg mr-10 mb-4">
                    @foreach ([
                        'Tanpa Pengalaman', 'Fresh Graduate', 'Minimal 1 Tahun',
                        'Minimal 2 Tahun', 'Minimal 3 Tahun', 'Lebih dari 3 Tahun'
                    ] as $pengalaman)
                        <label class="flex items-center mb-2">
                            <input type="checkbox" class="mr-2" name="Pengalaman[]" value="{{ $pengalaman }}" 
                                   {{ in_array($pengalaman, $selectedPengalaman) ? 'checked' : '' }} /> {{ $pengalaman }}
                        </label>
                    @endforeach
                </div>

                <!-- Tipe Pekerjaan -->
                <div class="bg-blue-500 text-white p-2 rounded-t-lg mr-10 mt-3">
                    Tipe Pekerjaan
                </div>
                <div class="border border-blue-500 bg-blue-100 p-4 rounded-b-lg mr-10 mb-4">
                    @foreach ([
                        'Freelance', 'Full Time', 'Part Time', 'Kontrak', 'Sementara'
                    ] as $tipeKerja)
                        <label class="flex items-center mb-2">
                            <input type="checkbox" class="mr-2" name="TipeKerja[]" value="{{ $tipeKerja }}" 
                                   {{ in_array($tipeKerja, $selectedTipeKerja) ? 'checked' : '' }} /> {{ $tipeKerja }}
                        </label>
                    @endforeach
                </div>
            </form>
        </div>
    </div>

    <script>
        document.querySelectorAll('input[name="Pengalaman[]"], input[name="TipeKerja[]"]').forEach(function(checkbox) {
            checkbox.addEventListener('change', function() {
                document.getElementById('filterForm').submit();
            });
        });
    </script>

    <div class="mt-6 p-4">
        {{$listings->links()}}
    </div>
</div>
@endsection
