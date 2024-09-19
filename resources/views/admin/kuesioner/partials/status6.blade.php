<div class="card">
    <div class="table-container table-logbook">
        <table class="table table-hover table-bordered text-start">
            <thead>
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Jenis Kelamin</th>
                    <th scope="col">NIM</th>
                    <th scope="col">Tahun Masuk</th>
                    <th scope="col">Tahun Lulus</th>
                    <th scope="col">No WhatsApp</th>
                    <th scope="col">Email</th>
                    <th scope="col">Status</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($data as $kuesioner)
                    <tr>
                        <td>{{ $loop->iteration }}</td> <!-- For numbering -->
                        <td>{{ $kuesioner->nama_alumni }}</td>
                        <td>{{ $kuesioner->jns_kelamin }}</td>
                        <td>{{ $kuesioner->nim }}</td>
                        <td>{{ $kuesioner->tahun_masuk }}</td>
                        <td>{{ $kuesioner->tahun_lulus }}</td>
                        <td>{{ $kuesioner->no_hp }}</td>
                        <td>{{ $kuesioner->email }}</td>
                        <td>{{ $kuesioner->status }}</td>
                    </tr>
                @empty
                    <td colspan="22" class="text-center">
                        <div class="alert alert-warning mb-0">Data belum Tersedia.</div>
                    </td>
                @endforelse
            </tbody>
        </table>
    </div>
    <div class="d-flex justify-content-end">
        {{ $kuesioners->links('pagination::bootstrap-5') }}
    </div> 
</div>