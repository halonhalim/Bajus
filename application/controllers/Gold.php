<?php

defined('BASEPATH') OR exit('Whow are You!');

Class Gold extends CI_Controller {
        function __construct() {  
        parent::__construct();
        $this->load->model('Report_model');
        }
         
    public function add() {
        $data = array();
        $data['admin_main_content'] = $this->load->view('admin/gold/add', '', true);
        $this->load->view('admin/admin_master', $data);
    }
    public function save() {
        $this->gold_model->insert();
        $sdata = array();
        $sdata['massage'] = "Upload Gold Price Successfully !";
        $this->session->set_userdata($sdata);
        redirect('gold/add');
    }
     public function manage_gold() {
        $data = array();
        $data['all_gold_info'] = $this->gold_model->gold_info();
        $data['admin_main_content'] = $this->load->view('admin/gold/index', $data, true);
        $this->load->view('admin/admin_master', $data);
    }
     public function delete_gold($id) {
        $this->gold_model->delete_gold_info($id);
        redirect('/manage-gold');
    }
}?>