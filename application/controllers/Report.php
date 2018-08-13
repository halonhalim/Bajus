<?php

defined('BASEPATH') OR exit('Whow are You!');

Class Report extends CI_Controller {
         function __construct() {  
        parent::__construct();
        $this->load->model('Report_model');
        
    }
    public function add() {
        $data = array();
        $data['admin_main_content'] = $this->load->view('admin/report/add', '', true);
        $this->load->view('admin/admin_master', $data);
    }
    public function save() {
        $this->report_model->insert();
        $sdata = array();
        $sdata['massage'] = "Upload Report Successfully !";
        $this->session->set_userdata($sdata);
        redirect('report/add');
    }
     public function manage_report() {
        $data = array();
        $data['all_report_info'] = $this->report_model->report_info();
        $data['admin_main_content'] = $this->load->view('admin/report/index', $data, true);
        $this->load->view('admin/admin_master', $data);
    }
     public function delete_report($id) {
        $this->report_model->delete_report_info($id);
        redirect('/manage-report');
    }
    
    
}

?>