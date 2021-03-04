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
                              
                                <h4 class="page-title">Lembaga Desa</h4>
                                <ol class="breadcrumb">
                                    <li>
                                        <a href="javascript:void(0);">Info Desa</a>
                                    </li>
                                    <li class="active">
                                        Lembaga Desa
                                    </li>
                                </ol>
                            </div>
                        </div>

                       
                        <div class="row">
							<div class="col-sm-6 col-md-6 col-lg-3 bpd" style="cursor: pointer;" data-action="{{ route('lembaga.bpd') }}">
								<div class="widget-bg-color-icon card-box">
									<div class="bg-icon pull-left">
                                        <img src="{{ asset('ubold/asetImg/bpdd.png') }}" style="width: 80px;" class="img-circle">
									</div>
									<div class="text-right">
                                        <p class="text-muted"><b data-plugin="counterup">5894</b></p>
                                        <h3 class="text-dark">BPD</h3>
										
									</div>
									<div class="clearfix"></div>
								</div>
							</div>
							
							<div class="col-sm-6 col-md-6 col-lg-3 pkk" style="cursor: pointer;" data-action="{{ route('lembaga.pkk') }}">
								<div class="widget-bg-color-icon card-box">
                                    <div class="bg-icon pull-left">
                                        <img src="{{ asset('ubold/asetImg/pkk.png') }}" style="width: 80px;" class="img-circle">
									</div>
									<div class="text-right">
                                        <p class="text-muted"><b data-plugin="counterup">5894</b></p>
                                        <h3 class="text-dark">PKK</h3>
										
									</div>
									<div class="clearfix"></div>
								</div>
							</div>
							
							<div class="col-sm-6 col-md-6 col-lg-3 karang" style="cursor: pointer;" data-action="{{ route('lembaga.karangtaruna') }}">
								<div class="widget-bg-color-icon card-box">
                                    <div class="bg-icon pull-left">
                                        <img src="{{ asset('ubold/asetImg/kr.png') }}" style="width: 80px;" class="img-circle">
									</div>
                                    <div class="text-right">
                                        <p class="text-muted"><b data-plugin="counterup">5894</b></p>
                                        <h4 class="text-dark">Karang Taruna</h4>
										
									</div>
									<div class="clearfix"></div>
								</div>
							</div>
							
							
							<div class="col-sm-6 col-md-6 col-lg-3 bumdes" style="cursor: pointer;" data-action="{{ route('lembaga.bumdes') }}">
								<div class="widget-bg-color-icon card-box">
                                    <div class="bg-icon pull-left">
                                        <img src="{{ asset('ubold/asetImg/bumdes1.jpg') }}" style="width: 80px;" >
									</div>
									<div class="text-right">
										<h3 class="text-dark"><b data-plugin="counterup">36521</b></h3>
										<p class="text-muted">BUMDes</p>
									</div>
									<div class="clearfix"></div>
								</div>
							</div>
                        </div>
                        
                        {{-- <div class="row">
							<div class="col-sm-6 col-md-6 col-lg-3">
								<div class="widget-bg-color-icon card-box">
									<div class="bg-icon pull-left">
                                        <img src="{{ asset('ubold/asetImg/posyandu.jpg') }}" style="width: 80px;">
									</div>
									<div class="text-right">
                                        <p class="text-muted"><b data-plugin="counterup">5894</b></p>
                                        <h3 class="text-dark">Posyandu</h3>
										
									</div>
									<div class="clearfix"></div>
								</div>
							</div>
							
							<div class="col-sm-6 col-md-6 col-lg-3">
								<div class="widget-bg-color-icon card-box">
                                    <div class="bg-icon pull-left">
                                        <img src="{{ asset('ubold/asetImg/lmp.png') }}" style="width: 80px;" >
									</div>
									<div class="text-right">
                                        <p class="text-muted"><b data-plugin="counterup">5894</b></p>
                                        <h3 class="text-dark">LMP</h3>
										
									</div>
									<div class="clearfix"></div>
								</div>
							</div>
							
							<div class="col-sm-6 col-md-6 col-lg-3">
								<div class="widget-bg-color-icon card-box">
                                    <div class="bg-icon pull-left">
                                        <img src="{{ asset('ubold/asetImg/remaja.png') }}" style="width: 100px;">
									</div>
                                    <div class="text-right">
                                        <p class="text-muted"><b data-plugin="counterup">5894</b></p>
                                        <h4 class="text-dark">Remaja Masjid</h4>
										
									</div>
									<div class="clearfix"></div>
								</div>
							</div>
							
							
							<div class="col-sm-6 col-md-6 col-lg-3">
								<div class="widget-bg-color-icon card-box">
                                    <div class="bg-icon pull-left">
                                        <img src="{{ asset('ubold/asetImg/rtrw.jpg') }}" style="width: 80px;" >
									</div>
									<div class="text-right">
										<h3 class="text-dark"><b data-plugin="counterup">36521</b></h3>
										<p class="text-muted">RW/RT</p>
									</div>
									<div class="clearfix"></div>
								</div>
							</div>
						</div> --}}

                    </div> <!-- container -->
                               
                </div> <!-- content -->

            
@endsection


