<?php
     class form_model extends CI_model{

        public function crete($formArray){

            $this->db->insert("users",$formArray);   //insert into users (name,email etc)values(?,?,?);
        }

        function all() {
           return $users =  $this->db->get("users")->result_array();  //select * from users
        }



        function getuser($userId) {
            $this->db->where('user_id',$userId);
           return $users= $this->db->get("users")->row_array();  //select * from user where user_id=?  
        
        }


         function updateUser($userId,$formArray){
         $this->db->where('user_id',$userId);      
         $this->db->update('users',$formArray);              //update user SET name=? ,email = ?,where user_id   =?
         
         }


         function deleteUser($userId){
            $this->db->where('user_id',$userId);    
            $this->db->delete('users');        //delete from users where user_id=? 
         }
     }

?>  