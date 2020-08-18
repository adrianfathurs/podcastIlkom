<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Event extends CI_Controller {
		public function __construct(){
		parent :: __construct();
		
            $this->load->model('Mevent');
            $this->load->model('Martikel');
		
	}

	public function index()
	{

    
		$data['page']="eventPage";
		$data['judul']="EVENT";
		$data['css']="event/vevent_css";
		$data['js']="event/vevent_js";
		$data['role'] = $this->session->userdata('role');            
        $data['id'] = $this->session->userdata('id'); 
        $data['username'] = $this->session->userdata('username'); 
        $data['jenisArtikel1']="Feature";
        $data['jenisArtikel2']="Hype";
        $data['jenisArtikel3']="Review";
        $data['artikelReviewLimit']=$this->Martikel->loadArticleReviewLimit();  
        $data['artikelFeatureLimit']=$this->Martikel->loadArticleFeatureLimit();  
        $data['artikelHypeLimit']=$this->Martikel->loadArticleHypeLimit(); 
        $data['asidebar']='event/vasidebarEvent.php'; 
        $data['event']=$this->Mevent->getAll();
        $data['content']='event/veventPage.php';
        $this->load->view('template/vtemplate', $data);
        
    }
    
    function getAll(){
        $data['role'] = $this->session->userdata('role');            
        $data['id'] = $this->session->userdata('id'); 
        $data['username'] = $this->session->userdata('username'); 
        $data['page']="managementEvent";
        $data['css']="event/vevent_css";
        $data['js']="event/vevent_js";
        $data['content']='event/veventTable.php';
        $data['event']=$this->Mevent->getAll();
        $this->load->view('template/vtemplate', $data);
    }
    
    public function viewEvent($id){
        $data['role'] = $this->session->userdata('role');            
        $data['id'] = $this->session->userdata('id'); 
        $data['username'] = $this->session->userdata('username'); 
        $data['page']="managementEvent";
        $data['css']="event/vViewEvent_css";
        $data['js']="event/vevent_js";
        $data['content']='event/vViewEvent.php';
        $data['jenisArtikel1']="Feature";
        $data['jenisArtikel2']="Hype";
        $data['jenisArtikel3']="Review";
        $data['event']=$this->Mevent->getEventById($id);
        $data['artikelReviewLimit']=$this->Martikel->loadArticleReviewLimit();  
        $data['artikelFeatureLimit']=$this->Martikel->loadArticleFeatureLimit();  
        $data['artikelHypeLimit']=$this->Martikel->loadArticleHypeLimit(); 
        $data['asidebar']='event/vasidebarEvent.php'; 
        $this->load->view('template/vtemplate', $data);
    }

    function insert(){     
          $data['role'] = $this->session->userdata('role');            
            $data['id'] = $this->session->userdata('id'); 
            $data['username'] = $this->session->userdata('username');        
            $data['page']="managementEvent";
            $data['css']="event/vevent_css";
		    $data['js']="event/vevent_js";
            $data['content']='event/veventForm.php';
            $this->load->view('template/vtemplate', $data);
        
            if ($this->input->post('submit')) {
            // print_r($input);die;
            $foto111=$_FILES['foto1'];
            $foto1_name="foto1";
            


            if(null == $foto111 ){
                $this->session->set_userdata('typeNotif', "gagalUpload");
                // redirect('article');
            } else {
                    $data['page']="eventPage";
                    // print_r($data);die;
                    $config['upload_path']='./assets/event/';
					$config['allowed_types']='jpg|png|jpeg';
					$this->load->library('upload',$config);
                    if(!$this->upload->do_upload('foto1'))
					{
						echo "Upload gagal";die();
					}
					else
					{
						$foto=$this->upload->data('file_name');
					}
                            $upload=[
                                'judul'=>$this->input->post('judul'),
                                'foto'=>$foto,
                                'keterangan'=>$this->input->post('keterangan')
                            ];
                            
                        $this->Mevent->insert($upload);
                        redirect('Event/getAll');
                    }
                    
                }
    }
        function deleteEvent(){
            $data['page']="managementPage";
            $id=$this->input->post('idEvent');
            if (!isset($id)) show_404();
            $query= $this->Mevent->deleteEventById($id);
            if ($query) {
                redirect('Event/getAll');
            }
        }


}
?>