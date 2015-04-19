<div class="row">
    <div class="col-md-12">
        <h2>Formulir Aplikasi SKCK</h2>
        <?php  $attributes = array('id' => 'wizard_form');
          echo form_open_multipart('apply/register', $attributes);
        ?>
           <fieldset>
                <legend>Data Pribadi</legend>
                <div class="row">
                    <div class="col-lg-12">
                        <p style="text-align:justify">Perhatikan, Bagian yg ditandai <font color="red">*</font> harus diisi dengan lengkap & jelas.</p>
                        <hr/>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label for="name">Nama Lengkap<font color="red">*</font></label>
                            <input type="text" class="form-control" id="name" name="name" placeholder="Nama Anda sesuai KTP" required data-parsley-group="block0">
                        </div>
                        <div class="form-group">
                            <label for="birthplace">Tempat Lahir<font color="red">*</font></label>
                            <input type="text" class="form-control" id="birthplace" name="birthplace" placeholder="Tempat Lahir" required data-parsley-group="block0">
                        </div>
                        <div class="form-group">
                            <label for="citizenship">Kewarganegaraan<font color="red">*</font></label>
                            <select class="form-control" name="citizenship" data-parsley-group="block0" required>
                                <option value="I">Warga Negara Indonesia</option>
                                <option value="A">Warga Negara Asing</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="id">No. KTP/KITAP/KITAS<font color="red">*</font></label>
                            <input type="text" class="form-control" id="id" name="id" placeholder="No. KTP (WNI) atau KITAP/KITAS Anda" required data-parsley-group="block0">
                        </div>
                        <div class="form-group">
                            <label for="address_doc">Alamat sesuai KTP<font color="red">*</font></label>
                            <textarea class="form-control" name="address_doc" placeholder="Jalan, RT/RW, Kelurahan, Kecamatan, Kota, Kode Pos" required rows="2" data-parsley-group="block0"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="phone">No. Telpon/Handphone<font color="red">*</font></label>
                            <input type="text" class="form-control" id="phone" name="phone" placeholder="Cth: 081246684578" required data-parsley-group="block0" data-parsley-type="number">
                        </div>
                        <div class="form-group">
                            <label for="marital_status">Status Perkawinan<font color="red">*</font></label>
                            <select class="form-control" name="marital_status" data-parsley-group="block0" required>
                                <option value="K">Kawin</option>
                                <option value="T">Tidak Kawin</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label for="sex">Jenis Kelamin<font color="red">*</font></label>
                            <select class="form-control" name="sex" data-parsley-group="block0" required>
                                <option value="M">Laki-Laki</option>
                                <option value="F">Perempuan</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="birthdate">Tanggal Lahir<font color="red">*</font></label>
                            <div class='input-group date'>
                                <input type="text" class="form-control" id="datetimepicker1" name="birthdate" placeholder="<?php echo date("d-m-Y"); ?>" required data-parsley-group="block0">
                                <span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span></span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="religion">Agama<font color="red">*</font></label>
                            <select class="form-control" name="religion" data-parsley-group="block0" required>
                                <option value="Islam">Islam</option>
                                <option value="Katolik">Katolik</option>
                                <option value="Protestan">Protestan</option>
                                <option value="Hindu">Hindu</option>
                                <option value="Buddha">Buddha</option>
                                <option value="Konghucu">Konghucu</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="passport">No. Passport</label>
                            <input type="text" class="form-control" id="passport" name="passport" placeholder="No Passport" data-parsley-group="block0">
                        </div>
                        <div class="form-group">
                            <label for="address_now">Alamat Domisili Sekarang</label>
                            <textarea class="form-control" name="address_now" placeholder="Jalan, RT/RW, Kelurahan, Kecamatan, Kota, Kode Pos. Kosongkan apabila sama dengan alamat di KTP." rows="2"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="occupation">Pekerjaan<font color="red">*</font></label>
                            <input type="text" class="form-control" id="occupation" name="occupation" placeholder="Cth: Wiraswasta" required data-parsley-group="block0">
                        </div>
                    </div>
                </div>

            </fieldset>
            <fieldset>
                <legend>Keluarga</legend>
                <div class="row">
                    <div class="col-lg-12">
                        <p style="text-align:justify">Perhatikan, Bagian yg ditandai <font color="red">*</font> harus diisi dengan lengkap & jelas.</p>
                        <hr/>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4">
                        <div class="form-group">
                            <label for="spouse_type">Pasangan<font color="red">*</font></label>
                            <select class="form-control" name="spouse_type">
                                <option value="I">Istri</option>
                                <option value="S">Suami</option>
                                <option value="N" selected="selected">Tidak Ada Pasangan</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="spouse_name">Nama</label>
                            <input type="text" class="form-control" id="spouse_name" name="spouse_name" placeholder="Bila Ada, Nama Suami/Istri Anda">
                        </div>
                        <div class="form-group">
                            <label for="spouse_age">Umur</label>
                            <select class="form-control" name="spouse_age">
                                <?php for($i=17; $i<66; $i++){ ?>
                                <?php echo '<option value="'.$i.'">'.$i.'</option>'; ?>
                                <?php } ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="spouse_religion">Agama</label>
                            <select class="form-control" name="spouse_religion">
                                <option value="Islam">Islam</option>
                                <option value="Katolik">Katolik</option>
                                <option value="Protestan">Protestan</option>
                                <option value="Hindu">Hindu</option>
                                <option value="Buddha">Buddha</option>
                                <option value="Konghucu">Konghucu</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="spouse_citizenship">Kewarganegaraan</label>
                            <select class="form-control" name="spouse_citizenship">
                                <option value="I">Warga Negara Indonesia</option>
                                <option value="A">Warga Negara Asing</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="spouse_occupation">Pekerjaan</label>
                            <input type="text" class="form-control" id="spouse_occupation" name="spouse_occupation" placeholder="Cth. Wiraswasta">
                        </div>
                        <div class="form-group">
                            <label for="spouse_address">Alamat Domisili Sekarang</label>
                            <textarea class="form-control" name="spouse_address" placeholder="Jalan, RT/RW, Kelurahan, Kecamatan, Kota, Kode Pos." rows="2"></textarea>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="form-group">
                            <label for="parent_type">Orang Tua</label>
                            <p class="form-control-static">Ayah</p>
                        </div>
                        <div class="form-group">
                            <label for="father_name">Nama<font color="red">*</font></label>
                            <input type="text" class="form-control" id="father_name" name="father_name" placeholder="Nama Ayah Anda" data-parsley-group="block1" required>
                        </div>
                        <div class="form-group">
                            <label for="father_age">Umur<font color="red">*</font></label>
                            <select class="form-control" name="father_age" data-parsley-group="block1" required>
                                <?php for($i=17; $i<66; $i++){ ?>
                                <?php echo '<option value="'.$i.'">'.$i.'</option>'; ?>
                                <?php } ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="father_religion">Agama<font color="red">*</font></label>
                            <select class="form-control" name="father_religion" data-parsley-group="block1" required>
                                <option value="Islam">Islam</option>
                                <option value="Katolik">Katolik</option>
                                <option value="Protestan">Protestan</option>
                                <option value="Hindu">Hindu</option>
                                <option value="Buddha">Buddha</option>
                                <option value="Konghucu">Konghucu</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="father_citizenship">Kewarganegaraan<font color="red">*</font></label>
                            <select class="form-control" name="father_citizenship" data-parsley-group="block1" required>
                                <option value="I">Warga Negara Indonesia</option>
                                <option value="A">Warga Negara Asing</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="father_occupation">Pekerjaan<font color="red">*</font></label>
                            <input type="text" class="form-control" id="father_occupation" name="father_occupation" placeholder="Cth: Wiraswasta" data-parsley-group="block1" required>
                        </div>
                        <div class="form-group">
                            <label for="father_address">Alamat Domisili Sekarang<font color="red">*</font></label>
                            <textarea class="form-control" name="father_address" placeholder="Jalan, RT/RW, Kelurahan, Kecamatan, Kota, Kode Pos." rows="2" data-parsley-group="block1" required></textarea>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="form-group">
                            <label for="parent_type">Orang Tua</label>
                            <p class="form-control-static">Ibu</p>
                        </div>
                        <div class="form-group">
                            <label for="mother_name">Nama<font color="red">*</font></label>
                            <input type="text" class="form-control" id="mother_name" name="mother_name" placeholder="Nama Ibu Anda" required data-parsley-group="block1">
                        </div>
                        <div class="form-group">
                            <label for="mother_age">Umur<font color="red">*</font></label>
                            <select class="form-control" name="mother_age" data-parsley-group="block1" required>
                                <?php for($i=17; $i<66; $i++){ ?>
                                <?php echo '<option value="'.$i.'">'.$i.'</option>'; ?>
                                <?php } ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="mother_religion">Agama<font color="red">*</font></label>
                            <select class="form-control" name="mother_religion" data-parsley-group="block1" required>
                                <option value="Islam">Islam</option>
                                <option value="Katolik">Katolik</option>
                                <option value="Protestan">Protestan</option>
                                <option value="Hindu">Hindu</option>
                                <option value="Buddha">Buddha</option>
                                <option value="Konghucu">Konghucu</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="mother_citizenship">Kewarganegaraan<font color="red">*</font></label>
                            <select class="form-control" name="mother_citizenship" data-parsley-group="block1" required>
                                <option value="I">Warga Negara Indonesia</option>
                                <option value="A">Warga Negara Asing</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="mother_occupation">Pekerjaan<font color="red">*</font></label>
                            <input type="text" class="form-control" id="mother_occupation" name="mother_occupation" placeholder="Cth. Wiraswasta" required data-parsley-group="block1">
                        </div>
                        <div class="form-group">
                            <label for="mother_address">Alamat Domisili Sekarang<font color="red">*</font></label>
                            <textarea class="form-control" name="mother_address" placeholder="Jalan, RT/RW, Kelurahan, Kecamatan, Kota, Kode Pos." rows="2" data-parsley-group="block1" required></textarea>
                        </div>
                    </div>
                </div>
                <div class="row"><hr><p style="text-align:center;font-size:16px"><b><u>Saudara Terdekat</u><font color="red">*</font></b></p></div>
                <div class="row">
                    <div class="col-lg-3">
                        <div class="form-group">
                            <label for="siblings_names_1">Nama Saudara 1</label>
                            <input type="text" class="form-control" id="siblings_names_1" name="siblings_names_1" placeholder="Saudara Kandung/Tiri">
                        </div>
                        <div class="form-group">
                            <label for="siblings_names_2">Nama Saudara 2</label>
                            <input type="text" class="form-control" id="siblings_names_2" name="siblings_names_2" placeholder="Saudara Kandung/Tiri">
                        </div>
                        <div class="form-group">
                            <label for="siblings_names_3">Nama Saudara 3</label>
                            <input type="text" class="form-control" id="siblings_names_3" name="siblings_names_3" placeholder="Saudara Kandung/Tiri">
                        </div>
                    </div>
                    <div class="col-lg-2">
                        <div class="form-group">
                            <label for="siblings_ages_1">Umur Saudara 1</label>
                            <select class="form-control" name="siblings_ages_1">
                                <?php for($i=17; $i<66; $i++){ ?>
                                <?php echo '<option value="'.$i.'">'.$i.'</option>'; ?>
                                <?php } ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="siblings_ages_2">Umur Saudara 2</label>
                            <select class="form-control" name="siblings_ages_2">
                                <?php for($i=17; $i<66; $i++){ ?>
                                <?php echo '<option value="'.$i.'">'.$i.'</option>'; ?>
                                <?php } ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="siblings_ages_3">Umur Saudara 3</label>
                            <select class="form-control" name="siblings_ages_3">
                                <?php for($i=17; $i<66; $i++){ ?>
                                <?php echo '<option value="'.$i.'">'.$i.'</option>'; ?>
                                <?php } ?>
                            </select>
                        </div>
                    </div>
                    <div class="col-lg-7">
                        <div class="form-group">
                            <label for="siblings_addresses_1">Alamat Saudara 1</label>
                            <textarea class="form-control" rows="1" id="siblings_addresses_1" name="siblings_addresses_1" placeholder="Jalan, RT/RW, Kelurahan, Kecamatan, Kota, Kode Pos."></textarea>
                        </div>
                        <div class="form-group">
                            <label for="siblings_addresses_2">Alamat Saudara 2</label>
                            <textarea class="form-control" rows="1" id="siblings_addresses_2" name="siblings_addresses_2" placeholder="Jalan, RT/RW, Kelurahan, Kecamatan, Kota, Kode Pos."></textarea>
                        </div>
                        <div class="form-group">
                            <label for="siblings_addresses_3">Alamat Saudara 3</label>
                            <textarea class="form-control" rows="1" id="siblings_addresses_3" name="siblings_addresses_3" placeholder="Jalan, RT/RW, Kelurahan, Kecamatan, Kota, Kode Pos."></textarea>
                        </div>
                    </div>
                </div>
            </fieldset>
            <fieldset>
                <legend>Pendidikan</legend>
                <div class="row">
                    <div class="col-lg-5">
                        <div class="form-group">
                            <label for="edu_primary">Sekolah Dasar</label>
                            <input type="text" class="form-control" id="edu_primary" name="edu_primary" placeholder="Cth: SDN 1 Karang Ploso">
                        </div>
                        <div class="form-group">
                            <label for="edu_secondary">Sekolah Menengah Pertama</label>
                            <input type="text" class="form-control" id="edu_secondary" name="edu_secondary" placeholder="Cth: SMPN 1 Gampeng Rejo">
                        </div>
                        <div class="form-group">
                            <label for="edu_tertiary">Sekolah Menengah Atas</label>
                            <input type="text" class="form-control" id="edu_tertiary" name="edu_tertiary" placeholder="Cth: SMAN 2 Boyolangu">
                        </div>
                        <div class="form-group">
                            <label for="edu_bachelor">Sarjana (S1)</label>
                            <input type="text" class="form-control" id="edu_bachelor" name="edu_bachelor" placeholder="Cth: Fakultas Pertanian, Univ. Brawijaya">
                        </div>
                        <div class="form-group">
                            <label for="edu_master">Master (S2)</label>
                            <input type="text" class="form-control" id="edu_master" name="edu_master" placeholder="Cth: Master of Forest Science, Osaka University">
                        </div>
                        <div class="form-group">
                            <label for="edu_doctoral">Doktoral (S3)</label>
                            <input type="text" class="form-control" id="edu_doctoral" name="edu_doctoral" placeholder="Cth: PhD of Soil Science, Groningen University">
                        </div>
                    </div>
                     <div class="col-lg-3">
                        <div class="form-group">
                            <label for="edu_primary_year">Tahun Lulus</label>
                            <input type="text" class="form-control" id="edu_primary_year" name="edu_primary_year" placeholder="Cth: 1996">
                        </div>
                        <div class="form-group">
                            <label for="edu_secondary_year">Tahun Lulus</label>
                            <input type="text" class="form-control" id="edu_secondary_year" name="edu_secondary_year" placeholder="Cth: 1999">
                        </div>
                        <div class="form-group">
                            <label for="edu_tertiary_year">Tahun Lulus</label>
                            <input type="text" class="form-control" id="edu_tertiary_year" name="edu_tertiary_year" placeholder="Cth: 2002">
                        </div>
                        <div class="form-group">
                            <label for="edu_bachelor_year">Tahun Lulus</label>
                            <input type="text" class="form-control" id="edu_bachelor_year" name="edu_bachelor_year" placeholder="Cth: 2006">
                        </div>
                        <div class="form-group">
                            <label for="edu_maste_yearr">Tahun Lulus</label>
                            <input type="text" class="form-control" id="edu_master_year" name="edu_master_year" placeholder="Cth: 2009">
                        </div>
                        <div class="form-group">
                            <label for="edu_doctoral_year">Tahun Lulus</label>
                            <input type="text" class="form-control" id="edu_doctoral_year" name="edu_doctoral_year" placeholder="Cth: 2014">
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="form-group">
                            <label for="edu_primary_city">Kota/Negara</label>
                            <input type="text" class="form-control" id="edu_primary_city" name="edu_primary_city" placeholder="Cth: Surabaya">
                        </div>
                        <div class="form-group">
                            <label for="edu_secondary_city">Kota/Negara</label>
                            <input type="text" class="form-control" id="edu_secondary_city" name="edu_secondary_city" placeholder="Cth: Kediri">
                        </div>
                        <div class="form-group">
                            <label for="edu_tertiary_city">Kota/Negara</label>
                            <input type="text" class="form-control" id="edu_tertiary_city" name="edu_tertiary_city" placeholder="Cth: Tulung Agung">
                        </div>
                        <div class="form-group">
                            <label for="edu_bachelor_city">Kota/Negara</label>
                            <input type="text" class="form-control" id="edu_bachelor_city" name="edu_bachelor_city" placeholder="Cth: Bogor">
                        </div>
                        <div class="form-group">
                            <label for="edu_master_city">Kota/Negara</label>
                            <input type="text" class="form-control" id="edu_master_city" name="edu_master_city" placeholder="Cth: Osaka, Jepang">
                        </div>
                        <div class="form-group">
                            <label for="edu_doctoral_city">Kota/Negara</label>
                            <input type="text" class="form-control" id="edu_doctoral_city" name="edu_doctoral_city" placeholder="Cth: Groningen, Netherland">
                        </div>
                    </div>
                </div>
            </fieldset>
            <fieldset>
                <legend>Perkara Pidana</legend>
                <div class="row">
                    <div class="col-lg-12">
                        <p style="text-align:justify">Perhatikan, Bagian yg ditandai <font color="red">*</font> harus diisi dengan lengkap & jelas.</p>
                        <hr/>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label for="pidana">Apakah Saudara pernah tersangkut perkara pidana?<font color="red">*</font></label>
                            <select class="form-control" name="pidana" required data-parsley-group="block3">
                                <option value="TP">Tidak Pernah</option>
                                <option value="PH">Pernah</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="pidana_apa">Bila pernah, dalam perkara apa?</label>
                            <input type="text" class="form-control" id="pidana_apa" name="pidana_apa" placeholder="Cth: Pencurian/Penipuan">
                        </div>
                        <div class="form-group">
                            <label for="pidana_putusanakhir">Bila pernah, Bagaimana putusannya/vonis hakim?</label>
                            <input type="text" class="form-control" id="pidana_putusanakhir" name="pidana_putusanakhir" placeholder="Cth: Dibebaskan dari segala tuduhan">
                        </div>
                        <div class="form-group">
                            <label for="pidana_proses">Apakah Saudara saat ini sedang dalam proses perkara pidana?</label>
                            <select class="form-control" name="pidana_proses">
                                <option value="TP">Tidak Dalam Proses</option>
                                <option value="DP">Sedang Proses</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label for="pidana_kasus">Bila pernah, dalam perkara apa?</label>
                            <input type="text" class="form-control" id="pidana_kasus" name="pidana_kasus" placeholder="Cth: Penipuan">
                        </div>
                        <div class="form-group">
                            <label for="pidana_sampaimana">Bila pernah, sampai sejauh mana proses hukumnya?</label>
                            <input type="text" class="form-control" id="pidana_sampaimana" name="pidana_sampaimana" placeholder="Cth: Persidangan/Penyidikan Polres">
                        </div>
                        <div class="form-group">
                            <label for="pidana_putusansementara">Bila pernah, Bagaimana hasil/putusan sementara hingga kini?</label>
                            <input type="text" class="form-control" id="pidana_putusansementara" name="pidana_putusansementara" placeholder="Cth: Penahanan Kota">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <hr>
                </div>
                <legend>Pelanggaran</legend>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="form-group">
                            <label for="pelanggaran">Apakah Saudara pernah melanggar hukum dan/atau norma-norma sosial?<font color="red">*</font></label>
                            <select class="form-control" name="pelanggaran" required data-parsley-group="block3">
                                <option value="TP">Tidak Pernah</option>
                                <option value="PH">Pernah</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="pelanggaran_apa">Bila pernah, dalam perkara apa?</label>
                            <input type="text" class="form-control" id="pelanggaran_apa" name="pelanggaran_apa" placeholder="Cth: Pelanggaran hukum adat">
                        </div>
                        <div class="form-group">
                            <label for="pelanggaran_sampaimana1">Bagaimana proses hukumnya sejauh ini?</label>
                            <input type="text" class="form-control" id="pelanggaran_sampaimana" name="pelanggaran_sampaimana" placeholder="Cth: Dinyatakan tidak melanggar hukum adat">
                        </div>
                </div>
            </fieldset>
            <fieldset>
                <legend>Ciri Fisik</legend>
                <div class="row">
                    <div class="col-lg-12">
                        <p style="text-align:justify">Perhatikan, Bagian yg ditandai <font color="red">*</font> harus diisi dengan lengkap & jelas.</p>
                        <hr/>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label for="rambut">Rambut Anda?<font color="red">*</font></label>
                            <input type="text" class="form-control" id="rambut" name="rambut" placeholder="Cth: Hitam Ikal" required data-parsley-group="block4">
                        </div>
                        <div class="form-group">
                            <label for="wajah">Bentuk Wajah Anda?<font color="red">*</font></label>
                            <input type="text" class="form-control" id="wajah" name="wajah" placeholder="Cth: Oval" required data-parsley-group="block4">
                        </div>
                        <div class="form-group">
                            <label for="kulit">Tipe Warna Kulit?<font color="red">*</font></label>
                            <input type="text" class="form-control" id="kulit" name="kulit" placeholder="Cth: Sawo Matang" required data-parsley-group="block4">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label for="tinggibadan">Tinggi Badan Anda?<font color="red">*</font> (cm)</label>
                            <input type="text" class="form-control" id="tinggibadan" name="tinggibadan" placeholder="Cth: 168" required data-parsley-group="block4" data-parsley-type="number" data-parsley-length="[0, 3]">
                        </div>
                        <div class="form-group">
                            <label for="beratbadan">Berat Badan Anda?<font color="red">*</font> (kg)</label>
                            <input type="text" class="form-control" id="beratbadan" name="beratbadan" placeholder="Cth: 72" required data-parsley-group="block4" data-parsley-type="number" data-parsley-length="[0, 2]">
                        </div>
                        <div class="form-group">
                            <label for="tandakhusus">Tanda Khusus di Badan Anda?</label>
                            <input type="text" class="form-control" id="tandakhusus" name="tandakhusus" placeholder="Cth: Bekas Luka di Pelipis, Tato di Paha">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <hr>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="form-group">
                            <label for="rumussidikjari1">Rumus Sidik Jari 1? (Abaikan ini bila belum ada/belum mengurus di Polres)</label>
                            <input type="text" class="form-control" id="rumussidikjari1" name="rumussidikjari2" placeholder="Cth:9 I 2 4">
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="form-group">
                            <label for="rumussidikjari2">Rumus Sidik Jari 2? (Abaikan ini bila belum ada/belum mengurus di Polres)</label>
                            <input type="text" class="form-control" id="rumussidikjari2" name="rumussidikjari2" placeholder="Cth: 8 I 2 2">
                        </div>
                    </div>
                </div>
            </fieldset>
            <fieldset>
                <legend>Lampiran</legend>
                <div class="row">
                    <div class="col-lg-4">
                        <div class="form-group">
                            <div class="fileinput fileinput-new" data-provides="fileinput">
                                <div class="fileinput-new thumbnail" style="width: 150px; height: 150px;">
                                    <img src="http://placehold.it/150x150&text=4x6">
                                </div>
                                <div class="fileinput-preview fileinput-exists thumbnail" style="max-width: 150px; max-height: 200px;"></div>
                                <div>
                                    <span class="btn btn-default btn-file">
                                        <span class="fileinput-new" lang="id">Pilih Gambar/Scan</span>
                                        <span class="fileinput-exists" lang="id">Ganti</span>
                                        <input type="file" name="userfiles[]" id="idfile">
                                    </span>
                                    <a href="#" class="btn btn-default fileinput-exists" data-dismiss="fileinput" lang="id">Hapus</a>
                                </div>
                                <p class="help-block" style="text-align:justify;">Unggah Gambar KTP/KITAP/KITAS</p>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="fileinput fileinput-new" data-provides="fileinput">
                                <div class="fileinput-new thumbnail" style="width: 150px; height: 150px;">
                                    <img src="http://placehold.it/150x150&text=Akte Lahir">
                                </div>
                                <div class="fileinput-preview fileinput-exists thumbnail" style="max-width: 150px; max-height: 200px;"></div>
                                <div>
                                    <span class="btn btn-default btn-file">
                                        <span class="fileinput-new" lang="id">Pilih Gambar/Scan</span>
                                        <span class="fileinput-exists" lang="id">Ganti</span>
                                        <input type="file" name="userfiles[]" id="birthcertfile">
                                    </span>
                                    <a href="#" class="btn btn-default fileinput-exists" data-dismiss="fileinput" lang="id">Hapus</a>
                                </div>
                                <p class="help-block" style="text-align:justify;">Unggah Gambar Akte Kelahiran</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="form-group">
                            <div class="fileinput fileinput-new" data-provides="fileinput">
                                <div class="fileinput-new thumbnail" style="width: 150px; height: 150px;">
                                    <img src="http://placehold.it/150x150&text=KK">
                                </div>
                                <div class="fileinput-preview fileinput-exists thumbnail" style="max-width: 150px; max-height: 200px;"></div>
                                <div>
                                    <span class="btn btn-default btn-file">
                                        <span class="fileinput-new" lang="id">Pilih Gambar/Scan</span>
                                        <span class="fileinput-exists" lang="id">Ganti</span>
                                        <input type="file" name="userfiles[]" id="familycardfile">
                                    </span>
                                    <a href="#" class="btn btn-default fileinput-exists" data-dismiss="fileinput" lang="id">Hapus</a>
                                </div>
                                <p class="help-block" style="text-align:justify;">Unggah Gambar Kartu Keluarga</p>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="fileinput fileinput-new" data-provides="fileinput">
                                <div class="fileinput-new thumbnail" style="width: 150px; height: 150px;">
                                    <img src="http://placehold.it/150x150&text=Sidik Jari">
                                </div>
                                <div class="fileinput-preview fileinput-exists thumbnail" style="max-width: 150px; max-height: 200px;"></div>
                                <div>
                                    <span class="btn btn-default btn-file">
                                        <span class="fileinput-new" lang="id">Pilih Gambar/Scan</span>
                                        <span class="fileinput-exists" lang="id">Ganti</span>
                                        <input type="file" name="userfiles[]" id="fingerprintfile">
                                    </span>
                                    <a href="#" class="btn btn-default fileinput-exists" data-dismiss="fileinput" lang="id">Hapus</a>
                                </div>
                                <p class="help-block" style="text-align:justify;">Unggah Gambar Kartu Sidik Jari</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="form-group">
                            <div class="fileinput fileinput-new" data-provides="fileinput">
                                <div class="fileinput-new thumbnail" style="width: 150px; height: 150px;">
                                    <img src="http://placehold.it/150x150&text=Paspor">
                                </div>
                                <div class="fileinput-preview fileinput-exists thumbnail" style="max-width: 150px; max-height: 200px;"></div>
                                <div>
                                    <span class="btn btn-default btn-file">
                                        <span class="fileinput-new" lang="id">Pilih Gambar/Scan</span>
                                        <span class="fileinput-exists" lang="id">Ganti</span>
                                        <input type="file" name="userfiles[]" id="passportfile">
                                    </span>
                                    <a href="#" class="btn btn-default fileinput-exists" data-dismiss="fileinput" lang="id">Hapus</a>
                                </div>
                                <p class="help-block" style="text-align:justify;">Unggah Gambar Halaman Depan Paspor</p>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="fileinput fileinput-new" data-provides="fileinput">
                                <div class="fileinput-new thumbnail" style="width: 150px; height: 150px;">
                                    <img src="http://placehold.it/150x150&text=Surat Sponsor">
                                </div>
                                <div class="fileinput-preview fileinput-exists thumbnail" style="max-width: 150px; max-height: 200px;"></div>
                                <div>
                                    <span class="btn btn-default btn-file">
                                        <span class="fileinput-new" lang="id">Pilih Gambar/Scan</span>
                                        <span class="fileinput-exists" lang="id">Ganti</span>
                                        <input type="file" name="userfiles[]" id="corp_sponsorfile">
                                    </span>
                                    <a href="#" class="btn btn-default fileinput-exists" data-dismiss="fileinput" lang="id">Hapus</a>
                                </div>
                                <p class="help-block" style="text-align:justify;">Unggah File Sponsor</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4">
                        <div class="form-group">
                            <div class="fileinput fileinput-new" data-provides="fileinput">
                                <div class="fileinput-new thumbnail" style="width: 150px; height: 150px;">
                                    <img src="http://placehold.it/150x150&text=Surat Nikah">
                                </div>
                                <div class="fileinput-preview fileinput-exists thumbnail" style="max-width: 150px; max-height: 200px;"></div>
                                <div>
                                    <span class="btn btn-default btn-file">
                                        <span class="fileinput-new" lang="id">Pilih Gambar/Scan</span>
                                        <span class="fileinput-exists" lang="id">Ganti</span>
                                        <input type="file" name="userfiles[]" id="marital_letterfile">
                                    </span>
                                    <a href="#" class="btn btn-default fileinput-exists" data-dismiss="fileinput" lang="id">Hapus</a>
                                </div>
                                <p class="help-block" style="text-align:justify;">Unggah Gambar Surat/Buku Nikah</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="form-group">
                            <div class="fileinput fileinput-new" data-provides="fileinput">
                                <div class="fileinput-new thumbnail" style="width: 150px; height: 150px;">
                                    <img src="http://placehold.it/150x150&text=Tanda Lapor">
                                </div>
                                <div class="fileinput-preview fileinput-exists thumbnail" style="max-width: 150px; max-height: 200px;"></div>
                                <div>
                                    <span class="btn btn-default btn-file">
                                        <span class="fileinput-new" lang="id">Pilih Gambar/Scan</span>
                                        <span class="fileinput-exists" lang="id">Ganti</span>
                                        <input type="file" name="userfiles[]" id="report_evidencefile" multiple>
                                    </span>
                                    <a href="#" class="btn btn-default fileinput-exists" data-dismiss="fileinput" lang="id">Hapus</a>
                                </div>
                                <p class="help-block" style="text-align:justify;">Unggah File Tanda Lapor</p>
                            </div>
                        </div>
                    </div>
                </div>
            </fieldset>
            <fieldset>
                <legend>Keterangan</legend>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="form-group">
                            <label for="hist_oversea">Pernahkah Saudara keluar negeri? Bila ya, sebutkan Tahun berapa, dalam rangka apa, dan negara mana yang dikunjungi.</label>
                            <input type="text" class="form-control" id="hist_oversea" name="hist_oversea" placeholder="Cth: Ya. Tahun 2010 untuk berwisata ke Singapura. Tahun 2012 untuk wisata ke Hongkong.">
                        </div>
                        <div class="form-group">
                            <label for="hist_hobby">Apakah kegemaran/hobby saudara?</label>
                            <input type="text" class="form-control" id="hist_hobby" name="hist_hobby" placeholder="Cth: Membaca, Bermain Bola, Mendaki Gunung.">
                        </div>
                        <div class="form-group">
                            <label for="purpose_desc">Apakah tujuan/keperluan Saudara membuat aplikasi SKCK?<font color="red">*</font></label>
                            <input type="text" class="form-control" id="purpose_desc" name="purpose_desc" placeholder="Cth: Melamar kerja, Mendaftar CPNS, dsb." required data-parsley-group="block5">
                        </div>
                        <div class="form-group">
                            <p style="text-align:justify;">
                                Keterangan diatas saya buat dengan sebenarnya atas sumpah menurut kepercayaan saya, apabila dikemudian hari ternyata keterangan ini tidak benar maka saya sanggup dituntut
                                berdasarkan hukum yang berlaku.
                            </p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-9"></div>
                        <div class="col-lg-3">
                            <div class="form-group">
                                <p style="">Tulungagung,
                                <?php  echo date("d F Y"); ?></p>
                            </div>
                        </div>
                    </div>
                    <noscript>
                        <input class="nocsript-finish-btn sf-right nocsript-sf-btn" type="submit" name="submitSKCK" value="Ajukan Permohonan SKCK"/>
                    </noscript>
                </div>
            </fieldset>
        </form>
    </div>
</div>

<script>
        var sfw;
        $(document).ready(function() {
            sfw = $("#wizard_form").stepFormWizard({
                showNav: 'right',
                nextBtn: $('<a class="next-btn sf-right sf-btn" href="#">BERIKUTNYA</a>'),
                prevBtn: $('<a class="prev-btn sf-left sf-btn" href="#">SEBELUMNYA</a>'),
                finishBtn: $('<input class="finish-btn sf-right sf-btn" type="submit" name="submitSKCK" value="AJUKAN SKCK"/>'),
                onNext: function(i, wizard) {
                    var valid = $('form', wizard).parsley().validate('block' + i);
                    height: 'auto';
                    sfw.refresh();
                    return valid;
                },
                onFinish: function(i, wizard) {
                    var valid = $('form', wizard).parsley().validate();
                    height: 'auto';
                    sfw.refresh();
                    return valid;
                }
            });

            $('#datetimepicker1').datetimepicker({
              format: 'DD-MM-YYYY',
              sideBySide: true
            });
        })
        $(window).load(function(){
            /* only if you want use mcustom scrollbar */
            $(".sf-wizard fieldset").mCustomScrollbar({
                theme:"dark-3",
                scrollButtons:{
                    enable:true
                }
            });
            /* ***************************************/

            /* this function call can help with broken layout after loaded images, fonts or something changed content */
            sfw.refresh();
        });
</script>
