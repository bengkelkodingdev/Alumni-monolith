@extends('admin.layouts.main')
@section('title', 'kerja Populer')
@section('content')
  <!-- Navbar -->
  <nav class="sb-topnav navbar navbar-expand">
    <a class="navbar-brand" href="/admin" >
        <img src="{{ asset('images/logo-sti.png') }}" alt="Logo TI" width="250">
        <img src="{{ asset('images/logo-udinus.png') }}" alt="Logo udinus" width="55">
        <img src="{{ asset('images/logo-unggul.png') }}" alt="Logo udinus" width="40">
    </a>
    <form action="/lokeradmin" class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0">
        <div class="input-group">
            <input class="form-control" type="text" placeholder="Search here..." aria-label="Search for..." name="search"
                aria-describedby="btnNavbarSearch"/>
            <button class="btn" id="btnNavbarSearch" type="submit"><i class="fas fa-search"></i></button>
        </div>
    </form>
    <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4">
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button"
            data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
        </li>
    </ul>
  </nav>
<div class="container-border">
    <div class="d-flex flex-column mb-6 ml-5" style="width: 100%;">
        @php
        if (count($lokerAdmin) == 0) {
            echo '<div class="alert alert-warning" role="alert" style="text-align: left; width: 100%;">
                    No Lowongan Found. Silahkan isi lowongan.
                  </div>';
        }
        @endphp
        <div class="mb-2 d-flex justify-content-end" style="width: 100%;">
            {{-- <button type="submit" class="btn btn-custom btn-primary me-2" data-bs-toggle="modal" data-bs-target="#dialogTambahLoker"
                data-bs-remote="{{ route('lokeradmin.create') }}">
                <i class="fas fa-plus"></i> Post Lowongan
            </button> --}}
            
            <a href="{{ route('lokeradmin.manage') }}" class="btn btn-custom btn-primary">
                <i class="fas fa-cog"></i> Manage Lowongan
            </a>
        </div> 
    </div>
    
    
    
    
    <h2><b>kerja Populer</b></h2>

    <div style="display: flex; justify-content: space-between;">
        <!-- Tabel Lowongan -->
        <div style="width: 60%;">
            <div class="p-2.5">
                @unless(count($lokerAdmin) == 0)
                    @foreach($lokerAdmin as $listing)
                        <x-listing-card :listing="$listing" />
                    @endforeach
                @else
                    <p>No Lowongan Found. Silahkan isi lowongan.</p>
                @endunless
            </div>
        </div>

        <!-- Tabel Pengalaman kerja -->
        {{-- <div style="width: 35%;">
            <form id="filterForm" method="GET" action="{{ route('listingkerja.index') }}">
                <h1><b>Pengalaman kerja</b></h1>
                <div class="border border-blue-500 bg-blue-100 p-4 rounded-b-lg mr-10 mb-4">
                    @foreach ([
                        'Tanpa Pengalaman', 'Fresh Graduate', 'Minimal 1 Tahun',
                        'Minimal 2 Tahun', 'Minimal 3 Tahun', 'Lebih dari 3 Tahun'
                    ] as $pengalaman)
                        <label class="flex items-center mb-2" style="font-size: 14px;"> Mengatur ukuran font kecil
                            <input type="checkbox" class="mr-2" name="Pengalaman[]" value="{{ strtolower($pengalaman) }}" 
                                   {{ in_array(strtolower($pengalaman), array_map('strtolower', $selectedPengalaman)) ? 'checked' : '' }} /> {{ $pengalaman }}
                        </label>
                        <br>
                    @endforeach
                </div>

                

                <!-- Tipe Pekerjaan -->
                <h1><b>Tipe kerja</b></h1>
                <div class="border border-blue-500 bg-blue-100 p-4 rounded-b-lg mr-10 mb-4">
                    @foreach ([
                        'Freelance', 'Full Time', 'Part Time', 'Kontrak', 'Sementara'
                    ] as $tipekerja)
                        <label class="flex items-center mb-2" style="font-size: 14px;"> Mengatur ukuran font kecil
                            <input type="checkbox" class="mr-2" name="Tipekerja[]" value="{{ strtolower($tipekerja) }}" 
                                   {{ in_array(strtolower($tipekerja), array_map('strtolower', $selectedTipekerja)) ? 'checked' : '' }} /> {{ $tipekerja }}
                        </label>
                        <br>
                    @endforeach
                </div>
            </form>
        </div> --}}
    </div>
    <!--Dialog Tambah Lowongan-->
    {{-- @include('alumni.loker.create') --}}
    <div class="modal fade" id="dialogTambahLoker" tabindex="-1" aria-labelledby="dialogTambahLokerLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">
                <!-- Content will be loaded dynamically -->
            </div>
        </div>
    </div>

    {{-- <script>
        document.querySelectorAll('input[name="Pengalaman[]"], input[name="Tipekerja[]"]').forEach(function(checkbox) {
            checkbox.addEventListener('change', function() {
                document.getElementById('filterForm').submit();
            });
        });
    </script> --}}

    <div class="mt-6 p-4">
        {{$lokerAdmin->links()}}
    </div>
</div>
@endsection
