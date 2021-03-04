@extends('layouts.front')
@section('mains')
    
<main id="main">

    <section id="breadcrumbs" class="breadcrumbs">
        <div class="container">
  
          <ol>
            <li><a href="javascript:;">Pembangunan</a></li>
          </ol>
          <h2>Pembangunan</h2>
  
        </div>
      </section><!-- End Breadcrumbs -->

 
      <section id="team" class="team">
        <div class="container">
  
          <div class="row">
                <div class="col-lg-7">
                    <ul>
                        <li style="margin-top: 10px;">Pembangunan pedesaan adalah pembangunan berbasis pedesaan dengan mengedepankan kearifan lokal kawasan pedesaan yang mencakup struktur demografi masyarakat, karakteristik sosial budaya, karakterisktik fisik/geografis, pola kegiatan usaha pertanian, pola keterkaitan ekonomi desa-kota, sektor kelembagaan desa, dan karakteristik kawasan pemukiman</li>
                        <li style="margin-top: 10px;">Pemerintah desa menyusun perencanaan pembangunan desa sesuai dengan kewenangannya dengan mengacu pada perencanaan pembangunan kabupaten dan kota. Rencana pembangunan desa disusun untuk menjamin keterkaitan dan konsistensi antara perencanaan, penganggaran, pelaksanaan dan pengawasan</li>
                        <li style="margin-top: 10px;">Alokasi Dana Desa (ADD) yang dikucurkan pemerintah pusat maupun dari APBD Kabupaten harus diumumkan secara transparan pada publik, khususnya warga desa setempat. Hal tersebut untuk menghindari terjadinya penyelewengan dana, kecurigaan publik, serta agar pelaksanaan pembangunan di desa dapat berlangsung secara kondusif</li>
                    </ul>
            
                </div>
                <div class="col-lg-5">
                <img src="{{ asset('front/img/desabangun.jpg') }}" style="width:100%">
                </div> 
          </div>
  
        </div>
      </section>

  </main>


@endsection




