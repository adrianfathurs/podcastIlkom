<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class HomePage extends CI_Controller {
		public function __construct(){
		parent :: __construct();
		
		$this->load->helper('form');
		$this->load->model('TanggaLagu');
		$this->load->model('Spotify');
		$this->load->model("Martikel");
	}

	public function index()
	{
		$data['page']="homePage";
		$data['role'] = $this->session->userdata('role');            
		$data['id'] = $this->session->userdata('id'); 
		$data['username'] = $this->session->userdata('username'); 
		$data['css']="home/vhomepage_css";
		$data['js']="home/vhomepage_js";
		$data['tanggaLagu']=$this->TanggaLagu->getAll();
		$data['linkPodcrast']=$this->Spotify->getLinkEpisode();
		// var_dump($data['username']);die;
		$data['artikelReviewLimit']=$this->Martikel->loadArticleReviewLimit();  
		$data['artikelFeatureLimit']=$this->Martikel->loadArticleFeatureLimit();  
        $data['artikelHypeLimit']=$this->Martikel->loadArticleHypeLimit(); 
		$this->load->view('template/header',$data);
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
