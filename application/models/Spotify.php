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
    
}