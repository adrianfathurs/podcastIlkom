<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Music extends CI_Controller {
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
		$data['css']="home/vhomepage_css";
		$data['js']="home/vhomepage_js";
		$data['tanggaLagu']=$this->TanggaLagu->getAll();
		//var_dump($data['tanggaLagu']);
		$this->load->view('template/header');
		$this->load->view('music/tanggaLaguPage',$data);
		$this->load->view('template/footer'); 
	}

	public function tanggaLagu()
	{
        $data['css']="music/vtanggaLaguPage_css";
		$data['js']="music/vtanggaLaguPage_js";
		$data['tanggaLagu']=$this->TanggaLagu->getAll();
		//var_dump($data['tanggaLagu']);
		$this->load->view('template/header');
		$this->load->view('music/tanggaLaguPage',$data);
		$this->load->view('template/footer');
	}

	public function playlistLagu()
	{
		$data['css']="music/vplaylistLaguPage_css";
		$data['js']="music/vplaylistLaguPage_js";
		$data['linkPlaylist']=$this->Spotify->getLinkPlaylist();
		$this->load->view('template/header');
		$this->load->view('music/playlistLaguPage',$data);
		$this->load->view('template/footer');
	}
	public function tambahalamat()
	{

	}
	// asdasaad
	

}
?>