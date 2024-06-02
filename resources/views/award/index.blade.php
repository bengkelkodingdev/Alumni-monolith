<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>TracerStudy</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- Include toastr CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
    <!-- Include jQuery (diperlukan oleh toastr) -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <!-- Include toastr JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
    <style>
        body {
            background-color: #EFF7FF;
            color: #000000;
        }
        .btn-custom {
            background-color: #F68955;
            border: none;
            color: #FFFFFF;
        }
        .btn-custom:hover {
            background-color: #e67842;
        }
        .card {
            border: none;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            background-color: #FFFFFF;
        }
        .form{
            border: 2px solid #FFDFD0;
            padding: 15px;
            margin-top: 10px;
            border-radius: 10px;
        }
        .table th {
            background-color: #0853A6;
            color: #FFFFFF;
            text-align: center;
        }
        .table-hover tbody tr:hover {
            background-color: #e8f4fd;
        }
        .pagination .page-link {
            color: #0853A6;
        }
        .pagination .page-item.active .page-link {
            background-color: #0853A6;
            border-color: #0853A6;
        }
        .container {
            padding-top: 50px;
        }
        .table th, .table td {
            vertical-align: middle;
        }
        h1 {
            color: #F68955;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="card">
            <div class="card-body">
                <div class="d-flex justify-content-between align-items-center mb-3">
                <b><h1>Award</h1></b>    
                <a href="{{ route('award.create') }}" class="btn btn-md btn-custom">TAMBAH POST</a>
                </div>
                <div class="form" style="overflow-x: auto">
                    <table class="table table-hover table-bordered">
                        <thead>
                            <tr>
                                <th scope="col">Nama Award</th>
                                <th scope="col">Nama Institusi Award</th>
                                <th scope="col">Tingkat Award</th>
                                <th scope="col">Tahun Award</th>
                                <th scope="col">Deskripsi Award</th>
                                <th scope="col">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($awards as $award)
                            <tr>
                                <td>{{ $award->nama_award }}</td>
                                <td>{{ $award->institusi_award }}</td>
                                <td>{{ $award->tingkat_award }}</td>
                                <td>{{ $award->tahun_award }}</td>
                                <td>{{ $award->deskripsi_award }}</td>
                                <td class="text-center">
                                    <form onsubmit="return confirm('Apakah Anda Yakin ?');" action="{{ route('award.destroy', $award->id) }}" method="POST">
                                        <a href="{{ route('award.edit', $award->id) }}" class="btn btn-sm btn-primary">EDIT</a>
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-sm btn-danger">HAPUS</button>
                                    </form>
                                </td>
                            </tr>
                            @empty
                                <tr>
                                    <td colspan="6" class="text-center alert alert-warning">Data belum Tersedia.</td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
                {{ $awards->links() }}                
            </div>
            
        </div>
    </div>
    <script>
        // Message with toastr
        document.addEventListener('DOMContentLoaded', function() {
            var successMessage = "{{ session('success') }}";
            var errorMessage = "{{ session('error') }}";

            if (successMessage) {
                toastr.success(successMessage, 'BERHASIL!');
            } else if (errorMessage) {
                toastr.error(errorMessage, 'GAGAL!');
            }
        });
    </script>

    
</body>
</html>
