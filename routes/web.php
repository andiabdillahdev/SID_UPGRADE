<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/','');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::resource('/sid/wilayah', 'wilayahpetaController');
Route::get('/sid/peta', 'wilayahpetaController@indexpeta')->name('info.peta');
Route::get('/table/dusun','wilayahpetaController@dataTable')->name('table.dusun');

// Route::resource('/sid/aparat', 'aparatController');
Route::get('/sid/aparat','aparatController@index')->name('aparat.index');
Route::post('/sid/aparat/store','aparatController@store')->name('aparat.store');
Route::get('/sid/aparat/create','aparatController@create')->name('aparat.create');
Route::get('/sid/aparat/show/{aparat}','aparatController@show')->name('aparat.show');
Route::put('/sid/aparat/update/{aparat}','aparatController@update')->name('aparat.update');
Route::get('/sid/aparat/{aparat}','aparatController@destroy')->name('aparat.destroy');
Route::get('/sid/aparat/{aparat}/edit','aparatController@edit')->name('aparat.edit');

// Aparat

Route::post('/sid/tampungAparat','aparatController@tampungAparat')->name('aparat.tampung');
Route::get('/table/aparat','aparatController@dataTable')->name('table.aparat');

// LEMBAGA
Route::get('/sid/lembaga', 'lembagaController@index')->name('lembaga.home');
// BPD
Route::get('/sid/lembaga/bpd', 'lembagaController@indexBpd')->name('lembaga.bpd');
Route::get('/sid/lembaga/bpd/create', 'lembagaController@createBpd')->name('lembaga.create');
Route::get('/sid/lembaga/bpd/table', 'lembagaController@DatatablesBpd')->name('lembaga.bpdtable');
// PKK
Route::get('/sid/lembaga/pkk', 'lembagaController@indexpkk')->name('lembaga.pkk');
Route::get('/sid/lembaga/pkk/create', 'lembagaController@createpkk')->name('lembaga.createpkk');
Route::get('/sid/lembaga/pkk/table', 'lembagaController@DatatablesPkk')->name('lembaga.pkktable');
// KARANG TARUNA
Route::get('/sid/lembaga/karangtaruna', 'lembagaController@indexkarangtaruna')->name('lembaga.karangtaruna');
Route::get('/sid/lembaga/karangtaruna/create', 'lembagaController@createkarangtaruna')->name('lembaga.createkarangtaruna');
Route::get('/sid/lembaga/karangtaruna/table', 'lembagaController@Datatableskarangtaruna')->name('lembaga.karangtarunatable');
// BUMDES
Route::get('/sid/lembaga/bumdes', 'lembagaController@indexbumdes')->name('lembaga.bumdes');
Route::get('/sid/lembaga/bumdes/create', 'lembagaController@createbumdes')->name('lembaga.createbumdes');
Route::get('/sid/lembaga/bumdes/table', 'lembagaController@Datatablesbumdes')->name('lembaga.bumdestable');
// LEMBAGA ACTION
Route::post('/sid/lembaga/bpd', 'lembagaController@store')->name('lembaga.store');
Route::get('/sid/lembaga/bpd/edit/{params}', 'lembagaController@edit')->name('lembaga.edit');
Route::put('/sid/lembaga/bpd/update/{params}', 'lembagaController@update')->name('lembaga.update');
Route::delete('/sid/lembaga/bpd/destroy/{params}', 'lembagaController@destroy')->name('lembaga.destroy');
// POTENSI
Route::resource('/sid/potensi', 'potensiController');
Route::get('/table/potensi','potensiController@dataTable')->name('potensi.table');

// PENDUDUK
Route::resource('/sid/penduduk', 'pendudukController');
Route::get('/table/penduduk','pendudukController@datatables')->name('penduduk.table');

// SURAT MASUK
Route::resource('/sid/suratmasuk', 'suratmasukController');
Route::get('/table/suratmasuk','suratmasukController@datatables')->name('suratmasuk.table');

// SURAT KELUAR
Route::resource('/sid/suratkeluar', 'suratkeluarController');
Route::get('table/suratkeluar','suratkeluarController@datatables')->name('suratkeluar.table');
// SK KADES
Route::resource('/sid/skkades', 'skKadesController');
Route::get('table/skkades','skKadesController@datatables')->name('skkades.table');
// KABAR DESA
Route::resource('/sid/kabardesa', 'beritaController');
Route::get('/table/kabardesa','beritaController@datatable')->name('kabardesa.table');
// Sarana dan Prasarana
Route::get('/sid/sapras','saprasController@index')->name('sapras.index');
// EDIT
Route::get('/sid/sapras/transportasi/edit/{kode}','saprasController@editTrans')->name('transportasi.edit');
Route::get('/sid/sapras/sanitasi/edit/{kode}','saprasController@editSanitasi')->name('sanitasi.edit');
Route::get('/sid/sapras/peribadatan/edit/{kode}','saprasController@editPeribadatan')->name('peribadatan.edit');
Route::get('/sid/sapras/pendidikan/edit/{kode}','saprasController@editPendidikan')->name('pendidikan.edit');
Route::get('/sid/sapras/olahraga/edit/{kode}','saprasController@editOlahraga')->name('olahraga.edit');
Route::get('/sid/sapras/kesehatan/edit/{kode}','saprasController@editKesehatan')->name('kesehatan.edit');
Route::get('/sid/sapras/irigasi/edit/{kode}','saprasController@editIrigasi')->name('irigasi.edit');
Route::get('/sid/sapras/airbersih/edit/{kode}','saprasController@editAirbersih')->name('airbersih.edit');

//UPDATE
Route::put('/sid/sapras/transportasi/update/{kode}','saprasController@updateTrans')->name('transportasi.update');
Route::put('/sid/sapras/sanitasi/update/{kode}','saprasController@updateSanitasi')->name('sanitasi.update');
Route::put('/sid/sapras/peribadatan/update/{kode}','saprasController@updatePeribadatan')->name('peribadatan.update');
Route::put('/sid/sapras/pendidikan/update/{kode}','saprasController@updatePendidikan')->name('pendidikan.update');
Route::put('/sid/sapras/olahraga/update/{kode}','saprasController@updateOlahraga')->name('olahraga.update');
Route::put('/sid/sapras/kesehatan/update/{kode}','saprasController@updateKesehatan')->name('kesehatan.update');
Route::put('/sid/sapras/irigasi/update/{kode}','saprasController@updateIrigasi')->name('irigasi.update');
Route::put('/sid/sapras/airbersih/update/{kode}','saprasController@updateAirbersih')->name('airbersih.update');

// TABLE
Route::get('/table/sapras/pendidikan','saprasController@datatablePendidikan')->name('pendidikan.table');
Route::get('/table/sapras/transportasi','saprasController@datatableTransportasi')->name('transportasi.table');
Route::get('/table/sapras/sanitasi','saprasController@datatablesanitasi')->name('sanitasi.table');
Route::get('/table/sapras/peribadatan','saprasController@datatableperibadatan')->name('peribadatan.table');
Route::get('/table/sapras/pendidikan','saprasController@datatablependidikan')->name('pendidikan.table');
Route::get('/table/sapras/olahraga','saprasController@datatableolahraga')->name('olahraga.table');
Route::get('/table/sapras/kesehatan','saprasController@datatablekesehatan')->name('kesehatan.table');
Route::get('/table/sapras/irigasi','saprasController@datatableirigasi')->name('irigasi.table');
Route::get('/table/sapras/airbersih','saprasController@datatableairbersih')->name('airbersih.table');

Route::get('/sid/apdes', 'ApdesController@index')->name('apdes');
Route::post('/sid/apdes/config', 'ApdesController@config')->name('config');

// Landing page

Route::get('/','landingController@index')->name('index.landing');
// kabar desa
Route::get('/kabardesa','landingController@kabardesa')->name('kabardesa.landing');
Route::get('/kabardesa/read/{kode}','landingController@kabardesadetail')->name('kabardesa.detail');
Route::get('/kabardesa/read/kategori/{kode}','landingController@kabardesakategori')->name('kabardesakategori.detail');
// Sarana
Route::get('/sarana_prasarana','landingController@sarana')->name('sarana.landing');
Route::get('/kependudukan','landingController@kependudukan')->name('kependudukan.landing');


// DATA STATISTIK
Route::get('/statistik/trans','landingController@transData')->name('trans.statistik');
Route::get('/statistik/sanitasi','landingController@sanitasiData')->name('sanitasi.statistik');
Route::get('/statistik/ibadah','landingController@ibadahData')->name('ibadah.statistik');
Route::get('/statistik/pendidikan','landingController@pendidikanData')->name('pendidikan.statistik');
Route::get('/statistik/olahraga','landingController@olahragaData')->name('olahraga.statistik');
Route::get('/statistik/kesehatan','landingController@kesehatanData')->name('kesehatan.statistik');
Route::get('/statistik/irigasi','landingController@irigasiData')->name('irigasi.statistik');
Route::get('/statistik/airbersih','landingController@airbersihData')->name('airbersih.statistik');

// TENTANG
Route::get('/potensi','landingController@potensi')->name('potensi.landing');

// Lembaga
Route::get('/pemerintah_desa','landingController@pemerintahdesa')->name('pemerintah.landing');
Route::get('/pemerintah_desa/pemerintah','landingController@pemerintahdesaData')->name('pemerintah.data');
Route::get('/bpd','landingController@bpd')->name('bpd.landing');
Route::get('/pkk','landingController@pkk')->name('pkk.landing');
Route::get('/karangtaruna','landingController@karangtaruna')->name('karangtaruna.landing');
Route::get('/bumdes','landingController@bumdes')->name('bumdes.landing');
Route::get('/pembangunan','landingController@pembangunan')->name('pembangunan.landing');
Route::get('/apbdes','landingController@apbdes')->name('apbdes.landing');
Route::get('/tentang','landingController@tentang')->name('tentang.landing');