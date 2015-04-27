<?php if($success == 'true') { ?>
<div class="row">
	<div class="col-md-12">
		<div class="panel panel-success">
	      <div class="panel-heading">
	        <h3 class="panel-title">Permohonan SKCK Anda Berhasil Terdaftar</h3>
	      </div>
	      <table class="table table-bordered">
		  	<thead>
			  	<tr>
			  		<th>Tanggal & No. e-SKCK</th>
			  		<th>Petunjuk Selanjutnya</th>
		  		</tr>
		  	</thead>
		  	<tbody>
				<tr>
			  		<td>
			  			<span><?php  echo date("d F Y"); ?></span><br/>
			  			<span class="label label-primary"><?= $skck_registration_no; ?></span></td>
			  		<td>
				  		<p style="text-align:justify">Selamat <b><?= $skck_registration_name; ?>,</b> anda telah berhasil melakukan pendaftaran permohonan e-SKCK/SKCK Online di Polres Tulung Agung. Silakan <b><u>CATAT No. Aplikasi/Registrasi e-SKCK</u></b>
				  		anda: <h3 class="text-center"><b><?= $skck_registration_no; ?></b></h3><div id="qrcode"></div><br/> atau silakan <b><u>PRINT halaman ini</u></b>.
				  		Selanjutnya silakan lengkapi persyaratan yg belum ada seperti pengambilan sidik jari di Polres, surat keterangan dari RT-RW-Kelurahan, dan sebagainya.
				  		Bila sudah ada, silakan bawa saat ingin mendapatkan SKCK anda sebagai syarat verifikasi. Semua dokumen diharap dibawa beserta versi File/Scan/Soft Copy
				  		masing-masing apabila belum mengunggah dokumen-dokumen tersebut secara online. Apabila semua lengkap & terverifikasi, dalam 1x 24 jam, SKCK anda dapat diterbitkan.</p>
						<blockquote>
						<p style="text-align:justify"><strong>Dokumen yang dipersyaratkan untuk verifikasi permohonan SKCK secara <em>online</em> adalah sebagai berikut:</strong></p>
							<ul>
								<li style="text-align:justify"><em>Copy Scan</em> <b>KTP</b> Asli;</li>
								<li style="text-align:justify"><em>Copy Scan</em> <b>Kartu Keluarga (KK)</b> asli;</li>
								<li style="text-align:justify"><em>Copy Scan</em> <b>Akte Kenal Lahir</b> Asli;</li>
								<li style="text-align:justify"><em>Copy Scan</em> Surat Pengantar dari <b>Desa/Kelurahan</b>;</li>
								<li style="text-align:justify"><em>Copy Scan</em> Surat Pengantar dari <b>Kecamatan</b>;</li>
								<li style="text-align:justify"><em>Copy Scan</em> Surat Pengantar dari <b>Polsek</b>;</li>
								<li style="text-align:justify"><em>Copy Scan</em> <b>Identitas lain</b> bagi pemohon yang <u>belum</u> memenuhi syarat memperoleh KTP;</li>
								<li style="text-align:justify"><em>Copy Scan</em> <b>Foto diri ukuran 4 x 6</b> (bukan foto selfie) berwarna latar belakang merah, berpakaian sopan, tampak muka. Bagi pemohon yang mengenakan jilbab harus tampak muka;</li>
								<li style="text-align:justify"><em>Copy Scan</em> <b>Paspor,</b> bagi WNI yang akan keluar negeri dalam rangka sekolah/kunjungan/penerbitan VISA;</li>
							</ul>
						</blockquote>
						<p style="margin-left:20px; text-align:justify">Pada saat pengambilan SKCK di loket pelayanan, pemohon <b>WAJIB membawa 4 Hal </b> (print (1) & (2) di sini) yaitu:</p>
						<p style="margin-left:20px; text-align:justify">(1) Menunjukkan <b>slip tanda terima/menyebutkan no. registrasi e-SKCK</b>,</p>
						<p style="margin-left:20px; text-align:justify">(2) Menyerahkan <b>daftar pertanyaan dan jawaban e-SKCK & Kartu TIK</b> (yg sudah ditanda tangani oleh aplikan) yang telah dijawab saat aplikasi, dan</p>
						<p style="margin-left:20px; text-align:justify">(3) Menunjukkan <b>dokumen-dokumen asli yang dipersyaratkan</b>, kepada petugas, guna keperluan verifikasi.</p>
						<p style="margin-left:20px; text-align:justify">(4) Menyerahkan <b>pas foto 4x6</b> sebanyak <b>6 lembar.</b></p>
			  			<a style="margin-left:20px; text-align:right" href="#" class="btn btn-success" onClick="window.print()">
			  				 <span class="glyphicon glyphicon-print"></span> &nbsp;Print Tanda Terima e-SKCK
			  			</a>
			  			<a style="margin-left:20px; text-align:right" href="<?php echo base_url("apply/print_pertanyaan")."/".$skck_id; ?>" target="_blank" class="btn btn-success">
			  				 <span class="glyphicon glyphicon-print"></span> &nbsp;Print Daftar Pertanyaan e-SKCK
			  			</a>
			  			<a style="margin-left:20px; text-align:right" href="<?php echo base_url("apply/print_kartu")."/".$skck_id; ?>" target="_blank" class="btn btn-success">
			  				 <span class="glyphicon glyphicon-print"></span> &nbsp;Print Kartu TIK e-SKCK
			  			</a>
			  		</td>
		  		</tr>
		  	</tbody>
		  </table>
	    </div>
	</div>
</div>
<style>
	#qrcode img{
		display: block;
		margin-left: auto;
		margin-right: auto;
	}
</style>
<script type="text/javascript">
	var qrcode = new QRCode(document.getElementById("qrcode"), {
	    text: <?= '"'.$skck_registration_name."-".$skck_registration_no."-".date("d F Y").'"' ?>,
	    width: 170,
	    height: 160,
	    colorDark : "#000000",
	    colorLight : "#ffffff",
	    correctLevel : QRCode.CorrectLevel.H
	});
</script>
<?php } ?>
<?php if($success == 'false') { ?>
<div class="row">
	<div class="col-md-12">
		<div class="alert alert-dismissible alert-danger">
		  <button type="button" class="close" data-dismiss="alert">×</button>
		  <strong>Mohon Maaf, </strong> <u>terdapat kegagalan proses penyimpanan.</u>
		  Silakan coba mendaftarkan permohonan SKCK anda sekali lagi.
		  <a class="btn btn-primary btn-sm" href="<?php echo base_url('apply'); ?>" role="button">Ulangi Pengajuan SKCK</a>
		</div>
	</div>
</div>
<?php } ?>
