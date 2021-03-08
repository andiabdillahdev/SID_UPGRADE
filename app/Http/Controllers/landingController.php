<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\berita;
use Artesaos\SEOTools\Facades\SEOMeta;
use Artesaos\SEOTools\Facades\OpenGraph;
use Artesaos\SEOTools\Facades\TwitterCard;
use Artesaos\SEOTools\Facades\JsonLd;
use Artesaos\SEOTools\Facades\JsonLdMulti;
use Artesaos\SEOTools\Facades\SEOTools;
use Illuminate\Support\Str;
use App\transportasi;
use App\sanitasi;
use App\peribadatan;
use App\pendidikan;
use App\olahraga;
use App\kesehatan;
use App\irigasi;
use App\airbersih;
use App\penduduk;
use App\potensi;
use App\aparat;
use App\lembaga;
use App\Pendapatan;
use App\Belanja;
use App\Pembiayaan;

class landingController extends Controller
{
    public function index(){
        SEOMeta::setTitle('Desa Anrang - Beranda');
        SEOMeta::setDescription('Website Desa Anrang Kabupaten Bulukumba');
        SEOMeta::addKeyword(['Desa Anrang', 'Web Desa Bulukumba', 'Desa Anrang Rilau Ale',' Kecamatan Rilau Ale','Anrang','Bulumkumba','desa anrang','anrang desa','Website Desa','Digital Desa']);
        // SEOMeta::setCanonical('https://codecasts.com.br/lesson'); 
        return view('landing.index');
    }

    public function kabardesa(){
        SEOMeta::setTitle('Kabar Desa');
        SEOMeta::setDescription('Website Desa Anrang Kabupaten Bulukumba');
        SEOMeta::addKeyword(['Desa Anrang', 'Web Desa Bulukumba', 'Desa Anrang Rilau Ale',' Kecamatan Rilau Ale','Anrang','Bulumkumba','desa anrang','anrang desa','Website Desa','Digital Desa']);

        $model = berita::where('kategori','Berita Desa')->orderBy('id','DESC')->paginate(4);
        $recent = berita::orderBy('id','DESC')->paginate(5);
        return view('landing.kabardesa.index',['model'=>$model,'recent'=>$recent]);
    }

    public function kabardesadetail($params){
        $model = berita::where('slug',$params)->first();
        $recent = berita::orderBy('id','DESC')->paginate(5);

      
        SEOMeta::setTitle($model->judul);
        SEOMeta::setDescription(  Str::limit(strip_tags($model->konten),200));
        SEOMeta::addMeta('article:published_time', $model->tanggal, 'property');
        SEOMeta::addMeta('article:section', $model->kategori, 'property');
        SEOMeta::addKeyword(['Desa Anrang', 'Web Desa Bulukumba', 'Desa Anrang Rilau Ale',' Kecamatan Rilau Ale','Anrang','Bulumkumba','desa anrang','anrang desa','Website Desa','Digital Desa']);

        return view('landing.kabardesa.detail',['model'=>$model,'recent'=>$recent]);
    }

    public function kabardesakategori($params){
        $model = berita::where('kategori',$params)->paginate(4);
        $recent = berita::orderBy('id','DESC')->paginate(5);

        SEOMeta::setTitle($params);
        SEOMeta::setDescription('Website Desa Anrang Kabupaten Bulukumba');
        SEOMeta::addKeyword(['Desa Anrang', 'Web Desa Bulukumba', 'Desa Anrang Rilau Ale',' Kecamatan Rilau Ale','Anrang','Bulumkumba','desa anrang','anrang desa','Website Desa','Digital Desa']);

        return view('landing.kabardesa.tagsberita',['model'=>$model,'recent'=>$recent,'params'=>$params]);
    }

    public function sarana(){
        SEOMeta::setTitle('Sarana Prasarana');
        SEOMeta::setDescription('Website Desa Anrang Kabupaten Bulukumba');
        SEOMeta::addKeyword(['Desa Anrang', 'Web Desa Bulukumba', 'Desa Anrang Rilau Ale',' Kecamatan Rilau Ale','Anrang','Bulumkumba','desa anrang','anrang desa','Website Desa','Digital Desa']);
        return view('landing.statistik.sarana');
    }

    public function kependudukan(){
        SEOMeta::setTitle('Kependudukan');
        SEOMeta::setDescription('Website Desa Anrang Kabupaten Bulukumba');
        SEOMeta::addKeyword(['Desa Anrang', 'Web Desa Bulukumba', 'Desa Anrang Rilau Ale',' Kecamatan Rilau Ale','Anrang','Bulumkumba','desa anrang','anrang desa','Website Desa','Digital Desa']);

   //data jenis kelamiin
        $xx = 'LAKI-LAKI';
        $yy = 'PEREMPUAN';
        $laki =  penduduk::where('jenis_kelamin',$xx)->get();
        $perempuan = penduduk::where('jenis_kelamin',$yy)->get();

        $laki_Chart = count($laki);
        $perempuan_Chart = count($perempuan);

   //data jenis kelamiin END

   // Data Kawin

   $kawin = 'kawin';
   $belum = 'Belum Kawin';
   $janda_duda = 'Janda/Duda';

   $kawinX =  count(penduduk::where('status',$kawin)->get()); 
   $belumX =  count(penduduk::where('status',$belum)->get());
   $janda_dudaX = count(penduduk::where('status',$janda_duda)->get());


 //   Data Per Dusun

    $bontoM = 'BONTO MASUNGGU';
    $tonrong = 'TONRONG';
    $mattoanging = 'MATTOANGIN';
    $batang = 'BATANG-BATANG';


    $bontoMX =  count(penduduk::where('dusun',$bontoM)->get()); 
    $tonrongX =  count(penduduk::where('dusun',$tonrong)->get());
    $mattoangingX = count(penduduk::where('dusun',$mattoanging)->get());
    $batangX = count(penduduk::where('dusun',$batang)->get());

    $islam = 'Islam';
    $kristen = 'Kristen';
    $agamaIslam = count(penduduk::where('agama',$islam)->get()); 
    $agamaKristen = count(penduduk::where('agama',$kristen)->get()); 

        return view('landing.statistik.kependudukan',[
            'laki'=>$laki_Chart,
            'wanita'=>$perempuan_Chart,
               'kawin'=>$kawinX,
               'belum'=>$belumX,
               'janda'=>$janda_dudaX,
               'bonto'=>$bontoMX,
               'tonrong'=>$tonrongX,
               'mattoanging'=>$mattoangingX,
               'batang'=>$batangX,
               'islam'=>$agamaIslam,
               'kristen'=>$agamaKristen
        ]);
    }

    public function potensi(){
        SEOMeta::setTitle('Potensi Desa');
        SEOMeta::setDescription('Website Desa Anrang Kabupaten Bulukumba');
        SEOMeta::addKeyword(['Desa Anrang', 'Web Desa Bulukumba', 'Desa Anrang Rilau Ale',' Kecamatan Rilau Ale','Anrang','Bulumkumba','desa anrang','anrang desa','Website Desa','Digital Desa']);

        $year = date('Y');

        $model = potensi::where('tahun',$year)->first();

        return  view('landing.statistik.potensi',compact('model'));
    }

    public function pemerintahdesa(){
        SEOMeta::setTitle('Pemerintah Desa');
        SEOMeta::setDescription('Website Desa Anrang Kabupaten Bulukumba');
        SEOMeta::addKeyword(['Desa Anrang', 'Web Desa Bulukumba', 'Desa Anrang Rilau Ale',' Kecamatan Rilau Ale','Anrang','Bulumkumba','desa anrang','anrang desa','Website Desa','Digital Desa']);
        return view('landing.lembaga.pemerintah');
    }

    public function bpd(){
        SEOMeta::setTitle('Badan Permusyawaratan Desa');
        SEOMeta::setDescription('Website Desa Anrang Kabupaten Bulukumba');
        SEOMeta::addKeyword(['Desa Anrang', 'Web Desa Bulukumba', 'Desa Anrang Rilau Ale',' Kecamatan Rilau Ale','Anrang','Bulumkumba','desa anrang','anrang desa','Website Desa','Digital Desa']);
        $model = lembaga::where('role','bpd')->get();
        return view('landing.lembaga.bpd',compact('model'));
    }

    public function pkk(){
        SEOMeta::setTitle('Pemberdayaan Kesejahteraan Keluarga');
        SEOMeta::setDescription('Website Desa Anrang Kabupaten Bulukumba');
        SEOMeta::addKeyword(['Desa Anrang', 'Web Desa Bulukumba', 'Desa Anrang Rilau Ale',' Kecamatan Rilau Ale','Anrang','Bulumkumba','desa anrang','anrang desa','Website Desa','Digital Desa']);
        $model = lembaga::where('role','pkk')->get();
        return view('landing.lembaga.pkk',compact('model'));
    }

    public function karangtaruna(){
        SEOMeta::setTitle('Karang Taruna');
        SEOMeta::setDescription('Website Desa Anrang Kabupaten Bulukumba');
        SEOMeta::addKeyword(['Desa Anrang', 'Web Desa Bulukumba', 'Desa Anrang Rilau Ale',' Kecamatan Rilau Ale','Anrang','Bulumkumba','desa anrang','anrang desa','Website Desa','Digital Desa']);
        $model = lembaga::where('role','karang')->get();
        return view('landing.lembaga.karang',compact('model'));
    }

    public function bumdes(){
        SEOMeta::setTitle('Badan Usaha Milik Desa');
        SEOMeta::setDescription('Website Desa Anrang Kabupaten Bulukumba');
        SEOMeta::addKeyword(['Desa Anrang', 'Web Desa Bulukumba', 'Desa Anrang Rilau Ale',' Kecamatan Rilau Ale','Anrang','Bulumkumba','desa anrang','anrang desa','Website Desa','Digital Desa']);
        $model = lembaga::where('role','bumdes')->get();
        return view('landing.lembaga.bumdes',compact('model'));
    }

    public function pembangunan(){
        SEOMeta::setTitle('Pembangunan');
        SEOMeta::setDescription('Website Desa Anrang Kabupaten Bulukumba');
        SEOMeta::addKeyword(['Desa Anrang', 'Web Desa Bulukumba', 'Desa Anrang Rilau Ale',' Kecamatan Rilau Ale','Anrang','Bulumkumba','desa anrang','anrang desa','Website Desa','Digital Desa']);
        return view('landing.pembangunan.index');
    }

    public function apbdes(){
        SEOMeta::setTitle('APBDES');
        SEOMeta::setDescription('Website Desa Anrang Kabupaten Bulukumba');
        SEOMeta::addKeyword(['Desa Anrang', 'Web Desa Bulukumba', 'Desa Anrang Rilau Ale',' Kecamatan Rilau Ale','Anrang','Bulumkumba','desa anrang','anrang desa','Website Desa','Digital Desa']);
   
        $data = [
            'penerimaan' => Pendapatan::all(),
            'belanja' => Belanja::all(),
            'pembiayaan' => Pembiayaan::all()
        ];
        return view('landing.apbdes.index',compact('data'));
    }

    public function tentang(){
        SEOMeta::setTitle('Tentang');
        SEOMeta::setDescription('Website Desa Anrang Kabupaten Bulukumba');
        SEOMeta::addKeyword(['Desa Anrang', 'Web Desa Bulukumba', 'Desa Anrang Rilau Ale',' Kecamatan Rilau Ale','Anrang','Bulumkumba','desa anrang','anrang desa','Website Desa','Digital Desa']);
        return view('landing.tentang.index');
    }

    public function transData(){
        $trans = transportasi::all();
        return response()->json($trans);
    }

    public function sanitasiData(){
        $sanitasi = sanitasi::all();
        return response()->json($sanitasi);
    }

    public function ibadahData(){
        $ibadah = peribadatan::all();
        return response()->json($ibadah);
    }

    public function pendidikanData(){
        $pend = pendidikan::all();
        return response()->json($pend);
    }

    public function olahragaData(){
        $olah = olahraga::all();
        return response()->json($olah);
    }

    public function kesehatanData(){
        $olah = kesehatan::all();
        return response()->json($olah);
    }

    public function irigasiData(){
        $model = irigasi::all();
        return response()->json($model);
    }

    public function airbersihData(){
        $model = airbersih::all();
        return response()->json($model);
    }

    public function pemerintahdesaData(){
        $model = aparat::all();
        return response()->json($model);
    }
  

}
