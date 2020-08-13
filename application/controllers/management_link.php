<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class management_link extends CI_Controller {
		public function __construct(){
		parent :: __construct();
		
		$this->load->helper('form');
		$this->load->model("Spotify");
		$this->load->model("TanggaLagu");
		// $this->load->model("Youtube");
		
	}

	public function index()
	{
		$data['page']="announcerPage";
		// $data['css']="management_link/vmanagement_link_css";
		$data['js']="management_link/vmanagement_link_js";
		$data['role'] = $this->session->userdata('role');            
		$data['id'] = $this->session->userdata('id'); 
		$data['username'] = $this->session->userdata('username'); 
		// $data['Spotify'] = $this->Martikel->viewArtikel($id);
		$data['TanggaLagu'] = $this->TanggaLagu->get();
		// $data['Youtube'] = $this->Martikel->viewArtikel($id);
		// print_r($data['TanggaLagu']);die;
		$this->load->view('template/header',$data);
		$this->load->view('management_link/vmanagement_link',$data);
		$this->load->view('template/footer'); 
	}

	function update($id){
		$data['page']="userManagement";
		$input = $this->input->post(NULL, TRUE);
		extract($input);
		// print_r($input);die;
		$data_user = array(
			'link_lagu' => $links,
			'judul_lagu' => $judul,
			'genre_lagu'     => $genre,
			'artist_lagu' => $artis,
			'kategori_lagu' => $kategori,
			'status_lagu'     => $status
		);
		
		$this->TanggaLagu->update($data_user,$id);
		redirect('management_link');
	}


}
?>