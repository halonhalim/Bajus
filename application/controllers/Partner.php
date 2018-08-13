<?php

defined('BASEPATH') OR exit('Whow are You!');

Class Partner extends CI_Controller {

    function __construct() {  
        parent::__construct();
        $this->load->model('Partner_model');
        
    }
    public function add() {
        $data = array();
        $data['admin_main_content'] = $this->load->view('admin/partner/add', '', true);
        $this->load->view('admin/admin_master', $data);
    }
    public function save() {
        $this->partner_model->insert();
        $sdata = array();
        $sdata['massage'] = "Save  Banners Successfully !";
        $this->session->set_userdata($sdata);
        redirect('partner/add');
    }
    
    
     public function manage_partner() {
        $data = array();
        $data['all_partner_info'] = $this->partner_model->all_partner_info();
        $data['admin_main_content'] = $this->load->view('admin/partner/index', $data, true);
        $this->load->view('admin/admin_master', $data);
    }
    
    public function edit_partner($id) {
        $data = array();
        $data['partner_info'] = $this->partner_model->select_partner_by_id($id);
        $data['admin_main_content'] = $this->load->view('admin/partner/edit', $data, true);
        $this->load->view('admin/admin_master', $data);
    }
    public function update_partner() {
        $this->partner_model->update_partner_info();
        redirect('/manage-partner');
    }
    
     public function delete_partner($id) {
        $this->partner_model->delete_partner_info($id);
        redirect('/manage-partner');
    }
}
?>
