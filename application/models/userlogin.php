<?php 
    class Userlogin extends CI_model{
        public function add_user($array){
            return $this->db->insert('user_login',$array);
        }
        public function Isauthenticate($user,$pass){
            $q = $this->db->where(['username'=>$user,'password'=>$pass])
                          ->get('user_login');
            if($q->num_rows()){
                return $q->row()->id;
            }
            else{
                return false;
            }
        }
        public function userrecipeadd($name,$image_path,$user_id){
            $this->db->insert('user_recipe',['name'=>$name,'image_path'=>$image_path,'user_id'=>$user_id]);
            $query = $this->db->query('select * from user_recipe ORDER BY id DESC LIMIT 1');
            return $query->row()->id;
        }
        public function userremedyadd($array){
           return $this->db->insert('remedy',$array);
        }
        public function useringredientadd($i,$urid){
            return $this->db->insert('ingredient',['ingre_name'=>$i,'user_recipe_id'=>$urid]);
        }
        public function userrecipelist(){
            $id = $this->session->userdata('id');
            $q = $this->db->select()
                          ->from('user_recipe')
                          ->where('user_id',$id)
                          ->get();
                return $q->result();
        }
        public function deluserrecipename($id){
            return $this->db->delete('user_recipe',['id'=> $id]);
        }
        public function deluserrecipeingredient($id){
            return $this->db->delete('ingredient',['user_recipe_id'=> $id]);
        }
        public function deluserreciperemedy($id){
            return $this->db->delete('remedy',['user_recipe_id'=> $id]);
        }
        public function edituserrecipename($id){
            $q = $this->db->select()
                          ->from('user_recipe')
                          ->where('id',$id)
                          ->get();
            return $q->row();
        }
        public function edituserrecipeingredient($id){
            $q = $this->db->select()
                          ->from('ingredient')
                          ->where('user_recipe_id',$id)
                          ->get();
            return $q->result();
        }
        public function edituserreciperemedy($id){
            $q = $this->db->select()
                          ->from('remedy')
                          ->where('user_recipe_id',$id)
                          ->get();
            return $q->row();
        }
        public function userrecipeupdate($name,$id){
            return $this->db->where('id',$id)
                            ->update('user_recipe',['name'=>$name]);
        }
        public function userremedyupdate($remedi,$id){
            return $this->db->where('user_recipe_id',$id)
                            ->update('remedy',['remedi'=>$remedi]);
        }
        public function useringredientupdate($i,$id){
            return $this->db->where('id',$id)
                            ->update('ingredient',['ingre_name'=>$i]);
        }
    }
?>