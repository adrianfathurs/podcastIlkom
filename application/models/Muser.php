<?php
defined('BASEPATH') OR exit('No direct script access allowed');
    class Muser extends CI_Model{

        public function get_users()
	{
		$user = $this->db->get('akun');
		return $user->result();
    }

        function get_by_username($username) {
            $this->db->where('username', $username);
            $query = $this->db->get('akun');
            return $query->row();
        }
        
        function insert($data){
            if ($this->db->insert('akun', $data)) {
                $this->session->set_userdata('typeNotif', 'successAddUser');
                return $this->db->insert_id();
            } else {
                $this->session->set_userdata('typeNotif', 'errorAddUser');
                return false;
            }
        }

        function update($data, $id){
            $this->db->where('id_akun', $id);
            if ($this->db->update('akun', $data)) {
                $this->session->set_userdata('typeNotif', 'successEdited');
                return true;
            } else {
                $this->session->set_userdata('typeNotif', 'errorEdited');
                return false;
            }
        }

        function delete($id){
            $this->db->delete('akun', array("id_akun" => $id));
            return true;
        }


    }

?>