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
                              
                                <h4 class="page-title">Potensi Desa</h4>
                                <ol class="breadcrumb">
                                    <li>
                                        <a href="javascript:void(0);">Info Desa</a>
                                    </li>
                                    <li>
                                    <a href="javascript:void(0);">Potensi Desa</a>
                                    </li>
                                    <li class="active"> 
                                        Tabel Dokumen Potensi Desa
                                    </li>
                                </ol>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-sm-12">
                                <div class="card-box table-responsive">
                                    <h4 class="m-t-0 header-title"><b>Tabel Dokumen Potensi Desa</b></h4>
                            <br>
                                    <div class="container">
                                        <div class="row">
                                        <a href="{{ route('potensi.create') }}" data-toggle="tooltip" data-placement="right" role="button" title="Form Upload Dokumen Potensi Desa" class="btn btn-primary waves-effect waves-light btn-sm modalshows">
                                                <span class="btn-label"><i class="fa fa-plus-circle"></i></span>
                                                Input Data
                                             </a>
                                           </div>

                                       

                                       </div>

<br>

                                 <div id="tableBpd">
                                    <table id="datatable" class="table table-striped table-bordered">
                                        <thead>
                                        <tr>
                                            <th>Label</th>
                                            <th>File</th>
                                            <th>Di Muat Pada</th>
                                            <th>Tahun</th>
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
          ajax : "{{ route('potensi.table') }}",
          columns: [
            {data:'nama', name: 'nama'},
            {data:'file', name: 'file'},
            {data:'created_at', name: 'created_at'},
            {data:'tahun', name: 'tahun'},
            {data:'action', name: 'action'}
          ]
      });
</script>

@endpush

