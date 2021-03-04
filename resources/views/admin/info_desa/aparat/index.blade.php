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
                              
                                <h4 class="page-title">Pemerintah Desa</h4>
                                <ol class="breadcrumb">
                                    <li>
                                        <a href="javascript:void(0);">Info Desa</a>
                                    </li>
                                    <li class="active">
                                        Tabel Pemerintah Desa
                                    </li>
                                </ol>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-sm-12">
                                <div class="card-box table-responsive">
                                    <h4 class="m-t-0 header-title"><b>Tabel Pemerintah Desa</b></h4>
                                    <p class="text-muted font-13 m-b-30">
                                        Informasi tentang anggota aparat desa </p>
                         
                            
                                    <div class="container">
                                        <div class="row">
                                            <a href="{{ route('aparat.create') }}" data-toggle="tooltip" data-placement="right" title="" data-original-title="Input Data" role="button" class="btn btn-primary waves-effect waves-light btn-sm">
                                                <span class="btn-label"><i class="fa fa-plus-circle"></i></span>
                                                Input Data
                                             </a>
                                           </div>
                                       </div>

<br>

                                 <div id="tableDusun">
                                    <table id="datatableAparat" class="table table-striped table-bordered">
                                        <thead>
                                        <tr>
                                            <th>Nama</th>
                                            <th>Jabatan</th>
                                            <th>Periode Jabatan</th>
                                            <th>Foto</th>
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
    $('#datatableAparat').DataTable({
        responsive : true,
        processing : true,
        serverSide : true,
        ajax : "{{ route('table.aparat') }}",
        columns: [
            {data :'nama',name:'nama'},
            {data :'jabatan' , name:'jabatan'},
            {data : 'masa_jabatan', name: 'masa_jabatan'},
            {
                "name": "gambar",
                "data": "gambar",
                "render": function (data, type, full, meta) {
                    return "<img src=\"/ubold/asetImg/fileUpload/fotoAparat/" + data + "\" height=\"50\"/>";
                },
                "title": "Image",
                "orderable": true,
                "searchable": true
            },
            {data : 'action', name: 'action'},
        ]
    });
</script>

@endpush

