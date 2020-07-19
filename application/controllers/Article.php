<?php

    class Article extends CI_Controller {

        function __construct() {
            parent::__construct();
                                    
            
        }
        
        function index(){
            // $data = $this->Mfeature->get_all();

            
            $data['content'] = 'article/vform.php';
            $this->load->view('template/vtemplate', $data);

            
        }

        function add(){
            
        }

    }

?>