<div class="p-20">
    <table class="table table-striped m-0">
        <thead>
            <tr>
                <th>Item</th>
                <th>Keterangan</th>
            </tr>
        </thead>
        <tbody>
           <tr>
                <td>Kode Surat</td>
                <td>{{ $model->kode_surat }}</td>
            </tr>
            <tr>
                <td>Nomor Surat</td>
                <td>{{ $model->nomor_surat }}</td>
            </tr>
            <tr>
                <td>Tanggal Surat</td>
                <td>{{ $model->tanggal_surat }}</td>
            </tr>
            <tr>
                <td>Di Tujukan</td>
                <td>{{ $model->ditujukan }}</td>
            </tr>
            <tr>
                <td>Perihal</td>
                <td>{{ $model->perihal }}</td>
            </tr>
        </tbody>
    </table>
<br><br>
    <div class="row">
        <div class="col-md-12">
            <h3>Dokumentasi Surat</h3>
        @if (!is_null($model->file))
        <img src="{{ asset('ubold/filedocMail/suratkeluar/'.$model->file) }}" class="img-thumbnail">
        @else
            <p>Tidak Ada Dokumentasi</p>
        @endif
        </div>
    </div>

</div>