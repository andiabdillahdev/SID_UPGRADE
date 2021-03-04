@extends('layouts.front')
@section('mains')
    
<main id="main">

    <section id="breadcrumbs" class="breadcrumbs">
        <div class="container">
  
          <ol>
            <li><a href="javascript:;">Tentang</a></li>
            <li>Potensi Desa ( Pdf View )</li>
          </ol>
          <h2>Potensi Desa ( Pdf View )</h2>
  
        </div>
      </section><!-- End Breadcrumbs -->

      <section id="contact" class="contact">
        <div class="container">
          <div class="row">

            <div class="col-lg-12 col-md-6">
            <embed src="{{ asset('ubold/asetImg/fileUpload/filepotensi/'.$model->file) }}" type="" width="100%" height="800px">
            </div>

        </div>
      </section>

  </main>




@endsection



