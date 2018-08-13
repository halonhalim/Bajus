<?php

defined('BASEPATH') OR exit('Whow are You!');

Class Policy extends CI_Controller {
    
    
    
    
     function show() {  
       $data['policy'] = $this->policy_model->policy_info() ;
        $data['admin_main_content'] = $this->load->view('admin/policy/edit', $data, true);
        $this->load->view('admin/admin_master', $data);
    }
    
    public function save() {
        $this->policy_model->insert();
        $sdata = array();
        $sdata['massage'] = "Update Policy  Information Successfully !";
        $this->session->set_userdata($sdata);
        redirect('policy/show');
    }
    
}?>