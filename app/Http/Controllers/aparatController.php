<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\penduduk;
use App\aparat;
use phpDocumentor\Reflection\Types\Null_;
use Yajra\DataTables\Facades\DataTables;

class aparatController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.info_desa.aparat.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $aparat = new aparat();
        $pend =  penduduk::all();
        return view('admin.info_desa.aparat.form', compact('pend','aparat'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

            $this->validate($request,[
                'nama' => 'required',
                'nik' => 'unique:aparat,nik',
                'jabatan' => 'required|string',
                'foto' => 'required|image|mimes:jpeg,png,jpg|max:2048'
            ]);

            $fotoAparat = $request->file('foto');
            $namaFile = $fotoAparat->getClientOriginalName();
            $destinasi = 'ubold/asetImg/fileUpload/fotoAparat';
            $fotoAparat->move($destinasi,$namaFile);

            $model = new aparat();
            $model->nama = $request->nama;
            $model->nik = $request->nik;
            $model->nomor_induk_pegawai = $request->nomor_induk_pegawai;
            $model->tempat_lahir = $request->tempat_lahir;
            $model->tanggal_lahir = $request->tanggal_lahir;
            $model->jenis_kelamin = $request->jenis_kelamin;
            $model->pendidikan = $request->pendidikan;
            $model->agama = $request->agama;
            $model->pangkat = $request->pangkat;
            $model->sk_pengangkatan = $request->sk_pengangkatan;
            $model->tgl_sk_pengangkatan = $request->tgl_sk_pengangkatan;
            $model->nomor_sk_pemberhentian = $request->nomor_sk_pemberhentian;
            $model->tgl_sk_pemberhentian = $request->tgl_sk_pemberhentian;
            $model->masa_jabatan = $request->masa_jabatan;
            $model->jabatan = $request->jabatan;
            $model->gambar = $namaFile;

            $model->save();
            
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $model = aparat::where('id',decrypt($id))->first();
        return view('admin.info_desa.aparat.show', compact('model'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $aparat = aparat::where('id',decrypt($id))->first();
        $pend =  penduduk::all();
        return view('admin.info_desa.aparat.form', compact('pend','aparat'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request,[
            'nama' => 'required',
            'jabatan' => 'required|string',
            'foto' => 'image|mimes:jpeg,png,jpg|max:2048'
        ]);

 

        $model =  aparat::where('id',$id)->first();
        $model->nama = $request->nama;
        $model->nik = $request->nik;
        $model->nomor_induk_pegawai = $request->nomor_induk_pegawai;
        $model->tempat_lahir = $request->tempat_lahir;
        $model->tanggal_lahir = $request->tanggal_lahir;
        $model->jenis_kelamin = $request->jenis_kelamin;
        $model->pendidikan = $request->pendidikan;
        $model->agama = $request->agama;
        $model->pangkat = $request->pangkat;
        $model->sk_pengangkatan = $request->sk_pengangkatan;
        $model->tgl_sk_pengangkatan = $request->tgl_sk_pengangkatan;
        $model->nomor_sk_pemberhentian = $request->nomor_sk_pemberhentian;
        $model->tgl_sk_pemberhentian = $request->tgl_sk_pemberhentian;
        $model->masa_jabatan = $request->masa_jabatan;
        $model->jabatan = $request->jabatan;

        if (is_null($request->foto)) {
            $model->gambar = $request->tampungFoto;
        } else {
            $fotoAparat = $request->file('foto');
            $namaFile = $fotoAparat->getClientOriginalName();
            $destinasi = 'ubold/asetImg/fileUpload/fotoAparat';
            $fotoAparat->move($destinasi,$namaFile);

            $model->gambar = $namaFile;
        }

    

        $model->save();

            
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $model = aparat::where('id',decrypt($id))->first();
        $model->delete();
    }

    public function tampungAparat(Request $request){
        $nik = $request->nama_nik;
        $item = penduduk::where('nik',$nik)->first();

        return response()->json($item);
  
    }

    public function dataTable(){
        $model = aparat::query();

        return DataTables::of($model)->addColumn('action', function($model){
            return view('admin.info_desa.aparat.actionAparat',[
                'url_show'=> route('aparat.show',encrypt($model->id)),
                'url_edit'=> route('aparat.edit',encrypt($model->id)),
                'url_destroy'=> route('aparat.destroy',encrypt($model->id))
            ]);
        })
        ->addIndexColumn()
        ->rawColumns(['action'])
        ->make(true);

    }

}
