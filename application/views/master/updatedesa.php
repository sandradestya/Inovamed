<div id="notifications"><?=$this->session->flashdata('notif')?></div>
    <script>   
    $('#notifications').slideDown('slow').delay(3000).slideUp('slow');
    </script> 
    <?php $id=$this->uri->segment(3);
    // print_r($kec)?>
   <form role="form"<?php
				echo form_open_multipart(
                                	"index.php/master/updateDesa/".$id,
                                	'role="form"'
                                ); ?>
                <div class="card-body">
                  <div class="form-group">
                    <label>ID Desa</label>
                    <input type="text" name="id_desa" class="form-control" value="<?=$desa['id_desa']?>" placeholder="Masukkan Kode Desa" required>
                  </div>
                  <div class="form-group">
                    <label>Nama Desa</label>
                    <input type="text" name="nama_desa" class="form-control" value="<?=$desa['nama_desa']?>" placeholder="Masukkan Nama Desa" required>
                  </div>
                  <div class="form-group">
                      <label>Daerah Provinsi</label>
                      <select class="form-control" name="id_prov">
                         <?php foreach($dataProvinsi as $key){
                            ?>
                              <option <?php if ($desa['id_prov'] === $key->id_prov) { echo 'selected'; }?> value="<?=$key->id_prov?> "><?=$key->nama_prov?></option>
                          <?php } ?>
                      </select>
                  </div>
                  <div class="form-group">
                      <label>Daerah Kabupaten</label>
                      <select class="form-control" name="id_kab">
                         <?php foreach($dataKabupaten as $key){?>
                              <option <?php if ($desa['id_kab'] === $key->id_kab) { echo 'selected'; }?> value="<?=$key->id_kab?> "><?=$key->nama_kab?></option>
                          <?php } ?>
                      </select>
                  </div>
                  <div class="form-group">
                      <label>Daerah Kecamatan</label>
                      <select class="form-control" name="id_kec">
                         <?php foreach($dataKecamatan as $key){?>
                              <option <?php if ($desa['id_kec'] === $key->id_kec) { echo 'selected'; }?> value="<?=$key->id_kec?> "><?=$key->nama_kec?></option>
                          <?php } ?>
                      </select>
                  </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" name="update_desa" class="btn btn-primary">Submit</button>
                </div>
      </form>