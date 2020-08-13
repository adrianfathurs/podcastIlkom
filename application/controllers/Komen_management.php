<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Komen_management extends CI_Controller {
		public function __construct(){
		parent :: __construct();
		
        $this->load->helper('form');
        $this->load->model('Mkomentar');
		
	}

	public function index()
	{
		$data['page']="komenManagement";
		$data['css']="komen_management/vkomen_management_css.php";
		$data['js']="komen_management/vkomen_management_js.php";
		$data['role'] = $this->session->userdata('role');            
		$data['id'] = $this->session->userdata('id'); 
		$data['username'] = $this->session->userdata('username'); 
        
        if ($data['role'] == '1'){
            $data['content'] = 'komen_management/vkomen_management.php';            
            // $this->load->view('template/header',$data);
            $data['komentar']=$this->Mkomentar->loadAllKomentar();
            $this->load->view('template/vtemplate', $data);
            }else{
                redirect('homepage');
            }
            
            // $this->load->view('user_management/vuser_management',$data);
            // $this->load->view('template/footer'); 
            
    }
    
    
    public function deleteKomen()
    {        $idKomentar=$this->input->post('idKomentar');
        $this->Mkomentar->deleteIdKomentar($idKomentar);
        redirect('Komen_management');
    }
    
}
?>