<div class="modal-header">
    <h5 class="modal-title" id="dialogEditPengumumanLabel{{ $p->id }}">Edit Pengumuman</h5>
    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
</div>
<form action="{{ route('pengumuman.update', $p->id) }}" method="POST">
    @csrf
    @method('PUT')
    <div class="modal-body">
        <div class="form-group">
            <label for="judulPengumuman{{ $p->id }}">Judul Pengumuman</label>
            <input type="text" class="form-control" id="judulPengumuman{{ $p->id }}" name="judul" value="{{ $p->judul }}" required>
        </div>
        <div class="form-group">
            <label for="isiPengumuman{{ $p->id }}">Isi Pengumuman</label>
            <textarea class="form-control" id="isiPengumuman{{ $p->id }}" name="isi" rows="4" required>{{ $p->isi }}</textarea>
        </div>
    </div>
    <div class="modal-footer">
        <button type="button" class="btn btn-secondary me-2" data-bs-dismiss="modal">Batal</button>
        <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
    </div>
</form>
