 {{-- @extends('admin.layouts.main')
@section('title', 'Manage Lowongan')
@section('content')
<!-- Navbar -->
<nav class="sb-topnav navbar navbar-expand">
    <a class="navbar-brand" href="/alumni">
        <img src="{{ asset('images/logo-sti.png') }}" alt="Logo TI" width="250">
        <img src="{{ asset('images/logo-udinus.png') }}" alt="Logo udinus" width="55">
        <img src="{{ asset('images/logo-unggul.png') }}" alt="Logo udinus" width="40">
    </a>
    <form action="/manageAdmin" class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0">
        <div class="input-group">
            <input class="form-control" type="text" placeholder="Search here..." aria-label="Search for..." name="search" aria-describedby="btnNavbarSearch"/>
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

<header>
  <h1 class="text-3xl text-center font-bold my-6 uppercase">
      Manage Lowongan
  </h1>
</header>
<div class="container-border">
<table class="table table-bordered">
  <thead class="table-header">
    <th class="align-middle">Nama Perusahaan</th>
    <th class="align-middle">Posisi</th>
    <th class="align-middle" colspan="3">Aksi</th>
  </thead>
  <tbody>
      @foreach($logangAdmin as $lgng)
      <tr class="border-gray-300 text-center">
          <td class="px-4 py-8 border-t border-b border-gray-300 text-lg centered-column">
              <a href="{{ route('logang.show', $lgng->id) }}" style="color: inherit; text-decoration: none;">{{$lgng->NamaPerusahaan}}</a>
          </td>
          <td class="px-4 py-8 border-t border-b border-gray-300 text-lg centered-column">
            <a href="/logang/{{$lgng->id}}" style="color: inherit; text-decoration: none;">{{$lgng->Posisi}}</a>
          </td>
          <td class="px-4 py-8 border-t border-b border-gray-300 text-lg centered-column">
            <button type="button" class="btn btn-custom btn-info me-2 text-white px-3 py-2 rounded-5"
                style="width: 100px; text-align: center;" data-bs-toggle="modal" data-bs-target="#dialogShowLogang"
                data-id="{{ $lgng->id }}" data-bs-remote="{{ route('logang.show', $lgng->id) }}">
                Detail
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
          <td class="px-4 py-8 border-t border-b border-gray-300 text-lg">          
            <form method="POST" action="/adminLogang/{{$lgng->id}}/verify" id="verifyForm">
                @csrf
                @method('POST')
                <input type="hidden" name="action" id="action">
            
                @if($lgng->Verify == 'pending')
                    <button type="button" class="btn btn-success text-white px-3 py-2 rounded-5" style="width: 100px; text-align: center;" onclick="confirmAction('verify')">
                        Verify 
                    </button>
                @elseif($lgng->Verify == 'verified')
                    <button type="button" class="btn btn-danger text-white px-3 py-2 rounded-5" style="width: 100px; text-align: center;" onclick="confirmAction('not_verify')">
                        Tidak Verify
                    </button>
                @endif
            </form>
            
            <script>
                function confirmAction(action) {
                    let message = action === 'verify' ? 'Verify?' : 'Tidak Verify?';
                    if (confirm(message)) {
                        document.getElementById('action').value = action;
                        document.getElementById('verifyForm').submit();
                    }
                }
            </script>            
        </td>
      </tr>
      @endforeach
  </tbody>
</table>
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


@endsection

 --}}
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

<header>
  <h1 class="text-3xl text-center font-bold my-6 uppercase">
      Manage Lowongan
  </h1>
</header>
<div class="container-border">
<table class="table table-bordered">
  <thead class="table-header">
    <th class="align-middle">Nama Perusahaan</th>
    <th class="align-middle">Posisi</th>
    <th class="align-middle" colspan="3">Aksi</th>
  </thead>
  <tbody>
      @foreach($logangAdmin as $lgng)
      <tr class="border-gray-300 text-center">
          <td class="px-4 py-8 border-t border-b border-gray-300 text-lg centered-column">
              <a href="{{ route('logangadmin.showAdmin', $lgng->id) }}" style="color: inherit; text-decoration: none;">{{$lgng->NamaPerusahaan}}</a>
          </td>
          <td class="px-4 py-8 border-t border-b border-gray-300 text-lg centered-column">
            <a href="/logangadmin/{{$lgng->id}}" style="color: inherit; text-decoration: none;">{{$lgng->Posisi}}</a>
          </td>
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
          <td class="px-4 py-8 border-t border-b border-gray-300 text-lg">          
            <form method="POST" action="/adminLogang/{{$lgng->id}}/verify" id="verifyForm{{$lgng->id}}">
                @csrf
                @method('POST')
                <input type="hidden" name="action" id="action{{$lgng->id}}">
            
                @if($lgng->Verify == 'pending')
                    <button type="button" class="btn btn-success text-white px-3 py-2 rounded-5" style="width: 100px; text-align: center;" onclick="confirmAction({{$lgng->id}}, 'verify')">
                        Verify 
                    </button>
                @elseif($lgng->Verify == 'verified')
                    {{-- <button type="button" class="btn btn-danger text-white px-3 py-2 rounded-5" style="width: 100px; text-align: center;" onclick="confirmAction({{$lgng->id}}, 'not_verify')">
                        Tidak Verify
                    </button> --}}
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
  </tbody>
</table>
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

@endsection

