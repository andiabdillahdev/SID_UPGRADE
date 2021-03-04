@extends('layouts.admin')
@section('konten')
    
<!-- ============================================================== -->
            <!-- Start right Content here -->
            <!-- ============================================================== -->                      
            <div class="content-page">
                <!-- Start content -->
                <div class="content">
                    <div class="container">

                        <!-- Page-Title -->
                        <div class="row">
                            <div class="col-sm-12">
                              
                                <h4 class="page-title">Sekretariat</h4>
                                <ol class="breadcrumb">
                                    <li>
                                        <a href="javascript:void(0);">Surat Masuk</a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);">Data Surat Masuk</a>
                                    </li>
                                    <li class="active">
                                        Tabel Surat Masuk
                                    </li>
                                </ol>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-sm-12">
                                <div class="card-box table-responsive">
                                    <h4 class="m-t-0 header-title"><b>Tabel Surat Masuk</b></h4>
                                    <p class="text-muted font-13 m-b-30">
                                        Data Pengarsipan Surat Masuk</p>
                         
                            
                                    <div class="container">
                                        <div class="row">
                                            <a href="{{ route('suratmasuk.create') }}" data-toggle="tooltip" data-placement="right" title="" data-original-title="Input Data" role="button" class="btn btn-primary waves-effect waves-light btn-sm modalshows">
                                                <span class="btn-label"><i class="fa fa-plus-circle"></i></span>
                                                Input Data
                                             </a>
                                           </div>
                                       </div>

<br>

                                 <div id="tableDusun">
                                    <table id="datatable" class="table table-striped table-bordered">
                                        <thead>
                                        <tr>
                                            <th>Tanggal Terima</th>
                                            <th>Nomor Surat</th>
                                            <th>Pengirim</th>
                                            <th>Perihal</th>
                                            <th>Aksi</th>
                                        </tr>
                                        </thead>
        
        
                                        <tbody>
                                        
                                        </tbody>
                                    </table>
                                 </div>

                                </div>
                            </div>
                        </div>
                        

                    </div> <!-- container -->
                               
                </div> <!-- content -->

            
@endsection

@push('scripts')
  <script>
      $('#datatable').DataTable({
          responsive : true,
          processing : true,
          serverSide : true,
          ajax : "{{ route('suratmasuk.table') }}",
          columns: [
            {data:'tanggal_penerimaan', name: 'tanggal_penerimaan'},
            {data:'nomor_surat', name: 'nomor_surat'},
            {data:'pengirim', name: 'pengirim'},
            {data:'perihal', name: 'perihal'},
            {data:'action', name: 'action'}
          ]
      });
  </script>
@endpush

