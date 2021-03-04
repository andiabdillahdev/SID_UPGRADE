<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\potensi;
use DataTables;
use Yajra\DataTables\DataTables as DataTablesDataTables;

class potensiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.info_desa.potensi.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $model = new potensi();
        return view('admin.info_desa.potensi.form',compact('model'));
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
            'file' => 'required|mimes:pdf|max:2048'
            ]);

            $file = $request->file('file');
            $filename = $file->getClientOriginalName();
            $destinasi = 'ubold/asetImg/fileUpload/filepotensi';
            $file->move($destinasi,$filename);

            $model = new potensi();
            $model->nama = $request->nama;
            $model->file = $filename;
            $model->tahun = date('Y');
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
        $model = potensi::where('id',decrypt($id))->first();
        return view('admin.info_desa.potensi.form',compact('model'));
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
            'file' => 'mimes:pdf|max:2048'
            ]);

            if (!is_null($request->file)) {
                $file = $request->file('file');
                $filename = $file->getClientOriginalName();
                $destinasi = 'ubold/asetImg/fileUpload/filepotensi';
                $file->move($destinasi,$filename);
            }

            $model = potensi::where('id',$id)->first();
            $model->nama = $request->nama;
            if (!is_null($request->file)) {
                $model->file = $filename;
            }else {
                $model->file = $request->tampungFile;
            }
            $model->tahun = date('Y');
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
        $model = potensi::where('id',decrypt($id))->first();
        $model->delete();
    }

    public function dataTable(){
        $model = potensi::query();

        return DataTables::of($model)->addColumn('action', function($model){
            return view('layouts.actionmodal',[
                'model'=> $model,
                'url_edit' => route('potensi.edit',encrypt($model->id)),
                'url_destroy' => route('potensi.destroy',encrypt($model->id))
            ]);
        })
        ->addIndexColumn()
        ->rawColumns(['action'])
        ->make(true);
    }

}
