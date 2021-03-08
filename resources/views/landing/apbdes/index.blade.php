@extends('layouts.front')
@section('mains')
    
<main id="main">

    <section id="breadcrumbs" class="breadcrumbs">
        <div class="container">
  
          <ol>
            <li><a href="javascript:;">APBDES</a></li>
            <li>APBDES ( Anggaran Pendapatan dan Belanja Desa )</li>
          </ol>
          <h2>APBDES ( Anggaran Pendapatan dan Belanja Desa )</h2>
  
        </div>
      </section><!-- End Breadcrumbs -->

 
      <section id="contact" class="contact">
        <div class="container">
  
          <div class="row">
             <h3>Pendapatan Desa</h3>
            <div class="table-responsive">
                <table class="table table-striped" style="font-size:12px">
                    <thead>
                      <tr>
                        <th>Uraian</th>
                        <th>Anggaran</th>
                      </tr>
                    </thead>
                    <tbody>
                        <tr>
                           <td>Pendapatan Asli Desa</td>
                           <td id="penAsliDesa">Rp. 0</td>  
                        </tr>
                        <tr>
                            <td>Pendapatan Transfer</td>
                            <td id="pendapatanTransfer">Rp. 0</td>  
                         </tr>  
                         <tr>
                            <td>Pendapatan Lain-lain</td>
                            <td id="pendapatanLain">Rp. 0</td>  
                         </tr>  
                    </tbody>
                    <tfoot>
                       <tr>
                        <th><b>Total Pendapatan</b></th>
                        <th id="totalPendapatan"><b>Rp. 0 </b></th>
                       </tr>
                    </tfoot>
                  </table>
                </div>
            </div>
            
            <div class="row">
                <h3>Belanja Desa</h3>
                <div class="table-responsive">
                    <table class="table table-bordered" style="font-size:12px">
                        <thead>
                          <tr>
                            <th>Uraian</th>
                            <th>Anggaran</th>
                            <th>Sumber Dana</th>
                          </tr>
                       
                        </thead>
                        <tr>
                          <td colspan="3"><b>I. BIDANG PENYELENGARAAN PEMERINTAH DESA</b></td>
                      </tr>
                      <tbody id="bidangA">

                      </tbody>
                      <tr>
                          <th><b>Total</b></th>
                          <th colspan="2" id="totalA"><b>Rp. 0 </b></th>
                      </tr>
                      <tr>
                        <td colspan="3"><b>II. BIDANG PELAKSANAAN PEMBANGUNAN DESA</b></td>
                    </tr>
                    <tbody id="bidangB">

                    </tbody>
                    <tr>
                        <th><b>Total</b></th>
                        <th colspan="2" id="totalB"><b>Rp. 0 </b></th>
                    </tr>

                    <tr>
                      <td colspan="3"><b>III. BIDANG PEMBINAAN KEMASYARAKATAN</b></td>
                  </tr>
                  <tbody id="bidangC">

                  </tbody>
                  <tr>
                      <th><b>Total</b></th>
                      <th colspan="2" id="totalC"><b>Rp. 0 </b></th>
                  </tr>
                  <tr>
                    <td colspan="3"><b>IV. BIDANG PEMBERDAYAAN MASYARAKAT</b></td>
                </tr>
                <tbody id="bidangD">

                </tbody>
                <tr>
                    <th><b>Total</b></th>
                    <th colspan="2" id="totalD"><b>Rp. 0 </b></th>
                </tr>
                       
                        {{-- <tbody>
                            <tr>
                                <td colspan="3"><b>I. BIDANG PENYELENGARAAN PEMERINTAH DESA</b></td>
                            </tr>
                            <div id="bidangA">
                              
                            </div>
                            <tr>
                                <th><b>Total</b></th>
                                <th colspan="2"><b>Rp. 0 </b></th>
                            </tr>
    
                            <tr>
                                <td colspan="3"><b>II. BIDANG PELAKSANAAN PEMBANGUNAN DESA</b></td>
                            </tr>
                            <tr>
                                <th><b>Total</b></th>
                                <th><b>Rp. 0 </b></th>
                            </tr>
    
                            <tr>
                                <td colspan="3"><b>III. BIDANG PEMBINAAN KEMASYARAKATAN</b></td>
                            </tr>
                            <tr>
                                <th><b>Total</b></th>
                                <th><b>Rp. 0 </b></th>
                            </tr>
                            
                            <tr>
                                <td colspan="3"><b>IV. BIDANG PEMBERDAYAAN MASYARAKAT</b></td>
                            </tr>
                            <tr>
                                <th><b>Total</b></th>
                                <th><b>Rp. 0 </b></th>
                                <th></th>
                            </tr>
                      
    
                        </tbody> --}}
                        <tfoot>
                            <tr>
                                <th><b>Total Belanja</b></th>
                                <th><b>Rp. 0 </b></th>
                                <th></th>
                            </tr>
                            <tr>
                                <th><b>Surplus / Defisit</b></th>
                                <th><b>Rp. 0 </b></th>
                                <th></th>
                            </tr>
                           
                        </tfoot>
                      </table>
                </div>
            </div>
            
                  
            <div class="row">
                <h3>Pembiyaan Desa</h3>
               <div class="table-responsive">
                   <table class="table table-striped" style="font-size:12px">
                       <thead>
                         <tr>
                           <th>Uraian</th>
                           <th>Anggaran</th>
                         </tr>
                       </thead>
                       <tbody>
                           <tr>
                              <td>Penerimaan Pembiayaan</td>
                              <td id="penerimaanPemb">Rp. 0</td>  
                           </tr>
                           <tr>
                               <td>Pengeluaran Pembiayaan</td>
                               <td id="pengeluaranPemb">Rp. 0</td>  
                            </tr>  
                            <tr>
                               <td>Pengeluaran Netto</td>
                               <td id="pengeluaranNetto">Rp. 0</td>  
                            </tr> 
                            <tr>
                                <td>Sisa Lebih Pembiayaan Anggaran</td>
                                <td id="sisalebih">Rp. 0</td>  
                             </tr>  
                       </tbody>
                     </table>
                   </div>
               </div>
               

  
        </div>
      </section>

  </main>


@endsection
@push('frontJs')
  <script>
    $(function () {
      var data = {!! json_encode($data) !!};
      console.log(data);
      var penerimaan = data.penerimaan[0];
      var pendAsliDesa = penerimaan.pad_aset + penerimaan.pad_spgr + penerimaan.pad_lain_lain;
      var pendapatanTransfer = penerimaan.ptf_danadesa + penerimaan.ptf_hprd + penerimaan.ptf_alokasidana + penerimaan.ptf_apbdkab + penerimaan.ptf_apbdprov;
      var pendapatanLain = penerimaan.pll_hibah + penerimaan.pll_llps;
      var total = pendAsliDesa + pendapatanTransfer + pendapatanLain;
      var penerimaanPemb = data.pembiayaan[0]['penerimaan_by'];
      var pengeluaranPemb = data.pembiayaan[0]['pengeluaran_by'];
      var pengeluaranNetto = data.pembiayaan[0]['pmby_netto'];
      var sisalebih = data.pembiayaan[0]['lebih_pmby'];
    
      $('#penAsliDesa').html('Rp. '+pendAsliDesa.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ","));
      $('#pendapatanTransfer').html('Rp.'+pendapatanTransfer.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ","));
      $('#pendapatanLain').html('Rp. '+pendapatanLain.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ","))
      $('#totalPendapatan').html('Rp. '+total.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ","));

      $('#penerimaanPemb').html('Rp. '+penerimaanPemb.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ","))
      $('#pengeluaranPemb').html('Rp. '+pengeluaranPemb.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ","))
      $('#pengeluaranNetto').html('Rp. '+pengeluaranNetto.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ","))
      $('#sisalebih').html('Rp. '+sisalebih.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ","))

      var htmlA = '';
      var htmlB = '';
      var htmlC = '';
      var htmlD = '';

      var totalA = 0;
      var totalB = 0;
      var totalC = 0;
      var totalD = 0;

      $.each(data.belanja, function (indexInArray, valueOfElement) { 
         if (valueOfElement.bidang == 'bid_i') {
            htmlA += '<tr><td>'+valueOfElement.uraian+'</td><td>Rp. '+valueOfElement.anggaran.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",")+'</td><td>'+valueOfElement.sumber+'</td></tr>';
            totalA += valueOfElement.anggaran;
         }else if (valueOfElement.bidang == "bid_ii") {
          htmlB += '<tr><td>'+valueOfElement.uraian+'</td><td>Rp. '+valueOfElement.anggaran.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",")+'</td><td>'+valueOfElement.sumber+'</td></tr>';
          totalB += valueOfElement.anggaran;
         }else if (valueOfElement.bidang == "bid_iii"){
          htmlC += '<tr><td>'+valueOfElement.uraian+'</td><td>Rp. '+valueOfElement.anggaran.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",")+'</td><td>'+valueOfElement.sumber+'</td></tr>';
          totalC += valueOfElement.anggaran;
         }else {
          htmlD += '<tr><td>'+valueOfElement.uraian+'</td><td>Rp. '+valueOfElement.anggaran.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",")+'</td><td>'+valueOfElement.sumber+'</td></tr>';
          totalD += valueOfElement.anggaran;
         }
      });
      $('#bidangA').append(htmlA);
      $('#bidangB').append(htmlB);
      $('#bidangC').append(htmlC);
      $('#bidangD').append(htmlD);
      $('#totalA').html('Rp. '+totalA.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ","));
      $('#totalB').html('Rp. '+totalB.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ","));
      $('#totalC').html('Rp. '+totalC.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ","));
      $('#totalD').html('Rp. '+totalD.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ","));
    })
  </script>
@endpush




