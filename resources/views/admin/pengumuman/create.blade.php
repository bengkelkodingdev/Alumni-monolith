<div class="modal-header">
    <h5 class="modal-title" id="dialogTambahPengumumanLabel">Tambah Pengumuman Baru</h5>
    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
</div>
<form id="formPengumuman" action="{{ route('pengumuman.store') }}" method="POST">
    @csrf
    <div class="modal-body">
        <div class="form-group">
            <label for="judulPengumuman">Judul Pengumuman</label>
            <input type="text" class="form-control" id="judulPengumuman" name="judul" required>
        </div>
        <div class="form-group">
            <label for="isiPengumuman">Isi Pengumuman</label>
            <textarea class="form-control" id="isiPengumuman" name="isi" rows="4" required></textarea>
        </div>
    </div>
    <div class="modal-footer">
        <button type="button" class="btn btn-secondary me-2" data-bs-dismiss="modal">Batal</button>
        <button type="submit" class="btn btn-primary">Simpan Pengumuman</button>
    </div>
</form>
