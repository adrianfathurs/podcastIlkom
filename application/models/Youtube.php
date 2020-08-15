<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Youtube extends CI_Model {
    public const tanggalagu="tangga_lagu";


	function get(){
        $this->db->where('id_youtube', 1);
		$user = $this->db->get('youtube');
		return $user->result();
	}
	function update($data, $id){
		$this->db->where('id_youtube ', $id);
		if ($this->db->update('youtube', $data)) {
			$this->session->set_userdata('typeNotif', 'successEdited');
			return true;
		} else {
			$this->session->set_userdata('typeNotif', 'errorEdited');
			return false;
		}
	}
}