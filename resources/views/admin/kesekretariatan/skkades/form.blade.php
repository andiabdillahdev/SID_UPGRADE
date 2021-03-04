{!! Form::model($model, [
    'route'=> $model->exists ? ['skkades.update',$model->id] : 'skkades.store',
    'method'=> $model->exists ? 'PUT' : 'POST',
    'id'=>'formPend',
    'class'=>'form-horizontal',
    'role'=>'form'
]) !!}

<div class="container">

    <div class="row">
        <div class="panel panel-color panel-warning">
            <div class="panel-heading">
                <h3 class="panel-title">Note <i class="fa fa-warning"></i></h3>
            </div>
            <div class="panel-body">
                <p> <span style="color: red">*</span> Wajib di Isi </p>
            </div>
        </div>
    </div>

    <div class="form-group">
        <label class="col-md-3 control-label">Nama SK <span style="color:red">*</span></label>
        <div class="col-md-9">
            {!! Form::text('nama_sk',null, ['class'=>'form-control','placeholder'=>'Masukkan Nama SK','id'=>'nama_sk']) !!}
        </div>
    </div>

    <div class="form-group">
        <label class="col-md-3 control-label">No Keputusan Kades <span style="color:red">*</span> </label>
        <div class="col-md-9">
            {!! Form::text('nomor_keputusan_kades',null, ['class'=>'form-control','placeholder'=>'Masukkan Nomor Keputusan Kades','id'=>'nomor_keputusan_kades']) !!}
        </div>
    </div>

    <div class="form-group">
        <label class="col-md-3 control-label">Tanggal Keputusan Kades <span style="color:red">*</span> </label>
        <div class="col-md-9">
            {!! Form::date('tgl_keputusan_kades',null, ['class'=>'form-control','id'=>'tgl_keputusan_kades']) !!}
        </div>
    </div>

    <div class="form-group">
        <label class="col-md-3 control-label">Nomor Di laporkan  </label>
        <div class="col-md-9">
            {!! Form::text('nomor_dilaporkan',null, ['class'=>'form-control','placeholder'=>'Masukkan Tujuan Surat','id'=>'nomor_dilaporkan']) !!}
        </div>
    </div>

    <div class="form-group">
        <label class="col-md-3 control-label">Tanggal Di laporkan  </label>
        <div class="col-md-9">
            {!! Form::date('tgl_dilaporkan',null, ['class'=>'form-control','id'=>'tgl_dilaporkan']) !!}
        </div>
    </div>

    <div class="form-group">
        <label class="col-md-3 control-label">Uraian</label>
        <div class="col-md-9">
            {!! Form::text('uraian',null, ['class'=>'form-control','placeholder'=>'Masukkan Nama SK','id'=>'uraian']) !!}
        </div>
    </div>

    <div class="form-group">
        <label class="col-md-3 control-label">Keterangan  </label>
        <div class="col-md-9">
            {!! Form::text('keterangan',null, ['class'=>'form-control','placeholder'=>'Masukkan Keterangan','id'=>'keterangan']) !!}
        </div>
    </div>

    <div class="form-group">
        <label class="col-md-3 control-label">Upload File <span style="color:red">*</span></label>
        <div class="col-md-9">
            {!! Form::file('file',null, ['class'=>'form-control','id'=>'file']) !!}
            @if ($model->exists)
                <p class="text-info"> <small><i class="fa fa-file-archive-o"></i> {{ $model->file }} </small> </p>
        <input type="hidden" name="tampungFile" value="{{ $model->file }}">
            @endif
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