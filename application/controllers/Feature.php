<?php

    class Feature extends CI_Controller {

        function __construct() {
            parent::__construct();
                                    
            
        }
        
        function index(){
            $data['content'] = 'feature/vfeature.php';
            // $data['content'] = 'player.php';
            // $data['content'] = 'home/homePage.p  hp';
            $this->load->view('template/vtemplate', $data);
            // $this->load->view('feature/vfeature');
            
        }

    }

?>