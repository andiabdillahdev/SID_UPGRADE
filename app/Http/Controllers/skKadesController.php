<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\skKades;
use Yajra\DataTables\DataTables;

class skKadesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.kesekretariatan.skkades.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $model = new skKades();
        return view('admin.kesekretariatan.skkades.form', compact('model'));
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
            'nama_sk'=>'required',
            'file'=>'required|mimes:pdf|max:3048',
            'nomor_keputusan_kades'=>'required',
            'tgl_keputusan_kades'=>'required'
            ]);

            $file = $request->file('file');
            $namafile = $file->getClientOriginalName();
            $destinasi = 'ubold/filedocMail/skkadesfile';
            $file->move($destinasi,$namafile);

            $model = new skKades();
            $model->tahun = date('Y');
            $model->nama_sk = $request->nama_sk;
            $model->uraian = $request->uraian;
            $model->nomor_keputusan_kades = $request->nomor_keputusan_kades;
            $model->tgl_keputusan_kades = $request->tgl_keputusan_kades;
            $model->nomor_dilaporkan = $request->nomor_dilaporkan;
            $model->tgl_dilaporkan = $request->tgl_dilaporkan;
            $model->keterangan = $request->keterangan;
            $model->file = $namafile;
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
        $model = skKades::where('id',decrypt($id))->first();
        return view('admin.kesekretariatan.skkades.detail', compact('model'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $model = skKades::where('id',decrypt($id))->first();
        return view('admin.kesekretariatan.skkades.form', compact('model'));
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
            'nama_sk'=>'required',
            'file'=>'mimes:pdf|max:3048',
            'nomor_keputusan_kades'=>'required',
            'tgl_keputusan_kades'=>'required'
            ]);

           if (!is_null($request->file)) {
            $file = $request->file('file');
            $namafile = $file->getClientOriginalName();
            $destinasi = 'ubold/filedocMail/skkadesfile';
            $file->move($destinasi,$namafile);
           }

            $model = skKades::where('id',$id)->first();
            $model->tahun = date('Y');
            $model->nama_sk = $request->nama_sk;
            $model->uraian = $request->uraian;
            $model->nomor_keputusan_kades = $request->nomor_keputusan_kades;
            $model->tgl_keputusan_kades = $request->tgl_keputusan_kades;
            $model->nomor_dilaporkan = $request->nomor_dilaporkan;
            $model->tgl_dilaporkan = $request->tgl_dilaporkan;
            $model->keterangan = $request->keterangan;
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
        $model = skKades::where('id',decrypt($id))->first();
        $model->delete();
    }

    public function datatables(){
        $model = skKades::query();

        return DataTables::of($model)->addColumn('action', function($model){
            return view('layouts.actionmodalwithdetail',[
                'model'=> $model,
                'url_show' => route('skkades.show',encrypt($model->id)),
                'url_edit' => route('skkades.edit',encrypt($model->id)),
                'url_destroy' => route('skkades.destroy',encrypt($model->id))
            ]);
        })
        ->addIndexColumn()
        ->rawColumns(['action'])
        ->make(true);
    }

}
