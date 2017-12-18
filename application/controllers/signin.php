<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class signin extends CI_controller {

    public function index(){
        $this->load->view('auth/signin_view');
     }

}
