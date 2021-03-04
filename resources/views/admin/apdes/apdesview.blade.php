@extends('layouts.admin')
@section('konten')
<!-- ============================================================== -->
<!-- Start right Content here -->
<!-- ============================================================== -->                      
<div class="content-page">
	<!-- Start content -->
	<div class="content">
		<div class="container">
			<!-- Page-Title -->
			<div class="row">
				<div class="col-sm-12">

					<h4 class="page-title">APB Desa</h4>
					<ol class="breadcrumb">
						<li>
							<a href="javascript:void(0);">APBDes</a>
						</li>
						<li class="active">
							Data APBDes
						</li>
					</ol>
				</div>
			</div>

			<div class="row">
				<div class="col-sm-12">
					<div class="card-box">
						<h2 class="m-t-0 header-title"><b>PENDAPATAN DESA</b></h2>
						<p class="text-muted m-b-10 font-13">
							just start typing to edit, or move around with arrow keys or mouse clicks!
						</p>

						<a href="#" data-toggle="modal" data-toggle1="tooltip" data-placement="top" data-target=".modal-pendapatan" title="" data-original-title="Kelola Pendapatan Desa" role="button" class="btn btn-default waves-effect waves-light btn-sm">
							<span class="btn-label"><i class="fa fa-edit fa-lg"></i></span>
							Kelola Pendapatan
						</a>

						<div class="table-responsive m-t-10">
							<table id="mainTable" class="table table-striped m-b-0">
								<thead class="bg-inverse">
									<tr>
										<th style="color: #fff">URAIAN</th>
										<th style="color: #fff">ANGGARAN</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td>Pendapatan Asli Desa</td>
										<td id="pad">Rp. 0</td>
									</tr>
									<tr>
										<td>Pendapatan Transfer</td>
										<td id="ptf">Rp. 0</td>
									</tr>
									<tr>
										<td>Pendapatan Lain-lain</td>
										<td id="pll">Rp. 0</td>
									</tr>
								</tbody>
								<tfoot class="bg-inverse">
									<tr>
										<th style="color: #fff"><strong>TOTAL PENDAPATAN</strong></th>
										<th style="color: #fff"><strong id="total">RP. 0</strong></th>
									</tr>
								</tfoot>
							</table>
						</div>
					</div>
				</div>
			</div>

			<div class="row">
				<div class="col-sm-12">
					<div class="card-box">
						<h2 class="m-t-0 header-title"><b>BELANJA DESA</b></h2>
						<p class="text-muted m-b-10 font-13">
							just start typing to edit, or move around with arrow keys or mouse clicks!
						</p>

						<a href="#" data-toggle="modal" data-toggle1="tooltip" data-placement="top" data-target=".modal-belanja" title="" data-original-title="Input Belanja Desa" role="button" class="btn btn-default waves-effect waves-light btn-sm">
							<span class="btn-label"><i class="fa fa-plus-circle fa-lg"></i></span>
							Input Belanja
						</a>

						<div class="table-responsive m-t-10">
							<table id="mainTable" class="table table-striped m-b-0">
								<thead class="bg-inverse">
									<tr>
										<th style="color: #fff;">URAIAN</th>
										<th style="color: #fff;">ANGGARAN</th>
										<th style="color: #fff;">SUMBER DANA</th>
										<th style="color: #fff; width: 120px;">AKSI</th>
									</tr>
								</thead>
								<tbody>
									<th colspan="4" style="background: #90afc4; color: #fff;">I. BIDANG PENYELENGARAAN PEMERINTAH DESA</th>
									<tbody id="tb_bid1">

									</tbody>
									<tr>
										<th><strong>TOTAL</strong></th>
										<th colspan="3"><strong id="total_bid1">RP. 0</strong></th>
									</tr>

									<th colspan="4" style="background: #90afc4; color: #fff;">II. BIDANG PELAKSANAAN PEMBANGUNAN DESA</th>
									<tbody id="tb_bid2">
										
									</tbody>
									<tr>
										<th><strong>TOTAL</strong></th>
										<th colspan="3"><strong id="total_bid2">RP. 0</strong></th>
									</tr>

									<th colspan="4" style="background: #90afc4; color: #fff;">III. BIDANG PEMBINAAN KEMASYARAKATAN</th>
									<tbody id="tb_bid3">
										
									</tbody>
									<tr>
										<th><strong>TOTAL</strong></th>
										<th colspan="3"><strong id="total_bid3">RP. 0</strong></th>
									</tr>

									<th colspan="4" style="background: #90afc4; color: #fff;">IV. BIDANG PEMBERDAYAAN MASYARAKAT</th>
									<tbody id="tb_bid4">
										
									</tbody>
									<tr>
										<th><strong>TOTAL</strong></th>
										<th colspan="3"><strong id="total_bid4">RP. 0</strong></th>
									</tr>
								</tbody>
								<tfoot>
									<tr class="bg-inverse">
										<th style="color: #fff"><strong>TOTAL BELANJA</strong></th>
										<th colspan="3" style="color: #fff"><strong id="total_belanja">RP. 0</strong></th>
									</tr>
									<tr class="bg-purple">
										<th style="color: #fff"><strong>SURPLUS/DEFISIT</strong></th>
										<th colspan="3" style="color: #fff"><strong id="surplus">RP. 0</strong></th>
									</tr>
								</tfoot>
							</table>
						</div>
					</div>
				</div>
			</div>

			<div class="row">
				<div class="col-sm-12">
					<div class="card-box">
						<h2 class="m-t-0 header-title"><b>PEMBIAYAAN DESA</b></h2>
						<p class="text-muted m-b-10 font-13">
							just start typing to edit, or move around with arrow keys or mouse clicks!
						</p>

						<a href="#" data-toggle="modal" data-toggle1="tooltip" data-placement="top" data-target=".modal-pembiayaan" title="" data-original-title="Kelola Pembiayaan Desa" role="button" class="btn btn-default waves-effect waves-light btn-sm">
							<span class="btn-label"><i class="fa fa-edit fa-lg"></i></span>
							Kelola Pembiayaan
						</a>

						<div class="table-responsive m-t-10">
							<table id="mainTable" class="table table-striped m-b-0">
								<thead class="bg-inverse">
									<tr>
										<th style="color: #fff">URAIAN</th>
										<th style="color: #fff">ANGGARAN</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td>Penerimaan Pembiayaan</td>
										<td id="view_penerimaan_by">Rp. 0</td>
									</tr>
									<tr>
										<td>Pengeluaran Pembiayaan</td>
										<td id="view_pengeluaran_by">Rp. 0</td>
									</tr>
									<tr>
										<td>Pengeluaran Netto</td>
										<td id="view_pmby_netto">Rp. 0</td>
									</tr>
									<tr>
										<td>Sisa Lebih Pembiayaan Anggaran</td>
										<td id="view_lebih_pmby">Rp. 0</td>
									</tr>
								</tbody>
							</table>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
</div>

<input type="hidden" id="url" value="{{ route('config') }}">

{{-- Modal Pendapatan --}}
<div class="modal fade modal-pendapatan" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" style="display: none;">
	<div class="modal-dialog modal-lg">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
				<div class="row">
					<h3 class="modal-title col-md-6" id="myLargeModalLabel">KELOLA PENDAPATAN DESA</h3>
					<h4 class="modal-title col-md-5">Total Pendapatan: <b id="total_pendapatan">Rp. 0</b></h4>
				</div>
			</div>
			<form id="formPendapatan" method="POST" action="">
				<div class="modal-body">
					<div class="row">
						<div class="col-sm-4">
							<h4>I. Pendapatan Asli Desa</h4>
							<hr>
							<div class="form-group">
								<label>Hasil Aset</label>
								<div class="input-group">
									<span class="input-group-addon bootstrap-touchspin-prefix">Rp.</span>
									<input id="pad_aset" type="number" value="" name="pad_aset" class="form-control">
								</div>
							</div>
							<div class="form-group">
								<label>Swadaya, Partisipasi, Gotong Royong</label>
								<div class="input-group">
									<span class="input-group-addon bootstrap-touchspin-prefix">Rp.</span>
									<input id="pad_spgr" type="number" value="" name="pad_spgr" class="form-control">
								</div>
							</div>
							<div class="form-group">
								<label>Lain-lain</label>
								<div class="input-group">
									<span class="input-group-addon bootstrap-touchspin-prefix">Rp.</span>
									<input id="pad_lain_lain" type="number" value="" name="pad_lain_lain" class="form-control">
								</div>
							</div>
							<div class="form-group">
								<label>Total Pendapatan Asli Desa</label>
								<div class="input-group">
									<span class="input-group-addon bootstrap-touchspin-prefix">Rp.</span>
									<input id="pad_total" type="number" value="" name="pad_total" class="form-control" readonly="">
								</div>
							</div>
						</div>
						<div class="col-sm-4">
							<h4>II. Pendapatan Transfer</h4>
							<hr>
							<div class="form-group">
								<label>Dana Desa</label>
								<div class="input-group">
									<span class="input-group-addon bootstrap-touchspin-prefix">Rp.</span>
									<input id="ptf_danadesa" type="number" value="" name="ptf_danadesa" class="form-control">
								</div>
							</div>
							<div class="form-group">
								<label>Hasil Pajak dan Restribusi Daerah</label>
								<div class="input-group">
									<span class="input-group-addon bootstrap-touchspin-prefix">Rp.</span>
									<input id="ptf_hprd" type="number" value="" name="ptf_hprd" class="form-control">
								</div>
							</div>
							<div class="form-group">
								<label>Alokasi Dana Desa</label>
								<div class="input-group">
									<span class="input-group-addon bootstrap-touchspin-prefix">Rp.</span>
									<input id="ptf_alokasidana" type="number" value="" name="ptf_alokasidana" class="form-control">
								</div>
							</div>
							<div class="form-group">
								<label>Bantuan Keuangan APBD Kabupaten</label>
								<div class="input-group">
									<span class="input-group-addon bootstrap-touchspin-prefix">Rp.</span>
									<input id="ptf_apbdkab" type="number" value="" name="ptf_apbdkab" class="form-control">
								</div>
							</div>
							<div class="form-group">
								<label>Bantuan Keuangan APBD Provinsi</label>
								<div class="input-group">
									<span class="input-group-addon bootstrap-touchspin-prefix">Rp.</span>
									<input id="ptf_apbdprov" type="number" value="" name="ptf_apbdprov" class="form-control">
								</div>
							</div>
							<div class="form-group">
								<label>Total Pendapatan Transfer</label>
								<div class="input-group">
									<span class="input-group-addon bootstrap-touchspin-prefix">Rp.</span>
									<input id="ptf_total" type="number" value="" name="ptf_total" class="form-control" readonly="">
								</div>
							</div>
						</div>
						<div class="col-sm-4">
							<h4>III. Pendapatan Lain-lain</h4>
							<hr>
							<div class="form-group">
								<label>Hibah</label>
								<div class="input-group">
									<span class="input-group-addon bootstrap-touchspin-prefix">Rp.</span>
									<input id="pll_hibah" type="number" value="" name="pll_hibah" class="form-control">
								</div>
							</div>
							<div class="form-group">
								<label>Lain-lain Pendapatan yang Sah</label>
								<div class="input-group">
									<span class="input-group-addon bootstrap-touchspin-prefix">Rp.</span>
									<input id="pll_llps" type="number" value="" name="pll_llps" class="form-control">
								</div>
							</div>
							<div class="form-group">
								<label>Total Pendapatan Lain-lain</label>
								<div class="input-group">
									<span class="input-group-addon bootstrap-touchspin-prefix">Rp.</span>
									<input id="pll_total" type="number" value="" name="pll_total" class="form-control" readonly="">
									<input type="hidden" id="total_pndptn" name="total_pndptn">
									<input type="hidden" name="req" value="setPendapatan">
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="modal-footer">
					<button type="submit" class="btn btn-default waves-effect waves-light btn-sm"><i class="fa fa-paper-plane"></i> Simpan</button>
					<button type="button" class="btn btn-danger waves-effect btn-sm" data-dismiss="modal"><i class="fa fa-ban"></i> Tutup</button>
				</div>
			</form>
		</div>
	</div>
</div>

{{-- Modal Belanja --}}
<div class="modal fade modal-belanja" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" style="display: none;">
	<div class="modal-dialog modal-lg">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
				<h3 class="modal-title col-md-6" id="myLargeModalLabel">INPUT BELANJA DESA</h3>
			</div>
			<form method="POST" id="formBelanja">
				<div class="modal-body">
					<table class="table table-striped m-b-0">
						<thead>
							<tr class="bg-inverse">
								<th style="color: #fff;">URAIAN</th>
								<th style="color: #fff;">ANGGARAN</th>
								<th style="color: #fff;">SUMBER DANA</th>
							</tr>
							<tr style="background: #90afc4;">
								<th colspan="2" style="color: #fff">I. BIDANG PENYELENGGARAAN PEMERINTAH DESA</th>
								<th class="text-right">
									<a href="#" class="btn btn-inverse waves-effect waves-light btn-sm btn-bid-i" style="height: 25px;">
										<i class="fa fa-plus-circle fa-lg"></i>&nbsp;&nbsp;Tambah Item
									</a>
								</th>
							</tr>
						</thead>
						<tbody id="bid_i">

						</tbody>

						<thead>
							<tr style="background: #90afc4;">
								<th colspan="2" style="color: #fff">II. BIDANG PELAKSANAAN PEMBANGUNAN DESA</th>
								<th class="text-right">
									<a href="#" class="btn btn-inverse waves-effect waves-light btn-sm btn-bid-ii" style="height: 25px;">
										<i class="fa fa-plus-circle fa-lg"></i>&nbsp;&nbsp;Tambah Item
									</a>
								</th>
							</tr>
						</thead>
						<tbody id="bid_ii">

						</tbody>

						<thead>
							<tr style="background: #90afc4;">
								<th colspan="2" style="color: #fff">III. BIDANG PEMBINAAN MASYARAKAT</th>
								<th class="text-right">
									<a href="#" class="btn btn-inverse waves-effect waves-light btn-sm btn-bid-iii" style="height: 25px;">
										<i class="fa fa-plus-circle fa-lg"></i>&nbsp;&nbsp;Tambah Item
									</a>
								</th>
							</tr>
						</thead>
						<tbody id="bid_iii">

						</tbody>

						<thead>
							<tr style="background: #90afc4;">
								<th colspan="2" style="color: #fff">IV. BIDANG PEMBERDAYAAN MASYARAKAT</th>
								<th class="text-right">
									<a href="#" class="btn btn-inverse waves-effect waves-light btn-sm btn-bid-iv" style="height: 25px;">
										<i class="fa fa-plus-circle fa-lg"></i>&nbsp;&nbsp;Tambah Item
									</a>
								</th>
							</tr>
						</thead>
						<tbody id="bid_iv">

						</tbody>
					</table>
				</div>
				<div class="modal-footer">
					<input type="hidden" name="req" value="setBelanja">
					<button type="submit" class="btn btn-default waves-effect waves-light btn-sm"><i class="fa fa-paper-plane"></i> Simpan</button>
					<button type="button" class="btn btn-danger waves-effect btn-sm" data-dismiss="modal"><i class="fa fa-ban"></i> Tutup</button>
				</div>
			</form>
		</div>
	</div>
</div>

{{-- Modal Edit Belanja --}}
<div class="modal fade modal-edt-belanja" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" style="display: none;">
	<div class="modal-dialog modal-lg">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
				<h3 class="modal-title col-md-6" id="myLargeModalLabel">EDIT BELANJA DESA</h3>
			</div>
			<form method="POST" id="formedtBelanja">
				<div class="modal-body">
					<table class="table table-striped m-b-0">
						<thead>
							<tr class="bg-inverse">
								<th style="color: #fff;">URAIAN</th>
								<th style="color: #fff;">ANGGARAN</th>
								<th style="color: #fff;">SUMBER DANA</th>
							</tr>
							<tr>
								<th colspan="3" style="background: #90afc4; color: #fff" id="edt-bidang"></th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>
									<input type="hidden" id="edt-id" name="id">
									<input type="text" id="edt-uraian" name="uraian" class="form-control" placeholder="URAIAN" autocomplete="off">
								</td>
								<td>
									<input type="number" id="edt-anggaran" name="anggaran" class="form-control" placeholder="ANGGARAN (RP)" autocomplete="off">
								</td>
								<td>
									<input type="text" id="edt-sumber" name="sumber" class="form-control" placeholder="SUMBER DANA" autocomplete="off">
									<input type="hidden" name="req" value="updteBelanja">
								</td>
							</tr>
						</tbody>
					</table>
				</div>
				<div class="modal-footer">
					<button type="submit" class="btn btn-default waves-effect waves-light btn-sm"><i class="fa fa-paper-plane"></i> Simpan</button>
					<button type="button" class="btn btn-danger waves-effect btn-sm" data-dismiss="modal"><i class="fa fa-ban"></i> Tutup</button>
				</div>
			</form>
		</div>
	</div>
</div>

{{-- Modal Pembiayaan --}}
<div class="modal fade modal-pembiayaan" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" style="display: none;">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
				<h4 class="modal-title col-md-6" id="myLargeModalLabel">KELOLA PEMBIAYAAN DESA</h4>
			</div>
			<form id="formPembiayaan" method="POST" action="">
				<div class="modal-body">
					<div class="form-group">
						<label>Penerimaan Pembiayaan</label>
						<div class="input-group">
							<span class="input-group-addon bootstrap-touchspin-prefix">Rp.</span>
							<input id="penerimaan_by" type="number" value="" name="penerimaan_by" class="form-control">
						</div>
					</div>
					<div class="form-group">
						<label>Pengeluaran Pembiayaan</label>
						<div class="input-group">
							<span class="input-group-addon bootstrap-touchspin-prefix">Rp.</span>
							<input id="pengeluaran_by" type="number" value="" name="pengeluaran_by" class="form-control">
						</div>
					</div>
					<div class="form-group">
						<label>Pembiayaan Netto</label>
						<div class="input-group">
							<span class="input-group-addon bootstrap-touchspin-prefix">Rp.</span>
							<input id="pmby_netto" type="number" value="" name="pmby_netto" class="form-control" readonly="">
						</div>
					</div>
					<div class="form-group">
						<label>Sisa Lebih Pembiayaan Anggaran</label>
						<div class="input-group">
							<span class="input-group-addon bootstrap-touchspin-prefix">Rp.</span>
							<input id="lebih_pmby" type="number" value="" name="lebih_pmby" class="form-control">
							<input type="hidden" name="req" value="setPembiayaan">
						</div>
					</div>
				</div>
				<div class="modal-footer">
					<button type="submit" class="btn btn-default waves-effect waves-light btn-sm"><i class="fa fa-paper-plane"></i> Simpan</button>
					<button type="button" class="btn btn-danger waves-effect btn-sm" data-dismiss="modal"><i class="fa fa-ban"></i> Tutup</button>
				</div>
			</form>
		</div>
	</div>
</div>

@endsection 

@section('js')
<script type="text/javascript">
	$(document).ready(function() {
		$('[data-toggle1="tooltip"]').tooltip();

		// Pendapatan Asli Desa
		$('#pad_aset, #pad_spgr, #pad_lain_lain').keyup(function() {
			var pad_aset = $('#pad_aset').val();
			var pad_spgr = $('#pad_spgr').val();
			var pad_lain_lain = $('#pad_lain_lain').val();

			if (pad_aset == '') pad_aset = 0;
			if (pad_spgr == '') pad_spgr = 0;
			if (pad_lain_lain == '') pad_lain_lain = 0;

			var pad_total = parseInt(pad_aset) + parseInt(pad_spgr) + parseInt(pad_lain_lain);
			$('#pad_total').val(pad_total);
		});

		// Pendapatan Pendapatan Transfer
		$('#ptf_danadesa, #ptf_hprd, #ptf_alokasidana, #ptf_apbdkab, #ptf_apbdprov').keyup(function() {
			var ptf_danadesa = $('#ptf_danadesa').val();
			var ptf_hprd = $('#ptf_hprd').val();
			var ptf_alokasidana = $('#ptf_alokasidana').val();
			var ptf_apbdkab = $('#ptf_apbdkab').val();
			var ptf_apbdprov = $('#ptf_apbdprov').val();

			if (ptf_danadesa == '') ptf_danadesa = 0;
			if (ptf_hprd == '') ptf_hprd = 0;
			if (ptf_alokasidana == '') ptf_alokasidana = 0;
			if (ptf_apbdkab == '') ptf_apbdkab = 0;
			if (ptf_apbdprov == '') ptf_apbdprov = 0;

			var ptf_total = parseInt(ptf_danadesa) + parseInt(ptf_hprd) + parseInt(ptf_alokasidana) + parseInt(ptf_apbdkab) + parseInt(ptf_apbdprov);
			$('#ptf_total').val(ptf_total);
		});

		// Pendapatan Pendapatan Transfer
		$('#pll_hibah, #pll_llps').keyup(function() {
			var pll_hibah = $('#pll_hibah').val();
			var pll_llps = $('#pll_llps').val();

			if (pll_hibah == '') pll_hibah = 0;
			if (pll_llps == '') pll_llps = 0;

			var pll_total = parseInt(pll_hibah) + parseInt(pll_llps);
			$('#pll_total').val(pll_total);
		});

		// Total Pendapatan
		$('#pad_aset, #pad_spgr, #pad_lain_lain, #ptf_danadesa, #ptf_hprd, #ptf_alokasidana, #ptf_apbdkab, #ptf_apbdprov, #pll_hibah, #pll_llps').keyup(function() {
			var pad_total = $('#pad_total').val();
			var ptf_total = $('#ptf_total').val();
			var pll_total = $('#pll_total').val();

			if (pad_total == '') pad_total = 0;
			if (ptf_total == '') ptf_total = 0;
			if (pll_total == '') pll_total = 0;

			var total_pendapatan = parseInt(pad_total) + parseInt(ptf_total) + parseInt(pll_total);
			$('#total_pendapatan').text('Rp. ' + total_pendapatan);
			$('#total_pndptn').val(total_pendapatan);
		});

		// Manage Belanja Desa
		// Append Bidang
		appendBid('bid_i');
		appendBid('bid_ii');
		appendBid('bid_iii');
		appendBid('bid_iv');
		function appendBid(bid) {
			$('#'+bid).append(`
				<tr>
				<td>
				<input type="text" value="" name="uraian[]" class="form-control" placeholder="URAIAN" autocomplete="off">
				</td>
				<td>
				<input type="number" value="" name="anggaran[]" class="form-control" placeholder="ANGGARAN (RP)" autocomplete="off">
				</td>
				<td>
				<input type="text" value="" name="sumber[]" class="form-control" placeholder="SUMBER DANA" autocomplete="off">
				<input type="hidden" value="`+ bid +`" name="bidang[]">
				</td>
				</tr>
				`);
		}

		$(document).on('click', '.btn-bid-i', function() {
			appendBid('bid_i');
		});

		$(document).on('click', '.btn-bid-ii', function() {
			appendBid('bid_ii');
		});

		$(document).on('click', '.btn-bid-iii', function() {
			appendBid('bid_iii');
		});

		$(document).on('click', '.btn-bid-iv', function() {
			appendBid('bid_iv');
		});

		// Pembiayaan Netto
		$('#penerimaan_by, #pengeluaran_by').keyup(function() {
			var penerimaan_by = $('#penerimaan_by').val();
			var pengeluaran_by = $('#pengeluaran_by').val();

			if (penerimaan_by == '') penerimaan_by = 0;
			if (pengeluaran_by == '') pengeluaran_by = 0;

			var pmby_netto = parseInt(penerimaan_by) - parseInt(pengeluaran_by);
			$('#pmby_netto').val(pmby_netto);
		});
	});
</script>
<script src="{{ asset('js/config.js') }}"></script>
@endsection