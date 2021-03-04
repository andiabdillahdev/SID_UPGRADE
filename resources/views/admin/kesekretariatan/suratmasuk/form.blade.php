{!! Form::model($model, [
    'route'=> $model->exists ? ['suratmasuk.update',$model->id] : 'suratmasuk.store',
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
        <label class="col-md-3 control-label">Kode Surat</label>
        <div class="col-md-9">
            {!! Form::text('kode_surat','-', ['class'=>'form-control','placeholder'=>'Masukkan Kode Surat','id'=>'kode_surat']) !!}
        </div>
    </div>

    <div class="form-group">
        <label class="col-md-3 control-label">Nomor Surat <span style="color:red">*</span> </label>
        <div class="col-md-9">
            {!! Form::text('nomor_surat',null, ['class'=>'form-control','placeholder'=>'Masukkan Nomor Surat','id'=>'nomor_surat']) !!}
        </div>
    </div>

    <div class="form-group">
        <label class="col-md-3 control-label">Tanggal Surat <span style="color:red">*</span> </label>
        <div class="col-md-9">
            {!! Form::date('tanggal_surat',null, ['class'=>'form-control','id'=>'tanggal_surat']) !!}
        </div>
    </div>

    <div class="form-group">
        <label class="col-md-3 control-label">Pengirim <span style="color:red">*</span> </label>
        <div class="col-md-9">
            {!! Form::text('pengirim',null, ['class'=>'form-control','placeholder'=>'Masukkan Pengirim','id'=>'pengirim']) !!}
        </div>
    </div>

    <div class="form-group">
        <label class="col-md-3 control-label">Perihal <span style="color:red">*</span> </label>
        <div class="col-md-9">
            {!! Form::text('perihal',null, ['class'=>'form-control','placeholder'=>'Masukkan Perihal','id'=>'perihal']) !!}
        </div>
    </div>

    <div class="form-group">
        <label class="col-md-3 control-label">Dokumentasi</label>
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