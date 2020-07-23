<?php

    class Mauth extends CI_Model {

        function cekLogin($username,$password){
            $user = $this->get_by_username($username);            

            if (!$user) {  // jika usernya tidak ada
                $this->session->set_userdata('typeNotif', 'userNotFound');
                return false;
            } else {  // pengecekan login
                if ($user->password == $password) {
                    $data = array (
                        'id' 		=> $user->id_akun,
                        'username' 	=> $user->username,                        
                        'role' 		=> $user->role,
                        'is_login' 	=> true
                    );
                    // print_r($data);die;
                    $this->session->set_userdata($data);
                    return true;
                } else {
                    $this->session->set_userdata('typeNotif', 'wrongPassword');
                    return false;
                }
            }
            return false;
        }

        public function get_by_username($username) {
            $this->db->from('akun');
            $this->db->where('username',$username);            
            $user = $this->db->get();
            return $user->row();
        }

    }

?>