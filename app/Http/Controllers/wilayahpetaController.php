<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\dusun;
use App\penduduk;
use DataTables;


class wilayahpetaController extends Controller
{

    public function indexpeta(){
        return view('admin.info_desa.peta.index');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        return view('admin.info_desa.wilayah.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $model = new dusun();
        $penduduk = penduduk::all();
        return view('admin.info_desa.wilayah.form', ['model'=>$model, 'penduduk'=>$penduduk]);
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
            'Dusun'=>'required|string|unique:dusun,nama_dusun',
            'Kepala_Dusun'=>'required'
        ]);

        $dusun = new dusun();
        $dusun->nama_dusun = $request->Dusun;
        $dusun->nama_nik = $request->Kepala_Dusun;
  
        $dusun->save();

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $ids = decrypt($id);
        $model = dusun::findOrFail($ids);
        $penduduk = penduduk::all();
        return view('admin.info_desa.wilayah.form', compact('model','penduduk'));
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
            'Dusun'=>'required|string',
            'Kepala_Dusun'=>'required'
        ]);

        $dusun = dusun::where('id',$id)->first();
        $dusun->nama_dusun = $request->Dusun;
        $dusun->nama_nik = $request->Kepala_Dusun;
  
        $dusun->save();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $model = dusun::where('id',decrypt($id))->first();
        $model->delete();
    }

    public function dataTable(){

        $model = dusun::query();

        return DataTables::of($model)->addColumn('action', function($model){
            return view('layouts.action',[
                'model'=> $model,
                'url_edit' => route('wilayah.edit',encrypt($model->id)),
                'url_destroy' => route('wilayah.destroy',encrypt($model->id))
            ]);
        })
        ->addIndexColumn()
        ->rawColumns(['action'])
        ->make(true);
      
    }

}
