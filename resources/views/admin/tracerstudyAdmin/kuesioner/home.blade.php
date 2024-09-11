@extends('admin.layouts.main')
@section('title', 'Tracerstudy Alumni')
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

    <!-- Content -->
    <div class="container">  
    <h1 style="text-align: center;">Tracerstudy Alumni</h1> <br>
    
    <!-- Chart container -->
     <div class="card-body">
     <div id="tracerstudyChart" class="w-100" style="height: 400px;"></div>
     </div>
    
    <div class="row g-4">
        <!-- Baris pertama dengan 4 kartu -->
        @php
            $cards1 = [
                ['icon' => 'fas fa-briefcase', 'title' => 'Bekerja Full Time', 'status' => 'status1', 'color' => '#5470c6'],
                ['icon' => 'fas fa-clock', 'title' => 'Bekerja Part Time', 'status' => 'status2', 'color' => '#91cc75'],
                ['icon' => 'fas fa-store', 'title' => 'Wiraswasta', 'status' => 'status3', 'color' => '#fac858'],
                ['icon' => 'fas fa-graduation-cap', 'title' => 'Melanjutkan Pendidikan', 'status' => 'status4', 'color' => '#ee6666']
            ];
        @endphp

        @foreach($cards1 as $card)
            <div class="col-xl-3 col-lg-4 col-md-6">
                <div class="card shadow-sm h-100">
                    <div class="card-body">
                        <div class="d-flex align-items-center mb-3">
                            <!-- Menggunakan style untuk warna background dan ikon -->
                            <div class="icon-circle text-white me-3" style="background-color: {{ $card['color'] }};">
                                <i class="{{ $card['icon'] }} fa-2x"></i> <!-- Ikon Font Awesome -->
                            </div>
                            <h5 class="card-title mb-0">{{ $card['title'] }}</h5>
                        </div>
                        <!-- Status -->
                        <h6 class="card-subtitle mb-2 text-muted">
                            <span class="badge" style="background-color: {{ $card['color'] }};">{{ $statusCounts[$card['status']] }} dari {{ $totalAlumni }} mahasiswa</span>
                        </h6>
                        <a href="{{ route('kuesionerAdmin.index', ['status' => $card['title']]) }}" class="stretched-link"></a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
    
    <div class="row g-4 mt-4">
        <!-- Baris kedua dengan 3 kartu -->
        @php
        $cards2 = [
            ['icon' => 'fas fa-search', 'title' => 'Tidak Bekerja Tetapi Sedang Mencari Pekerjaan', 'status' => 'status5', 'color' => '#73c0de'],
            ['icon' => 'fas fa-home', 'title' => 'Belum Memungkinkan Bekerja', 'status' => 'status6', 'color' => '#3ba272'],
            ['icon' => 'fas fa-heart', 'title' => 'Menikah/Mengurus Keluarga', 'status' => 'status7', 'color' => '#fc8452']
        ];
        @endphp

        @foreach($cards2 as $card)
            <div class="col-xl-4 col-lg-4 col-md-6">
                <div class="card shadow-sm h-100">
                    <div class="card-body">
                        <div class="d-flex align-items-center mb-3">
                            <!-- Menggunakan style untuk warna background dan ikon -->
                            <div class="icon-circle text-white me-3" style="background-color: {{ $card['color'] }};">
                                <i class="{{ $card['icon'] }} fa-2x"></i> <!-- Ikon Font Awesome -->
                            </div>
                            <h5 class="card-title mb-0">{{ $card['title'] }}</h5>
                        </div>
                        <!-- Status -->
                        <h6 class="card-subtitle mb-2 text-muted">
                            <span class="badge" style="background-color: {{ $card['color'] }};">{{ $statusCounts[$card['status']] }} dari {{ $totalAlumni }} mahasiswa</span>
                        </h6>
                        <a href="{{ route('kuesionerAdmin.index', ['status' => $card['title']]) }}" class="stretched-link"></a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>

    <!-- Footer -->
    <footer class="py-4 bg-light mt-auto">
        <div class="container-fluid">
            <div class="d-flex justify-content-between small">
                <div class="text-muted">&copy; 2023 Alumni</div>
                <div>
                    <a href="#" class="text-muted">Privacy Policy</a>
                    &middot;
                    <a href="#" class="text-muted">Terms & Conditions</a>
                </div>
            </div>
        </div>
    </footer>
    
    <!-- Custom Styles -->
    <style>
        .icon-circle {
    width: 70px; /* Ukuran lingkaran yang lebih besar */
    height: 60px;
    border-radius: 50%;
    display: flex;
    justify-content: center;
    align-items: center;
    background-color: inherit; /* Warna background dari PHP */
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1); /* Tambahkan bayangan agar lebih menarik */
    transition: transform 0.3s ease; /* Efek animasi pada hover */
}

.icon-circle i {
    font-size: 24px; /* Ukuran ikon */
}

.icon-circle:hover {
    transform: scale(1.1); /* Membuat ikon lebih besar saat dihover */
}
        .card:hover {
            transform: translateY(-5px);
            transition: all 0.3s ease;
            box-shadow: 0px 5px 15px rgba(0, 0, 0, 0.1);
        }
        .card-body {
            position: relative;
            z-index: 1;
        }
        .card::before {
            content: '';
            position: absolute;
            top: -10px;
            left: -10px;
            right: -10px;
            bottom: -10px;
            opacity: 0;
            z-index: 0;
            transition: opacity 0.3s ease;
        }
        .card:hover::before {
            opacity: 0.2;
        }
        .stretched-link::after {
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
        }
    </style>
@endsection

@section('scripts')
    <script>
        // Inisialisasi chart
        var chartDom = document.getElementById('tracerstudyChart');
        var myChart = echarts.init(chartDom);
        var option;

        // Data dari server (laravel)
        var statusCounts = @json($statusCounts); // Mendapatkan data dari controller

        // Transformasi data ke format yang sesuai dengan ECharts
        var chartData = Object.keys(statusCounts).map(function(key) {
            return { value: statusCounts[key], name: key };
        });

        option = {
            tooltip: {
                trigger: 'item'
            },
            legend: {
                top: 'buttom',
                left: 'center'
            },
            series: [
                {
                    name: 'Status',
                    type: 'pie',
                    radius: '55%',
                    data: chartData,
                    emphasis: {
                        itemStyle: {
                            shadowBlur: 10,
                            shadowOffsetX: 0,
                            shadowColor: 'rgba(0, 0, 0, 0.5)'
                        }
                    }
                }
            ]
        };

        // Menampilkan chart dengan opsi yang telah dibuat
        option && myChart.setOption(option);
    </script>
@endsection