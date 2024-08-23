@extends('admin.layouts.main')
@section('title', 'Pengumuman')
@section('content')
    <style>
        main {
            display: flex;
            flex-direction: column;
        }
        .pengumuman-container {
            display: grid;
            grid-template-columns: 1fr 1fr 1fr;
            gap: 10px;
        }
        .announcement-item {
            background-color: white;
            padding: 15px;
            margin-bottom: 10px;
            border-radius: 10px;
            box-shadow: 0 2px 5px rgba(0,0,0,0.1);
        }
        .btn-look {
            color: white;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }
        .btn-look:hover {
            background-color: #737578;
        }
        .btn-look {
            background-color: #007bff;
        }
        .d-flex.justify-content-between {
            align-items: center;
        }
        .modal-footer {
            display: flex;
            justify-content: space-between;
            width: 100%;
        }
        .pengumuman-container .announcement-item:nth-last-child(1):nth-child(odd) {
            grid-column: span 3;
        }
    </style>

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
    <body>
    <div class="wrapper d-flex flex-column min-vh-100">
        <main class="container">
            <div class="container-fluid px-4">
                <h1 class="mt-2"><b>Daftar Kegiatan</b></h1>

                <!-- Success and Error Messages -->
                @if(session('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                @endif

                @if($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
            </div>

            <div class="row m-3">
                <div class="d-flex justify-content-between pb-3">
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal" style="background-color:green; border: 1px solid green;">
                        Tambah Jadwal
                    </button>
                </div>
                <div class="pengumuman-container">
                    @foreach($pengumuman as $peng)
                        <div class="card text-white mb-2 mt-2" id="card-view">
                            <div class="card-body">
                                <h5><b>{{ $peng->eventName }}</b></h5>
                                <h6>{{ $peng->mentor }}</h6>
                                <h6>{{ \Carbon\Carbon::parse($peng->dateStart)->format('d-m-Y') }}</h6>
                            </div>
                            <div class="card-footer d-flex align-items-center justify-content-between">
                                <a class="small text-white stretched-link" data-bs-toggle="modal"
                                   data-bs-target="#lookModal{{ $peng->id }}">See
                                    Details</a>
                                <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                            </div>
                        </div>
                        <!-- Modal -->
                        <div class="modal fade" id="lookModal{{ $peng->id }}" tabindex="-1"
                             aria-labelledby="lookModalLabel{{ $peng->id }}" aria-hidden="true">
                            <div class="modal-dialog modal-lg">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="lookModalLabel{{ $peng->id }}">Detail Pengumuman</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <form action="{{ route('announcements.update', ['id' => $peng->id]) }}" method="POST">
                                            @csrf
                                            @method('PUT')
                                            <input type="hidden" name="id" value="{{ $peng->id }}">
                                            <div class="form-group">
                                                <label for="eventName">Nama Event:</label>
                                                <input type="text" class="form-control" id="eventName" name="eventName" value="{{ $peng->eventName }}">
                                            </div>
                                            <div class="form-group">
                                                <label for="description">Deskripsi:</label>
                                                <input type="text" class="form-control" id="description" name="description" value="{{ $peng->description }}">
                                            </div>
                                            <div class="form-group">
                                                <label for="dateStart">Tanggal Mulai:</label>
                                                <input type="date" class="form-control" id="dateStart" name="dateStart" value="{{ $peng->dateStart }}">
                                            </div>
                                            <div class="form-group">
                                                <label for="dateEnd">Tanggal Selesai:</label>
                                                <input type="date" class="form-control" id="dateEnd" name="dateEnd" value="{{ $peng->dateEnd }}">
                                            </div>
                                            <div class="form-group">
                                                <label for="time">Waktu:</label>
                                                <input type="time" class="form-control" id="time" name="time" value="{{ $peng->time ? \Carbon\Carbon::parse($peng->time)->format('H:i') : '' }}" placeholder="--:--">
                                            </div>
                                            <div class="form-group">
                                                <label for="location">Lokasi:</label>
                                                <input type="text" class="form-control" id="location" name="location" value="{{ $peng->location }}">
                                            </div>
                                            <div class="form-group">
                                                <label for="mentor">Mentor:</label>
                                                <input type="text" class="form-control" id="mentor" name="mentor" value="{{ $peng->mentor }}">
                                            </div>
                                            <div class="modal-footer d-flex justify-content-between">
                                                <button type="submit" class="btn btn-primary">Simpan</button>
                                                <button type="button" class="btn btn-danger" onclick="event.preventDefault(); document.getElementById('delete-form-{{ $peng->id }}').submit();">Hapus</button>
                                            </div>
                                        </form>
                                        <form id="delete-form-{{ $peng->id }}" action="{{ route('announcements.destroy', ['id' => $peng->id]) }}" method="POST" style="display: none;">
                                            @csrf
                                            @method('DELETE')
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </main>

        <footer class="py-4 mt-auto">
            <div class="container-fluid px-4">
                <div class="d-flex align-items-center justify-content-between small">
                    <div class="text-muted">Copyright &copy; Bimbingan Karir</div>
                    <div>
                        <a href="#" class="text-secondary">Privacy Policy</a>
                        &middot;
                        <a href="#" class="text-secondary">Terms &amp; Conditions</a>
                    </div>
                </div>
            </div>
        </footer>
    </div>

    <!-- Modal Tambah Pengumuman -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Tambah Pengumuman</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="{{ route('announcements.store') }}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="eventName">Nama Event:</label>
                            <input type="text" class="form-control" id="eventName" name="eventName">
                        </div>
                        <div class="form-group">
                            <label for="description">Deskripsi:</label>
                            <input type="text" class="form-control" id="description" name="description">
                        </div>
                        <div class="form-group">
                            <label for="dateStart">Tanggal Mulai:</label>
                            <input type="date" class="form-control" id="dateStart" name="dateStart">
                        </div>
                        <div class="form-group">
                            <label for="dateEnd">Tanggal Selesai:</label>
                            <input type="date" class="form-control" id="dateEnd" name="dateEnd">
                        </div>
                        <div class="form-group">
                            <label for="time">Waktu:</label>
                            <input type="time" class="form-control" id="time" name="time">
                        </div>
                        <div class="form-group">
                            <label for="location">Lokasi:</label>
                            <input type="text" class="form-control" id="location" name="location">
                        </div>
                        <div class="form-group">
                            <label for="mentor">Mentor:</label>
                            <input type="text" class="form-control" id="mentor" name="mentor">
                        </div>
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-primary">Simpan</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    </body>
@endsection