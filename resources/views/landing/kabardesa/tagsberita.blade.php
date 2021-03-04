@extends('layouts.front')
@section('mains')
    
<main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
      <div class="container">

        <ol>
        <li><a href="{{ route('index.landing') }}">Beranda</a></li>
          <li>Kabar Desa</li>
        </ol>
    <h2>Katerori Berita : {{ $params }}</h2>

      </div>
    </section><!-- End Breadcrumbs -->

    <!-- ======= Blog Section ======= -->
    <section id="blog" class="blog">
      <div class="container">

        <div class="row">

          <div class="col-lg-8 entries">

            @forelse ($model as $item)
            <article class="entry">

                <div class="entry-img">
                <img src="{{ asset('ubold/asetImg/fileUpload/fileberita/'.$item->file) }}" alt="" class="img-fluid">
                </div>
  
                <h2 class="entry-title">
                <a href="{{ route('kabardesa.detail',$item->slug) }}">{{ $item->judul }}</a>
                </h2>
  
                <div class="entry-meta">
                  <ul>
                    <li class="d-flex align-items-center"><i class="icofont-user"></i> <a href="{{ route('kabardesa.detail',$item->slug) }}">Admin</a></li>
                  <li class="d-flex align-items-center"><i class="icofont-wall-clock"></i> <a href="{{ route('kabardesa.detail',$item->slug) }}"><time datetime="2020-01-01">{{ $item->tanggal }}</time></a></li>
                  </ul>
                </div>
  
                <div class="entry-content">
                  <p>
                              @php
                                echo  Str::limit(strip_tags($item->konten),200);
                             @endphp
                  </p>
                  <div class="read-more">
                    <a href="{{ route('kabardesa.detail',$item->slug) }}"><i class="icofont-eye-alt"></i> Detail</a>
                  </div>
                </div>
  
              </article><!-- End blog entry -->
            @empty
               <h1>Tidak Ada Berita :(</h1>
            @endforelse

            {{-- @foreach ($model as $item)
            
           
            @endforeach --}}


            <div class="blog-pagination">
              <ul class="justify-content-center">
                {{ $model->links() }}
                {{-- <li class="disabled"><i class="icofont-rounded-left"></i></li>
                <li><a href="#">1</a></li>
                <li class="active"><a href="#">2</a></li>
                <li><a href="#">3</a></li>
                <li><a href="#"><i class="icofont-rounded-right"></i></a></li> --}}
              </ul>
            </div>

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

              <h3 class="sidebar-title">Berita Terkini</h3>
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


