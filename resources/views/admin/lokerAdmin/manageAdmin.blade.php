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
     <form action="/manageLokerAdmin" class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0">
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
     <a href="/lokeradmin" class="btn btn-primary text-white px-3 py-2 rounded-5" style="width: 100px; text-align: center;">
       <i class="fas fa-arrow-left"></i> Back
     </a>
 </div>
 
 <div class="container-border">
    <div class="container-fluid mt-3 mb-3 d-flex justify-content-center align-items-center">
      <h1><b>Manage Lowongan</b></h1>
    </div>
    <div class="card">
        <div class="table-container">
            <table class="table table-hover table-bordered text-center">
                <thead>
                    <tr>
                        <th scope="col">Nama Perusahaan</th>
                        <th scope="col">Posisi</th>
                        <th scope="col" colspan="3">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @unless(count($lokerAdmin) == 0)
                    @foreach($lokerAdmin as $lkr)
                    <tr>
                        <td>{{ $lkr->NamaPerusahaan }}</td>
                        <td>{{ $lkr->Posisi }}</td>
                        <td class="px-4 py-8 border-t border-b border-gray-300 text-lg centered-column">
                            <button type="button" class="btn btn-info me-2 text-white px-3 py-2 rounded-5"
                                style="width: 100px; text-align: center;" data-bs-toggle="modal" data-bs-target="#dialogShowLokerAdmin"
                                data-id="{{ $lkr->id }}" data-bs-remote="{{ route('lokeradmin.showAdmin', $lkr->id) }}">
                                Detail
                            </button>
                        </td>
                        <td class="px-4 py-8 border-t border-b border-gray-300 text-lg centered-column">
                            <form method="POST" action="/lokeradmin/{{$lkr->id}}/delete" onsubmit="return confirm('Delete?')">
                                @csrf
                                @method('DELETE')
                                <button value="{{ $lkr->id }}" type="submit" class="btn btn-danger text-white px-3 py-2 rounded-5" style="width: 100px; text-align: center;">
                                    Delete
                                </button>
                            </form>
                        </td>
                        <td class="px-4 py-8 border-t border-b border-gray-300 text-lg centered-column">
                            <form method="POST" action="/adminLoker/{{$lkr->id}}/verify" id="verifyForm{{$lkr->id}}">
                                @csrf
                                @method('POST')
                                <input type="hidden" name="action" id="action{{$lkr->id}}">
                            
                                @if($lkr->Verify == 'pending')
                                    <button type="button" class="btn btn-success text-white px-3 py-2 rounded-5" style="width: 100px; text-align: center;" onclick="confirmAction({{$lkr->id}}, 'verify')">
                                        Verify 
                                    </button>
                                @elseif($lkr->Verify == 'verified')
                                    <button type="button" class="btn btn-danger text-white px-3 py-2 rounded-5" style="width: 150px; text-align: center; font-size: 12px;" onclick="confirmAction({{$lkr->id}}, 'not_verify')">
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
    {{ $lokerAdmin->links('pagination::bootstrap-4') }}
</div>
</div>
 
 <!-- Modal for Show Loker -->
 <div class="modal fade" id="dialogShowLokerAdmin" tabindex="-1" aria-labelledby="dialogShowLokerAdminLabel" aria-hidden="true">
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
 
 