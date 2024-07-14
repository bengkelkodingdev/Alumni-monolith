<div class="modal-header text-center mb-4" style="color: black;">
    <h3 class="font-bold mb-4 mx-auto" style="color: black;">Detail Lowongan</h3>
</div>
<div class="modal-body">   
    <div class="container">
        <div class="flex flex-col items-center justify-center text-center">
            <img class="w-48 mr-6 mb-6"
                src="{{ $loker->Logo ? asset('/storage/imglogo/' . $loker->Logo) : asset('/images/no-image.png') }}"
                style="width: 150px; height: auto;" alt="Logo" />
            <h1 class="text-2xl mb-2" style="color: black;">{{ $loker->Posisi }}</h1>
            <p style="color: black;">{{ $loker->NamaPerusahaan }}</p>
            <div style="display: flex; justify-content: center; align-items: center;">
                <x-listinghome-tags :tagsCsv="$loker->Tags" />
            </div>
            <div class="text-lg my-4" style="color: black;">
                <i class="fa-solid fa-location-dot"></i> {{ $loker->Alamat }}
            </div>
            <h2 class="font-bold mb-4" style="color: black;">Deskripsi</h2>
            <div class="text-lg space-y-6" style="color: black;">
                {!! nl2br(e($loker->Deskripsi)) !!}
            </div>
            <div class="text-lg space-y-6" style="color: black;">
                <strong>Tipe kerja: </strong> {{ $loker->TipeKerja }}
            </div>
            <div class="text-lg space-y-6" style="color: black;">
                <strong>Pengalaman: </strong> {{ $loker->Pengalaman }}
            </div>
            <div class="text-lg space-y-6" style="color: black;">
                <strong>Gaji: </strong> {{ $loker->Gaji }}
            </div>
            <div style="margin-top: 20px; display: flex; flex-direction: column; align-items: center; gap: 10px;">
                <a href="mailto:{{ $loker->Email }}" style="width: 200px; text-align: center;"
                    class="btn btn-primary text-white px-3 py-2 rounded-2">
                    <i class="far fa-envelope"></i>
                    Contact Employer
                </a>
                <a href="{{ $loker->Website }}" style="width: 200px; text-align: center;"
                    class="btn btn-primary text-white px-3 py-2 rounded-2">
                    <i class="fas fa-globe"></i>
                    Visit Website
                </a>
            </div>
        </div>
    </div>
</div>