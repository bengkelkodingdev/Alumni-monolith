<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources/css/app.css','resources/js/app.js'])
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <title>Home</title>
</head>

<body>
   

<nav class="bg-white border-gray-200 dark:bg-gray-900">
  <div class="flex flex-wrap justify-between items-center mx-auto max-w-screen-xl p-4">
    <a href="" class="flex items-center space-x-3 rtl:space-x-reverse">
        <img src="https://sti.dinus.ac.id/wp-content/uploads/sites/45/2021/11/logo-ti-01.png" class="h-20" alt="Flowbite Logo" />
        <img src="https://sti.dinus.ac.id/wp-content/uploads/sites/45/2022/08/Logo_udinus1.png" class="h-20" alt="Flowbite Logo" />
        <img src="https://kediri.dinus.ac.id/wp-content/uploads/2022/04/Logo-Unggul-01-1639x2048.png" class="h-20" alt="Flowbite Logo" />
        <span class="self-center text-2xl font-semibold whitespace-nowrap dark:text-white"></span>
    </a>
    <a href="/login" class="btn btn-primary bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
      Sign in
    </a>
    <button data-collapse-toggle="navbar-search" type="button" class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600" aria-controls="navbar-search" aria-expanded="false">
        <span class="sr-only">Open main menu</span>
        <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 17 14">
            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1h15M1 7h15M1 13h15"/>
        </svg>
    </button>
          </div>
    </div>
</nav>
<nav class="bg-blue-500 dark:bg-gray-700">
    <div class="max-w-screen-xl px-4 py-3 mx-auto">
        <div class="flex items-center">
            <ul class="flex flex-row font-medium mt-0 space-x-8 rtl:space-x-reverse text-sm">
                <button id="dropdownNavbarLink" data-dropdown-toggle="dropdownNavbar" class="flex items-center justify-between w-full py-2 px-3 text-gray-900 hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 md:w-auto dark:text-white md:dark:hover:text-blue-500 dark:focus:text-white dark:hover:bg-gray-700 md:dark:hover:bg-transparent">Akademik <svg class="w-2.5 h-2.5 ms-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4"/>
                  </svg></button>
                  <button id="dropdownNavbarLink" data-dropdown-toggle="dropdownNavbar" class="flex items-center justify-between w-full py-2 px-3 text-gray-900 hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 md:w-auto dark:text-white md:dark:hover:text-blue-500 dark:focus:text-white dark:hover:bg-gray-700 md:dark:hover:bg-transparent">Penelitian <svg class="w-2.5 h-2.5 ms-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4"/>
                  </svg></button>
                  <button id="dropdownNavbarLink" data-dropdown-toggle="dropdownNavbar" class="flex items-center justify-between w-full py-2 px-3 text-gray-900 hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 md:w-auto dark:text-white md:dark:hover:text-blue-500 dark:focus:text-white dark:hover:bg-gray-700 md:dark:hover:bg-transparent">Informasi <svg class="w-2.5 h-2.5 ms-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4"/>
                  </svg></button>
                  <button id="dropdownNavbarLink" data-dropdown-toggle="dropdownNavbar" class="flex items-center justify-between w-full py-2 px-3 text-gray-900 hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 md:w-auto dark:text-white md:dark:hover:text-blue-500 dark:focus:text-white dark:hover:bg-gray-700 md:dark:hover:bg-transparent">Tentang <svg class="w-2.5 h-2.5 ms-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4"/>
                </svg></button>
                            <!-- Dropdown menu -->
                            <div id="dropdownNavbar" class="z-10 hidden font-normal bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700 dark:divide-gray-600">
                                
                                  <li>
                                    <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Alumni</a>
                                  </li>
                                  <li>
                                    <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Data Alumni</a>
                                  </li>
                                  <li>
                                    <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Tracer Study</a>
                                  </li>
                                  <li>
                                    <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Lowongan Magang</a>
                                  </li>
                                  <li>
                                    <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Lowongan Kerja</a>
                                  </li>
                                
                                
                            </div>
                        </li>
                <button id="dropdownNavbarLink" data-dropdown-toggle="dropdownNavbar" class="flex items-center justify-between w-full py-2 px-3 text-gray-900 hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 md:w-auto dark:text-white md:dark:hover:text-blue-500 dark:focus:text-white dark:hover:bg-gray-700 md:dark:hover:bg-transparent">Mitra <svg class="w-2.5 h-2.5 ms-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4"/>
                    </svg></button>
                <button id="dropdownNavbarLink" data-dropdown-toggle="dropdownNavbar" class="flex items-center justify-between w-full py-2 px-3 text-gray-900 hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 md:w-auto dark:text-white md:dark:hover:text-blue-500 dark:focus:text-white dark:hover:bg-gray-700 md:dark:hover:bg-transparent">Alumni <svg class="w-2.5 h-2.5 ms-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4"/>
                    </svg></button>
            </ul>
        </div>
    </div>
</nav>

{{-- Hero Section start --}}
<section>
  <div class="  " style="height: 300px; " >
    {{-- content --}}
    <div class="bg-blue-300 p-20 mb-20 ">
      
      <p class="text-center">Welcome To Alumni</p>
      <h1 class="mb-4 text-4xl font-extrabold leading-none tracking-tight text-black md:text-5xl lg:text-6xl dark:text-black text-center">Work the way that works for you</h1>
      <p class="mb-6 font-extrabold leading-none tracking-tight text-black  dark:text-black text-center" >Create, Build, Collaborate and ship products very faster</p>
      <div class="bg-no-repeat bg-right ..." style="background-image: url(...);"></div>
    </div>

    {{-- image --}}
    <div class=" " > 
     
    </div>
  </div>
</section>







<div class="flex w-full m-5 justify-center">
  {{-- content --}}
  <div  class="my-2 w-1/3 mr-3">
    <h3> Perusahaan yang membuka lowongan pekerjaan dan magang</h3>
    
  </div>
  {{-- image --}}
  <div class="block w-1/3">
    <img class="mx-auto " src="{{asset('logo_perusahaan.png')}}" width="400px">
  </div> 

</div>
  
<div>
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
</div>
<div>
  @include('partials._searchmagang')
  <div style="font-family: Arial; font-size: 2em; color: #114D91; font-weight: bold; margin-left: 2%;">
    Magang Populer
  </div>
  <div style="display: flex; justify-content: space-between;">
    <!-- Tabel Lowongan -->
    <div style="width: 60%;">
        <div class="p-2.5">
            @unless(count($listingmagang) == 0)
                @foreach($listingmagang as $listing)
                    <x-listingmagang-card :listingmagang="$listing" />
                @endforeach
            @else
                <p>No Lowongan Found</p>
            @endunless
        </div>
    </div>
    
    <!-- Tabel Pengalaman Magang -->
    <div style="width: 35%;">
      <form id="filterForm2" method="GET" action="{{ route('listingmagang.index') }}">
          <!-- Pengalaman Magang -->
          <div class="bg-blue-500 text-white p-2 rounded-t-lg mr-10 mt-3">
              Pengalaman Magang
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
  
          <!-- Tipe Magang -->
          <div class="bg-blue-500 text-white p-2 rounded-t-lg mr-10 mt-3">
              Tipe Magang
          </div>
          <div class="border border-blue-500 bg-blue-100 p-4 rounded-b-lg mr-10 mb-4">
              @foreach ([
                  'Freelance', 'Full Time', 'Part Time', 'Kontrak', 'Sementara'
              ] as $tipeMagang)
                  <label class="flex items-center mb-2">
                      <input type="checkbox" class="mr-2" name="TipeMagang[]" value="{{ $tipeMagang }}" 
                             {{ in_array($tipeMagang, $selectedTipeMagang) ? 'checked' : '' }} /> {{ $tipeMagang }}
                  </label>
              @endforeach
          </div>
      </form>
  </div>
  
  <script>
      document.querySelectorAll('input[name="Pengalaman[]"], input[name="TipeMagang[]"]').forEach(function(checkbox) {
          checkbox.addEventListener('change', function() {
              document.getElementById('filterForm2').submit();
          });
      });
  </script>
  

  <div class="mt-6 p-4">
    {{$listingmagang->links()}}
  </div>
</div>
   
</section>

<section>
  <div class="  " style="height: 300px; " >
    {{-- content --}}
    <div class="bg-white p-5 w-">

  </div>
</section>

<section>
  <div class="flex w-full">
    {{-- image --}}
    <div class="block w-1/2 ">
      <img class="mx-auto " src="{{asset('Group 32.png')}}" width="400px">
    </div> 

    {{-- content --}}
    <div  class="mt-20 w-[512px]">
      <h3> Manage everything in one workspace</h3>
      <p>Planning, tracking and delivering your team's best work has never been easier. An integrated workspace that's simple to use. teamFlow lets you spend less time managing your work and more time actually doing it</p> 
    </div>

  </div>
</section>

<section>
  <div class="  " style="height: 300px; " >
    {{-- content --}}
    <div class="bg-white p-5 w-">
  </div>
</section>

<section >
  <div class="flex w-full m-5 justify-center">
    {{-- content --}}
    <div  class="mt-20 w-[512px]">
      <h3> Set up in minutes</h3>
      <p>Get started fast with hundreds of visual and customizable templates - or create your own. Use our free online template maker to create beautiful template in minutes. Choose from hundreds of pre-made templates and tell stories with data with our easy drag-and-drop infographic creator.</p> 
    </div>
    {{-- image --}}
    <div class="block w-1/3">
      <img class="mx-auto " src="{{asset('Group 65.png')}}" width="400px">
    </div> 
  
  </div>
  
</section>

<section>
  <div class="  " style="height: 300px; " >
    {{-- content --}}
    <div class="bg-white p-5 w-">
      
  </div>
</section>

<section>
  <div class="flex w-full mb-44">
    {{-- image --}}
    <div class="block w-1/2 ">
      <img class="mx-auto " src="{{asset('Group 68.png')}}" width="400px">
    </div> 

    {{-- content --}}
    <div  class="mt-20 w-[512px]">
      <h3>Save time with Automations</h3>
      <p>Automate the repetitive work in seconds so you can avoid human error and focus on what matters. It gives the impression of software that its highly automated which implies that it is good for client for who want to save time and manage team members easily.</p> 
    </div>
</section>

<section>
  <section >
    <div class="flex w-full m-5 justify-center">
      {{-- content --}}
      <div  class="mt-20 w-[512px]">
        <h3> Visualize work with Views</h3>
        <p>View data as a map, calendar, timeline, kanban, and more
          The easy-to-use, visual interface lets any team member jump in and get started, no training required.</p> 
      </div>
      {{-- image --}}
      <div class="block w-1/3">
        <img class="mx-auto " src="{{asset('Group 71.png')}}" width="400px">
      </div> 
    
    </div>
</section>

<section>
  <div class="flex w-full mt-40">
    {{-- image --}}
    <div class="block w-1/2 ">
      <img class="mx-auto " src="{{asset('Group 76.png')}}" width="400px">
    </div> 

    {{-- content --}}
    <div  class="mt-20 w-[512px]">
      <h3>24/7 Customer Support</h3>
      <p>Our team is here to give you personalized support within the hour available 24/7. In accordance with our commitment to providing superior and professional service. Join daily live webinars, watch our tutorials, or browse through our knowledge base</p> 
    </div>
</section>

<section>
  <div class="  " style="height: 300px; " >
    {{-- content --}}
    <div class="bg-white p-5 w-">
  </div>
</section>
<section>
  <div class="  " style="height: 300px; " >
    {{-- content --}}
    <div class="bg-white p-5 w-">
  </div>
</section>
<section>
</body>
<body>
  



  <footer class="bg-blue-200 rounded-lg shadow m-0 dark:bg-gray-800">
    <div class="w-full mx-auto max-w-screen-xl p-4 md:flex md:items-center md:justify-between">
     
      <a href="" class="flex items-center space-x-3 rtl:space-x-reverse">
        <img src="https://sti.dinus.ac.id/wp-content/uploads/sites/45/2021/11/logo-ti-01.png" class="h-20" alt="Flowbite Logo" />
        <img src="https://sti.dinus.ac.id/wp-content/uploads/sites/45/2022/08/Logo_udinus1.png" class="h-20" alt="Flowbite Logo" />
        <img src="https://kediri.dinus.ac.id/wp-content/uploads/2022/04/Logo-Unggul-01-1639x2048.png" class="h-20" alt="Flowbite Logo" />
        <span class="self-center text-2xl font-semibold whitespace-nowrap dark:text-white"></span>
        
      </a>
    <ul class="flex flex-wrap items-center mt-3 text-sm font-medium text-gray-500 dark:text-gray-400 sm:mt-0">
        <li>
            <a href="#" class="hover:underline me-4 md:me-6">About</a>
        </li>
        <li>
            <a href="#" class="hover:underline me-4 md:me-6">Privacy Policy</a>
        </li>
        <li>
            <a href="#" class="hover:underline me-4 md:me-6">Licensing</a>
        </li>
        <li>
            <a href="#" class="hover:underline">Contact</a>
        </li>
    </ul>
    </div>
</footer>


</body>