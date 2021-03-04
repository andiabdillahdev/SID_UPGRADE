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
                <td>Nomor Kartu keluarga</td>
                <td> {{$model->no_kk}} </td>
            </tr>
            <tr>
                <td>Nomor Induk Kependudukan</td>
                <td> {{$model->nik}} </td>
            </tr>
            <tr>
                <td>Nama</td>
                <td> {{$model->nama}} </td>
            </tr>
            <tr>
                <td>Dusun</td>
                <td> {{$model->dusun}} </td>
            </tr>
            <tr>
                <td>Alamat Sekarang</td>
                <td> {{$model->alamat_skrng}} </td>
            </tr>
            <tr>
                <td>Jenis Kelamin</td>
                <td> {{$model->jenis_kelamin}} </td>
            </tr>
            <tr>
                <td>Hubungan Keluarga dalam KK</td>
                <td> {{$model->hubungan}} </td>
            </tr>
            <tr>
                <td>Tempat Lahir</td>
                <td> {{$model->tempat_lahir}} </td>
            </tr>
            <tr>
                <td>Tanggal Lahir</td>
                <td> {{$model->tgl_lahir}} </td>
            </tr>
            <tr>
                <td>Agama</td>
                <td> {{$model->agama}} </td>
            </tr>
            <tr>
                <td>Status</td>
                <td> {{$model->status}}</td>
            </tr>
            <tr>
                <td>Golongan Darah</td>
                <td> {{$model->golda}} </td>
            </tr>
            <tr>
                <td>Kewarganegaraan</td>
                <td> {{$model->kewarganegaraan}} </td>
            </tr>
        </tbody>
    </table>
</div>