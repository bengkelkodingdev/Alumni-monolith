    {{-- <div class="container mt-5">
        <button class="btn btn-primary" onclick="openPopup()">Tambah Lowongan</button>
    </div> --}}

    <div id="popup" class="modal fade" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Tambah Lowongan</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="container"> 
                        <form method="POST" action="{{ route('loker.store') }}" enctype="multipart/form-data">
                            @csrf
                            <div class="mb-3 row">
                                <label for="NamaPerusahaan" class="col-sm-2 col-form-label">Nama Perusahaan</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="NamaPerusahaan" value="{{ old('NamaPerusahaan') }}" required>
                                    @error('NamaPerusahaan')
                                        <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="Posisi" class="col-sm-2 col-form-label">Posisi</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="Posisi" value="{{ old('Posisi') }}" placeholder="Example: Senior Laravel Developer" required>
                                    @error('Posisi')
                                        <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="Alamat" class="col-sm-2 col-form-label">Alamat</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="Alamat" value="{{ old('Alamat') }}" required>
                                    @error('Alamat')
                                        <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="Email" class="col-sm-2 col-form-label">Email</label>
                                <div class="col-sm-10">
                                    <input type="email" class="form-control" name="Email" value="{{ old('Email') }}" required>
                                    @error('Email')
                                        <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="Pengalaman" class="col-sm-2 col-form-label">Pengalaman</label>
                                <div class="col-sm-10">
                                    <select class="form-select" name="Pengalaman" required>
                                        <option value="" disabled selected>Pilih Pengalaman</option>
                                        <option value="Tanpa Pengalaman" {{ old('Pengalaman') == 'Tanpa Pengalaman' ? 'selected' : '' }}>Tanpa Pengalaman</option>
                                        <option value="Fresh Graduate" {{ old('Pengalaman') == 'Fresh Graduate' ? 'selected' : '' }}>Fresh Graduate</option>
                                        <option value="Minimal 1 Tahun" {{ old('Pengalaman') == 'Minimal 1 Tahun' ? 'selected' : '' }}>Minimal 1 Tahun</option>
                                        <option value="Minimal 2 Tahun" {{ old('Pengalaman') == 'Minimal 2 Tahun' ? 'selected' : '' }}>Minimal 2 Tahun</option>
                                        <option value="Minimal 3 Tahun" {{ old('Pengalaman') == 'Minimal 3 Tahun' ? 'selected' : '' }}>Minimal 3 Tahun</option>
                                        <option value="Lebih dari 3 Tahun" {{ old('Pengalaman') == 'Lebih dari 3 Tahun' ? 'selected' : '' }}>Lebih dari 3 Tahun</option>
                                    </select>
                                    @error('Pengalaman')
                                        <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="Gaji" class="col-sm-2 col-form-label">Gaji</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="Gaji" value="{{ old('Gaji') }}" required>
                                    @error('Gaji')
                                        <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="TipeKerja" class="col-sm-2 col-form-label">Tipe Kerja</label>
                                <div class="col-sm-10">
                                    <select class="form-select" name="TipeKerja" required>
                                        <option value="" disabled selected>Pilih Tipe Kerja</option>
                                        <option value="Freelance" {{ old('TipeKerja') == 'Freelance' ? 'selected' : '' }}>Freelance</option>
                                        <option value="Full Time" {{ old('TipeKerja') == 'Full Time' ? 'selected' : '' }}>Full Time</option>
                                        <option value="Part Time" {{ old('TipeKerja') == 'Part Time' ? 'selected' : '' }}>Part Time</option>
                                        <option value="Kontrak" {{ old('TipeKerja') == 'Kontrak' ? 'selected' : '' }}>Kontrak</option>
                                        <option value="Sementara" {{ old('TipeKerja') == 'Sementara' ? 'selected' : '' }}>Sementara</option>
                                    </select>
                                    @error('TipeKerja')
                                        <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="Deskripsi" class="col-sm-2 col-form-label">Deskripsi</label>
                                <div class="col-sm-10">
                                    <textarea class="form-control" name="Deskripsi" rows="10" placeholder="Include tasks, requirements, etc" required>{{ old('Deskripsi') }}</textarea>
                                    @error('Deskripsi')
                                        <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="Website" class="col-sm-2 col-form-label">Website / Application URL</label>
                                <div class="col-sm-10">
                                    <input type="url" class="form-control" name="Website" value="{{ old('Website') }}">
                                    @error('Website')
                                        <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="Tags" class="col-sm-2 col-form-label">Tags (Comma Separated)</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="Tags" value="{{ old('Tags') }}" placeholder="Example: Laravel, Backend, Postgres, etc">
                                    @error('Tags')
                                        <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="Verify" class="col-sm-2 col-form-label">Buat publik:</label>
                                <div class="col-sm-10">
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-input" name="Verify" value="pending" required>
                                        <label for="Verify" class="form-check-label">Setuju</label>
                                    </div>
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="logo" class="col-sm-2 col-form-label">Logo</label>
                                <div class="col-sm-10">
                                    <input type="file" class="form-control" name="logo" required>
                                    @error('logo')
                                        <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary me-2" data-bs-dismiss="modal">Tutup</button>
                                <button type="submit" class="btn btn-primary">Post</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        function openPopup() {
            var popup = new bootstrap.Modal(document.getElementById('popup'), {
                keyboard: false
            });
            popup.show();
        }
    </script>

