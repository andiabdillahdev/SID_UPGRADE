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
                                        Update Data
                                    </li>
                                </ol>
                            </div>
                        </div>

                        <div class="row" id="formAparat">
                            <a id="link" href="{{ route('aparat.index') }}" style="display: none"></a>
                            <div class="col-md-4">
                                <div class="profile-detail card-box">
                                    <div>
                                    <img @if ($aparat->exists)
                                    src="{{ asset('ubold/asetImg/fileUpload/fotoAparat/'.$aparat->gambar) }}"
                                    @else
                                    src="{{ asset('ubold/asetImg/userAparat.png') }}"
                                    @endif alt="profile-image" style="width:100px;">

                                 
                                {!! Form::model($aparat,[
                                    'route'  => $aparat->exists ? ['aparat.update',$aparat->id] : 'aparat.store',
                                    'method' => $aparat->exists ? 'PUT' : 'POST',
                                    'class' => 'form-horizontal',
                                    'role'  => 'form'
                                    ]) !!}

                                    @if ($aparat->exists)
                                    <input type="hidden" name="tampungFoto" value="{{ $aparat->gambar }}">
                                    @endif

                                     <div class="row m-t-10">  
                                            <div class="form-group">
                                                <label for="example-input1-group1" class="col-sm-3 control-label">Upload Foto</label>
                                                <div class="col-sm-9">
                                       
                                                    <div class="input-group">
                                                        <span class="input-group-addon"><i class="fa fa-file-image-o"></i></span>
                                                        <input type="file" id="example-input1-group1" name="foto" class="form-control" placeholder="Username">
                                                    </div>
                                                </div>
                                            </div>                   
                                     </div>
                                    </div>
                                </div>                           
                            </div>


                            <div class="col-md-8">

                                
								<div class="panel panel-color panel-info">
									<div class="panel-heading">
										<h3 class="panel-title"><i class="fa fa-info-circle"></i> Ketentuan @if ($aparat->exists)
                                            Update Form
                                        @else
                                        Form
                                        @endif </h3>
									</div>
									<div class="panel-body">
									    <div class="row">
                                            <div class="col-md-12">
                                                <ul >
                                                    <li> <p class="text-warning"><i class="fa fa-warning"></i> Pencarian nama di lakukan apabila aparat telah terdaftar di <strong><a href="#" class="text-warning">data penduduk</a></strong> </p></li>
                                                    @if ($aparat->exists)
                                                    <li>  <p class="text-warning"><i class="typcn typcn-warning"></i>
                                                       Upload Foto Apabila ingin meng-update Foto
                                                    </p></li>
                                                    @endif
                                                    <li>  <p class="text-danger">
                                                        ( * ) Wajib Di Isi
                                                     </p></li>
                                                    
                                                </ul>
                                             
                                              
                                            </div>
                                        </div>
									</div>
                                </div>
                                
                                <div class="panel panel-border panel-danger dangerAparat" style="display: none">
									<div class="panel-heading">
										<h3 class="panel-title">  <strong>Perhatian !!!</strong></h3>
									</div>
									<div class="panel-body">
                                        <div class="alert alert-danger errorAparat" >
                                          
                                            <ul></ul>
                                        </div>
									</div>
								</div>
							
                               
                                <div class="card-box">
                            
                                 <div class="container">
                               <div class="row">
                                <div class="form-group">

                                    <div style="display: none">
                                    <a id="routeTampung" href="{{ route('aparat.tampung') }}"></a>
                                    </div>

                                    <label for="nama_nik" class="col-sm-3 control-label">NIK / Nama</label>
                                    <div class="col-sm-8">
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="fa fa-search"></i></span>
                                            <select name="nama_nik" class="form-control select2" id="nama_nik">
                                                <option disabled selected> Cari Nama dan Nik</option>
                                                @foreach ($pend as $item)
                                            <option value="{{ $item->nik }}"> {{ $item->nama }} ( {{ $item->nik }} )</option>
                                                @endforeach
                                                
                                            </select>
                                        </div>
                                    </div>
                                </div>
                               </div>

                           
                            
                                    
                                        
                                    <hr>

                            <div class="tampungHtml">
                                <div class="row">
                                <div class="form-group">
                                        <label for="nama" class="col-sm-3 control-label"> <span class="text-danger">*</span>Nama</label>
                                        <div class="col-sm-8">
                                     
                                            <input type="text" class="form-control" id="nama" name="nama" placeholder="Masukkan Nama Aparat"  autocomplete="off" @if ($aparat->exists)
                                        value="{{ $aparat->nama }}"
                                            @endif>
                                        </div>
                                    </div>
                                  </div>

                           
                                  <div class="row m-t-15">
                                    <div class="form-group">
                                        <label for="nik" class="col-sm-3 control-label">NIK</label>
                                        <div class="col-sm-8">
                               
                                            <input type="text" class="form-control" id="nik" name="nik" placeholder="Masukkan NIK" autocomplete="off" @if ($aparat->exists)
                                        value="{{ $aparat->nik }}"
                                            @endif>
                                        </div>
                                    </div>
                                  </div>
                               
                                  <div class="row m-t-15">
                                    <div class="form-group">
                                        <label for="tempat_lahir" class="col-sm-3 control-label">Tempat Lahir</label>
                                        <div class="col-sm-8">
                               
                                            <input type="text" class="form-control" id="tempat_lahir" name="tempat_lahir" placeholder="Masukkan Tempat Lahir" autocomplete="off" @if ($aparat->exists)
                                        value="{{ $aparat->tempat_lahir }}"
                                            @endif>
                                        </div>
                                    </div>
                                  </div>

                                 
    
                                  <div class="row m-t-15">
                                    <div class="form-group">
                                        <label for="tanggal_lahir" class="col-sm-3 control-label">Tanggal Lahir</label>
                                        <div class="col-sm-8">
                                            <input type="date" class="form-control" id="tanggal_lahir" name="tanggal_lahir" @if ($aparat->exists)
                                                value="{{ $aparat->tanggal_lahir }}"
                                            @endif>
                                        </div>
                                    </div>
                                  </div>
    
                                  <div class="row m-t-15">
                                    <div class="form-group">
                                        <label for="jenis_kelamin" class="col-sm-3 control-label">Jenis Kelamin</label>
                                        <div class="col-sm-8">
                                            <select name="jenis_kelamin" id="jenis_kelamin" class="form-control">
                                                <option disabled selected> -- Pilih -- </option>
                                                <option value="LAKI-LAKI" @if ($aparat->jenis_kelamin == 'LAKI-LAKI')
                                                    selected
                                                @endif >LAKI-LAKI</option>
                                                <option value="PEREMPUAN" @if ($aparat->jenis_kelamin == 'PEREMPUAN')
                                                    selected
                                                @endif>PEREMPUAN</option>
                                            </select>
                                        </div>
                                    </div>
                                  </div>
    
                                  <div class="row m-t-15">
                                    <div class="form-group">
                                        <label for="pendidikan" class="col-sm-3 control-label">Pendidikan</label>
                                        <div class="col-sm-8">
                               
                                            <input type="text" class="form-control" id="pendidikan" name="pendidikan" placeholder="Masukkan Pendidikan Terakhir" autocomplete="off" @if ($aparat->exists)
                                            value="{{ $aparat->pendidikan }}"
                                                @endif>
                                        </div>
                                    </div>
                                  </div>
    
                                  <div class="row m-t-15">
                                    <div class="form-group">
                                        <label for="agama" class="col-sm-3 control-label">Agama</label>
                                        <div class="col-sm-8">
                               
                                            <input type="text" class="form-control" id="agama" name="agama" placeholder="Masukkan Agama" autocomplete="off" @if ($aparat->exists)
                                            value="{{ $aparat->agama }}"
                                                @endif>
                                        </div>
                                    </div>
                                  </div>
                            </div>

                              <div class="row m-t-15">
                                <div class="form-group">
                                    <label for="nomor_induk_pegawai" class="col-sm-3 control-label">NIAP</label>
                                    <div class="col-sm-8">
                           
                                        <input type="text" class="form-control" id="nomor_induk_pegawai" name="nomor_induk_pegawai" placeholder="Masukkan NIAP" autocomplete="off" @if ($aparat->exists)
                                        value="{{ $aparat->nomor_induk_pegawai }}"
                                            @endif>
                                    </div>
                                </div>
                              </div>


                              <div class="row m-t-15">
                                <div class="form-group">
                                    <label for="pangkat" class="col-sm-3 control-label">Pangkat / Golongan</label>
                                    <div class="col-sm-8">
                           
                                        <input type="text" class="form-control" id="pangkat" name="pangkat" placeholder="Masukkan Pangkat dan Golongan" autocomplete="off" @if ($aparat->exists)
                                        value="{{ $aparat->pangkat }}"
                                            @endif>
                                    </div>
                                </div>
                              </div>

                              
                              <div class="row m-t-15">
                                <div class="form-group">
                                    <label for="sk_pengangkatan" class="col-sm-3 control-label">Nomor SK Pengangkatan</label>
                                    <div class="col-sm-8">
                           
                                        <input type="text" class="form-control" id="sk_pengangkatan" name="sk_pengangkatan" placeholder="Masukkan Pangkat dan Golongan" autocomplete="off" @if ($aparat->exists)
                                        value="{{ $aparat->sk_pengangkatan }}"
                                            @endif>
                                    </div>
                                </div>
                              </div>

                              <div class="row m-t-15">
                                <div class="form-group">
                                    <label for="tgl_sk_pengangkatan" class="col-sm-3 control-label">Tanggal SK Pengangkatan</label>
                                    <div class="col-sm-8">
                           
                                        <input type="date" class="form-control" id="tgl_sk_pengangkatan" name="tgl_sk_pengangkatan" @if ($aparat->exists)
                                        value="{{ $aparat->tgl_sk_pengangkatan }}"
                                            @endif>
                                    </div>
                                </div>
                              </div>

                              <div class="row m-t-15">
                                <div class="form-group">
                                    <label for="nomor_sk_pemberhentian" class="col-sm-3 control-label">Nomor SK Pemberhentian</label>
                                    <div class="col-sm-8">
                           
                                        <input type="text" class="form-control" id="nomor_sk_pemberhentian" name="nomor_sk_pemberhentian" placeholder="Masukkan Nomor SK Pemberhentian"  @if ($aparat->exists)
                                        value="{{ $aparat->nomor_sk_pemberhentian }}"
                                            @endif>
                                    </div>
                                </div>
                              </div>

                              <div class="row m-t-15">
                                <div class="form-group">
                                    <label for="tgl_sk_pemberhentian" class="col-sm-3 control-label">Tanggal SK Pemberhentian</label>
                                    <div class="col-sm-8">
                           
                                        <input type="date" class="form-control" id="tgl_sk_pemberhentian" name="tgl_sk_pemberhentian"  @if ($aparat->exists)
                                        value="{{ $aparat->tgl_sk_pemberhentian }}"
                                            @endif>
                                    </div>
                                </div>
                              </div>

                              <div class="row m-t-15">
                                <div class="form-group">
                                    <label for="masa_jabatan" class="col-sm-3 control-label">Masa Jabatan</label>
                                    <div class="col-sm-8">
                           
                                        <input type="text" class="form-control" id="masa_jabatan" name="masa_jabatan" placeholder="Contoh 6 Tahun Periode (2015/2021)" @if ($aparat->exists)
                                        value="{{ $aparat->masa_jabatan }}"
                                            @endif>
                                    </div>
                                </div>
                              </div>

                              <div class="row m-t-15">
                                <div class="form-group">
                                    <label for="jabatan" class="col-sm-3 control-label"><span class="text-danger">*</span>Jabatan</label>
                                    <div class="col-sm-8">
                           
                                        <input type="text" class="form-control" id="jabatan" name="jabatan" placeholder="Jabatan"  @if ($aparat->exists)
                                        value="{{ $aparat->jabatan }}"
                                            @endif>
                                    </div>
                                </div>
                              </div>

                              <div class="row text-center m-t-20">
                                <button type="button" class="btn btn-default waves-effect waves-light btn-sm" id="simpanAparat"> <i class="fa fa-send-o"></i> <span>Submit</span> </button>
                            <a href="{{ route('aparat.index') }}" role="button" class="btn btn-danger waves-effect waves-light btn-sm">  <i class="fa fa-ban"></i> <span>Cancel</span> </a>
                            </div>
                           

                                 </div>
                                     
                                </div>
                            </div>
                            {!! Form::close() !!}
                        </div>
                        

                    </div> <!-- container -->
                               
                </div> <!-- content -->

            
@endsection


