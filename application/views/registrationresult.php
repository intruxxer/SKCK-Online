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
			  		<th>No. e-SKCK</th>
			  		<th>Petunjuk Selanjutnya</th>
		  		</tr>
		  	</thead>
		  	<tbody>
				<tr>
			  		<td><span class="label label-primary"><?= $skck_registration_no; ?></span></td>
			  		<td>
				  		Selamat, anda telah berhasil melakukan pendaftaran permohonan SKCK di Polres Tulung Agung. Silakan catat No. Aplikasi/Registrasi e-SKCK
				  		anda: <h3><b><?= $skck_registration_no; ?></b></h3><div id="qrcode"></div><br/> atau silakan print halaman ini. Selanjutnya silakan lengkapi persyaratan yg belum
				  		ada seperti pengambilan sidik jari di Polres. Bila sudah ada, silakan bawa: <br/>
				  		<p style="text-align:justify"><strong>Dokumen yang dipersyaratkan untuk permohonan SKCK secara <em>online</em> adalah sebagai berikut :</strong></p>
						<p style="text-align:justify">1. Pemohon Warga Negara Indonesia (WNI):</p>
						<blockquote>
							<ul>
								<li style="text-align:justify"><em>Copy </em> KTP asli;</li>
								<li style="text-align:justify"><em>Copy </em> Kartu Keluarga (KK) asli;</li>
								<li style="text-align:justify"><em>Copy </em> Akte Kenal Lahir asli;</li>
								<li style="text-align:justify"><em>Copy </em> identitas lain bagi pemohon yang belum memenuhi syarat memperoleh KTP;</li>
								<li style="text-align:justify"><em>Copy </em> foto diri ukuran 4 x 6 berwarna latar belakang merah, berpakaian sopan, tampak muka. Bagi pemohon yang mengenakan jilbab harus tampak muka;</li>
								<li style="text-align:justify"><em>Copy </em> Paspor bagi WNI yang akan keluar negeri dalam rangka sekolah/kunjungan/penerbitan VISA;</li>
							</ul>
						</blockquote>


						<p style="text-align:justify">2. Pemohon Warga Negara Asing (WNA):</p>
						<blockquote>
							<ul>
								<li style="text-align:justify"><em>Copy</em> Surat permohonan (asli) sponsor, perusahaan, lembaga yang mempekerjakan, menggunakan atau yang bertanggung jawab terhadap WNA;</li>
								<li style="text-align:justify"><em>Copy</em> Paspor asli;</li>
								<li style="text-align:justify"><em>Copy</em> Kartu Izin Tinggal Terbatas (KITAS) asli atau Kartu Izin Tinggal Tetap (KITAP) asli;</li>
								<li style="text-align:justify"><em>Copy</em> foto diri ukuran 4 x 6 berwarna latar belakang kuning, berpakaian sopan, tampak muka. Bagi pemohon yang mengenakan jilbab harus tampak muka;</li>
								<li style="text-align:justify"><em>Copy</em> Surat Nikah asli dan KTP asli suami/istri bagi WNA yang mendapat sponsor dari WNI.</li>
							</ul>
						</blockquote>
						<p style="margin-left:20px; text-align:justify">Pada saat pengambilan SKCK di loket pelayanan, pemohon WAJIB menunjukkan dokumen asli yang dipersyaratkan di atas kepada petugas loket guna keperluan verifikasi.</p>

			  			<a style="margin-left:20px; text-align:right" href="#" class="btn btn-success" onClick="window.print()">
			  				 <span class="glyphicon glyphicon-print"></span> &nbsp;Print Tanda Terima
			  			</a>
			  		</td>
		  		</tr>
		  	</tbody>
		  </table>
	    </div>
	</div>
</div>
<script type="text/javascript">
	var qrcode = new QRCode(document.getElementById("qrcode"), {
	    text: <?= '"'.$skck_registration_no.'"' ?>,
	    width: 160,
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
		</div>
	</div>
</div>
<?php } ?>
