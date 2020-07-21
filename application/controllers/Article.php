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

            $this->Martikel->add();            
            redirect('Article');
        }

    }

?>