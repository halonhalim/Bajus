<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller{
    public function __construct() {
        parent::__construct();
         $admin_id = $this->session->userdata('admin_id');
        if($admin_id != NULL){
            redirect('dashboard');
            
        }
    }
   
    public function index(){
        $this->load->view('admin/admin_login');
    }
    public function admin_login_check(){
        $email_address = $this->input->post('email_address',true);
         $password = $this->input->post('password',true);
         
         $this->load->model('admin_model');
       $result =   $this->admin_model->check_admin_login_info($email_address, $password);
       $sdata = array();
       if($result){
         $sdata ['admin_id']= $result->admin_id;
          $sdata ['admin_name']= $result->admin_name;
        $this->session->set_userdata($sdata);
        redirect('/dashboard');
       }else{
           $sdata['massage'] = "your ID or password Invlaid !";
           $this->session->set_userdata($sdata);
           redirect('management');
           
       }
    }
}
