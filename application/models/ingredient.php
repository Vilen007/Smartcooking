<?php 
    class Ingredient extends CI_model{
        public function fetch(){
            $q = $this->db->select()
                          ->from('ingredient')
                          ->where('user_recipe_id',0)
                          ->get();
            return $q->result();
        }
        public function fetchRecipe($ingre_name){
            $q = $this->db->select('admin_recipe_id')
                          ->from('ingredient')
                          ->where(['ingre_name'=>$ingre_name,'user_recipe_id'=>0])
                          ->get();
            return $q->result();
        }
        public function getAdmin_Recipe($i){
            $q = $this->db->select()
                          ->from('recipe')
                          ->where('id',$i)
                          ->get();
            return $q->row();
        }
        public function getAdmin_RecipeRemedy(){
            $q =  $this->db->select()
                     ->from('remedy')
                     ->get();
            return $q->result();
        }
        public function userfetch(){
            $q = $this->db->select()
                          ->from('ingredient')
                          ->where('admin_recipe_id',0)
                          ->get();
            return $q->result();
        }
        public function fetchuserRecipe($ingre_name){
            $q = $this->db->select('user_recipe_id')
                          ->from('ingredient')
                          ->where(['ingre_name'=>$ingre_name,'admin_recipe_id'=>0])
                          ->get();
            return $q->result();
        }
        public function getuser_Recipe($i){
            $q = $this->db->select()
                          ->from('user_recipe')
                          ->where('id',$i)
                          ->get();
            return $q->row();
        }
    }
?>