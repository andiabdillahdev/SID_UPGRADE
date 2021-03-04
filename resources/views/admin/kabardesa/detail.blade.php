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
                                        Preview Berita
                                    </li>
                                </ol>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-sm-12">
                                <div class="card-box table-responsive">
                                    <h4 class="m-t-0 header-title"><b>preview Berita</b></h4>        
                          
                                  <div class="container">
                                    <div class="row text-center">
                                          <h1>{{ $model->judul }}</h1>
                                      </div>
                        
                                      <div class="row text-center" style="margin-top:10px;">
                                        <img src="{{ asset('ubold/asetImg/fileUpload/fileberita/'.$model->file) }}" alt="" style="width:500px">
                                      </div>
                                      
                                      <div class="row text-center">
                                        <small>{{ $model->sumber_gambar }}</small>
                                      </div>

                                      <div class="row" style="margin-top:30px;">
                                          <div class="col-md-2"></div>
                                          <div class="col-md-8">
                                             @php
                                                 echo $model->konten
                                             @endphp
                                          </div>
                                          <div class="col-md-2"></div>
                                      </div>


                                </div>
                            </div>
                        </div>
                        

                    </div> <!-- container -->
                               
                </div> <!-- content -->

            
@endsection