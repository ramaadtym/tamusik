<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {
		public function __construct(){
		 parent::__construct();
		 $this->load->model('register/register');
		 $this->load->helper(array('form', 'url','url_helper'));
		}

		public function index(){
			//$this->load->view('auth/login');
			$this->load->view('auth/login');
		}
	public function daftar(){

	$this->load->helper('form');

	$this->load->library('form_validation');

	$this->form_validation->set_rules('username','wajibdiisi','required');

		if ($this->form_validation->run() === false) {
			echo "string";
		  $this->load->view('auth/registrasi');
		}else{
			$this->register->simpan();
		}
	}
	public function login(){
		echo "string";

		$this->load->helper('form');
		$this->load->library('form_validation');

		$username = $this->input->post('user');
		$password = $this->input->post('pass');

		$this->form_validation->set_rules('user','wajib di isi','required');
		$this->form_validation->set_rules('pass','wajib di isi','required');

		if ($this->form_validation->run() === false) {
			 $this->load->view('auth/login');
		}else {
		$where = array(
			'username' => $username,
			'password' => $password
			);
			$cek = $this->register->login('datauser',$where)->num_rows();
			$yok = $this->register->login('datauser',$where)->result_array();
			foreach ($yok as $key) {
				$ini=$key['id_user'];
			}
		if($cek > 0){

			$this->session->set_userdata('id_user',$ini);
			redirect('upload');
		}else{
			echo "Username dan password salah !";
		}
		}
	}

}
