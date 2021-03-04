@extends('layouts.front')
@section('mains')
    
<main id="main">

    <section id="breadcrumbs" class="breadcrumbs">
        <div class="container">
  
          <ol>
            <li><a href="javascript:;">Statistik</a></li>
            <li>Sarana & Prasarana</li>
          </ol>
          <h2>Sarana & Prasarana</h2>
  
        </div>
      </section><!-- End Breadcrumbs -->

      <section id="contact" class="contact">
        <div class="container">
          <div class="row">

            <div class="col-lg-12 col-md-6" style="margin-bottom:50px;">
      
                <div class="card">
                  <div class="card-header">
                   <h6> Transportasi </h6>
                  </div>
                  <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped" style="font-size:12px">
                                <thead>
                                  <tr>
                                    <th>Item</th>
                                    <th>Kondisi Baik (Km/Unit)</th>
                                    <th>Kondisi Rusak (Km/Unit)</th>
                                    <th> Jumlah </th>
                                  </tr>
                                </thead>
                                <tbody id="dataTrans">  
                                </tbody>
                              </table>
    
                            </div>
                    
                </div>
             
              </div>

          </div>

          <div class="col-lg-12 col-md-6" style="margin-bottom:50px;">
      
            <div class="card">
              <div class="card-header">
               <h6> Sanitasi </h6>
              </div>
              <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-striped" style="font-size:12px">
                            <thead>
                              <tr>
                                <th>Item</th>
                                <th> Jumlah </th>
                              </tr>
                            </thead>
                            <tbody id="dataSanitasi">  
                            </tbody>
                          </table>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-12 col-md-6" style="margin-bottom:50px;">
      
                <div class="card">
                  <div class="card-header">
                   <h6> Peribadatan </h6>
                  </div>
                  <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped" style="font-size:12px">
                                <thead>
                                  <tr>
                                    <th>Item</th>
                                    <th> Jumlah </th>
                                  </tr>
                                </thead>
                                <tbody id="dataIbadah">  
                                </tbody>
                              </table>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-12 col-md-6" style="margin-bottom:50px;">
      
                    <div class="card">
                      <div class="card-header">
                       <h6> Pendidikan </h6>
                      </div>
                      <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-striped" style="font-size:12px">
                                    <thead>
                                      <tr>
                                        <th>Item</th>
                                        <th>Sewa</th>
                                        <th>Milik Sendiri</th>
                                        <th>Jumlah</th>
                                      </tr>
                                    </thead>
                                    <tbody id="dataPend">  
                                    </tbody>
                                  </table>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-12 col-md-6" style="margin-bottom:50px;">
      
                        <div class="card">
                          <div class="card-header">
                           <h6> Olahraga </h6>
                          </div>
                          <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-striped" style="font-size:12px">
                                        <thead>
                                          <tr>
                                            <th>Item</th>
                                            <th>Jumlah</th>
                                          </tr>
                                        </thead>
                                        <tbody id="dataOlahraga">  
                                        </tbody>
                                      </table>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-12 col-md-6" style="margin-bottom:50px;">
      
                          <div class="card">
                            <div class="card-header">
                             <h6> Kesehatan </h6>
                            </div>
                            <div class="card-body">
                                  <div class="table-responsive">
                                      <table class="table table-striped" style="font-size:12px">
                                          <thead>
                                            <tr>
                                              <th>Item</th>
                                              <th>Jumlah</th>
                                            </tr>
                                          </thead>
                                          <tbody id="dataKesehatan">  
                                          </tbody>
                                        </table>
                                      </div>
                                  </div>
                              </div>
                          </div>

                          <div class="col-lg-12 col-md-6" style="margin-bottom:50px;">
      
                            <div class="card">
                              <div class="card-header">
                               <h6> Irigasi </h6>
                              </div>
                              <div class="card-body">
                                    <div class="table-responsive">
                                        <table class="table table-striped" style="font-size:12px">
                                            <thead>
                                              <tr>
                                                <th>Item</th>
                                                <th>Jumlah</th>
                                              </tr>
                                            </thead>
                                            <tbody id="dataIrigasi">  
                                            </tbody>
                                          </table>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-12 col-md-6" style="margin-bottom:50px;">
      
                              <div class="card">
                                <div class="card-header">
                                 <h6> Air Bersih </h6>
                                </div>
                                <div class="card-body">
                                      <div class="table-responsive">
                                          <table class="table table-striped" style="font-size:12px">
                                              <thead>
                                                <tr>
                                                  <th>Item</th>
                                                  <th>Jumlah</th>
                                                </tr>
                                              </thead>
                                              <tbody id="dataAirbersih">  
                                              </tbody>
                                            </table>
                                          </div>
                                      </div>
                                  </div>
                              </div>
        
        </div>
      </section>

  </main>

<input type="hidden" value="{{ route('trans.statistik') }}" id="urlTrans">
<input type="hidden" value="{{ route('sanitasi.statistik') }}" id="urlSanitasi">
<input type="hidden" value="{{ route('ibadah.statistik') }}" id="urlIbadah">
<input type="hidden" value="{{ route('pendidikan.statistik') }}" id="urlPend">
<input type="hidden" value="{{ route('olahraga.statistik') }}" id="urlOlahraga">
<input type="hidden" value="{{ route('kesehatan.statistik') }}" id="urlKesehatan">
<input type="hidden" value="{{ route('irigasi.statistik') }}" id="urlIrigasi">
<input type="hidden" value="{{ route('airbersih.statistik') }}" id="urlAirbersih">


@endsection
@push('frontJs')
<script>
    $(document).ready(function () {
    var urlTrans = $('#urlTrans').val();
    var urlSanitasi = $('#urlSanitasi').val();
    var urlIbadah = $('#urlIbadah').val();
    var urlPend = $('#urlPend').val();
    var urlOlahraga = $('#urlOlahraga').val();
    var urlKesehatan = $('#urlKesehatan').val();
    var urlIrigasi = $('#urlIrigasi').val();
    var urlAirbersih = $('#urlAirbersih').val();

    $.getJSON(urlTrans, function (data) {
        var data_transs = '';
        $.each(data, function (key, value) {
            data_transs += '<tr>';
            data_transs += '<td>'+value.item+'</td>';
            data_transs += '<td>'+value.kondisi_baik+'</td>';
            data_transs += '<td>'+value.kondisi_rusak+'</td>';
            data_transs += '<td>'+value.jumlah+'</td>';
            data_transs += '</tr>';    
        });
        $('#dataTrans').append(data_transs);
    });

    $.getJSON(urlSanitasi, function (data) {
        var data_sanitasi = '';
        $.each(data, function (key, value) {
            data_sanitasi += '<tr>';
            data_sanitasi += '<td>'+value.item+'</td>';
            data_sanitasi += '<td>'+value.jumlah+'</td>';
            data_sanitasi += '</tr>';    
        });
        $('#dataSanitasi').append(data_sanitasi);
    });

    $.getJSON(urlIbadah, function (data) {
        var data_ibadah = '';
        $.each(data, function (key, value) {
            data_ibadah += '<tr>';
            data_ibadah += '<td>'+value.item+'</td>';
            data_ibadah += '<td>'+value.jumlah+'</td>';
            data_ibadah += '</tr>';    
        });
        $('#dataIbadah').append(data_ibadah);
    });

    $.getJSON(urlIbadah, function (data) {
        var data_ibadah = '';
        $.each(data, function (key, value) {
            data_ibadah += '<tr>';
            data_ibadah += '<td>'+value.item+'</td>';
            data_ibadah += '<td>'+value.jumlah+'</td>';
            data_ibadah += '</tr>';    
        });
        $('#dataIbadah').append(data_ibadah);
    });

    $.getJSON(urlPend, function (data) {
        var data_pendidikan = '';
        $.each(data, function (key, value) {
            data_pendidikan += '<tr>';
            data_pendidikan += '<td>'+value.item+'</td>';
            data_pendidikan += '<td>'+value.sewa+'</td>';
            data_pendidikan += '<td>'+value.milik_sendiri+'</td>';
            data_pendidikan += '<td>'+value.jumlah+'</td>';
            data_pendidikan += '</tr>';    
        });
        $('#dataPend').append(data_pendidikan);
    });
    
    $.getJSON(urlOlahraga, function (data) {
        var data_olahraga = '';
        $.each(data, function (key, value) {
            data_olahraga += '<tr>';
            data_olahraga += '<td>'+value.item+'</td>';
            data_olahraga += '<td>'+value.jumlah+'</td>';
            data_olahraga += '</tr>';    
        });
        $('#dataOlahraga').append(data_olahraga);
    });

    $.getJSON(urlKesehatan, function (data) {
        var data_kesehatan = '';
        $.each(data, function (key, value) {
            data_kesehatan += '<tr>';
            data_kesehatan += '<td>'+value.item+'</td>';
            data_kesehatan += '<td>'+value.jumlah+'</td>';
            data_kesehatan += '</tr>';    
        });
        $('#dataKesehatan').append(data_kesehatan);
    });

    $.getJSON(urlIrigasi, function (data) {
        var data_irigasi = '';
        $.each(data, function (key, value) {
            data_irigasi += '<tr>';
            data_irigasi += '<td>'+value.item+'</td>';
            data_irigasi += '<td>'+value.jumlah+'</td>';
            data_irigasi += '</tr>';    
        });
        $('#dataIrigasi').append(data_irigasi);
    });

    $.getJSON(urlAirbersih, function (data) {
        var data_airbersih = '';
        $.each(data, function (key, value) {
            data_airbersih += '<tr>';
            data_airbersih += '<td>'+value.item+'</td>';
            data_airbersih += '<td>'+value.jumlah+'</td>';
            data_airbersih += '</tr>';    
        });
        $('#dataAirbersih').append(data_airbersih);
    });

});
</script>
@endpush


