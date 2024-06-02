<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>TracerStudy</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- Include toastr CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
    <!-- Include jQuery (diperlukan oleh toastr) -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <!-- Include toastr JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
    <style>
        body {
            background-color: #EFF7FF;
            color: #000000;
        }
        .btn-custom {
            background-color: #F68955;
            border: none;
            color: #FFFFFF;
        }
        .btn-custom:hover {
            background-color: #e67842;
        }
        .card {
            border: none;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            background-color: #FFFFFF;
        }
        .form{
            border: 2px solid #FFDFD0;
            padding: 15px;
            margin-top: 10px;
            border-radius: 10px;
        }
        .table th {
            background-color: #0853A6;
            color: #FFFFFF;
            text-align: center;
        }
        .table-hover tbody tr:hover {
            background-color: #e8f4fd;
        }
        .pagination .page-link {
            color: #0853A6;
        }
        .pagination .page-item.active .page-link {
            background-color: #0853A6;
            border-color: #0853A6;
        }
        .container {
            padding-top: 50px;
        }
        .table th, .table td {
            vertical-align: middle;
        }
        h1 {
            color: #F68955;
        }
    </style>
</head>
<body>
    <!-- academic -->
    <div class="container">
        <div class="card">
            <div class="card-body">
                <div class="d-flex justify-content-between align-items-center mb-3">
                    <b><h1>Academic</h1></b>
                    <a href="{{ route('academic.index') }}" class="btn btn-md btn-custom">EDIT</a>
                </div>
                <div class="form" style="overflow-x: auto">
                    <table class="table table-hover table-bordered">
                        <thead>
                            <tr>
                                <th scope="col">NIM</th>
                                <th scope="col">Nama</th>
                                <th scope="col">Email</th>
                                <th scope="col">IPK</th>
                                <th scope="col">Judul Skripsi</th>
                                <th scope="col">Dosen Wali</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($academics as $academic)
                                <tr>
                                    <td>{{ $academic->nim }}</td>
                                    <td>{{ $academic->nama_mhs }}</td>
                                    <td>{{ $academic->email }}</td>
                                    <td>{{ $academic->ipk }}</td>
                                    <td>{{ $academic->judul_skripsi }}</td>
                                    <td>{{ $academic->dosen_wali }}</td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="6" class="text-center alert alert-warning">Data belum Tersedia.</td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                    {{ $academics->links() }}   
                </div>             
            </div>            
        </div>
    </div>

    <!-- job -->
    <div class="container">
        <div class="card">
            <div class="card-body">
                <div class="d-flex justify-content-between align-items-center mb-3">
                    <b><h1>Job</h1></b>
                    <a href="{{ route('job.index') }}" class="btn btn-md btn-custom">EDIT</a>
                </div>
                <div class="form" style="overflow-x: auto">
                <table class="table table-hover table-bordered">
                    <thead>
                        <tr>
                            <th scope="col">Nama Instansi</th>
                            <th scope="col">Periode Masuk</th>
                            <th scope="col">Periode Keluar</th>
                            <th scope="col">Alamat Instansi</th>                             
                            <th scope="col">Website</th>
                            <th scope="col">Jenis Pekerjaan</th>
                            <th scope="col">Jabatan</th>    
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($jobs as $job)
                            <tr>
                                <td>{{ $job->nama_job }}</td>
                                <td>{{ $job->periode_masuk_job }}</td>
                                <td>{{ $job->periode_keluar_job }}</td>
                                <td>{{ $job->alamat_job }}</td>
                                <td>{{ $job->link_job }}</td>
                                <td>{{ $job->jns_job }}</td>
                                <td>{{ $job->jabatan_job }}</td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="7" class="text-center alert alert-warning">Data belum Tersedia.</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
                {{ $jobs->links() }} 
                </div>               
            </div>
            
        </div>
    </div>

    <!-- internship -->    
    <div class="container">
        <div class="card">
            <div class="card-body">
                <div class="d-flex justify-content-between align-items-center mb-3">
                    <b><h1>Internship</h1></b>
                    <a href="{{ route('internship.index') }}" class="btn btn-md btn-custom">EDIT</a>
                </div>
                <div class="form" style="overflow-x: auto">
                <table class="table table-hover table-bordered">
                    <thead>
                        <tr>
                            <th scope="col">Nama Instansi</th>
                            <th scope="col">Periode</th>
                            <th scope="col">Alamat Instansi</th>                               
                            <th scope="col">Website</th>
                            <th scope="col">Jenis Pekerjaan</th>
                            <th scope="col">Jabatan</th> 
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($internships as $internship)
                            <tr>
                                <td>{{ $internship->nama_intern }}</td>
                                <td>{{ $internship->periode_masuk_intern }} / {{ $internship->periode_keluar_intern }}</td>
                                <td>{{ $internship->alamat_intern }}</td>
                                <td>{{ $internship->link_intern }}</td>
                                <td>{{ $internship->jns_intern }}</td>
                                <td>{{ $internship->jabatan_intern }}</td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="6" class="text-center alert alert-warning">Data belum Tersedia.</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
                {{ $internships->links() }}     
                </div>           
            </div>
            
        </div>
    </div>

    <!-- organization -->
    <div class="container">
        <div class="card">
            <div class="card-body">
                <div class="d-flex justify-content-between align-items-center mb-3">
                    <b><h1>Organization</h1></b>
                    <a href="{{ route('organization.index') }}" class="btn btn-md btn-custom">EDIT</a>
                </div>
                <div class="form" style="overflow-x: auto">
                <table class="table table-hover table-bordered">
                    <thead>
                        <tr>
                            <th scope="col">Nama Organisasi</th>
                            <th scope="col">Periode Organisasi</th>                
                            <th scope="col">Website Organisasi</th>
                            <th scope="col">Tingkat Organisasi</th>
                            <th scope="col">Jenis Organisasi</th>
                            <th scope="col">Jabatan Organisasi</th>  
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($organizations as $organization)
                            <tr>
                                <td>{{ $organization->nama_org }}</td>
                                <td>{{ $organization->periode_org }}</td>
                                <td>{{ $organization->link_org }}</td>
                                <td>{{ $organization->tingkat_org }}</td>
                                <td>{{ $organization->jns_org }}</td>
                                <td>{{ $organization->jabatan_org }}</td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="6" class="text-center alert alert-warning">Data belum Tersedia.</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
                {{ $organizations->links() }}    
                </div>            
            </div>
            
        </div>
    </div>

    <!-- award -->
    <div class="container">
        <div class="card">
            <div class="card-body" style="overflow-x: auto">
                <div class="d-flex justify-content-between align-items-center mb-3">
                    <b><h1>Award</h1></b>
                    <a href="{{ route('award.index') }}" class="btn btn-md btn-custom">EDIT</a>
                </div>
                <div class="form">
                <table class="table table-hover table-bordered">
                    <thead>
                        <tr>
                            <th scope="col">Nama Award</th>
                            <th scope="col">Nama Institusi Award</th>
                            <th scope="col">Tingkat Award</th>
                            <th scope="col">Tahun Award</th>
                            <th scope="col">Deskripsi Award</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($awards as $award)
                        <tr>
                            <td>{{ $award->nama_award }}</td>
                            <td>{{ $award->institusi_award }}</td>
                            <td>{{ $award->tingkat_award }}</td>
                            <td>{{ $award->tahun_award }}</td>
                            <td>{{ $award->deskripsi_award }}</td>
                        </tr>
                        @empty
                            <tr>
                                <td colspan="5" class="text-center alert alert-warning">Data belum Tersedia.</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
                {{ $awards->links() }}      
                </div>          
            </div>
            
        </div>
    </div>
    
    <!-- course -->
    <div class="container">
        <div class="card">
        <div class="card-body" style="overflow-x: auto">
                <div class="d-flex justify-content-between align-items-center mb-3">
                    <b><h1>Course</h1></b>
                    <a href="{{ route('course.index') }}" class="btn btn-md btn-custom">EDIT</a>
                </div>
                <div class="form" style="overflow-x: auto">
                <table class="table table-hover table-bordered">
                    <thead>
                        <tr>
                            <th scope="col">Nama Course</th>
                            <th scope="col">Nama Institusi Course</th>
                            <th scope="col">Tingkat Course</th>
                            <th scope="col">Tahun Course</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($courses as $course)
                            <tr>
                                <td>{{ $course->nama_course }}</td>
                                <td>{{ $course->institusi_course }}</td>
                                <td>{{ $course->tingkat_course }}</td>
                                <td>{{ $course->tahun_course }}</td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="4" class="text-center alert alert-warning">Data belum Tersedia.</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
                {{ $courses->links() }}  
                </div>              
            </div>
        </div>
    </div>

    <!-- skill -->
    <div class="container">
        <div class="card">
            <div class="card-body" style="overflow-x: auto">
                <div class="d-flex justify-content-between align-items-center mb-3">
                    <b><h1>Skill</h1></b>
                    <a href="{{ route('skill.index') }}" class="btn btn-md btn-custom">EDIT</a>
                </div>
                <div class="form" style="overflow-x: auto">
                    <table class="table table-hover table-bordered">
                        <thead>
                            <tr>
                                <th scope="col">Kerjasama Tim</th>
                                <th scope="col">Keahlian di Bidang IT</th>
                                <th scope="col">Kemampuan Berbahasa Inggris</th>
                                <th scope="col">Kemampuan Berkomunikasi</th>
                                <th scope="col">Pengembangan Diri</th>
                                <th scope="col">Kepemimpinan</th>
                                <th scope="col">Etos Kerja</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($skills as $skill)
                            <tr>
                                <td>{{ $skill->kerjasama_skill }}</td>
                                <td>{{ $skill->ahli_skill }}</td>
                                <td>{{ $skill->inggris_skill }}</td>
                                <td>{{ $skill->komunikasi_skill }}</td>
                                <td>{{ $skill->pengembangan_skill }}</td>
                                <td>{{ $skill->kepemimpinan_skill }}</td>
                                <td>{{ $skill->etoskerja_skill }}</td>
                            </tr>
                            @empty
                                <tr>
                                    <td colspan="7" class="text-center alert alert-warning">Data belum Tersedia.</td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
                {{ $skills->links() }}                
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
</body>
</html>