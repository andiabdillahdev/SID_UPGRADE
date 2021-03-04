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
                                        <a href="javascript:void(0);">SK Kades</a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);">Data SK Kades</a>
                                    </li>
                                    <li class="active">
                                        Tabel SK Kades
                                    </li>
                                </ol>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-sm-12">
                                <div class="card-box table-responsive">
                                    <h4 class="m-t-0 header-title"><b>Tabel SK Kades</b></h4>
                                    <p class="text-muted font-13 m-b-30">
                                        Data Pengarsipan SK Kades</p>
                         
                            
                                    <div class="container">
                                        <div class="row">
                                            <a href="{{ route('skkades.create') }}" data-toggle="tooltip" data-placement="right" title="" data-original-title="Input Data" role="button" class="btn btn-primary waves-effect waves-light btn-sm modalshows">
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
                                            <th>Nama SK</th>
                                            <th>No Keputusan Kades</th>
                                            <th>Tanggal Keputusan Kades</th>
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
          ajax : "{{ route('skkades.table') }}",
          columns: [
            {data:'nama_sk', name: 'nama_sk'},
            {data:'nomor_keputusan_kades', name: 'nomor_keputusan_kades'},
            {data:'tgl_keputusan_kades', name: 'tgl_keputusan_kades'},
            {data:'action', name: 'action'}
          ]
      });
  </script>
@endpush

