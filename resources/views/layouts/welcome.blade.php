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
            <a href="index.html" class="d-block">
              <img src="{{ asset('/image/'.$logo->logo)}}" width="90px" height="90px" alt="Image" class="img-fluid">
            </a>
          </div>
          @endforeach
          <div class="mr-auto">
            <nav class="site-navigation position-relative text-right" role="navigation">
              <ul class="site-menu main-menu js-clone-nav mr-auto d-none d-lg-block">
                <li class="active">
                  <a href="index.html" class="nav-link text-left">Beranda</a>
                </li>
                <li class="has-children">
                  <a href="about.html" class="nav-link text-left">Tentang Kami</a>
                  <ul class="dropdown">
                    <li><a href="{{asset('/sejarah-yayasan')}}">Sejarah</a></li>
                    <li><a href="{{asset('/visi-misi')}}">Visi dan Misi</a></li>
                    <li><a href="{{asset('/struktur-organisasi')}}">Organigram</a></li>
                    <li><a href="{{asset('/sarana-prasarana')}}">Sarana Prasarana</a></li>
                  </ul>
                </li>
                <li class="has-children">
                  <a href="about.html" class="nav-link text-left">Program dan Layanan</a>
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
<!-- Pastikan Anda memiliki Bootstrap CSS dan JS di layout Anda -->
@foreach($navbar as $navbar)
<div id="navbarCarousel" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner">
        <!-- Loop untuk membuat setiap gambar sebagai item carousel -->
        <div class="carousel-item active">
            <div class="intro-section" style="background-image: url('{{ asset('/image/' . $navbar->gambar1) }}');">
                </div>
            </div>
        </div>
        <!-- Tambahkan gambar lainnya -->
        <div class="carousel-item">
            <div class="intro-section" style="background-image: url('{{ asset('/image/' . $navbar->gambar2) }}');">
            </div>
        </div>
        <div class="carousel-item">
            <div class="intro-section" style="background-image: url('{{ asset('/image/' . $navbar->gambar3) }}');">
            
            </div>
        </div>
        <div class="carousel-item">
          <div class="intro-section" style="background-image: url('{{ asset('/image/' . $navbar->gambar4) }}');">
          
          </div>
      </div>
       <div class="carousel-item">
        <div class="intro-section" style="background-image: url('{{ asset('/image/' . $navbar->gambar5) }}');">
        
        </div>
    </div>
    </div>


   
</div>
@endforeach


    <div></div>
    @foreach($tentang as $item)
    <div class="site-section">
        <div class="container">
            <div class="row mb-5 justify-content-center text-center">
                <div class="col-lg-6 mb-5">
                    <h2 class="section-title-underline mb-3">
                        <span>{!! $item->judul !!}</span>
                    </h2>
                    <p>{!! $item->isi !!}</p>
                </div>
            </div>
    
            <div class="row">
                <div class="col-lg-3 col-md-6 mb-4">
                    <div class="feature-1 border text-center">
                        <div class="icon-wrapper bg-primary p-4">
                            <!-- Ikon siswa -->
                            <i class="fas fa-user-graduate fa-3x text-white"></i>
                        </div>
                        <div class="feature-1-content p-3">
                            <h1 style="color: rgb(58, 232, 84)">{!! $item->siswa !!}</h1>
                            <h3>Siswa</h3>
                        </div>
                    </div>
                </div>
    
                <div class="col-lg-3 col-md-6 mb-4">
                    <div class="feature-1 border text-center">
                        <div class="icon-wrapper bg-primary p-4">
                            <!-- Ikon tahun berdiri -->
                            <i class="fas fa-calendar-alt fa-3x text-white"></i>
                        </div>
                        <div class="feature-1-content p-3">
                            <h1 style="color: rgb(58, 232, 84)">{!! $item->tahun_berdiri !!}</h1>
                            <h3>Tahun Berdiri</h3>
                        </div>
                    </div>
                </div>
    
                <div class="col-lg-3 col-md-6 mb-4">
                    <div class="feature-1 border text-center">
                        <div class="icon-wrapper bg-primary p-4">
                            <!-- Ikon guru dan karyawan -->
                            <i class="fas fa-chalkboard-teacher fa-3x text-white"></i>
                        </div>
                        <div class="feature-1-content p-3">
                            <h1 style="color: rgb(58, 232, 84)">{!! $item->guru_karyawan !!}</h1>
                            <h3>Guru dan Karyawan</h3>
                        </div>
                    </div>
                </div>
    
                <div class="col-lg-3 col-md-6 mb-4">
                    <div class="feature-1 border text-center">
                        <div class="icon-wrapper bg-primary p-4">
                            <!-- Ikon lembaga pendidikan -->
                            <i class="fas fa-school fa-3x text-white"></i>
                        </div>
                        <div class="feature-1-content p-3">
                            <h1 style="color: rgb(58, 232, 84)">{!! $item->lembaga !!}</h1>
                            <h3>Lembaga Pendidikan</h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endforeach
    

    <div class="site-section">
      <div class="container">


        <div class="row mb-5 justify-content-center text-center">
          <div class="col-lg-6 mb-5">
            <h2 class="section-title-underline mb-3">
              <span>Lembaga Pendidikan Kami</span>
            </h2>
            {{-- <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Officia, id?</p> --}}
          </div>
        </div>

        <div class="row">
          <div class="col-12">
              <div class="owl-slide-3 owl-carousel">
      
                  <!-- Loop untuk data Pesantren -->
                  @foreach($pesantren as $item)
                  <div class="course-1-item">
                      <figure class="thumnail">
                          <a href="#"><img src="{{ asset('/image/' . $item->gambar) }}" alt="Image" class="img-fluid"></a>
                          <div class="category"><h3>{{ $item->judul }}</h3></div>  
                      </figure>
                      <div class="course-1-content pb-4">
                          <div class="rating text-center mb-3">
                              <span class="icon-star2 text-warning"></span>
                              <span class="icon-star2 text-warning"></span>
                              <span class="icon-star2 text-warning"></span>
                              <span class="icon-star2 text-warning"></span>
                              <span class="icon-star2 text-warning"></span>
                          </div>
                          <p class="desc mb-4">{!! $item->isi !!}</p>
                          <p><a href="{{ $item->link_web }}" class="btn btn-primary rounded-0 px-4">Web Ponpes</a></p>
                      </div>
                  </div>
                  @endforeach
      
                  <!-- Loop untuk data MTS -->
                  @foreach($mts as $item)
                  <div class="course-1-item">
                      <figure class="thumnail">
                          <a href="#"><img src="{{ asset('/image/' . $item->gambar) }}" alt="Image" class="img-fluid"></a>
                          <div class="category"><h3>{{ $item->judul }}</h3></div>  
                      </figure>
                      <div class="course-1-content pb-4">
                          <div class="rating text-center mb-3">
                              <span class="icon-star2 text-warning"></span>
                              <span class="icon-star2 text-warning"></span>
                              <span class="icon-star2 text-warning"></span>
                              <span class="icon-star2 text-warning"></span>
                              <span class="icon-star2 text-warning"></span>
                          </div>
                          <p class="desc mb-4">{!! $item->isi !!}</p>
                          <p><a href="{{ $item->link_web }}" class="btn btn-primary rounded-0 px-4">Web MTS</a></p>
                      </div>
                  </div>
                  @endforeach
      
                  <!-- Loop untuk data MA -->
                  @foreach($ma as $item)
                  <div class="course-1-item">
                      <figure class="thumnail">
                          <a href="#"><img src="{{ asset('/image/' . $item->gambar) }}" alt="Image" class="img-fluid"></a>
                          <div class="category"><h3>{{ $item->judul }}</h3></div>  
                      </figure>
                      <div class="course-1-content pb-4">
                          <div class="rating text-center mb-3">
                              <span class="icon-star2 text-warning"></span>
                              <span class="icon-star2 text-warning"></span>
                              <span class="icon-star2 text-warning"></span>
                              <span class="icon-star2 text-warning"></span>
                              <span class="icon-star2 text-warning"></span>
                          </div>
                          <p class="desc mb-4">{!! $item->isi !!}</p>
                          <p><a href="{{ $item->link_web }}" class="btn btn-primary rounded-0 px-4">Web MA</a></p>
                      </div>
                  </div>
                  @endforeach
      
                  <!-- Loop untuk data SMK -->
                  @foreach($smk as $item)
                  <div class="course-1-item">
                      <figure class="thumnail">
                          <a href="#"><img src="{{ asset('/image/' . $item->gambar) }}" alt="Image" class="img-fluid"></a>
                          <div class="category"><h3>{{ $item->judul }}</h3></div>  
                      </figure>
                      <div class="course-1-content pb-4">
                          <div class="rating text-center mb-3">
                              <span class="icon-star2 text-warning"></span>
                              <span class="icon-star2 text-warning"></span>
                              <span class="icon-star2 text-warning"></span>
                              <span class="icon-star2 text-warning"></span>
                              <span class="icon-star2 text-warning"></span>
                          </div>
                          <p class="desc mb-4">{!! $item->isi !!}</p>
                          <p><a href="{{ $item->link_web }}" class="btn btn-primary rounded-0 px-4">Web SMK</a></p>
                      </div>
                  </div>
                  @endforeach
      
              </div>
          </div>
      </div>
      
        
        
      </div>
    </div>

 <center>
  <h2 class="section-title-underline mb-3">
    <span>Kepala Yayasan Nurul Islam Affandiyyah</span>
  </h2>
 </center><br><br>

    @foreach($sambutan as $sambutan)
    <div class="section-bg style-1" style="background-image:">
      <div class="container">
        <div class="row">
          <div class="col-lg-4">
            <h2 class="section-title-underline style-2">
              <span>{{ $sambutan->judul }}</span><br><br>
              <img class="img-fluid" src="{{ asset('/image/' . $sambutan->gambar) }}"  width="300px" height="300px">
            </h2>
          </div>
          <div class="col-lg-8">
            <p>{!! $sambutan->isi !!}</p>
       
          </div>
        </div>
      </div>
    </div>
    @endforeach
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


  <!-- loader -->
  <div id="loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#51be78"/></svg></div>

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