<!DOCTYPE html>
<html lang="id">
<title>Data User</title>
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
                            <li><a href="<?php echo base_url() ?>admin/dashboard/logout"><i class="material-icons">input</i>Sign Out</a></li>
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
                    <li class="active">
                        <a href="<?php echo site_url('admin/user')?>">
                            <i class="material-icons">perm_identity</i>
                            <span>User</span>
                        </a>
                    </li>
                    <li>
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
        <!-- #END# Left Sidebar -->
        <!-- Right Sidebar -->
        <section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <h2>
                    Data User
                         <div class="pull-right"><a class="btn btn-sm btn-success" data-toggle="modal" data-target="#modal_add_new"> Tambah User</a></div>       
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
                                            <th>Id_user</th>
                                            <th>Username</th>
                                            <th>Password</th>
                                            <th>Nama Lengkap</th>
                                            <th>Desa</th>
                                            <th>Role</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                       <?php
                                     foreach($data->result_array() as $i):
                    $id_user=$i['id_user'];
                    $username=$i['username'];
                    $password=$i['password'];
                    $nama_lengkap=$i['nama_lengkap'];
                    $desa=$i['desa'];
                    $role=$i['role'];
            ?>
            <tr>
                <td><?php echo $id_user;?></td>
                <td><?php echo $username;?></td>
                <td><?php echo $password;?></td>
                <td><?php echo $nama_lengkap;?></td>
                <td><?php echo $desa;?></td>
                <td><?php echo $role;?></td>
                <td style="width: 120px;">
                    <a class="btn btn-xs btn-info" data-toggle="modal" data-target="#modal_edit<?php echo $id_user;?>"> Edit</a>
                    <a class="btn btn-xs btn-danger" data-toggle="modal" data-target="#modal_hapus<?php echo $id_user;?>"> Hapus</a>
                </td>
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
                <h3 class="modal-title" id="myModalLabel">Tambah User</h3>
            </div>
            <form class="form-horizontal" method="post" action="<?php echo base_url().'admin/user/simpan_data'?>">
                <div class="modal-body">

                    <div class="form-group">
                        <label class="control-label col-xs-3" >Id_User</label>
                        <div class="col-xs-8">
                            <input name="id_user" class="form-control" type="text" placeholder="Id_User..." required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-xs-3" >Username</label>
                        <div class="col-xs-8">
                            <input name="username" class="form-control" type="text" placeholder="Username..." required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-xs-3" >Password</label>
                        <div class="col-xs-8">
                            <input name="password" class="form-control" type="text" placeholder="Password..." required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-xs-3" >Nama Lengkap</label>
                        <div class="col-xs-8">
                            <input name="nama_lengkap" class="form-control" type="text" placeholder="Nama Lengkap..." required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-xs-3" >Desa</label>
                        <div class="col-xs-8">
                            <input name="desa" class="form-control" type="text" placeholder="Desa...">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-xs-3" >Role</label>
                        <div class="col-xs-8">
                             <select name="role" class="form-control" required>
                                <option value="">-PILIH-</option>
                                <option value="admin">admin</option>
                                <option value="pld">pld</option>
                             </select>
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
    <!--END MODAL ADD USER-->

    <!-- ============ MODAL EDIT USER =============== -->
                    <?php
                         foreach($data->result_array() as $i):
                    $id_user=$i['id_user'];
                    $username=$i['username'];
                    $password=$i['password'];
                    $nama_lengkap=$i['nama_lengkap'];
                    $desa=$i['desa'];
                    $role=$i['role'];
            ?>
        <div class="modal fade" id="modal_edit<?php echo $id_user;?>" tabindex="-1" role="dialog" aria-labelledby="largeModal" aria-hidden="true">
            <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">x</button>
                <h3 class="modal-title" id="myModalLabel">Edit User</h3>
            </div>
            <form class="form-horizontal" method="post" action="<?php echo base_url().'admin/user/edit_data'?>">
                <div class="modal-body">

                    <div class="form-group">
                        <label class="control-label col-xs-3" >Id User</label>
                        <div class="col-xs-8">
                            <input name="id_user" value="<?php echo $id_user;?>" class="form-control" type="text" placeholder="Id User..." readonly>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-xs-3" >Username</label>
                        <div class="col-xs-8">
                            <input name="username" value="<?php echo $username;?>" class="form-control" type="text" placeholder="Username..." required>
                        </div>
                    </div>

                     <div class="form-group">
                        <label class="control-label col-xs-3" >Password</label>
                        <div class="col-xs-8">
                            <input name="password" value="<?php echo $password;?>" class="form-control" type="text" placeholder="Password..." required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-xs-3" >Nama Lengkap</label>
                        <div class="col-xs-8">
                            <input name="nama_lengkap" value="<?php echo $nama_lengkap;?>" class="form-control" type="text" placeholder="Nama Lengkap..." required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-xs-3" >Desa</label>
                        <div class="col-xs-8">
                            <input name="desa" value="<?php echo $desa;?>" class="form-control" type="text" placeholder="Desa...">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-xs-3" >Role</label>
                        <div class="col-xs-8">
                             <select name="role" class="form-control" required>
                                <option value="">-PILIH-</option>
                                <?php if($role=='admin'):?>
                                    <option value="admin" selected>admin</option>
                                    <option value="pld">pld</option>
                                <?php else:?>
                                    <option value="admin">admin</option>
                                    <option value="pld" selected>pld</option>
                                <?php endif;?>
                             </select>
                        </div>
                    </div>

                </div>

                <div class="modal-footer">
                    <button class="btn" data-dismiss="modal" aria-hidden="true">Tutup</button>
                    <button class="btn btn-info">Update</button>
                </div>
            </form>
            </div>
            </div>
        </div>

    <?php endforeach;?>
    <!--END MODAL EDIT User-->

                 <?php
         foreach($data->result_array() as $i):
                    $id_user=$i['id_user'];
                    $username=$i['username'];
                    $password=$i['password'];
                    $nama_lengkap=$i['nama_lengkap'];
                    $desa=$i['desa'];
                    $role=$i['role'];
            ?>
     <!-- ============ MODAL HAPUS User =============== -->
        <div class="modal fade" id="modal_hapus<?php echo $id_user;?>" tabindex="-1" role="dialog" aria-labelledby="largeModal" aria-hidden="true">
            <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">x</button>
                <h3 class="modal-title" id="myModalLabel">Hapus User</h3>
            </div>
            <form class="form-horizontal" method="post" action="<?php echo base_url().'admin/user/hapus_data'?>">
                <div class="modal-body">
                    <p>Anda yakin mau menghapus user <b><?php echo $nama_lengkap;?></b></p>
                </div>
                <div class="modal-footer">
                    <input type="hidden" name="id_user" value="<?php echo $id_user;?>">
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
