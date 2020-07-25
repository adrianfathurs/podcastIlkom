<?php

    class Martikel extends CI_Model {

        public function insert($data)
        {
            $this->db->insert('artikel',$data);
        }

        function getJumData($id){
            $this->db->where('jenis_artikel', $id);
            $query = $this->db->get('artikel');
            if($query->num_rows()>0)
            {
            return $query->num_rows();
            }
            else
            {
            return 0;
            }
        }

        function loadArtikel($id){
            $this->db->where('jenis_artikel', $id);
            $query = $this->db->get('artikel');            
            return $query->result();
        }

        function viewArtikel($id){
            $this->db->where('id_artikel', $id);
            $query = $this->db->get('artikel'); 
            // print_r($query);die;

            
            return $query->row();
        }
    }
?>