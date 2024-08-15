@extends('alumni.layouts.main')
@section('title', 'CV')
@section('content')
    <!-- Tambahkan CSS untuk efek hover -->
    <style>
        a:hover i {
            transform: scale(1.2);
            color: #2980b9;
        }
        
        .card:hover {
            transform: translateY(-3px) scale(1.0); /* Mengurangi jarak perpindahan dan pembesaran */
            box-shadow: 0 8px 15px rgba(0, 0, 0, 0.15); /* Mengurangi efek bayangan */
            transition: transform 0.2s ease, box-shadow 0.2s ease; /* Menambahkan transisi yang lebih halus */
        }
        .table-borderless {
            border-collapse: collapse; /* Menghilangkan spasi antara sel */
        }
    </style>

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
    <main class="container-border">
        <div class="row">    
            <!-- akademik -->
            <div class="container">
                <div class="card" style="transition: transform 0.3s ease, box-shadow 0.3s ease;">
                    <div class="card-body">
                        <div class="d-flex align-items-center">
                            <h1 class="me-2 mb-0">Akademik</h1>
                            <a href="{{ route('academic.index') }}">
                                <i class="lni lni-pencil-alt text-primary" style="font-size: 1.5rem;"></i> <!-- text-primary menggunakan warna primer Bootstrap -->
                            </a>
                        </div>
                        <hr class="my-3" style="border-width: 3px; border-color: #000;">
                        @forelse ($academics as $academic)
                            <div style="padding: 15px; margin-bottom: 20px; border: 1px solid #ddd; border-radius: 8px; background-color: #f9f9f9;">
                                <p style="display: flex; justify-content: space-between; line-height: 1;">
                                    <span><strong>{{ $academic->nama_studi }}</strong> - {{ $academic->kota }}, {{ $academic->negara }}</span>
                                    <span>{{ $academic->tahun_masuk }} - {{ $academic->tahun_lulus }}</span>
                                </p>
                                <p style="line-height: 1;">{{ $academic->prodi }}, {{ $academic->ipk }}/4.00</p>
                                <p style="line-height: 1; text-align: justify;">{{ $academic->catatan }}</p>
                            </div>
                            @empty
                            <p style="text-align: center; padding: 15px; margin-bottom: 20px; border: 1px solid #ddd; border-radius: 8px; background-color: #f9f9f9;">Data belum tersedia.</p>
                        @endforelse
                        {{ $academics->links() }}          
                    </div>            
                </div>
            </div>
            <!-- pekerjaan -->
            <div class="container">
                <div class="card" style="transition: transform 0.3s ease, box-shadow 0.3s ease;">
                    <div class="card-body">
                        <div class="d-flex align-items-center">
                            <h1 class="me-2">Pekerjaan</h1>
                            <a href="{{ route('job.index') }}">
                                <i class="lni lni-pencil-alt text-primary" style="font-size: 1.5rem;"></i> <!-- text-primary menggunakan warna primer Bootstrap -->
                            </a>
                        </div>
                        <hr class="my-3" style="border-width: 3px; border-color: #000;">
                        @forelse ($jobs as $job)
                            <div style="padding: 15px; margin-bottom: 20px; border: 1px solid #ddd; border-radius: 8px; background-color: #f9f9f9;">
                                <p style="display: flex; justify-content: space-between; line-height: 1;">
                                    <span><strong>{{ $job->nama_job }}</strong> - {{ $job->kota }}, {{ $job->negara }}</span>
                                    <span>{{ $job->tahun_masuk }} - {{ $job->tahun_lulus }}</span>
                                </p>
                                <p style="line-height: 1;">{{ $job->jabatan_job }}</em></p>
                                <p style="line-height: 1; text-align: justify;">{{ $job->catatan }}</p>
                            </div>
                            @empty
                            <p style="text-align: center; padding: 15px; margin-bottom: 20px; border: 1px solid #ddd; border-radius: 8px; background-color: #f9f9f9;">Data belum tersedia.</p>
                        @endforelse
                        {{ $jobs->links() }}          
                    </div>            
                </div>
            </div><!-- magang -->
            <div class="container">
                <div class="card" style="transition: transform 0.3s ease, box-shadow 0.3s ease;">
                    <div class="card-body">
                        <div class="d-flex align-items-center">
                            <h1 class="me-2">Magang</h1>
                            <a href="{{ route('internship.index') }}">
                                <i class="lni lni-pencil-alt text-primary" style="font-size: 1.5rem;"></i> <!-- text-primary menggunakan warna primer Bootstrap -->
                            </a>
                        </div>
                        <hr class="my-3" style="border-width: 3px; border-color: #000;">
                        @forelse ($internships as $internship)
                            <div style="padding: 15px; margin-bottom: 20px; border: 1px solid #ddd; border-radius: 8px; background-color: #f9f9f9;">
                                <p style="display: flex; justify-content: space-between; line-height: 1;">
                                    <span><strong>{{ $internship->nama_intern }}</strong> - {{ $internship->kota }}, {{ $internship->negara }}</span>
                                    <span>{{ $internship->periode_masuk_intern }} - {{ $internship->periode_keluar_intern }}</span>
                                </p>
                                <p style="line-height: 1;">{{ $internship->jabatan_intern }}</em></p>
                                <p style="line-height: 1; text-align: justify;">{{ $internship->catatan }}</p>
                            </div>
                            @empty
                            <p style="text-align: center; padding: 15px; margin-bottom: 20px; border: 1px solid #ddd; border-radius: 8px; background-color: #f9f9f9;">Data belum tersedia.</p>
                        @endforelse
                        {{ $internships->links() }}          
                    </div>            
                </div>
            </div>
            <!-- organisasi -->
            <div class="container">
                <div class="card" style="transition: transform 0.3s ease, box-shadow 0.3s ease;">
                    <div class="card-body">
                        <div class="d-flex align-items-center">
                            <h1 class="me-2">Organisasi</h1>
                            <a href="{{ route('organization.index') }}">
                                <i class="lni lni-pencil-alt text-primary" style="font-size: 1.5rem;"></i> <!-- text-primary menggunakan warna primer Bootstrap -->
                            </a>
                        </div>
                        <hr class="my-3" style="border-width: 3px; border-color: #000;">
                        @forelse ($organizations as $organization)
                            <div style="padding: 15px; margin-bottom: 20px; border: 1px solid #ddd; border-radius: 8px; background-color: #f9f9f9;">
                                <p style="display: flex; justify-content: space-between; line-height: 1;">
                                    <span><strong>{{ $organization->nama_org }}</strong> - {{ $organization->kota }}, {{ $organization->negara }}</span>
                                    <span>{{ $organization->periode_masuk_org }} - {{ $organization->periode_keluar_org }}</span>
                                </p>
                                <p style="line-height: 1;">{{ $organization->jabatan_org }}</em></p>
                                <p style="line-height: 1; text-align: justify;">{{ $organization->catatan }}</p>
                            </div>
                            @empty
                            <p style="text-align: center; padding: 15px; margin-bottom: 20px; border: 1px solid #ddd; border-radius: 8px; background-color: #f9f9f9;">Data belum tersedia.</p>
                        @endforelse
                        {{ $organizations->links() }}          
                    </div>            
                </div>
            </div>
            <!-- penghargaan -->
            <div class="container">
                <div class="card" style="transition: transform 0.3s ease, box-shadow 0.3s ease;">
                    <div class="card-body">
                        <div class="d-flex align-items-center">
                            <h1 class="me-2">Penghargaan</h1>
                            <a href="{{ route('award.index') }}">
                                <i class="lni lni-pencil-alt text-primary" style="font-size: 1.5rem;"></i> <!-- text-primary menggunakan warna primer Bootstrap -->
                            </a>
                        </div>
                        <hr class="my-3" style="border-width: 3px; border-color: #000;">
                        @forelse ($awards as $award)
                            <div style="padding: 15px; margin-bottom: 20px; border: 1px solid #ddd; border-radius: 8px; background-color: #f9f9f9;">
                                <p style="display: flex; justify-content: space-between; line-height: 1;">
                                    <span><strong>{{ $award->nama_award }}</strong></span>
                                    <span>{{ $award->tahun_award }}</span>
                                </p>
                                <p style="line-height: 1;">{{ $award->institusi_award }}, {{ $award->tingkat_award }}</em></p>
                                <p style="line-height: 1; text-align: justify;">{{ $award->deskripsi_award }}</p>
                            </div>
                            @empty
                            <p style="text-align: center; padding: 15px; margin-bottom: 20px; border: 1px solid #ddd; border-radius: 8px; background-color: #f9f9f9;">Data belum tersedia.</p>
                        @endforelse
                        {{ $awards->links() }}          
                    </div>            
                </div>
            </div>
            <!-- sertifikasi dan lisensi -->
            <div class="container">
                <div class="card" style="transition: transform 0.3s ease, box-shadow 0.3s ease;">
                    <div class="card-body">
                        <div class="d-flex align-items-center">
                            <h1 class="me-2">Sertifikat dan Lisensi</h1>
                            <a href="{{ route('course.index') }}">
                                <i class="lni lni-pencil-alt text-primary" style="font-size: 1.5rem;"></i> <!-- text-primary menggunakan warna primer Bootstrap -->
                            </a>
                        </div>
                        <hr class="my-3" style="border-width: 3px; border-color: #000;">
                        @forelse ($courses as $course)
                            <div style="padding: 15px; margin-bottom: 20px; border: 1px solid #ddd; border-radius: 8px; background-color: #f9f9f9;">
                                <p style="display: flex; justify-content: space-between; line-height: 1;">
                                    <span><strong>{{ $course->nama_course }}</strong></span>
                                    <span>{{ $course->tahun_course }}</span>
                                </p>
                                <p style="line-height: 1;">{{ $course->institusi_course }}, {{ $course->tingkat_course }}</p>
                            </div>
                            @empty
                            <p style="text-align: center; padding: 15px; margin-bottom: 20px; border: 1px solid #ddd; border-radius: 8px; background-color: #f9f9f9;">Data belum tersedia.</p>
                        @endforelse
                        {{ $courses->links() }}          
                    </div>            
                </div>
            </div>
            <!-- kemampuan diri -->
            <div class="container">
                <div class="card" style="transition: transform 0.3s ease, box-shadow 0.3s ease;">
                    <div class="card-body">
                        <div class="d-flex align-items-center">
                            <h1 class="me-2">Kemampuan Diri</h1>
                            <a href="{{ route('skill.index') }}">
                                <i class="lni lni-pencil-alt text-primary" style="font-size: 1.5rem;"></i> <!-- text-primary menggunakan warna primer Bootstrap -->
                            </a>
                        </div>
                        <hr class="my-3" style="border-width: 3px; border-color: #000;">
                        @forelse ($skills as $skill)
                            <div style="padding: 15px; margin-bottom: 20px; border: 1px solid #ddd; border-radius: 8px; background-color: #f9f9f9;">
                                <div style="display: flex; justify-content: space-between; margin-bottom: 10px;">
                                    <span><strong>Kerjasama Tim:</strong> {{ $skill->kerjasama_skill }}</span>
                                    <span><strong>Keahlian di Bidang IT:</strong> {{ $skill->ahli_skill }}</span>
                                </div>
                                <div style="display: flex; justify-content: space-between; margin-bottom: 10px;">
                                    <span><strong>Kemampuan Berbahasa Inggris:</strong> {{ $skill->inggris_skill }}</span>
                                    <span><strong>Kemampuan Berkomunikasi:</strong> {{ $skill->komunikasi_skill }}</span>
                                </div>
                                <div style="display: flex; justify-content: space-between; margin-bottom: 10px;">
                                    <span><strong>Pengembangan Diri:</strong> {{ $skill->pengembangan_skill }}</span>
                                    <span><strong>Etos Kerja:</strong> {{ $skill->kepemimpinan_skill }}</span>
                                </div>
                                <div style="display: flex; justify-content: space-between;">
                                    <span><strong>Kerjasama Tim:</strong> {{ $skill->etoskerja_skill }}</span>
                                </div>
                            </div>
                        @empty
                            <p style="text-align: center; padding: 15px; margin-bottom: 20px; border: 1px solid #ddd; border-radius: 8px; background-color: #f9f9f9;">Data belum tersedia.</p>
                        @endforelse

                        {{ $skills->links() }}          
                    </div>            
                </div>
            </div>
        </div>
        <script>
            // Message with toastr
            document.addEventListener('DOMContentLoaded', function() {
                var successMessage = "{{ session('success') }}";
                var errorMessage = "{{ session('error') }}";

                if (successMessage) {
                    toastr.success(successMessage, 'BERHASIL!');
                } else if (errorMessage) {
                    toastr.error(errorMessage, 'GAGAL!');
                }
            });
        </script>
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