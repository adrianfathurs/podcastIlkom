<?php

    class User_management extends CI_Controller {

        function __construct() {
            parent::__construct();
            
            $this->load->model('Muser');
        }
        
        function index(){
            // $data = $this->Mfeature->get_all();
            // $this->load->view('article/vform');
            $data['page']="userManagement";
            $data['users']		= $this->Muser->get_users();
            $data['js']			= 'user_management/vuser_management_js';
            $data['css']			= 'user_management/vuser_management_css';
            $data['role'] = $this->session->userdata('role');            
            $data['id'] = $this->session->userdata('id'); 
            $data['username'] = $this->session->userdata('username'); 
            if ($data['role'] == '1'){
            $data['content'] = 'user_management/vuser_management.php';            
            // $this->load->view('template/header',$data);
            $this->load->view('template/vtemplate', $data);
            }else{
                redirect('homepage');
            }
            
            // $this->load->view('user_management/vuser_management',$data);
            // $this->load->view('template/footer'); 
            
        }

        function insert(){
            $data['page']="userManagement";
            $input = $this->input->post(NULL, TRUE);
            extract($input);
            
            $username_exist	= empty($this->Muser->get_by_username($username));

            if (empty($username_exist)) {
                $this->session->set_userdata('typeNotif', 'usernameAlreadyExist');
                redirect('user_management');
            } else{
                $data_user = array(
                    'username' => $username,
                    'password' => $password,
                    'role'     => $role
                );
                $this->Muser->insert($data_user);
                redirect('User_management');
            }
        }

        function update($id){
            $data['page']="userManagement";
            $input = $this->input->post(NULL, TRUE);
            extract($input);
            $data_user = array(
                'username' => $username,
                'password' => $password,
                'role'     => $role
            );
            $this->Muser->update($data_user,$id);
            redirect('User_management');
        }

    }

?>