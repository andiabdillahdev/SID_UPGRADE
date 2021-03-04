<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\suratkeluar;
use Yajra\DataTables\DataTables;

class suratkeluarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.kesekretariatan.suratkeluar.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $model = new suratkeluar();
        return view('admin.kesekretariatan.suratkeluar.form',compact('model'));
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
            'nomor_surat'=>'required',
            'tanggal_surat'=>'required',
            'ditujukan'=>'required',
            'perihal'=>'required',
            'file'=>'mimes:jpeg,png,jpg|max:2048'
        ]);

        if (!is_null($request->file)) {
            $file = $request->file('file');
            $namafile = $file->getClientOriginalName();
            $destinasi = 'ubold/filedocMail/suratkeluar';
            $file->move($destinasi, $namafile);
          }

          $model = new suratkeluar();
          $model->tahun = date('Y');
          $model->kode_surat = $request->kode_surat;
          $model->nomor_surat = $request->nomor_surat;
          $model->tanggal_surat = $request->tanggal_surat;
          $model->ditujukan = $request->ditujukan;
          $model->perihal = $request->perihal;
          if (!is_null($request->file)) {
              $model->file = $namafile;
          } else {
              $model->file = null;
          }

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
        $model = suratkeluar::where('id',decrypt($id))->first();
        return view('admin.kesekretariatan.suratkeluar.detail',compact('model'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $model = suratkeluar::where('id',decrypt($id))->first();
        return view('admin.kesekretariatan.suratkeluar.form',compact('model'));
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
            'nomor_surat'=>'required',
            'tanggal_surat'=>'required',
            'ditujukan'=>'required',
            'perihal'=>'required',
            'file'=>'mimes:jpeg,png,jpg|max:2048'
        ]);

        if (!is_null($request->file)) {
            $file = $request->file('file');
            $namafile = $file->getClientOriginalName();
            $destinasi = 'ubold/filedocMail/suratkeluar';
            $file->move($destinasi, $namafile);
          }

          $model = suratkeluar::where('id',$id)->first();
          $model->tahun = date('Y');
          $model->kode_surat = $request->kode_surat;
          $model->nomor_surat = $request->nomor_surat;
          $model->tanggal_surat = $request->tanggal_surat;
          $model->ditujukan = $request->ditujukan;
          $model->perihal = $request->perihal;
          if (!is_null($request->file)) {
              $model->file = $namafile;
          } else {
              $model->file = $request->tampungFile;
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
        $model = suratkeluar::where('id',decrypt($id))->first();
        $model->delete();
    }

    public function datatables(){
        $model = suratkeluar::query();

        return DataTables::of($model)->addColumn('action', function($model){
            return view('layouts.actionmodalwithdetail',[
                'model'=> $model,
                'url_show' => route('suratkeluar.show',encrypt($model->id)),
                'url_edit' => route('suratkeluar.edit',encrypt($model->id)),
                'url_destroy' => route('suratkeluar.destroy',encrypt($model->id))
            ]);
        })
        ->addIndexColumn()
        ->rawColumns(['action'])
        ->make(true);
    }

}
