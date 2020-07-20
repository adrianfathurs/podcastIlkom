<?php

    class Martikel extends CI_Model {

        private $db = "artikel";
        // public $product_id;
        public $judul;
        public $essay;
        public $foto1;
        public $foto2;
        public $foto3;
        public $jenis_artikel;
    
        function add(){

            $post = $this->input->post(NULL,TRUE);
            // print_r($post);exit;
            $data = array(
                'judul' => $post["judul"],
                'essay' => $post["essay"],
                'jenis_artikel' => $post["jenis_artikel"],
                'foto1' => $this->_uploadImage("foto1"),
                'foto2' => $this->_uploadImage("foto2"),
                'foto3' => $this->_uploadImage("foto3"),
            );
            // print_r($data);exit  ;
            $this->db->insert($db, $data);
            return true;
        }

        private function _uploadImage($ft)
	    {
            $config['upload_path']          = './assets/upload/';
            $config['allowed_types']        = 'jpeg|jpg|png';
            $config['file_name']            = $ft;
            $config['overwrite']			= true;
            $config['max_size']             = 1024; // 1MB
            // $config['max_width']            = 1024;
            // $config['max_height']           = 768;

            $this->load->library('upload', $config);

            if ($this->upload->do_upload($ft)) {
                return $this->upload->data("file_name");
            }
            
            return "default.jpg";
	    }
      
    }

?>