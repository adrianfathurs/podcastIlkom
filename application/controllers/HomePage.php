<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class HomePage extends CI_Controller {

	public function index()
	{
		$data['css']="home/vhomepage_css";
		$data['js']="home/vhomepage_js";
		$this->load->view('template/header');
		$this->load->view('home/homePage',$data);
		$this->load->view('template/footer');
	}
	public function create()
	{

	}
	public function tambahbarang()
	{

	}
	public function tambahalamat()
	{

	}
	// asdasaad
	

}
