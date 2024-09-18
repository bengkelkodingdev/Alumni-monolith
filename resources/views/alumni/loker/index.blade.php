@extends('alumni.layouts.main')
@section('title', 'Pekerjaan Populer')
@section('content')
  <!-- Navbar -->
    <nav class="sb-topnav navbar navbar-expand">
        <a class="navbar-brand" href="{{ route('alumni') }}" >
            <img src="{{ asset('images/logo-sti.png') }}" alt="Logo TI" width="250">
            <img src="{{ asset('images/logo-udinus.png') }}" alt="Logo udinus" width="55">
            <img src="{{ asset('images/logo-unggul.png') }}" alt="Logo udinus" width="40">
        </a>
        <form action="{{ route('loker.index') }}"  class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0">
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
            @if(count($loker) == 0)
                <div class="alert alert-warning" role="alert">
                    No Lowongan Found. Silahkan isi lowongan.
                </div>
            @endif
            <div class="d-flex justify-content-end mb-3">
                <button type="button" class="btn btn-primary me-2" onclick="openPopup()">
                    <i class="fas fa-plus"></i> Post Lowongan
                </button>
                @if(count($loker) >= 1)
                    <a href="{{ route('loker.manage') }}"  class="btn btn-primary">
                        <i class="fas fa-cog"></i> Manage Lowongan
                    </a>
                @endif
            </div>
        </div>

        <h4><b>Pekerjaan Populer</b></h4>

        <div class="row">
            <!-- Tabel Lowongan -->
            <div class="col-md-7">
                <div class="p-2">
                    @foreach($loker as $listing)
                        <x-listing-card :listing="$listing" />
                    @endforeach
                </div>
            </div> 
            <!-- Tabel Pengalaman Kerja -->
            <div class="col-md-5">
                <form id="filterForm" method="GET" action="{{ route('loker.index') }}">
                    
                    <h5><b>Pengalaman Kerja</b></h5>
                    <div class="border border-primary bg-light p-3 rounded mb-4">
                        @foreach ([
                            'Tanpa Pengalaman', 'Fresh Graduate', 'Minimal 1 Tahun',
                            'Minimal 2 Tahun', 'Minimal 3 Tahun', 'Lebih dari 3 Tahun'
                        ] as $pengalaman)
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="Pengalaman[]" value="{{ strtolower($pengalaman) }}" 
                                    {{ in_array(strtolower($pengalaman), array_map('strtolower', $selectedPengalaman)) ? 'checked' : '' }}>
                                <label class="form-check-label" style="font-size: 14px;">
                                    {{ $pengalaman }} ({{ $pengalamanCounts[strtolower($pengalaman)] ?? 0 }})
                                </label>
                            </div>
                        @endforeach
                    </div>

                    <h5><b>Tipe Pekerjaan</b></h5>
                    <div class="border border-primary bg-light p-3 rounded mb-4">
                        @foreach ([
                            'Freelance', 'Full Time', 'Part Time', 'Kontrak', 'Sementara'
                        ] as $tipeKerja)
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="TipeKerja[]" value="{{ strtolower($tipeKerja) }}" 
                                    {{ in_array(strtolower($tipeKerja), array_map('strtolower', $selectedTipeKerja)) ? 'checked' : '' }}>
                                <label class="form-check-label" style="font-size: 14px;"> 
                                    {{ $tipeKerja }} ({{ $tipeKerjaCounts[strtolower($tipeKerja)] ?? 0 }})
                                </label>
                            </div>
                        @endforeach
                    </div>
                </form>
            </div>
        </div>
        <div class="d-flex justify-content-end">
            {{ $loker->links('pagination::bootstrap-4') }}
        </div>
    </div>

    <!-- Include the create.blade.php content -->
    @include('alumni.loker.create')

    <script>
        document.querySelectorAll('input[name="Pengalaman[]"], input[name="TipeKerja[]"]').forEach(function(checkbox) {
            checkbox.addEventListener('change', function() {
                document.getElementById('filterForm').submit();
            });
        });

        function openPopup() {
            var popup = new bootstrap.Modal(document.getElementById('popup'), {
                keyboard: false
            });
            popup.show();
        }
        
        function closePopup() {
            var popup = bootstrap.Modal.getInstance(document.getElementById('popup'));
            popup.hide();
        }
    </script>
    <footer class="py-4 mt-auto">
        <div class="container-fluid px-4">
            <div class="d-flex align-items-center justify-content-between small">
                <div class="text-muted">Copyright &copy; Alumni</div>
                <div>
                    <a href="#" class="text-secondary">Privacy Policy</a>
                    &middot;
                    <a href="#" class="text-secondary">Terms &amp; Conditions</a>
                </div>
            </div>
        </div>
    </footer>
@endsection

