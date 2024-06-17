<x-layout>
  <x-card class="p-10 max-w-lg mx-auto mt-24">
    <header class="text-center">
      <h2 class="text-2xl font-bold uppercase mb-1">Edit Lowongan Pekerjaan</h2>
      <p class="mb-4">Edit: {{$listingadmin->Posisi}}</p>
    </header>

    <form method="POST" action="/lokeradmin/{{$listingadmin->id}}/update" enctype="multipart/form-data">
      @csrf
      @method('PUT')
      <div class="mb-6">
        <label for="company" class="inline-block text-lg mb-2">Nama Perusahaan</label>
        <input type="text" class="border border-gray-200 rounded p-2 w-full" name="NamaPerusahaan" placeholder="{{$listingadmin->NamaPerusahaan}}" />
      </div>
      
      <div class="mb-6">
        <label for="title" class="inline-block text-lg mb-2">Posisi</label>
        <input type="text" class="border border-gray-200 rounded p-2 w-full" name="Posisi" placeholder="{{$listingadmin->Posisi}}" />
      </div>

      <div class="mb-6">
        <label for="location" class="inline-block text-lg mb-2">Alamat</label>
        <input type="text" class="border border-gray-200 rounded p-2 w-full" name="Alamat" placeholder="{{$listingadmin->Alamat}}" />
      </div>

      <div class="mb-6">
        <label for="email" class="inline-block text-lg mb-2">Email</label>
        <input type="text" class="border border-gray-200 rounded p-2 w-full" name="Email" placeholder="{{$listingadmin->Email}}"/>
      </div>

      <div class="mb-6">
        <label for="pengalaman" class="inline-block text-lg mb-2">Pengalaman</label>
        <input type="text" class="border border-gray-200 rounded p-2 w-full" name="Pengalaman" placeholder="{{$listingadmin->Pengalaman}}"/>
      </div>

      <div class="mb-6">
        <label for="gaji" class="inline-block text-lg mb-2">Gaji</label>
        <input type="text" class="border border-gray-200 rounded p-2 w-full" name="Gaji" placeholder="{{$listingadmin->Gaji}}"/>
      </div>

      <div class="mb-6">
        <label for="tipekerja" class="inline-block text-lg mb-2">Tipe Kerja</label>
        <input type="text" class="border border-gray-200 rounded p-2 w-full" name="TipeKerja" placeholder="{{$listingadmin->TipeKerja}}"/>
      </div>

       <div class="mb-6">
        <label for="description" class="inline-block text-lg mb-2">Deskripsi</label>
        <textarea class="border border-gray-200 rounded p-2 w-full" name="Deskripsi" rows="10" placeholder="{{$listingadmin->Deskripsi}}"></textarea>
      </div>

      <div class="mb-6">
        <label for="website" class="inline-block text-lg mb-2">Website/Application URL</label>
        <input type="text" class="border border-gray-200 rounded p-2 w-full" name="Website" placeholder="{{$listingadmin->Website}}" />        
      </div>

      <div class="mb-6">
        <label for="tags" class="inline-block text-lg mb-2">Tags (Comma Separated)</label>
        <input type="text" class="border border-gray-200 rounded p-2 w-full" name="Tags" placeholder="{{$listingadmin->Tags}}"  />
      </div>

      <div class="mb-6">
        <div class="text-lg">Buat publik:</div>
        <input type="checkbox" class="form-check-input" name="Verify" value="belum disetujui"/>
        <label for="verify" class="form-check-label">Setuju</label>
      </div>
      
      <div class="mb-6">
        <label for="logo" class="inline-block text-lg mb-2">Logo</label>
        <input type="file" class="border border-blue-700 rounded p-2 w-full" name="Logo" />

        <img class="w-48 mr-6 mb-6" src="{{$listingadmin->Logo ? asset('/storage/imglogo'.$listingadmin->Logo) : asset('/images/no-image.png')}}" alt="" />
      </div>
      <div class="mb-6">
        <button class="bg-blue-700 text-white rounded py-2 px-4 hover:bg-blue-800">Update Post</button>
        <a href="/lokeradmin" class="text-black ml-4"> Back </a>
      </div>
    </form>
  </x-card>
</x-layout>
