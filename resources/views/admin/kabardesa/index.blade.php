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
                              
                                <h4 class="page-title">Kabar Desa</h4>
                                <ol class="breadcrumb">
                                    <li>
                                        <a href="javascript:void(0);">Data Berita</a>
                                    </li>
                                    <li class="active">
                                        Tabel Berita
                                    </li>
                                </ol>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-sm-12">
                                <div class="card-box table-responsive">
                                    <h4 class="m-t-0 header-title"><b>Tabel Berita</b></h4>
                                    <p class="text-muted font-13 m-b-30">
                                        List Kabar Desa </p>            
                                    <div class="container">
                                        <div class="row">
                                            <a href="{{ route('kabardesa.create') }}" data-toggle="tooltip" data-placement="right" title="" data-original-title="Input Data" role="button" class="btn btn-primary waves-effect waves-light btn-sm">
                                                <span class="btn-label"><i class="fa fa-plus-circle"></i></span>
                                                Input Berita
                                             </a>
                                           </div>
                                       </div>

<br>

                                 <div id="tableDusun">
                                    <table id="datatable" class="table table-striped table-bordered">
                                        <thead>
                                        <tr>
                                            <th>Judul</th>
                                            <th>Gambar Judul</th>
                                            <th>Kategori</th>
                                            <th>Tanggal</th>
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
          ajax : "{{ route('kabardesa.table') }}",
          columns: [
            {data:'judul', name: 'judul'},
            {
                "name": "file",
                "data": "file",
                "render": function (data, type, full, meta) {
                    return "<img src=\"/ubold/asetImg/fileUpload/fileberita/" + data + "\" height=\"50\"/>";
                },
                "title": "Gambar Judul",
                "orderable": true,
                "searchable": true
            },
            {data:'kategori', name: 'kategori'},
            {data:'tanggal', name: 'tanggal'},
            {data:'action', name: 'action'}
          ]
      });
  </script>
@endpush

