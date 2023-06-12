<div id="notifications"><?=$this->session->flashdata('notif')?></div>
    <script>   
    $('#notifications').slideDown('slow').delay(3000).slideUp('slow');
    </script> 
   <form role="form"<?php
				echo form_open_multipart(
                                	"index.php/master/addKabupaten",
                                	'role="form"'
                                ); ?>
                <div class="card-body">
                  <div class="form-group">
                    <label>ID Kabupaten</label>
                    <input type="text" name="id_kab" class="form-control" placeholder="Masukkan Kode Kabupaten" required>
                  </div>
                  <div class="form-group">
                    <label>Nama Kabupaten</label>
                    <input type="text" name="nama_kab" class="form-control" placeholder="Masukkan Nama Kabupaten" required>
                  </div>
                  <div class="form-group">
                        <label>Daerah Provinsi</label>
                        <select class="form-control" name="id_prov">
                            <?php foreach($dataProvinsi as $key){?>
                                <option value="<?=$key->id_prov?>"><?=$key->nama_prov?></option>
                            <?php } ?>
                        </select>
                      </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" name="tambah_kabupaten" class="btn btn-primary">Submit</button>
                </div>
      </form>