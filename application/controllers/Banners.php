<?php

defined('BASEPATH') OR exit('Whow are You!');

Class Banners extends CI_Controller {

    function __construct() {  
        parent::__construct();
        $this->load->model('Banners_model');
        
    }
    public function add() {
        $data = array();
        $data['admin_main_content'] = $this->load->view('admin/baners/add', '', true);
        $this->load->view('admin/admin_master', $data);
    }
    public function save() {
        $this->banners_model->insert();
        $sdata = array();
        $sdata['massage'] = "Save  Banners Successfully !";
        $this->session->set_userdata($sdata);
        redirect('banners/add');
    }
    
    
     public function manage_baners() {
        $data = array();
        $data['all_baners_info'] = $this->banners_model->all_baners_info();
        $data['admin_main_content'] = $this->load->view('admin/baners/index', $data, true);
        $this->load->view('admin/admin_master', $data);
    }
    
    public function edit_baners($baners_id) {
        $data = array();
        $data['baners_info'] = $this->banners_model->select_baners_by_id($baners_id);
        $data['admin_main_content'] = $this->load->view('admin/baners/edit', $data, true);
        $this->load->view('admin/admin_master', $data);
    }
    public function update_baners() {
        $this->banners_model->update_baners_info();
        redirect('/manage-baners');
    }
    
     public function delete_baners($baners_id) {
        $this->banners_model->delete_baners_info($baners_id);
        redirect('/manage-baners');
    }
}
?>
