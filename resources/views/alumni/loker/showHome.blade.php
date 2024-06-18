<x-layout>
  <button class="bg-laravel text-white rounded py-2 px-2 hover:bg-white mb-6 ml-5">
    <a href="/" class="hover:text-laravel" ><i class="fa-solid fa-arrow-left"></i> Back </a>
  </button>
  <div class="mx-4">
    <x-card class="p-10">
      <div class="flex flex-col items-center justify-center text-center">
        <img class="w-48 mr-6 mb-6" src="{{$listing->Logo ? asset('/storage/imglogo/'. $listing->Logo) : asset('/images/no-image.png')}}" alt="" />

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
</x-layout>