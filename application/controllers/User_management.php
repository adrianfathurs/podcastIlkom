<?php

    class User_management extends CI_Controller {

        function __construct() {
            parent::__construct();
                                    
            
        }
        
        function index(){
            // $data = $this->Mfeature->get_all();
            // $this->load->view('article/vform');
            $data['content'] = 'user_management/vuser_management.php';
            $this->load->view('template/vtemplate', $data);
            
        }

    }

?>