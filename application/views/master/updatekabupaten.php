<div id="notifications"><?=$this->session->flashdata('notif')?></div>
    <script>   
    $('#notifications').slideDown('slow').delay(3000).slideUp('slow');
    </script> 
    <?php $id=$this->uri->segment(3);?>
   <form role="form"<?php
				echo form_open_multipart(
                                	"index.php/master/updateKabupaten/".$id,
                                	'role="form"'
                                ); ?>
                <div class="card-body">
                  <div class="form-group">
                    <label>ID Kabupaten</label>
                    <input type="text" name="id_kab" class="form-control" value="<?=$kab['id_kab']?>" placeholder="Masukkan Kode Kabupaten" required>
                  </div>
                  <div class="form-group">
                    <label>Nama Kabupaten</label>
                    <input type="text" name="nama_kab" class="form-control" value="<?=$kab['nama_kab']?>" placeholder="Masukkan Nama Kabupaten" required>
                  </div>
                  <div class="form-group">
                      <label>Daerah Provinsi</label>
                      <select class="form-control" name="id_prov">
                         <?php foreach($dataProvinsi as $key){?>
                              <option <?php if ($kab['id_prov'] === $key->id_prov) { echo 'selected'; }?> value="<?=$key->id_prov?> "><?=$key->nama_prov?></option>
                          <?php } ?>
                      </select>
                  </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" name="update_kabupaten" class="btn btn-primary">Submit</button>
                </div>
      </form>