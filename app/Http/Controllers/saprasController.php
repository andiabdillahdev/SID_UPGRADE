<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;
use App\transportasi;
use App\sanitasi;
use App\peribadatan;
use App\pendidikan;
use App\olahraga;
use App\kesehatan;
use App\irigasi;
use App\airbersih;
class saprasController extends Controller
{
    public function index(){
        return view('admin.pemerintahan.sapras.index');
    }

    public function editTrans($params){
        $model = transportasi::where('id',decrypt($params))->first();
        return view('admin.pemerintahan.sapras.transportasi.form',compact('model'));
    }

    public function editSanitasi($params){
        $model = sanitasi::where('id',decrypt($params))->first();
        return view('admin.pemerintahan.sapras.sanitasi.form',compact('model'));
    }

    public function editPeribadatan($params){
        $model = peribadatan::where('id',decrypt($params))->first();
        return view('admin.pemerintahan.sapras.peribadatan.form',compact('model'));
    }

    public function editPendidikan($params){
        $model = pendidikan::where('id',decrypt($params))->first();
        return view('admin.pemerintahan.sapras.pendidikan.form',compact('model'));
    } 

    public function editOlahraga($params){
        $model = olahraga::where('id',decrypt($params))->first();
        return view('admin.pemerintahan.sapras.olahraga.form',compact('model'));
    }

    public function editKesehatan($params){
        $model = kesehatan::where('id',decrypt($params))->first();
        return view('admin.pemerintahan.sapras.kesehatan.form',compact('model'));
    }

    public function editIrigasi($params){
        $model = irigasi::where('id',decrypt($params))->first();
        return view('admin.pemerintahan.sapras.irigasi.form',compact('model'));
    }

    public function editAirbersih($params){
        $model = airbersih::where('id',decrypt($params))->first();
        return view('admin.pemerintahan.sapras.airbersih.form',compact('model'));
    }

    // UPDATE

    public function updateAirbersih(Request $request,$params){
        $model = airbersih::where('id',$params)->update(array(
            'jumlah'=>$request->jumlah
        ));
    }

    public function updateIrigasi(Request $request,$params){
        $model = irigasi::where('id',$params)->update(array(
            'jumlah'=>$request->jumlah
        ));
    }

    public function updateKesehatan(Request $request, $params){
        $model = kesehatan::where('id',$params)->update(array(
            'jumlah'=>$request->jumlah
        ));
    }

    public function updatePeribadatan(Request $request, $params){
        $model = peribadatan::where('id',$params)->update(array(
            'jumlah'=>$request->jumlah
        ));
    }

    public function updateTrans(Request $request, $params){
        $model = transportasi::where('id',$params)->update(array(
            'kondisi_baik'=>$request->kondisi_baik,
            'kondisi_rusak'=>$request->kondisi_rusak,
            'jumlah'=>$request->kondisi_baik + $request->kondisi_rusak
        ));
    }

    public function updateSanitasi(Request $request, $params){
        $model = sanitasi::where('id',$params)->update(array(
            'jumlah'=>$request->jumlah
        ));
    }

    public function updatePendidikan(Request $request, $params){
        $model = pendidikan::where('id',$params)->update(array(
            'sewa'=>$request->sewa,
            'milik_sendiri'=>$request->milik_sendiri,
            'jumlah'=>$request->sewa + $request->milik_sendiri
        ));
    }

    public function updateOlahraga(Request $request, $params){
        $model = olahraga::where('id',$params)->update(array(
            'jumlah'=>$request->jumlah
        ));
    }

    // Datatable

    public function datatableTransportasi(){
        $model = transportasi::query();

        return DataTables::of($model)->addColumn('action', function($model){
            return view('layouts.actionedit',[
                'model'=> $model,
                'url_edit' => route('transportasi.edit',encrypt($model->id))
            ]);
        })
        ->addIndexColumn()
        ->rawColumns(['action'])
        ->make(true);
    }

    public function datatablesanitasi(){
        $model = sanitasi::query();

        return DataTables::of($model)->addColumn('action', function($model){
            return view('layouts.actionedit',[
                'model'=> $model,
                'url_edit' => route('sanitasi.edit',encrypt($model->id))
            ]);
        })
        ->addIndexColumn()
        ->rawColumns(['action'])
        ->make(true);
    }

    public function datatableperibadatan(){
        $model = peribadatan::query();

        return DataTables::of($model)->addColumn('action', function($model){
            return view('layouts.actionedit',[
                'model'=> $model,
                'url_edit' => route('peribadatan.edit',encrypt($model->id))
            ]);
        })
        ->addIndexColumn()
        ->rawColumns(['action'])
        ->make(true);
    }

    public function datatablependidikan(){
        $model = pendidikan::query();

        return DataTables::of($model)->addColumn('action', function($model){
            return view('layouts.actionedit',[
                'model'=> $model,
                'url_edit' => route('pendidikan.edit',encrypt($model->id))
            ]);
        })
        ->addIndexColumn()
        ->rawColumns(['action'])
        ->make(true);
    }

    public function datatableolahraga(){
        $model = olahraga::query();

        return DataTables::of($model)->addColumn('action', function($model){
            return view('layouts.actionedit',[
                'model'=> $model,
                'url_edit' => route('olahraga.edit',encrypt($model->id))
            ]);
        })
        ->addIndexColumn()
        ->rawColumns(['action'])
        ->make(true);
    }

    public function datatablekesehatan(){
        $model = kesehatan::query();

        return DataTables::of($model)->addColumn('action', function($model){
            return view('layouts.actionedit',[
                'model'=> $model,
                'url_edit' => route('kesehatan.edit',encrypt($model->id))
            ]);
        })
        ->addIndexColumn()
        ->rawColumns(['action'])
        ->make(true);
    }

    public function datatableirigasi(){
        $model = irigasi::query();

        return DataTables::of($model)->addColumn('action', function($model){
            return view('layouts.actionedit',[
                'model'=> $model,
                'url_edit' => route('irigasi.edit',encrypt($model->id))
            ]);
        })
        ->addIndexColumn()
        ->rawColumns(['action'])
        ->make(true);
    }

    public function datatableairbersih(){
        $model = airbersih::query();

        return DataTables::of($model)->addColumn('action', function($model){
            return view('layouts.actionedit',[
                'model'=> $model,
                'url_edit' => route('airbersih.edit',encrypt($model->id))
            ]);
        })
        ->addIndexColumn()
        ->rawColumns(['action'])
        ->make(true);
    }

}
