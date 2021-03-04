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
                <td>Nama SK</td>
                <td>{{ $model->nama_sk }}</td>
            </tr>
            <tr>
                <td>No Keputusan Kades</td>
                <td>{{ $model->nomor_keputusan_kades }}</td>
            </tr>
            <tr>
                <td>Tanggal Keputusan Kades</td>
                <td>{{ $model->tgl_keputusan_kades }}</td>
            </tr>
            <tr>
                <td>Nomor Di Laporkan</td>
                <td>{{ $model->nomor_dilaporkan }}</td>
            </tr>
            <tr>
                <td>Tanggal Di Laporkan</td>
                <td>{{ $model->tgl_dilaporkan }}</td>
            </tr>
            <tr>
                <td>Uraian</td>
                <td>{{ $model->uraian }}</td>
            </tr>
            <tr>
                <td>Keterangan</td>
                <td>{{ $model->keterangan }}</td>
            </tr>
        </tbody>
    </table>
<br><br>
    <div class="row">
        <div class="col-md-12">
            <h3>Dokumentasi SK</h3>
        @if (!is_null($model->file))
        {{-- <iframe src="{{ asset('ubold/filedocMail/skkadesfile/'.$model->file) }}"></iframe> --}}
        <embed src="{{ asset('ubold/filedocMail/skkadesfile/'.$model->file) }}" type="application/pdf" width="100%" height="500px">
        @else
            <p>Tidak Ada Dokumentasi</p>
        @endif
        </div>
    </div>

</div>