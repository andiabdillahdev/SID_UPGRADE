{!! Form::model($model, [
    'route'=> $model->exists ? ['penduduk.update',$model->id] : 'penduduk.store',
    'method'=> $model->exists ? 'PUT' : 'POST',
    'id'=>'formPend',
    'role'=>'form'
]) !!}

<div class="container">

    <div class="row">
       <div class="col-md-6">
        <div class="form-group">
            <label for="no_kk">Nomor Kartu keluarga</label>
            {!! Form::text('no_kk',null, ['class'=>'form-control','placeholder'=>'Masukkan No KK','id'=>'no_kk']) !!}
        </div>
       </div>
       <div class="col-md-6">
        <div class="form-group">
            <label for="nik">Nomor Induk Kependudukan</label>
            {!! Form::text('nik',null, ['class'=>'form-control','placeholder'=>'Masukkan NIK','id'=>'nik']) !!}
        </div>
       </div>
    </div>

    <div class="row">
        <div class="col-md-4">
         <div class="form-group">
             <label for="nama">Nama</label>
             {!! Form::text('nama',null, ['class'=>'form-control','placeholder'=>'Masukkan Nama','id'=>'nama']) !!}
         </div>
        </div>
        <div class="col-md-4">
         <div class="form-group">
             <label for="dusun">Dusun</label>
             {!! Form::text('dusun',null, ['class'=>'form-control','placeholder'=>'Masukkan Dusun','id'=>'dusun']) !!}
         </div>
        </div>
        <div class="col-md-4">
            <div class="form-group">
                <label for="alamat_skrng">Alamat Sekarang</label>
                {!! Form::text('alamat_skrng',null, ['class'=>'form-control','placeholder'=>'Masukkan Alamat Sekarang','id'=>'alamat_skrng']) !!}
            </div>
           </div>
     </div>

     <div class="row">
        <div class="col-md-4">
         <div class="form-group">
             <label for="jenis_kelamin">Jenis Kelamin</label>
             {!! Form::select('jenis_kelamin', ['LAKI-LAKI' => 'LAKI-LAKI', 'PEREMPUAN' => 'PEREMPUAN'], null, ['placeholder' => 'Pilih','class'=>'form-control','id'=>'jk']); !!}
         </div>
        </div>
        <div class="col-md-4">
         <div class="form-group">
             <label for="hubungan">Hubungan Keluarga dalam KK</label>
             {!! Form::text('hubungan',null, ['class'=>'form-control','placeholder'=>'Masukkan Hubungan Keluarga dalam KK','id'=>'hubungan']) !!}
         </div>
        </div>
        <div class="col-md-4">
            <div class="form-group">
                <label for="tempat_lahir">Tempat Lahir</label>
                {!! Form::text('tempat_lahir',null, ['class'=>'form-control','placeholder'=>'Masukkan Alamat Sekarang','id'=>'tempat_lahir']) !!}
            </div>
           </div>
     </div>

     <div class="row">
        <div class="col-md-4">
         <div class="form-group">
             <label for="tgl_lahir">Tanggal Lahir</label>
             {!! Form::date('tgl_lahir',null, ['class'=>'form-control','id'=>'tgl_lahir']) !!}
         </div>
        </div>

        <div class="col-md-4">
            <div class="form-group">
                <label for="agama">Agama</label>
                {!! Form::text('agama',null, ['class'=>'form-control','placeholder'=>'Masukkan Agama','id'=>'agama']) !!}
            </div>
           </div>
    
        <div class="col-md-4">
            <div class="form-group">
                <label for="status">Status</label>
                {!! Form::select('status', ['Kawin' => 'Kawin', 'Belum Kawin' => 'Belum Kawin', 'Janda/Duda' => 'Janda/Duda'], null, ['placeholder' => 'Pilih','class'=>'form-control','id'=>'jk']); !!}
            </div>
           </div>
     </div>

     <div class="row">
        <div class="col-md-6">
         <div class="form-group">
             <label for="golda">Golongan Darah</label>
             {!! Form::select('golda', ['A' => 'A', 'B' => 'B','AB' => 'AB', 'O' => 'O', 'Tidak Tahu' => 'Tidak Tahu'], null, ['placeholder' => 'Pilih','class'=>'form-control','id'=>'golda']); !!}
         </div>
        </div>
        <div class="col-md-6">
         <div class="form-group">
             <label for="kewarganegaraan">Kewarganegaraan</label>
             {!! Form::select('kewarganegaraan', ['Warga Negara Indonesia' => 'Warga Negara Indonesia', 'Warga Negara Asing' => 'Warga Negara Asing'], null, ['placeholder' => 'Pilih','class'=>'form-control','id'=>'kewarganegaraan']); !!}
         </div>
        </div>
     </div>

</div>

{!! Form::close() !!}

<div class="container">
    <div class="row">
        <div class="col-sm-8">
            <div class="alert alert-danger print-error-msg" style="display:none">
                <strong>Perhatian !!!</strong>
                <ul></ul>
            </div>
        </div>
    </div>
   </div>