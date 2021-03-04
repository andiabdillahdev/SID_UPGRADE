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
                                    <li>
                                        <a href="javascript:void(0);">Lembaga Desa</a>
                                    </li>
                                    <li>
                                    <a href="{{ route('lembaga.bpd') }}">BPD</a>
                                    </li>
                                    <li class="active">
                                        Input Data 
                                    </li>
                                </ol>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-sm-12">
                                <div class="card-box table-responsive">
                                    <h4 class="m-t-0 header-title"><b>Form Input Data </b></h4>
                                    <p class="text-muted font-13 m-b-30">
                                        Masukkan Data Anggota BPD </p>
        
                            

                                       <div class="container">
                                        <div class="row">
                                            <div class="col-sm-5">
                                                <div class="alert alert-danger print-error-msg" style="display:none">
                                                    <strong>Perhatian !!!</strong>
                                                    <ul></ul>
                                                </div>
                                            </div>
                                        </div>
                                       </div>

                                     


                                     <div id="formX">
                                        <a id="link" href="{{ route('lembaga.bpd') }}" style="display: none"></a>
                                        {!! Form::model($model, [
                                            'route'=> $model->exists ? ['lembaga.update',$model->id] : 'lembaga.store',
                                            'method'=> $model->exists ? 'PUT' : 'POST',
                                            'class' => 'form-horizontal',
                                            'role'=>'form'
                                        ]) !!}
                                        
                                        <div class="form-group">
                                            <label for="nama" class="col-sm-3 control-label">Nama</label>
                                            <div class="col-sm-7">
                                                <div class="input-group">
                                                    <span class="input-group-addon"><i class="fa fa-search"></i></span>
                                                    <select name="nama" class="form-control select2">

                                                        @if ($model->exists)
                                                    <option value="{{ $model->nama }}" selected> {{ $model->nama }} </option>
                                                    <option disabled >Cari Nama / NIK</option>
                                                    @foreach ($pend as $item)
                                                    <option value="{{ $item->nama }}"> {{ $item->nama }} </option>
                                                            @endforeach 
                                                        @else
                                                        <option disabled selected> Cari Nama / NIK </option>
                                                        @foreach ($pend as $item)
                                                <option value="{{ $item->nama }}"> {{ $item->nama }} </option>
                                                        @endforeach  
                                                        @endif

                                                         
                                                     </select>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label for="jabatan" class="col-sm-3 control-label">Jabatan</label>
                                            <div class="col-sm-7">
                                                {!! Form::text('jabatan',null, ['class'=>'form-control','placeholder'=>'Masukkan Jabatan','id'=>'jabatan']) !!}
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label for="foto" class="col-sm-3 control-label">Foto</label>
                                            <div class="col-sm-7">
                                                
                                                 
                                                <input type="file" class="form-control" name="file" id="foto">
                                                @if ($model->exists)
                                                <p class="text-info"><i class="fa fa-file-image-o"></i> {{ $model->foto }}
                                                </p>
                                            <input type="hidden" name="tampungFoto" value="{{ $model->foto }}">
                                                    @endif
                                            </div>
                                        </div>

                                        <input type="hidden" name="role" value="bpd">
                                     {!! Form::close() !!} <br>

                                        <div class="row text-center">
                                            <button type="button" title="Data Anggota BPD" class="btn btn-default waves-effect waves-light btn-sm" id="simpanX"> <i class="fa fa-send-o"></i> <span>Submit</span> </button>
                                        <a href="{{ route('lembaga.bpd') }}" role="button" class="btn btn-danger waves-effect waves-light btn-sm">  <i class="fa fa-ban"></i> <span>Cancel</span> </a>
                                        </div>

                                </div>
                            </div>
                        </div>
                        

                    </div> <!-- container -->
                               
                </div> <!-- content -->

            
@endsection


