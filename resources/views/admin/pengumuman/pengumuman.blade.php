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
    <h1 class="mb-4">Kelola Pengumuman</h1>
    <button type="button" class="btn btn-primary me-2" 
        data-bs-toggle="modal" data-bs-target="#dialogTambahPengumuman"
        data-bs-remote="{{ route('pengumuman.create') }}">
        Tambah Pengumuman Baru
    </button>
    <div class="container-border">
        <table class="table table-bordered">
            <thead class="table-header">
            <th class="align-middle">No</th>
            <th class="align-middle">Judul</th>
            <th class="align-middle">Isi Pengumuman</th>
            <th class="align-middle" colspan="2">Aksi</th>
            </thead>
            <tbody>
                @foreach ($pengumuman as $p)
                    <tr class="border-gray-300">
                        <td class="px-4 py-8 border-t border-b border-gray-300 text-lg centered-column">{{ $loop->iteration }}</td>
                        <td class="px-4 py-8 border-t border-b border-gray-300 text-lg centered-column">{{ $p->judul }}</td>
                        <td class="px-4 py-8 border-t border-b border-gray-300 text-lg centered-column">{{ $p->isi }}</td>
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
                                <button type="submit" class="btn btn-danger text-white px-3 py-2 rounded-5" style="width: 100px; text-align: center;" onclick="return confirm('Apakah Anda yakin ingin menghapus pengumuman ini?')">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
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
@endsection
