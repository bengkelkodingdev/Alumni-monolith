{{-- <x-layout>
  <button class="bg-laravel text-white rounded py-2 px-2 hover:bg-white mb-6 ml-5">
    <a href="/lokers" class="hover:text-laravel" ><i class="fa-solid fa-arrow-left"></i> Back </a>
  </button>
  <div class="mx-4">
    <x-card class="p-10">
      <div class="flex flex-col items-center justify-center text-center">
        <img class="w-48 mr-6 mb-6" src="{{$loker->Logo ? asset('/storage/imglogo/'. $listing->Logo) : asset('/images/no-image.png')}}"/>

        <h3 class="text-2xl mb-2">
          {{$listing->Posisi}}
        </h3>
        <div class="text-xl font-bold mb-4">{{$listing->NamaPerusahaan}}</div>

        <x-listing-tags :tagsCsv="$listing->Tags" />

        <div class="text-lg my-4">
          <i class="fa-solid fa-location-dot"></i> {{$listing->Alamat}}
        </div>
        <div>
          <h3 class="text-3xl font-bold mb-4">Deskripsi</h3>
          <div class="text-lg space-y-6">
            {{$listing->Deskripsi}}

            <a href="mailto:{{$listing->Email}}" style="color: inherit; text-decoration: none;" class="block bg-blue-700 text-white mt-6 py-2 px-40 rounded-xl hover:bg-blue-800">
              <i class="fa-solid fa-envelope"></i>
              Contact Employer
            </a>

            <a href="{{$listing->Website}}" target="_blank" style="color: inherit; text-decoration: none;" class="block bg-blue-700 text-white py-2 px-40 rounded-xl hover:bg-blue-800">
              <i class="fa-solid fa-globe"></i>
              Visit Website
            </a>
          </div>
        </div>
      </div>
    </x-card>
  </div>
</x-layout> --}}

{{-- <div class="modal fade" id="dialogShowLoker" tabindex="-1" aria-labelledby="dialogShowLokerLabel"
    aria-hidden="true" data-bs-remote="">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content"> --}}
    {{-- <div class="modal fade" id="dialogShowLoker" tabindex="-1" aria-labelledby="dialogShowLokerLabel" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered modal-lg">
          <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="dialogShowLokerLabel">Detail Lowongan</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              <div class="container">
                <div class="flex flex-col items-center justify-center text-center">
                  <img 
                  class="w-48 mr-6 mb-6" 
                  src="{{$lkr->Logo ? asset('/storage/imglogo/'. $lkr->Logo) : asset('/images/no-image.png')}}"
                  style="width: 150px; height: auto;"
                  />          
                  <h1 class="text-2xl mb-2">
                    {{$lkr->Posisi}}
                  </h1>
                  <p>
                    {{$lkr->NamaPerusahaan}}
                  </p>
                  <div style="display: flex; justify-content: center; align-items: center;">
                    <x-listing-tags :tagsCsv="$lkr->Tags" />
                  </div>
                  <div class="text-lg my-4">
                    <i class="fa-solid fa-location-dot"></i> {{$lkr->Alamat}}
                  </div>
                    <h3 class="text-3xl font-bold mb-4">Deskripsi</h3>
                    <div class="text-lg space-y-6">
                      {{-- {{$lkr->Deskripsi}} --}}
                      {{-- {!! nl2br(e($lkr->Deskripsi)) !!}
                    </div>
                    <div style="margin-top: 20px; display: flex; flex-direction: column; align-items: center; gap: 10px;">
                      <a href="mailto:{{$lkr->Email}}" style="width: 200px; text-align: center;" class="btn btn-primary text-white px-3 py-2 rounded-2">
                          <i class="far fa-envelope"></i>
                          Contact Employer
                      </a>
                      <a href="{{$lkr->Website}}" style="width: 200px; text-align: center;" class="btn btn-primary text-white px-3 py-2 rounded-2">
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
            </div>
        </div>
    </div>
</div> --}}
<div class="modal-header">
  <h5 class="modal-title" id="dialogShowLokerLabel">Detail Lowongan</h5>
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
              <x-listing-tags :tagsCsv="$loker->Tags" />
          </div>
          <div class="text-lg my-4">
              <i class="fa-solid fa-location-dot"></i> {{ $loker->Alamat }}
          </div>
          <h3 class="text-3xl font-bold mb-4">Deskripsi</h3>
          <div class="text-lg space-y-6">
              {!! nl2br(e($loker->Deskripsi)) !!}
              {{-- {{ $loker->Deskripsi }} --}}
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
