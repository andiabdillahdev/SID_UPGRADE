<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\penduduk;
use Yajra\DataTables\DataTables;

class pendudukController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.kependudukan.penduduk.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $model = new penduduk();
        return view('admin.kependudukan.penduduk.form', compact('model'));
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
            'dusun'=>'required|string',
            'alamat_skrng'=>'required',
            'no_kk'=>'required|numeric',
            'nik'=>'required|numeric',
            'nama'=>'required|string',
            'jenis_kelamin'=>'required',
            'hubungan'=>'required',
            'tempat_lahir'=>'required',
            'tgl_lahir'=>'required',
            'status'=>'required',
            'agama'=>'required',
            'golda'=>'required',
            'kewarganegaraan'=>'required'
        ]);

        $model = new penduduk();
        $model->dusun = $request->dusun;
        $model->alamat_skrng = $request->alamat_skrng;
        $model->no_kk = $request->no_kk;
        $model->nik = $request->nik;
        $model->nama = $request->nama;
        $model->jenis_kelamin = $request->jenis_kelamin;
        $model->hubungan = $request->hubungan;
        $model->tempat_lahir = $request->tempat_lahir;
        $model->tgl_lahir = $request->tgl_lahir;
        $model->status = $request->status;  
        $model->agama = $request->agama;
        $model->golda = $request->golda;
        $model->kewarganegaraan = $request->kewarganegaraan;
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
        $model = penduduk::where('id',decrypt($id))->first();
        return view('admin.kependudukan.penduduk.detail', compact('model'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $model = penduduk::where('id',decrypt($id))->first();
        return view('admin.kependudukan.penduduk.form', compact('model'));
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
            'dusun'=>'required|string',
            'alamat_skrng'=>'required',
            'no_kk'=>'required|numeric',
            'nik'=>'required|numeric',
            'nama'=>'required|string',
            'jenis_kelamin'=>'required',
            'hubungan'=>'required',
            'tempat_lahir'=>'required',
            'tgl_lahir'=>'required',
            'status'=>'required',
            'agama'=>'required',
            'golda'=>'required',
            'kewarganegaraan'=>'required'
        ]);

        $model = penduduk::where('id',$id)->first();
        $model->dusun = $request->dusun;
        $model->alamat_skrng = $request->alamat_skrng;
        $model->no_kk = $request->no_kk;
        $model->nik = $request->nik;
        $model->nama = $request->nama;
        $model->jenis_kelamin = $request->jenis_kelamin;
        $model->hubungan = $request->hubungan;
        $model->tempat_lahir = $request->tempat_lahir;
        $model->tgl_lahir = $request->tgl_lahir;
        $model->usia = '';
        $model->status = $request->status;  
        $model->agama = $request->agama;
        $model->golda = $request->golda;
        $model->kewarganegaraan = $request->kewarganegaraan;
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
        $model = penduduk::where('id',decrypt($id))->first();
        $model->delete();
    }

    public function datatables(){
        $model = penduduk::query();

        return DataTables::of($model)->addColumn('action', function($model){
            return view('layouts.actionLarge',[
                'model'=> $model,
                'url_show' => route('penduduk.show',encrypt($model->id)),
                'url_edit' => route('penduduk.edit',encrypt($model->id)),
                'url_destroy' => route('penduduk.destroy',encrypt($model->id))
            ]);
        })
        ->addIndexColumn()
        ->rawColumns(['action'])
        ->make(true);
    }
}
