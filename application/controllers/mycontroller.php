<?php
class mycontroller extends CI_Controller{

    public function test(){
    $this->load->model('Mymodel');
   $firstname= $this->Mymodel->firstname();
   
  // echo $firstname;
    echo "Firstname =>".  $firstname;
    }
}
?>