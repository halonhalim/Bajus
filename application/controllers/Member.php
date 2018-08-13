<?php

defined('BASEPATH') OR exit('Whow are You!');

Class Member extends CI_Controller {

     function __construct() {
        parent::__construct();
        $this->load->model('Member_model');
    }
  
     public function add() {    
        $data = array();
        $data['admin_main_content'] = $this->load->view('admin/member/add', '', true);
        $this->load->view('admin/admin_master', $data);
    }
    public function save_member() {
        $this->member_model->insert();
        $sdata = array();
        $sdata['massage'] = "Save Member Information Successfully !";
        $this->session->set_userdata($sdata);
        redirect('member/add');
    }
     public function manage_member() {
        $data = array();
        $data['all_member_info'] = $this->member_model->all_member_info();
        $data['admin_main_content'] = $this->load->view('admin/member/index', $data, true);
        $this->load->view('admin/admin_master', $data);
    }
     public function edit_member($id) {
        $data = array();
        $data['member_info'] = $this->member_model->select_member_by_id($id);
        $data['admin_main_content'] = $this->load->view('admin/member/edit', $data, true);
        $this->load->view('admin/admin_master', $data);
    }
    public function update_member() {
        $this->member_model->update_member_info();
        redirect('/manage-member');
    }
    public function delete_member($id) {
        $this->member_model->delete_member_info($id);
        redirect('/manage-member');
    }
   
}?>