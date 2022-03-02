<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Laporan extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this->load->model('m_laporan');
	}
	
	function index(){
		$x['data']=$this->m_laporan->show_data();
		$this->load->view('pld/v_laporan',$x);
		$this->load->view('template/header');
		$this->load->view('template/rightbar');
	}
		function hapus_data(){
		$nop=$this->input->post('nop');
		$this->m_laporan->hapus_data($nop);
		redirect('admin/laporan');
	}
		function simpan_data(){
		$nop=$this->input->post('nop');
		$nama_pemilik=$this->input->post('nama_pemilik');
		$desa=$this->input->post('desa');
		$kecamatan=$this->input->post('kecamatan');
		$nama_pengirim=$this->input->post('nama_pengirim');
		$tanggal=$this->input->post('tanggal');
		$this->m_laporan->simpan_data($nop,$nama_pemilik,$desa,$kecamatan,$nama_pengirim,$tanggal);
		redirect('admin/laporan');
	}
	function edit_data(){
		$nop=$this->input->post('nop');
		$nama_pemilik=$this->input->post('nama_pemilik');
		$desa=$this->input->post('desa');
		$kecamatan=$this->input->post('kecamatan');
		$nama_pengirim=$this->input->post('nama_pengirim');
		$tanggal=$this->input->post('tanggal');
		$this->m_laporan->edit_data($nop,$nama_pemilik,$desa,$kecamatan,$nama_pengirim,$tanggal);
		redirect('admin/laporan');
	}
}