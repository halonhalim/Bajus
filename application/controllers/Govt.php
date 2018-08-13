<?php

defined('BASEPATH') OR exit('Whow are You!');

Class Govt extends CI_Controller {
    
         function __construct() {  
        parent::__construct();
        $this->load->model('Govt_model');
         }
    public function add() {
        $data = array();
        $data['admin_main_content'] = $this->load->view('admin/govt/add', '', true);
        $this->load->view('admin/admin_master', $data);
    }
    public function save() {
        $this->govt_model->insert();
        $sdata = array();
        $sdata['massage'] = "Upload Circular Successfully !";
        $this->session->set_userdata($sdata);
        redirect('govt/add');
    }
     public function manage_govt() {
        $data = array();
        $data['all_govt_info'] = $this->govt_model->govt_info();
        $data['admin_main_content'] = $this->load->view('admin/govt/index', $data, true);
        $this->load->view('admin/admin_master', $data);
    }
     public function delete_govt($id) {
        $this->govt_model->delete_govt_info($id);
        redirect('/manage-govt');
    }
    
}

?>