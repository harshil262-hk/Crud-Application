<?php

class Array_helper_demo extends CI_Controller{

     public function index(){

        $this->load->helper("array");
        $data['seo'] = array(
            "meta_desc"  => "this is my description of the page",
            "meta_key"  => "this,is,a,keywords",
            "title"  => "this is my title" 
        );

        $this->load->view("Array_helper_view",$data);
    }
}

?>