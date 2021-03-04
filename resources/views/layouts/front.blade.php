<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  {{-- <title>Desa Anrang</title>
  <meta content="" name="descriptison">
  <meta content="" name="keywords"> --}}

  {!! SEOMeta::generate() !!}

  <!-- Favicons -->
<link href="{{ asset('front/img/logo_bulkum.png') }}" rel="icon">
<link href="{{ asset('front/img/logo_bulkum.png') }}" rel="apple-touch-icon">

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.css" integrity="sha512-/zs32ZEJh+/EO2N1b0PEdoA10JkdC3zJ8L5FTiQu82LR9S/rOQNfQN7U59U9BC12swNeRAz3HSzIL2vpp4fv3w==" crossorigin="anonymous" />
  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
<link href="{{ asset('front/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
<link href="{{ asset('front/vendor/icofont/icofont.min.css') }}" rel="stylesheet">
<link href="{{ asset('front/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
<link href="{{ asset('front/vendor/animate.css/animate.min.css') }}" rel="stylesheet">
<link href="{{ asset('front/vendor/owl.carousel/assets/owl.carousel.min.css') }}" rel="stylesheet">
<link href="{{ asset('front/vendor/venobox/venobox.css') }}" rel="stylesheet">

  <!-- Template Main CSS File -->
<link href="{{ asset('front/css/styless.css') }}" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Eterna - v2.1.0
  * Template URL: https://bootstrapmade.com/eterna-free-multipurpose-bootstrap-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Top Bar ======= -->
  <section id="topbar" class="d-none d-lg-block">
    <div class="container d-flex">
      <div class="contact-info mr-auto">
        <i class="icofont-envelope"></i><a href="mailto:contact@example.com">anrang@gmail.com</a>
        <i class="icofont-phone"></i> 081xxxxxxx
      </div>
      <div class="social-links">
        <a href="#" class="twitter"><i class="icofont-twitter"></i></a>
        <a href="#" class="facebook"><i class="icofont-facebook"></i></a>
        <a href="#" class="instagram"><i class="icofont-instagram"></i></a>
        <a href="#" class="skype"><i class="icofont-skype"></i></a>
        <a href="#" class="linkedin"><i class="icofont-linkedin"></i></i></a>
      </div>
    </div>
  </section>

  <!-- ======= Header ======= -->
  <header id="header">
    <div class="container d-flex">

      <div class="logo mr-auto">
        <div class="row">
          <img src="{{ asset('front/img/logo_bulkum.png') }}" alt="" style="width:35px; margin-right:10px; padding:2px;"> 
          <h1 class="text-light"><a href="index.html"><span>DESA ANRANG</span></a></h1>
        </div>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
      </div>

      <nav class="nav-menu d-none d-lg-block">
        <ul>
        <li class="active"><a href="{{ route('index.landing') }}">Beranda</a></li>
        <li><a href="{{ route('kabardesa.landing') }}">Kabar Desa</a></li>
        <li class="drop-down"><a href="#">Statistik</a>
            <ul>
            <li><a href="{{ route('sarana.landing') }}">Sarana & Prasarana</a></li>
            <li><a href="{{ route('kependudukan.landing') }}">Kependudukan</a></li>
            </ul>
          </li>
          <li class="drop-down"><a href="#">Tentang</a>
            <ul>
            <li><a href="{{ route('tentang.landing') }}">Tentang Desa Anrang</a></li>
            <li><a href="{{ route('potensi.landing') }}">Potensi Desa</a></li>
            </ul>
          </li>

          <li class="drop-down"><a href="#">Lembaga</a>
            <ul>
            <li><a href="{{ route('pemerintah.landing') }}">Pemerintah Desa</a></li>
            <li><a href="{{ route('bpd.landing') }}">BPD</a></li>
            <li><a href="{{ route('pkk.landing') }}">PKK</a></li>
            <li><a href="{{ route('karangtaruna.landing') }}">Karang Taruna</a></li>
            <li><a href="{{ route('bumdes.landing') }}">BUMDes</a></li>
            </ul>
          </li>

      
        <li><a href="{{ route('pembangunan.landing') }}">Pembangunan</a></li>
        <li><a href="{{ route('apbdes.landing') }}">APBDes</a></li>

        </ul>
      </nav><!-- .nav-menu -->

    </div>
  </header><!-- End Header -->

  @yield('mains')

  <!-- ======= Footer ======= -->
  <footer id="footer">

    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Kabupaten Bulukumba</h4>
          <img src="{{ asset('front/img/logo_bulkum.png') }}" alt="" style="width:150px;">
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Link Terkait</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a target="_blank" href="https://bulukumbakab.go.id/">Pemerintah Kabupaten Bulukumba</a></li>
              <li><i class="bx bx-chevron-right"></i> <a target="_blank" href="https://www.kemendesa.go.id/">Kementerian Desa</a></li>
              {{-- <li><i class="bx bx-chevron-right"></i> <a href="#">Product Management</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Marketing</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Graphic Design</a></li> --}}
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-contact">
            <h4>Kontak Kami</h4>
            <p>
             Jl. Mattoanging <br>
              Desa Anrang, Kecamatan Rilau Ale<br>
              Kabupaten Bulukumba <br><br>
              <strong>No HP:</strong> 085xxxxx<br>
              <strong>Email:</strong> info@example.com<br>
            </p>

          </div>

          <div class="col-lg-3 col-md-6 footer-info">
            <h3>Tentang Desa Anrang</h3>
            <p>Anrang adalah desa di kecamatan Rilau Ale, Kabupaten Bulukumba, Sulawesi Selatan, Indonesia. Desa ini dialiri oleh sungai Balantieng, yang memiliki potensi pertambangan pasir dan batu sungai</p>
        
          </div>

        </div>
      </div>
    </div>

    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong><span>Eterna</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/eterna-free-multipurpose-bootstrap-template/ -->
        Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
      </div>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>

  <!-- Vendor JS Files -->
<script src="{{ asset('front/vendor/jquery/jquery.min.js') }}"></script>
<script src="{{ asset('front/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('front/vendor/jquery.easing/jquery.easing.min.js') }}"></script>
<script src="{{ asset('front/vendor/php-email-form/validate.js') }}"></script>
<script src="{{ asset('front/vendor/jquery-sticky/jquery.sticky.js') }}"></script>
<script src="{{ asset('front/vendor/owl.carousel/owl.carousel.min.js') }}"></script>
<script src="{{ asset('front/vendor/waypoints/jquery.waypoints.min.js') }}"></script>
<script src="{{ asset('front/vendor/counterup/counterup.min.js') }}"></script>
<script src="{{ asset('front/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
<script src="{{ asset('front/vendor/venobox/venobox.min.js') }}"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.js" integrity="sha512-s+xg36jbIujB2S2VKfpGmlC3T5V2TF3lY48DX7u2r9XzGzgPsa6wTpOQA7J9iffvdeBN0q9tKzRxVxw1JviZPg==" crossorigin="anonymous"></script>


  <!-- Template Main JS File -->
<script src="{{ asset('front/js/main.js') }}"></script>
<script src="{{ asset('js/custom.js') }}"></script>
@stack('frontJs')
</body>

</html>