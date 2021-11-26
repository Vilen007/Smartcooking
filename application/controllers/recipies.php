<?php
    class Recipies extends CI_Controller{
        public function index(){
            $recip = $this->Recipiesshow->getAdminRecipe();
            $remed = $this->Recipiesshow->getAdminRecipeRemedy();
            $this->load->view('recepies',['recip'=>$recip,'remed'=>$remed]);
        }
        public function details($id){
            $name = $this->Recipiesshow->getAdminRecipeName($id);
            $remed = $this->Recipiesshow->getAdminRecipe_Remedy($id);
            $ingre = $this->Recipiesshow->getAdminRecipeIngre($id);
            $comnt = $this->Recipiesshow->getComment();
            $user = $this->Recipiesshow->getUser();
            $this->load->view('recepiesDEtails',['name'=>$name,'remed'=>$remed,'ingre'=>$ingre,'cmnt'=>$comnt,'user'=>$user]);
        }
        public function comments($id){
            $data = $this->input->post();
            $data['article_id'] = $id;
            $this->Recipiesshow->saveComment($data);
            return redirect("recipies/details/$id");
            
        }
        public function userrecipe(){
            $recip = $this->Recipiesshow->getUserRecipe();
            $remed = $this->Recipiesshow->getUserRecipeRemedy();
            $this->load->view('userrecepies',['recip'=>$recip,'remed'=>$remed]);
        }
        public function userRecipedetails($id){
            $name = $this->Recipiesshow->getUserRecipeName($id);
            $remed = $this->Recipiesshow->getUserRecipe_Remedy($id);
            $ingre = $this->Recipiesshow->getUserRecipeIngre($id);
            $comnt = $this->Recipiesshow->getComment();
            $user = $this->Recipiesshow->getUser();
            $this->load->view('user/userrecepiesDEtails',['name'=>$name,'remed'=>$remed,'ingre'=>$ingre,'cmnt'=>$comnt,'user'=>$user]);
        }
        public function usercomments($id){
            $data = $this->input->post();
            $data['article_id'] = $id;
            $this->Recipiesshow->saveComment($data);
            return redirect("recipies/userRecipedetails/$id");
            
        }
    }
