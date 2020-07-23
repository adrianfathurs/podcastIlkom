<?php

    class Martikel extends CI_Model {

        public function insert($data)
        {
            $this->db->insert('artikel',$data);
        }
    }
?>