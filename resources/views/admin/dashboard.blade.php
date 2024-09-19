@extends('admin.layouts.main')
@section('title', 'Dashboard Admin')
@section('content')

<!-- Navbar -->
<nav class="sb-topnav navbar navbar-expand">
    <a class="navbar-brand" href="{{ route('admin.index') }}">
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
    <h1 class="mb-3">Dashboard Admin</h1>
    <!-- menu admin -->
    <div class="row justify-content-center">
        <!-- Card 1 -->
        <div class="col-md-4 mb-3">
            <div class="card text-white shadow-sm h-100" style="background-color: #114D91; border-radius: 12px; min-height: 50px;">
                <div class="card-body d-flex justify-content-between align-items-center">
                    <div>
                        <h5 class="card-title">Tracerstudy</h5>
                        <a href="{{ route('kuesionerAdmin.home') }}" class="btn btn-light btn-sm mt-2">See Details <i class="fas fa-arrow-right"></i></a>
                    </div>
                    <i class="fas fa-graduation-cap fa-2x"></i>
                </div>
            </div>
        </div>
        <!-- Card 2 -->
        <div class="col-md-4 mb-3">
            <div class="card text-white shadow-sm h-100" style="background-color: #114D91; border-radius: 12px; min-height: 50px;">
                <div class="card-body d-flex justify-content-between align-items-center">
                    <div>
                        <h5 class="card-title">Data Alumni</h5>
                        <a href="{{ route('dataAlumni.index') }}" class="btn btn-light btn-sm mt-2">See Details <i class="fas fa-arrow-right"></i></a>
                    </div>
                    <i class="fas fa-users fa-2x"></i>
                </div>
            </div>
        </div>
        <!-- Card 3 -->
        <div class="col-md-4 mb-3">
            <div class="card text-white shadow-sm h-100" style="background-color: #114D91; border-radius: 12px; min-height: 50px;">
                <div class="card-body d-flex justify-content-between align-items-center">
                    <div>
                        <h5 class="card-title">Pengumuman</h5>
                        <a href="{{ route('pengumuman.index') }}" class="btn btn-light btn-sm mt-2">See Details <i class="fas fa-arrow-right"></i></a>
                    </div>
                    <i class="fas fa-info-circle fa-2x"></i>
                </div>
            </div>
        </div>
        <!-- Card 4 -->
        <div class="col-md-4 mb-3">
            <div class="card text-white shadow-sm h-100" style="background-color: #114D91; border-radius: 12px; min-height: 50px;">
                <div class="card-body d-flex justify-content-between align-items-center">
                    <div>
                        <h5 class="card-title">Akses Lowongan Kerja</h5>
                        <a href="{{ route('lokeradmin.index') }}" class="btn btn-light btn-sm mt-2">See Details <i class="fas fa-arrow-right"></i></a>
                    </div>
                    <i class="fas fa-book fa-2x"></i>
                </div>
            </div>
        </div>
        <!-- Card 5 -->
        <div class="col-md-4 mb-3">
            <div class="card text-white shadow-sm h-100" style="background-color: #114D91; border-radius: 12px; min-height: 50px;">
                <div class="card-body d-flex justify-content-between align-items-center">
                    <div>
                        <h5 class="card-title">Akses Lowongan Magang</h5>
                        <a href="{{ route('logangadmin.index') }}" class="btn btn-light btn-sm mt-2">See Details <i class="fas fa-arrow-right"></i></a>
                    </div>
                    <i class="fas fa-tasks fa-2x"></i>
                </div>
            </div>
        </div>
        <!-- card tgl hari ini -->
        <div class="col-md-4 mb-3">
            <div class="card shadow-sm h-100" style="background-color: #fff; border-radius: 12px; border: 1px solid #ddd; position: relative; overflow: hidden;">
                <!-- Hiasan background melingkar -->
                <div style="position: absolute; top: -40px; right: -40px; width: 120px; height: 120px; background-color: #114D91; border-radius: 50%; opacity: 0.1;"></div>
                <div class="card-body d-flex justify-content-between align-items-center">
                    <div>
                        <h5 class="card-title text-dark">Tanggal Hari Ini</h5>
                        <b><p class="card-text text-dark" id="currentDate"></p></b>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <h1 class="mt-4 mb-3">Statistik Alumni</h1>   
    <!-- konten kotak -->
    <div class="row justify-content">
        <!-- card info -->
        <div class="col-md-4 mb-3">
            <div class="d-flex">
                <!-- Card Total Alumni -->
                <div class="card text-white" style="background-color:#8EACCD; width: 50%; margin-right: 20px; height:169px">
                    <div class="card-header" style="font-weight: bold;">Total Alumni</div>
                    <div class="card-body">
                        <h5 class="card-title">1500</h5>
                        <p class="card-text">Active users in the system.</p>
                    </div>
                </div>

                <!-- Card Alumni -->
                <div class="card text-white " style="width: 50%; background-color:#78B7D0;">
                    <div class="card-header" style="font-weight: bold;">Alumni</div>
                    <div class="card-body">
                        <h5 class="card-title">$25,000</h5>
                        <p class="card-text">Sales in the current month.</p>
                    </div>
                </div>
            </div>
            <!-- Card Total Alumni -->
            <div class="card text-white" style="background-color:#508C9B; width: 100%;  margin-top:20px; height:169px" >
                <div class="card-header" style="font-weight: bold;">Total Alumni</div>
                <div class="card-body">
                    <h5 class="card-title">1500</h5>
                    <p class="card-text">Active users in the system.</p>
                </div>
            </div>
        </div>
        <!-- chart pie -->
        <div class="col-md-4 mb-3">
            <div class="card">
                <div class="card-body">
                    <div class="col-md-12">
                        <div id="kemampuanChart" style="height: 325px;"></div>
                    </div>
                </div>
            </div>
        </div>
        <!-- kalender -->
        <div class="col-md-4 mb-3">
            <div class="card" style="padding: 13px;">
                <div class="card-body">
                    <!-- Tombol navigasi bulan -->
                    <div style="display: flex; justify-content: space-between; margin-top: 15px; align-items: center; ">
                        <button onclick="prevMonth()" style="border: none;  background: transparent; font-size: 15px;">&#10094;</button>
                        <h5 id="monthYear" style="color: #114D91; font-weight: bold;"></h5>
                        <button onclick="nextMonth()" style="border: none; background: transparent; font-size: 15px;">&#10095;</button>
                    </div>                        
                    <table style="width: 100%; margin-top: 26px; ">
                        <thead>
                            <tr style="color: #114D91; font-weight: bold;">
                                <td>Min</td>
                                <td>Sen</td>
                                <td>Sel</td>
                                <td>Rab</td>
                                <td>Kam</td>
                                <td>Jum</td>
                                <td>Sab</td>
                            </tr>
                        </thead>
                        <tbody id="calendarBody"></tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <h1 class="mt-4 mb-3">Masa Tunggu Lulusan</h1> 
    <!-- chart -->
    <div class="row justify-content">
        <div class="col-md-4 mb-3">
            <div class="card">
                <div class="card-body">
                    <div class="col-md-12">
                        <canvas id="userChart" style="width: 100%; height: 200px;"></canvas>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <h1 class="mt-4 mb-3">Kesesuiaian Bidang Kerja</h1> 
    <!-- chart -->
    <div class="row justify-content">
        <div class="col-md-4 mb-3">
            <div class="card">
                <div class="card-body">
                    <div class="col-md-12">
                        <canvas id="userChart" style="width: 100%; height: 200px;"></canvas>
                    </div>
                </div>
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
@endsection

@section('scripts')
<!-- Bootstrap 5 JS & FontAwesome -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>

<script>
  var chartDom = document.getElementById('kemampuanChart');
  var myChart = echarts.init(chartDom);
  var option;

  option = {
    title: {
        text: 'Kemampuan Alumni',
        subtext: 'Tingkat Kepuasan pengguna',
        left: 'center',
        top:10
    },
    tooltip: {
      trigger: 'item'  // Menampilkan tooltip ketika item diklik
    },
    series: [
      {
        name: 'Kemampuan Alumni',   // Nama seri chart
        top: 60,
        type: 'pie',     // Tipe chart pie
        radius: ['40%', '86%'],  // Ukuran pie chart
        avoidLabelOverlap: false,
        itemStyle: {
          borderRadius: 10,     // Menambahkan border radius ke potongan pie
          borderColor: '#fff',  // Warna border
          borderWidth: 2        // Lebar border
        },
        label: {
          show: false,          // Tidak menampilkan label default
          position: 'center'
        },
        emphasis: {
          itemStyle: {
            shadowBlur: 10,
            shadowOffsetX: 0,
            shadowColor: 'rgba(0, 0, 0, 0.5)'
          },
          label: {
            show: true,         // Menampilkan label saat disorot
            fontSize: 20,       // Ukuran font label saat disorot
            fontWeight: 'bold'  // Membuat label menjadi bold saat disorot
          }
        },
        labelLine: {
          show: false           // Tidak menampilkan garis label
        },
        data: [                 // Data sales untuk masing-masing bulan
          { value: 12000, name: 'January', itemStyle: { color: '#201E43' } },  // Dark Navy Blue
          { value: 15000, name: 'February', itemStyle: { color: '#134B70' } }, // Deep Teal
          { value: 14000, name: 'March', itemStyle: { color: '#508C9B' } },    // Dusty Cyan
          { value: 13000, name: 'April', itemStyle: { color: '#EEEEEE' } },    // Light Gray
          { value: 20000, name: 'May', itemStyle: { color: '#C3D1D6' } },      // Muted Blue Gray
          { value: 10000, name: 'June', itemStyle: { color: '#8CA7B4' } },     // Pale Slate Blue
          { value: 8000, name: 'July', itemStyle: { color: '#647B89' } }       // Desaturated Steel Blue
        ]
      }
    ]
  };

  // Set option dan tampilkan chart
  option && myChart.setOption(option);
</script>

<script>
    // User Growth Chart
    var ctx2 = document.getElementById('userChart').getContext('2d');
    var userChart = new Chart(ctx2, {
        type: 'line',
        data: {
            labels: ['January', 'February', 'March', 'April', 'May'],
            datasets: [{
                label: 'New Users',
                data: [500, 800, 600, 700, 900],
                backgroundColor: 'rgba(153, 102, 255, 0.2)',
                borderColor: 'rgba(153, 102, 255, 1)',
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
</script>

<script>
    // Script untuk menampilkan tanggal
    function updateDate() {
        var today = new Date();
        var options = { weekday: 'long', year: 'numeric', month: 'long', day: 'numeric' };
        var dateString = today.toLocaleDateString('id-ID', options);
        document.getElementById("currentDate").innerHTML = dateString;
    }

    updateDate();
</script>
    
<script>
    //script bentuk kalendar
    const today = new Date();
    let currentMonth = today.getMonth();
    let currentYear = today.getFullYear();

    const monthYear = document.getElementById("monthYear");
    const calendarBody = document.getElementById("calendarBody");

    const months = ["Januari", "Februari", "Maret", "April", "Mei", "Juni", "Juli", "Agustus", "September", "Oktober", "November", "Desember"];

    function showCalendar(month, year) {
        // Set month and year header
        monthYear.innerHTML = months[month] + " " + year;

        // Clear previous calendar content
        calendarBody.innerHTML = "";

        // First day of the month
        const firstDay = (new Date(year, month)).getDay();
        // Number of days in the month
        const daysInMonth = 32 - new Date(year, month, 32).getDate();

        let date = 1;
        for (let i = 0; i < 6; i++) { // Calendar has 6 rows
            let row = document.createElement("tr");

            // Create each day in the row (7 columns for 7 days)
            for (let j = 0; j < 7; j++) {
                let cell = document.createElement("td");
                cell.style.padding = "8px";
                cell.style.textAlign = "center";
                cell.style.cursor = "pointer"; // Optional for interaction

                if (i === 0 && j < firstDay) {
                    // Empty cells before the first day of the month
                    let emptyCellText = document.createTextNode("");
                    cell.appendChild(emptyCellText);
                } else if (date > daysInMonth) {
                    // Empty cells after the last day of the month
                    break;
                } else {
                    // Fill the cells with the correct date
                    let cellText = document.createTextNode(date);
                    cell.appendChild(cellText);

                    // Highlight the current day
                    if (date === today.getDate() && year === today.getFullYear() && month === today.getMonth()) {
                        cell.style.backgroundColor = "#114D91";
                        cell.style.padding = "8px";
                        cell.style.color = "white";
                        cell.style.borderRadius = "100%";
                    }

                    date++;
                }
                row.appendChild(cell);
            }

            calendarBody.appendChild(row); // Add the row to the calendar
        }
    }

    function prevMonth() {
        currentMonth = (currentMonth === 0) ? 11 : currentMonth - 1;
        currentYear = (currentMonth === 11) ? currentYear - 1 : currentYear;
        showCalendar(currentMonth, currentYear);
    }

    function nextMonth() {
        currentMonth = (currentMonth === 11) ? 0 : currentMonth + 1;
        currentYear = (currentMonth === 0) ? currentYear + 1 : currentYear;
        showCalendar(currentMonth, currentYear);
    }

    showCalendar(currentMonth, currentYear);
</script>

@endsection
