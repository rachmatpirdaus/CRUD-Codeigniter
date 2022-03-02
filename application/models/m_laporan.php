<?php
class M_laporan extends CI_Model{
	
	function show_data(){
		$hasil=$this->db->query("SELECT * FROM tbl_laporan");
		return $hasil;
	}

	function hapus_data($nop){
		$hasil=$this->db->query("DELETE FROM tbl_laporan WHERE nop='$nop'");
		return $hasil;
	}
		function simpan_data($nop,$nama_pemilik,$desa,$kecamatan,$nama_pengirim,$tanggal){
		$hasil=$this->db->query("INSERT INTO tbl_laporan (nop,nama_pemilik,desa,kecamatan,nama_pengirim,tanggal) VALUES ('$nop','$nama_pemilik','$desa','$kecamatan','$nama_pengirim','$tanggal')");
		return $hasil;
	}
		function edit_data($nop,$nama_pemilik,$desa,$kecamatan,$nama_pengirim,$tanggal){
		$hasil=$this->db->query("UPDATE tbl_laporan SET nop='$nop',nama_pemilik='$nama_pemilik',desa='$desa',kecamatan='$kecamatan',nama_pengirim='$nama_pengirim' WHERE nop='$nop'");
		return $hasil;
	}
	
}