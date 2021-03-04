<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;
use Illuminate\Support\Str;
use App\berita;

class beritaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.kabardesa.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $model = new berita();
        return view('admin.kabardesa.form',compact('model'));
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
            'judul'=>'required',
            'file'=>'required|image|mimes:jpeg,png,jpg|max:2048',
            'kategori'=>'required',
            'konten'=>'required'
        ]);

        $file = $request->file('file');
        $namafile = $file->getClientOriginalName();
        $destinasi = 'ubold/asetImg/fileUpload/fileberita';
        $file->move($destinasi,$namafile);

        $model = new berita();
        $model->judul = $request->judul;
        $model->sumber_gambar = $request->sumber_gambar;
        $model->konten = $request->konten;
        $model->kategori = $request->kategori;
        $model->file = $namafile;
        $model->slug = Str::slug($request->judul);
        $model->tanggal = date('d-m-Y');
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
        $model = berita::where('id',decrypt($id))->first();
        return view('admin.kabardesa.detail',compact('model'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $model = berita::where('id',decrypt($id))->first();
        return view('admin.kabardesa.form',compact('model'));
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
            'judul'=>'required',
            'file'=>'image|mimes:jpeg,png,jpg|max:2048',
            'kategori'=>'required',
            'konten'=>'required'
        ]);

       if (!is_null($request->file)) {
        $file = $request->file('file');
        $namafile = $file->getClientOriginalName();
        $destinasi = 'ubold/asetImg/fileUpload/fileberita';
        $file->move($destinasi,$namafile);
       }

        $model = berita::where('id',$id)->first();
        $model->judul = $request->judul;
        $model->sumber_gambar = $request->sumber_gambar;
        $model->konten = $request->konten;
        $model->kategori = $request->kategori;
       if (!is_null($request->file)) {
        $model->file = $namafile;
       }else {
           $model->file = $request->tampungFile;
       }
        $model->slug = Str::slug($request->judul);
        $model->tanggal = date('d-m-Y');
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
        $model = berita::where('id',decrypt($id))->first();
        $model->delete();
    }

    public function datatable(){
        $model = berita::query();

        return DataTables::of($model)->addColumn('action', function($model){
            return view('layouts.actionberita',[
                'model'=> $model,
                'url_show' => route('kabardesa.show',encrypt($model->id)),
                'url_edit' => route('kabardesa.edit',encrypt($model->id)),
                'url_destroy' => route('kabardesa.destroy',encrypt($model->id))
            ]);
        })
        ->addIndexColumn()
        ->rawColumns(['action'])
        ->make(true);
    }

}
