<div class="modal-header">
  <h5 class="modal-title" id="dialogShowLokerAdminLabel">Detail Lowongan</h5>
  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
</div>
<div class="modal-body">
    <div class="container">
        <div class="flex flex-col items-center justify-center text-center">
            <img class="w-48 mr-6 mb-6" 
                src="{{ $loker->Logo ? asset('/storage/imglogo/' . $loker->Logo) : asset('/images/no-image.png') }}" 
                style="width: 150px; height: auto;" 
                alt="Logo" />          
            <h1 class="text-2xl mb-2">{{ $loker->Posisi }}</h1>
            <p>{{ $loker->NamaPerusahaan }}</p>
            <div style="display: flex; justify-content: center; align-items: center;">
                <x-listingadmin-tags :tagsCsv="$loker->Tags" />
            </div>
            <div class="text-lg my-4">
                <i class="fa-solid fa-location-dot"></i> {{ $loker->Alamat }}
            </div>
            <h3 class="text-3xl font-bold mb-4">Deskripsi</h3>
            <div class="text-lg space-y-6">
                {!! nl2br(e($loker->Deskripsi)) !!}
            </div>
            <div class="text-lg space-y-6">
                <strong>Tipe kerja: </strong> {{ $loker->TipeKerja }}
            </div>
            <div class="text-lg space-y-6">
                <strong>Pengalaman: </strong> {{ $loker->Pengalaman }}
            </div>
            <div class="text-lg space-y-6">
                <strong>Gaji: </strong> {{ $loker->Gaji }}
            </div>
            <div style="margin-top: 20px; display: flex; flex-direction: column; align-items: center; gap: 10px;">
                <a href="mailto:{{ $loker->Email }}" style="width: 200px; text-align: center;" class="btn btn-primary text-white px-3 py-2 rounded-2">
                    <i class="far fa-envelope"></i>
                    Contact Employer
                </a>
                <a href="{{ $loker->Website }}" style="width: 200px; text-align: center;" class="btn btn-primary text-white px-3 py-2 rounded-2">
                    <i class="fas fa-globe"></i>
                    Visit Website
                </a>
            </div>
        </div>
    </div>
</div>
<div class="modal-footer">
  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
</div>
