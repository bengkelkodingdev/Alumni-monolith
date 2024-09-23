@extends('admin.layouts.main')
@section('title', 'Statistik Alumni')
@section('content')
    <!-- Navbar -->
    <nav class="sb-topnav navbar navbar-expand">
        <a class="navbar-brand" href="{{ route('admin') }}" >
            <img src="{{ asset('images/logo-sti.png') }}" alt="Logo TI" width="250">
            <img src="{{ asset('images/logo-udinus.png') }}" alt="Logo udinus" width="55">
            <img src="{{ asset('images/logo-unggul.png') }}" alt="Logo udinus" width="40">
        </a>
        <form action="{{ route('statistik.index') }}" class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0">
            <div class="input-group">
                <input class="form-control" type="text" placeholder="Search here..." aria-label="Search for..." name="NamaPerusahaan" aria-describedby="btnNavbarSearch"/>
                <button class="btn" id="btnNavbarSearch" type="submit"><i class="fas fa-search"></i></button>
            </div>
        </form>
        <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4">
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button"
                data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
            </li>
        </ul>
    </nav>
    
    <div class="container">
        <div class="d-flex justify-content-between align-items-center mt-3 mb-3">
            <h1>Statistik Jumlah Lulusan Alumni</h1>
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#dialogTambahStatistik">
                <i class="fas fa-plus"></i> Tambah
            </button>
        </div>
        
        <div class="card">
            <div class="card-body">
                <h5 class="card-title text-muted">Statistik Alumni</h5>
                <div class="table-responsive">
                    <table class="table table-hover" id="table-log" style="width: 100%;">
                        <thead class="table-light">
                            <tr>
                                <th class="text-center">Tahun Lulus</th>
                                <th class="text-center">Total Alumni</th>
                                <th class="text-center">Alumni Terdeteksi</th>
                                <th class="text-center">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($statistiks as $statistik)
                                <tr>
                                    <td class="text-center align-middle">{{ $statistik->tahun_lulus }}</td>
                                    <td class="text-center align-middle">{{ $statistik->alumni_total }}</td>
                                    <td class="text-center align-middle">{{ $statistik->alumni_terlacak }}</td>
                                    <td class="text-center align-middle">
                                        <div class="d-flex justify-content-center gap-2">
                                            <button type="button" class="btn btn-outline-warning btn-sm" data-bs-toggle="modal" data-bs-target="#dialogEditStatistik{{ $statistik->id }}">
                                                <i class="far fa-edit"></i>
                                            </button>
                                            <form onsubmit="return confirm('Apakah Anda yakin ingin menghapus data ini?');" action="{{ route('statistik.destroy', $statistik->id) }}" method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-outline-danger btn-sm">
                                                    <i class="fas fa-trash"></i>
                                                </button>
                                            </form>
                                        </div>
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
    
    <!-- Modal Tambah Statistik -->
    @include('admin.statistik.create')

    <!-- Modal Edit Statistik -->
    @foreach ($statistiks as $statistik)
        @include('admin.statistik.edit', ['statistik' => $statistik])
    @endforeach

    <footer class="footer mt-auto">
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
<script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.11.5/js/dataTables.bootstrap5.min.js"></script>
<script src="https://cdn.datatables.net/buttons/2.2.2/js/dataTables.buttons.min.js"></script>
<script src="https://cdn.datatables.net/buttons/2.2.2/js/buttons.bootstrap5.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
<script src="https://cdn.datatables.net/buttons/2.2.2/js/buttons.html5.min.js"></script>
<script src="https://cdn.datatables.net/buttons/2.2.2/js/buttons.print.min.js"></script>
<script src="https://cdn.datatables.net/responsive/2.2.9/js/dataTables.responsive.min.js"></script>



<script>
    $(document).ready(function () {
        $('#table-log').DataTable({
            responsive: true,
            paging: true,
            searching: true,
            autoWidth: false,
            lengthMenu: [10, 15, 25, 50, 100], // Menentukan pilihan untuk jumlah entri yang ditampilkan
            columnDefs: [
                { width: "30%", targets: 0 },
                { width: "30%", targets: 1 },
                { width: "30%", targets: 2 },
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
                    className: 'btn btn-success btn-sm'
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
                search: "Cari:",
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
    });
</script>
@endsection