<div id="notifications"><?=$this->session->flashdata('notif')?></div>
    <script>   
    $('#notifications').slideDown('slow').delay(3000).slideUp('slow');
    </script> 
   <form role="form"<?php
				echo form_open_multipart(
                                	"index.php/master/addProvinsi",
                                	'role="form"'
                                ); ?>
                <div class="card-body">
                  <div class="form-group">
                    <label>ID Provinsi</label>
                    <input type="text" name="id_prov" class="form-control" placeholder="Masukkan Kode Provinsi" required>
                  </div>
                  <div class="form-group">
                    <label>Nama Provinsi</label>
                    <input type="text" name="nama_prov" class="form-control" placeholder="Masukkan Nama Provinsi" required>
                  </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" name="tambah_provinsi" class="btn btn-primary">Submit</button>
                </div>
      </form>