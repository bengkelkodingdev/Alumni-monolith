@extends('admin.layouts.main')
@section('title', 'Magang Populer')
@section('content')
  <!-- Navbar -->
  <nav class="sb-topnav navbar navbar-expand">
    <a class="navbar-brand" href="{{ route('admin') }}" >
        <img src="{{ asset('images/logo-sti.png') }}" alt="Logo TI" width="250">
        <img src="{{ asset('images/logo-udinus.png') }}" alt="Logo udinus" width="55">
        <img src="{{ asset('images/logo-unggul.png') }}" alt="Logo udinus" width="40">
    </a>
    <form action="{{ route('logangadmin.index') }}" class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0">
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
    <div class="container-fluid">
        <div class="d-flex flex-column mb-6 ml-5 w-100">
            @php
            if (count($logangAdmin) == 0) {
                echo '<div class="alert alert-warning" role="alert" style="text-align: left; width: 100%;">
                        No Lowongan Found. Silahkan isi lowongan.
                    </div>';
            }
            @endphp
            <div class="mb-2 d-flex justify-content-end w-100">
                <a href="{{ route('logangadmin.manage') }}" class="btn btn-primary">
                    <i class="fas fa-cog"></i> Manage Lowongan
                </a>
            </div>
        </div>

        <h1><b>Lowongan Magang</b></h1>

        <!-- Grid layout limited to 2 rows -->
        <div style="display: grid; grid-template-columns: repeat(2, 1fr); grid-auto-rows: 1fr; gap: 1rem; overflow-y: hidden;">
            <!-- Loop through the listings -->
            @for($i = 0; $i < count($logangAdmin); $i++)
            <div class="listing-card" style="display: flex; flex-direction: column; height: 100%; padding: 5px; border-radius: 5px;">
                <x-listingadminmagang-card :listingmagang="$logangAdmin[$i]" />
            </div>
            @endfor
        </div>

        <div class="modal fade" id="dialogTambahLogang" tabindex="-1" aria-labelledby="dialogTambahLogangLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-lg">
                <div class="modal-content">
                    <!-- Content will be loaded dynamically -->
                </div>
            </div>
        </div>

        <div class="d-flex justify-content-end">
            {{ $logangAdmin->links('pagination::bootstrap-4') }}
        </div>
    </div>
</div>
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
