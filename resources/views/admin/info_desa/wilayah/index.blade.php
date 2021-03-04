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
                              
                                <h4 class="page-title">Wilayah Administratif</h4>
                                <ol class="breadcrumb">
                                    <li>
                                        <a href="javascript:void(0);">Info Desa</a>
                                    </li>
                                    <li class="active">
                                        Tabel Dusun dan Wilayah Dusun
                                    </li>
                                </ol>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-sm-12">
                                <div class="card-box table-responsive">
                                    <h4 class="m-t-0 header-title"><b>Tabel Dusun dan Kepala Dusun</b></h4>
                                    <p class="text-muted font-13 m-b-30">
                                        Data wilayah dusun beserta kepala dusun </p>
                         
                            
                                    <div class="container">
                                        <div class="row">
                                            <a href="{{ route('wilayah.create') }}" data-toggle="tooltip" data-placement="right" title="" data-original-title="Input Data" role="button" class="btn btn-primary waves-effect waves-light btn-sm">
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
                                            <th>Nama Dusun</th>
                                            <th>NIK/Nama Kepala Dusun</th>
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
          ajax : "{{ route('table.dusun') }}",
          columns: [
            {data:'nama_dusun', name: 'nama_dusun'},
            {data:'nama_nik', name: 'nama_nik'},
            {data:'action', name: 'action'}
          ]
      });
  </script>
@endpush

