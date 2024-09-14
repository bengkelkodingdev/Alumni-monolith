@extends('admin.layouts.main')
@section('title', 'Pekerjaan Populer')
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
  <style>
    .listing-row {
        display: flex;
        gap: 1rem;
        margin-bottom: 1rem;
    }

    .listing-column {
        flex: 1;
        display: flex;
        flex-direction: column;
        /* Ensure all columns are the same height */
        min-height: 200px; /* Set a fixed height or use a responsive value */
    }

    .listing-card {
        display: flex;
        flex-direction: column;
        flex: 1;
        /* Ensure the card takes the available space */
    }
</style>

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
            <a href="{{ route('lokeradmin.manage') }}" class="btn btn-primary">
                <i class="fas fa-cog"></i> Manage Lowongan
            </a>
        </div> 
    </div>

    <h4><b>Kerja</b></h4>

    <div style="display: flex; flex-direction: column; gap: 1rem;">
        <!-- Loop through the listings in pairs -->
        @for($i = 0; $i < count($lokerAdmin); $i += 2)
        <div class="listing-row">
            <!-- Left Column -->
            <div class="listing-column">
                <div class="listing-card">
                    <x-listingadmin-card :listing="$lokerAdmin[$i]" />
                </div>
            </div>

            <!-- Right Column -->
            @if(isset($lokerAdmin[$i + 1]))
            <div class="listing-column">
                <div class="listing-card">
                    <x-listingadmin-card :listing="$lokerAdmin[$i + 1]" />
                </div>
            </div>
            @else
            <!-- Empty Column for consistent layout -->
            <div class="listing-column">
                <div class="listing-card">
                    
                </div>
            </div>
            @endif
        </div>
        @endfor
    </div>

    <div class="modal fade" id="dialogTambahLoker" tabindex="-1" aria-labelledby="dialogTambahLokerLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">
                <!-- Content will be loaded dynamically -->
            </div>
        </div>
    </div>
    <div class="d-flex justify-content-end">
        {{ $lokerAdmin->links('pagination::bootstrap-4') }}
    </div>
</div>
@endsection
