@extends('layouts.front')
@section('mains')

  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
      <div class="container">

        <ol>
        <li><a href="{{ route('index.landing') }}">Beranda</a></li>
        <li><a href="{{ route('kabardesa.landing') }}">Blog</a></li>
        </ol>
    <h2>{{ $model->judul }}</h2>

      </div>
    </section><!-- End Breadcrumbs -->

    <!-- ======= Blog Section ======= -->
    <section id="blog" class="blog">
      <div class="container">

        <div class="row">

          <div class="col-lg-8 entries">

            <article class="entry entry-single">

              <div class="entry-img">
                <img src="{{ asset('ubold/asetImg/fileUpload/fileberita/'.$model->file) }}" alt="" class="img-fluid">
              </div>

              <h2 class="entry-title">
              <a href="blog-single.html">{{ $model->judul }}</a>
              </h2>

              <div class="entry-meta">
                <ul>
                  <li class="d-flex align-items-center"><i class="icofont-user"></i> <a href="blog-single.html">Admin</a></li>
                <li class="d-flex align-items-center"><i class="icofont-wall-clock"></i> <a href="blog-single.html"><time datetime="2020-01-01">{{ $model->tanggal }}</time></a></li>
                </ul>
              </div>

              <div class="entry-content">
                @php
                    echo $model->konten
                @endphp

              </div>

              <div class="entry-footer clearfix">
                <div class="float-left">

                  <i class="icofont-tags"></i>
                  <ul class="tags">
                  <li><a href="#">{{ $model->kategori }}</a></li>
                  </ul>
                </div>

              </div>

            </article><!-- End blog entry -->



          </div><!-- End blog entries list -->

          <div class="col-lg-4">

            <div class="sidebar">
                <h3 class="sidebar-title">Tags</h3>
                <div class="sidebar-item tags">
                    <ul>
                        <li><a href="{{ route('kabardesakategori.detail','Berita Desa') }}">Berita Desa</a></li>
                          <li><a href="{{ route('kabardesakategori.detail','Produk Desa') }}">Produk Desa</a></li>
                          <li><a href="{{ route('kabardesakategori.detail','Nasional') }}">Nasional</a></li>
                          <li><a href="{{ route('kabardesakategori.detail','Pemilu') }}">Pemilu</a></li>
                          <li><a href="{{ route('kabardesakategori.detail','Pertanian') }}">Pertanian</a></li>
                          <li><a href="{{ route('kabardesakategori.detail','Ekonomi') }}">Ekonomi</a></li>
                          <li><a href="{{ route('kabardesakategori.detail','Pemerintahan') }}">Pemerintahan</a></li>
                          <li><a href="{{ route('kabardesakategori.detail','Regulasi') }}">Regulasi</a></li>
                          <li><a href="{{ route('kabardesakategori.detail','Kesehatan') }}">Kesehatan</a></li>
                        </ul>
  
                </div><!-- End sidebar tags-->


              <h3 class="sidebar-title">Recent Posts</h3>
              <div class="sidebar-item recent-posts">
            
                @foreach ($recent as $key)
                <div class="post-item clearfix">
                    <img src="{{ asset('ubold/asetImg/fileUpload/fileberita/'.$key->file) }}" alt="">
                <h4><a href="{{ route('kabardesa.detail',$key->slug) }}">{{ $key->judul }}</a></h4>
                <time datetime="2020-01-01">{{ $key->tanggal }}</time>
                  </div>
                @endforeach

              </div><!-- End sidebar recent posts-->

    

            </div><!-- End sidebar -->

          </div><!-- End blog sidebar -->

        </div>

      </div>
    </section><!-- End Blog Section -->

  </main><!-- End #main -->

  @endsection
