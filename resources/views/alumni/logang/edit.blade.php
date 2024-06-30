{{-- <x-layout>
  <x-card class="p-10 max-w-lg mx-auto mt-24">
    <header class="text-center">
      <h2 class="text-2xl font-bold uppercase mb-1">Edit Lowongan Magang</h2>
      <p class="mb-4">Edit: {{$logang->Posisi}}</p>
    </header>

    <form method="POST" action="/logang/{{$logang->id}}/update" enctype="multipart/form-data">
      @csrf
      @method('PUT')
      <div class="mb-6">
        <label for="company" class="inline-block text-lg mb-2">Nama Perusahaan</label>
        <input type="text" class="border border-gray-200 rounded p-2 w-full" name="NamaPerusahaan" placeholder="{{$logang->NamaPerusahaan}}" />
      </div>
      
      <div class="mb-6">
        <label for="title" class="inline-block text-lg mb-2">Posisi</label>
        <input type="text" class="border border-gray-200 rounded p-2 w-full" name="Posisi" placeholder="{{$logang->Posisi}}" />
      </div>

      <div class="mb-6">
        <label for="location" class="inline-block text-lg mb-2">Alamat</label>
        <input type="text" class="border border-gray-200 rounded p-2 w-full" name="Alamat" placeholder="{{$logang->Alamat}}" />
      </div>

      <div class="mb-6">
        <label for="email" class="inline-block text-lg mb-2">Email</label>
        <input type="text" class="border border-gray-200 rounded p-2 w-full" name="Email" placeholder="{{$logang->Email}}"/>
      </div>

      <div class="mb-6">
        <label for="pengalaman" class="inline-block text-lg mb-2">Pengalaman</label>
        <input type="text" class="border border-gray-200 rounded p-2 w-full" name="Pengalaman" placeholder="{{$logang->Pengalaman}}"/>
      </div>

      <div class="mb-6">
        <label for="gaji" class="inline-block text-lg mb-2">Gaji</label>
        <input type="text" class="border border-gray-200 rounded p-2 w-full" name="Gaji" placeholder="{{$logang->Gaji}}"/>
      </div>

      <div class="mb-6">
        <label for="tipeMagang" class="inline-block text-lg mb-2">Tipe Magang</label>
        <input type="text" class="border border-gray-200 rounded p-2 w-full" name="TipeMagang" placeholder="{{$logang->TipeMagang}}"/>
      </div>

      <div class="mb-6">
        <label for="description" class="inline-block text-lg mb-2">Deskripsi</label>
        <textarea class="border border-gray-200 rounded p-2 w-full" name="Deskripsi" rows="10" placeholder="{{$logang->Deskripsi}}"></textarea>
      </div>

      <div class="mb-6">
        <label for="website" class="inline-block text-lg mb-2">Website/Application URL</label>
        <input type="text" class="border border-gray-200 rounded p-2 w-full" name="Website" placeholder="{{$logang->Website}}" />        
      </div>

      <div class="mb-6">
        <label for="tags" class="inline-block text-lg mb-2">Tags (Comma Separated)</label>
        <input type="text" class="border border-gray-200 rounded p-2 w-full" name="Tags" placeholder="{{$logang->Tags}}"  />
      </div>
    
      <div class="mb-6">
        <div class="text-lg">Buat publik:</div>
        <input type="checkbox" class="form-check-input" name="Verify" value="belum disetujui"/>
        <label for="verify" class="form-check-label">Setuju</label>
      </div>

      <div class="mb-6">
        <label for="logo" class="inline-block text-lg mb-2">Logo</label>
        <input type="file" class="border border-blue-700 rounded p-2 w-full" name="Logo" />
        <img class="w-48 mr-6 mb-6" src="{{$logang->Logo ? asset('/storage/imglogo'.$logang->Logo) : asset('/images/no-image.png')}}" alt="" />
      </div>

      <div class="mb-6">
        <button class="bg-blue-700 text-white rounded py-2 px-4 hover:bg-blue-800">Update Post</button>
        <a href="/logang" class="text-black ml-4"> Back </a>
      </div>
    </form>
  </x-card>
</x-layout> --}}

<div class="modal-header">
  <div class="w-100">
      <h1 class="modal-title" id="dialogEditLogangLabel">Edit Lowongan PeMagangan</h1>
      <p style="margin-top: 8px; font-size: 1rem;">Edit: {{ $logang->Posisi }}</p>
  </div>
  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" style="margin-left: auto;"></button>
</div>
<div class="modal-body">
  <div class="container">
      @isset($logang)
      <form method="POST" action="{{ route('logang.update', [$logang->id]) }}" enctype="multipart/form-data">
          @csrf
          @method('PUT')
          <div class="form-group row mb-3">
              <label for="company" class="col-sm-2 col-form-label">Nama Perusahaan</label>
              <div class="col-sm-10">
                  <input type="text" class="form-control" name="NamaPerusahaan" value="{{ $logang->NamaPerusahaan }}" />
              </div>
          </div>
          <div class="form-group row mb-3">
              <label for="title" class="col-sm-2 col-form-label">Posisi</label>
              <div class="col-sm-10">
                  <input type="text" class="form-control" name="Posisi" value="{{ $logang->Posisi }}" />
              </div>
          </div>
          <div class="form-group row mb-3">
              <label for="location" class="col-sm-2 col-form-label">Alamat</label>
              <div class="col-sm-10">
                  <input type="text" class="form-control" name="Alamat" value="{{ $logang->Alamat }}" />
              </div>
          </div>
          <div class="form-group row mb-3">
              <label for="email" class="col-sm-2 col-form-label">Email</label>
              <div class="col-sm-10">
                  <input type="email" class="form-control" name="Email" value="{{ $logang->Email }}" />
              </div>
          </div>
          <div class="form-group row mb-3">
              <label for="pengalaman" class="col-sm-2 col-form-label">Pengalaman</label>
              <div class="col-sm-10">
                  <input type="text" class="form-control" name="Pengalaman" value="{{ $logang->Pengalaman }}" />
              </div>
          </div>
          <div class="form-group row mb-3">
              <label for="gaji" class="col-sm-2 col-form-label">Gaji</label>
              <div class="col-sm-10">
                  <input type="text" class="form-control" name="Gaji" value="{{ $logang->Gaji }}" />
              </div>
          </div>
          <div class="form-group row mb-3">
              <label for="tipemagang" class="col-sm-2 col-form-label">Tipe Magang</label>
              <div class="col-sm-10">
                  <input type="text" class="form-control" name="TipeMagang" value="{{ $logang->TipeMagang }}" />
              </div>
          </div>
          <div class="form-group row mb-3">
              <label for="description" class="col-sm-2 col-form-label">Deskripsi</label>
              <div class="col-sm-10">
                  <textarea class="form-control" name="Deskripsi" rows="10">{{ $logang->Deskripsi }}</textarea>
              </div>
          </div>
          <div class="form-group row mb-3">
              <label for="website" class="col-sm-2 col-form-label">Website /Application URL</label>
              <div class="col-sm-10">
                  <input type="text" class="form-control" name="Website" value="{{ $logang->Website }}" />
              </div>
          </div>
          <div class="form-group row mb-3">
              <label for="tags" class="col-sm-2 col-form-label">Tags (Comma Separated)</label>
              <div class="col-sm-10">
                  <input type="text" class="form-control" name="Tags" value="{{ $logang->Tags }}" />
              </div>
          </div>
          <div class="form-group row mb-3">
              <label for="verify" class="col-sm-2 col-form-label">Buat publik:</label>
              <div class="col-sm-10">
                  <input type="checkbox" class="form-check-input" name="Verify" value="setuju" {{ $logang->Verify == 'setuju' ? 'checked' : '' }} />
                  <label for="verify" class="form-check-label">Setuju</label>
              </div>
          </div>
          {{-- <div class="form-group row mb-3">
              <label for="logo" class="col-sm-2 col-form-label">Logo</label>
              <div class="col-sm-10">
                <input type="file" class="form-control" name="Logo" />
                <img style="width: 100px; height: auto; margin-top: 10px;" class="w-48 mt-6 mr-6 mb-6" src="{{ $logang->Logo ? asset('/storage/imglogo/'.$logang->Logo) : asset('/images/no-image.png') }}" alt="Logo" />
              </div>
          </div> --}}
          <div class="form-group row mb-3">
              <label for="logo" class="col-sm-2 col-form-label">Logo Perusahaan</label>
              {{-- <div class="col-sm-10">
                  <input type="file" class="form-control-file" name="Logo" />
                  @if($logang->Logo)
                      <div class="mt-2">
                          <img src="{{ asset('/storage/imglogo/' . $logang->Logo) }}" style="width: 150px; height: auto;" />
                      </div>
                  @endif
              </div> --}}
              <div class="col-sm-10">
                  <input type="file" class="form-control-file" name="Logo" id="logoInput" />
                  @if($logang->Logo)
                      <div class="mt-2">
                          <img src="{{ asset('/storage/imglogo/' . $logang->Logo) }}" style="width: 150px; height: auto;" />
                          <input type="hidden" name="existingLogo" value="{{ $logang->Logo }}" />
                      </div>
                  @endif
              </div>
              <script>
                  document.getElementById('logoInput').addEventListener('change', function() {
                      const form = document.getElementById('editForm');
                      const logoInput = document.getElementById('logoInput');
                      const existingLogo = document.querySelector('input[name="existingLogo"]');
                  
                      // Check if a new file is selected
                      if (logoInput.files.length > 0) {
                          // If new file is selected, no need to include the existing logo value
                          if (existingLogo) {
                              existingLogo.remove();
                          }
                      } else {
                          // If no new file is selected, ensure the existing logo value is submitted
                          if (!existingLogo) {
                              const newInput = document.createElement('input');
                              newInput.type = 'hidden';
                              newInput.name = 'existingLogo';
                              newInput.value = "{{ $logang->Logo }}";  // This value should be dynamically set
                              form.appendChild(newInput);
                          }
                      }
                  
                      // Submit the form automatically
                      form.submit();
                  });
                  </script>
          </div>
          <div class="modal-footer">
              <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
          </div>
      </form>
      @endisset
  </div>
</div>