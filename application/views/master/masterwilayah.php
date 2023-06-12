<div id="notifications"><?=$this->session->flashdata('notif')?></div>
    <script>   
    $('#notifications').slideDown('slow').delay(3000).slideUp('slow');
    </script> 
<div class="card-body">
    <div class="row">
        <div class="col-sm-12 mb-5">
            <div class="d-flex flex-column align-items-start mb-3">
                <label for="">Master Data Provinsi</label>
                <a class="btn btn-sm btn-primary" href="<?= base_url("index.php/master/addProvinsi")?>">Add Provinsi</a>
            </div>
            <table id="prov" class="table table-bordered table-hover dataTable dtr-inline" aria-describedby="example2_info">
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
        <div class="col-sm-12 mb-5">
            <div class="d-flex flex-column align-items-start mb-3">
                <label for="">Master Data Kabupaten</label>
                <a class="btn btn-sm btn-primary" href="<?= base_url("index.php/master/addKabupaten")?>">Add Kabupaten</a>
            </div>
            <table id="kab" class="table table-bordered table-hover dataTable dtr-inline" aria-describedby="example2_info">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama Kabupaten</th>
                        <th>ID Kabupaten</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php 
                    $no=1;
                    foreach($dataKabupaten as $row){?>               
                        <tr class="odd">
                            <td><?=$no?></td>
                            <td><?=$row->id_kab?></td>
                            <td><?=$row->nama_kab?></td>
                            <td><a class="btn btn-sm btn-warning mr-2"  href="<?= base_url("index.php/master/updateKabupaten/").$row->id_kab?>"><i class="nav-icon fas fa-edit"></i></a><a class="btn btn-sm btn-danger"  href="<?= base_url("index.php/master/deleteKabupaten/").$row->id_kab?>"><i class="nav-icon fas fa-trash"></i></a></td>
                        </tr>
                    <?php 
                $no++;
                } ?>   
                </tbody>
            </table>
        </div>
        <div class="col-sm-12 mb-5">
            <div class="d-flex flex-column align-items-start mb-3">
                <label for="">Master Data Kecamatan</label>
                <a class="btn btn-sm btn-primary" href="<?= base_url("index.php/master/addKecamatan")?>">Add Kecamatan</a>
            </div>
            <table id="kec" class="table table-bordered table-hover dataTable dtr-inline" aria-describedby="example2_info">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama Kecamatan</th>
                        <th>ID Kecamatan</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php 
                    $no=1;
                    foreach($dataKecamatan as $row){?>               
                        <tr class="odd">
                            <td><?=$no?></td>
                            <td><?=$row->id_kec?></td>
                            <td><?=$row->nama_kec?></td>
                            <td><a class="btn btn-sm btn-warning mr-2"  href="<?= base_url("index.php/master/updateKecamatan/").$row->id_kec?>"><i class="nav-icon fas fa-edit"></i></a><a class="btn btn-sm btn-danger"  href="<?= base_url("index.php/master/deleteKecamatan/").$row->id_kec?>"><i class="nav-icon fas fa-trash"></i></a></td>
                        </tr>
                    <?php 
                $no++;
                } ?>   
                </tbody>
            </table>
        </div>
        <div class="col-sm-12 mb-5">
            <div class="d-flex flex-column align-items-start mb-3">
                <label for="">Master Data Desa</label>
                <a class="btn btn-sm btn-primary" href="<?= base_url("index.php/master/addDesa")?>">Add Desa</a>
            </div>
            <table id="desa" class="table table-bordered table-hover dataTable dtr-inline" aria-describedby="example2_info">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama Desa</th>
                        <th>ID Desa</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php 
                    $no=1;
                    foreach($dataDesa as $row){?>               
                        <tr class="odd">
                            <td><?=$no?></td>
                            <td><?=$row->id_desa?></td>
                            <td><?=$row->nama_desa?></td>
                            <td><a class="btn btn-sm btn-warning mr-2"  href="<?= base_url("index.php/master/updateDesa/").$row->id_desa?>"><i class="nav-icon fas fa-edit"></i></a><a class="btn btn-sm btn-danger"  href="<?= base_url("index.php/master/deleteDesa/").$row->id_desa?>"><i class="nav-icon fas fa-trash"></i></a></td>
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