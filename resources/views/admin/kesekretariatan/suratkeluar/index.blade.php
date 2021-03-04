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
                                        <a href="javascript:void(0);">Surat Keluar</a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);">Data Surat Keluar</a>
                                    </li>
                                    <li class="active">
                                        Tabel Surat Keluar
                                    </li>
                                </ol>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-sm-12">
                                <div class="card-box table-responsive">
                                    <h4 class="m-t-0 header-title"><b>Tabel Surat Keluar</b></h4>
                                    <p class="text-muted font-13 m-b-30">
                                        Data Pengarsipan Surat Keluar</p>
                         
                            
                                    <div class="container">
                                        <div class="row">
                                            <a href="{{ route('suratkeluar.create') }}" data-toggle="tooltip" data-placement="right" title="" data-original-title="Input Data" role="button" class="btn btn-primary waves-effect waves-light btn-sm modalshows">
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
                                            <th>Nomor Surat</th>
                                            <th>Tanggal Surat</th>
                                            <th>Di tujukan</th>
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
          ajax : "{{ route('suratkeluar.table') }}",
          columns: [
            {data:'nomor_surat', name: 'nomor_surat'},
            {data:'tanggal_surat', name: 'tanggal_surat'},
            {data:'ditujukan', name: 'ditujukan'},
            {data:'perihal', name: 'perihal'},
            {data:'action', name: 'action'}
          ]
      });
  </script>
@endpush

