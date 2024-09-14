@extends('admin.layouts.main')
@section('title', 'Pengumuman')
@section('content')
<!-- Navbar -->
<nav class="sb-topnav navbar navbar-expand">
    <a class="navbar-brand" href="/admin">
        <img src="{{ asset('images/logo-sti.png') }}" alt="Logo TI" width="250">
        <img src="{{ asset('images/logo-udinus.png') }}" alt="Logo udinus" width="55">
        <img src="{{ asset('images/logo-unggul.png') }}" alt="Logo udinus" width="40">
    </a>
    <form action="/pengumuman" class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0">
        <div class="input-group">
            <input class="form-control" type="text" placeholder="Search here..." aria-label="Search for..." name="NamaPerusahaan" aria-describedby="btnNavbarSearch"/>
            <button class="btn" id="btnNavbarSearch" type="submit"><i class="fas fa-search"></i></button>
        </div>
    </form>
    <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4">
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
        </li>
    </ul>
</nav>

<div class="container-border">
    <div class="container-fluid mt-3 mb-3 d-flex justify-content-between align-items-center">
        <h1><b>Kelola Pengumuman</b></h1>
        <button type="submit" class="btn btn-custom btn-primary me-2" data-bs-toggle="modal" data-bs-target="#dialogTambahPengumuman"
        data-bs-remote="{{ route('pengumuman.create') }}">
            <i class="fas fa-plus"></i> Tambah Pengumuman Baru
        </button>
    </div>
    <div class="card">
        <div class="table-container">
            <table class="table table-hover table-bordered text-center">
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Judul</th>
                        <th scope="col">Isi Pengumuman</th>
                        <th scope="col"colspan="2">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($pengumuman as $p)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $p->judul }}</td>
                            <td>{{ $p->isi }}</td>
                            <td style="text-align: center; vertical-align: middle;">
                                <button type="button" class="btn btn-primary me-2 text-white px-3 py-2 rounded-5"
                                    style="width: 100px; text-align: center;" data-bs-toggle="modal" data-bs-target="#dialogEditPengumuman"
                                    data-id="{{ $p->id }}" data-bs-remote="{{ route('pengumuman.edit', $p->id) }}">
                                    Edit
                                </button>
                            </td>
                            <td class="px-4 py-8 border-t border-b border-gray-300 text-lg centered-column">
                                <form action="{{ route('pengumuman.destroy', $p->id) }}" method="POST" style="display:inline;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger text-white px-3 py-2 rounded-5" style="width: 100px; text-align: center;" onclick="return confirm('Delete?')">Delete</button>
                                </form>
                            </td>
                        </tr>
                    @empty
                        <td colspan="9" class="text-center">
                            <div class="alert alert-warning">Data belum Tersedia.</div>
                        </td>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
    <div class="d-flex justify-content-end">
        {{ $pengumuman->links('pagination::bootstrap-4') }}
    </div>     
</div>

<!-- Modal for Create Pengumuman -->
<div class="modal fade" id="dialogTambahPengumuman" tabindex="-1" aria-labelledby="dialogTambahPengumumanLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
            <!-- Content will be loaded dynamically -->
        </div>
    </div>
</div>

<!-- Modal for Edit Pengumuman -->
<div class="modal fade" id="dialogEditPengumuman" tabindex="-1" aria-labelledby="dialogEditPengumumanLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
            <!-- Content will be loaded dynamically -->
        </div>
    </div>
</div>

<script>
    // Add event listeners to dynamically load content into modals
    document.querySelectorAll('[data-bs-toggle="modal"]').forEach(button => {
        button.addEventListener('click', event => {
            const target = button.getAttribute('data-bs-target');
            const url = button.getAttribute('data-bs-remote');
            
            fetch(url)
                .then(response => response.text())
                .then(html => {
                    document.querySelector(target + ' .modal-content').innerHTML = html;
                })
                .catch(error => {
                    console.error('Error fetching modal content:', error);
                });
        });
    });

</script>
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
