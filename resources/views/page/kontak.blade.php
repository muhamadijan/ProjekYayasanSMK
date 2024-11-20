<!DOCTYPE html>
<html lang="en">

<head>
  @foreach($logo as $logo)
  <title>{{ $logo->nama}}</title>
  <link rel="icon" href="{{ asset('/image/'.$logo->logo)}}" type="image/x-icon">

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link href="https://fonts.googleapis.com/css?family=Muli:300,400,700,900" rel="stylesheet">
  <link rel="stylesheet" href="{{asset('/wel/fonts/icomoon/style.css')}}">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
  <link rel="stylesheet" href="{{asset('/wel/css/bootstrap.min.css')}}">
  <link rel="stylesheet" href="{{asset('/wel/css/jquery-ui.css')}}">
  <link rel="stylesheet" href="{{asset('/wel/css/owl.carousel.min.css')}}">
  <link rel="stylesheet" href="{{asset('/wel/css/owl.theme.default.min.css')}}">
  <link rel="stylesheet" href="{{asset('/wel/css/owl.theme.default.min.css')}}">
  <link rel="stylesheet" href="{{asset('/wel/css/jquery.fancybox.min.css')}}">
  <link rel="stylesheet" href="{{asset('/wel/css/bootstrap-datepicker.css')}}">
  <link rel="stylesheet" href="{{asset('/wel/fonts/flaticon/font/flaticon.css')}}">
  <link rel="stylesheet" href="{{asset('/wel/css/aos.css')}}">
  <link href="{{asset('/wel/css/jquery.mb.YTPlayer.min.css')}}" media="all" rel="stylesheet" type="text/css">
  <link rel="stylesheet" href="{{asset('/wel/css/style.css')}}">


</head>

<body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">

  <div class="site-wrap">

    <div class="site-mobile-menu site-navbar-target">
      <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close mt-3">
          <span class="icon-close2 js-menu-toggle"></span>
        </div>
      </div>
      <div class="site-mobile-menu-body"></div>
    </div>

    @foreach($kontak as $kontak)
    <div class="py-2 bg-light">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-lg-9 d-none d-lg-block">
            {{-- <a href="#" class="small mr-3"><span class="icon-question-circle-o mr-2"></span> Have a questions?</a>  --}}
            <a href="#" class="small mr-3"><span class="icon-phone2 mr-2"></span> {!! $kontak->telp !!}</a> 
            <a href="#" class="small mr-3"><span class="icon-envelope-o mr-2"></span>{!! $kontak->email !!}</a> 
          </div>
          <div class="col-lg-3 text-right">
            <a href="/login" class="small mr-3"><span class="icon-unlock-alt"></span> Log In</a>
            {{-- <a href="register.html" class="small btn btn-primary px-4 py-2 rounded-0"><span class="icon-users"></span> Register</a> --}}
          </div>
        </div>
      </div>
    </div>
    @endforeach
    <header class="site-navbar py-4 js-sticky-header site-navbar-target" role="banner">

      <div class="container">
        <div class="d-flex align-items-center">
          <div class="site-logo">
            <a href="#" class="d-block">
              <img src="{{ asset('/image/'.$logo->logo)}}" width="90px" height="90px" alt="Image" class="img-fluid">
            </a>
          </div>
          @endforeach
          <div class="mr-auto">
            <nav class="site-navigation position-relative text-right" role="navigation">
              <ul class="site-menu main-menu js-clone-nav mr-auto d-none d-lg-block">
                <li class="active">
                  <a href="/" class="nav-link text-left">Beranda</a>
                </li>
                <li class="has-children">
                  <a href="#" class="nav-link text-left">Tentang Kami</a>
                  <ul class="dropdown">
                    <li><a href="{{asset('/sejarah-yayasan')}}">Sejarah</a></li>
                    <li><a href="{{asset('/visi-misi')}}">Visi dan Misi</a></li>
                    <li><a href="{{asset('/struktur-organisasi')}}">Organigram</a></li>
                    <li><a href="{{asset('/sarana-prasarana')}}">Sarana Prasarana</a></li>
                  </ul>
                </li>
                <li class="has-children">
                  <a href="#" class="nav-link text-left">Program dan Layanan</a>
                  <ul class="dropdown">
                    @foreach($pesantren as $item)
                    <li><a href="{{$item->link_web}}">Pondok Pesantren</a></li>
                    @endforeach
                    @foreach($mts as $item)
                    <li><a href="{{$item->link_web}}">Madrasah Tsanahwiyah(MTS)</a></li>
                    @endforeach
                    @foreach ($ma as $item)
                    <li><a href="{{$item->link_web}}">Madrasah Aliyah(MA)</a></li>
                    @endforeach
                    @foreach($smk as $item)
                    <li><a href="{{$item->link_web}}">Sekolah Menengah Kejuruan(SMK)</a></li>
                    @endforeach
                  </ul>
                </li>
                <li class="has-children">
                  <a href="about.html" class="nav-link text-left">Galeri</a>
                  <ul class="dropdown">
                    <li><a href="{{asset('/photo')}}">Photo</a></li>
                    <li><a href="{{asset('/video')}}">Video</a></li>
                  </ul>
                </li>
            
                  <a href="{{asset('/berita')}}" class="nav-link text-left">Berita</a>
                </li>
                <li>
                    <a href="{{asset('/kontak')}}" class="nav-link text-left">Kontak</a>
                  </li>
              </ul>                                                                                                                                                                                                                                                                                          </ul>
            </nav>

          </div>
          @foreach($weblink as $weblink)
          <div class="ml-auto">
            <div class="social-wrap">
              <a href="{{$weblink->fb}}"><span class="icon-facebook"></span></a>
              <a href="{{$weblink->ig}}"><span class="icon-instagram"></span></a>
              <a href="{{$weblink->yt}}"><span class="icon-youtube"></span></a>

              <a href="#" class="d-inline-block d-lg-none site-menu-toggle js-menu-toggle text-black"><span
                class="icon-menu h3"></span></a>
            </div>
          </div>
          @endforeach
        </div>
      </div>

    </header>

    
<br><br><br><br>

    <div class="custom-breadcrumns border-bottom">
      <div class="container">
        <a href="/">Beranda</a>
        <span class="mx-3 icon-keyboard_arrow_right"></span>
        <span class="current">Kontak</span>
      </div>
    </div>

    <div class="container pt-5 mb-5">
        <h2 class="section-title-underline text-center mb-4">
            <span>Kontak Yayasan Nurul Islam Affandiyyah</span>
        </h2>
    
        <div class="row">
     
                <div class="col-md-6 mb-4">
                    <!-- Tampilan Google Maps -->
                    @if($kontak->maps)
                        <div class="embed-responsive embed-responsive-16by9">
                            <iframe 
                                class="embed-responsive-item" 
                                src="{{ $kontak->maps }}" 
                                frameborder="0" 
                                allowfullscreen>
                            </iframe>
                        </div>
                    @else
                        <p>Google Maps belum tersedia</p>
                    @endif
                </div>
    
                <div class="col-md-6">
                    <!-- Informasi Kontak -->
                    <ul class="list-unstyled">
                        <li><strong>Telepon:</strong> {{ $kontak->telp ?? 'Tidak tersedia' }}</li>
                        <li><strong>Fax:</strong> {{ $kontak->fax ?? 'Tidak tersedia' }}</li>
                        <li><strong>Email:</strong> {{ $kontak->email ?? 'Tidak tersedia' }}</li>
                    </ul>
                </div>
        </div>
    </div>
    
    
    
    
              <!-- // 05 - Block -->
  <div class="site-section">

    <center>
      <h2 class="section-title-underline mb-3">
        <span>Alamat Yayasan Nurul Islam Affandiyyah</span>
      </h2>
     </center><br><br>

          <div class="footer">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3">
                      <iframe src="{{$kontak->maps}}" width="250" height="250" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                    <div class="col-lg-3">
                        <h3 class="footer-heading"><span>Yayasan Kami</span></h3>
                        <ul class="list-unstyled">
                            <li><a href="{{asset('/sejarah-yayasan')}}">Sejarah</a></li>
                            <li><a href="{{asset('/visi-misi')}}">Visi dan Misi</a></li>
                            <li><a href="{{asset('/struktur-organisasi')}}">Organigram</a></li>
                            <li><a href="{{asset('/sarana-prasarana')}}">Sarana Prasarana</a></li>
                            <li><a href="{{asset('/photo')}}">Photo</a></li>
                            <li><a href="{{asset('/video')}}">Video</a></li>
                            <li><a href="{{asset('/berita')}}">Berita</a></li>
                        </ul>
                    </div>
                    <div class="col-lg-3">
                        <h3 class="footer-heading"><span>Program dan Layanan Kami</span></h3>
                        <ul class="list-unstyled">
                          @foreach($pesantren as $pesantren)
                            <li><a href="{{$pesantren->link_web}}">Pondok Pesantren (PONPES)</a></li>
                            @endforeach
                            @foreach($mts as $mts)
                            <li><a href="{{$mts->link_web}}">Madrasah &amp; Tsanahwiyah (MTS)</a></li>
                            @endforeach
                            @foreach($ma as $ma)
                            <li><a href="{{$ma->link_web}}">Madrasah &amp; Aliyah (MA)</a></li>
                            @endforeach
                            @foreach($smk as $smk)
                            <li><a href="{{$smk->link_web}}">Sekolah Menengah &amp; Kejuruan (SMK)</a></li>
                            @endforeach
                        </ul>
                    </div>
                    <div class="col-lg-3">
                        <h3 class="footer-heading"><span>Kontak</span></h3>
                        <ul class="list-unstyled">
                            <li><a href="#"> HP {!! $kontak->telp !!}</a></li>
                            <li><a href="#">  Fax {!! $kontak->fax !!}</a></li>
                            <li><a href="#"> {!! $kontak->email !!}</a></li>
      
                        </ul>
                    </div>
                </div>
        
                <div class="row">
                    <div class="col-12">
                        <div class="copyright">
                            <p>
                                <!-- Tautan kembali ke Colorlib tidak boleh dihapus. Template dilisensikan di bawah CC BY 3.0. -->
                                Hak Cipta &copy;<script>document.write(new Date().getFullYear());</script> Semua hak dilindungi | Template ini dibuat dengan <i class="icon-heart" aria-hidden="true"></i> oleh <a href="https://colorlib.com" target="_blank">Colorlib</a>
                                <!-- Tautan kembali ke Colorlib tidak boleh dihapus. Template dilisensikan di bawah CC BY 3.0. -->
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    

  </div>
  <!-- .site-wrap -->


  <script src="{{asset('/wel/js/jquery-3.3.1.min.js')}}"></script>
  <script src="{{asset('/wel/js/jquery-migrate-3.0.1.min.js')}}"></script>
  <script src="{{asset('/wel/js/jquery-ui.js')}}"></script>
  <script src="{{asset('/wel/js/popper.min.js')}}"></script>
  <script src="{{asset('/wel/js/bootstrap.min.js')}}"></script>
  <script src="{{asset('/wel/js/owl.carousel.min.js')}}"></script>
  <script src="{{asset('/wel/js/jquery.stellar.min.js')}}"></script>
  <script src="{{asset('/wel/js/jquery.countdown.min.js')}}"></script>
  <script src="{{asset('/wel/js/bootstrap-datepicker.min.js')}}"></script>
  <script src="{{asset('/wel/js/jquery.easing.1.3.js')}}"></script>
  <script src="{{asset('/wel/js/aos.js')}}"></script>
  <script src="{{asset('/wel/js/jquery.fancybox.min.js')}}"></script>
  <script src="{{asset('/wel/js/jquery.sticky.js')}}"></script>
  <script src="{{asset('/wel/js/jquery.mb.YTPlayer.min.js')}}"></script>


  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>

  <script src="{{asset('/wel/js/main.js')}}"></script>

</body>

</html>