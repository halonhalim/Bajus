<?php

defined('BASEPATH') OR exit('Whow are You!');

Class Adverstiment extends CI_Controller {

   function __construct() {  
        parent::__construct();
        $this->load->model('Adverstiment_model');
        
    }
    
    public function add() {
        $data = array();
        $data['admin_main_content'] = $this->load->view('admin/adds/add', '', true);
        $this->load->view('admin/admin_master', $data);
    }
     public function save() {
        $this->adverstiment_model->insert();
        $sdata = array();
        $sdata['massage'] = "Save  Adverstiment Successfully !";
        $this->session->set_userdata($sdata);
        redirect('adverstiment/add');
    }
    public function manage_adverstiment() {
        $data = array();
        $data['all_adverstiment_info'] = $this->adverstiment_model->all_adverstiment_info();
        $data['admin_main_content'] = $this->load->view('admin/adds/index', $data, true);
        $this->load->view('admin/admin_master', $data);
    }
    public function delete_adverstiment($id) {
        $this->adverstiment_model->delete_adverstiment_info($id);
        redirect('/manage-adverstiment');
    }
}?>