<?php
    class AdminLogin extends CI_model{
        public function login($username,$password){
            $q = $this->db->where(['username'=>$username,'password'=>$password])
                          ->get('admin_login');
            if($q->num_rows()){
                return $q->row()->id;
            }
            else{
                return false;
            }
        }
        public function recipeadd($name,$image_path){
            $this->db->insert('recipe',['name'=>$name,'image_path'=>$image_path]);
            $query = $this->db->query('select * from recipe ORDER BY id DESC LIMIT 1');
            return $query->row()->id;
        }
        public function remedyadd($array){
           return $this->db->insert('remedy',$array);
        }
        public function ingredientadd($i,$arid){
            return $this->db->insert('ingredient',['ingre_name'=>$i,'admin_recipe_id'=>$arid]);
        }
        public function adminrecipelist(){
            $q = $this->db->select()
                          ->from('recipe')
                          ->get();
                return $q->result();
        }
        public function delrecipename($id){
            return $this->db->delete('recipe',['id'=> $id]);
        }
        public function delrecipeingredient($id){
            return $this->db->delete('ingredient',['admin_recipe_id'=> $id]);
        }
        public function delreciperemedy($id){
            return $this->db->delete('remedy',['admin_recipe_id'=> $id]);
        }
        public function editrecipename($id){
            $q = $this->db->select()
                          ->from('recipe')
                          ->where('id',$id)
                          ->get();
            return $q->row();
        }
        public function editrecipeingredient($id){
            $q = $this->db->select()
                          ->from('ingredient')
                          ->where('admin_recipe_id',$id)
                          ->get();
            return $q->result();
        }
        public function editreciperemedy($id){
            $q = $this->db->select()
                          ->from('remedy')
                          ->where('admin_recipe_id',$id)
                          ->get();
            return $q->row();
        }
        public function recipeupdate($name,$id){
            return $this->db->where('id',$id)
                            ->update('recipe',['name'=>$name]);
        }
        public function remedyupdate($remedi,$id){
            return $this->db->where('admin_recipe_id',$id)
                            ->update('remedy',['remedi'=>$remedi]);
        }
        public function ingredientupdate($i,$id){
            return $this->db->where('id',$id)
                            ->update('ingredient',['ingre_name'=>$i]);
        }

    }
?>