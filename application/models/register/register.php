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
      $data = array(
        'username' => $this->input->post('username'),
        'password' => $this->input->post('pwd'),
        'name' => $this->input->post('nama'),
        'alamat' => $this->input->post('address'),
        'noTlp' => $this->input->post('phone'),
        'email' => $this->input->post('email'),
        'role' => $this->input->post('role'),
      );
      return $this->db->insert('datauser', $data);
    }

    public function login($table,$where){
    return $this->db->get_where($table,$where);
    }
  }


 ?>
