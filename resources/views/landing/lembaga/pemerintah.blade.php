@extends('layouts.front')
@section('mains')
    
<main id="main">

    <section id="breadcrumbs" class="breadcrumbs">
        <div class="container">
  
          <ol>
            <li><a href="javascript:;">Lembaga</a></li>
            <li>Pemerintah Desa</li>
          </ol>
          <h2>Pemerintah Desa</h2>
  
        </div>
      </section><!-- End Breadcrumbs -->

      <section id="contact" class="contact">
        <div class="container">
          <div class="row">

            <div class="col-lg-12 col-md-6" style="margin-bottom:50px;">
      
              <div class="card">
                <div class="card-header">
                 <h6> Tabel dan Bagan Pemerintah Desa </h6>
                </div>
                <div class="card-body">
                  <ul class="nav nav-tabs">
                    <li class="nav-item">
                      <a class="nav-link active" data-toggle="tab" href="#home">Struktur</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" data-toggle="tab" href="#menu1">Data Aparat</a>
                    </li>
                 
                  </ul>
                  <div class="tab-content">
                    <div id="home" class="container tab-pane active"><br>
                      <div class="row">
                        <div class="col-lg-12">
                          <!-- <img src="{{ asset('front/img/bagan.png') }}" alt="" style="width: 100%;"> -->
                          Belum Ada Bagan
                        </div>
                      </div>
                  
                    </div>
                    <div id="menu1" class="container tab-pane fade"><br>
                      <div class="table-responsive">
                        <table class="table table-striped" style="font-size:12px">
                            <thead>
                              <tr>
                                <th>Nama</th>
                                <th>NIK</th>
                                <th>Jabatan</th>
                                <th>Gambar</th>
                              </tr>
                            </thead>
                            <tbody id="dataPemerintahDesa">  
                            </tbody>
                          </table>
                        </div>
                    </div>
                  </div>
              </div>
           
            </div>

         

        </div>
      </section>
  </main>
<input type="hidden" value="{{ route('pemerintah.data') }}" id="urlPemerintahDsa">
<input type="hidden" value="{{ asset('ubold/asetImg/fileUpload/fotoAparat') }}" id="urlImage">

@endsection
@push('frontJs')
<script>

var urlPemerintahDsa = $('#urlPemerintahDsa').val();
var imageUrl = $('#urlImage').val();
  $(document).ready(function () {



    $.getJSON(urlPemerintahDsa, function (data) {
        var data_aparat = '';
        $.each(data, function (key, value) {
            data_aparat += '<tr>';
            data_aparat += '<td>'+value.nama+'</td>';
            data_aparat += '<td>'+value.nik+'</td>';
            data_aparat += '<td>'+value.jabatan+'</td>';
            data_aparat += '<td><img src="'+imageUrl+'/'+value.gambar+'" alt="" style="width:50px"></td>';
            data_aparat += '</tr>';    
        });
        $('#dataPemerintahDesa').append(data_aparat);
    });

  })
</script>
@endpush



