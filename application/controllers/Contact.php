<?php

defined('BASEPATH') OR exit('Whow are You!');

Class Contact extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model('contact_model');
    }

    public function add_contact() {
        $data = array();
        $data['admin_main_content'] = $this->load->view('admin/contact/information', '', true);
        $this->load->view('admin/admin_master', $data);
    }
    public function save_contact() {
        $this->contact_model->insert();
        $sdata = array();
        $sdata['massage'] = "Save Contact Information Successfully !";
        $this->session->set_userdata($sdata);
        redirect('contact/show');
    }
    function show() {  
        $data['contact_info'] = $this->contact_model->contact_info();
        $data['admin_main_content'] = $this->load->view('admin/contact/information', $data, true);
        $this->load->view('admin/admin_master', $data);
    }

}
