<?php

  class User_details extends  CI_Controller{
   
    public function  test(){

    $this->load->helper("common_helper");
    echo add();
    $this->load->model("User_model");
    $data["userArray"] = $this->User_model->returnarray();
    $this->load->view("user_view", $data);

    }




  }
?>