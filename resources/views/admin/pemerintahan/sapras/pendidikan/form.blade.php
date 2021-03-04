{!! Form::model($model, [
    'route'=>  ['pendidikan.update',$model->id],
    'method'=>  'PUT' ,
    'id'=>'formPend',
    // 'class'=>'form-horizontal',
    'role'=>'form'
]) !!}

<div class="container">
 
    <table class="table m-0">
         <tbody>
            <tr>
                <th> {{ $model->item }} </th>
                <td>
                    {!! Form::text('sewa',null, ['class'=>'form-control','placeholder'=>'Masukkan Nomor Surat','id'=>'sewa']) !!}
                </td>
                <td>
                    {!! Form::text('milik_sendiri',null, ['class'=>'form-control','placeholder'=>'Masukkan Nomor Surat','id'=>'milik_sendiri']) !!}
                </td>
            </tr>
         </tbody>
    </table>

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