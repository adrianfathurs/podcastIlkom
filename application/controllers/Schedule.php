<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Schedule extends CI_Controller {
		public function __construct(){
		parent :: __construct();
		
		$this->load->helper('form');
		$this->load->model('TanggaLagu');
		$this->load->model('Spotify');
		//$this->load->model('Komentar');
		//$this->load->model('Article');
	}

	public function index()
	{
		$data['css']="schedule/vschedulePage_css";
		$data['js']="schedule/vschedulePage_js";
		//var_dump($data['tanggaLagu']);
		$data['role'] = $this->session->userdata('role');            
		$data['id'] = $this->session->userdata('id'); 
		$data['username'] = $this->session->userdata('username'); 
		$this->load->view('template/header',$data);
		$this->load->view('schedule/schedulePage',$data);
		$this->load->view('template/footer'); 
	}
}
?>