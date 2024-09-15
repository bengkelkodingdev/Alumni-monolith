@extends('admin.layouts.main')
@section('title', 'Manage Lowongan')
@section('content')
    <!-- Navbar -->
    <nav class="sb-topnav navbar navbar-expand">
        <a class="navbar-brand" href="/alumni">
            <img src="{{ asset('images/logo-sti.png') }}" alt="Logo TI" width="250">
            <img src="{{ asset('images/logo-udinus.png') }}" alt="Logo udinus" width="55">
            <img src="{{ asset('images/logo-unggul.png') }}" alt="Logo udinus" width="40">
        </a>
        <form action="/manageLogangAdmin" class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0">
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

    <div class="mb-6 ml-5">
        <a href="/logangadmin" class="btn btn-primary text-white px-3 py-2 rounded-5" style="width: 100px; text-align: center;">
        <i class="fas fa-arrow-left"></i> Back
        </a>
    </div>

    <div class="container-border">
        <div class="container-fluid mt-3 mb-3 d-flex justify-content-center align-items-center">
            <h1><b>Manage Lowongan</b></h1>
        </div>
        <div class="card">
            <div class="table-container table-logbook">
                <table class="table table-hover table-bordered text-center">
                    <thead>
                        <tr>
                            <th scope="col">Nama Perusahaan</th>
                            <th scope="col">Posisi</th>
                            <th scope="col" colspan="3">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @unless(count($logangAdmin) == 0)
                        @foreach($logangAdmin as $lgng)
                        <tr>
                            <td>{{ $lgng->NamaPerusahaan }}</td>
                            <td>{{ $lgng->Posisi }}</td>
                            <td class="px-4 py-8 border-t border-b border-gray-300 text-lg centered-column">
                                <button type="button" class="btn btn-info me-2 text-white px-3 py-2 rounded-5"
                                    style="width: 100px; text-align: center;" data-bs-toggle="modal" data-bs-target="#dialogShowLogangAdmin"
                                    data-id="{{ $lgng->id }}" data-bs-remote="{{ route('logangadmin.showAdmin', $lgng->id) }}">
                                    Detail
                                </button>
                            </td>
                            <td class="px-4 py-8 border-t border-b border-gray-300 text-lg centered-column">
                                <form method="POST" action="/logangadmin/{{$lgng->id}}/delete" onsubmit="return confirm('Delete?')">
                                    @csrf
                                    @method('DELETE')
                                    <button value="{{ $lgng->id }}" type="submit" class="btn btn-danger text-white px-3 py-2 rounded-5" style="width: 100px; text-align: center;">
                                        Delete
                                    </button>
                                </form>
                            </td>
                            <td class="px-4 py-8 border-t border-b border-gray-300 text-lg centered-column">
                                <form method="POST" action="/adminLogang/{{$lgng->id}}/verify" id="verifyForm{{$lgng->id}}">
                                    @csrf
                                    @method('POST')
                                    <input type="hidden" name="action" id="action{{$lgng->id}}">
                                
                                    @if($lgng->Verify == 'pending')
                                        <button type="button" class="btn btn-success text-white px-3 py-2 rounded-5" style="width: 100px; text-align: center;" onclick="confirmAction({{$lgng->id}}, 'verify')">
                                            Verify 
                                        </button>
                                    @elseif($lgng->Verify == 'verified')
                                        <button type="button" class="btn btn-danger text-white px-3 py-2 rounded-5" style="width: 150px; text-align: center; font-size: 12px;" onclick="confirmAction({{$lgng->id}}, 'not_verify')">
                                            Tidak Verify
                                        </button>
                                        
                                    @endif
                                </form>
                                <script>
                                    function confirmAction(id, action) {
                                        let message = action === 'verify' ? 'Verify?' : 'Tidak Verify?';
                                        if (confirm(message)) {
                                            document.getElementById('action' + id).value = action;
                                            document.getElementById('verifyForm' + id).submit();
                                        }
                                    }
                                </script>            
                            </td>
                        </tr>
                        @endforeach
                        @else
                            <p>No Lowongan Found. Silahkan isi lowongan.</p>
                        @endunless
                    </tbody>
                </table>
            </div>
        </div>
        <div class="d-flex justify-content-end">
            {{ $logangAdmin->links('pagination::bootstrap-4') }}
        </div>
    </div>

    <!-- Modal for Show Logang -->
    <div class="modal fade" id="dialogShowLogangAdmin" tabindex="-1" aria-labelledby="dialogShowLogangAdminLabel" aria-hidden="true">
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

