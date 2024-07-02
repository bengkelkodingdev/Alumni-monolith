@extends('alumni.layouts.main')
@section('title', 'Quiz')
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
    <div class="container-border">
        <div class="container-fluid mt-3 mb-3 d-flex justify-content-between align-items-center">
            <h2><b>Course</b></h2>
            <button type="submit" class="btn btn-custom btn-primary me-2" data-bs-toggle="modal" data-bs-target="#dialogTambahCourse">
                <i class="fas fa-plus"></i> Tambah
            </button>
        </div>

        <div class="table-container table-logbook">
            <table class="table table-hover table-bordered">
                <thead>
                    <tr>
                        <th scope="col">Nama Course</th>
                        <th scope="col">Nama Institusi Course</th>
                        <th scope="col">Tingkat Course</th>
                        <th scope="col">Tahun Course</th>
                        <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($courses as $course)
                        <tr class="text-center">
                            <td>{{ $course->nama_course }}</td>
                            <td>{{ $course->institusi_course }}</td>
                            <td>{{ $course->tingkat_course }}</td>
                            <td>{{ $course->tahun_course }}</td>
                            <td class="text-center">
                                <div class="d-inline-flex gap-2">
                                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#dialogEditCourse" data-id="{{ $course->id }}">
                                        <i class="far fa-edit"></i>
                                    </button>
                                    <form onsubmit="return confirm('Apakah Anda Yakin ?');" action="{{ route('course.destroy', $course->id) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger">
                                            <i class="fas fa-trash"></i>
                                        </button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                    @empty
                        <td colspan="9" class="text-center">
                            <div class="alert alert-warning mb-0">Data belum Tersedia.</div>
                        </td>
                    @endforelse
                </tbody>
            </table>
        </div>
        {{ $courses->links() }}
        {{-- <nav aria-label="pageNavigationLogbook">
            <ul class="pagination justify-content-end">
                <li class="page-item disabled">
                    <a class="page-link" href="#" tabindex="-1">Previous</a>
                </li>
                <li class="page-item"><a class="page-link active" href="#">1</a></li>
                <li class="page-item"><a class="page-link" href="#">2</a></li>
                <li class="page-item"><a class="page-link" href="#">3</a></li>
                <li class="page-item">
                    <a class="page-link" href="#">Next</a>
                </li>
            </ul>
        </nav> --}}      
    </div>
    
    <!--Dialog Tambah Logbook-->
    @include('alumni.quiz.course.create')

    <!--Dialog Edit Logbook-->
    @include('alumni.quiz.course.edit')

    <!--Dialog Info Logbook-->

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