<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class User extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this->load->model('m_user');
	}
	
	function index(){
		$x['data']=$this->m_user->show_data();
		$this->load->view('admin/v_user',$x);
		$this->load->view('template/header');
		$this->load->view('template/rightbar');   
		
	}

	function simpan_data(){
		$username=$this->input->post('username');
		$password=md5($this->input->post('password'));
		$nama_lengkap=$this->input->post('nama_lengkap');
		$desa=$this->input->post('desa');
		$role=$this->input->post('role');
		$this->m_user->simpan_data($username,$password,$nama_lengkap,$desa,$role);
		redirect('admin/user');
	}

	function edit_data(){
		$id_user=$this->input->post('id_user');
		$username=$this->input->post('username');
		$password=md5($this->input->post('password'));
		$nama_lengkap=$this->input->post('nama_lengkap');
		$desa=$this->input->post('desa');
		$role=$this->input->post('role');
		$this->m_user->edit_data($id_user,$username,$password,$nama_lengkap,$desa,$role);
		redirect('admin/user');
	}

	function hapus_data(){
		$id_user=$this->input->post('id_user');
		$this->m_user->hapus_data($id_user);
		redirect('admin/user');
	}
	function hashpassword(){
		return md5($this->input->post('password'));
	}
}