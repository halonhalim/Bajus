<?php

defined('BASEPATH') OR exit('Whow are You!');

Class Aboutus extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model('Aboutus_model');
    }
   
    public function add() {    
        $data = array();
        $data['admin_main_content'] = $this->load->view('admin/aboutus/edit', '', true);
        $this->load->view('admin/admin_master', $data);
    }
     public function save_aboutus() {
        $this->aboutus_model->insert();
        $sdata = array();
        $sdata['massage'] = "Save Aboutus Information Successfully !";
        $this->session->set_userdata($sdata);
        redirect('aboutus/show');
    }
    function show() {  
        $data['aboutus_info'] = $this->aboutus_model->aboutus_info() ;
        $data['admin_main_content'] = $this->load->view('admin/aboutus/edit', $data, true);
        $this->load->view('admin/admin_master', $data);
    }

}

?>