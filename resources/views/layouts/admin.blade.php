<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Yayasan Nurul Islam Affandiyyah</title>
    <link rel="icon" href="{{asset('/assets/img/Logo_Yayasan.png')}}" type="image/x-icon">
    <!-- General CSS Files -->
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
    <!-- CSS Libraries -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <!-- Template CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/components.css') }}">
    <link rel="stylesheet" href="{{asset('datatable/css/dataTables.css')}}">
    <link href="https://owlcarousel2.github.io/OwlCarousel2/assets/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet"/>
    <link href="https://owlcarousel2.github.io/OwlCarousel2/assets/css/animate.css" rel="stylesheet"/>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/color-calendar/dist/css/theme-basic.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/color-calendar/dist/css/theme-glass.css" />
    <script src="https://cdn.jsdelivr.net/npm/color-calendar/dist/bundle.min.js"></script>
    <script src="{{ asset('assets/js/jquery.min.js') }}"></script>
    <script src="https://owlcarousel2.github.io/OwlCarousel2/assets/owlcarousel/owl.carousel.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>
    <script src="{{asset('datatable/js/jquery.dataTables.js')}}"></script>
    <script src="{{asset('datatable/js/dataTables.js')}}"></script>
    <style>
    .kotak {
        color: #fff;
    }

    .table-style .today {
        background: #2A3F54;
        color: #ffffff;
    }

    .table-style th:nth-of-type(7),
    td:nth-of-type(7) {
        color: blue;
    }

    .table-style th:nth-of-type(1),
    td:nth-of-type(1) {
        color: red;
    }

    .table-style tr:first-child th {
        background-color: #F6F6F6;
        text-align: center;
        font-size: 15px;
    }

</style>
    <style>
        *{
            font-family: 'Poppins';
        }
    </style>
    @yield('css')
</head>

<body>
    <div id="app">
        <div class="main-wrapper main-wrapper-1">
            <div class="navbar-bg"></div>
            <nav class="navbar navbar-expand-lg main-navbar">
                <form class="form-inline mr-auto">
                    <ul class="navbar-nav mr-3">
                        <li><a href="#" data-toggle="sidebar" class="nav-link nav-link-lg"><i
                                    class="fas fa-bars"></i></a></li>
                    </ul>
                </form>
      

            </nav>
            <div class="main-sidebar sidebar-style-2">
                <aside id="sidebar-wrapper ">
                    <div class="sidebar-brand bg-primary">
                    <img alt="image" src="{{ asset('/assets/img/logo.png')}}" width="60px" height="60px"
         class="rounded-circle mr-1">
       
                        <!-- <a href="">{{ auth()->user()->name }}</a> -->
                    </div>
                    <div class="sidebar-brand sidebar-brand-sm bg-primary">
                        <a href="">SIA v2.1</a>
                    </div>
                    <ul class="sidebar-menu ">
                        <li class="menu-header"> SIA v2.1</li>
                        <li class="nav-item">
                            <a class="nav-link collapsed" href="/dashboard">
                                <i class="fas fa-tachometer-alt text-info"></i>
                                <span>Dashboard</span>
                            </a>
                        </li>
                        
                        <li class="nav-item dropdown">
                            <a href="#" class="nav-link has-dropdown">
                                <i class="fas fa-university text-info"></i>
                                <span>Profil</span>
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="nav-link" href="{{ asset('/profil/sejarah') }}">Sejarah</a></li>
                                <li><a class="nav-link" href="{{ asset('/profil/visi-misi') }}">Visi dan Misi</a></li>
                                <li><a class="nav-link" href="{{asset('/profil/struktur-organisasi')}}">Organigram</a></li>
                                <li><a class="nav-link" href="{{asset('/profil/sarana')}}">Sarana Prasarana</a></li>
                                <li><a class="nav-link" href="{{asset('/profil/kepala-yayasan')}}">Sambutan Yayasan</a></li>
                            </ul>
                        </li>
                        
                        <li class="nav-item dropdown">
                            <a href="#" class="nav-link has-dropdown">
                                <i class="fas fa-university text-info"></i>
                                <span>Program dan Layanan</span>
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="nav-link" href="{{asset('/lembaga-pendidikan/pesantren')}}">Pondok Pesantren</a></li>
                                <li><a class="nav-link" href="{{asset('/lembaga-pendidikan/mts')}}">Madrasah Tsanawiyah (MTS)</a></li>
                                <li><a class="nav-link" href="{{asset('/lembaga-pendidikan/ma')}}">Madrasah Aliyah(MA)</a></li>
                                <li><a class="nav-link" href="{{asset('/lembaga-pendidikan/smk')}}">Sekolah Menengah Kejuruan(SMK)</a></li>
                            </ul>
                        </li>
                        
                        <li class="nav-item dropdown">
                            <a href="#" class="nav-link has-dropdown">
                                <i class="fas fa-images text-info"></i>
                                <span>Galeri</span>
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="nav-link" href="{{asset('/multimedia/galeri')}}">Foto</a></li>
                                <li><a class="nav-link" href="{{asset('/profil/vidio')}}">Video</a></li>
                                <li><a class="nav-link"  href="{{route('kontak.weblink.index')}}">Weblink</a></li>
                                <li><a class="nav-link"  href="{{route('profil.logo.index')}}">Logo</a></li>
                                <li><a class="nav-link"  href="{{route('profil.navbar.index')}}">Navbar</a></li>
                            </ul>
                        </li>
                        
                        <li class="nav-item">
                            <a class="nav-link collapsed" href="{{asset('/profil/berita')}}">
                                <i class="fas fa-edit text-info"></i>
                                <span>Berita</span>
                            </a>
                        </li>
                        
                        
                        <li class="nav-item">
                            <a class="nav-link collapsed" href="{{asset('/kontak/kontak-yayasan')}}">
                                <i class="fas fa-phone-alt text-info"></i>
                                <span>Kontak</span>
                            </a>
                        </li>
                        
                        <li class="nav-item dropdown">
                            <a href="#" class="nav-link has-dropdown">
                                <i class="fas fa-user text-info"></i>
                                <span>Akun</span>
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="nav-link" href="{{ asset('/akun/admin') }}">Ubah Password</a></li>
                            </ul>
                        </li>
                        
                            
                            <li class="dropdown">
    <a href="{{ route('logout') }}" style="cursor: pointer" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" class="dropdown-item has-icon text-danger">
        <i class="fas fa-sign-out-alt"></i> Logout
    </a>
    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
        @csrf
    </form>
</li>
    

                          
                    </ul>
                </aside>
            </div>

            <!-- Main Content -->
            @yield('content')

            <footer  class="main-footer ">
                <div class="footer-left">
                     &copy; 2023 <div class="bullet"></div> SIA v2.1 <div class="bullet"></div>Farijan
                </div>
                <div class="footer-right">

                </div>
            </footer>
        </div>
    </div>

    <!-- General JS Scripts -->
    <script src="{{ asset('assets/js/popper.min.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.nicescroll/3.7.6/jquery.nicescroll.min.js"></script>
    <script src="{{ asset('assets/js/stisla.js') }}"></script>

    <!-- JS Libraies -->

    <!-- Page Specific JS File -->

    <!-- Template JS File -->
    <script src="{{ asset('assets/js/scripts.js') }}"></script>
    <script src="{{ asset('assets/js/custom.js') }}"></script>
    @yield('js')

    <script>
        //active select2


        //flash message
        @if(session()-> has('success'))
        swal({
            type: "success",
            icon: "success",
            title: "BERHASIL!",
            text: "{{ session('success') }}",
            timer: 1500,
            showConfirmButton: false,
            showCancelButton: false,
            buttons: false,
        });
        @elseif(session()-> has('error'))
        swal({
            type: "error",
            icon: "error",
            title: "GAGAL!",
            text: "{{ session('error') }}",
            timer: 1500,
            showConfirmButton: false,
            showCancelButton: false,
            buttons: false,
        });
        @endif
    </script>
    <script>
    document.querySelector('a[onclick]').addEventListener('click', function(e) {
        e.preventDefault();
        if (confirm('Apakah Anda yakin ingin keluar?')) {
            document.getElementById('logout-form').submit();
        }
    });
</script>

</body>
</html>