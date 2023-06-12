<div id="notifications"><?=$this->session->flashdata('notif')?></div>
    <script>   
    $('#notifications').slideDown('slow').delay(3000).slideUp('slow');
    </script> 
    <?php $id=$this->uri->segment(3);
    // print_r($kec)?>
   <form role="form"<?php
				echo form_open_multipart(
                                	"index.php/master/updateKecamatan/".$id,
                                	'role="form"'
                                ); ?>
                <div class="card-body">
                  <div class="form-group">
                    <label>ID Kecamatan</label>
                    <input type="text" name="id_kec" class="form-control" value="<?=$kec['id_kec']?>" placeholder="Masukkan Kode Kecamatan" required>
                  </div>
                  <div class="form-group">
                    <label>Nama Kecamatan</label>
                    <input type="text" name="nama_kec" class="form-control" value="<?=$kec['nama_kec']?>" placeholder="Masukkan Nama Kecamatan" required>
                  </div>
                  <div class="form-group">
                      <label>Daerah Provinsi</label>
                      <select class="form-control" name="id_prov">
                         <?php foreach($dataProvinsi as $key){
                            ?>
                              <option <?php if ($kec['id_prov'] === $key->id_prov) { echo 'selected'; }?> value="<?=$key->id_prov?> "><?=$key->nama_prov?></option>
                          <?php } ?>
                      </select>
                  </div>
                  <div class="form-group">
                      <label>Daerah Kabupaten</label>
                      <select class="form-control" name="id_kab">
                         <?php foreach($dataKabupaten as $key){?>
                              <option <?php if ($kec['id_kab'] === $key->id_kab) { echo 'selected'; }?> value="<?=$key->id_kab?> "><?=$key->nama_kab?></option>
                          <?php } ?>
                      </select>
                  </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" name="update_kecamatan" class="btn btn-primary">Submit</button>
                </div>
      </form>