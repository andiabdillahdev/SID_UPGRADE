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
                              
                                <h4 class="page-title">Pemerintahan</h4>
                                <ol class="breadcrumb">
                                    <li>
                                        <a href="javascript:void(0);">Sarana dan Prasarana</a>
                                    </li>
                                    <li class="active">
                                        Kategori Sarana Prasarana
                                    </li>
                                </ol>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-sm-12">
                            
                                    <ul class="nav nav-tabs tabs" style="width: 100%;">
                                        <li class="tab active" style="width: 25%;">
                                            <a href="#home-2" data-toggle="tab" aria-expanded="true" class="active"> 
                                                <span class="visible-xs"><i class="fa fa-home"></i></span> 
                                                <span class="hidden-xs">Transportasi</span> 
                                            </a> 
                                        </li> 
                                        <li class="tab" style="width: 25%;"> 
                                            <a href="#profile-2" data-toggle="tab" aria-expanded="false" class=""> 
                                                <span class="visible-xs"><i class="fa fa-user"></i></span> 
                                                <span class="hidden-xs">Sanitasi</span> 
                                            </a> 
                                        </li> 
                                        <li class="tab" style="width: 25%;"> 
                                            <a href="#messages-2" data-toggle="tab" aria-expanded="false" class=""> 
                                                <span class="visible-xs"><i class="fa fa-envelope-o"></i></span> 
                                                <span class="hidden-xs">Peribadatan</span> 
                                            </a> 
                                        </li> 
                                        <li class="tab" style="width: 25%;"> 
                                            <a href="#settings-2" data-toggle="tab" aria-expanded="false" class=""> 
                                                <span class="visible-xs"><i class="fa fa-cog"></i></span> 
                                                <span class="hidden-xs">Pendidikan</span> 
                                            </a> 
                                        </li> 
                                        <li class="tab" style="width: 25%;"> 
                                            <a href="#settings-3" data-toggle="tab" aria-expanded="false" class=""> 
                                                <span class="visible-xs"><i class="fa fa-cog"></i></span> 
                                                <span class="hidden-xs">Olahraga</span> 
                                            </a> 
                                        </li> 
                                        <li class="tab" style="width: 25%;"> 
                                            <a href="#kesehatan-1" data-toggle="tab" aria-expanded="false" class=""> 
                                                <span class="visible-xs"><i class="fa fa-cog"></i></span> 
                                                <span class="hidden-xs">Kesehatan</span> 
                                            </a> 
                                        </li> 
                                        <li class="tab" style="width: 25%;"> 
                                            <a href="#irigasi-2" data-toggle="tab" aria-expanded="false" class=""> 
                                                <span class="visible-xs"><i class="fa fa-cog"></i></span> 
                                                <span class="hidden-xs">Irigasi</span> 
                                            </a> 
                                        </li> 
                                        <li class="tab" style="width: 25%;"> 
                                            <a href="#air-2" data-toggle="tab" aria-expanded="false" class=""> 
                                                <span class="visible-xs"><i class="fa fa-cog"></i></span> 
                                                <span class="hidden-xs">Air Bersih</span> 
                                            </a> 
                                        </li> 
                                    <div class="indicator" style="right: 394px; left: 0px;"></div></ul> 
                                    <div class="tab-content"> 
                                        <div class="tab-pane active" id="home-2" style="display: block;"> 
                                            <table id="transportasi" class="table table-striped table-bordered">
                                                <thead>
                                                <tr>
                                                    <th>Aksi</th>
                                                    <th>Item</th>
                                                    <th>Kondisi Baik (Km/Unit)</th>
                                                    <th>Kondisi Rusak (Km/Unit)</th>
                                                    <th>Jumlah</th>
                                                </tr>
                                                </thead>
                
                
                                                <tbody>
                                                
                                                </tbody>
                                            </table>
                                        </div> 
                                        <div class="tab-pane" id="profile-2" style="display: none;">
                                            <table id="sanitasi" class="table table-striped table-bordered">
                                                <thead>
                                                <tr>
                                                    <th>Aksi</th>
                                                    <th>Item</th>
                                                    <th>Jumlah</th>
                                                </tr>
                                                </thead>
                
                
                                                <tbody>
                                                
                                                </tbody>
                                            </table>
                                        </div> 
                                        <div class="tab-pane" id="messages-2" style="display: none;">
                                            <table id="peribadatan" class="table table-striped table-bordered">
                                                <thead>
                                                <tr>
                                                    <th>Aksi</th>
                                                    <th>Item</th>
                                                    <th>Jumlah</th>
                                                </tr>
                                                </thead>
                
                
                                                <tbody>
                                                
                                                </tbody>
                                            </table>
                                        </div> 
                                        <div class="tab-pane" id="settings-2" style="display: none;">
                                            <table id="pendidikan" class="table table-striped table-bordered">
                                                <thead>
                                                <tr>
                                                    <th>Aksi</th>
                                                    <th>Item</th>
                                                    <th>Sewa</th>
                                                    <th>Milik Sendiri</th>
                                                    <th>Jumlah</th>
                                                </tr>
                                                </thead>
                
                
                                                <tbody>
                                                
                                                </tbody>
                                            </table>
                                        </div> 
                                        <div class="tab-pane" id="settings-3" style="display: none;">
                                            <table id="olahraga" class="table table-striped table-bordered">
                                                <thead>
                                                <tr>
                                                    <th>Aksi</th>
                                                    <th>Item</th>
                                                    <th>Jumlah</th>
                                                </tr>
                                                </thead>
                
                
                                                <tbody>
                                                
                                                </tbody>
                                            </table>
                                        </div> 

                                        <div class="tab-pane" id="kesehatan-1" style="display: none;">
                                            <table id="kesehatan" class="table table-striped table-bordered">
                                                <thead>
                                                <tr>
                                                    <th>Aksi</th>
                                                    <th>Item</th>
                                                    <th>Jumlah</th>
                                                </tr>
                                                </thead>
                
                
                                                <tbody>
                                                
                                                </tbody>
                                            </table>
                                        </div>
                                        
                                        <div class="tab-pane" id="irigasi-2" style="display: none;">
                                            <table id="irigasi" class="table table-striped table-bordered">
                                                <thead>
                                                <tr>
                                                    <th>Aksi</th>
                                                    <th>Item</th>
                                                    <th>Jumlah</th>
                                                </tr>
                                                </thead>
                
                
                                                <tbody>
                                                
                                                </tbody>
                                            </table>
                                        </div>

                                        <div class="tab-pane" id="air-2" style="display: none;">
                                            <table id="airbersih" class="table table-striped table-bordered">
                                                <thead>
                                                <tr>
                                                    <th>Aksi</th>
                                                    <th>Item</th>
                                                    <th>Jumlah</th>
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
      $('#transportasi').DataTable({
          responsive : true,
          processing : true,
          serverSide : true,
          ajax : "{{ route('transportasi.table') }}",
          columns: [
            {data:'action', name: 'action'},
            {data:'item', name: 'item'},
            {data:'kondisi_baik', name: 'kondisi_baik'},
            {data:'kondisi_rusak', name: 'kondisi_rusak'},
            {data:'jumlah', name: 'jumlah'}
          ]
      });

      $('#sanitasi').DataTable({
          responsive : true,
          processing : true,
          serverSide : true,
          ajax : "{{ route('sanitasi.table') }}",
          columns: [
            {data:'action', name: 'action'},
            {data:'item', name: 'item'},
            {data:'jumlah', name: 'jumlah'}
          ]
      });

      $('#peribadatan').DataTable({
          responsive : true,
          processing : true,
          serverSide : true,
          ajax : "{{ route('peribadatan.table') }}",
          columns: [
            {data:'action', name: 'action'},
            {data:'item', name: 'item'},
            {data:'jumlah', name: 'jumlah'}
          ]
      });

      $('#pendidikan').DataTable({
          responsive : true,
          processing : true,
          serverSide : true,
          ajax : "{{ route('pendidikan.table') }}",
          columns: [
            {data:'action', name: 'action'},
            {data:'item', name: 'item'},
            {data:'sewa', name: 'sewa'},
            {data:'milik_sendiri', name: 'milik_sendiri'},    
            {data:'jumlah', name: 'jumlah'}
          ]
      });

      $('#olahraga').DataTable({
          responsive : true,
          processing : true,
          serverSide : true,
          ajax : "{{ route('olahraga.table') }}",
          columns: [
            {data:'action', name: 'action'},
            {data:'item', name: 'item'},
            {data:'jumlah', name: 'jumlah'}
          ]
      });

      $('#kesehatan').DataTable({
          responsive : true,
          processing : true,
          serverSide : true,
          ajax : "{{ route('kesehatan.table') }}",
          columns: [
            {data:'action', name: 'action'},
            {data:'item', name: 'item'},
            {data:'jumlah', name: 'jumlah'}
          ]
      });

      $('#irigasi').DataTable({
          responsive : true,
          processing : true,
          serverSide : true,
          ajax : "{{ route('irigasi.table') }}",
          columns: [
            {data:'action', name: 'action'},
            {data:'item', name: 'item'},
            {data:'jumlah', name: 'jumlah'}
          ]
      });

      $('#airbersih').DataTable({
          responsive : true,
          processing : true,
          serverSide : true,
          ajax : "{{ route('airbersih.table') }}",
          columns: [
            {data:'action', name: 'action'},
            {data:'item', name: 'item'},
            {data:'jumlah', name: 'jumlah'}
          ]
      });

  </script>
@endpush

