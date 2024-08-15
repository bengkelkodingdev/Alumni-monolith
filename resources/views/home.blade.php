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
        {{-- <div class="flex items-center">
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
        </div> --}}
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
     {{-- <section class="bg-gray-50 dark:bg-gray-800">
        <div class="py-8 px-4 mx-auto max-w-screen-xl sm:py-16 lg:px-6">
            <div class="mb-8 max-w-screen-md lg:mb-16">
                <h2 class="mb-4 text-4xl font-extrabold text-gray-900 dark:text-white">Designed for business teams like yours</h2>
                <p class="text-gray-500 sm:text-xl dark:text-gray-400">Here at Flowbite we focus on markets where technology, innovation, and capital can unlock long-term value and drive economic growth.</p>
            </div>
            <div class="space-y-8 md:grid md:grid-cols-2 lg:grid-cols-3 md:gap-12 md:space-y-0">
                <div>
                    <div class="flex justify-center items-center mb-4 w-10 h-10 rounded-full bg-primary-100 lg:h-12 lg:w-12 dark:bg-primary-900">
                        <svg class="w-5 h-5 text-primary-600 lg:w-6 lg:h-6 dark:text-primary-300" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M3 3a1 1 0 000 2v8a2 2 0 002 2h2.586l-1.293 1.293a1 1 0 101.414 1.414L10 15.414l2.293 2.293a1 1 0 001.414-1.414L12.414 15H15a2 2 0 002-2V5a1 1 0 100-2H3zm11.707 4.707a1 1 0 00-1.414-1.414L10 9.586 8.707 8.293a1 1 0 00-1.414 0l-2 2a1 1 0 101.414 1.414L8 10.414l1.293 1.293a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path></svg>
                    </div>
                    <h3 class="mb-2 text-xl font-bold dark:text-white">Marketing</h3>
                    <p class="text-gray-500 dark:text-gray-400">Plan it, create it, launch it. Collaborate seamlessly with all  the organization and hit your marketing goals every month with our marketing plan.</p>
                </div>
                <div>
                    <div class="flex justify-center items-center mb-4 w-10 h-10 rounded-full bg-primary-100 lg:h-12 lg:w-12 dark:bg-primary-900">
                        <svg class="w-5 h-5 text-primary-600 lg:w-6 lg:h-6 dark:text-primary-300" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M10.394 2.08a1 1 0 00-.788 0l-7 3a1 1 0 000 1.84L5.25 8.051a.999.999 0 01.356-.257l4-1.714a1 1 0 11.788 1.838L7.667 9.088l1.94.831a1 1 0 00.787 0l7-3a1 1 0 000-1.838l-7-3zM3.31 9.397L5 10.12v4.102a8.969 8.969 0 00-1.05-.174 1 1 0 01-.89-.89 11.115 11.115 0 01.25-3.762zM9.3 16.573A9.026 9.026 0 007 14.935v-3.957l1.818.78a3 3 0 002.364 0l5.508-2.361a11.026 11.026 0 01.25 3.762 1 1 0 01-.89.89 8.968 8.968 0 00-5.35 2.524 1 1 0 01-1.4 0zM6 18a1 1 0 001-1v-2.065a8.935 8.935 0 00-2-.712V17a1 1 0 001 1z"></path></svg>
                    </div>
                    <h3 class="mb-2 text-xl font-bold dark:text-white">Legal</h3>
                    <p class="text-gray-500 dark:text-gray-400">Protect your organization, devices and stay compliant with our structured workflows and custom permissions made for you.</p>
                </div>
                <div>
                    <div class="flex justify-center items-center mb-4 w-10 h-10 rounded-full bg-primary-100 lg:h-12 lg:w-12 dark:bg-primary-900">
                        <svg class="w-5 h-5 text-primary-600 lg:w-6 lg:h-6 dark:text-primary-300" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M6 6V5a3 3 0 013-3h2a3 3 0 013 3v1h2a2 2 0 012 2v3.57A22.952 22.952 0 0110 13a22.95 22.95 0 01-8-1.43V8a2 2 0 012-2h2zm2-1a1 1 0 011-1h2a1 1 0 011 1v1H8V5zm1 5a1 1 0 011-1h.01a1 1 0 110 2H10a1 1 0 01-1-1z" clip-rule="evenodd"></path><path d="M2 13.692V16a2 2 0 002 2h12a2 2 0 002-2v-2.308A24.974 24.974 0 0110 15c-2.796 0-5.487-.46-8-1.308z"></path></svg>                    
                    </div>
                    <h3 class="mb-2 text-xl font-bold dark:text-white">Business Automation</h3>
                    <p class="text-gray-500 dark:text-gray-400">Auto-assign tasks, send Slack messages, and much more. Now power up with hundreds of new templates to help you get started.</p>
                </div>
                <div>
                    <div class="flex justify-center items-center mb-4 w-10 h-10 rounded-full bg-primary-100 lg:h-12 lg:w-12 dark:bg-primary-900">
                        <svg class="w-5 h-5 text-primary-600 lg:w-6 lg:h-6 dark:text-primary-300" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M8.433 7.418c.155-.103.346-.196.567-.267v1.698a2.305 2.305 0 01-.567-.267C8.07 8.34 8 8.114 8 8c0-.114.07-.34.433-.582zM11 12.849v-1.698c.22.071.412.164.567.267.364.243.433.468.433.582 0 .114-.07.34-.433.582a2.305 2.305 0 01-.567.267z"></path><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-13a1 1 0 10-2 0v.092a4.535 4.535 0 00-1.676.662C6.602 6.234 6 7.009 6 8c0 .99.602 1.765 1.324 2.246.48.32 1.054.545 1.676.662v1.941c-.391-.127-.68-.317-.843-.504a1 1 0 10-1.51 1.31c.562.649 1.413 1.076 2.353 1.253V15a1 1 0 102 0v-.092a4.535 4.535 0 001.676-.662C13.398 13.766 14 12.991 14 12c0-.99-.602-1.765-1.324-2.246A4.535 4.535 0 0011 9.092V7.151c.391.127.68.317.843.504a1 1 0 101.511-1.31c-.563-.649-1.413-1.076-2.354-1.253V5z" clip-rule="evenodd"></path></svg>
                    </div>
                    <h3 class="mb-2 text-xl font-bold dark:text-white">Finance</h3>
                    <p class="text-gray-500 dark:text-gray-400">Audit-proof software built for critical financial operations like month-end close and quarterly budgeting.</p>
                </div>
                <div>
                    <div class="flex justify-center items-center mb-4 w-10 h-10 rounded-full bg-primary-100 lg:h-12 lg:w-12 dark:bg-primary-900">
                        <svg class="w-5 h-5 text-primary-600 lg:w-6 lg:h-6 dark:text-primary-300" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M7 3a1 1 0 000 2h6a1 1 0 100-2H7zM4 7a1 1 0 011-1h10a1 1 0 110 2H5a1 1 0 01-1-1zM2 11a2 2 0 012-2h12a2 2 0 012 2v4a2 2 0 01-2 2H4a2 2 0 01-2-2v-4z"></path></svg>
                    </div>
                    <h3 class="mb-2 text-xl font-bold dark:text-white">Enterprise Design</h3>
                    <p class="text-gray-500 dark:text-gray-400">Craft beautiful, delightful experiences for both marketing and product with real cross-company collaboration.</p>
                </div>
                <div>
                    <div class="flex justify-center items-center mb-4 w-10 h-10 rounded-full bg-primary-100 lg:h-12 lg:w-12 dark:bg-primary-900">
                        <svg class="w-5 h-5 text-primary-600 lg:w-6 lg:h-6 dark:text-primary-300" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M11.49 3.17c-.38-1.56-2.6-1.56-2.98 0a1.532 1.532 0 01-2.286.948c-1.372-.836-2.942.734-2.106 2.106.54.886.061 2.042-.947 2.287-1.561.379-1.561 2.6 0 2.978a1.532 1.532 0 01.947 2.287c-.836 1.372.734 2.942 2.106 2.106a1.532 1.532 0 012.287.947c.379 1.561 2.6 1.561 2.978 0a1.533 1.533 0 012.287-.947c1.372.836 2.942-.734 2.106-2.106a1.533 1.533 0 01.947-2.287c1.561-.379 1.561-2.6 0-2.978a1.532 1.532 0 01-.947-2.287c.836-1.372-.734-2.942-2.106-2.106a1.532 1.532 0 01-2.287-.947zM10 13a3 3 0 100-6 3 3 0 000 6z" clip-rule="evenodd"></path></svg>
                    </div>
                    <h3 class="mb-2 text-xl font-bold dark:text-white">Operations</h3>
                    <p class="text-gray-500 dark:text-gray-400">Keep your company’s lights on with customizable, iterative, and structured workflows built for all efficient teams and individual.</p>
                </div>
            </div>
        </div>
      </section> --}}

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

    {{-- <section class="bg-gray-50 dark:bg-gray-900 dark:bg-gray-800">
        <div class="py-8 px-4 mx-auto max-w-screen-xl lg:py-16 lg:px-6">
            <div class="max-w-screen-lg text-gray-500 sm:text-lg dark:text-gray-400">
                <h2 class="mb-4 text-4xl font-bold text-gray-900 dark:text-white">Powering innovation at <span class="font-extrabold">200,000+</span> companies worldwide</h2>
                <p class="mb-4 font-light">Track work across the enterprise through an open, collaborative platform. Link issues across Jira and ingest data from other software development tools, so your IT support and operations teams have richer contextual information to rapidly respond to requests, incidents, and changes.</p>
                <p class="mb-4 font-medium">Deliver great service experiences fast - without the complexity of traditional ITSM solutions.Accelerate critical development work, eliminate toil, and deploy changes with ease.</p>
                <a href="#" class="inline-flex items-center font-medium text-primary-600 hover:text-primary-800 dark:text-primary-500 dark:hover:text-primary-700">
                    Learn more
                    <svg class="ml-1 w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path></svg>
                </a>
            </div>
        </div>
      </section>

      <section class="bg-white dark:bg-gray-900">
        <div class="py-8 px-4 mx-auto max-w-screen-xl sm:py-16 lg:px-6">
            <div class="mx-auto max-w-screen-sm text-center">
                <h2 class="mb-4 text-4xl font-extrabold leading-tight text-gray-900 dark:text-white">Start your free trial today</h2>
                <p class="mb-6 font-light text-gray-500 dark:text-gray-400 md:text-lg">Try Flowbite Platform for 30 days. No credit card required.</p>
                <a href="#" class="text-white bg-primary-700 hover:bg-primary-800 focus:ring-4 focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-primary-600 dark:hover:bg-primary-700 focus:outline-none dark:focus:ring-primary-800">Free trial for 30 days</a>
            </div>
        </div>
    </section> --}}

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