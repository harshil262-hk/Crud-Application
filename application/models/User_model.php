<?php
        class User_model extends CI_Model{


            public function returnarray(){


                $this->load->database();
                //$query=$this->db->query("select * from users");
                $query = $this->db->get("users");
                $query->result_array();
                return $query->result_array();
              
            }
            
        }
?>
