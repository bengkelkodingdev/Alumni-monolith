@foreach ($statistiks as $statistik)
<!-- Modal -->
<div class="modal fade" id="dialogEditStatistik{{ $statistik->id }}" tabindex="-1" aria-labelledby="dialogEditStatistikLabel{{ $statistik->id }}" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="dialogEditStatistikLabel{{ $statistik->id }}">Edit Statistik Alumni</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="container">
                    <form action="{{ route('statistik.update', $statistik->id) }}" method="POST">
                        @csrf
                        @method('PUT')

                        <div class="form-group">
                            <div class="row mb-3">
                                <label for="tahun_lulus" class="col-sm-3 col-form-label">Tahun Lulus</label>
                                <div class="col-sm-9">
                                    <input type="number" class="form-control @error('tahun_lulus') is-invalid @enderror" name="tahun_lulus" value="{{ old('tahun_lulus', $statistik->tahun_lulus) }}" placeholder="Masukkan Tahun Lulus" id="tahun_lulus" min="1900" max="2024" step="1">
                                </div>
                            </div>
                            @error('tahun_lulus')
                                <div class="alert alert-danger mt-2">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <div class="row mb-3">
                                <label for="alumni_total" class="col-sm-3 col-form-label">Total Alumni</label>
                                <div class="col-sm-9">
                                    <input type="number" class="form-control @error('alumni_total') is-invalid @enderror" name="alumni_total" value="{{ old('alumni_total', $statistik->alumni_total) }}" placeholder="Masukkan Total Alumni" id="alumni_total" min="0" step="1">
                                </div>
                            </div>
                            @error('alumni_total')
                                <div class="alert alert-danger mt-2">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div class="d-flex justify-content-end mt-5">
                            <button type="reset" class="btn btn-md btn-warning-custom mr-2">RESET</button>
                            <button type="submit" class="btn btn-md btn-custom">UPDATE</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endforeach