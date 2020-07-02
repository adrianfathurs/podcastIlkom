<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class HomePage extends CI_Controller {

	public function index()
	{
		$this->load->view('template/header');
		$this->load->view('template/content');
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
	

}
