<?php

    class Article extends CI_Controller {

        function __construct() {
            parent::__construct();
                               
            if ($this->session->userdata('is_login') != TRUE) {
                redirect('auth');
            }
            $this->load->model("Martikel");
            
        }
        
        function index(){
            // $data = $this->Mfeature->get_all();

            $data['role'] = $this->session->userdata('role');            
            $data['id'] = $this->session->userdata('id');           
            $data['content'] = 'article/vform.php';
            // print_r($data);die;  
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


            if(!isset($foto111)){
                print_r($data);die;
            }
                
                else{
                    if(!isset($foto222))
                    {
                        print_r($data);die;
                    }
                    else
                    {
                        if(!isset($foto333))
                        {
                            print_r($data);die;
                        }
                        else{
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
                            // print_r($data);die;
                           $this->Martikel->insert($data);
                            redirect('article');
                        }
                    }
                }
            
        }

        function _upload($foto,$ft){
                    $config['upload_path']='./assets/upload/';
					$config['allowed_types']='jpg|png';
					$this->load->library('upload',$config);
                    var_dump($foto);
                    var_dump($ft);
                    if($ft=="foto1")
                    {

                        if(!$this->upload->do_upload('foto1'))
                        {
                            echo "Upload gagal1";die();
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
                            echo "Upload gagal2";die();
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
                            echo "Upload gagal3";die();
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