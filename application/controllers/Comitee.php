<?php

defined('BASEPATH') OR exit('Whow are You!');

Class Comitee extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model('Comitee_model');
    }
   
    public function add() {    
        $data = array();
        $data['admin_main_content'] = $this->load->view('admin/commitee/add', '', true);
        $this->load->view('admin/admin_master', $data);
    }
     public function save_comitee() {
        $this->comitee_model->insert();
        $sdata = array();
        $sdata['massage'] = "Save Comitee Information Successfully !";
        $this->session->set_userdata($sdata);
        redirect('comitee/add');
    }
     public function manage_comitee() {
        $data = array();
        $data['all_comitee_info'] = $this->comitee_model->all_comitee_info();
        $data['admin_main_content'] = $this->load->view('admin/commitee/index', $data, true);
        $this->load->view('admin/admin_master', $data);
    }
    public function edit_comitee($id) {
        $data = array();
        $data['comitee_info'] = $this->comitee_model->select_comitee_by_id($id);
        $data['admin_main_content'] = $this->load->view('admin/commitee/edit', $data, true);
        $this->load->view('admin/admin_master', $data);
    }
    public function delete_comitee($id) {
        $this->comitee_model->delete_comitee_info($id);
        redirect('/manage-comitee');
    }
    public function update_comitee() {
        $this->comitee_model->update_comitee_info();
        redirect('/manage-comitee');
    }
}

?>