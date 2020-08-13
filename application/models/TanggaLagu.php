<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class TanggaLagu extends CI_Model {
    public const tanggalagu="tangga_lagu";
    
    public function getall(){
		$query="SELECT * from tangga_lagu";
		return $this->db->query($query)->result_array();
	
	}

	function get(){
		$user = $this->db->get('tangga_lagu');
		return $user->result();
	}
	function update($data, $id){
		$this->db->where('id_lagu ', $id);
		if ($this->db->update('tangga_lagu', $data)) {
			$this->session->set_userdata('typeNotif', 'successEdited');
			return true;
		} else {
			$this->session->set_userdata('typeNotif', 'errorEdited');
			return false;
		}
	}
}