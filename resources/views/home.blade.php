{{-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources/css/app.css','resources/js/app.js'])
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>
   
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


<section>
  <div class="  " style="height: 300px; " >
    
    <div class="bg-blue-300 p-20 mb-20 ">
      
      <p class="text-center">Welcome To Alumni</p>
      <h1 class="mb-4 text-4xl font-extrabold leading-none tracking-tight text-black md:text-5xl lg:text-6xl dark:text-black text-center">Work the way that works for you</h1>
      <p class="mb-6 font-extrabold leading-none tracking-tight text-black  dark:text-black text-center" >Create, Build, Collaborate and ship products very faster</p>
      <div class="bg-no-repeat bg-right ..." style="background-image: url(...);"></div>
    </div>

    
    <div class=" " > 
     
    </div>
  </div>
</section>



<div class="flex w-full m-5 justify-center">

  <div  class="my-2 w-1/3 mr-3">
    <h3> Perusahaan yang membuka lowongan pekerjaan dan magang</h3>
    
  </div>

  <div class="block w-1/3">
    <img class="mx-auto " src="{{asset('logo_perusahaan.png')}}" width="400px">
  </div> 

</div>
  
<div>
  <div style="font-family: Arial; font-size: 2em; color: #114D91; font-weight: bold; margin-left: 2%;">
    Pekerjaan Populer
  </div>
  <div style="display: flex; justify-content: space-between;">
   
    <div style="width: 60%;">
      <div class="p-2.5">
          @unless(count($listings) == 0)
              @foreach($listings as $listing)
                  <x-listinglokerhome-card :listing="$listing" />
              @endforeach
          @else
              <p>No Verified Lowongan Found</p>
          @endunless
      </div>
    </div>
  
    <div class="mt-6 p-4">
      {{$listings->links()}}
    </div>
  </div> 
  
</div>
<div>
  <div style="font-family: Arial; font-size: 2em; color: #114D91; font-weight: bold; margin-left: 2%;">
    Magang Populer
  </div>
  <div style="display: flex; justify-content: space-between;">
   
    <div style="width: 60%;">
        <div class="p-2.5">
            @unless(count($listingmagang) == 0)
                @foreach($listingmagang as $listing)
                    <x-listingloganghome-card :listingmagang="$listing" />
                @endforeach
            @else
                <p>No Lowongan Found</p>
            @endunless
        </div>
    </div>
  </div>
  <div class="mt-6 p-4">
    {{$listingmagang->links()}}
  </div>
</div>
   
</section>

<section>
  <div class="  " style="height: 300px; " >
   
    <div class="bg-white p-5 w-">

  </div>
</section>

<section>
  <div class="flex w-full">
   
    <div class="block w-1/2 ">
      <img class="mx-auto " src="{{asset('Group 32.png')}}" width="400px">
    </div> 

   
    <div  class="mt-20 w-[512px]">
      <h3> Manage everything in one workspace</h3>
      <p>Planning, tracking and delivering your team's best work has never been easier. An integrated workspace that's simple to use. teamFlow lets you spend less time managing your work and more time actually doing it</p> 
    </div>

  </div>
</section>

<section>
  <div class="  " style="height: 300px; " >
    
    <div class="bg-white p-5 w-">
  </div>
</section>

<section >
  <div class="flex w-full m-5 justify-center">
   
    <div  class="mt-20 w-[512px]">
      <h3> Set up in minutes</h3>
      <p>Get started fast with hundreds of visual and customizable templates - or create your own. Use our free online template maker to create beautiful template in minutes. Choose from hundreds of pre-made templates and tell stories with data with our easy drag-and-drop infographic creator.</p> 
    </div>
   
    <div class="block w-1/3">
      <img class="mx-auto " src="{{asset('Group 65.png')}}" width="400px">
    </div> 
  
  </div>
  
</section>

<section>
  <div class="  " style="height: 300px; " >
    
    <div class="bg-white p-5 w-">
      
  </div>
</section>

<section>
  <div class="flex w-full mb-44">
   
    <div class="block w-1/2 ">
      <img class="mx-auto " src="{{asset('Group 68.png')}}" width="400px">
    </div> 

    
    <div  class="mt-20 w-[512px]">
      <h3>Save time with Automations</h3>
      <p>Automate the repetitive work in seconds so you can avoid human error and focus on what matters. It gives the impression of software that its highly automated which implies that it is good for client for who want to save time and manage team members easily.</p> 
    </div>
</section>

<section>
  <section >
    <div class="flex w-full m-5 justify-center">
    
      <div  class="mt-20 w-[512px]">
        <h3> Visualize work with Views</h3>
        <p>View data as a map, calendar, timeline, kanban, and more
          The easy-to-use, visual interface lets any team member jump in and get started, no training required.</p> 
      </div>
     
      <div class="block w-1/3">
        <img class="mx-auto " src="{{asset('Group 71.png')}}" width="400px">
      </div> 
    
    </div>
</section>

<section>
  <div class="flex w-full mt-40">
    
    <div class="block w-1/2 ">
      <img class="mx-auto " src="{{asset('Group 76.png')}}" width="400px">
    </div> 

   
    <div  class="mt-20 w-[512px]">
      <h3>24/7 Customer Support</h3>
      <p>Our team is here to give you personalized support within the hour available 24/7. In accordance with our commitment to providing superior and professional service. Join daily live webinars, watch our tutorials, or browse through our knowledge base</p> 
    </div>
</section>

<section>
  <div class="  " style="height: 300px; " >
   
    <div class="bg-white p-5 w-">
  </div>
</section>
<section>
  <div class="  " style="height: 300px; " >
    
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


</body> --}}
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources/css/app.css','resources/js/app.js'])
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>
   
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <title>Home</title>
</head>

<body>
   

<nav class="bg-white border-gray-200 dark:bg-gray-900">
  <div class="flex flex-wrap justify-between items-center mx-auto max-w-screen-xl p-4">
    <a href="" class="flex items-center space-x-3 rtl:space-x-reverse">
      <img src="{{ asset('images/logo-sti.png') }}" class="h-20" alt="Logo STI" />
      <img src="{{ asset('images/logo-udinus.png') }}" class="h-20" alt="Logo Udinus" />
      <img src="{{ asset('images/logo-unggul.png') }}" class="h-20" alt="Logo Udinus" />
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
    </div>
</nav>

    <section class="bg-white dark:bg-gray-900">
        <div class="grid py-8 px-4 mx-auto max-w-screen-xl lg:gap-8 xl:gap-0 lg:py-16 lg:grid-cols-12">
            <div class="place-self-center mr-auto lg:col-span-7">
                <h1 class="mb-4 max-w-2xl text-4xl font-extrabold leading-none md:text-5xl xl:text-6xl dark:text-white">Perusahaan yang membuka lowongan pekerjaan dan magang</h1>
                <p class="mb-6 max-w-2xl font-light text-gray-500 lg:mb-8 md:text-lg lg:text-xl dark:text-gray-400"></p>
                <a href="#" class="inline-flex justify-center items-center py-3 px-5 text-base font-medium text-center text-white rounded-lg border bg-blue-500 hover:bg-blue-700 focus:ring-4 focus:ring-gray-100 dark:text-white dark:border-gray-700 dark:hover:bg-gray-700 dark:focus:ring-gray-800">
                  Get Started
              </a>
                
            </div>
            <div class="hidden lg:mt-0 lg:col-span-5 lg:flex">
              <img class="mx-auto " src="https://img.freepik.com/free-vector/flat-join-us-promo-illustrated_23-2148956435.jpg?t=st=1720414039~exp=1720417639~hmac=5d935f13548c99a24fcb02eba3697099a27485a6b31e53e9f5512b0f25676e0c&w=740" width="400px">
            </div>                
        </div>
    </section>

    
    <div class="container">
      <h1 class="my-5 text-center">Lowongan <span class="my-5 text-center">Pekerjaan</span></h1>
      <p class="text-center">Yuk cari lowongan pekerjaan yang sesuai dengan minatmu!</p>
      <div class="row">
        @foreach($lokers as $loker)
        <div class="col-md-4">
            <div class="card mb-4 shadow-sm">
                <div class="card-body">
                    <div style="display: flex; align-items: center; margin-bottom: 1rem;">
                        <img style="width: 4rem; height: 4rem; margin-right: 1rem; object-fit: cover; border-radius: 9999px; max-width: 64px; max-height: 64px;"
                            src="{{ $loker->Logo ? asset('/storage/imglogo/' . $loker->Logo) : asset('/images/no-image.png') }}" alt="Company Logo" />
                        <div>
                          <button type="button" style="background: none; border: none; color: inherit; text-decoration: none; padding: 0; cursor: pointer;" onclick="showLokerDetail('{{ $loker->id }}')">
                            <b>{{ $loker->Posisi }}</b>
                          </button>
                          <p class="card-text">{{ $loker->NamaPerusahaan }}</p>
                        </div>
                    </div>
                    <x-listinghome-tags :tagsCsv="$loker->Tags" />
                    <div class="d-flex justify-content-between align-items-center">
                        <small class="text-muted">{{ $loker->Gaji }} | {{ $loker->Pengalaman }}</small>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
      </div>
    </div>
    
    <!-- Script untuk menampilkan Pop-up atau Modul -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    <script>
      function showLokerDetail(lokerId) {
          fetch(`/detail-loker/${lokerId}`)
              .then(response => {
                  if (!response.ok) {
                      throw new Error('Network response was not ok');
                  }
                  return response.text();
              })
              .then(data => {
                Swal.fire({
                    html: data,
                    showCloseButton: true,
                    showConfirmButton: false,
                    width: '70%', // Atur lebar SweetAlert2 menjadi 80% dari lebar layar
                });
              })
              .catch(error => {
                  console.error('Error fetching loker detail:', error);
              });
      }
    </script>
    
    
    <div class="container">
      <h1 class="my-5 text-center">Lowongan <span class="my-5 text-center">Magang</span></h1>
      <p class="text-center">yuk cari lowongan magang yang sesuai dengan minatmu!</p>
      <div class="row">
        @foreach($logangs as $logang)
        <div class="col-md-4">
            <div class="card mb-4 shadow-sm">
                <div class="card-body">
                    <div style="display: flex; align-items: center; margin-bottom: 1rem;">
                        <img style="width: 4rem; height: 4rem; margin-right: 1rem; object-fit: cover; border-radius: 9999px; max-width: 64px; max-height: 64px;"
                            src="{{ $logang->Logo ? asset('/storage/imglogo/' . $logang->Logo) : asset('/images/no-image.png') }}" alt="Company Logo" />
                        <div>
                          <button type="button" style="background: none; border: none; color: inherit; text-decoration: none; padding: 0; cursor: pointer;" onclick="showLogangDetail('{{ $logang->id }}')">
                            <b>{{ $logang->Posisi }}</b>
                          </button>
                          <p class="card-text">{{ $logang->NamaPerusahaan }}</p>
                        </div>
                    </div>
                    <x-listinghome-tags :tagsCsv="$logang->Tags" />
                    <div class="d-flex justify-content-between align-items-center">
                        <small class="text-muted">{{ $logang->Gaji }} | {{ $logang->Pengalaman }}</small>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
      </div>
    </div>
    
    <!-- Script untuk menampilkan Pop-up atau Modul -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    <script>
    function showLogangDetail(logangId) {
        fetch(`/detail-logang/${logangId}`)
            .then(response => {
                if (!response.ok) {
                    throw new Error('Network response was not ok');
                }
                return response.text();
            })
            .then(data => {
              Swal.fire({
                  html: data,
                  showCloseButton: true,
                  showConfirmButton: false,
                  width: '70%', // Atur lebar SweetAlert2 menjadi 80% dari lebar layar
              });
            })
            .catch(error => {
                console.error('Error fetching logang detail:', error);
            });
    }
    </script>
      <section class="bg-white dark:bg-gray-900">
        <div class="gap-16 items-center py-8 px-4 mx-auto max-w-screen-xl lg:grid lg:grid-cols-2 lg:py-16 lg:px-6">
            <div class="font-light text-gray-500 sm:text-lg dark:text-gray-400">
                <h2 class="mb-4 text-4xl font-extrabold text-gray-900 dark:text-white">We didn't reinvent the wheel</h2>
                <p class="mb-4">We are strategists, designers and developers. Innovators and problem solvers. Small enough to be simple and quick, but big enough to deliver the scope you want at the pace you need. Small enough to be simple and quick, but big enough to deliver the scope you want at the pace you need.</p>
                <p>We are strategists, designers and developers. Innovators and problem solvers. Small enough to be simple and quick.</p>
            </div>
            <div class="grid grid-cols-2 gap-4 mt-8">
                <img class="w-full rounded-lg" src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/content/office-long-2.png" alt="office content 1">
                <img class="mt-4 w-full rounded-lg lg:mt-10" src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/content/office-long-1.png" alt="office content 2">
            </div>
        </div>
    </section> 
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
  
    
    <script src="https://unpkg.com/flowbite@1.4.7/dist/flowbite.js"></script>
</body>
</html>