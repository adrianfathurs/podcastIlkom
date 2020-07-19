<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class TanggaLagu extends CI_Model {
    public const tanggalagu="tangga_lagu";
    
    public function getall(){
		$query="SELECT * from tangga_lagu";
		return $this->db->query($query)->result_array();
	
	}
}