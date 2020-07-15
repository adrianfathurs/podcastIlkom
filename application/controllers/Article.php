<?php

    class Article extends CI_Controller {

        function __construct() {
            parent::__construct();
                                    
            
        }
        
        function index(){
            // $data = $this->Mfeature->get_all();
            
            $this->load->view('template/header');
            $this->load->view('article/vArticle');
            $this->load->view('template/footer');
            
        }

    }

?>