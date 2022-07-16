<?php

class  Register extends CI_Controller{



    
    public function cric() {
    $this->load->model("form_model");
    $users=$this->form_model->all();
        $data =array();
        $data['users'] = $users; 
        $this->load->view('list_view',$data);
 

    }
    public function index(){   
        $this->load->model('form_model');
        $this->load->library('form_validation');
        $this->load->helper('Form');
        $this->load->model('form_model');

        $this->form_validation->set_rules("email","Email id","required|valid_email");
        $this->form_validation->set_rules("Name","Name","required|alpha");
        $this->form_validation->set_rules("Age","Age","required|integer");
        $this->form_validation->set_rules("password","password","required|alpha_numeric|max_length[10]|min_length[5]");
        $this->form_validation->set_rules("subject","subject","required");

        if ($this->form_validation->run() == FALSE)
        {
                
            $this->load->view('Form');
            
                
        }
        else
        {
                $formArray = array();
                $formArray['email'] = $this->input->post("email");
                $formArray['Name'] = $this->input->post("Name");
                $formArray['Age'] = $this->input->post("Age");
                $formArray['password'] = $this->input->post("password");
                $formArray['subject'] = $this->input->post("subject");
                $this->form_model->crete($formArray);
                $this->session->set_flashdata('success','record added successfully');
                redirect(base_url().'index.php/Register/cric');


        }
    
    }


    public function edit($userId){
    	$this->load->model('form_model');
    	$user = $this->form_model->getUser($userId);
    	$data = array();
    	$data['user'] = $user;


        $this->form_validation->set_rules("email","Email id","required|valid_email");
        $this->form_validation->set_rules("Name","Name","required|alpha");
        $this->form_validation->set_rules("Age","Age","required|integer");
        $this->form_validation->set_rules("password","password","required|alpha_numeric|max_length[10]|min_length[5]");
        $this->form_validation->set_rules("subject","subject","required");


         if ($this->form_validation->run() == false){
        $this->load->view('edit',$data);
        }
        else{
            $formArray=array();
            $formArray['email'] = $this->input->post('email');
            $formArray['Name'] = $this->input->post('Name');
            $formArray['Age'] = $this->input->post('Age');
            $formArray['password'] = $this->input->post('password');
            $formArray['subject'] = $this->input->post('subject');
            


         $this->form_model->updateUser($userId,$formArray); 
         $this->session->set_flashdata('success', 'data update successfully');
         redirect(base_url()."index.php/Register/cric");
        	
        }
    }
           function delete($userId)

    {
        $this->load->model('form_model');
        $user=$this->form_model->getUser($userId);
        if(empty($user))
        {
            $this->session->set_flashdata('failure','record not fount in database ');
            redirect(base_url()."index.php/Register/cric");

        }
        
        $this->form_model->deleteUser($userId);
        $this->session->set_flashdata('success','record deleted succesfully ');
        redirect(base_url()."index.php/Register/cric");
    }
}

?>