<?php
  class Upload_gambar extends CI_Model{

    function __construct(){
      parent::__construct();
      $this->load->database();
    }

    public function uploadGambar(){
      $config['upload_path']          = './uploads/';
      $config['allowed_types']        = 'gif|jpg|png|bmp|mp3';
      $config['max_size']             = 0;
      $config['max_width']            = 1024;
      $config['max_height']           = 768;
      $config['overwrite']            = FALSE;
      $config['remove_spaces']        = TRUE;

      $this->load->library('upload', $config);
      }
    public function uploadLagu(){
      $configLagu['upload_path'] = './uploads/';
      $configLagu['max_size'] = 0;
      $configLagu['allowed_types'] = 'avi|flv|wmv|mp3|mp4';
      $configLagu['overwrite'] = FALSE;
      $configLagu['remove_spaces'] = TRUE;
      $this->load->library('upload', $configLagu);
      }
    public function uploadCover(){
      $config_cover['upload_path']          = './uploads/';
      $config_cover['allowed_types']        = 'gif|jpg|png|bmp|mp3';
      $config_cover['max_size']             = 0;
      $config_cover['max_width']            = 1024;
      $config_cover['max_height']           = 768;
      $config_cover['overwrite']            = FALSE;
      $config_cover['remove_spaces']        = TRUE;
      $this->load->library('upload', $config_cover);
    }


  }


 ?>
