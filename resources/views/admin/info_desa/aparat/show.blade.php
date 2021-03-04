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
                        <li>
                        <a href="{{ route('aparat.index') }}"> Tabel Pemerintah Desa</a>
                        </li>
                        <li class="active">
                            Detail Data
                        </li>
                    </ol>
                </div>
            </div>

    <div class="row">
        <div class="col-sm-12">
            <div class="card-box table-responsive">
                <h4 class="m-t-0 header-title"><b>Detail Data</b></h4>
                <p class="text-muted font-13 m-b-30">
                    Detail Informasi tentang anggota aparat desa </p>
        
                    <div class="container">
                        <div class="row">
                            <div class="col-md-3">
                                <img src="{{ asset('ubold/asetImg/fileUpload/fotoAparat/'.$model->gambar) }}" alt="" srcset="" style="width:200px;" class="img-thumbnail" >
                            </div>
                            <div class="col-md-9">
                                <div class="panel panel-border panel-inverse">
                                    <div class="panel-heading">
                                        <h3 class="panel-title">Informasi Basic</h3>
                                    </div>
                                    <div class="panel-body">
                                        <div class="row">
                                        <div class="col-md-3"><small>Nama</small> <br> <strong>{{ $model->nama }}</strong> </div>
                                            <div class="col-md-3"><small>NIK</small> <br> <strong>{{ $model->nik }}</strong></div>
                                            <div class="col-md-3"><small>Tempat Lahir</small>  <br> <strong>{{ $model->tempat_lahir }}</strong></div>
                                            <div class="col-md-3"><small>Tanggal Lahir</small> <br> <strong>{{ $model->tanggal_lahir }}</strong></div>
                                        </div>
                                        <br>
                                        <div class="row">
                                        <div class="col-md-3"><small>Jenis Kelamin</small><br><strong>{{ $model->jenis_kelamin }}</strong></div>
                                            <div class="col-md-3"><small>Pendidikan</small><br><strong> {{ $model->pendidikan }} </strong>
                                          </div>
                                     
                                            <div class="col-md-3"><small>Agama</small><br><strong>{{ $model->agama }}</strong></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="panel panel-border panel-inverse">
                                    <div class="panel-heading">
                                        <h3 class="panel-title">Informasi Kepegawaian</h3>
                                    </div>
                                    <div class="panel-body">
                                        <div class="row">
                                            <div class="col-md-3"><small>Jabatan</small> <br> <strong>{{ $model->jabatan }}</strong> </div>
                                                <div class="col-md-3"><small>Nomor SK Pengangkatan</small> <br> <strong>{{ $model->sk_pengangkatan }}</strong></div>
                                                <div class="col-md-3"><small>Tanggal SK Pengangkatan</small>  <br> <strong>{{ $model->tgl_sk_pengangkatan }}</strong></div>
                                                <div class="col-md-3"><small>Nomor SK Pemberhentian</small> <br> <strong>{{ $model->nomor_sk_pemberhentian }}</strong></div>
                                            </div>
                                            <br>
                                            <div class="row">
                                                <div class="col-md-3"><small>Tanggal SK Pemberhentian</small> <br> <strong>{{ $model->tgl_sk_pemberhentian }}</strong> </div>
                                                    <div class="col-md-3"><small>Masa Jabatan</small> <br> <strong>{{ $model->masa_jabatan }}</strong></div>
                                                 
                                                </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


            </div>
        </div>
    </div>
                        

                    </div> <!-- container -->
                               
                </div> <!-- content -->

            
@endsection

@push('scripts')
 
@endpush
