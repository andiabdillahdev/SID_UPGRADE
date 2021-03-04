<?php

namespace App\Http\Controllers;

use App\Pendapatan;
use App\Belanja;
use App\Pembiayaan;

use Illuminate\Http\Request;

class ApdesController extends Controller
{
	public function index()
	{
		return view('admin/apdes/apdesview');
	}

	public function config(Request $request)
	{
		if ($request->req == 'getPendapatan') {
			$pendapatan = Pendapatan::first();
			return response()->json([$pendapatan], 200);
		} else if ($request->req == 'setPendapatan') {
			$pendapatan = Pendapatan::first();
			$pendapatan->pad_aset = $request->pad_aset;
			$pendapatan->pad_spgr = $request->pad_spgr;
			$pendapatan->pad_lain_lain = $request->pad_lain_lain;
			$pendapatan->pad_total = $request->pad_total;
			$pendapatan->ptf_danadesa = $request->ptf_danadesa;
			$pendapatan->ptf_hprd = $request->ptf_hprd;
			$pendapatan->ptf_alokasidana = $request->ptf_alokasidana;
			$pendapatan->ptf_apbdkab = $request->ptf_apbdkab;
			$pendapatan->ptf_apbdprov = $request->ptf_apbdprov;
			$pendapatan->ptf_total = $request->ptf_total;
			$pendapatan->pll_hibah = $request->pll_hibah;
			$pendapatan->pll_llps = $request->pll_llps;
			$pendapatan->pll_total = $request->pll_total;
			$pendapatan->total_pndptn = $request->total_pndptn;
			$pendapatan->save();
		} else if ($request->req == 'getBelanja') {
			$bid1 = Belanja::where('bidang', 'bid_i')->get();
			$total1 = $bid1->sum('anggaran');

			$bid2 = Belanja::where('bidang', 'bid_ii')->get();
			$total2 = $bid2->sum('anggaran');

			$bid3 = Belanja::where('bidang', 'bid_iii')->get();
			$total3 = $bid3->sum('anggaran');

			$bid4 = Belanja::where('bidang', 'bid_iv')->get();
			$total4 = $bid4->sum('anggaran');

			$total = Belanja::sum('anggaran');
			$surplus = $request->total_pndptn - $total;

			return response()->json([
				'bid1' => $bid1,
				'total1' => $total1,
				'bid2' => $bid2,
				'total2' => $total2,
				'bid3' => $bid3,
				'total3' => $total3,
				'bid4' => $bid4,
				'total4' => $total4,
				'total' => $total,
				'surplus' => $surplus
			], 200);
		} else if ($request->req == 'setBelanja') {
			foreach ($request->uraian as $i => $data) {
				if (isset($data)) {
					if ($request->anggaran[$i] == null) $anggaran = 0;
					else $anggaran = $request->anggaran[$i];

					if ($request->sumber[$i] == null) $sumber = '-';
					else $sumber = $request->sumber[$i];

					$belanja = new Belanja;
					$belanja->uraian = $request->uraian[$i];
					$belanja->anggaran = $anggaran;
					$belanja->sumber = $sumber;
					$belanja->bidang = $request->bidang[$i];
					$belanja->tahun = date('Y');
					$belanja->save();
				}
			}
		} else if ($request->req == 'edtBelanja') {
			$get = Belanja::where('id', $request->id)->first();

			if ($get->bidang == 'bid_i') $bidang = 'BIDANG PENYELENGGARAAN PEMERINTAH DESA';
			else if ($get->bidang == 'bid_ii') $bidang = 'BIDANG PELAKSANAAN PEMBANGUNAN DESA';
			else if ($get->bidang == 'bid_iii') $bidang = 'BIDANG PEMBINAAN MASYARAKAT';
			else if ($get->bidang == 'bid_iv') $bidang = 'BIDANG PEMBERDAYAAN MASYARAKAT';

			return response()->json([
				'id' => $get->id,
				'uraian' => $get->uraian,
				'anggaran' => $get->anggaran,
				'sumber' => $get->sumber,
				'bidang' => $bidang
			], 200);
		} else if ($request->req == 'updteBelanja') {
			$edt = Belanja::where('id', $request->id)->first();
			$edt->uraian = $request->uraian;
			$edt->anggaran = $request->anggaran;
			$edt->sumber = $request->sumber;
			$edt->save();
		} else if ($request->req == 'getPembiayaan') {
			$pembiayaan = Pembiayaan::first();
			return response()->json([$pembiayaan], 200);
		} else if ($request->req == 'setPembiayaan') {
			$pembiayaan = Pembiayaan::first();
			$pembiayaan->penerimaan_by = $request->penerimaan_by;
			$pembiayaan->pengeluaran_by = $request->pengeluaran_by;
			$pembiayaan->pmby_netto = $request->pmby_netto;
			$pembiayaan->lebih_pmby = $request->lebih_pmby;
			$pembiayaan->save();
		}
	}
}
