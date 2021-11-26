<?php 
    class Ingredients extends CI_Controller{
        public function index(){
            $ingre['ingre'] = $this->Ingredient->fetch();
            $this->load->view('ingredient',$ingre);
        }
        public function getrecipe($ingre_name){
            $recip = [];
            $result = $this->Ingredient->fetchRecipe($ingre_name);
            foreach($result as $i){
            array_push($recip,$this->Ingredient->getAdmin_Recipe($i->admin_recipe_id));
            }
            $remed = $this->Ingredient->getAdmin_RecipeRemedy();
            $this->load->view('ingre_recepies',['recip'=>$recip,'remed'=>$remed]);
        }
        public function useringre(){
            $ingre['ingre'] = $this->Ingredient->userfetch();
            $this->load->view('useringredient',$ingre);
        }
        public function getuserrecipe($ingre_name){
            $recip = [];
            $result = $this->Ingredient->fetchuserRecipe($ingre_name);
            foreach($result as $i){
            array_push($recip,$this->Ingredient->getuser_Recipe($i->user_recipe_id));
            }
            $remed = $this->Ingredient->getAdmin_RecipeRemedy();
            $this->load->view('ingre_userrecepies',['recip'=>$recip,'remed'=>$remed]);
        }

    }
?>