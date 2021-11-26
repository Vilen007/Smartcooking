<?php 
    class Admin extends CI_Controller{
        public function index(){
            if(! $this->session->userdata('admin_id')){
                return redirect('admin/login');
            }
            return redirect('admin/welcome');
        }
        public function login(){
            if($this->session->userdata('admin_id')){
                return redirect('admin');
            }
                $this->form_validation->set_rules('username',"User Name", "required|min_length[4]|max_length[15]");
                $this->form_validation->set_rules('password',"Password", "required|min_length[4]|max_length[25]");
                $this->form_validation->set_error_delimiters('<div class="text-danger">','</div>');   
        
        
                if($this->form_validation->run()){
                    $username = $this->input->post('username');
                    $password = $this->input->post('password');
                    $id= $this->AdminLogin->login($username,$password);
                    if($id){
                        $this->session->set_userdata('admin_id',$id);
                        return redirect('admin/welcome');
                    }
                    else{
                        $this->session->set_flashdata('Login_Failed','Invalid Credentials');
                        return redirect('login');
                    }
                }
                else{
                    $this->load->view('admin/login');
                }
        }
        public function welcome(){
            $recipe['recipe'] = $this->AdminLogin->adminrecipelist();
            $this->load->view('admin/dashboard',$recipe);
        }
        public function logout(){
            
            $this->session->unset_userdata('admin_id');
            return redirect('home');
        }
        public function add_recipe(){
            if(! $this->session->userdata('admin_id')){
                return redirect('home');
            }
            $this->load->view('admin/addRecipe');
        }
        public function adminrecipeintodb(){
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
                    $array['remedi'] = $this->input->post('remedi');
                    $arid = $this->AdminLogin->recipeadd($name,$image_path);
                    $array['admin_recipe_id'] = $arid;
                    $this->AdminLogin->remedyadd($array);
                    $ingredient = $this->input->post('ingredient');
                    foreach($ingredient as $i){
                        $this->AdminLogin->ingredientadd($i,$arid);
                    }
                    return redirect('admin/welcome');
            }
            else{
                $upload_error=$this->upload->display_errors();
                $this->load->view('admin/addRecipe',compact('upload_error'));
            }
        }
        public function delrecipe($id){
            $this->AdminLogin->delrecipename($id);
            $this->AdminLogin->delrecipeingredient($id);
            $this->AdminLogin->delreciperemedy($id);
            return redirect('admin/welcome');
        }
        public function editrecipe($id){
            $name =  $this->AdminLogin->editrecipename($id);
            $ingre = $this->AdminLogin->editrecipeingredient($id);
            $reme = $this->AdminLogin->editreciperemedy($id);
            $ingesize = sizeof($ingre);
            $array['name'] = $name; 
            $array['ingre'] = $ingre;
            $array['reme'] = $reme;
            $this->load->view('admin/editRecipe',$array);
        }
        public function updaterecipe($id){
            if($this->form_validation->run('Recipe'))
            { 
              $name = $this->input->post('name');
              $remedi = $this->input->post('remedi');
              $ingr_id = $this->input->post('ingre_id');
              $this->AdminLogin->recipeupdate($name,$id);
              $this->AdminLogin->remedyupdate($remedi,$id);
              $ingredient = $this->input->post('ingredient');
              $count = 0;
              foreach($ingredient as $i){
                  $this->AdminLogin->ingredientupdate($i,$ingr_id[$count]);
                  $count++;
              }     
              return redirect('admin/welcome');
      }else{
        return redirect('admin/editrecipe');
      }
        }
    }
?>