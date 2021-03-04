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
                                        Input Berita
                                    </li>
                                </ol>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-sm-12">
                                <div class="card-box table-responsive">
                                    <h4 class="m-t-0 header-title"><b>Form Input Berita </b></h4>

                                     <div id="formX">
                                        <a id="link" href="{{ route('kabardesa.index') }}" style="display: none"></a>
                                        {!! Form::model($model, [
                                            'route'=> $model->exists ? ['kabardesa.update',$model->id] : 'kabardesa.store',
                                            'method'=> $model->exists ? 'PUT' : 'POST',
                                            'id'=>'formPend',
                                            'class'=>'form-horizontal',
                                            'role'=>'form'
                                        ]) !!}

                                         <div class="container">
                                            <div class="row">
                                               <div class="col-lg-6">
                                                <div class="panel panel-color panel-warning">
                                                    <div class="panel-heading">
                                                        <h3 class="panel-title">Note <i class="fa fa-warning"></i></h3>
                                                    </div>
                                                    <div class="panel-body">
                                                        <ul>
                                                            <li><span style="color: red">*</span> Wajib di Isi</li>
                                                            <li> Isi kolom sumber gambar apabila mengambil gambar dari internet , contoh <i style="color: #bdbdbd">Teknisi memeriksa komputer untuk persiapan UN (Rebuplika.co.id)</i></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                               </div>
                                            </div>
                                        </div>
                                     
                                        <div class="form-group">
                                            <label class="col-md-3 control-label">Judul <span style="color:red">*</span></label>
                                            <div class="col-sm-7">
                                                {!! Form::text('judul',null, ['class'=>'form-control','placeholder'=>'Masukkan Judul Berita','id'=>'judul']) !!}
                                            </div>
                                        </div>
                                    
                                        <div class="form-group">
                                            <label class="col-md-3 control-label">Upload Gambar Judul <span style="color:red">*</span></label>
                                            <div class="col-sm-7">
                                                {!! Form::file('file',null, ['class'=>'form-control','id'=>'file']) !!}
                                                @if ($model->exists)
                                                    <p class="text-info"> <small><i class="fa fa-file-archive-o"></i> {{ $model->file }} </small> </p>
                                            <input type="hidden" name="tampungFile" value="{{ $model->file }}">
                                                @endif
                                            </div>
                                        </div>
                                    
                                        <div class="form-group">
                                            <label class="col-md-3 control-label">Sumber Gambar</label>
                                            <div class="col-sm-7">
                                                {!! Form::text('sumber_gambar',null, ['class'=>'form-control','placeholder'=>'Contoh : Ilustrasi Uang (Kompas.com/Nurwahidah)','id'=>'sumber_gambar']) !!}
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="col-md-3 control-label">Konten <span style="color:red">*</span> </label>
                                            <div class="col-sm-7">
                                                <textarea id="summernote" name="konten">
                                                    @if ($model->exists)
                                                        {{ $model->konten }}
                                                    @endif
                                                </textarea>
                                            </div>
                                        </div>
                                  
                                        <div class="form-group">
                                            <label class="col-md-3 control-label">Kategori<span style="color:red">*</span> </label>
                                            <div class="col-sm-7">
                                                {!! Form::select('kategori', ['Berita Desa' => 'Berita Desa', 'Produk Desa' => 'Produk Desa','Nasional' => 'Nasional','Pemilu' => 'Pemilu','Pertanian' => 'Pertanian','Ekonomi' => 'Ekonomi','Pemerintahan' => 'Pemerintahan','Regulasi' => 'Regulasi','Kesehatan' => 'Kesehatan'], null, ['placeholder' => 'Pilih','class'=>'form-control','id'=>'jk']); !!}
                                            </div>
                                        </div>
                                    {!! Form::close() !!}
                                    
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <div class="alert alert-danger print-error-msg" style="display:none">
                                                    <strong>Perhatian !!!</strong>
                                                    <ul></ul>
                                                </div>
                                            </div>
                                        </div>
                                       </div>
                                       
                                        <div class="row text-center">
                                            <button type="button" class="btn btn-default waves-effect waves-light btn-sm" id="simpanX"> <i class="fa fa-send-o"></i> <span>Submit</span> </button>
                                        <a href="{{ route('wilayah.index') }}" role="button" class="btn btn-danger waves-effect waves-light btn-sm">  <i class="fa fa-ban"></i> <span>Cancel</span> </a>
                                        </div>

                                </div>
                            </div>
                        </div>
                        

                    </div> <!-- container -->
                               
                </div> <!-- content -->

            
@endsection


