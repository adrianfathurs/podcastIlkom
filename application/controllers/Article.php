<?php

    class Article extends CI_Controller {

        function __construct() {
            parent::__construct();
                                    
            $this->load->model("Martikel");
            
        }
        
        function index(){
            // $data = $this->Mfeature->get_all();

            
            $data['content'] = 'article/vform.php';
            $this->load->view('template/vtemplate', $data);
        }

        function insert(){

            $foto111=$_FILES['foto1'];
            $foto222=$_FILES['foto2'];
            $foto333=$_FILES['foto3'];

            $foto1_name="foto1";
            $foto2_name="foto2";
            $foto3_name="foto3";


            if(!isset($foto111)){
                var_dump("Data Hilang1");
            }
                
                else{
                    if(!isset($foto222))
                    {
                        var_dump("Data Hilang2");
                    }
                    else
                    {
                        if(!isset($foto333))
                        {
                            var_dump("Data Hilang3");
                        }
                        else{
                            var_dump("data nyampe");
    
                            $foto11=$this->_upload($foto111,$foto1_name);
                            $foto22=$this->_upload($foto222,$foto2_name);
                            $foto33=$this->_upload($foto333,$foto3_name);

                            $data=[
                                'judul'=>$this->input->post('judul'),
                                'jenis_artikel'=>$this->input->post('judul'),
                                'essay'=>$this->input->post('essay'),
                                'foto1'=>$foto11,
                                'foto2'=>$foto22,
                                'foto3'=>$foto33
                            ];

                           // $this->Martikel->insert($data);
                           var_dump($data);
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