<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Datapengajuansppt extends CI_Controller {
  
  public function __construct(){
    parent::__construct();
    
    $this->load->model('m_datapengajuansppt');
    $this->load->helper(array('url')); 
    $this->load->library('form_validation');
  }
  
  public function index(){
    $data["pengajuansppt"] = $this->m_datapengajuansppt->getAll();
    $this->load->view("admin/v_datapengajuansppt", $data);
    $this->load->view('template/header');   
    $this->load->view('template/rightbar');  
  }
  
    public function add()
    {
        $pengajuansppt = $this->m_datapengajuansppt;
        $validation = $this->form_validation;
        $validation->set_rules($pengajuansppt->rules());

        if ($validation->run()) {
            $pengajuansppt->save();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
            redirect('admin/datapengajuansppt');
        }

    }


}