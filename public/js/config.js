$(document).ready(function() {
	var url = $('#url').val();

	$.ajaxSetup({
		headers: { 'X-CSRF-TOKEN' : $('meta[name="csrf-token"]').attr('content') }
	});

	// Pendapatan
	getPendapatan();
	function getPendapatan() {
		$.ajax({
			url     : url,
			method  : "POST",
			data    : { req: 'getPendapatan' },
			success : function(data) {
				$.each(data[0], function(key, val) {
					$('#'+key).val(val);
				});

				$('#total_pendapatan').text('Rp. ' + data[0].total_pndptn);
				$('#pad').text('Rp. ' + data[0].pad_total );
				$('#ptf').text('Rp. ' + data[0].ptf_total );
				$('#pll').text('Rp. ' + data[0].pll_total );
				$('#total').text('Rp. ' + data[0].total_pndptn);
			}
		});
	}

	$('#formPendapatan').submit(function(e) {
		e.preventDefault();
		var data = $('#formPendapatan').serialize();

		$.ajax({
			url     : url,
			method  : "POST",
			data    : data,
			success : function(data) {
				getPendapatan();
				getBelanja();
				$('.modal-pendapatan').modal('hide');
			}
		});
	});

	// Belanja
	getBelanja();
	function getBelanja() {
		var total_pndptn = $('#total_pndptn').val();
		$.ajax({
			url     : url,
			method  : "POST",
			data    : { req: 'getBelanja', total_pndptn: total_pndptn },
			success : function(data) {
				append_tb(data.bid1, '1', data.total1);
				append_tb(data.bid2, '2', data.total2);
				append_tb(data.bid3, '3', data.total3);
				append_tb(data.bid4, '4', data.total4);
				$('#total_belanja').text('Rp. ' + data.total);
				$('#surplus').text('Rp. ' + data.surplus);
			}
		});
	}

	function append_tb(data, bid, total) {
		$('#tb_bid'+bid).html('');
		$.each(data, function(key, val) {
			$('#tb_bid'+bid).append(`
				<tr>
				<td>` + val.uraian + `</td>
				<td>Rp. ` + val.anggaran + `</td>
				<td>` + val.sumber + `</td>
				<td>
				<a href="#" data-id="` + val.id + `" style="height: 25px;" data-toggle="modal" data-target=".modal-edt-belanja" role="button" class="btn btn-primary waves-effect waves-light btn-sm btn-edit">
				<i class="fa fa-edit"></i> Edit
				</a>
				</td>
				</tr>
				`);
		});
		$('#total_bid'+bid).text('Rp. ' + total);
	}

	$('#formBelanja').submit(function(e) {
		e.preventDefault();
		var data = $('#formBelanja').serialize();

		$.ajax({
			url     : url,
			method  : "POST",
			data    : data,
			success : function(data) {
				getBelanja();
				$('.modal-belanja').modal('hide');

				$('#bid_i').html('');
				$('#bid_ii').html('');
				$('#bid_iii').html('');
				$('#bid_iv').html('');

				appendBid('bid_i');
				appendBid('bid_ii');
				appendBid('bid_iii');
				appendBid('bid_iv');
			}
		});
	});

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

	// Edit Belanja
	$(document).on('click', '.btn-edit', function() {
		var id = $(this).attr('data-id');

		$.ajax({
			url     : url,
			method  : "POST",
			data    : { req: 'edtBelanja', id: id },
			success : function(data) {
				$('#edt-id').val(data.id);
				$('#edt-uraian').val(data.uraian);
				$('#edt-anggaran').val(data.anggaran);
				$('#edt-sumber').val(data.sumber);
				$('#edt-bidang').text(data.bidang);
			}
		});
	});

	$('#formedtBelanja').submit(function(e) {
		e.preventDefault();
		var data = $('#formedtBelanja').serialize();

		$.ajax({
			url     : url,
			method  : "POST",
			data    : data,
			success : function(data) {
				getBelanja();
				$('.modal-edt-belanja').modal('hide');
			}
		});
	});

	// Pembiayaan
	getPembiayaan();
	function getPembiayaan() {
		$.ajax({
			url     : url,
			method  : "POST",
			data    : { req: 'getPembiayaan' },
			success : function(data) {
				$.each(data[0], function(key, val) {
					$('#'+key).val(val);
					$('#view_'+key).text('Rp. ' + val);
				});
			}
		});
	}

	$('#formPembiayaan').submit(function(e) {
		e.preventDefault();
		var data = $('#formPembiayaan').serialize();

		$.ajax({
			url     : url,
			method  : "POST",
			data    : data,
			success : function(data) {
				getPembiayaan();
				$('.modal-pembiayaan').modal('hide');
			}
		});
	});
});