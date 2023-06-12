<div id="notifications"><?=$this->session->flashdata('notif')?></div>
    <script>   
    $('#notifications').slideDown('slow').delay(3000).slideUp('slow');
    </script> 
   <form role="form"<?php
				echo form_open_multipart(
                                	"index.php/master/addUser",
                                	'role="form"'
                                ); ?>
                <div class="card-body">
                  <div class="form-group">
                    <label>Nama</label>
                    <input type="text" name="id_desa" class="form-control" placeholder="Masukkan Kode Desa" required>
                  </div>
                  <div class="form-group">
                    <label>Nama Desa</label>
                    <input type="text" name="nama_desa" class="form-control" placeholder="Masukkan Nama Desa" required>
                  </div>
                    <div class="form-group">
                        <label>Daerah Provinsi</label>
                        <select class="form-control" name="id_prov" id="prov_select">
                            <?php foreach($dataProvinsi as $key){?>
                                <option value="<?=$key->id_prov?>"><?=$key->nama_prov?></option>
                            <?php } ?>
                        </select>
                      </div>
                      <div class="form-group">
                            <label>Daerah Kabupaten</label>
                            <select class="form-control" name="id_kab" id="kab_select">
                                <?php foreach($dataKabupaten as $key){?>
                                    <option value="<?=$key->id_kab?>"><?=$key->nama_kab?></option>
                                <?php } ?>
                            </select>
                          </div>
                      <div class="form-group">
                            <label>Daerah Kecamatan</label>
                            <select class="form-control" name="id_kec" id="kec_select">
                                <?php foreach($dataKecamatan as $key){?>
                                    <option value="<?=$key->id_kec?>"><?=$key->nama_kec?></option>
                                <?php } ?>
                            </select>
                          </div>
                    </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" name="tambah_desa" class="btn btn-primary">Submit</button>
                </div>
      </form>

    