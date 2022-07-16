<?php
class mycontroller extends CI_Controller{

    public function index(){
        echo"php is working";

    }
    public function test(){
    $this->load->model('Mymodel');
   $firstname= $this->Mymodel->firstname();
   echo "Firstname => " $firstname;
    }
}
?>