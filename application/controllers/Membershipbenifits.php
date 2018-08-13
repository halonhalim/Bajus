<?php

defined('BASEPATH') OR exit('Whow are You!');

Class Membershipbenifits extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model('Membershipbenifits_model');
    }
   
    public function add() {    
        $data = array();
        $data['admin_main_content'] = $this->load->view('admin/membershipbenifits/edit', '', true);
        $this->load->view('admin/admin_master', $data);
    }
     public function save_membershipbenifits() {
        $this->membershipbenifits_model->insert();
        $sdata = array();
        $sdata['massage'] = "Save membershipbenifits Information Successfully !";
        $this->session->set_userdata($sdata);
        redirect('membershipbenifits/show');
    }
    function show() {  
        $data['membershipbenifits_info'] = $this->membershipbenifits_model->membershipbenifits_info() ;
        $data['admin_main_content'] = $this->load->view('admin/membershipbenifits/edit', $data, true);
        $this->load->view('admin/admin_master', $data);
    }

}

?>
