<script type="text/javascript">
      function startIntro(){
        var intro = introJs();
          intro.setOptions({
            steps: [
              {
                intro: '<p style="text-align:justify;">Mari kita pelajari fitur-fitur dari sistem aplikasi SKCK secara online.</p>'
              },
              {
                element: '#step1',
                intro: '<p style="text-align:justify;">Ini adalah panel utama untuk mengakses fitur sistem aplikasi ini. <br/> (1) Melalui Menu <b>Aplikasi SKCK Baru</b>, anda dapat mengajukan permohonan SKCK secara online. <br/> (2) Melalui Menu <b>Tentang SKCK</b>, anda dapat mempelajari tata cara, prosedur, serta dokumen pendaftaran SKCK via online.</p>',
                position: 'bottom'
              },
              {
                element: '#step2',
                intro: '<p style="text-align:justify;">Apabila anda sudah mengajukan permohonan aplikasi, anda dapat memasukkan <b>No. registrasi</b> anda untuk mengecek status permohonan anda apakah sudah <u>terdaftar</u>, <u>sudah lengkap</u>, atau <u>sudah diterbitkan</u>.</p>',
                position: 'left'
              },
              {
                intro: '<p style="text-align:justify;">Selamat menggunakan Sistem SKCK Online dari Polres Tulung Agung.</p><p style="text-align:justify;">Apabila ada kesulitan atau pertanyaan, silakan kontak kami di Telpon: +6281217294454 <br/>Email: polrestulungagung01@gmail.com <br/>PIN BB: 7EB44BC6 <br/>FB: fb.com/restulungagung <br/>Twiter: @Polres_TA <br/>LINE  polres_tulungagung <br/>WECHAT: polres_tulungagung</p>'
              }
            ]
          });

          intro.start();
      }
</script>
