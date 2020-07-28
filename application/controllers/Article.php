<?php

    class Article extends CI_Controller {

        function __construct() {
            parent::__construct();
                               
            $this->load->library('pagination');
            $this->load->model("Martikel");
            
        }
        
        function index(){
            // $data = $this->Mfeature->get_all();

            $data['role'] = $this->session->userdata('role');            
            $data['id'] = $this->session->userdata('id'); 
            $data['username'] = $this->session->userdata('username');    
            $data['js'] = 'template/vtemplate_notif_js';  
            if ($data['role'] == '1' || $data['role'] == '2' ){     
            $data['content'] = 'article/vform.php';            
            $this->load->view('template/vtemplate', $data);
            }else {
                redirect('homepage');
            };
        }

        function update($id){
            
            print_r($id);die;
        }

        function view($id){
            $data['role'] = $this->session->userdata('role');            
            $data['id'] = $this->session->userdata('id'); 
            $data['username'] = $this->session->userdata('username'); 
            $data['artikel'] = $this->Martikel->viewArtikel($id);  

            $query = $this->Martikel->viewArtikel($id);
            $paragraf1 = strlen($query->essay);
            $kalimat1 = substr($query->essay, 0, $paragraf1/2);
            $kalimat2 = substr($query->essay, $paragraf1/2);

            $data['kalimat'] = array(
                'kalimat1' => $kalimat1,
                'kalimat2' => $kalimat2,                
            );
            // print_r($kalimat);print_r($kalimat2);die;   
            $data['js'] = 'template/vtemplate_notif_js'; 
            $data['css'] = 'article/varticle_css';  
            $data['content'] = 'article/vViewArticle.php';            
            $this->load->view('template/vtemplate', $data);
        }

        function getArtikel($id){
            $data['role'] = $this->session->userdata('role');            
            $data['id'] = $this->session->userdata('id');    
            $data['username'] = $this->session->userdata('username'); 
            $data['js'] = 'template/vtemplate_notif_js';
            $data['css'] = 'article/varticle_css';
            if($id==1)
            {
                $data['artikelHypeLimit']=$this->Martikel->loadArticleHypeLimit();  
                $data['artikelReviewLimit']=$this->Martikel->loadArticleReviewLimit();  
                $data['asidebar'] = 'article/vasidebarFeature.php';
                $data['jenisArtikel1']= 'Hype';
                $data['jenisArtikel2']= 'Review';
                
            }
            else if ($id==2)
            {
                $data['artikelFeatureLimit']=$this->Martikel->loadArticleFeatureLimit();  
                $data['artikelReviewLimit']=$this->Martikel->loadArticleReviewLimit();  
                $data['asidebar'] = 'article/vasidebarHype.php';
                $data['jenisArtikel1']= 'Feature';
                $data['jenisArtikel2']= 'Review';
            }
            else if($id==3)
            {
                $data['artikelFeatureLimit']=$this->Martikel->loadArticleFeatureLimit();  
                $data['artikelHypeLimit']=$this->Martikel->loadArticleHypeLimit();  
                $data['asidebar'] = 'article/vasidebarReview.php';
                $data['jenisArtikel']= 'Review';
                
            }
            else{

            }
            // print_r($data['asidebar']);die;
            $data['jumlah'] = $this->Martikel->getJumData($id);
            $data['artikel'] = $this->Martikel->loadArtikel($id);
            $data['content'] = 'article/vArticle.php';
            // print_r($data);die;  


            $config['total_rows'] = $this->Martikel->getJumData($id); //total row
            $config['base_url'] = site_url('article/getArtikel/3'); //site url
        $config['per_page'] = 1;  //show record per halaman
        $config["uri_segment"] = 4;  // uri parameter
        $choice = $config["total_rows"] / $config["per_page"];
        // print_r($choice);die;
        $config["num_links"] = floor($choice);

        // Membuat Style pagination untuk BootStrap v4
        $config['first_link']       = 'First';
        $config['last_link']        = 'Last';
        $config['next_link']        = 'Next';
        $config['prev_link']        = 'Prev';
        $config['full_tag_open']    = '<div class="pagging text-center"><nav><ul class="pagination justify-content-center">';
        $config['full_tag_close']   = '</ul></nav></div>';
        $config['num_tag_open']     = '<li class="page-item"><span class="page-link">';
        $config['num_tag_close']    = '</span></li>';
        $config['cur_tag_open']     = '<li class="page-item active"><span class="page-link">';
        $config['cur_tag_close']    = '<span class="sr-only">(current)</span></span></li>';
        $config['next_tag_open']    = '<li class="page-item"><span class="page-link">';
        $config['next_tagl_close']  = '<span aria-hidden="true">&raquo;</span></span></li>';
        $config['prev_tag_open']    = '<li class="page-item"><span class="page-link">';
        $config['prev_tagl_close']  = '</span>Next</li>';
        $config['first_tag_open']   = '<li class="page-item"><span class="page-link">';
        $config['first_tagl_close'] = '</span></li>';
        $config['last_tag_open']    = '<li class="page-item"><span class="page-link">';
        $config['last_tagl_close']  = '</span></li>';

        $this->pagination->initialize($config);
        $data['page'] = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;

        //panggil function get_mahasiswa_list yang ada pada mmodel mahasiswa_model. 
        // $data['data'] = $this->mahasiswa_model->get_mahasiswa_list($config["per_page"], $data['page']);   
        $data['artikel'] = $this->Martikel->loadArtikel($id,$config["per_page"], $data['page']);        

        $data['pagination'] = $this->pagination->create_links();


            $this->load->view('template/vtemplate', $data);
        }
        
        

        function insert(){            
            $input = $this->input->post(NULL,TRUE);
            extract($input);
            

            $foto111=$_FILES['foto1'];
            $foto222=$_FILES['foto2'];
            $foto333=$_FILES['foto3'];

            $foto1_name="foto1";
            $foto2_name="foto2";
            $foto3_name="foto3";


            if(null == $foto111 && $foto111 && $foto111 ){
                $this->session->set_userdata('typeNotif', "gagalUpload");
                redirect('article');
            } else {
                            $foto11=$this->_upload($foto111,$foto1_name);
                            $foto22=$this->_upload($foto222,$foto2_name);
                            $foto33=$this->_upload($foto333,$foto3_name);

                            $data=[
                                'judul'=>$this->input->post('judul'),
                                'jenis_artikel'=>$this->input->post('jenis_artikel'),
                                'essay'=>$this->input->post('essay'),
                                'foto1'=>$foto11,
                                'foto2'=>$foto22,
                                'foto3'=>$foto33,
                                'fk_akun' => $creator
                            ];
                            
                        $this->Martikel->insert($data);
                            redirect('article');
                    }
        }

        function _upload($foto,$ft){
                    $config['upload_path']='./assets/upload/';
					$config['allowed_types']='jpg|png|jpeg';
					$this->load->library('upload',$config);
               
                    if($ft=="foto1")
                    {

                        if(!$this->upload->do_upload('foto1'))
                        {
                            $this->session->set_userdata('typeNotif', "gagalUpload1");
                            redirect('article');
                        }
                        else
                        {
                            return $this->upload->data('file_name');
                        }   

                    }
                    elseif($ft=="foto2")
                    {

                        if(!$this->upload->do_upload('foto2'))
                        {
                            $this->session->set_userdata('typeNotif', "gagalUpload2");
                            redirect('article');
                        }
                        else
                        {
                            return $this->upload->data('file_name');
                        }  

                    }
                    elseif($ft=="foto3")
                    {

                        if(!$this->upload->do_upload('foto3'))
                        {
                            $this->session->set_userdata('typeNotif', "gagalUpload3");
                            redirect('article');
                        }
                        else
                        {
                            return $this->upload->data('file_name');
                        }  

                    }
                    else {
                        echo "tolol";
                    }
        }

    }

?>