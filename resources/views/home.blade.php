<!DOCTYPE html>
<html lang="En">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Imperial Dimsum Palace - Index</title>
  <meta content="" name="description">
  <meta content="" name="keywords">
  <meta name="csrf-token" content="{{ csrf_token() }}">


  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Playfair+Display:ital,wght@0,400;0,500;0,600;0,700;1,400;1,500;1,600;1,700|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
  
  <!-- Favicons -->
  <link href="{{ asset('vendor/animate.css/animate.min.css') }}" rel="stylesheet">
<link href="{{ asset('vendor/aos/aos.css') }}" rel="stylesheet">
<link href="{{ asset('vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
<link href="{{ asset('vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
<link href="{{ asset('vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
<link href="{{ asset('vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
<link href="{{ asset('vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">
<link href="{{ asset('css/style.css') }}" rel="stylesheet">


  <!-- =======================================================
  * Template Name: IMPERIAL DIMSUM PALCE
  * Template URL: https://bootstrapmade.com/restaurantly-restaurant-template/
  * Updated: Mar 17 2024 with Bootstrap v5.3.3
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->

  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  
  <!-- Tambahkan JavaScript untuk AJAX -->
  <script>
    $(document).ready(function() {
      $('#appointmentForm').on('submit', function(event) {
        event.preventDefault(); // Mencegah pengiriman form secara default

        $.ajax({
          url: $(this).attr('action'),
          method: $(this).attr('method'),
          data: $(this).serialize(),
          success: function(response) {
            $('#successMessage').show(); // Menampilkan pesan sukses
            $('.loading').hide();
            $('#appointmentForm')[0].reset(); // Mengosongkan form
          },
          error: function(response) {
            $('#errorMessage').text('Terjadi kesalahan saat mengirim pesan.').show(); // Menampilkan pesan error
            $('.loading').hide();
          }
        });
      });
    });
  </script>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <!-- Add your JavaScript here -->
  <script>
    $(document).ready(function() {
      $('form.php-emaill-form').on('submit', function(event) {
        event.preventDefault(); // Prevent the default form submission

        $.ajax({
          url: $(this).attr('action'),
          method: $(this).attr('method'),
          data: $(this).serialize(),
          success: function(response) {
            $('.sent-message').show(); // Show the success message
            $('.loading').hide();
            $('form.php-emaill-form')[0].reset(); // Reset the form
          },
          error: function(response) {
            $('.error-message').text('There was an error sending your message.').show(); // Show the error message
            $('.loading').hide();
          }
        });
      });
    });
  </script>


</head>

<body>

  <!-- ======= Top Bar ======= -->
  <div id="topbar" class="d-flex align-items-center fixed-top">
    <div class="container d-flex justify-content-center justify-content-md-between">

      <div class="contact-info d-flex align-items-center">
        <i class="bi bi-phone d-flex align-items-center"><span>+62 857-6212-9090</span></i>
        <i class="bi bi-clock d-flex align-items-center ms-4"><span> Setiap hari: 09:00 - 23:00</span></i>
      </div>

      <div class="languages d-none d-md-flex align-items-center">
        <ul>
          <li>Id</li>
          <li><a href="#">En</a></li>
        </ul>
      </div>
    </div>
  </div>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex align-items-cente">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-lg-between">

      <h1 class="logo me-auto me-lg-0"><a href="{{ route('home') }}">Imperial Dimsum Palace</a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo me-auto me-lg-0"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
          <li><a class="nav-link scrollto active" href="#hero">Beranda</a></li>
          <li><a class="nav-link scrollto" href="#about">Tentang</a></li>
          <li><a class="nav-link scrollto" href="#menu">Menu</a></li>
          <li><a class="nav-link scrollto" href="#gallery">Galeri</a></li>
          </li>
          <li><a class="nav-link scrollto" href="#contact">Kontak</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->
      <a href="#book-a-table" class="book-a-table-btn scrollto d-none d-lg-flex">Reservasi</a>

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center">
    <div class="container position-relative text-center text-lg-start" data-aos="zoom-in" data-aos-delay="100">
      <div class="row">
        <div class="col-lg-8">
          <h1>Selamat datang di <span>Imperial Dimsum Palace</span></h1>
          <h2>Menghidangkan Kelezatan Dimsum Autentik Selama 50 tahun, Dengan Sentuhan Cinta dan Dedikasi Sepenuh Hati.</h2>
          
          <div class="btns">
            <a href="#menu" class="btn-menu animated fadeInUp scrollto">Menu</a>
            <a href="#book-a-table" class="btn-book animated fadeInUp scrollto">Reservasi</a>
          </div>

      <!-- Search Bar -->
      <form action="{{ route('dim_sum.search') }}" method="get" role="search" class="search-form">
        <div class="input-group">
          <input type="text" class="form-control"name="query" placeholder="Cari Jenis Dimsum...">
          <div class="search-button">
        <button type="submit" class="btn btn-primary">Cari</button>
      </div>
        </div>
      </form>
      <!-- End Search Bar -->

      <!-- Tombol Cari -->
      
      <!-- End Tombol Cari -->


    
    </div>
  </section><!-- End Hero -->





       
  <main id="main">

  
    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container" data-aos="fade-up">

        <div class="row">
          <div class="col-lg-6 order-1 order-lg-2" data-aos="zoom-in" data-aos-delay="100">
            <div class="about-img">
              <img src="{{asset('img/about.jpg')}}" alt="">
            </div>
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 content">
            <h3>Imperial Dimsum Palace didirikan lebih dari 50 tahun yang lalu dengan menyajikan hidangan dimsum autentik.</h3>
            <ul>
              <li><i class="bi bi-check-circle"></i> Hidangan Dimsum Autentik: Restoran ini menyajikan hidangan dimsum autentik yang terkenal dengan kualitas dan rasa yang konsisten.</li>
              <li><i class="bi bi-check-circle"></i> Lingkungan Nyaman: Restoran ini menawarkan lingkungan yang ramah dan bersahabat, menciptakan pengalaman makan yang menyenangkan bagi setiap pelanggan.</li>
              <li><i class="bi bi-check-circle"></i> Pelayanan Profesional: Siap memberikan pelayanan terbaik kepada setiap pelanggan.</li>
            </ul>
            <p>
              Imperial Dimsum Palace adalah tempat yang sempurna untuk menikmati hidangan dimsum autentik dan pengalaman kuliner yang tak terlupakan. Dengan kombinasi antara tradisi dan inovasi, restoran ini terus menjadi favorit bagi para pecinta masakan Tiongkok.
            </p>
          </div>
        </div>

      </div>
    </section><!-- End About Section -->

    <!-- ======= Why Us Section ======= -->
    <section id="why-us" class="why-us">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Kenapa Kita</h2>
          <p>Mengapa Memilih Restoran Kami</p>
        </div>

        <div class="row">

          <div class="col-lg-4">
            <div class="box" data-aos="zoom-in" data-aos-delay="100">
              <span>01</span>
              <h4>Hidangan Dimsum Autentik</h4>
              <p>Dengan pengalaman lebih dari 50 tahun, kami menyajikan dimsum autentik yang terkenal dengan kualitas dan rasa yang konsisten, memastikan setiap gigitan adalah kenikmatan sejati.</p>
            </div>
          </div>

          <div class="col-lg-4 mt-4 mt-lg-0">
            <div class="box" data-aos="zoom-in" data-aos-delay="200">
              <span>02</span>
              <h4>Lingkungan Nyaman</h4>
              <p>Nikmati suasana yang ramah dan bersahabat di restoran kami, menciptakan pengalaman makan yang menyenangkan dan santai bagi setiap pelanggan</p>
            </div>
          </div>

          <div class="col-lg-4 mt-4 mt-lg-0">
            <div class="box" data-aos="zoom-in" data-aos-delay="300">
              <span>03</span>
              <h4> Pelayanan Profesional</h4>
              <p>Tim kami siap memberikan pelayanan terbaik dengan profesionalisme tinggi, menjadikan kunjungan Anda ke Imperial Dimsum Palace sebuah pengalaman kuliner yang tak terlupakan.</p>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Why Us Section -->

    <!-- ======= Menu Section ======= -->
    <section id="menu" class="menu section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Menu</h2>
          <p>Periksa Menu Lezat Kami</p>
        </div>

        <div class="row" data-aos="fade-up" data-aos-delay="100">
          <div class="col-lg-12 d-flex justify-content-center">
            <ul id="menu-flters">
              <li data-filter="*" class="filter-active">All</li>
              <li data-filter=".filter-kukus">Kukus</li>
              <li data-filter=".filter-goreng">Goreng</li>
              <li data-filter=".filter-rebus">Rebus</li>
            </ul>
          </div>
        </div>

        <div class="row menu-container" data-aos="fade-up" data-aos-delay="200">

          <div class="col-lg-6 menu-item filter-rebus">
            <img src="{{asset('img/menu/cheong-fun.jpg')}}" class="menu-img" alt="">
            <div class="menu-content">
              <a href="#">Cheong fun</a><span> Rp75.000
              </span>
            </div>
            <div class="menu-ingredients">
              Rebus, Kulit tahu
            </div>
          </div>

          <div class="col-lg-6 menu-item filter-kukus">
            <img src="{{asset('img/menu/dimsum-ayam.jpg')}}" class="menu-img" alt="">
            <div class="menu-content">
              <a href="#">Dimsum Ayam </a><span>Rp69.000</span>
            </div>
            <div class="menu-ingredients">
              Kukus, Kulit Tahu
            </div>
          </div>

          <div class="col-lg-6 menu-item filter-kukus">
            <img src=" {{asset('img/menu/dimsum-salmon.jpg')}}" class="menu-img" alt="">
           
            <div class="menu-content">
              <a href="#">Dimsum Salmon </a><span>Rp99.000
              </span>
            </div>
            <div class="menu-ingredients">
              Kukus, Kulit Lumpia
            </div>
          </div>

          <div class="col-lg-6 menu-item filter-kukus">
            <img src="  {{asset('img/menu/dimsum-udang.jpg')}}" class="menu-img" alt="">
            <div class="menu-content">
              <a href="#">Dimsum Udang</a><span>Rp85.000
              </span>
            </div>
            <div class="menu-ingredients">
              Kukus, Kulit Pangsit
            </div>
          </div>

          <div class="col-lg-6 menu-item filter-goreng">
            <img src="{{asset('img/menu/ebi-furai.jpg')}}" class="menu-img" alt="">
         
            <div class="menu-content">
              <a href="#">Ebi Furai</a><span>Rp70.000
               </span>
            </div>
            <div class="menu-ingredients">
              Goreng, Kulit Tepung
            </div>
          </div>

          <div class="col-lg-6 menu-item filter-goreng">
            <img src="{{asset('img/menu/fried-wonton.jpg')}}" class="menu-img" alt="">
            
            <div class="menu-content">
              <a href="#">Fried Wonton</a><span>Rp65.000
              </span>
            </div>
            <div class="menu-ingredients">
              Goreng, Kulit Pangsit
            </div>
          </div>

          <div class="col-lg-6 menu-item filter-kukus">
            <img src=" {{asset('img/menu/hakau.jpg')}}" class="menu-img" alt="">
           
            <div class="menu-content">
              <a href="#">Hakau</a><span>Rp88.000
              </span>
            </div>
            <div class="menu-ingredients">
              Kukus, Kulit Pangsit
            </div>
          </div>

          <div class="col-lg-6 menu-item filter-rebus">
            <img src=" {{asset('img/menu/hakau.jpg')}}" class="menu-img" alt="">
        
            <div class="menu-content">
              <a href="#">Kuo Tie</a><span>Rp110.000
              </span>
            </div>
            <div class="menu-ingredients">
               Rebus, Kulit Tahu
            </div>
          </div>

          <div class="col-lg-6 menu-item filter-kukus">
            <img src="    {{asset('img/menu/xiao -long-bao.jpg')}}" class="menu-img" alt="">
        
            <div class="menu-content">
              <a href="#">Xiao Long Bao </a><span>Rp99.000</span>
            </div>
            <div class="menu-ingredients">
              Kukus, Kulit Lumpia
            </div>
          </div>

          <div class="col-lg-6 menu-item filter-kukus">
            <img src="  {{asset('img/menu/spring-roll.jpg')}}" class="menu-img" alt="">
          
            <div class="menu-content">
              <a href="#">Spring Roll</a><span>Rp75.000
              </span>
            </div>
            <div class="menu-ingredients">
               Kukus, Kulit Lumpia
            </div>
          </div>

          <div class="col-lg-6 menu-item filter-kukus">
            <img src="{{asset ('img/menu/lumpia-kulit-tahu.jpg')}}" class="menu-img" alt="">
            <div class="menu-content">
              <a href="#">Lumpia Kulit Tahu</a><span>Rp85.000
              </span>
            </div>
            <div class="menu-ingredients">
               Kukus, Kulit Tahu
            </div>
          </div>

          <div class="col-lg-6 menu-item filter-goreng">
            <img src=" {{asset('img/menu/chun-juan.jpg')}}" class="menu-img" alt="">
           
              
            <div class="menu-content">
              <a href="#">Chun Juan</a><span>Rp73.000
              </span>
            </div>
            <div class="menu-ingredients">
               Goreng, Kulit Lumpia
            </div>
          </div>

          <div class="col-lg-6 menu-item filter-kukus">
            <img src="  {{asset('img/menu/wan-ton.jpg')}}" class="menu-img" alt="">
          
            <div class="menu-content">
              <a href="#">Wan Ton</a><span>Rp65.000
              </span>
            </div>
            <div class="menu-ingredients">
               Kukus, Kulit Pangsit
            </div>
          </div>

          <div class="col-lg-6 menu-item filter-kukus">
            <img src="{{asset('img/menu/mantau.jpg')}}" class="menu-img" alt="">
            
            <div class="menu-content">
              <a href="#">Mantau</a><span>Rp50.000
              </span>
            </div>
            <div class="menu-ingredients">
               Kukus, Kulit Tepung
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Menu Section -->

    <!-- ======= Specials Section ======= -->
    <section id="specials" class="specials">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Favorit</h2>
          <p>Menu Favorit</p>
        </div>

        <div class="row" data-aos="fade-up" data-aos-delay="100">
          <div class="col-lg-3">
            <ul class="nav nav-tabs flex-column">
              <li class="nav-item">
                <a class="nav-link active show" data-bs-toggle="tab" href="#tab-1">Xiao Long Bao</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" data-bs-toggle="tab" href="#tab-2">Hakau</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" data-bs-toggle="tab" href="#tab-3">Ebi Furai</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" data-bs-toggle="tab" href="#tab-4">Spring Roll</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" data-bs-toggle="tab" href="#tab-5">Kuo Tie</a>
              </li>
            </ul>
          </div>
          <div class="col-lg-9 mt-4 mt-lg-0">
            <div class="tab-content">
              <div class="tab-pane active show" id="tab-1">
                <div class="row">
                  <div class="col-lg-8 details order-2 order-lg-1">
                    <h3>Xiao Long Bao</h3>
                    <p class="fst-italic">Xiao long bao mengacu pada jenis roti kukus kecil khas Tiongkok yang secara tradisional disiapkan di dalam xiaolong, keranjang kukus kecil dari bambu. Xiao long bao sering disebut sebagai sejenis “pangsit”, tetapi berbeda dengan jiaozi atau pangsit Cina.</p>
                    <p>Xiao long bao mengacu pada jenis roti kukus kecil khas Tiongkok yang secara tradisional disiapkan di dalam xiaolong, keranjang kukus kecil dari bambu. Xiao long bao sering disebut sebagai sejenis “pangsit”, tetapi berbeda dengan jiaozi atau pangsit Cina.</p>
                  </div>
                  <div class="col-lg-4 text-center order-1 order-lg-2">
                    <img src=" {{asset('img/specials-1.png')}}" alt="" class="img-fluid">
                   
                  </div>
                </div>
              </div>
              <div class="tab-pane" id="tab-2">
                <div class="row">
                  <div class="col-lg-8 details order-2 order-lg-1">
                    <h3>Hakau</h3>
                    <p class="fst-italic">Salah satu jenis dimsum kanton yang paling terkenal adalah hakau. Kulit tepung terigu yang tipis dan kenyal dipenuhi dengan campuran daging udang yang segar dan renyah. Hakau, yang biasanya disajikan dalam piring bambu, memiliki rasa lembut dengan rasa daging udang yang manis dan gurih yang khas.</p>
                    <p>Hakau memberikan pengalaman rasa yang memikat jika dimakan dengan saus sambal atau saus tomat. Ini juga menjadi salah satu hidangan yang paling disukai di restoran Cina dan dimsum di seluruh dunia.
                    </p>
                  </div>
                  <div class="col-lg-4 text-center order-1 order-lg-2">
                    <img src="  {{asset('img/specials-2.png')}}" alt="" class="img-fluid">
                  
                  </div>
                </div>
              </div>
              <div class="tab-pane" id="tab-3">
                <div class="row">
                  <div class="col-lg-8 details order-2 order-lg-1">
                    <h3>Ebi Furai</h3>
                    <p class="fst-italic">alah satu masakan Jepang yang populer, Ebi Furai terdiri dari udang besar yang dicelupkan ke dalam adonan tepung dan kemudian digoreng hingga berwarna keemasan dan renyah. Udang ini disajikan dengan potongan lemon dan sering dimakan dengan saus tonkatsu atau mayones.</p>
                    <p>Sebagai hidangan pembuka atau hidangan utama di restoran Jepang di seluruh dunia, Ebi Furai sangat disukai karena rasa manis udangnya dan tekstur renyah dari tepung goreng.

                    </p>
                  </div>
                  <div class="col-lg-4 text-center order-1 order-lg-2">
                  <img src="  {{asset('img/specials-3.png')}}" alt="" class="img-fluid">
                  </div>
                </div>
              </div>
              <div class="tab-pane" id="tab-4">
                <div class="row">
                  <div class="col-lg-8 details order-2 order-lg-1">
                    <h3>Spring Roll</h3>
                    <p class="fst-italic">Hidangan spring roll adalah favorit di masakan Asia, terutama Cina dan Vietnam. Ini terdiri dari kulit tepung gandum tipis dan renyah yang dipenuhi dengan campuran sayuran segar seperti kol, wortel, dan jamur.</p>
                    <p>Biasanya ada daging seperti ayam, udang, atau daging babi di dalamnya. Dibungkus dan digulung menjadi bentuk silinder, isiannya digoreng hingga kulitnya berwarna keemasan dan garing. Saus sambal pedas atau saus manis biasanya digunakan untuk menyediakan spring roll, yang menambahkan cita rasa yang kaya dan memuaskan. Hidangan ini populer sebagai hidangan pembuka atau camilan karena rasanya yang segar dan tekstur renyahnya.
                    </p>
                  </div>
                  <div class="col-lg-4 text-center order-1 order-lg-2">
                    <img src="  {{asset('img/specials-4.png')}}" alt="" class="img-fluid">
                  </div>
                </div>
              </div>
              <div class="tab-pane" id="tab-5">
                <div class="row">
                  <div class="col-lg-8 details order-2 order-lg-1">
                    <h3>Kuo Tie</h3>
                    <p class="fst-italic">Dalam masakan Tionghoa, kuo tie, juga disebut potsticker, adalah hidangan dumpling khas. Ini terbuat dari kulit tepung gandum yang tipis yang dipenuhi dengan campuran daging cincang, biasanya ayam, udang, atau daging babi. Kemudian, itu digulung dan ditekan menjadi bentuk setengah bulat. Biasanya, kuo tie dipanggang pada satu sisi hingga kulitnya menjadi renyah, lalu ditambahkan air dan ditutup untuk mengukus dan memasak isinya.</p>
                    <p>Hidangan ini disajikan dengan saus khusus yang memberikan rasa gurih dan segar yang dibuat dari campuran kecap asin, cuka beras, dan saus cabai. Kuo Tie populer di restoran Tionghoa di seluruh dunia karena tekstur kulit yang renyah dan rasa isinya yang gurih.</p>
                  </div>
                  <div class="col-lg-4 text-center order-1 order-lg-2">
                    <img src="  {{asset('img/specials-5.png')}}" alt="" class="img-fluid">
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>
    </section><!-- End Specials Section -->
    
    
    <!-- resources/views/reservasi/create.blade.php -->
    <section id="book-a-table" class="book-a-table">
    <div class="container" data-aos="fade-up">
        <div class="section-title">
            <h2>Reservasi</h2>
            <p>Memesan Meja</p>
        </div>

        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form id="appointmentForm" action="{{ url('/reservasi') }}" method="post" role="form" class="php-email-form" data-aos="fade-up" data-aos-delay="100">
            @csrf
            <div class="row">
                <div class="col-lg-4 col-md-6 form-group">
                    <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" id="name" placeholder="Nama" value="{{ old('name') }}">
                    @error('name')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="col-lg-4 col-md-6 form-group mt-3 mt-md-0">
                    <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" id="email" placeholder="Email" value="{{ old('email') }}">
                    @error('email')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="col-lg-4 col-md-6 form-group mt-3 mt-md-0">
                    <input type="number" class="form-control @error('phone') is-invalid @enderror" name="phone" id="phone" placeholder="Nomer Telepon" value="{{ old('phone') }}">
                    @error('phone')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="col-lg-4 col-md-6 form-group mt-3">
                    <input type="date" name="date" class="form-control @error('date') is-invalid @enderror" id="date" placeholder="Tanggal" value="{{ old('date') }}">
                    @error('date')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="col-lg-4 col-md-6 form-group mt-3">
                    <input type="time" class="form-control @error('time') is-invalid @enderror" name="time" id="time" placeholder="Waktu" value="{{ old('time') }}">
                    @error('time')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="col-lg-4 col-md-6 form-group mt-3">
                    <input type="number" class="form-control @error('people') is-invalid @enderror" name="people" id="people" placeholder="Untuk berapa orang" value="{{ old('people') }}">
                    @error('people')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div class="form-group mt-3">
                <textarea class="form-control @error('pesan') is-invalid @enderror" name="pesan" rows="5" placeholder="Message">{{ old('pesan') }}</textarea>
                @error('pesan')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <div class="sent-message" id="successMessage" style="display: none;">Permintaan reservasi Anda telah dikirim. Kami akan menelepon atau mengirim Email untuk mengonfirmasi reservasi Anda. Terima kasih!</div>
            </div>
            <div class="text-center"><button type="submit" id="submitBtn">Pesan</button></div>
        </form>
    </div>
</section>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $(document).ready(function() {
        $('#appointmentForm').submit(function(event) {
            event.preventDefault();
            var form = $(this);
            var formData = form.serialize();

            // Disable submit button to prevent double submission
            $('#submitBtn').prop('disabled', true);

            $.ajax({
                type: 'POST',
                url: form.attr('action'),
                data: formData,
                dataType: 'json',
                success: function(response) {
                    if (response.status === 'success') {
                        $('#successMessage').text('Permintaan pemesanan Anda telah dikirim. Kami akan menelepon kembali atau mengirim Email untuk mengonfirmasi reservasi Anda. Terima kasih!').slideDown();
                        $('#errorMessage').hide();
                        form.trigger('reset');
                    } else {
                        $('#errorMessage').text(response.message || 'Ada masalah saat mengirim permintaan pemesanan. Silakan coba lagi.').slideDown();
                        $('#successMessage').hide();
                    }
                    $('#submitBtn').prop('disabled', false);
                },
                error: function(xhr, status, error) {
                    $('#errorMessage').text('Error: Gagal mengirim appointment. Mohon coba lagi.').slideDown();
                    $('#successMessage').hide();
                    $('#submitBtn').prop('disabled', false);
                }
            });
        });
    });
</script>

    <!-- ======= Testimonials Section ======= -->
    <section id="testimonials" class="testimonials section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Testimoni</h2>
          <p>Apa Yang Mereka Katakan Tentang Kita</p>
        </div>

        <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="100">
          <div class="swiper-wrapper">

            <div class="swiper-slide">
              <div class="testimonial-item">
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  Imperial Dimsum Palace benar-benar mengesankan! Hidangan dimsumnya autentik dan rasanya luar biasa. Saya sangat menikmati setiap gigitan. Lingkungannya juga sangat nyaman dan ramah, membuat saya merasa seperti di rumah. Pelayanannya sangat profesional dan penuh perhatian. Ini adalah tempat favorit saya untuk menikmati dimsum di kota.
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
                <img src="{{asset('img/testimonials/testimonials-1.jpg')}}" class="testimonial-img" alt="">
                <h3>Kevin Pratama</h3>
                <h4>Ceo &amp; Founder</h4>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  Saya telah menjadi pelanggan setia Imperial Dimsum Palace selama lebih dari 5 tahun. Kualitas dan konsistensi rasa dimsumnya selalu terjaga, yang membuat saya selalu kembali. Tempatnya bersih dan nyaman, dan pelayanannya selalu cepat dan ramah. Saya sangat merekomendasikan restoran ini kepada siapa saja yang mencari hidangan dimsum autentik.
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
                <img src="{{asset('img/testimonials/testimonials-2.jpg')}}" class="testimonial-img" alt="">
                <h3>Mahesa Haryo</h3>
                <h4>Vice President</h4>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  Mengunjungi Imperial Dimsum Palace selalu menjadi pengalaman yang menyenangkan. Mereka berhasil menggabungkan tradisi dan inovasi dalam setiap hidangan yang disajikan. Dimsumnya selalu segar dan lezat. Selain itu, pelayanannya sangat baik dan profesional. Tidak ada tempat lain yang bisa menandingi kualitas dimsum di sini!
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
                <img src="{{asset('img/testimonials/testimonials-3.jpg')}}" class="testimonial-img" alt="">
                <h3>Danu Setiawan</h3>
                <h4>Store Owner</h4>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  Imperial Dimsum Palace adalah tempat yang luar biasa untuk menikmati dimsum. Suasana restorannya sangat nyaman dan ramah. Dimsumnya autentik dan penuh cita rasa, selalu membuat saya ingin kembali lagi. Pelayanannya juga luar biasa, dengan staf yang sangat membantu dan perhatian. Sangat direkomendasikan!
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
                <img src="{{asset('img/testimonials/testimonials-4.jpg')}}" class="testimonial-img" alt="">
                <h3>Ilza Batistuta</h3>
                <h4>Businessman</h4>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  Saya sangat terkesan dengan Imperial Dimsum Palace. Dimsumnya benar-benar autentik dan sangat lezat. Restorannya bersih, nyaman, dan memiliki suasana yang hangat dan bersahabat. Stafnya sangat profesional dan selalu siap membantu. Ini adalah tempat yang sempurna untuk menikmati hidangan dimsum bersama keluarga dan teman-teman.
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
                <img src="{{asset('img/testimonials/testimonials-5.jpg')}}" class="testimonial-img" alt="">
                <h3>Dimas Arya</h3>
                <h4>Artist</h4>
              </div>
            </div><!-- End testimonial item -->

          </div>
          <div class="swiper-pagination"></div>
        </div>

      </div>
    </section><!-- End Testimonials Section -->

    <!-- ======= Gallery Section ======= -->
    <section id="gallery" class="gallery">

      <div class="container" data-aos="fade-up">
        <div class="section-title">
          <h2>Galeri</h2>
          <p> Beberapa foto dari Restoran Kami</p>
        </div>
      </div>

      <div class="container-fluid" data-aos="fade-up" data-aos-delay="100">

        <div class="row g-0">
          <div class="col-lg-3 col-md-4">
            <div class="gallery-item">
              <a href="{{asset('img/gallery/gallery-1.jpg')}}" class="gallery-lightbox" data-gall="gallery-item">
                <img src="{{asset('img/gallery/gallery-1.jpg')}}" class="gallery-img" alt="">
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item">
            <a href="{{asset('img/gallery/gallery-2.jpg')}}" class="gallery-lightbox" data-gall="gallery-item">
            <img src="{{asset('img/gallery/gallery-2.jpg')}}" class="gallery-img" alt="">
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item">
            <a href="{{asset('img/gallery/gallery-3.jpg')}}" class="gallery-lightbox" data-gall="gallery-item">
            <img src="{{asset('img/gallery/gallery-3.jpg')}}" class="gallery-img" alt="">
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item">
            <a href="{{asset('img/gallery/gallery-4.jpg')}}" class="gallery-lightbox" data-gall="gallery-item">
            <img src="{{asset('img/gallery/gallery-4.jpg')}}" class="gallery-img" alt="">
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item">
            <a href="{{asset('img/gallery/gallery-5.jpg')}}" class="gallery-lightbox" data-gall="gallery-item">
            <img src="{{asset('img/gallery/gallery-5.jpg')}}" class="gallery-img" alt="">
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item">
            <a href="{{asset('img/gallery/gallery-6.jpg')}}" class="gallery-lightbox" data-gall="gallery-item">
            <img src="{{asset('img/gallery/gallery-6.jpg')}}" class="gallery-img" alt="">
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item">
            <a href="{{asset('img/gallery/gallery-7.jpg')}}" class="gallery-lightbox" data-gall="gallery-item">
            <img src="{{asset('img/gallery/gallery-7.jpg')}}" class="gallery-img" alt="">
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item">
            <a href="{{asset('img/gallery/gallery-8.jpg')}}" class="gallery-lightbox" data-gall="gallery-item">
            <img src="{{asset('img/gallery/gallery-8.jpg')}}" class="gallery-img" alt="">
              </a>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Gallery Section -->

    <!-- ======= Contact Section ======= -->
    <!-- resources/views/home.blade.php -->

    <body>
<!-- ======= Contact Section ======= -->
<section id="contact" class="contact">
  <div class="container" data-aos="fade-up">
    <div class="section-title">
      <h2>Contact</h2>
      <p>Kontak Kami</p>
    </div>
  </div>

  <div data-aos="fade-up">
    <iframe style="border:0; width: 100%; height: 350px;" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12097.433213460943!2d-74.0062269!3d40.7101282!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xb89d1fe6bc499443!2sDowntown+Conference+Center!5e0!3m2!1smk!2sbg!4v1539943755621" frameborder="0" allowfullscreen></iframe>
  </div>

  <div class="container" data-aos="fade-up">
    <div class="row mt-5">
      <div class="col-lg-4">
        <div class="info">
          <div class="address">
            <i class="bi bi-geo-alt"></i>
            <h4>Lokasi:</h4>
            <p>Jl. Meruya Selatan., Kec. Kembangan, Jakarta, Daerah Khusus Ibukota Jakarta 11650</p>
          </div>

          <div class="open-hours">
            <i class="bi bi-clock"></i>
            <h4>Open Hours:</h4>
            <p>Setiap Hari:<br>09:00 - 23:00</p>
          </div>

          <div class="email">
            <i class="bi bi-envelope"></i>
            <h4>Email:</h4>
            <p>imperialdimsumpalace@gmail.com</p>
          </div>

          <div class="phone">
            <i class="bi bi-phone"></i>
            <h4>Telepon:</h4>
            <p>+62 857-6212-9090</p>
          </div>
        </div>
      </div>

      <div class="col-lg-8 mt-5 mt-lg-0">
        @if (session('success'))
          <div class="alert alert-success">
            {{ session('success') }}
          </div>
        @endif

        <form action="/send-contact" method="post" role="form" class="php-emaill-form">
          @csrf
          <div class="row">
            <div class="col-md-6 form-group">
              <input type="text" name="name" class="form-control" id="name" placeholder="Nama" required>
            </div>
            <div class="col-md-6 form-group mt-3 mt-md-0">
              <input type="email" class="form-control" name="email" id="email" placeholder="Email" required>
            </div>
          </div>
          <div class="form-group mt-3">
            <input type="text" class="form-control" name="subject" id="subject" placeholder="Subjek" required>
          </div>
          <div class="form-group mt-3">
            <textarea class="form-control" name="message" rows="8" placeholder="Pesan" required></textarea>
          </div>
          <div class="my-3">
            <div class="loading" style="display: none;">Loading</div>
            <div class="error-message" style="display: none;"></div>
            <div class="sent-message" style="display: none;">Pesan Anda telah dikirim. Terima kasih!</div>
          </div>
          <div class="text-center"><button type="submit">Kirim Pesan</button></div>
        </form>
      </div>
    </div>
  </div>
</section>
<!-- End Contact Section -->

<!-- End Contact Section -->

  </main><!-- End #main -->
 
  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6">
            <div class="footer-info">
              <h3>IMPERIAL DIMSUM PALACE</h3>
              <p>
                Jl. Meruya Selatan., Kec. Kembangan, Jakarta,  <br>
                Daerah Khusus Ibukota Jakarta 11650<br><br>
                <strong>Phone:</strong> +62 857-6212-9090
                <br>
                <strong>Email:</strong> imperialdimsumpalace@gmail.com<br>
              </p>
              <div class="social-links mt-3">
                <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
                <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
                <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
                <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
                <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
              </div>
            </div>
          </div>

 
          </div>

        </div>
      </div>
    </div>

    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong><span>Imperial Dimsum Palace</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/restaurantly-restaurant-template/ -->
        Designed by <a href="https://bootstrapmade.com/">Lafapra Group</a>
      </div>
    </div>
  </footer><!-- End Footer -->

  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="{{ asset('vendor/aos/aos.js')}}"></script>
  <script src="{{ asset('vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('vendor/glightbox/js/glightbox.min.js') }}"></script>
<script src="{{ asset('vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
<script src="{{ asset('vendor/swiper/swiper-bundle.min.js') }}"></script>
<script src="{{ asset('vendor/php-email-form/validate.js') }}"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="{{ asset('js/main.js') }}"></script>

</body>

</html>