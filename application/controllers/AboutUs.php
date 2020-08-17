<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AboutUs extends CI_Controller {
		public function __construct(){
		parent :: __construct();
		
		$this->load->model('MaboutUs');
		$this->load->model('Martikel');
		
	}

	public function index()
	{
		$data['page']="aboutPage";
		$data['css']="aboutus/vaboutUsPage_css";
		$data['js']="aboutus/vaboutUsPage_js";
		$data['asidebar']="aboutus/vasidebarAboutUs";
		$data['role'] = $this->session->userdata('role');            
        $data['id'] = $this->session->userdata('id'); 
        $data['jenisArtikel1']="Feature";
        $data['jenisArtikel2']="Hype";
        $data['jenisArtikel3']="Review";
        $data['artikelHypeLimit']=$this->Martikel->loadArticleHypeLimit();  
        $data['artikelReviewLimit']=$this->Martikel->loadArticleReviewLimit();  
        $data['artikelFeatureLimit']=$this->Martikel->loadArticleFeatureLimit();  
		$data['username'] = $this->session->userdata('username'); 
		$this->load->view('template/header',$data);
		$this->load->view('aboutus/vaboutUsPage',$data);
		$this->load->view('template/footer'); 
	}


}
?>