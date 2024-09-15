@extends('alumni.layouts.main')
@section('title', 'Manage Lowongan')
@section('content')
<!-- Navbar -->
<nav class="sb-topnav navbar navbar-expand">
    <a class="navbar-brand" href="/alumni">
        <img src="{{ asset('images/logo-sti.png') }}" alt="Logo TI" width="250">
        <img src="{{ asset('images/logo-udinus.png') }}" alt="Logo udinus" width="55">
        <img src="{{ asset('images/logo-unggul.png') }}" alt="Logo udinus" width="40">
    </a>
    <form action="/manageLogang" class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0">
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
    <a href="/logang" class="btn btn-primary text-white px-3 py-2 rounded-5" style="width: 100px; text-align: center;">
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
                @forelse ($logang as $lgng)
                    <tr>
                    <td>{{ $lgng->NamaPerusahaan }}</td>
                    <td>{{ $lgng->Posisi }}</td>
                    <td class="px-4 py-8 border-t border-b border-gray-300 text-lg centered-column">
                        <button type="button" class="btn btn-info me-2 text-white px-3 py-2 rounded-5"
                        style="width: 100px; text-align: center;" data-bs-toggle="modal" data-bs-target="#dialogShowLogang"
                        data-id="{{ $lgng->id }}" data-bs-remote="{{ route('logang.show', $lgng->id) }}">
                        Detail
                        </button>
                    </td>
                    <td class="px-4 py-8 border-t border-b border-gray-300 text-lg centered-column">
                        <button type="button" class="btn btn-primary me-2 text-white px-3 py-2 rounded-5"
                            style="width: 100px; text-align: center;" data-bs-toggle="modal" data-bs-target="#dialogEditLogang"
                            data-id="{{ $lgng->id }}" data-bs-remote="{{ route('logang.edit', $lgng->id) }}">
                            Edit
                        </button>
                    </td>
                    <td class="px-4 py-8 border-t border-b border-gray-300 text-lg centered-column">
                        <form method="POST" action="/logang/{{$lgng->id}}/delete" onsubmit="return confirm('Delete?')">
                            @csrf
                            @method('DELETE')
                            <button value="{{ $lgng->id }}" type="submit" class="btn btn-danger text-white px-3 py-2 rounded-5" style="width: 100px; text-align: center;">
                                Delete
                            </button>
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
    {{ $logang->links('pagination::bootstrap-4') }}
</div>
</div>

<!-- Modal for Show Logang -->
<div class="modal fade" id="dialogShowLogang" tabindex="-1" aria-labelledby="dialogShowLogangLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-lg">
      <div class="modal-content">
          <!-- Content will be loaded dynamically -->
      </div>
  </div>
</div>

<!-- Modal for Edit Logang -->
<div class="modal fade" id="dialogEditLogang" tabindex="-1" aria-labelledby="dialogEditLogangLabel" aria-hidden="true">
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

