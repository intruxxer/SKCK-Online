<?php if($success == 'true') { ?>
<div class="row">
    <div class="col-md-12">
        <h2>Formulir Aplikasi Perpanjangan SKCK</h2>
        <?php  $hidden = array('serialNumber' => $skck_id);
               $attributes = array('id' => 'wizard_form');
               echo form_open_multipart('apply/extend', $attributes, $hidden);
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
                            <input type="text" class="form-control" id="name" name="name" value="<?php echo ""; ?>" required data-parsley-group="block0">
                        </div>
                        <div class="form-group">
                            <label for="birthplace">Tempat Lahir<font color="red">*</font></label>
                            <input type="text" class="form-control" id="birthplace" name="birthplace" value="<?php echo ""; ?>" required data-parsley-group="block0">
                        </div>
                        <div class="form-group">
                            <label for="citizenship">Kewarganegaraan<font color="red">*</font></label>
                            <select class="form-control" name="citizenship" data-parsley-group="block0" required>
                                <?php echo '<option value="I" '; if(false) echo 'selected="selected"'; echo '>Warga Negara Indonesia</option>';
                                      echo '<option value="A" '; if(false) echo 'selected="selected"'; echo '>Warga Negara Asing</option>';
                                ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="id">No. KTP/KITAP/KITAS<font color="red">*</font></label>
                            <input type="text" class="form-control" id="id" name="id" value="<?php echo ""; ?>" required data-parsley-group="block0">
                        </div>
                        <div class="form-group">
                            <label for="address_doc">Alamat sesuai KTP<font color="red">*</font></label>
                            <textarea class="form-control" name="address_doc" value="<?php echo ""; ?>" required rows="2" data-parsley-group="block0"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="phone">No. Telpon/Handphone<font color="red">*</font></label>
                            <input type="text" class="form-control" id="phone" name="phone" value="<?php echo ""; ?>" required data-parsley-group="block0" data-parsley-type="number">
                        </div>
                        <div class="form-group">
                            <label for="marital_status">Status Perkawinan<font color="red">*</font></label>
                            <select class="form-control" name="marital_status" data-parsley-group="block0" required>
                                <?php echo '<option value="K"'; if(false) echo 'selected="selected"'; echo '>Kawin</option>';
                                      echo '<option value="T"'; if(false) echo 'selected="selected"'; echo '>Tidak Kawin</option>'; ?>
                            </select>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label for="sex">Jenis Kelamin<font color="red">*</font></label>
                            <select class="form-control" name="sex" data-parsley-group="block0" required>
                                <?php echo '<option value="M"'; if(false) echo 'selected="selected"'; echo '>Laki-Laki</option>';
                                      echo '<option value="F"'; if(false) echo 'selected="selected"'; echo '>Perempuan</option>' ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="birthdate">Tanggal Lahir<font color="red">*</font></label>
                            <div class='input-group date'>
                                <input type="text" class="form-control" id="datetimepicker1" name="birthdate" value="<?php echo ""; ?>" required data-parsley-group="block0">
                                <span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span></span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="religion">Agama<font color="red">*</font></label>
                            <select class="form-control" name="religion" data-parsley-group="block0" required>
                               <?php
                                echo '<option value="Islam" '; if(false) echo 'selected="selected"'; echo '>Islam</option>';
                                echo '<option value="Katolik" '; if(false) echo 'selected="selected"'; echo '>Katolik</option>';
                                echo '<option value="Protestan" '; if(false) echo 'selected="selected"'; echo '>Protestan</option>';
                                echo '<option value="Hindu" '; if(false) echo 'selected="selected"'; echo '>Hindu</option>';
                                echo '<option value="Buddha" '; if(false) echo 'selected="selected"'; echo '>Buddha</option>';
                                echo '<option value="Konghucu" '; if(false) echo 'selected="selected"'; echo '>Konghucu</option>';
                                echo '<option value="-" '; if(false) echo 'selected="selected"'; echo '>Aliran Kepercayaan</option>';
                                ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="passport">No. Passport</label>
                            <input type="text" class="form-control" id="passport" name="passport" value="<?php echo ""; ?>">
                        </div>
                        <div class="form-group">
                            <label for="address_now">Alamat Domisili Sekarang</label>
                            <textarea class="form-control" name="address_now" value="<?php echo ""; ?>" rows="2"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="occupation">Pekerjaan<font color="red">*</font></label>
                            <input type="text" class="form-control" id="occupation" name="occupation" value="<?php echo ""; ?>" required data-parsley-group="block0">
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
                                <?php
                                echo '<option value="I" '; if(false) echo 'selected="selected"'; echo '>Istri</option>';
                                echo '<option value="S" '; if(false) echo 'selected="selected"'; echo '>Suami</option>';
                                echo '<option value="N" '; if(false) echo 'selected="selected"'; echo '>Tidak Ada Pasangan</option>'; ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="spouse_name">Nama</label>
                            <input type="text" class="form-control" id="spouse_name" name="spouse_name" value="<?php echo ""; ?>">
                        </div>
                        <div class="form-group">
                            <label for="spouse_age">Umur</label>
                            <select class="form-control" name="spouse_age">
                                <?php for($i=17; $i<66; $i++){ ?>
                                <?php echo '<option value="'.$i.'"'; if(false) echo 'selected="selected"'; echo '>'.$i.'</option>'; ?>
                                <?php } ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="spouse_religion">Agama</label>
                            <select class="form-control" name="spouse_religion">
                                <?php
                                echo '<option value="Islam" '; if(false) echo 'selected="selected"'; echo '>Islam</option>';
                                echo '<option value="Katolik" '; if(false) echo 'selected="selected"'; echo '>Katolik</option>';
                                echo '<option value="Protestan" '; if(false) echo 'selected="selected"'; echo '>Protestan</option>';
                                echo '<option value="Hindu" '; if(false) echo 'selected="selected"'; echo '>Hindu</option>';
                                echo '<option value="Buddha" '; if(false) echo 'selected="selected"'; echo '>Buddha</option>';
                                echo '<option value="Konghucu" '; if(false) echo 'selected="selected"'; echo '>Konghucu</option>';
                                echo '<option value="-" '; if(false) echo 'selected="selected"'; echo '>Aliran Kepercayaan</option>';
                                ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="spouse_citizenship">Kewarganegaraan</label>
                            <select class="form-control" name="spouse_citizenship">
                                <?php echo '<option value="I" '; if(false) echo 'selected="selected"'; echo '>Warga Negara Indonesia</option>';
                                      echo '<option value="A" '; if(false) echo 'selected="selected"'; echo '>Warga Negara Asing</option>';
                                ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="spouse_occupation">Pekerjaan</label>
                            <input type="text" class="form-control" id="spouse_occupation" name="spouse_occupation" value="<?php echo ""; ?>">
                        </div>
                        <div class="form-group">
                            <label for="spouse_address">Alamat Domisili Sekarang</label>
                            <textarea class="form-control" name="spouse_address" value="<?php echo ""; ?>" rows="2"></textarea>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="form-group">
                            <label for="parent_type">Orang Tua</label>
                            <p class="form-control-static">Ayah</p>
                        </div>
                        <div class="form-group">
                            <label for="father_name">Nama<font color="red">*</font></label>
                            <input type="text" class="form-control" id="father_name" name="father_name" value="<?php echo ""; ?>" data-parsley-group="block1" required>
                        </div>
                        <div class="form-group">
                            <label for="father_age">Umur<font color="red">*</font></label>
                            <select class="form-control" name="father_age" data-parsley-group="block1" required>
                                <?php for($i=17; $i<66; $i++){ ?>
                                <?php echo '<option value="'.$i.'"'; if(false) echo 'selected="selected"'; echo '>'.$i.'</option>'; ?>
                                <?php } ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="father_religion">Agama<font color="red">*</font></label>
                            <select class="form-control" name="father_religion" data-parsley-group="block1" required>
                                <?php
                                echo '<option value="Islam" '; if(false) echo 'selected="selected"'; echo '>Islam</option>';
                                echo '<option value="Katolik" '; if(false) echo 'selected="selected"'; echo '>Katolik</option>';
                                echo '<option value="Protestan" '; if(false) echo 'selected="selected"'; echo '>Protestan</option>';
                                echo '<option value="Hindu" '; if(false) echo 'selected="selected"'; echo '>Hindu</option>';
                                echo '<option value="Buddha" '; if(false) echo 'selected="selected"'; echo '>Buddha</option>';
                                echo '<option value="Konghucu" '; if(false) echo 'selected="selected"'; echo '>Konghucu</option>';
                                echo '<option value="-" '; if(false) echo 'selected="selected"'; echo '>Aliran Kepercayaan</option>';
                                ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="father_citizenship">Kewarganegaraan<font color="red">*</font></label>
                            <select class="form-control" name="father_citizenship" data-parsley-group="block1" required>
                                <?php echo '<option value="I" '; if(false) echo 'selected="selected"'; echo '>Warga Negara Indonesia</option>';
                                      echo '<option value="A" '; if(false) echo 'selected="selected"'; echo '>Warga Negara Asing</option>';
                                ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="father_occupation">Pekerjaan<font color="red">*</font></label>
                            <input type="text" class="form-control" id="father_occupation" name="father_occupation" value="<?php echo ""; ?>" data-parsley-group="block1" required>
                        </div>
                        <div class="form-group">
                            <label for="father_address">Alamat Domisili Sekarang<font color="red">*</font></label>
                            <textarea class="form-control" name="father_address" value="<?php echo ""; ?>" rows="2" data-parsley-group="block1" required></textarea>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="form-group">
                            <label for="parent_type">Orang Tua</label>
                            <p class="form-control-static">Ibu</p>
                        </div>
                        <div class="form-group">
                            <label for="mother_name">Nama<font color="red">*</font></label>
                            <input type="text" class="form-control" id="mother_name" name="mother_name" value="<?php echo ""; ?>" required data-parsley-group="block1">
                        </div>
                        <div class="form-group">
                            <label for="mother_age">Umur<font color="red">*</font></label>
                            <select class="form-control" name="mother_age" data-parsley-group="block1" required>
                                <?php for($i=17; $i<66; $i++){ ?>
                                <?php echo '<option value="'.$i.'"'; if(false) echo 'selected="selected"'; echo '>'.$i.'</option>'; ?>
                                <?php } ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="mother_religion">Agama<font color="red">*</font></label>
                            <select class="form-control" name="mother_religion" data-parsley-group="block1" required>
                                <?php
                                echo '<option value="Islam" '; if(false) echo 'selected="selected"'; echo '>Islam</option>';
                                echo '<option value="Katolik" '; if(false) echo 'selected="selected"'; echo '>Katolik</option>';
                                echo '<option value="Protestan" '; if(false) echo 'selected="selected"'; echo '>Protestan</option>';
                                echo '<option value="Hindu" '; if(false) echo 'selected="selected"'; echo '>Hindu</option>';
                                echo '<option value="Buddha" '; if(false) echo 'selected="selected"'; echo '>Buddha</option>';
                                echo '<option value="Konghucu" '; if(false) echo 'selected="selected"'; echo '>Konghucu</option>';
                                echo '<option value="-" '; if(false) echo 'selected="selected"'; echo '>Aliran Kepercayaan</option>';
                                ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="mother_citizenship">Kewarganegaraan<font color="red">*</font></label>
                            <select class="form-control" name="mother_citizenship" data-parsley-group="block1" required>
                                <?php echo '<option value="I" '; if(false) echo 'selected="selected"'; echo '>Warga Negara Indonesia</option>';
                                      echo '<option value="A" '; if(false) echo 'selected="selected"'; echo '>Warga Negara Asing</option>';
                                ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="mother_occupation">Pekerjaan<font color="red">*</font></label>
                            <input type="text" class="form-control" id="mother_occupation" name="mother_occupation" placeholder="Cth. Wiraswasta" required data-parsley-group="block1">
                        </div>
                        <div class="form-group">
                            <label for="mother_address">Alamat Domisili Sekarang<font color="red">*</font></label>
                            <textarea class="form-control" name="mother_address" value="<?php echo ""; ?>" rows="2" data-parsley-group="block1" required></textarea>
                        </div>
                    </div>
                </div>
                <div class="row"><hr><p style="text-align:center;font-size:16px"><b><u>Saudara Terdekat</u><font color="red">*</font></b></p></div>
                <div class="row">
                    <div class="col-lg-3">
                        <div class="form-group">
                            <label for="siblings_names_1">Nama Saudara 1</label>
                            <input type="text" class="form-control" id="siblings_names_1" name="siblings_names_1" value="<?php echo ""; ?>">
                        </div>
                        <div class="form-group">
                            <label for="siblings_names_2">Nama Saudara 2</label>
                            <input type="text" class="form-control" id="siblings_names_2" name="siblings_names_2" value="<?php echo ""; ?>">
                        </div>
                        <div class="form-group">
                            <label for="siblings_names_3">Nama Saudara 3</label>
                            <input type="text" class="form-control" id="siblings_names_3" name="siblings_names_3" value="<?php echo ""; ?>">
                        </div>
                        <div class="form-group">
                            <label for="siblings_names_4">Nama Saudara 4</label>
                            <input type="text" class="form-control" id="siblings_names_4" name="siblings_names_4" value="<?php echo ""; ?>">
                        </div>
                        <div class="form-group">
                            <label for="siblings_names_5">Nama Saudara 5</label>
                            <input type="text" class="form-control" id="siblings_names_5" name="siblings_names_5" value="<?php echo ""; ?>">
                        </div>
                        <div class="form-group">
                            <label for="siblings_names_6">Nama Saudara 6</label>
                            <input type="text" class="form-control" id="siblings_names_6" name="siblings_names_6" value="<?php echo ""; ?>">
                        </div>
                    </div>
                    <div class="col-lg-2">
                        <div class="form-group">
                            <label for="siblings_ages_1">Umur Saudara 1</label>
                            <select class="form-control" name="siblings_ages_1">
                                <?php for($i=17; $i<66; $i++){ ?>
                                <?php echo '<option value="'.$i.'"'; if(false) echo 'selected="selected"'; echo '>'.$i.'</option>'; ?>
                                <?php } ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="siblings_ages_2">Umur Saudara 2</label>
                            <select class="form-control" name="siblings_ages_2">
                                <?php for($i=17; $i<66; $i++){ ?>
                                <?php echo '<option value="'.$i.'"'; if(false) echo 'selected="selected"'; echo '>'.$i.'</option>'; ?>
                                <?php } ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="siblings_ages_3">Umur Saudara 3</label>
                            <select class="form-control" name="siblings_ages_3">
                                <?php for($i=17; $i<66; $i++){ ?>
                                <?php echo '<option value="'.$i.'"'; if(false) echo 'selected="selected"'; echo '>'.$i.'</option>'; ?>
                                <?php } ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="siblings_ages_4">Umur Saudara 4</label>
                            <select class="form-control" name="siblings_ages_4">
                                <<?php for($i=17; $i<66; $i++){ ?>
                                <?php echo '<option value="'.$i.'"'; if(false) echo 'selected="selected"'; echo '>'.$i.'</option>'; ?>
                                <?php } ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="siblings_ages_5">Umur Saudara 5</label>
                            <select class="form-control" name="siblings_ages_5">
                                <?php for($i=17; $i<66; $i++){ ?>
                                <?php echo '<option value="'.$i.'"'; if(false) echo 'selected="selected"'; echo '>'.$i.'</option>'; ?>
                                <?php } ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="siblings_ages_6">Umur Saudara 6</label>
                            <select class="form-control" name="siblings_ages_6">
                                <?php for($i=17; $i<66; $i++){ ?>
                                <?php echo '<option value="'.$i.'"'; if(false) echo 'selected="selected"'; echo '>'.$i.'</option>'; ?>
                                <?php } ?>
                            </select>
                        </div>
                    </div>
                    <div class="col-lg-7">
                        <div class="form-group">
                            <label for="siblings_addresses_1">Alamat Saudara 1</label>
                            <textarea class="form-control" rows="1" id="siblings_addresses_1" name="siblings_addresses_1" value="<?php echo ""; ?>"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="siblings_addresses_2">Alamat Saudara 2</label>
                            <textarea class="form-control" rows="1" id="siblings_addresses_2" name="siblings_addresses_2" value="<?php echo ""; ?>"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="siblings_addresses_3">Alamat Saudara 3</label>
                            <textarea class="form-control" rows="1" id="siblings_addresses_3" name="siblings_addresses_3" value="<?php echo ""; ?>"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="siblings_addresses_1">Alamat Saudara 4</label>
                            <textarea class="form-control" rows="1" id="siblings_addresses_4" name="siblings_addresses_4" value="<?php echo ""; ?>"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="siblings_addresses_2">Alamat Saudara 5</label>
                            <textarea class="form-control" rows="1" id="siblings_addresses_5" name="siblings_addresses_5" value="<?php echo ""; ?>"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="siblings_addresses_3">Alamat Saudara 6</label>
                            <textarea class="form-control" rows="1" id="siblings_addresses_6" name="siblings_addresses_6" value="<?php echo ""; ?>"></textarea>
                        </div>
                    </div>
                </div>
            </fieldset>
            <fieldset>
                <legend>Pendidikan</legend>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="form-group">
                            <label for="hist_school">Ada Riwayat Sekolah?<font color="red">*</font></label>
                            <select class="form-control" name="hist_school" data-parsley-group="block2" required>
                                <?php
                                    echo '<option value="Y"'; if(false) echo 'selected="selected"'; echo '>Ada</option>';
                                    echo '<option value="N"'; if(false) echo 'selected="selected"'; echo '>Tidak</option>';
                                ?>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-5">
                        <div class="form-group">
                            <label for="edu_primary">Sekolah Dasar</label>
                            <input type="text" class="form-control" id="edu_primary" name="edu_primary" value="<?php echo ""; ?>">
                        </div>
                        <div class="form-group">
                            <label for="edu_secondary">Sekolah Menengah Pertama</label>
                            <input type="text" class="form-control" id="edu_secondary" name="edu_secondary" value="<?php echo ""; ?>">
                        </div>
                        <div class="form-group">
                            <label for="edu_tertiary">Sekolah Menengah Atas</label>
                            <input type="text" class="form-control" id="edu_tertiary" name="edu_tertiary" value="<?php echo ""; ?>">
                        </div>
                        <div class="form-group">
                            <label for="edu_bachelor">Sarjana (S1)</label>
                            <input type="text" class="form-control" id="edu_bachelor" name="edu_bachelor" value="<?php echo ""; ?>">
                        </div>
                        <div class="form-group">
                            <label for="edu_master">Master (S2)</label>
                            <input type="text" class="form-control" id="edu_master" name="edu_master" value="<?php echo ""; ?>">
                        </div>
                        <div class="form-group">
                            <label for="edu_doctoral">Doktoral (S3)</label>
                            <input type="text" class="form-control" id="edu_doctoral" name="edu_doctoral" value="<?php echo ""; ?>">
                        </div>
                    </div>
                     <div class="col-lg-3">
                        <div class="form-group">
                            <label for="edu_primary_year">Tahun Lulus</label>
                            <input type="text" class="form-control" id="edu_primary_year" name="edu_primary_year" value="<?php echo ""; ?>">
                        </div>
                        <div class="form-group">
                            <label for="edu_secondary_year">Tahun Lulus</label>
                            <input type="text" class="form-control" id="edu_secondary_year" name="edu_secondary_year" value="<?php echo ""; ?>">
                        </div>
                        <div class="form-group">
                            <label for="edu_tertiary_year">Tahun Lulus</label>
                            <input type="text" class="form-control" id="edu_tertiary_year" name="edu_tertiary_year" value="<?php echo ""; ?>">
                        </div>
                        <div class="form-group">
                            <label for="edu_bachelor_year">Tahun Lulus</label>
                            <input type="text" class="form-control" id="edu_bachelor_year" name="edu_bachelor_year" value="<?php echo ""; ?>">
                        </div>
                        <div class="form-group">
                            <label for="edu_maste_yearr">Tahun Lulus</label>
                            <input type="text" class="form-control" id="edu_master_year" name="edu_master_year" value="<?php echo ""; ?>">
                        </div>
                        <div class="form-group">
                            <label for="edu_doctoral_year">Tahun Lulus</label>
                            <input type="text" class="form-control" id="edu_doctoral_year" name="edu_doctoral_year" value="<?php echo ""; ?>">
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="form-group">
                            <label for="edu_primary_city">Kota/Negara</label>
                            <input type="text" class="form-control" id="edu_primary_city" name="edu_primary_city" value="<?php echo ""; ?>">
                        </div>
                        <div class="form-group">
                            <label for="edu_secondary_city">Kota/Negara</label>
                            <input type="text" class="form-control" id="edu_secondary_city" name="edu_secondary_city" value="<?php echo ""; ?>">
                        </div>
                        <div class="form-group">
                            <label for="edu_tertiary_city">Kota/Negara</label>
                            <input type="text" class="form-control" id="edu_tertiary_city" name="edu_tertiary_city" value="<?php echo ""; ?>">
                        </div>
                        <div class="form-group">
                            <label for="edu_bachelor_city">Kota/Negara</label>
                            <input type="text" class="form-control" id="edu_bachelor_city" name="edu_bachelor_city" value="<?php echo ""; ?>">
                        </div>
                        <div class="form-group">
                            <label for="edu_master_city">Kota/Negara</label>
                            <input type="text" class="form-control" id="edu_master_city" name="edu_master_city" value="<?php echo ""; ?>">
                        </div>
                        <div class="form-group">
                            <label for="edu_doctoral_city">Kota/Negara</label>
                            <input type="text" class="form-control" id="edu_doctoral_city" name="edu_doctoral_city" value="<?php echo ""; ?>">
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
                                <?php
                                    echo '<option value="TP" '; if(false) echo 'selected="selected"'; echo '>Tidak Pernah</option>';
                                    echo '<option value="PH" '; if(false) echo 'selected="selected"'; echo '>Pernah</option>'; ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="pidana_apa">Bila pernah, dalam perkara apa?</label>
                            <input type="text" class="form-control" id="pidana_apa" name="pidana_apa" value="<?php echo ""; ?>">
                        </div>
                        <div class="form-group">
                            <label for="pidana_putusanakhir">Bila pernah, Bagaimana putusannya/vonis hakim?</label>
                            <input type="text" class="form-control" id="pidana_putusanakhir" name="pidana_putusanakhir" value="<?php echo ""; ?>">
                        </div>
                        <div class="form-group">
                            <label for="pidana_proses">Apakah Saudara saat ini sedang dalam proses perkara pidana?</label>
                            <select class="form-control" name="pidana_proses">
                                <?php
                                    echo '<option value="TP" '; if(false) echo 'selected="selected"'; echo '>Tidak Dalam Proses</option>';
                                    echo '<option value="DP" '; if(false) echo 'selected="selected"'; echo '>Dalam Proses</option>'; ?>
                            </select>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label for="pidana_kasus">Bila pernah, dalam perkara apa?</label>
                            <input type="text" class="form-control" id="pidana_kasus" name="pidana_kasus" value="<?php echo ""; ?>">
                        </div>
                        <div class="form-group">
                            <label for="pidana_sampaimana">Bila pernah, sampai sejauh mana proses hukumnya?</label>
                            <input type="text" class="form-control" id="pidana_sampaimana" name="pidana_sampaimana" value="<?php echo ""; ?>">
                        </div>
                        <div class="form-group">
                            <label for="pidana_putusansementara">Bila pernah, Bagaimana hasil/putusan sementara hingga kini?</label>
                            <input type="text" class="form-control" id="pidana_putusansementara" name="pidana_putusansementara" value="<?php echo ""; ?>">
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
                                <?php
                                    echo '<option value="TP" '; if(false) echo 'selected="selected"'; echo '>Tidak Pernah</option>';
                                    echo '<option value="PH" '; if(false) echo 'selected="selected"'; echo '>Pernah</option>'; ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="pelanggaran_apa">Bila pernah, dalam perkara apa?</label>
                            <input type="text" class="form-control" id="pelanggaran_apa" name="pelanggaran_apa" value="<?php echo ""; ?>">
                        </div>
                        <div class="form-group">
                            <label for="pelanggaran_sampaimana1">Bagaimana proses hukumnya sejauh ini?</label>
                            <input type="text" class="form-control" id="pelanggaran_sampaimana" name="pelanggaran_sampaimana" value="<?php echo ""; ?>">
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
                            <input type="text" class="form-control" id="rambut" name="rambut" value="<?php echo ""; ?>" required data-parsley-group="block4">
                        </div>
                        <div class="form-group">
                            <label for="wajah">Bentuk Wajah Anda?<font color="red">*</font></label>
                            <input type="text" class="form-control" id="wajah" name="wajah" value="<?php echo ""; ?>" required data-parsley-group="block4">
                        </div>
                        <div class="form-group">
                            <label for="kulit">Tipe Warna Kulit?<font color="red">*</font></label>
                            <input type="text" class="form-control" id="kulit" name="kulit" value="<?php echo ""; ?>" required data-parsley-group="block4">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label for="tinggibadan">Tinggi Badan Anda?<font color="red">*</font> (cm)</label>
                            <input type="text" class="form-control" id="tinggibadan" name="tinggibadan" value="<?php echo ""; ?>" required data-parsley-group="block4" data-parsley-type="number" data-parsley-length="[0, 3]">
                        </div>
                        <div class="form-group">
                            <label for="beratbadan">Berat Badan Anda?<font color="red">*</font> (kg)</label>
                            <input type="text" class="form-control" id="beratbadan" name="beratbadan" value="<?php echo ""; ?>" required data-parsley-group="block4" data-parsley-type="number" data-parsley-length="[0, 2]">
                        </div>
                        <div class="form-group">
                            <label for="tandakhusus">Tanda Khusus di Badan Anda?</label>
                            <input type="text" class="form-control" id="tandakhusus" name="tandakhusus" value="<?php echo ""; ?>">
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
                            <input type="text" class="form-control" id="rumussidikjari1" name="rumussidikjari1" value="<?php echo ""; ?>">
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="form-group">
                            <label for="rumussidikjari2">Rumus Sidik Jari 2? (Abaikan ini bila belum ada/belum mengurus di Polres)</label>
                            <input type="text" class="form-control" id="rumussidikjari2" name="rumussidikjari2" value="<?php echo ""; ?>">
                        </div>
                    </div>
                </div>
            </fieldset>
            <fieldset>
                <legend>Lampiran</legend>
                <div class="row">
                    <div class="col-lg-12">
                        <p style="text-align:justify">Bila ada, silakan upload di sini.Bila tidak ada/tidak bisa upload saat ini, pada saat verifikasi
                        & pengambilan SKCK, selain membawa yg asli (untuk verifikasi), bawa juga soft copy/file/scan dokumen-dokumen anda pada saat pengambilan SKCK.
                        Anda juga baiknya membawa hasil print/fotocopy dokumen pada saat verifikasi bila tidak mengupload saat ini untuk mempercepat proses penerbitan SKCK.
                        </p>
                        <hr/>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="form-group">
                            <label for="docs_exist">Ada File/Soft Copy/Scan Dokumen?<font color="red">*</font></label>
                            <select class="form-control" name="docs_exist" data-parsley-group="block5" required>
                                <option value="Y" selected="selected">Ada</option>
                                <option value="N">Tidak</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4">
                        <div class="form-group">
                            <div class="fileinput fileinput-new" data-provides="fileinput">
                                <div class="fileinput-new thumbnail" style="width: 150px; height: 150px;">
                                    <img src="<?php echo base_url('assets/img/docs/150x150&text=4x6.gif'); ?>">
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
                                    <img src="<?php echo base_url('assets/img/docs/150x150&text=Akte Lahir.gif'); ?>">
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
                                    <img src="<?php echo base_url('assets/img/docs/150x150&text=KK.gif'); ?>">
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
                                    <img src="<?php echo base_url('assets/img/docs/150x150&text=Sidik Jari.gif'); ?>">
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
                                    <img src="<?php echo base_url('assets/img/docs/150x150&text=Paspor.gif'); ?>">
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
                                    <img src="<?php echo base_url('assets/img/docs/150x150&text=Surat Sponsor.gif'); ?>">
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
                                    <img src="<?php echo base_url('assets/img/docs/150x150&text=Surat Nikah.gif'); ?>">
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
                                    <img src="<?php echo base_url('assets/img/docs/150x150&text=Tanda Lapor.gif'); ?>">
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
                            <input type="text" class="form-control" id="hist_oversea" name="hist_oversea" value="<?php echo ""; ?>">
                        </div>
                        <div class="form-group">
                            <label for="hist_hobby">Apakah kegemaran/hobby saudara?</label>
                            <input type="text" class="form-control" id="hist_hobby" name="hist_hobby" value="<?php echo ""; ?>">
                        </div>
                        <div class="form-group">
                            <label for="purpose_desc">Apakah tujuan/keperluan Saudara membuat aplikasi SKCK?<font color="red">*</font></label>
                            <input type="text" class="form-control" id="purpose_desc" name="purpose_desc" value="<?php echo ""; ?>" required data-parsley-group="block6">
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
                        <input class="nocsript-finish-btn sf-right nocsript-sf-btn" type="submit" name="submitSKCKextend" value="Perpanjangan SKCK"/>
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
                finishBtn: $('<input class="finish-btn sf-right sf-btn" type="submit" name="submitSKCKextend" value="AJUKAN SKCK"/>'),
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
<?php } ?>
<?php if($success == 'false') { ?>
<div class="row">
    <div class="col-md-12">
        <div class="panel panel-danger">
          <div class="panel-heading">
            <h3 class="panel-title">Data e-SKCK Tidak Ditemukan</h3>
          </div>
          <div class="panel-body">
            <strong>Mohon Maaf, </strong>data e-SKCK anda <u>tidak ditemukan</u>.
            Silakan coba mendaftarkan permohonan SKCK anda sekali lagi.<br/>
            <a class="btn btn-primary btn-sm" href="<?php echo base_url('apply'); ?>" role="button">Ajukan SKCK Baru</a>
          </div>
        </div>
    </div>
</div>
<?php } ?>
