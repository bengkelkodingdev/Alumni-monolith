@extends('admin.layouts.main')
@section('title', 'Data Alumni')
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

<!-- content -->
<main class="container">
    <h1>Data Alumni</h1>
    <table class="table">
        <thead>
            <tr>
                <th>Nama Alumni</th>
                <th>NIM</th>
                <th>Email</th>
                <th>No HP</th>
            </tr>
        </thead>
        <tbody>
            @foreach($alumniData as $alumni)
                <tr>
                    <td>{{ $alumni->nama_alumni }}</td>
                    <td>{{ $alumni->nim }}</td>
                    <td>{{ $alumni->email }}</td>
                    <td>{{ $alumni->no_hp }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</main>

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
