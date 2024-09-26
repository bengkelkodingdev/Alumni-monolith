@extends('admin.layouts.main')
@section('title', 'Pengumuman')
@section('content')
<!-- Navbar -->
<nav class="sb-topnav navbar navbar-expand">
    <a class="navbar-brand" href="{{ route('admin') }}">
        <img src="{{ asset('images/logo-sti.png') }}" alt="Logo TI" width="250">
        <img src="{{ asset('images/logo-udinus.png') }}" alt="Logo udinus" width="55">
        <img src="{{ asset('images/logo-unggul.png') }}" alt="Logo udinus" width="40">
    </a>
    <form action="{{ route('pengumuman.index') }}" class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0">
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
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-hover" id="table-log" style="width: 100%;">
                    <thead class="table-light text-center">
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
                                <td class="text-center">{{ $loop->iteration }}</td>
                                <td>{{ $p->judul }}</td>
                                <td>{{ $p->isi }}</td>
                                <td style="text-align: center; vertical-align: middle;">
                                    <button type="button" class="btn btn-outline-warning btn-sm" data-bs-toggle="modal" data-bs-target="#dialogEditPengumuman"
                                        data-id="{{ $p->id }}" data-bs-remote="{{ route('pengumuman.edit', $p->id) }}">
                                        <i class="far fa-edit"></i>
                                    </button>
                                    <form onsubmit="return confirm('Apakah Anda yakin ingin menghapus data ini?');" action="{{ route('pengumuman.destroy', $p->id) }}" method="POST" style="display:inline;"></form>
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit"  class="btn btn-outline-danger btn-sm">
                                            <i class="fas fa-trash"></i>
                                        </button>
                                    </form>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="4" class="text-center">
                                    <div class="alert alert-light">Data belum tersedia.</div>
                                </td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
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
<!-- ini untuk edit hapus -->
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

<!-- ini untuk datatables -->
<script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.11.5/js/dataTables.bootstrap5.min.js"></script>
<script src="https://cdn.datatables.net/buttons/2.2.2/js/dataTables.buttons.min.js"></script>
<script src="https://cdn.datatables.net/buttons/2.2.2/js/buttons.bootstrap5.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
<script src="https://cdn.datatables.net/buttons/2.2.2/js/buttons.html5.min.js"></script>
<script src="https://cdn.datatables.net/buttons/2.2.2/js/buttons.print.min.js"></script>
<script src="https://cdn.datatables.net/responsive/2.2.9/js/dataTables.responsive.min.js"></script>
<script>
$('#table-log').DataTable({
    responsive: true,
    paging: true,
    searching: true,
    autoWidth: false,
    lengthMenu: [[10, 15, 25, 50, 100], [10, 15, 25, 50, 100]], // Menentukan pilihan untuk jumlah entri yang ditampilkan
    columnDefs: [
        { width: "10%", targets: 0 },
        { width: "20%", targets: 1 },
        { width: "60%", targets: 2 },
        { width: "10%", targets: 3 },
    ],
    dom: 'Bfrtip',
    buttons: [
        {
            extend: 'copyHtml5',
            text: 'Salin',
            className: 'btn btn-primary btn-sm'
        },
        {
            extend: 'excelHtml5',
            text: 'Ekspor ke Excel',
            className: 'btn btn-success btn-sm',
            exportOptions: {
                columns: ':not(:last-child)' // Mengecualikan kolom terakhir (Aksi)
            }
        },
        {
            extend: 'print',
            text: 'Cetak',
            className: 'btn btn-info btn-sm',
            exportOptions: {
                columns: ':not(:last-child)' // Mengecualikan kolom terakhir (Aksi)
            }
        }
    ],
    language: {
        lengthMenu: "Tampilkan _MENU_ data per halaman",
        zeroRecords: "Tidak ada data yang ditemukan",
        info: "Menampilkan _PAGE_ dari _PAGES_ halaman",
        infoEmpty: "Data tidak tersedia",
        infoFiltered: "(difilter dari total _MAX_ data)",
        paginate: {
            first: "Awal",
            last: "Akhir",
            next: "Berikutnya",
            previous: "Sebelumnya"
        }
    }
});
</script>
@endsection