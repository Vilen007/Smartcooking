<?php 
    class LoginUser extends CI_Controller{
        public function __construct(){
            parent::__construct();
            if($this->session->userdata('id')){
                return redirect('user/welcome');
            }
        }
        public function index(){
                $username = $this->input->post('username');
                $password = $this->input->post('password');
                $id= $this->Userlogin->Isauthenticate($username,$password);
                if($id){
                    $this->session->set_userdata('id',$id);
                    return redirect('user/welcome');
                }
                else{
                    return redirect('user/login');
                }
        }
    }