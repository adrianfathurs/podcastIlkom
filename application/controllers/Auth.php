<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Auth extends CI_Controller {

    public function __construct() {
		parent::__construct();

		$this->load->model('Mauth');		
	}


    public function index(){
		$data['page']="authPage";
        $is_login = $this->session->userdata('is_login');

		if ($is_login == true) {
			redirect('HomePage');
		} else {
			$this->load->view('auth/vlogin');
		}
    }

    function login(){
		$data['page']="authPage";
        $input = $this->input->post(NULL, TRUE);
		extract($input);

		$cek = $this->Mauth->ceklogin($username,$password);

		if ($cek) {
			redirect('homepage');
		} else {
			redirect('auth');
		}
    }


    public function logout(){
		$data['page']="authPage";
		$data = array (
			'id', 'username', 'role', 'is_login'
		);
        // print_r($data);die;
		$this->session->unset_userdata($data);
		redirect('homepage');
	}
}
?>