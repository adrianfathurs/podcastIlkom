<?php

    class Feature extends CI_Controller {

        function __construct() {
            parent::__construct();
                                    
            
        }
        
        function index(){
            // $data = $this->Mfeature->get_all();
            $this->load->view('feature/vfeature');
            
        }

    }

?>