{!! Form::model($model, [
    'route'=> $model->exists ? ['potensi.update',$model->id] : 'potensi.store',
    'method'=> $model->exists ? 'PUT' : 'POST',
    'class' => 'form-horizontal',
    'role'=>'form'
]) !!}

<div class="form-group">
    <label for="label" class="col-sm-3 control-label">Label</label>
    <div class="col-sm-7">
        {!! Form::text('nama',null, ['class'=>'form-control','placeholder'=>'Masukkan label dokumen','id'=>'label']) !!}
    </div>
</div>

<div class="form-group">
    <label for="label" class="col-sm-3 control-label">File Potensi Desa</label>
    <div class="col-sm-7">
        <input type="file" class="form-control" name="file">
        @if ($model->exists)
        <p class="text-info">
            <i class="fa fa-file-pdf-o"></i><small> {{$model->file}}</small>
        </p>
        <input type="hidden" name="tampungFile" value="{{$model->file}}">
        @endif
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