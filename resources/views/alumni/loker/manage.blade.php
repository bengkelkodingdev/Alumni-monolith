@extends('alumni.layouts.main')
@section('title', 'Manage Lowongan')
@section('content')
<!-- Navbar -->
<nav class="sb-topnav navbar navbar-expand">
    <a class="navbar-brand" href="/admin">
        <img src="{{ asset('images/logo-sti.png') }}" alt="Logo TI" width="250">
        <img src="{{ asset('images/logo-udinus.png') }}" alt="Logo udinus" width="55">
        <img src="{{ asset('images/logo-unggul.png') }}" alt="Logo udinus" width="40">
    </a>
    <form action="/manageLoker" class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0">
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
    <a href="/loker" class="btn btn-primary text-white px-3 py-2 rounded-5" style="width: 100px; text-align: center;">
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
      @foreach($loker as $lkr)
      <tr class="border-gray-300">
          <td class="px-4 py-8 border-t border-b border-gray-300 text-lg centered-column">
              <a href="{{ route('loker.show', $lkr->id) }}" style="color: inherit; text-decoration: none;">{{$lkr->NamaPerusahaan}}</a>
          </td>
          <td class="px-4 py-8 border-t border-b border-gray-300 text-lg centered-column">
            <a href="/loker/{{$lkr->id}}" style="color: inherit; text-decoration: none;">{{$lkr->Posisi}}</a>
          </td>
          <td class="px-4 py-8 border-t border-b border-gray-300 text-lg centered-column">
            <button type="button" class="btn btn-info me-2 text-white px-3 py-2 rounded-5"
                style="width: 100px; text-align: center;" data-bs-toggle="modal" data-bs-target="#dialogShowLoker"
                data-id="{{ $lkr->id }}" data-bs-remote="{{ route('loker.show', $lkr->id) }}">
                Detail
            </button>
          </td>
          <td class="px-4 py-8 border-t border-b border-gray-300 text-lg centered-column">
            <button type="button" class="btn btn-primary me-2 text-white px-3 py-2 rounded-5"
                style="width: 100px; text-align: center;" data-bs-toggle="modal" data-bs-target="#dialogEditLoker"
                data-id="{{ $lkr->id }}" data-bs-remote="{{ route('loker.edit', $lkr->id) }}">
                Edit
            </button>
          </td>
          <td class="px-4 py-8 border-t border-b border-gray-300 text-lg centered-column">
              <form method="POST" action="/loker/{{$lkr->id}}/delete" onsubmit="return confirm('Delete?')">
                  @csrf
                  @method('DELETE')
                  <button value="{{ $lkr->id }}" type="submit" class="btn btn-danger text-white px-3 py-2 rounded-5" style="width: 100px; text-align: center;">
                    Delete
                  </button>
              </form>
          </td>
      </tr>
      @endforeach
  </tbody>
</table>
</div>

<!-- Modal for Show Loker -->
<div class="modal fade" id="dialogShowLoker" tabindex="-1" aria-labelledby="dialogShowLokerLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-lg">
      <div class="modal-content">
          <!-- Content will be loaded dynamically -->
      </div>
  </div>
</div>

<!-- Modal for Edit Loker -->
<div class="modal fade" id="dialogEditLoker" tabindex="-1" aria-labelledby="dialogEditLokerLabel" aria-hidden="true">
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

