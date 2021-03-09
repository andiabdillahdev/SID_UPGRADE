<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="A fully featured admin theme which can be used to build CRM, CMS, etc.">
        <meta name="author" content="Coderthemes">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <link rel="shortcut icon" href="{{ asset('ubold/asetImg/ico.png') }}">

        <title>Admin Desa Lembang Lohe</title>

    <link href="{{ asset('ubold/assets/plugins/summernote/summernote.css') }}" rel="stylesheet" />
        
    <link href="{{ asset('ubold/assets/plugins/datatables/jquery.dataTables.min.css') }}" rel="stylesheet" type="text/css"/>
    <link href="{{ asset('ubold/assets/plugins/datatables/buttons.bootstrap.min.css') }}" rel="stylesheet" type="text/css"/>
    <link href="{{ asset('ubold/assets/plugins/datatables/dataTables.bootstrap.min.css') }}" rel="stylesheet" type="text/css"/>

    <link href="{{ asset('ubold/assets/plugins/multiselect/css/multi-select.css') }}"  rel="stylesheet" type="text/css" />
    <link href="{{ asset('ubold/assets/plugins/select2/css/select2.min.css') }}" rel="stylesheet" type="text/css" />

    <link href="{{ asset('ubold/assets/plugins/custombox/css/custombox.css') }}" rel="stylesheet">
    <link href="{{ asset('ubold/assets/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('ubold/assets/css/core.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('ubold/assets/css/components.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('ubold/assets/css/icons.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('ubold/assets/css/pages.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('ubold/assets/css/responsive.css') }}" rel="stylesheet" type="text/css" />

        <!-- HTML5 Shiv and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
        <![endif]-->

        <script src="{{ asset('ubold/assets/js/modernizr.min.js') }}"></script>
        
    </head>


    <body class="fixed-left">

        <!-- Begin page -->
        <div id="wrapper">

            <!-- Top Bar Start -->
            <div class="topbar">

                <!-- LOGO -->
                <div class="topbar-left">
                    <div class="text-center">
                    <a href="{{ url('/home') }}" class="logo"><i class="icon-magnet icon-c-logo"></i><span>Desa Lembang Lohe</a>
                        <!-- Image Logo here -->
                        {{-- <a href="index.html" class="logo">
                            <i class="icon-c-logo"> <img src="ubold/assets/images/logo_sm.png" height="42"/> </i>
                            <span><img src="ubold/assets/images/logo_light.png" height="20"/></span>
                        </a> --}}
                    </div>
                </div>

                <!-- Button mobile view to collapse sidebar menu -->
                <div class="navbar navbar-default" role="navigation">
                    <div class="container">
                        <div class="">
                            <div class="pull-left">
                                <button class="button-menu-mobile open-left waves-effect waves-light">
                                    <i class="md md-menu"></i>
                                </button>
                                <span class="clearfix"></span>
                            </div>

                     

                            <form role="search" class="navbar-left app-search pull-left hidden-xs">
			                     <input type="text" placeholder="Search..." class="form-control">
			                     <a href=""><i class="fa fa-search"></i></a>
			                </form>


                            <ul class="nav navbar-nav navbar-right pull-right">
                                <li class="dropdown top-menu-item-xs">
                                    <a href="#" data-target="#" class="dropdown-toggle waves-effect waves-light" data-toggle="dropdown" aria-expanded="true">
                                        <i class="icon-bell"></i> <span class="badge badge-xs badge-danger">3</span>
                                    </a>
                                    <ul class="dropdown-menu dropdown-menu-lg">
                                        <li class="notifi-title"><span class="label label-default pull-right">New 3</span>Notification</li>
                                        <li class="list-group slimscroll-noti notification-list">
                                           <!-- list item-->
                                           <a href="javascript:void(0);" class="list-group-item">
                                              <div class="media">
                                                 <div class="pull-left p-r-10">
                                                    <em class="fa fa-diamond noti-primary"></em>
                                                 </div>
                                                 <div class="media-body">
                                                    <h5 class="media-heading">A new order has been placed A new order has been placed</h5>
                                                    <p class="m-0">
                                                        <small>There are new settings available</small>
                                                    </p>
                                                 </div>
                                              </div>
                                           </a>

                                           <!-- list item-->
                                           <a href="javascript:void(0);" class="list-group-item">
                                              <div class="media">
                                                 <div class="pull-left p-r-10">
                                                    <em class="fa fa-cog noti-warning"></em>
                                                 </div>
                                                 <div class="media-body">
                                                    <h5 class="media-heading">New settings</h5>
                                                    <p class="m-0">
                                                        <small>There are new settings available</small>
                                                    </p>
                                                 </div>
                                              </div>
                                           </a>

                                           <!-- list item-->
                                           <a href="javascript:void(0);" class="list-group-item">
                                              <div class="media">
                                                 <div class="pull-left p-r-10">
                                                    <em class="fa fa-bell-o noti-custom"></em>
                                                 </div>
                                                 <div class="media-body">
                                                    <h5 class="media-heading">Updates</h5>
                                                    <p class="m-0">
                                                        <small>There are <span class="text-primary font-600">2</span> new updates available</small>
                                                    </p>
                                                 </div>
                                              </div>
                                           </a>

                                           <!-- list item-->
                                           <a href="javascript:void(0);" class="list-group-item">
                                              <div class="media">
                                                 <div class="pull-left p-r-10">
                                                    <em class="fa fa-user-plus noti-pink"></em>
                                                 </div>
                                                 <div class="media-body">
                                                    <h5 class="media-heading">New user registered</h5>
                                                    <p class="m-0">
                                                        <small>You have 10 unread messages</small>
                                                    </p>
                                                 </div>
                                              </div>
                                           </a>

                                            <!-- list item-->
                                           <a href="javascript:void(0);" class="list-group-item">
                                              <div class="media">
                                                 <div class="pull-left p-r-10">
                                                    <em class="fa fa-diamond noti-primary"></em>
                                                 </div>
                                                 <div class="media-body">
                                                    <h5 class="media-heading">A new order has been placed A new order has been placed</h5>
                                                    <p class="m-0">
                                                        <small>There are new settings available</small>
                                                    </p>
                                                 </div>
                                              </div>
                                           </a>

                                           <!-- list item-->
                                           <a href="javascript:void(0);" class="list-group-item">
                                              <div class="media">
                                                 <div class="pull-left p-r-10">
                                                    <em class="fa fa-cog noti-warning"></em>
                                                 </div>
                                                 <div class="media-body">
                                                    <h5 class="media-heading">New settings</h5>
                                                    <p class="m-0">
                                                        <small>There are new settings available</small>
                                                    </p>
                                                 </div>
                                              </div>
                                           </a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);" class="list-group-item text-right">
                                                <small class="font-600">See all notifications</small>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="hidden-xs">
                                    <a href="#" id="btn-fullscreen" class="waves-effect waves-light"><i class="icon-size-fullscreen"></i></a>
                                </li>
                            
                                <li class="dropdown top-menu-item-xs">
                                <a href="" class="dropdown-toggle profile waves-effect waves-light" data-toggle="dropdown" aria-expanded="true"><img src="{{ asset('ubold/asetImg/admin.jpg') }}" alt="user-img" class="img-circle"> </a>
                                    <ul class="dropdown-menu">

                                        <li><a href="javascript:void(0)"><i class="ti-lock m-r-10 text-custom"></i> Lock screen</a></li>
                                        <li class="divider"></li>
                                        <li><a href="javascript:void(0)"  href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                          document.getElementById('logout-form').submit();"><i class="ti-power-off m-r-10 text-danger"></i> Logout</a>
                                                         <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                                            @csrf
                                                        </form>  
                                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <!--/.nav-collapse -->
                    </div>
                </div>
            </div>
            <!-- Top Bar End -->


            <!-- ========== Left Sidebar Start ========== -->

            <div class="left side-menu">
                <div class="sidebar-inner slimscrollleft">
                    <!--- Divider -->
                    <div id="sidebar-menu">
                        <ul>

                        	<li class="text-muted menu-title">Menu</li>

                            <li class="has_sub">
                            <a href="{{route('home')}}" class="waves-effect"><i class="ti-home"></i> <span> Beranda </span> </a>
                             
                            </li>

                            <li class="has_sub">
                                <a href="javascript:void(0);" class="waves-effect"><i class="ti-book"></i> <span> Info Desa </span> <span class="menu-arrow"></span></a>
                                <ul class="list-unstyled">
                                <li><a href="{{ route('info.peta') }}">Peta Desa</a></li>
                                <li><a href="{{ route('wilayah.index') }}">Wilayah Administratif</a></li>
                                <li><a href="{{ route('aparat.index') }}">Pemerintah Desa</a></li>
                                <li><a href="{{ route('lembaga.home') }}">Lembaga Desa</a></li>
                                <li><a href="{{ route('potensi.index') }}">Potensi Desa</a></li>
                                    {{-- <li><a href="javascript:void(0);">Perkembangan Desa</a></li> --}}
                                
                                </ul>
                            </li>

                            <li class="has_sub">
                                <a href="javascript:void(0);" class="waves-effect"><i class="ti-user"></i> <span> Kependudukan </span> <span class="menu-arrow"></span></a>
                                <ul class="list-unstyled">
                                <li><a href="{{ route('penduduk.index') }}">Data Penduduk</a></li>
                                </ul>
                            </li>

                            <li class="has_sub">
                                <a href="javascript:void(0);" class="waves-effect"><i class="ti-archive"></i> <span> Sekretariat </span> <span class="menu-arrow"></span></a>
                                <ul class="list-unstyled">
                                <li><a href="{{ route('suratmasuk.index') }}">Surat Masuk</a></li>
                                <li><a href="{{ route('suratkeluar.index') }}">Surat Keluar</a></li>
                                <li><a href="{{ route('skkades.index') }}">SK Kades</a></li>
                                    {{-- <li><a href="javascript:void(0);">Inventaris & Kekayaan</a></li> --}}
                                </ul>
                            </li>

                            <li class="has_sub">
                                <a href="javascript:void(0);" class="waves-effect"><i class="ti-agenda"></i> <span> Pemerintahan </span> <span class="menu-arrow"></span></a>
                                <ul class="list-unstyled">
                                <li><a href="{{ route('sapras.index') }}">Sarana & Prasarana</a></li>
                                    {{-- <li><a href="javascript:void(0);">Pertanahan</a></li> --}}
                                </ul>
                            </li>

                            <li class="has_sub">
                                <a href="{{ route('apdes') }}" class="waves-effect"><i class="ti-money"></i> <span> APBDes </span> </a>
                            </li>

                            <li class="has_sub">
                            <a href="{{ route('kabardesa.index') }}" class="waves-effect"><i class="icon-speech"></i> <span> Kabar Desa </span> </a>
                            </li>

                            {{-- <li class="has_sub">
                                <a href="javascript:void(0);" class="waves-effect"> <i class="ti-email"></i> <span> Laporan Masuk </span> </a>
                            </li> --}}

                       
                        </ul>
                        <div class="clearfix"></div>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
          
            @yield('konten')
            @include('layouts.modal')

            <div id="loader" style="display: none;position: relative; bottom:400px; left:400px; z-index:1080">
                <img src="{{ asset('ubold/asetImg/tenor.gif') }}">
                  </div>
           
                <footer class="footer text-right">
                    © 2016. All rights reserved.
                </footer>

            </div>
            
            
            <!-- ============================================================== -->
            <!-- End Right content here -->
            <!-- ============================================================== -->


            <!-- Right Sidebar -->
            {{-- <div class="side-bar right-bar nicescroll">
                <h4 class="text-center">Chat</h4>
                <div class="contact-list nicescroll">
                    <ul class="list-group contacts-list">
                        <li class="list-group-item">
                            <a href="#">
                                <div class="avatar">
                                    <img src="ubold/assets/images/users/avatar-1.jpg" alt="">
                                </div>
                                <span class="name">Chadengle</span>
                                <i class="fa fa-circle online"></i>
                            </a>
                            <span class="clearfix"></span>
                        </li>
                        <li class="list-group-item">
                            <a href="#">
                                <div class="avatar">
                                    <img src="ubold/assets/images/users/avatar-2.jpg" alt="">
                                </div>
                                <span class="name">Tomaslau</span>
                                <i class="fa fa-circle online"></i>
                            </a>
                            <span class="clearfix"></span>
                        </li>
                        <li class="list-group-item">
                            <a href="#">
                                <div class="avatar">
                                    <img src="ubold/assets/images/users/avatar-3.jpg" alt="">
                                </div>
                                <span class="name">Stillnotdavid</span>
                                <i class="fa fa-circle online"></i>
                            </a>
                            <span class="clearfix"></span>
                        </li>
                        <li class="list-group-item">
                            <a href="#">
                                <div class="avatar">
                                    <img src="ubold/assets/images/users/avatar-4.jpg" alt="">
                                </div>
                                <span class="name">Kurafire</span>
                                <i class="fa fa-circle online"></i>
                            </a>
                            <span class="clearfix"></span>
                        </li>
                        <li class="list-group-item">
                            <a href="#">
                                <div class="avatar">
                                    <img src="ubold/assets/images/users/avatar-5.jpg" alt="">
                                </div>
                                <span class="name">Shahedk</span>
                                <i class="fa fa-circle away"></i>
                            </a>
                            <span class="clearfix"></span>
                        </li>
                        <li class="list-group-item">
                            <a href="#">
                                <div class="avatar">
                                    <img src="ubold/assets/images/users/avatar-6.jpg" alt="">
                                </div>
                                <span class="name">Adhamdannaway</span>
                                <i class="fa fa-circle away"></i>
                            </a>
                            <span class="clearfix"></span>
                        </li>
                        <li class="list-group-item">
                            <a href="#">
                                <div class="avatar">
                                    <img src="ubold/assets/images/users/avatar-7.jpg" alt="">
                                </div>
                                <span class="name">Ok</span>
                                <i class="fa fa-circle away"></i>
                            </a>
                            <span class="clearfix"></span>
                        </li>
                        <li class="list-group-item">
                            <a href="#">
                                <div class="avatar">
                                    <img src="ubold/assets/images/users/avatar-8.jpg" alt="">
                                </div>
                                <span class="name">Arashasghari</span>
                                <i class="fa fa-circle offline"></i>
                            </a>
                            <span class="clearfix"></span>
                        </li>
                        <li class="list-group-item">
                            <a href="#">
                                <div class="avatar">
                                    <img src="ubold/assets/images/users/avatar-9.jpg" alt="">
                                </div>
                                <span class="name">Joshaustin</span>
                                <i class="fa fa-circle offline"></i>
                            </a>
                            <span class="clearfix"></span>
                        </li>
                        <li class="list-group-item">
                            <a href="#">
                                <div class="avatar">
                                    <img src="ubold/assets/images/users/avatar-10.jpg" alt="">
                                </div>
                                <span class="name">Sortino</span>
                                <i class="fa fa-circle offline"></i>
                            </a>
                            <span class="clearfix"></span>
                        </li>
                    </ul>  
                </div>
            </div> --}}
            <!-- /Right-bar -->

        </div>
        <!-- END wrapper -->


    
        <script>
            var resizefunc = [];
        </script>

        <!-- jQuery  -->
    <script src="{{ asset('ubold/assets/js/jquery.min.js') }}"></script>
    <script src="{{ asset('ubold/assets/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('ubold/assets/js/detect.js') }}"></script>
    <script src="{{ asset('ubold/assets/js/fastclick.js') }}"></script>
    <script src="{{ asset('ubold/assets/js/jquery.slimscroll.js') }}"></script>
    <script src="{{ asset('ubold/assets/js/jquery.blockUI.js') }}"></script>
    <script src="{{ asset('ubold/assets/js/waves.js') }}"></script>
    <script src="{{ asset('ubold/assets/js/wow.min.js') }}"></script>
    <script src="{{ asset('ubold/assets/js/jquery.nicescroll.js') }}"></script>
    <script src="{{ asset('ubold/assets/js/jquery.scrollTo.min.js') }}"></script>
        <!-- jQuery  -->

           {{-- INIJI KUTAMBAI DI SINI--}}
    @yield('js')

    <script src="{{ asset('ubold/assets/plugins/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('ubold/assets/plugins/datatables/dataTables.bootstrap.js') }}"></script>
    
    <script src="{{ asset('ubold/assets/plugins/datatables/dataTables.buttons.min.js') }}"></script>
    <script src="{{ asset('ubold/assets/plugins/datatables/buttons.bootstrap.min.js') }}"></script>
    <script src="{{ asset('ubold/assets/plugins/datatables/jszip.min.js') }}"></script>
    <script src="{{ asset('ubold/assets/plugins/datatables/pdfmake.min.js') }}"></script>
    <script src="{{ asset('ubold/assets/plugins/datatables/vfs_fonts.js') }}"></script>
    <script src="{{ asset('ubold/assets/plugins/datatables/buttons.html5.min.js') }}"></script>
    <script src="{{ asset('ubold/assets/plugins/datatables/buttons.print.min.js') }}"></script>
    
    <script type="text/javascript" src="{{ asset('ubold/assets/plugins/multiselect/js/jquery.multi-select.js') }}"></script>
    <script type="text/javascript" src="{{ asset('ubold/assets/plugins/jquery-quicksearch/jquery.quicksearch.js') }}"></script>
    <script src="{{ asset('ubold/assets/plugins/select2/js/select2.min.js') }}" type="text/javascript"></script>
    <script type="text/javascript" src="{{ asset('ubold/assets/pages/jquery.form-advanced.init.js') }}"></script>


    <script src="{{ asset('ubold/assets/plugins/custombox/js/custombox.min.js') }}"></script>
    <script src="{{ asset('ubold/assets/plugins/custombox/js/legacy.min.js') }}"></script>

    {{-- <script src="{{ asset('ubold/assets/pages/jquery.dashboard_2.js') }}"></script> --}}		
  <!-- google maps api -->
  {{-- <script src="http://maps.google.com/maps/api/js?sensor=true"></script> --}}
  <!-- main file -->
    <script src="{{ asset('ubold/assets/plugins/gmaps/gmaps.min.js') }}"></script>
  <!-- demo codes -->
    <script src="{{ asset('ubold/assets/pages/jquery.gmaps.js') }}"></script>     
    <script src="{{ asset('js/custom.js') }}"></script>

    <script src="{{ asset('js/sweetalert2/sweetalert2.all.min.js') }}"></script>
    <script src="{{ asset('ubold/assets/js/jquery.core.js') }}"></script>
    <script src="{{ asset('ubold/assets/js/jquery.app.js') }}"></script>

    <script src="{{ asset('ubold/assets/plugins/summernote/summernote.min.js') }}"></script>
    <script>
          $('#summernote').summernote({
            height: 350,                 // set editor height
                    minHeight: null,             // set minimum height of editor
                    maxHeight: null,             // set maximum height of editor
                    focus: false       
          });
    </script>
    @stack('scripts')
    </body>
</html>