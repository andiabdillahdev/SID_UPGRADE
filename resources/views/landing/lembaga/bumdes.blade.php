@extends('layouts.front')
@section('mains')
    
<main id="main">

    <section id="breadcrumbs" class="breadcrumbs">
        <div class="container">
  
          <ol>
            <li><a href="javascript:;">Lembaga</a></li>
            <li>BumDes ( Badan Usaha Milik Desa )</li>
          </ol>
          <h2>BumDes ( Badan Usaha Milik Desa )</h2>
  
        </div>
      </section><!-- End Breadcrumbs -->

 
      <section id="team" class="team">
        <div class="container">
  
          <div class="row">
                @foreach ($model as $item)
                <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
                    <div class="member">
                    <img src="{{ asset('ubold/asetImg/fileUpload/fotobpd/'.$item->foto) }}" alt="">
                    <h4>{{ $item->nama }}</h4>
                    <span>{{ $item->jabatan }}</span>
                  
                    </div>
                  </div>
                @endforeach
          </div>
  
        </div>
      </section>

  </main>


@endsection




