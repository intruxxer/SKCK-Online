
    <div class="row">
        <div class="col-lg-12">
            <div class="list-group">
                <a href="#" class="list-group-item">
                  <h4 class="list-group-item-heading"><b>Pertama,</b></h4>
                  <p class="list-group-item-text" style="text-align:justify">Carilah data e-SKCK anda pada database kami. Pastikan bahwa anda <u>harus pernah</u>, minimal satu kali sebelumnya, menggunakan sistem SKCK Online ini. Bila anda sudah <u>pernah mendapat SKCK tradisional namun tidak melalui SKCK Online,</u> maka SKCK anda akan terhitung sebagai <u>Aplikasi SKCK Baru</u>. Untuk e-SKCK, Anda dapat mencari data aplikasi e-SKCK anda terdahulu dengan memasukkan <b>No. KTP/KITAS/KITAP</b> anda DAN JUGA <b>No. Registrasi e-SKCK</b> yang terdahulu.</p>
                </a>
                <a href="#" class="list-group-item">
                  <h4 class="list-group-item-heading"><b>Kedua,</b></h4>
                  <p class="list-group-item-text" style="text-align:justify">Apabila <u>ditemukan</u>, maka anda akan <b>(1) disajikan formulir pengajuan perpanjangan</b> yang serupa dengan aplikasi SKCK baru, namun telah terisi sebelumnya dengan data-data anda yang lama. <b>(2) a) Apabila tidak ada perubahan,</b> silakan klik tombol pengajuan. <b>(2) b) Apabila ada perubahan yang dirasa perlu,</b> silakan ubah dan perbaharui terlebih dahulu secara jelas dan akurat, kemudian baru mengajukan permohonan perpanjangan. <b> (2) c) Apabila tidak ditemukan,</b> walaupun <u>sudah pernah mendapat SKCK melalui sistem online</u> ini, silakan datang ke Polres untuk memastikan keabsahan data dan eligibilitas anda (apabila tersangkut kasus hukum, anda bisa saja tidak diperbolehkan untuk diberikan SKCK).</p>
                </a>
            </div><hr/>
        </div>
    </div>
    <?php  $attributes = array('id' => '');
          echo form_open('apply/cariskckperpanjangan', $attributes);
        ?>
      <div class="row">
        <div class="col-lg-5">
            <div class="form-group">
                <label for="applicantid">Masukkan No. KTP Anda pada e-SKCK Sebelumnya</label>
                <input type="text" class="form-control" placeholder="Cth: 2062011202860006" name="applicantid">
            </div>
        </div>
        <div class="col-lg-4">
            <div class="form-group">
                <label for="applicationid">Masukkan No. Registrasi e-SKCK Sebelumnya</label>
                <input type="text" class="form-control" placeholder="Cth: ND020414890" name="applicationid">
            </div>
        </div>
        <div class="col-lg-2">
            <div class="form-group">
              <label for="submitSKCKextendingSearch">Cari e-SKCK Sebelumnya</label>
              <button type="submit" class="btn btn-default" name="submitSKCKextendingSearch">
                <span class="glyphicon glyphicon-search"></span> &nbsp;Cari e-SKCK Anda
              </button>
            </div>
        </div>
    </div>
  </form>
