<!DOCTYPE html>
<html lang="id">
<title>Data Pengajuan SPPT</title>
<!-- Menu -->
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
                            <li><a href="<?php echo base_url() ?>pld/dashboard/logout"><i class="material-icons">input</i>Sign Out</a></li>
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
                        <a href="<?php echo site_url('pld/dashboard')?>">
                            <i class="material-icons">home</i>
                            <span>Home</span>
                        </a>
                    </li>
                     <li>
                        <a href="<?php echo site_url('pld/laporan')?>">
                            <i class="material-icons">book</i>
                            <span>Laporan Distribusi SPPT</span>
                        </a>
                    </li>
                    <li class="active">
                        <a href="<?php echo site_url('pld/datapengajuansppt')?>">
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
        <!-- #END# Left Sidebar -->
        <!-- Right Sidebar -->
        <section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <h2>
                    Data Pengajuan SPPT Baru
                         <div class="pull-right"><a class="btn btn-sm btn-success" data-toggle="modal" data-target="#modal_add_new"> Tambah Data Pengajuan</a></div>       
                </h2>
            </div><br>
            <!-- Basic Examples -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">

                            <h2 style="text-align: center;">
                                Tabel Data User
                            </h2>
                        </div>
                        <div class="body">
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped table-hover js-basic-example dataTable" >
                                    <thead>
                                        <tr>
                                            <th>Nama WP</th>
                                            <th>NIK</th>
                                            <th>KTP</th>
                                            <th>IMB</th>
                                            <th>Lokasi Tanah</th>
                                            <th>Foto SPPT Tetangga</th>
                                            <th>SK Belum Mempunyai PBB</th>
                                            <th>Bukti Kepemilikan</th>
                                            <th>Nama PLD</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                     <?php foreach ($pengajuansppt as $row): ?>
                                    <tr>
                                        <td width="150">
                                            <?php echo $row->nama_wp ?>
                                        </td>
                                        <td>
                                            <?php echo $row->nik ?>
                                        </td>
                                        <td>
                                            <img src="<?php echo base_url('upload/fotoktp/'.$row->ktp) ?>" width="64" />
                                        </td>
                                        <td>
                                            <img src="<?php echo base_url('upload/fotoktp/'.$row->imb) ?>" width="64" />
                                        </td>
                                        <td>
                                            <img src="<?php echo base_url('upload/fotoktp/'.$row->lokasi_tanah) ?>" width="64" />
                                        </td>
                                        <td>
                                            <img src="<?php echo base_url('upload/fotoktp/'.$row->foto_pbb_tetangga) ?>" width="64" />
                                        </td>
                                        <td>
                                            <img src="<?php echo base_url('upload/fotoktp/'.$row->sk_belum_punya_pbb) ?>" width="64" />
                                        </td>
                                        <td>
                                            <img src="<?php echo base_url('upload/fotoktp/'.$row->bukti_kepemilikan) ?>" width="64" />
                                        </td>
                                        <td>
                                            <?php echo $row->nama_pld ?>
                                        </td>
                                        <td>
                                         <a class="btn btn-xs btn-danger" data-toggle="modal" data-target="#modal_hapus<?php echo $row->id;?>"> Hapus</a>
                                        </td>
                                        <td> 
                                        </td>
                                    </tr>
                                    <?php endforeach; ?>
                                    </tbody>
                                </table>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                         <!-- ============ MODAL ADD BARANG =============== -->

        <div class="modal fade" id="modal_add_new" tabindex="-1" role="dialog" aria-labelledby="largeModal" aria-hidden="true">
            <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">x</button>
                <h3 class="modal-title" id="myModalLabel">Tambah Data</h3>
            </div>
            <form class="form-horizontal" method="post" enctype="multipart/form-data" action="<?php echo base_url().'pld/datapengajuansppt/add'?>">
                <div class="modal-body">
                    <div class="form-group">
                        <label class="control-label col-xs-3" >Id</label>
                        <div class="col-xs-8">
                            <input name="id" class="form-control" type="text" placeholder="Id_User..." required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-xs-3" >Nama WP</label>
                        <div class="col-xs-8">
                            <input name="nama_wp" class="form-control" type="text" placeholder="Nama WP..." required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-xs-3" >NIK</label>
                        <div class="col-xs-8">
                            <input name="nik" class="form-control" type="text" placeholder="NIK..." >
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-xs-3" >KTP</label>
                        <div class="col-xs-8">
                            <input name="ktp" class="form-control" type="file" placeholder="KTP..." >
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-xs-3" >IMB</label>
                        <div class="col-xs-8">
                            <input name="imb" class="form-control" type="file" placeholder="IMB..." >
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-xs-3" >Lokasi Tanah</label>
                        <div class="col-xs-8">
                            <input name="lokasi_tanah" class="form-control" type="file" placeholder="Lokasi Tanah...">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-xs-3" >Foto PBB Tetangga</label>
                        <div class="col-xs-8">
                            <input name="foto_pbb_tetangga" class="form-control" type="file" placeholder="Foro PBB Tetangga...">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-xs-3" >SK Belum Mempunyai PBB</label>
                        <div class="col-xs-8">
                            <input name="sk_belum_punya_pbb" class="form-control" type="file" placeholder="SK Belum Mempunyai PBB...">
                        </div>
                    </div>

                     <div class="form-group">
                        <label class="control-label col-xs-3" >Bukti Kepemilikan</label>
                        <div class="col-xs-8">
                            <input name="bukti_kepemilikan" class="form-control" type="file" placeholder="Desa...">
                        </div>
                    </div>

                     <div class="form-group">
                        <label class="control-label col-xs-3" >Nama PLD</label>
                        <div class="col-xs-8">
                            <input name="nama_pld" class="form-control" type="text" placeholder="Nama PLD...">
                        </div>
                    </div>

                </div>

                <div class="modal-footer">
                    <button class="btn" data-dismiss="modal" aria-hidden="true">Tutup</button>
                    <button class="btn btn-info" name="submit" type="submit">Simpan</button>
                </div>
            </form>
            </div>
        </div>
    </div>

        <?php foreach ($pengajuansppt as $row): ?>
     <!-- ============ MODAL HAPUS User =============== -->
        <div class="modal fade" id="modal_hapus<?php echo $row->id;?>" tabindex="-1" role="dialog" aria-labelledby="largeModal" aria-hidden="true">
            <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">x</button>
                <h3 class="modal-title" id="myModalLabel">Hapus User</h3>
            </div>
            <form class="form-horizontal" method="post" action="<?php echo base_url().'pld/datapengajuansppt/hapus_data'?>">
                <div class="modal-body">
                    <p>Anda yakin mau menghapus data <b><?php echo $row->nama_wp;?></b></p>
                </div>
                <div class="modal-footer">
                    <input type="hidden" name="id" value="<?php echo $row->id;?>">
                    <button class="btn" data-dismiss="modal" aria-hidden="true">Tutup</button>
                    <button class="btn btn-danger">Hapus</button>
                </div>
            </form>
            </div>
            </div>
        </div>
    <?php endforeach;?>

   <script src="<?php echo base_url().'assets/plugins/jquery/jquery.min.js'?>"></script>

    <!-- Bootstrap Core Js -->
    <script src="<?php echo base_url().'assets/plugins/bootstrap/js/bootstrap.js'?>"></script>

    <!-- Select Plugin Js -->
  

    <!-- Slimscroll Plugin Js -->
    <script src="<?php echo base_url().'assets/plugins/jquery-slimscroll/jquery.slimscroll.js'?>"></script>

    <!-- Waves Effect Plugin Js -->
    <script src="<?php echo base_url().'assets/plugins/node-waves/waves.js'?>"></script>

    <!-- Custom Js -->
    <script src="<?php echo base_url().'assets/js/admin.js'?>"></script>

    <!-- Demo Js -->
    <script src="<?php echo base_url().'assets/js/demo.js'?>"></script>
     <script src="<?php echo base_url().'assets/js/moment.js'?>"></script>


    <script>
    $(document).ready(function(){
        $('#mydata').DataTable();
    });
    </script>
</body>
</html>