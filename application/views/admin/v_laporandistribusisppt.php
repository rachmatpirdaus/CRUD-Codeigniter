<!DOCTYPE html>
<html lang="id">
<title>Laporan Distribusi SPPT</title>
<!-- Menu -->
<head>
    <link rel="stylesheet"  href="<?php echo base_url().'assets/plugins/bootstrap-datepicker/css/bootstrap-datepicker.css'?>">
     <link rel="stylesheet"  href="<?php echo base_url().'assets/plugins/bootstrap-datepicker/css/bootstrap-datepicker.min.css'?>">
</head>
 <section>
        <!-- Left Sidebar -->
        <aside id="leftsidebar" class="sidebar">
            <!-- User Info -->
            <div class="user-info">
                <div class="info-container">
                    <div class="name" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><?php echo $this->session->userdata("user_nama") ?></div>
                    <div class="btn-group user-helper-dropdown">
                        <i class="material-icons" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">keyboard_arrow_down</i>
                        <ul class="dropdown-menu pull-right">
                            <li><a href="<?php echo base_url() ?>admin/dashboard/logout" ><i class="material-icons">input</i>Sign Out</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- #User Info -->
            <!-- Menu -->
           <div class="menu">
                <ul class="list">
                    <li class="header">MAIN NAVIGATION</li>
                    <li>
                        <a href="<?php echo site_url('admin/dashboard')?>">
                            <i class="material-icons">home</i>
                            <span>Home</span>
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo site_url('admin/user')?>">
                            <i class="material-icons">perm_identity</i>
                            <span>User</span>
                        </a>
                    </li>
                    <li class="active">
                        <a href="<?php echo site_url('admin/laporan')?>">
                            <i class="material-icons">book</i>
                            <span>Laporan Distribusi SPPT</span>
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo site_url('admin/datapengajuansppt')?>">
                            <i class="material-icons">add_to_queue</i>
                            <span>Data Pengajuan SPPT Baru</span>
                        </a>
                    </li>
                      </ul>
            </div>
            <!-- #Menu -->
            <!-- Footer -->
             <div class="legal">
                <div class="copyright">
                    &copy; 2019 <a>Rachmat Pirdaus</a>
                </div>
                <div class="version">
                   Universitas Pakuan
                </div>
            </div>
            <!-- #Footer -->
        </aside>


  <section class="content">
        <div class="container-fluid">
              <div class="block-header">
                <h2>
                    Data Laporan Distribusi SPPT
                         <div class="pull-right"><a class="btn btn-sm btn-success" data-toggle="modal" data-target="#modal_add_new"> Tambah Laporan</a></div>       
                </h2>
            </div><br>
            <!-- Basic Examples -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2 style="text-align: center;">
                                Tabel Laporan Distribusi SPPT
                            </h2>
                        </div>
                        <div class="body">
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped table-hover dataTable js-exportable" >
                                    <thead>
                                        <tr>
                                            <th>Nop</th>
                                            <th>Nama Pemilik</th>
                                            <th>Desa</th>
                                            <th>Kecamatan</th>
                                            <th>Nama Pengirim</th>
                                            <th>Tanggal</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
             <?php
                    foreach($data->result_array() as $i):
                    $nop=$i['nop'];
                    $nama_pemilik=$i['nama_pemilik'];
                    $desa=$i['desa'];
                    $kecamatan=$i['kecamatan'];
                    $nama_pengirim=$i['nama_pengirim'];
                    $tanggal=$i['tanggal'];
            ?>
            <tr>
                <td><?php echo $nop;?></td>
                <td><?php echo $nama_pemilik;?></td>
                <td><?php echo $desa;?></td>
                <td><?php echo $kecamatan;?></td>
                <td><?php echo $nama_pengirim;?></td>
                <td><?php echo $tanggal;?></td>
            </tr>
            <?php endforeach;?>
              </tbody>
 		          </table>
                     </div>

            <!-- ============ MODAL ADD BARANG =============== -->
        <div class="modal fade" id="modal_add_new" tabindex="-1" role="dialog" aria-labelledby="largeModal" aria-hidden="true">
            <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">x</button>
                <h3 class="modal-title" id="myModalLabel">Tambah Data</h3>
            </div>
            <form class="form-horizontal" method="post" action="<?php echo base_url().'admin/laporan/simpan_data'?>">
                <div class="modal-body">

                    <div class="form-group">
                        <label class="control-label col-xs-3" >NOP</label>
                        <div class="col-xs-8">
                            <input name="nop" class="form-control" type="text" placeholder="NOP..." required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-xs-3" >Nama Pemilik</label>
                        <div class="col-xs-8">
                            <input name="nama_pemilik" class="form-control" type="text" placeholder="Nama Pemilik..." required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-xs-3" >Desa</label>
                        <div class="col-xs-8">
                            <input name="desa" class="form-control" type="text" placeholder="Desa..." required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-xs-3" >Kecamatan</label>
                        <div class="col-xs-8">
                            <input name="kecamatan" class="form-control" type="text" placeholder="Kecamatan..." required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-xs-3" >Nama Pengirim</label>
                        <div class="col-xs-8">
                            <input name="nama_pengirim" class="form-control" type="text" placeholder="Nama Pengirim...">
                        </div>
                    </div>

                        <div class="form-group">
                        <label class="control-label col-xs-3" >Tanggal</label>
                        <div class="col-xs-8">
                            <input name="tanggal" id="tanggal" class="form-control datepicker" type="text" placeholder="Tanggal...">
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button class="btn" data-dismiss="modal" aria-hidden="true">Tutup</button>
                    <button class="btn btn-info">Simpan</button>
                </div>
            </form>
            </div>
            </div>
        </div>

  <!-- ============ MODAL EDIT USER =============== -->
                  <?php
                    foreach($data->result_array() as $i):
                    $nop=$i['nop'];
                    $nama_pemilik=$i['nama_pemilik'];
                    $desa=$i['desa'];
                    $kecamatan=$i['kecamatan'];
                    $nama_pengirim=$i['nama_pengirim'];
                    $tanggal=$i['tanggal'];
            ?>
        <div class="modal fade" id="modal_edit<?php echo $nop;?>" tabindex="-1" role="dialog" aria-labelledby="largeModal" aria-hidden="true">
            <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">x</button>
                <h3 class="modal-title" id="myModalLabel">Edit Data</h3>
            </div>
            <form class="form-horizontal" method="post" action="<?php echo base_url().'admin/laporan/edit_data'?>">
                <div class="modal-body">
  <div class="form-group">
                        <label class="control-label col-xs-3" >NOP</label>
                        <div class="col-xs-8">
                            <input name="nop" class="form-control" type="text" value="<?php echo $nop;?>" placeholder="NOP..." required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-xs-3" >Nama Pemilik</label>
                        <div class="col-xs-8">
                            <input name="nama_pemilik" class="form-control" type="text" value="<?php echo $nama_pemilik;?>" placeholder="Nama Pemilik..." required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-xs-3" >Desa</label>
                        <div class="col-xs-8">
                            <input name="desa" class="form-control" type="text" value="<?php echo $desa;?>"placeholder="Desa..." required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-xs-3" >Kecamatan</label>
                        <div class="col-xs-8">
                            <input name="kecamatan" class="form-control" type="text" value="<?php echo $kecamatan;?>" placeholder="Kecamatan..." required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-xs-3" >Nama Pengirim</label>
                        <div class="col-xs-8">
                            <input name="nama_pengirim" class="form-control" type="text" value="<?php echo $nama_pengirim;?>" placeholder="Nama Pengirim...">
                        </div>
                    </div>

                        <div class="form-group">
                        <label class="control-label col-xs-3" >Tanggal</label>
                        <div class="col-xs-8">
                            <input name="tanggal" id="tanggal" class="form-control datepicker" type="text" value="<?php echo $tanggal;?>"" placeholder="Tanggal...">
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button class="btn" data-dismiss="modal" aria-hidden="true">Tutup</button>
                    <button class="btn btn-info">Simpan</button>
                </div>
            </form>
            </div>
            </div>
        </div>

    <?php endforeach;?>
    <!--END MODAL EDIT User-->

                 <?php
                    foreach($data->result_array() as $i):
                    $nop=$i['nop'];
                    $nama_pemilik=$i['nama_pemilik'];
                    $desa=$i['desa'];
                    $kecamatan=$i['kecamatan'];
                    $nama_pengirim=$i['nama_pengirim'];
                    $tanggal=$i['tanggal'];
            ?>
     <!-- ============ MODAL HAPUS User =============== -->
        <div class="modal fade" id="modal_hapus<?php echo $nop;?>" tabindex="-1" role="dialog" aria-labelledby="largeModal" aria-hidden="true">
            <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">x</button>
                <h3 class="modal-title" id="myModalLabel">Hapus User</h3>
            </div>
            <form class="form-horizontal" method="post" action="<?php echo base_url().'admin/laporan/hapus_data'?>">
                <div class="modal-body">
                    <p>Anda yakin mau menghapus data?</p>
                </div>
                <div class="modal-footer">
                    <input type="hidden" name="nop" value="<?php echo $nop;?>">
                    <button class="btn" data-dismiss="modal" aria-hidden="true">Tutup</button>
                    <button class="btn btn-danger">Hapus</button>
                </div>
            </form>
            </div>
            </div>
        </div>
    </div>

    <?php endforeach;?>

    <script src="<?php echo base_url().'assets/plugins/jquery/jquery.min.js'?>"></script>

    <!-- Bootstrap Core Js -->
    <script src="<?php echo base_url().'assets/plugins/bootstrap/js/bootstrap.js'?>"></script>

    <!-- Select Plugin Js -->
    <script src="<?php echo base_url().'assets/plugins/bootstrap-select/js/bootstrap-select.js'?>"></script>

    <!-- Slimscroll Plugin Js -->
    <script src="<?php echo base_url().'assets/plugins/jquery-slimscroll/jquery.slimscroll.js'?>"></script>

    <!-- Waves Effect Plugin Js -->
    <script src="<?php echo base_url().'assets/plugins/node-waves/waves.js'?>"></script>

    <!-- Jquery DataTable Plugin Js -->
    <script src="<?php echo base_url().'assets/plugins/jquery-datatable/jquery.dataTables.js'?>"></script>
    <script src="<?php echo base_url().'assets/plugins/jquery-datatable/skin/bootstrap/js/dataTables.bootstrap.js'?>"></script>
    <script src="<?php echo base_url().'assets/plugins/jquery-datatable/extensions/export/dataTables.buttons.min.js'?>"></script>
    <script src="<?php echo base_url().'assets/plugins/jquery-datatable/extensions/export/buttons.flash.min.js'?>"></script>
    <script src="<?php echo base_url().'assets/plugins/jquery-datatable/extensions/export/jszip.min.js'?>"></script>
    <script src="<?php echo base_url().'assets/plugins/jquery-datatable/extensions/export/pdfmake.min.js'?>"></script>
    <script src="<?php echo base_url().'assets/plugins/jquery-datatable/extensions/export/vfs_fonts.js'?>"></script>
    <script src="<?php echo base_url().'assets/plugins/jquery-datatable/extensions/export/buttons.html5.min.js'?>"></script>
    <script src="<?php echo base_url().'assets/plugins/jquery-datatable/extensions/export/buttons.print.min.js'?>"></script>

    <!-- Custom Js -->
    <script src="<?php echo base_url().'assets/js/admin.js'?>"></script>
    <script src="<?php echo base_url().'assets/js/pages/tables/jquery-datatable.js'?>"></script>

 <script src="<?php echo base_url().'assets/plugins/bootstrap-datepicker/js/bootstrap-datepicker.js'?>"></script>
   <script type="text" src="<?php echo base_url().'assets/plugins/bootstrap-datepicker/js/bootstrap-datepicker.min.js'?>"></script>
<script>
 $(function(){
  $('#tanggal').datepicker({
      format: 'yyyy-mm-dd',
      autoclose: true,
      todayHighlight: true,
  });
 });
</script>
          <!-- Jquery Core Js -->
    <!-- Demo Js -->
    <script src="<?php echo base_url().'assets/js/demo.js'?>"></script>
    <script src="<?php echo base_url().'assets/js/jquery-2.2.4.min.js'?>"></script>
    <script src="<?php echo base_url().'assets/js/moment.js'?>"></script>
 
    </body>
</html>
  