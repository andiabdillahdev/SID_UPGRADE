<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\penduduk;
use App\lembaga;
use DataTables;
use Yajra\DataTables\DataTables as DataTablesDataTables;

class lembagaController extends Controller
{
    // BPD
    public function index(){
        return view('admin.info_desa.lembaga.index');
    }

    public function indexBpd(){
        return view('admin.info_desa.lembaga.bpd.index');
    }

    public function indexpkk(){
        return view('admin.info_desa.lembaga.pkk.index');
    }

    public function indexkarangtaruna(){
        return view('admin.info_desa.lembaga.karang.index');
    }

    public function indexbumdes(){
        return view('admin.info_desa.lembaga.bumdes.index');
    }

    public function createBpd(){
        $model = new lembaga();
        $pend = penduduk::all();
        return view('admin.info_desa.lembaga.bpd.form',['model'=>$model,'pend'=>$pend]);
    }

    public function createpkk(){
        $model = new lembaga();
        $pend = penduduk::all();
        return view('admin.info_desa.lembaga.pkk.form',['model'=>$model,'pend'=>$pend]);
    }

    public function createkarangtaruna(){
        $model = new lembaga();
        $pend = penduduk::all();
        return view('admin.info_desa.lembaga.karang.form',['model'=>$model,'pend'=>$pend]);
    }

    public function createbumdes(){
        $model = new lembaga();
        $pend = penduduk::all();
        return view('admin.info_desa.lembaga.bumdes.form',['model'=>$model,'pend'=>$pend]);
    }

    public function store(Request $request){
        $this->validate($request,[
            'nama'=>'required',
            'jabatan'=>'required',
            'file'=>'required|image|mimes:jpeg,png,jpg|max:2048'
        ]);

        $filefoto = $request->file('file');
        $namafile = $filefoto->getClientOriginalName();
        $destinasi = 'ubold/asetImg/fileUpload/fotobpd';
        $filefoto->move($destinasi,$namafile);

        $model = new lembaga();
        $model->nama = $request->nama;
        $model->jabatan = $request->jabatan;
        $model->foto = $namafile;
        $model->role = $request->role;
        $model->save();
    }

    public function edit($params){
        $model = lembaga::where('id',decrypt($params))->first();
        $pend = penduduk::all();
        if ($model->role == 'bpd') {
            return view('admin.info_desa.lembaga.bpd.form',['model'=>$model,'pend'=>$pend]);
        }elseif ($model->role == 'pkk') {
            return view('admin.info_desa.lembaga.pkk.form',['model'=>$model,'pend'=>$pend]);
        }elseif ($model->role == 'karang') {
            return view('admin.info_desa.lembaga.karang.form',['model'=>$model,'pend'=>$pend]);
        }elseif ($model->role == 'bumdes') {
            return view('admin.info_desa.lembaga.bumdes.form',['model'=>$model,'pend'=>$pend]);
        }
    }

    public function update(Request $request,$params){

        $this->validate($request,[
            'nama'=>'required',
            'jabatan'=>'required',
            'file'=>'image|mimes:jpeg,png,jpg|max:2048'
        ]);

       $model = lembaga::where('id',$params)->first();

          $model->nama = $request->nama;
       $model->jabatan = $request->jabatan;
       if (is_null($request->file)) {
        $model->foto = $request->tampungFoto;
       }else {
        $filefoto = $request->file('file');
        $namafile = $filefoto->getClientOriginalName();
        $destinasi = 'ubold/asetImg/fileUpload/fotobpd';
        $filefoto->move($destinasi,$namafile);

        $model->foto = $namafile;

       }
       $model->role = $request->role;
       $model->save();

    }

    public function destroy($params){
        $model = lembaga::where('id',decrypt($params))->first();
        $model->delete();
    }

    public function DatatablesBpd(){
        $model = lembaga::where('role','bpd')->get();

        return DataTables::of($model)->addColumn('action', function($model){
            return view('layouts.action',[
                'model'=> $model,
                'url_edit' => route('lembaga.edit',encrypt($model->id)),
                'url_destroy' => route('lembaga.destroy',encrypt($model->id))
            ]);
        })
        ->addIndexColumn()
        ->rawColumns(['action'])
        ->make(true);
    }

    public function DatatablesPkk(){
        $model = lembaga::where('role','pkk')->get();

        return DataTables::of($model)->addColumn('action', function($model){
            return view('layouts.action',[
                'model'=> $model,
                'url_edit' => route('lembaga.edit',encrypt($model->id)),
                'url_destroy' => route('lembaga.destroy',encrypt($model->id))
            ]);
        })
        ->addIndexColumn()
        ->rawColumns(['action'])
        ->make(true);
    }

    public function Datatableskarangtaruna(){
        $model = lembaga::where('role','karang')->get();

        return DataTables::of($model)->addColumn('action', function($model){
            return view('layouts.action',[
                'model'=> $model,
                'url_edit' => route('lembaga.edit',encrypt($model->id)),
                'url_destroy' => route('lembaga.destroy',encrypt($model->id))
            ]);
        })
        ->addIndexColumn()
        ->rawColumns(['action'])
        ->make(true);
    }

    public function Datatablesbumdes(){
        $model = lembaga::where('role','bumdes')->get();

        return DataTables::of($model)->addColumn('action', function($model){
            return view('layouts.action',[
                'model'=> $model,
                'url_edit' => route('lembaga.edit',encrypt($model->id)),
                'url_destroy' => route('lembaga.destroy',encrypt($model->id))
            ]);
        })
        ->addIndexColumn()
        ->rawColumns(['action'])
        ->make(true);
    }

 

}
