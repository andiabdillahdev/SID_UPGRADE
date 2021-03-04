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
                              
                                <h4 class="page-title">Kependudukan</h4>
                                <ol class="breadcrumb">
                                    <li>
                                        <a href="javascript:void(0);">Kependudukan</a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);">Data Penduduk</a>
                                    </li>
                                    <li class="active">
                                        Tabel Penduduk
                                    </li>
                                </ol>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-sm-12">
                                <div class="card-box table-responsive">
                                    <h4 class="m-t-0 header-title"><b>Tabel Penduduk</b></h4>
                                    <p class="text-muted font-13 m-b-30">
                                        Data Informasi Penduduk </p>
                         
                            
                                    <div class="container">
                                        <div class="row">
                                            <a href="{{ route('penduduk.create') }}" data-toggle="tooltip" data-placement="right" title="" data-original-title="Input Data" role="button" class="btn btn-primary waves-effect waves-light btn-sm modalshowsLarge">
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
                                            <th>No KK</th>
                                            <th>NIK</th>
                                            <th>Nama</th>
                                            <th>Dusun</th>
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
          ajax : "{{ route('penduduk.table') }}",
          columns: [
            {data:'no_kk', name: 'no_kk'},
            {data:'nik', name: 'nik'},
            {data:'nama', name: 'nama'},
            {data:'dusun', name: 'dusun'},
            {data:'action', name: 'action'}
          ]
      });
  </script>
@endpush

