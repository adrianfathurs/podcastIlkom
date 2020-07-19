<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class HomePage extends CI_Controller {
		public function __construct(){
		parent :: __construct();
		
		$this->load->helper('form');
		$this->load->model('TanggaLagu');
		$this->load->model('Spotify');
	}

	public function index()
	{
		$data['css']="home/vhomepage_css";
		$data['js']="home/vhomepage_js";
		$data['tanggaLagu']=$this->TanggaLagu->getAll();
		$data['linkPodcrast']=$this->Spotify->getLinkEpisode();
		//var_dump($data['tanggaLagu']);
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
