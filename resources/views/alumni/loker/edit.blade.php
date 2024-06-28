<div class="modal-header">
    <div class="w-100">
        <h1 class="modal-title" id="dialogEditLokerLabel">Edit Lowongan Pekerjaan</h1>
        <p style="margin-top: 8px; font-size: 1rem;">Edit: {{ $loker->Posisi }}</p>
    </div>
    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" style="margin-left: auto;"></button>
</div>
<div class="modal-body">
    <div class="container">
        @isset($loker)
        <form method="POST" action="{{ route('loker.update', [$loker->id]) }}" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="form-group row mb-3">
                <label for="company" class="col-sm-2 col-form-label">Nama Perusahaan</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="NamaPerusahaan" value="{{ $loker->NamaPerusahaan }}" />
                </div>
            </div>
            <div class="form-group row mb-3">
                <label for="title" class="col-sm-2 col-form-label">Posisi</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="Posisi" value="{{ $loker->Posisi }}" />
                </div>
            </div>
            <div class="form-group row mb-3">
                <label for="location" class="col-sm-2 col-form-label">Alamat</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="Alamat" value="{{ $loker->Alamat }}" />
                </div>
            </div>
            <div class="form-group row mb-3">
                <label for="email" class="col-sm-2 col-form-label">Email</label>
                <div class="col-sm-10">
                    <input type="email" class="form-control" name="Email" value="{{ $loker->Email }}" />
                </div>
            </div>
            <div class="form-group row mb-3">
                <label for="pengalaman" class="col-sm-2 col-form-label">Pengalaman</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="Pengalaman" value="{{ $loker->Pengalaman }}" />
                </div>
            </div>
            <div class="form-group row mb-3">
                <label for="gaji" class="col-sm-2 col-form-label">Gaji</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="Gaji" value="{{ $loker->Gaji }}" />
                </div>
            </div>
            <div class="form-group row mb-3">
                <label for="tipekerja" class="col-sm-2 col-form-label">Tipe Kerja</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="TipeKerja" value="{{ $loker->TipeKerja }}" />
                </div>
            </div>
            <div class="form-group row mb-3">
                <label for="description" class="col-sm-2 col-form-label">Deskripsi</label>
                <div class="col-sm-10">
                    <textarea class="form-control" name="Deskripsi" rows="10">{{ $loker->Deskripsi }}</textarea>
                </div>
            </div>
            <div class="form-group row mb-3">
                <label for="website" class="col-sm-2 col-form-label">Website /Application URL</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="Website" value="{{ $loker->Website }}" />
                </div>
            </div>
            <div class="form-group row mb-3">
                <label for="tags" class="col-sm-2 col-form-label">Tags (Comma Separated)</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="Tags" value="{{ $loker->Tags }}" />
                </div>
            </div>
            <div class="form-group row mb-3">
                <label for="verify" class="col-sm-2 col-form-label">Buat publik:</label>
                <div class="col-sm-10">
                    <input type="checkbox" class="form-check-input" name="Verify" value="setuju" {{ $loker->Verify == 'setuju' ? 'checked' : '' }} />
                    <label for="verify" class="form-check-label">Setuju</label>
                </div>
            </div>
            {{-- <div class="form-group row mb-3">
                <label for="logo" class="col-sm-2 col-form-label">Logo</label>
                <div class="col-sm-10">
                  <input type="file" class="form-control" name="Logo" />
                  <img style="width: 100px; height: auto; margin-top: 10px;" class="w-48 mt-6 mr-6 mb-6" src="{{ $loker->Logo ? asset('/storage/imglogo/'.$loker->Logo) : asset('/images/no-image.png') }}" alt="Logo" />
                </div>
            </div> --}}
            <div class="form-group row mb-3">
                <label for="logo" class="col-sm-2 col-form-label">Logo Perusahaan</label>
                {{-- <div class="col-sm-10">
                    <input type="file" class="form-control-file" name="Logo" />
                    @if($loker->Logo)
                        <div class="mt-2">
                            <img src="{{ asset('/storage/imglogo/' . $loker->Logo) }}" style="width: 150px; height: auto;" />
                        </div>
                    @endif
                </div> --}}
                <div class="col-sm-10">
                    <input type="file" class="form-control-file" name="Logo" id="logoInput" />
                    @if($loker->Logo)
                        <div class="mt-2">
                            <img src="{{ asset('/storage/imglogo/' . $loker->Logo) }}" style="width: 150px; height: auto;" />
                            <input type="hidden" name="existingLogo" value="{{ $loker->Logo }}" />
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
                                newInput.value = "{{ $loker->Logo }}";  // This value should be dynamically set
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
