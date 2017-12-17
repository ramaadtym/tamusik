<?php
  class Register extends CI_Model{

    function __construct(){
      parent::__construct();
      $this->load->database();
    }

    public function simpan(){
      $this->load->helper('url');
      $this->load->helper('form');
      $slug = url_title($this->input->post('username'), 'dash', TRUE);
      echo "string";
      $data = array(
        'username' => $this->input->post('username'),
        'password' => $this->input->post('pwd'),
        'alamat' => $this->input->post('address'),
        'noTlp' => $this->input->post('phone'),
        'email' => $this->input->post('email'),
        'role' => $this->input->post('role'),
      );
      return $this->db->insert('datauser', $data);
    }
  }


 ?>
