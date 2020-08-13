<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Spotify extends CI_Model {
    public const spotify="spotify";
    
    public function getAll(){
		$query="SELECT * from spotify";
		return $this->db->query($query)->result_array();
	
    }

    public function getLinkPlaylist()
    {
        $query="SELECT link_spotify from spotify where id_spotify='2'";
        return $this->db->query($query)->result_array();
    }

    /* LINK Podcrast */
    public function getLinkEpisode()
    {
        $query="SELECT link_spotify from spotify where id_spotify='1'";
        return $this->db->query($query)->result_array();
    }

    function get(){        
		$user = $this->db->get('spotify');
		return $user->result();
	}
	function update($data, $id){
		$this->db->where('id_spotify ', $id);
		if ($this->db->update('youtube', $data)) {
			$this->session->set_userdata('typeNotif', 'successEdited');
			return true;
		} else {
			$this->session->set_userdata('typeNotif', 'errorEdited');
			return false;
		}
	}
    
}