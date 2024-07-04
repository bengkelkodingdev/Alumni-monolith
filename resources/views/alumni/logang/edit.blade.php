<div class="modal-header">
  <div class="w-100">
      <h1 class="modal-title" id="dialogEditLogangLabel">Edit Lowongan Magang</h1>
      {{-- <p style="margin-top: 8px; font-size: 1rem;">Edit: {{ $logang->Posisi }}</p> --}}
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
              {{-- <div class="col-sm-10">
                  <input type="text" class="form-control" name="Pengalaman" value="{{ $logang->Pengalaman }}" />
              </div> --}}
              <div class="col-sm-10">
                  <select class="form-control" name="Pengalaman">
                      <option value="" disabled selected>{{ $logang->Pengalaman }}</option>
                      <option value="Tanpa Pengalaman" {{ $logang->Pengalaman == 'Tanpa Pengalaman' ? 'selected' : '' }}>Tanpa Pengalaman</option>
                      <option value="Fresh Graduate" {{ $logang->Pengalaman == 'Fresh Graduate' ? 'selected' : '' }}>Fresh Graduate</option>
                      <option value="Minimal 1 Tahun" {{ $logang->Pengalaman == 'Minimal 1 Tahun' ? 'selected' : '' }}>Minimal 1 Tahun</option>
                      <option value="Minimal 2 Tahun" {{ $logang->Pengalaman == 'Minimal 2 Tahun' ? 'selected' : '' }}>Minimal 2 Tahun</option>
                      <option value="Minimal 3 Tahun" {{ $logang->Pengalaman == 'Minimal 3 Tahun' ? 'selected' : '' }}>Minimal 3 Tahun</option>
                      <option value="Lebih dari 3 Tahun" {{ $logang->Pengalaman == 'Lebih dari 3 Tahun' ? 'selected' : '' }}>Lebih dari 3 Tahun</option>
                  </select>
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
              {{-- <div class="col-sm-10">
                  <input type="text" class="form-control" name="TipeMagang" value="{{ $logang->TipeMagang     }}" />
              </div> --}}
              <div class="col-sm-10">
                  <select class="form-control" name="TipeMagang">
                      <option value="" disabled selected>{{ $logang->TipeMagang}}</option>
                      <option value="Freelance" {{ $logang->TipeMagang   == 'Freelance' ? 'selected' : '' }}>Freelance</option>
                      <option value="Full Time" {{ $logang->TipeMagang   == 'Full Time' ? 'selected' : '' }}>Full Time</option>
                      <option value="Part Time" {{ $logang->TipeMagang   == 'Part Time' ? 'selected' : '' }}>Part Time</option>
                      <option value="Kontrak" {{ $logang->TipeMagang     == 'Kontrak' ? 'selected' : '' }}>Kontrak</option>
                      <option value="Sementara" {{ $logang->TipeMagang   == 'Sementara' ? 'selected' : '' }}>Sementara</option>
                  </select>
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
                  <input type="checkbox" class="form-check-input" name="Verify" value="pending" {{ $logang->Verify == 'pending' ? 'checked' : '' }} required/>
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
