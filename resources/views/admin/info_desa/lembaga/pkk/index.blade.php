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
                              
                                <h4 class="page-title">Pemberdayaan Kesejahteraan Keluarga (PKK)</h4>
                                <ol class="breadcrumb">
                                    <li>
                                        <a href="javascript:void(0);">Info Desa</a>
                                    </li>
                                    <li>
                                    <a href="{{ route('lembaga.home') }}">Lembaga Desa</a>
                                    </li>
                                    <li class="active">
                                        Tabel PKK
                                    </li>
                                </ol>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-sm-12">
                                <div class="card-box table-responsive">
                                    <h4 class="m-t-0 header-title"><b>Tabel PKK</b></h4>
                                    <p class="text-muted font-13 m-b-30">
                                        Informasi anggota Pemberdayaan Kesejahteraan Keluarga (PKK) </p>
                            
                                    <div class="container">
                                        <div class="row">
                                        <a href="{{ route('lembaga.createpkk') }}" data-toggle="tooltip" data-placement="right" title="" data-original-title="Input Data" role="button" class="btn btn-primary waves-effect waves-light btn-sm">
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
                                            <th>Nama</th>
                                            <th>Jabatan</th>
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
    $('#datatable').DataTable({
        responsive : true,
        processing : true,
        serverSide : true,
        ajax : "{{ route('lembaga.pkktable') }}",
        columns: [
            {data :'nama',name:'nama'},
            {data :'jabatan' , name:'jabatan'},
            {
                "name": "foto",
                "data": "foto",
                "render": function (data, type, full, meta) {
                    return "<img src=\"/ubold/asetImg/fileUpload/fotobpd/" + data + "\" height=\"50\"/>";
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

