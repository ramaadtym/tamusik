<?php

class Upload extends CI_Controller {

        public function __construct(){
                parent::__construct();
                $this->load->model('upload_gambar/upload_gambar');
                $this->load->helper(array('form', 'url'));
        }

        public function index(){
          $this->load->view('upload_gambar/upload_form', array('error' => ' ' ));
        }

        public function do_upload(){

      $this->upload_gambar->uploadGambar();
      $this->upload_gambar->uploadLagu();
      $this->upload_gambar->uploadCover();
      $musik_name= $_FILES['lagu']['name'];
      $watermark_name= $_FILES['watermark']['name'];
      $cover_name= $_FILES['cover']['name'];
      $sess=$this->session->id_user;
      $data = array(
        'id_user' => $sess,
        'watermark' => $watermark_name,
        'cover' =>   $cover_name,
        'judul' => $this->input->post('judul'),
        'host' => $this->input->post('host'),
        'musik' =>   $musik_name
      );

      $this->db->insert('watermarking', $data);
      // $config['upload_path']          = './uploads/';
      // $config['allowed_types']        = 'gif|jpg|png|bmp|mp3';
      // $config['max_size']             = 0;
      // $config['max_width']            = 1024;
      // $config['max_height']           = 768;
      // $config['overwrite']            = FALSE;
      // $config['remove_spaces']        = TRUE;
      // $watermark_name= $_FILES['watermark']['name'];
      //
      // $date = date("ymd");
      //
      // $configLagu['upload_path'] = './uploads/';
      // $configLagu['max_size'] = 0;
      // $configLagu['allowed_types'] = 'avi|flv|wmv|mp3|mp4';
      // $configLagu['overwrite'] = FALSE;
      // $configLagu['remove_spaces'] = TRUE;
      // $musik_name= $_FILES['lagu']['name'];
      //
      // $config_cover['upload_path']          = './uploads/';
      // $config_cover['allowed_types']        = 'gif|jpg|png|bmp|mp3';
      // $config_cover['max_size']             = 0;
      // $config_cover['max_width']            = 1024;
      // $config_cover['max_height']           = 768;
      // $config_cover['overwrite']            = FALSE;
      // $config_cover['remove_spaces']        = TRUE;
      // $cover_name= $_FILES['cover']['name'];
      //
      // $this->load->library('upload', $config);
      // $this->load->library('upload', $config_cover);
    //   $this->load->library('upload', $configLagu);
      //
      // $sess=$this->session->id_user;
      //


      if (!$this->upload->do_upload('lagu')){
              $error = array('error' => $this->upload->display_errors());
              $this->load->view('upload_gambar/upload_form', $error);
      }
      if (!$this->upload->do_upload('cover')){
              $error = array('error' => $this->upload->display_errors());
              $this->load->view('upload_gambar/upload_form', $error);
      }
      if (!$this->upload->do_upload('watermark')){
              $error = array('error' => $this->upload->display_errors());
              $this->load->view('upload_gambar/upload_form', $error);
      }
      else{
              $data = array('a' => $this->upload->data());
              $this->load->view('upload_gambar/upload_success', $data);

              }
        }
}
?>
