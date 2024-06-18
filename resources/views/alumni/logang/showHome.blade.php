<x-layout>
  <button class="bg-laravel text-white rounded py-2 px-2 hover:bg-white mb-6 ml-5">
    <a href="/" class="hover:text-laravel"><i class="fa-solid fa-arrow-left"></i> Back </a>
  </button>
  <div class="mx-4">
    <x-card class="p-10">
      <div class="flex flex-col items-center justify-center text-center">
        <img class="w-48 mr-6 mb-6 " src="{{$listingmagang->Logo ? asset('/storage/imglogo/'. $listingmagang->Logo) : asset('/images/no-image.png')}}" alt="" />

        <h3 class="text-2xl mb-2">
          {{$listingmagang->Posisi}}
        </h3>
        <div class="text-xl font-bold mb-4">{{$listingmagang->NamaPerusahaan}}</div>

        <x-listingmagang-tags :tagsCsv="$listingmagang->Tags" />

        <div class="text-lg my-4">
          <i class="fa-solid fa-location-dot"></i> {{$listingmagang->Alamat}}
        </div>
        <div>
          <h3 class="text-3xl font-bold mb-4">Deskripsi</h3>
          <div class="text-lg space-y-6">
            {{$listingmagang->Deskripsi}}

            <a href="mailto:{{$listingmagang->Email}}" style="color: inherit; text-decoration: none;" class="block bg-blue-700 text-white mt-6 py-2 rounded-xl hover:bg-blue-800">
              <i class="fa-solid fa-envelope"></i>
              Contact Employer
            </a>

            <a href="{{$listingmagang->Website}}" target="_blank" style="color: inherit; text-decoration: none;" class="block bg-blue-700 text-white py-2 rounded-xl hover:bg-blue-800">
              <i class="fa-solid fa-globe"></i>
              Visit Website
            </a>
          </div>
        </div>
      </div>
    </x-card>
  </div>
</x-layout>