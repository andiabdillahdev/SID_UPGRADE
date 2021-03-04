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
                                    <a href="{{ route('wilayah.index') }}">Tabel Dusun dan Wilayah Dusun</a>
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
                                        Masukkan Data wilayah dusun beserta kepala dusun </p>
        
                                        {{-- <div class="alert alert-danger alert-dismissable print-error-msg" style="display: none">
                                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                                            <ul></ul>
                                        </div> --}}

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

                                     


                                     <div id="formDusun">
                                        <a id="link" href="{{ route('wilayah.index') }}" style="display: none"></a>
                                        {!! Form::model($model, [
                                            'route'=> $model->exists ? ['wilayah.update',$model->id] : 'wilayah.store',
                                            'method'=> $model->exists ? 'PUT' : 'POST',
                                            'class' => 'form-horizontal',
                                            'role'=>'form'
                                        ]) !!}
                                        
                                        <div class="form-group">
                                            <label for="namadusun" class="col-sm-3 control-label">Dusun</label>
                                            <div class="col-sm-7">
                                   
                                                <input type="text" class="form-control" id="namadusun" name="Dusun" placeholder="Masukkan Nama Wilayah Dusun" @if ($model->exists)
                                            value="{{ $model->nama_dusun }}"
                                                @endif >

                                           

                                            </div>
                                        </div>
                                        
                                        <div class="form-group">
                                            <label for="nama_nik" class="col-sm-3 control-label">Kepala Dusun</label>

                                            @if ($model->exists)
                                                <div>
                                            @endif

                                            <div class="col-sm-7">
                                                <div class="input-group">
                                                    <span class="input-group-addon"><i class="fa fa-search"></i></span>
                                                    <select name="Kepala_Dusun" class="form-control select2"  >
                                                            
                                                @if ($model->exists)
                                                    <option value="{{ $model->nama_nik }}" selected> {{ $model->nama_nik }} </option>
                                                <option disabled >Pilih apabila ingin merubah data kepala dusun  </option>
                                                @foreach ($penduduk as $item)
                                            <option value="{{ $item->nama }}"> {{ $item->nama }} ( {{ $item->nik }} )</option>
                                                @endforeach
                                                @else
                                                <option disabled selected> Cari Nama dan Nik</option>
                                                @foreach ($penduduk as $item)
                                            <option value="{{ $item->nama }}"> {{ $item->nama }} ( {{ $item->nik }} )</option>
                                                @endforeach
                                                @endif
                                                        
                                                     </select>
                                                </div>
                                            </div>
                                      

                                        </div>
                                        
                                        {!! Form::close() !!}
                                     </div>
                                       
                                        <div class="row text-center">
                                            <button type="button" class="btn btn-default waves-effect waves-light btn-sm" id="simpanDusun"> <i class="fa fa-send-o"></i> <span>Submit</span> </button>
                                        <a href="{{ route('wilayah.index') }}" role="button" class="btn btn-danger waves-effect waves-light btn-sm">  <i class="fa fa-ban"></i> <span>Cancel</span> </a>
                                        </div>

                                </div>
                            </div>
                        </div>
                        

                    </div> <!-- container -->
                               
                </div> <!-- content -->

            
@endsection


