@extends('admin.layouts.main')
@section('title', 'Dashboard Admin')
@section('content')

<!-- Navbar -->
<nav class="sb-topnav navbar navbar-expand">
    <a class="navbar-brand" href="/admin">
        <img src="{{ asset('images/logo-sti.png') }}" alt="Logo TI" width="250">
        <img src="{{ asset('images/logo-udinus.png') }}" alt="Logo udinus" width="60">
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
<main class="container-border">
    <div class="container-fluid px-4 mt-3 mb-5">
        <h2><b>Dashboard Admin</b></h2>
    </div>
    <div class="row mt-5">
        <div class="col-md-6">
            <h3>Statistik Pekerjaan Alumni</h3>
            <div style="max-width: 800px; margin: auto;">
                <canvas id="alumniEmploymentChart" width="600" height="400"></canvas>
            </div>
        </div>
    </div>
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

<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
    document.addEventListener('DOMContentLoaded', function () {
        var ctx = document.getElementById('alumniEmploymentChart').getContext('2d');
        var alumniEmploymentChart = new Chart(ctx, {
            type: 'bar',
            data: {
                labels: ['Bekerja', 'Wiraswasta', 'Melanjutkan Pendidikan', 'Tidak Bekerja', 'Lainnya'],
                datasets: [{
                    label: 'Jumlah Alumni',
                    data: [50, 25, 30, 15, 20], // Data pekerjaan alumni
                    backgroundColor: [
                        'rgba(255, 99, 132, 0.2)',
                        'rgba(54, 162, 235, 0.2)',
                        'rgba(255, 206, 86, 0.2)',
                        'rgba(75, 192, 192, 0.2)',
                        'rgba(153, 102, 255, 0.2)'
                    ],
                    borderColor: [
                        'rgba(255, 99, 132, 1)',
                        'rgba(54, 162, 235, 1)',
                        'rgba(255, 206, 86, 1)',
                        'rgba(75, 192, 192, 1)',
                        'rgba(153, 102, 255, 1)'
                    ],
                    borderWidth: 1
                }]
            },
            options: {
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            }
        });

        
    });
</script>

@endsection
