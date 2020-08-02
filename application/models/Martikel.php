<?php

    class Martikel extends CI_Model {

        public function insert($data,$id)
        {
            if ($id != 0){
                $this->db->where('id_artikel', $id);
                $this->db->update('artikel', $data);
            }else{
                $query = $this->db->insert('artikel',$data);
            }
            
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

        function editArtikel($id){
            $this->db->where('id_artikel', $id);
            $query = $this->db->get('artikel'); 
            return $query->row();
        }

/* Funtion Buat nampilin artikel hype berjumlah 3 teratas  */
         function loadArticleHypeLimit(){
        $query="SELECT * FROM artikel where jenis_artikel=2  ORDER BY id_artikel DESC limit 3 ";
        return $this->db->query($query)->result_array();
        }

/* Funtion Buat nampilin artikel Feature berjumlah 3 teratas  */
        function loadArticleFeatureLimit(){ 
            $query="SELECT * FROM artikel where jenis_artikel=1 ORDER BY id_artikel DESC limit 3";
            return $this->db->query($query)->result_array();
        }

/* Funtion Buat nampilin artikel Review berjumlah 3 teratas  */
        function loadArticleReviewLimit(){ 
            $query="SELECT * FROM artikel where jenis_artikel=3 ORDER BY id_artikel DESC limit 3";
		return $this->db->query($query)->result_array();
        }

        function delete($id){
            $query = $this-> deleteImage($id);
            // print_r($query);die;
            $this->db->delete('artikel', array("id_artikel" => $id));
            return $query;
        }

        function deleteImage($id){
            $artikel = $this->db->get_where('artikel', ["id_artikel" => $id])->row();
		
            $filename1 = explode(".", $artikel->foto1)[0];
            $filename2 = explode(".", $artikel->foto2)[0];
            $filename3 = explode(".", $artikel->foto3)[0];

            
            array_map('unlink', glob(FCPATH."assets/upload/$filename1.*"));
            array_map('unlink', glob(FCPATH."assets/upload/$filename2.*"));
            array_map('unlink', glob(FCPATH."assets/upload/$filename3.*"));
            // unlink("assets/upload/$filename1.*");
            // print_r($filename3);die;
            return $artikel->jenis_artikel;

        }

        public function get_offset($limit, $offset)
            {
            // Jalankan query
            $query = $this->db
                ->limit($limit, $offset)
                ->get('artikel');

            // Return hasil query
            return $query;
            }

            public function get()
                {
                // Jalankan query
                $query = $this->db->get('artikel');

                // Return hasil query
                return $query;
                }
    }
?>