<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 class Mevent extends CI_Model {
     public function insert($upload){

         $this->db->insert('event',$upload);	 
     }

     public function getAll(){

        $query='SELECT * FROM event';
        return $this->db->query($query)->result_array(); 
     }

     public function deleteEventById($id){
         $query = $this-> deleteImage($id);
         $this->db->where('id_event',$id)
        ->delete('event');
        return $query;

     }


        function deleteImage($id){
            $event = $this->db->get_where('event', ["id_event" => $id]);
            $row = $event->row();
            if (isset($row)){
                $filename1 = explode(".", $row->foto)[0];
                array_map('unlink', glob(FCPATH."assets/event/$filename1.*"));
                // unlink("assets/upload/$filename1.*");
                // print_r($filename3);die;
                return true;
            }

        }

        function getEventById($id){
            $this->db->where('id_event', $id);
            $query = $this->db->get('event'); 
            
            return $query->result_array();

        }


}

?>
