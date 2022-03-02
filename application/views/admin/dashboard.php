<!DOCTYPE html>
<html>
<title>Dashboard</title>
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
                    <li class="active">
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
            <!-- Body Copy -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2 style="text-align: center; font-weight: bold;">
                                Profil
                            </h2>
                        </div>
                        <div class="body">
                            <p style="text-align: justify;">
                                Badan Pengelolaan Pendapatan Daerah  (BAPPENDA) Kabupaten Bogor adalah suatu lembaga teknis di lingkungan Pemerintah Kabupaten Bogor yang dibentuk berdasarkan Peraturan Daerah Kabupaten Bogor Nomor 70 Tahun 2016 tentang Pembentukan Lembaga Teknis Daerah (Lembaran Daerah Kabupaten Bogor Tahun 2016 Nomor 70).<br>
                                Berdasarkan Peraturan Daerah No. 70 Tahun 2016 tentang Kedudukan, Susunan Organisasi, Tugas dan Fungsi, serta Tata Kerja Badan Pengelolaan Pendapatan Daerah, Badan merupakan unsur  penunjang urusan pemerintahan yang melaksanakan fungsi penunjang keuangan di bidang pendapatan daerah, dipimpin oleh seorang Kepala Badan yang berkedudukan dibawah dan bertanggung jawab kepada Bupati melalui Sekretaris Daerah.<br>
                                Bappenda memiliki peran yang strategis, yakni di satu sisi merupakan pengelola pajak daerah, di sisi lain merupakan koordinator pendapatan daerah yang ikut bertanggung jawab atas keberhasilan penerimaan pendapatan daerah secara keseluruhan.
                                Bappenda Kabupaten Bogor memiliki 10 unit pelaksaan teknik (UPT) yang salah satunya terletak di daerah Jalan Alternatif Sentul No.39, Cijujung, Kecamatan Sukaraja, Bogor, Jawa Barat  yaitu  Upt Pajak Daerah Kelas A Sukaraja. UPT adalah Unsur Pelaksana Tugas Teknis Badan, yang dipimpin oleh seorang Kepala UPT yang berada dibawah dan bertanggung jawab kepada Kepala Badan UPT Pajak Daerah kelas A Sukaraja bertanggung jawab untuk mengelola 2 Kecamatan yaitu Kecamatan Sukaraja dan Kecamatan Babakan Madang. Kecamatan sukaraja mengelola 13 desa dan Kecamatan Babakan Madang mengelola 9 desa. UPT mempunyai tugas melaksanakan sebagian tugas, tanggung jawab dan wewenang teknis Badan di bidang pajak daerah di wilayah kerjanya.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- #END# Body Copy -->
            <!-- Headings -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2 style="text-align: center; font-weight: bold;">
                                Visi dan Misi
                            </h2>
                        </div>
                        <div class="body">
                            <p style="text-align: justify;" class="m-b-30">Visi Kabupaten Bogor adalah :
        “KABUPATEN BOGOR MENJADI KABUPATEN TERMAJU DI INDONESIA“<br>
         Misi Kabupaten Bogor adalah:<br>
        1. Meningkatkan Kesalehan Sosial dan Kejehateraan Masyarakat;
        2. Meningkatkan Daya Saing Ekonomi Masyarakat dan Pengembangan Usaha Berbasis Sumberdaya Alam dan Pariwisata;<br>
        3. Meningkatkan Integrasi, Koneksitas, Kualitas dan Kuantitas Infrastruktur Wilayah dan Pengelolaan Lingkungan Hidup yang Berkelanjutan;<br>
        4. Meningkatkan Aksesibilitas dan Kualitas Penyelenggaraan Pendidikan dan Pelayanan Kesehatan;<br>
        5. Meningkatkan Kinerja Penyelenggaraan Pemerintahan dan Kerjasama Antar Daerah dalam Kerangka Tata Kelola Pemerintahan yang Baik.<br>

        Guna mendukung pencapaian visi dan misi tersebut, Badan Pengelolaan Pendapatan Daerah sesuai tugasnya yaitu membantu Bupati dalam melaksanakan urusan pemerintahan daerah berdasarkan asas otonomi di bidang pendapatan daerah dan dalam melaksanakan tugas pokok tersebut Badan Pengelolaan Pendapatan Daerah Kabupaten Bogor mempunyai fungsi, sebagai berikut :<br>
        1. Perumusan kebijakan teknis di bidang pendapatan daerah;<br>
        2. Penyelenggaraan urusan pemerintah dan pelayanan umum di bidang pendapatan daerah;<br>
        3. Pembinaan dan pelaksanaan tugas di bidang pendapatan daerah;<br>
        4. Pengelolaan kesekretariatan Badan; dan<br>
        5. Pelaksanaan tugas lain yang diberikan oleh Bupati sesuai dengan tugas dan fungsinya.<br>

        Secara umum tugas Badan Pengelolaan Pendapatan Daerah terkait dengan pencapaian visi dan seluruh misi Kepala Daerah dan wakil Kepala Daerah, namun secara khusus, tugas dan fungsi Badan Pengelolaan Pendapatan Daerah berkontribusi langsung dalam mendukung pencapaian misi ke-5, yaitu Meningkatkan Kinerja Penyelenggaraan Pemerintahan dan Kerjasama Antar Daerah dalam Kerangka Tata Kelola Pemerintahan yang Baik.</p>

                       
                        </div>
                    </div>
                </div>
            </div>
            <!-- #END# Headings -->
          <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2 style="text-align: center; font-weight: bold;">
                              Struktur Organisasi UPT Pajak Daerah Kelas A Sukaraja Kabupaten Bogor
                            </h2>
                        </div>
                        <div class="body">
                  <img style="padding-left: 280px" src="../assets/images/Struktur.png">
      
                        </div>
                    </div>
            </div>
    </section>
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
