<?php
class M_user extends CI_Model{
	
	function show_data(){
		$hasil=$this->db->query("SELECT * FROM tbl_user");
		return $hasil;
	}

	function simpan_data($username,$password,$nama_lengkap,$desa,$role){
		$hasil=$this->db->query("INSERT INTO tbl_user (username,password,nama_lengkap,desa,role) VALUES ('$username','$password','$nama_lengkap','$desa','$role')");
		return $hasil;
	}

	function edit_data($id_user,$username,$password,$nama_lengkap,$desa,$role){
		$hasil=$this->db->query("UPDATE tbl_user SET username='$username',password='$password',nama_lengkap='$nama_lengkap',desa='$desa',role='$role' WHERE id_user='$id_user'");
		return $hasil;
	}

	function hapus_data($id_user){
		$hasil=$this->db->query("DELETE FROM tbl_user WHERE id_user='$id_user'");
		return $hasil;
	}
	
}