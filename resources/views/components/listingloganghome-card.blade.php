@props(['listingmagang'])

<div class="job-listingmagang-container space-y-4 mb-5 ml-2"> 
  <div> 
    <div class="flex items-center border border-gray-300 rounded-lg p-4"> 
    <img class="w-16 h-16 mr-4 object-cover rounded-full" src="{{$listingmagang->Logo ? asset('/storage/imglogo/'. $listingmagang->Logo) : asset('/images/no-image.png')}}" alt="Company Logo" /> 
    <div class="flex-grow"> 
      <h3 class="text-xl font-semibold mb-1"> 
        <a href="/logangHome/{{$listingmagang->id}}"style="color: inherit; text-decoration: none;">{{$listingmagang->Posisi}}</a> 
      </h3> 
      <div class="text-gray-600 mb-2">{{$listingmagang->NamaPerusahaan}}</div> 
      <x-listingmagang-tags :tagsCsv="$listingmagang->Tags" /> 
        <div class="text-sm text-gray-500 mt-2"> 
          <i class="fa-solid fa-location-dot"></i> {{$listingmagang->Alamat}} 
        </div> 
        <div class="text-sm text-gray-500 mt-1"> Pengalaman: {{$listingmagang->Pengalaman}} 
        </div> 
        <div class="text-sm text-gray-500 mt-1"> Gaji: {{$listingmagang->Gaji}} 
        </div> 
      </div> 
      <div class="flex flex-col items-end"> 
        <span class="bg-green-200 text-green-800 text-xs font-semibold mr-1 px-4 py-1 rounded w-32 text-center mb-2">{{$listingmagang->TipeKerja}}
        </span> 
        <span class="bg-red-200 text-red-800 text-xs font-semibold mr-1 px-4 py-1 rounded w-32 text-center">{{$listingmagang->Pengalaman}}
        </span> 
      </div> 
    </div> 
  </div>
</div>
