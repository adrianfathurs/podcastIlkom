<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Announcer extends CI_Controller {
		public function __construct(){
		parent :: __construct();
		
		$this->load->helper('form');
		
	}

	public function index()
	{
		$data['css']="announcer/vannouncerPage_css";
		$data['js']="announcer/vannouncerPage_js";
		$this->load->view('template/header');
		$this->load->view('announcer/announcerPage',$data);
		$this->load->view('template/footer'); 
	}


}
?>