<?php 
    class User extends CI_Controller{
        public function index(){
           return redirect('user/welcome')  ; 
        }
        public function welcome(){
            if(! $this->session->userdata('id')){
                return redirect('home');
            }
            $recipe['recipe'] = $this->Userlogin->userrecipelist();
            $this->load->view('user/dashboard',$recipe);
        }
        public function signup(){
            $this->load->view('user/signup');
        }
        public function register(){
            $array = $this->input->post();
            $this->Userlogin->add_user($array);
            return redirect('home');
        }
        public function login(){
            $this->load->view('user/loginform');
        }
        public function logout(){
            $this->session->unset_userdata('id');
            return redirect('home');
        }
        public function add_recipe(){
            if(! $this->session->userdata('id')){
                return redirect('home');
            }
            $this->load->view('user/add_recipe');
        }
        public function userrecipeintodb(){
            $config=[
                'upload_path'=>'./upload/',
                'allowed_types'=>'gif|jpg|png|jpeg',
                ];
                $this->load->library('upload',$config);
                  if($this->form_validation->run('Recipe') && $this->upload->do_upload())
                  {
                    $data=$this->upload->data();
                    $image_path=base_url("upload/".$data['raw_name'].$data['file_ext']);  
                    $name = $this->input->post('name');
                    $user_id = $this->input->post('user_id');
                    $array['remedi'] = $this->input->post('remedi');
                    $urid = $this->Userlogin->userrecipeadd($name,$image_path,$user_id);
                    $array['user_recipe_id'] = $urid;
                    $this->Userlogin->userremedyadd($array);
                    $ingredient = $this->input->post('ingredient');
                    foreach($ingredient as $i){
                        $this->Userlogin->useringredientadd($i,$urid);
                    }
                    return redirect('user/welcome');
            }
            else{
                $upload_error=$this->upload->display_errors();
                $this->load->view('user/add_recipe',compact('upload_error'));
            }
        }
        public function deluserrecipe($id){
            $this->Userlogin->deluserrecipename($id);
            $this->Userlogin->deluserrecipeingredient($id);
            $this->Userlogin->deluserreciperemedy($id);
            return redirect('user/welcome');
        }
        public function edituserrecipe($id){
            if(! $this->session->userdata('id')){
                return redirect('home');
            }
            $name =  $this->Userlogin->edituserrecipename($id);
            $ingre = $this->Userlogin->edituserrecipeingredient($id);
            $reme = $this->Userlogin->edituserreciperemedy($id);
            $array['name'] = $name; 
            $array['ingre'] = $ingre;
            $array['reme'] = $reme;
            $this->load->view('user/edit_recipe',$array);
        }
        public function updateuserrecipe($id){
            if($this->form_validation->run('Recipe'))
            { 
              $name = $this->input->post('name');
              $remedi = $this->input->post('remedi');
              $ingr_id = $this->input->post('ingre_id');
              $this->Userlogin->userrecipeupdate($name,$id);
              $this->Userlogin->userremedyupdate($remedi,$id);
              $ingredient = $this->input->post('ingredient');
              $count = 0;
              foreach($ingredient as $i){
                  $this->Userlogin->useringredientupdate($i,$ingr_id[$count]);
                  $count++;
              }     
              return redirect('user/welcome');
            }else{
                return redirect('user/edituserrecipe');
            }
        }
    }
?>