<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mkomentar extends CI_Model {
    public const komentar="komentar";
    
    public function loadAllKomentar(){
        $query='SELECT * FROM komentar k INNER JOIN artikel a ON a.id_artikel = k.fk_artikel';
        return $this->db->query($query)->result_array();
    }

    public function deleteIdKomentar($id){
        $query=$this->db->where('id_komentar',$id)
        ->delete('komentar');
        
       
    }
    
    
}
?>