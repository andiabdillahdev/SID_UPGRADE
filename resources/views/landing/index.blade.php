@extends('layouts.front')
@section('mains')
    
<!-- ======= Hero Section ======= -->
<section id="hero">
    <div class="hero-container">
      <div id="heroCarousel" class="carousel slide carousel-fade" data-ride="carousel">

        <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>

        <div class="carousel-inner" role="listbox">

          <!-- Slide 1 -->
          <div class="carousel-item active" style="background: url(front/img/slide/slideone.jpg)">
            <div class="carousel-container">
              <div class="carousel-content">
                <h2 class="animate__animated animate__fadeInDown">Selamat Datang di Website Desa Anrang</h2>
                <p class="animate__animated animate__fadeInUp">Kecamatan Rilau Ale, Kabupaten Bulukumba</p>
                <a href="" class="btn-get-started animate__animated animate__fadeInUp">Telusuri</a>
              </div>
            </div>
          </div>

          <!-- Slide 2 -->
          <div class="carousel-item" style="background: url(front/img/slide/slidetwo.jpg)">
            <div class="carousel-container">
              <div class="carousel-content">
                <h2 class="animate__animated fanimate__adeInDown">Pusat Informasi Desa Anrang </h2>
                <p class="animate__animated animate__fadeInUp">Kecamatan Rilau Ale, Kabupaten Bulukumba</p>
                <a href="" class="btn-get-started animate__animated animate__fadeInUp">Telusuri</a>
              </div>
            </div>
          </div>

        </div>

        <a class="carousel-control-prev" href="#heroCarousel" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon icofont-rounded-left" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>

        <a class="carousel-control-next" href="#heroCarousel" role="button" data-slide="next">
          <span class="carousel-control-next-icon icofont-rounded-right" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>

      </div>
    </div>
  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= Featured Section ======= -->
    <section id="featured" class="featured">
      <div class="container">

        <div class="row">
          <div class="col-lg-4">
            <div class="icon-box">
              <i class="icofont-vehicle-crane"></i>
              <h3><a href="">Pembangunan</a></h3>
              <p>Pembangunan untuk meningkatkan kualitas hidup dan kehidupan masyarakat</p>
            </div>
          </div>
          <div class="col-lg-4 mt-4 mt-lg-0">
            <div class="icon-box">
              <i class="icofont-computer"></i>
              <h3><a href="">Layanan</a></h3>
              <p>Memberikan layanan publik secara prima kepada masyarakat.</p>
            </div>
          </div>
          <div class="col-lg-4 mt-4 mt-lg-0">
            <div class="icon-box">
              <i class="icofont-tasks-alt"></i>
              <h3><a href="">Potensi</a></h3>
              <p>Informasi Potensi Desa untuk mendukung percepatan kesejahteraan masyarakat</p>
            </div>
          </div>
        </div>

      </div>
    </section><!-- End Featured Section -->

 

    <!-- ======= Services Section ======= -->
    <section id="services" class="services">
      <div class="container">

        <div class="section-title" data-aos="fade-up">
          <h2>Sambutan Kepala Desa</h2>
        </div>

        <div class="row">
          <div class="col-lg-4">
          <img src="{{ asset('front/img/kepdes.png') }}" style="width:200px" alt="">
          <p class="mt-3"><b>Bahtiar, S.Sos</b>, Kepala Desa Anrang, Kecamatan Rilau Ale, Kabupaten Bulukumba</p>
          </div>

          <div class="col-lg-8">
            <p>Sejalan dengan penerapan informasi dalam pelayanan publik, maka Web Site Desa Gembyang yang dibangun ini merupakan suatu tuntutan Teknologi Informasi (TI) yang berkembang pesat pada saat ini. Website ini berisikan informasi-informasi yang dapat diakses masyarakat pengguna internet yang merupakan tindak lanjut dari Undang-Undang Nomor 14 Tahun 2008 tentang Keterbukaan Informasi Publik.</p>
            <p>Tujuan terbangunnya Website desa Anrang ini adalah :</p>
            <ul>
              <li>Memajukan peradaban masyarakat di Desa Anrang</li>
              <li>Memberikan informasi seluas-luasnya kepada masyarakat</li>
              <li>Sebagai sarana komunikasi antara warga masyarakat dengan Pemerintah Desa Anrang</li>
            </ul>
          </div>
        </div>
       

      </div>
    </section><!-- End Services Section -->

    <!-- ======= Clients Section ======= -->
    <section id="clients" class="clients">
      <div class="container">
        <div class="section-title" data-aos="fade-up">
          <h2>Peta Desa</h2>
        </div>
   
        <div class="row">
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d63552.380279053476!2d120.10491786990518!3d-5.4133505951099625!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dbea8138a700fb3%3A0xd9e32bcde11facca!2sAnrang%2C%20Rilau%20Ale%2C%20Kabupaten%20Bulukumba%2C%20Sulawesi%20Selatan!5e0!3m2!1sid!2sid!4v1598446093928!5m2!1sid!2sid" width="100%" height="450" frameborder="0" style="border:2px;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
        </div>

      </div>
    </section><!-- End Clients Section -->

  </main>

@endsection


