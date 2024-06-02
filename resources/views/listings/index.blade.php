<x-layout>
  
  <div class="mb-6 ml-5">
    <button class="bg-laravel text-white rounded py-2 px-2 hover:bg-white">
      <a href="/login" class="hover:text-laravel"><i class="fa-solid fa-arrow-left"></i> Back </a>
    </button>
    <button class="bg-laravel text-white rounded py-2 px-2 hover:bg-white">
      <a href="/postLoker" class="hover:text-laravel"><i class="fa-solid fa-upload"></i> Post Lowongan </a>
    </button>
    <button class="bg-laravel text-white rounded py-2 px-2 hover:bg-white">
      <a href="/manageLoker" class="hover:text-laravel"><i class="fa-solid fa-gear"></i> Manage Lowongan </a>
    </button>
  </div>
  
  @include('partials._search')
  <div style="font-family: Arial; font-size: 2em; color: #114D91; font-weight: bold; margin-left: 2%;">
    Pekerjaan Populer
  </div>
  <div style="display: flex; justify-content: space-between;">
    <!-- Tabel Lowongan -->
    <div style="width: 60%;">
      <div class="p-2.5">
        @unless(count($listings) == 0)

        @foreach($listings as $listing)
            <x-listing-card :listing="$listing" />
        @endforeach
        @else
        <p>No Lowongan Found</p>
        @endunless
      </div>
    </div>
    
    <!-- Tabel Pengalaman Kerja -->
    <div style="width: 35%;">
      <form id="filterForm" method="GET" action="{{ route('listings.index') }}">
          <!-- Pengalaman Kerja -->
          <div class="bg-blue-500 text-white p-2 rounded-t-lg mr-10 mt-3">
              Pengalaman Kerja
          </div>
          <div class="border border-blue-500 bg-blue-100 p-4 rounded-b-lg mr-10 mb-4">
              @foreach ([
                  'Tanpa Pengalaman', 'Fresh Graduate', 'Minimal 1 Tahun',
                  'Minimal 2 Tahun', 'Minimal 3 Tahun', 'Lebih dari 3 Tahun'
              ] as $pengalaman)
                  <label class="flex items-center mb-2">
                      <input type="checkbox" class="mr-2" name="Pengalaman[]" value="{{ $pengalaman }}" 
                             {{ in_array($pengalaman, $selectedPengalaman) ? 'checked' : '' }} /> {{ $pengalaman }}
                  </label>
              @endforeach
          </div>
  
          <!-- Tipe Pekerjaan -->
          <div class="bg-blue-500 text-white p-2 rounded-t-lg mr-10 mt-3">
              Tipe Pekerjaan
          </div>
          <div class="border border-blue-500 bg-blue-100 p-4 rounded-b-lg mr-10 mb-4">
              @foreach ([
                  'Freelance', 'Full Time', 'Part Time', 'Kontrak', 'Sementara'
              ] as $tipeKerja)
                  <label class="flex items-center mb-2">
                      <input type="checkbox" class="mr-2" name="TipeKerja[]" value="{{ $tipeKerja }}" 
                             {{ in_array($tipeKerja, $selectedTipeKerja) ? 'checked' : '' }} /> {{ $tipeKerja }}
                  </label>
              @endforeach
          </div>
      </form>
  </div>
  
  <script>
      document.querySelectorAll('input[name="Pengalaman[]"], input[name="TipeKerja[]"]').forEach(function(checkbox) {
          checkbox.addEventListener('change', function() {
              document.getElementById('filterForm').submit();
          });
      });
  </script>
   
  <div class="mt-6 p-4">
    {{$listings->links()}}
  </div>
  
</x-layout>

