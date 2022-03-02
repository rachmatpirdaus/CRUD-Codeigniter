<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_datapengajuansppt extends CI_Model {
  private $_table = "pengajuansppt";

      public $id;
      public $nama_wp;
      public $nama_pld;


 public function rules()
    {
        return [
            ['field' => 'nama_wp',
            'label' => 'nama_wp',
            'rules' => 'required'],

            ['field' => 'nik',
            'label' => 'nik',
            'rules' => 'numeric'],
            
            ['field' => 'nama_pld',
            'label' => 'nama_pld',
            'rules' => 'required']
        ];
    }
  // Fungsi untuk menampilkan semua data gambar
  public function getAll()
    {
        return $this->db->get('pengajuansppt')->result();
    }
       public function getById($id)
    {
        return $this->db->get_where('pengajuansppt', ["id" => $id])->row();
    }


    public function update()
    {
        $post = $this->input->post();
        $this->id = $post["id"];
        $this->nama_wp = $post["nama_wp"];
        $this->nik = $post["nik"];
    
    
    if (!empty($_FILES["ktp"]["name"])) {
            $this->image = $this->_uploadImage();
        } else {
            $this->image = $post["old_image"];
    }
      if (!empty($_FILES["imb"]["name"])) {
            $this->image = $this->_uploadImage();
        } else {
            $this->image = $post["old_image"];
    }
      if (!empty($_FILES["lokasi_tanah"]["name"])) {
            $this->image = $this->_uploadImage();
        } else {
            $this->image = $post["old_image"];
    }
      if (!empty($_FILES["foto_pbb_tetangga"]["name"])) {
            $this->image = $this->_uploadImage();
        } else {
            $this->image = $post["old_image"];
    }
      if (!empty($_FILES["sk_belum_punya_pbb"]["name"])) {
            $this->image = $this->_uploadImage();
        } else {
            $this->image = $post["old_image"];
    }
      if (!empty($_FILES["bukti_kepemilikan"]["name"])) {
            $this->image = $this->_uploadImage();
        } else {
            $this->image = $post["old_image"];
    }
        $this->nama_pld = $post["nama_pld"];
        $this->db->update($this->$_table, $this, array('id' => $post['id']));
    }

  public function save()
    {
        $post = $this->input->post();
        $this->id = $post["id"];
        $this->nama_wp = $post["nama_wp"];
        $this->nik = $post["nik"];
        $this->ktp = $this->_uploadImage();
        $this->imb = $this->_uploadImages();
        $this->foto_pbb_tetangga = $this->_uploadImagess();
        $this->lokasi_tanah = $this->_uploadImagesss();
        $this->sk_belum_punya_pbb = $this->_uploadImagessss();
        $this->bukti_kepemilikan = $this->_uploadImagesssss();
        $this->nama_pld = $post["nama_pld"];
        $this->db->insert('pengajuansppt', $this);
    }

public function _uploadimage() {
  $data = array();
  $config['upload_path'] = './upload/fotoktp';
  $config['allowed_types'] = 'jpg|png|jpeg';
  $config['max_size'] = 5024;

 
  $this->load->library('upload', $config);
 
if ($this->upload->do_upload('ktp')) {
      return $this->upload->data("file_name");
    }
}
 public function _uploadimages() {
  $data = array();
  $config['upload_path'] = './upload/fotoimb';
  $config['allowed_types'] = 'jpg|png|jpeg';
  $config['max_size'] = 5024;
  $this->load->library('upload', $config);
 if ($this->upload->do_upload('imb')) {
      return $this->upload->data("file_name");
    }
}
public function _uploadimagess() {
  $data = array();
  $config['upload_path'] = './upload/fotopbbtetangga';
  $config['allowed_types'] = 'jpg|png|jpeg';
  $config['max_size'] = 5024;

  $this->load->library('upload', $config);
if ($this->upload->do_upload('foto_pbb_tetangga')) {
      return $this->upload->data("file_name");
    }
}
public function _uploadimagesss() {
  $data = array();
  $config['upload_path'] = './upload/fotolokasitanah';
  $config['allowed_types'] = 'jpg|png|jpeg';
  $config['max_size'] = 5024;
  $this->load->library('upload', $config);
if ($this->upload->do_upload('lokasi_tanah')) {
      return $this->upload->data("file_name");
    }
}
public function _uploadimagessss() {
  $data = array();
  $config['upload_path'] = './upload/skblmpunyapbb';
  $config['allowed_types'] = 'jpg|png|jpeg';
  $config['max_size'] = 5024;

 
  $this->load->library('upload', $config);
if ($this->upload->do_upload('sk_belum_punya_pbb')) {
      return $this->upload->data("file_name");
    }
}
public function _uploadimagesssss() {
  $data = array();
  $config['upload_path'] = './upload/buktikpemilikan';
  $config['allowed_types'] = 'jpg|png|jpeg';
  $config['max_size'] = 5024;
 
  $this->load->library('upload', $config);
if ($this->upload->do_upload('bukti_kepemilikan')) {
      return $this->upload->data("file_name");
    }
}

  function hapus_data($id){
    $hasil=$this->db->query("DELETE FROM pengajuansppt WHERE id='$id'");
    return $hasil;
  }
}