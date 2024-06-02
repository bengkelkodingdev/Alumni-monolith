@props(['listing'])

<div class="job-listings-container space-y-4 mb-5 ml-2"> 
  <div> 
    <div class="flex items-center border border-gray-300 rounded-lg p-4"> 
    <img class="w-16 h-16 mr-4 object-cover rounded-full" src="{{$listing->Logo ? asset('/storage/imglogo/'. $listing->Logo) : asset('/images/no-image.png')}}" alt="Company Logo" /> 
    <div class="flex-grow"> 
      <h3 class="text-xl font-semibold mb-1"> 
        <a href="/loker/{{$listing->id}}">{{$listing->Posisi}}</a> 
      </h3> 
      <div class="text-gray-600 mb-2">{{$listing->NamaPerusahaan}}</div> 
      <x-listing-tags :tagsCsv="$listing->Tags" /> 
        <div class="text-sm text-gray-500 mt-2"> 
          <i class="fa-solid fa-location-dot"></i> {{$listing->Alamat}} 
        </div> 
        <div class="text-sm text-gray-500 mt-1"> Pengalaman: {{$listing->Pengalaman}} 
        </div> 
        <div class="text-sm text-gray-500 mt-1"> Gaji: {{$listing->Gaji}} 
        </div> 
      </div> 
      <div class="flex flex-col items-end"> 
        <span class="bg-green-200 text-green-800 text-xs font-semibold mr-1 px-4 py-1 rounded w-32 text-center mb-2">{{$listing->TipeKerja}}
        </span> 
        <span class="bg-red-200 text-red-800 text-xs font-semibold mr-1 px-4 py-1 rounded w-32 text-center">{{$listing->Pengalaman}}
        </span> 
      </div> 
    </div> 
  </div>
</div>
