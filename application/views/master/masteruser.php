<div id="notifications"><?=$this->session->flashdata('notif')?></div>
    <script>   
    $('#notifications').slideDown('slow').delay(3000).slideUp('slow');
    </script> 
<div class="card-body">
    <div class="row">
        <div class="col-sm-12 mb-5">
            <div class="d-flex flex-column align-items-start mb-3">
                <a class="btn btn-sm btn-primary" href="<?= base_url("index.php/master/addUser")?>">Add User</a>
            </div>
            <table id="user" class="table table-bordered table-hover dataTable dtr-inline" aria-describedby="example2_info">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama Provinsi</th>
                        <th>ID Provinsi</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php 
                    $no=1;
                    foreach($dataProvinsi as $row){?>               
                        <tr class="odd">
                            <td><?=$no?></td>
                            <td><?=$row->id_prov?></td>
                            <td><?=$row->nama_prov?></td>
                            <td><a class="btn btn-sm btn-warning mr-2"  href="<?= base_url("index.php/master/updateProvinsi/").$row->id_prov?>"><i class="nav-icon fas fa-edit"></i></a><a class="btn btn-sm btn-danger"  href="<?= base_url("index.php/master/deleteProvinsi/").$row->id_prov?>"><i class="nav-icon fas fa-trash"></i></a></td>
                        </tr>
                    <?php 
                $no++;
                } ?>   
                </tbody>
            </table>
        </div>
    </div>
</div>


<script>
        $(document).ready(function () {
            $('#prov').DataTable();  
            $('#kab').DataTable();  
            $('#kec').DataTable();  
            $('#desa').DataTable();  
        });
    </script>