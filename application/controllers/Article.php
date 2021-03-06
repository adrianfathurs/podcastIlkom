<?php

    class Article extends CI_Controller {

        function __construct() {
            parent::__construct();                     
            $this->load->library('pagination');
            $this->load->model("Martikel");
            $this->load->model("Mkomentar");
            $this->load->model('Spotify');
            
        }
        
        function index(){
            // $data = $this->Mfeature->get_all();
            $obj = new stdClass();            
            $obj->judul = '';
            $obj->essay = '';
            $obj->foto1 = '';
            $obj->foto2 = '';
            $obj->foto3 = '';
            $obj->jenis_artikel = "0";

            
            $data['page']="articlePage";
            $data['data'] = $obj; 
            $data['role'] = $this->session->userdata('role');            
            $data['id'] = $this->session->userdata('id'); 
            $data['username'] = $this->session->userdata('username');    
            $data['js'] = 'article/vtemplate_notif_js';  
            if ($data['role'] == '1' || $data['role'] == '2' ){     
            $data['content'] = 'article/vform.php';            
            $this->load->view('template/vtemplate', $data);
            }else {
                redirect('homepage');
            };
        }

        function update($id){
            $data['page']="articlePage";
            $data['role'] = $this->session->userdata('role');            
            $data['id'] = $this->session->userdata('id'); 
            $data['css'] = 'article/varticle_css'; 
            $data['js'] = 'article/varticle_js';
            $data['username'] = $this->session->userdata('username');             
            $data['data'] = $this->Martikel->editArtikel($id);
            // print_r($data['data']);die;
            $data['content'] = 'article/vform.php';            
            $this->load->view('template/vtemplate', $data);
            // print_r($id);die;
        }
        
        function view($id){
            
            $data['page']="articlePage";
            $data['role'] = $this->session->userdata('role');            
            $data['id'] = $this->session->userdata('id'); 
            /* id jenis artikel */                        
            $data['idArtikel']=$id;
            $this->session->set_userdata('idArtikel',$id);
            $idJenisartikel = $this->session->userdata('idJenisArtikel');
            
            $data['username'] = $this->session->userdata('username'); 
            $data['artikel'] = $this->Martikel->viewArtikel($id);
            // print_r($data['artikel']);die;
            $idJenisartikel=$this->Martikel->viewArtikel($id);
            $jumlahidkomentar=COUNT($this->Martikel->ambildata($id));

            if($jumlahidkomentar!=0)
            {
                $data['jumlahidkomentar']=$jumlahidkomentar;
                $data['komentar']=$this->Martikel->ambildata($id);
            }
            else {
                $data['jumlahidkomentar']=0;
            }

            
            
            // $data['kalimat'] = array(
            //     'kalimat1' => $kalimat1,
            //     'kalimat2' => $kalimat2,                
            // );

            if($idJenisartikel->jenis_artikel==1)
            {
                // nama Page yang diload
                $data['jenisArtikel']= 'Feature';
                $data['asidebar'] = 'article/vasidebarFeature.php';
                // text asidebar yang diload
                $data['jenisArtikel1']= 'Hype';
                $data['jenisArtikel2']= 'Review';
                $data['artikelHypeLimit']=$this->Martikel->loadArticleHypeLimit();  
                $data['artikelReviewLimit']=$this->Martikel->loadArticleReviewLimit();  
                
            }
            else if ($idJenisartikel->jenis_artikel==2)
            {
                // nama Page yang diload
                $data['jenisArtikel']= 'Hype';
                $data['asidebar'] = 'article/vasidebarHype.php';
                // text asidebar yang diload
                $data['jenisArtikel1']= 'Feature';
                $data['jenisArtikel2']= 'Review';
                $data['artikelReviewLimit']=$this->Martikel->loadArticleReviewLimit();  
                $data['artikelFeatureLimit']=$this->Martikel->loadArticleFeatureLimit();  
            }
            else if($idJenisartikel->jenis_artikel==3)
            {
                // nama Page yang diload
                $data['jenisArtikel']= 'Review';
                $data['asidebar'] = 'article/vasidebarReview.php';
                // text asidebar yang diload
                $data['jenisArtikel1']='Feature';
                $data['jenisArtikel2']= 'Hype';
                $data['artikelFeatureLimit']=$this->Martikel->loadArticleFeatureLimit();  
                $data['artikelHypeLimit']=$this->Martikel->loadArticleHypeLimit();  
            }
                    else if($idJenisartikel->jenis_artikel==4)
            {  
                $data['judul'] = 'Info Music';
                $data['jenisArtikel1']= 'Podcrast FM';
                $data['asidebar'] = 'article/vasidebarInfo.php';
                // text asidebar yang diload
                $data['linkPlaylist']=$this->Spotify->getLinkEpisode();

            }

            else{

            }
            // print_r($kalimat);print_r($kalimat2);die;   
            $data['js'] = 'article/varticle_js'; 
            $data['css'] = 'article/vViewArticle_css'; 
            $data['content'] = 'article/vViewArticle.php';            
            $this->load->view('template/vtemplate', $data);
        }

        function getArtikel($id){
            $data['page']="articlePage";
            $data['role'] = $this->session->userdata('role');            
            $data['id'] = $this->session->userdata('id');    
            /* session id jenis artikel */
            $this->session->set_userdata('idJenisArtikel',$id); 
            $data['username'] = $this->session->userdata('username'); 
            $data['js'] = 'article/varticle_js';
            $data['css'] = 'article/varticle_css';
            if($id==1)
            {
                $data['artikelHypeLimit']=$this->Martikel->loadArticleHypeLimit();  
                $data['artikelReviewLimit']=$this->Martikel->loadArticleReviewLimit();  
                $data['asidebar'] = 'article/vasidebarFeature.php';
                $data['jenisArtikel1']= 'Hype';
                $data['jenisArtikel2']= 'Review';


                $data['judul'] = 'Feature';

     
                

            }
            else if ($id==2)
            {
                $data['artikelFeatureLimit']=$this->Martikel->loadArticleFeatureLimit();  
                $data['artikelReviewLimit']=$this->Martikel->loadArticleReviewLimit();  
                $data['asidebar'] = 'article/vasidebarHype.php';
                $data['jenisArtikel1']= 'Feature';
                $data['jenisArtikel2']= 'Review';


                $data['judul'] = 'Hype';

               


            }
            else if($id==3)
            {
               


               
                $data['judul'] = 'Review';
                

                $data['jenisArtikel']= 'Review';
                $data['asidebar'] = 'article/vasidebarReview.php';
                // text asidebar yang diload
                $data['jenisArtikel1']='Feature';
                $data['jenisArtikel2']= 'Hype';
                $data['artikelFeatureLimit']=$this->Martikel->loadArticleFeatureLimit();  
                $data['artikelHypeLimit']=$this->Martikel->loadArticleHypeLimit(); 

            }

            else if($id==4)
            {  
                $data['judul'] = 'Info Music';
                $data['jenisArtikel1']= 'Podcrast FM';
                $data['asidebar'] = 'article/vasidebarInfo.php';
                // text asidebar yang diload
                $data['linkPlaylist']=$this->Spotify->getLinkEpisode();

            }

            else{

            }
            // print_r($data['asidebar']);die;
            $data['jumlah'] = $this->Martikel->getJumData($id);
            $data['artikel'] = $this->Martikel->loadArtikel($id);
            $data['content'] = 'article/vArticle.php';
            // print_r($data);die;  


            // Load library pagination
            $this->load->library('pagination');

            // Pengaturan pagination
            $config['base_url'] = base_url('article/getArtikel/').$id.'/';
            $config['total_rows'] = $this->Martikel->get()->num_rows();
            $config['per_page'] = 10 ;
            $config['offset'] = $this->uri->segment(4);

            // Styling pagination
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

            // Data untuk page index
            // $data['pageTitle'] = 'Lowongan Kerja';
            $data['loker'] = $this->Martikel->get_offset($config['per_page'], $config['offset'] ,$id)->result();
            
            // $data['pageContent'] = $this->load->view('loker/lokerList', $data, TRUE);
            // print_r($data['loker']);die;
            // Jalankan view template/layout
            // $this->load->view('template/layout', $data);

            
            // print_r($data['jss']);die;
            $this->load->view('template/vtemplate', $data);
        }
        
        

        function insert(){            
            $data['page']="articlePage";
            $input = $this->input->post(NULL,TRUE);
            extract($input);
            
            
            if ($this->input->post('submit')) {
            // print_r($input);die;
           
            
            
            $foto111=$_FILES['foto1'];
            $foto222=$_FILES['foto2'];
            $foto333=$_FILES['foto3'];

            $foto1_name="foto1";
            $foto2_name="foto2";
            $foto3_name="foto3";


            if(null == $foto111 && $foto111 && $foto111 ){
                $this->session->set_userdata('typeNotif', "gagalUpload");
                // redirect('article');
            } else {
                            $foto11=$this->_upload($foto111,$foto1_name,$id_artikel);
                            $foto22=$this->_upload($foto222,$foto2_name,$id_artikel);
                            $foto33=$this->_upload($foto333,$foto3_name,$id_artikel);

                            $data=[
                                'judul'=>$this->input->post('judul'),
                                'jenis_artikel'=>$this->input->post('jenis_artikel'),
                                'essay'=>$this->input->post('essay'),
                                'essay2'=>$this->input->post('essay2'),
                                'essay3'=>$this->input->post('essay3'),
                                'foto1'=>$foto11,
                                'foto2'=>$foto22,
                                'foto3'=>$foto33,
                                'fk_akun' => $creator
                            ];
                            // print_r($data);die;
                        $this->Martikel->insert($data,$id_artikel);

                        $this->getArtikel($jenis_artikel);
                    }
                    
                }else{
                    $obj = new stdClass();            
                    $obj->judul = '';
                    $obj->id_artikel = '';
                    $obj->essay = '';
                    $obj->essay2 = '';
                    $obj->essay3 = '';
                    $obj->foto1 = '';
                    $obj->foto2 = '';
                    $obj->foto3 = '';
                    $obj->jenis_artikel = "0";
                    
                    $data['data'] = $obj; 
                    $data['role'] = $this->session->userdata('role');            
                    $data['id'] = $this->session->userdata('id'); 
                    $data['username'] = $this->session->userdata('username');
                    $data['js'] = 'article/varticle_js'; 
                    $data['css'] = 'article/varticle_css';      
                    $data['content'] = 'article/vform.php';            
                    $this->load->view('template/vtemplate', $data);
                }
        }

        function _upload($foto,$ft,$id){
            $data['page']="articlePage";
                    $data = $this->Martikel->viewArtikel($id);
                    // print_r($data);die;
                    $config['upload_path']='./assets/upload/';
					$config['allowed_types']='jpg|png|jpeg';
					$this->load->library('upload',$config);
               
                    if($ft=="foto1")
                    {

                        if(!$this->upload->do_upload('foto1'))
                        {
                            if($data->foto1){
                                return $data->foto1;
                            }else {
                                return "default.png";
                            $this->session->set_userdata('typeNotif', "gagalUpload1");
                            $this->update($id);
                            }
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
                            if($data->foto2){
                                return $data->foto2;
                            }else {
                                return "default.png";
                            $this->session->set_userdata('typeNotif', "gagalUpload2");
                            $this->update($id);
                            }
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
                            if($data->foto3){
                                return $data->foto3;
                            }else {
                                return "default.png";
                            $this->session->set_userdata('typeNotif', "gagalUpload3");
                            $this->update($id);
                            }
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

        function delete($id){
            $data['page']="articlePage";
            if (!isset($id)) show_404();
            $this->Martikel->deleteKomenByIdArtikel($id);
            $query= $this->Martikel->delete($id);
            if ($query) {
                $this->getArtikel($query);
            }
        }

        /* FUNGSI KOMENTAR */

        public function tambahKomen(){
            
            if($this->input->post("btnSubmit")=="submit"){
                $role = $this->session->userdata('role'); 
                $komen=$this->input->post('komen');
                $namaPengirim=$this->input->post('namaPengirim');
                $email=$this->input->post('email');
                $idArtikel=$this->input->post('idArtikel');
                $load=$this->Martikel->loadData();
                foreach ($load as $L ) {
                    if(($L['komentar']==$this->input->post('komen')) && ($L['username']==$this->input->post('namaPengirim')) && ($L['email']==$this->input->post('email'))){
                        $hitung=1;
                        
                    }
                    else{
                        $hitung=0;
                        

                    }
                }

                if($hitung==1)
                {
                    $this->view($idArtikel);
                }
                else {
                    if(isset($role)){

                        $idArtikelint=intval($idArtikel);
                        $data=array(
                            'parent_Id'=>"0",
                            'username'=>$namaPengirim,
                            'komentar'=>$komen,
                            'email'=>$email,
                            'simbol'=>$role,
                            'fk_artikel'=>$idArtikelint
                        );
                        $this->Martikel->tambahKomen($data);
                        $this->session->set_flashdata('message', 'Komentar Anda Terekam, Refresh Browser Anda');
                        $this->view($idArtikel);
                    }
                    else {
                        $idArtikelint=intval($idArtikel);
                        $data=array(
                            'parent_Id'=>"0",
                            'username'=>$namaPengirim,
                            'komentar'=>$komen,
                            'email'=>$email,
                            'simbol'=>0,
                            'fk_artikel'=>$idArtikelint
                        );
                        $this->Martikel->tambahKomen($data);
                        $this->session->set_flashdata('message', 'Komentar Anda Terekam, Refresh Browser Anda');
                        $this->view($idArtikel);
                    }
                }
                

                
                
        }
    }

        public function ambildata(){
            
            var_dump($id);die();
            $dataKomentar=$this->Martikel->ambildata($id);
            echo json_encode($dataKomentar);
        }

        

    }

?>