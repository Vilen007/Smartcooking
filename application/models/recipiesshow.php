<?php 
    class Recipiesshow extends CI_model{
        public function getAdminRecipe(){
            $q =  $this->db->select()
                     ->from('recipe')
                     ->get();
            return $q->result();

        }
        public function getAdminRecipeRemedy(){
            $q =  $this->db->select()
                     ->from('remedy')
                     ->get();
            return $q->result();
        }

        public function getAdminRecipeName($id){
            $q = $this->db->select()
                          ->from('recipe')
                          ->where('id',$id)
                          ->get();
            return $q->row();
        }
        public function getAdminRecipe_Remedy($id){
            $q = $this->db->select()
                          ->from('remedy')
                          ->where('admin_recipe_id',$id)
                          ->get();
            return $q->row();
        }
        public function getAdminRecipeIngre($id){
            $q = $this->db->select()
                          ->from('ingredient')
                          ->where('admin_recipe_id',$id)
                          ->get();
            return $q->result();
        }
        public function saveComment($data){
            return $this->db->insert('comment',$data);
        }
        public function getComment(){
            $q = $this->db->select()
                          ->from('comment')
                          ->get();
                return $q->result();
        }
        public function getUser(){
            $q = $this->db->select(['username','id'])
                          ->from('user_login')
                          ->get();
                return $q->result();
        }
        public function getUserRecipe(){
            $q =  $this->db->select()
                     ->from('user_recipe')
                     ->get();
            return $q->result();

        }
        public function getUserRecipeRemedy(){
            $q =  $this->db->select()
                     ->from('remedy')
                     ->get();
            return $q->result();
        }

        public function getUserRecipeName($id){
            $q = $this->db->select()
                          ->from('user_recipe')
                          ->where('id',$id)
                          ->get();
            return $q->row();
        }
        public function getUserRecipe_Remedy($id){
            $q = $this->db->select()
                          ->from('remedy')
                          ->where('user_recipe_id',$id)
                          ->get();
            return $q->row();
        }
        public function getUserRecipeIngre($id){
            $q = $this->db->select()
                          ->from('ingredient')
                          ->where('user_recipe_id',$id)
                          ->get();
            return $q->result();
        }
    }
