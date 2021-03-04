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
                          

                                <h4 class="page-title">Peta Desa</h4>
                                <ol class="breadcrumb">
                                    <li><a href="#">Info Desa</a></li>
                                    <li class="active">Peta</li>
                                </ol>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-lg-12">
                                <div class="card-box">
                                    <h4 class="m-t-0 m-b-20 header-title"><b>Desa Seppang</b></h4>
                                    {{-- <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d31771.45455663277!2d120.21303085007008!3d-5.502721526583393!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dbc0121ac4b59e9%3A0x6388f377db454fc1!2sSeppang%2C%20Ujung%20Loe%2C%20Kabupaten%20Bulukumba%2C%20Sulawesi%20Selatan!5e0!3m2!1sid!2sid!4v1588665174557!5m2!1sid!2sid" width="1030" height="400" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe> --}}
                                </div>
                            </div>
                        </div>
                        
                        <div class="row">
							<div class="col-lg-6">
								<div class="card-box">
									<h4 class="m-t-0 m-b-20 header-title"><b>Basic</b></h4>
									
									<div id="gmaps-basic" class="gmaps"></div>
								</div>
							</div>
							
							<div class="col-lg-6">
								<div class="card-box">
									<h4 class="m-t-0 m-b-20 header-title"><b>Peta Kantor Desa</b></h4>
									
									<div id="gmaps-markers" class="gmaps"></div>
								</div>
							</div>
						</div>


           			 </div> <!-- container -->
                               
                </div> <!-- content -->

@endsection