<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Regis extends CI_Controller {

		public function __construct(){
		 parent::__construct();
		 $this->load->model('register/register');
		 $this->load->helper(array('form', 'url','url_helper'));
		}

		public function index(){
				echo "strings";

		}

	public function daftar(){
		$this->load->helper('form');
		$this->load->library('form_validation');

		$this->form_validation->set_rules('username','wajibdiisi','required');

		if ($this->form_validation->run() === false) {
			echo "string";
		  $this->load->view('registrasi/registrasi');
		}else {
			$this->register->simpan();
		}
	}

}
