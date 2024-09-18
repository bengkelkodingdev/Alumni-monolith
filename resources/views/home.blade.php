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
    <style>
        /* Custom styles for better responsiveness */
        .header-logos img {
            height: 50px;
        }

        .card img {
            width: 64px;
            height: 64px;
            border-radius: 50%;
            object-fit: cover;
        }

        .hero-image {
            max-width: 100%;
            height: auto;
        }

        @media (max-width: 768px) {
            .hero-text {
                text-align: center;
                margin-top: 1rem;
            }

            .hero-image {
                display: none;
            }

            .navbar-collapse {
                display: none;
            }

            .navbar-toggler {
                display: block;
            }
        }
    </style>
</head>
<body>
    <nav class="bg-white border-gray-200 dark:bg-gray-900">
        <div class="container d-flex justify-between align-items-center py-2">
            <div class="header-logos d-flex align-items-center">
                <img src="{{ asset('images/logo-sti.png') }}" alt="Logo STI" />
                <img src="{{ asset('images/logo-udinus.png') }}" alt="Logo Udinus" />
                <img src="{{ asset('images/logo-unggul.png') }}" alt="Logo Unggul" />
            </div>
            <a href="/login" class="btn btn-primary">Sign in</a>
            <button data-collapse-toggle="navbar-search" type="button" class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600" aria-controls="navbar-search" aria-expanded="false">
        </div>
    </nav>
    <nav class="bg-blue-500 dark:bg-gray-700">
        <div class="container py-2">
            <!-- Additional content can go here -->
        </div>
    </nav>

    <section class="bg-white dark:bg-gray-900 py-8">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-7 hero-text">
                    <h1 class="mb-4 text-4xl font-extrabold leading-none md:text-5xl xl:text-6xl dark:text-white">
                        Perusahaan yang membuka lowongan pekerjaan dan magang
                    </h1>
                    <p class="mb-6 text-gray-500 lg:text-xl dark:text-gray-400"></p>
                    <a href="#" class="btn btn-primary">Get Started</a>
                </div>
                <div class="col-lg-5 d-none d-lg-block">
                    <img class="hero-image" src="https://img.freepik.com/free-vector/flat-join-us-promo-illustrated_23-2148956435.jpg?t=st=1720414039~exp=1720417639~hmac=5d935f13548c99a24fcb02eba3697099a27485a6b31e53e9f5512b0f25676e0c&w=740" alt="Hero Image">
                </div>
            </div>
        </div>
    </section>

    <div class="container">
        <h1 class="my-5 text-center">Lowongan <span>Pekerjaan</span></h1>
        <p class="text-center">Yuk cari lowongan pekerjaan yang sesuai dengan minatmu!</p>
        <div class="row">
            @foreach($lokers as $loker)
            <div class="col-md-4 mb-4">
                <div class="card shadow-sm">
                    <div class="card-body">
                        <div class="d-flex align-items-center mb-3">
                            <img src="{{ $loker->Logo ? asset('/storage/imglogo/' . $loker->Logo) : asset('/images/no-image.png') }}" alt="Company Logo" />
                            <div class="ms-3">
                                <button type="button" class="btn btn-link" onclick="showLokerDetail('{{ $loker->id }}')">
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
<<<<<<< HEAD
=======
        
        <div class="d-flex justify-content-end">
          {{ $lokers->links('pagination::bootstrap-4') }}
        </div>
      </div>
>>>>>>> 3aebf173b894946a73d1fcfd3426d1c909779fc3
    </div>

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    <script>
        function showLokerDetail(lokerId) {
            fetch(`/detail-loker/${lokerId}`)
                .then(response => response.text())
                .then(data => {
                    Swal.fire({
                        html: data,
                        showCloseButton: true,
                        showConfirmButton: false,
                        width: '70%',
                    });
                })
                .catch(error => console.error('Error fetching loker detail:', error));
        }
    </script>

    <div class="container">
        <h1 class="my-5 text-center">Lowongan <span>Magang</span></h1>
        <p class="text-center">Yuk cari lowongan magang yang sesuai dengan minatmu!</p>
        <div class="row">
            @foreach($logangs as $logang)
            <div class="col-md-4 mb-4">
                <div class="card shadow-sm">
                    <div class="card-body">
                        <div class="d-flex align-items-center mb-3">
                            <img src="{{ $logang->Logo ? asset('/storage/imglogo/' . $logang->Logo) : asset('/images/no-image.png') }}" alt="Company Logo" />
                            <div class="ms-3">
                                <button type="button" class="btn btn-link" onclick="showLogangDetail('{{ $logang->id }}')">
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
<<<<<<< HEAD
=======
        
        <div class="d-flex justify-content-end">
          {{ $logangs->links('pagination::bootstrap-4') }}
        </div>
      </div>
>>>>>>> 3aebf173b894946a73d1fcfd3426d1c909779fc3
    </div>

    <script>
        function showLogangDetail(logangId) {
            fetch(`/detail-logang/${logangId}`)
                .then(response => response.text())
                .then(data => {
                    Swal.fire({
                        html: data,
                        showCloseButton: true,
                        showConfirmButton: false,
                        width: '70%',
                    });
                })
                .catch(error => console.error('Error fetching logang detail:', error));
        }
    </script>

    <section class="bg-white dark:bg-gray-900 py-8">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <h2 class="mb-4 text-4xl font-extrabold text-gray-900 dark:text-white">We didn't reinvent the wheel</h2>
                    <p class="mb-4 text-gray-500 dark:text-gray-400">We are strategists, designers and developers. Innovators and problem solvers. Small enough to be simple and quick, but big enough to deliver the scope you want at the pace you need.</p>
                    <p class="text-gray-500 dark:text-gray-400">We are strategists, designers and developers. Innovators and problem solvers. Small enough to be simple and quick.</p>
                </div>
                <div class="col-lg-6">
                    <div class="row">
                        <div class="col-6 mb-4">
                            <img class="w-100 rounded-lg" src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/content/office-long-2.png" alt="office content 1">
                        </div>
                        <div class="col-6">
                            <img class="w-100 rounded-lg" src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/content/office-long-1.png" alt="office content 2">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <footer class="bg-blue-200 rounded-lg shadow dark:bg-gray-800">
        <div class="container d-flex flex-column flex-md-row justify-between align-items-center py-4">
            <div class="d-flex align-items-center mb-3 mb-md-0">
                <img src="{{ asset('images/logo-sti.png') }}" class="h-20" alt="Logo STI" />
                <img src="{{ asset('images/logo-udinus.png') }}" class="h-20" alt="Logo Udinus" />
                <img src="{{ asset('images/logo-unggul.png') }}" class="h-20" alt="Logo Unggul" />
            </div>
            <ul class="list-inline mb-0">
                <li class="list-inline-item">
                    <a href="#" class="text-gray-500 dark:text-gray-400">About</a>
                </li>
                <li class="list-inline-item">
                    <a href="#" class="text-gray-500 dark:text-gray-400">Privacy Policy</a>
                </li>
                <li class="list-inline-item">
                    <a href="#" class="text-gray-500 dark:text-gray-400">Licensing</a>
                </li>
                <li class="list-inline-item">
                    <a href="#" class="text-gray-500 dark:text-gray-400">Contact</a>
                </li>
            </ul>
        </div>
    </footer>

    <script src="https://unpkg.com/flowbite@1.4.7/dist/flowbite.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
