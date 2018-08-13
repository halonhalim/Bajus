<?php

defined('BASEPATH') OR exit('Whow are You!');

Class Link extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model('Link_model');
    }

    public function index() {
        $data['results'] = $this->link_model->index();
        $data = array();
        $data['admin_main_content'] = $this->load->view('admin/link/index', '', true);
        $this->load->view('admin/admin_master', $data);
    }
    public function add() {    
        $data = array();
        $data['admin_main_content'] = $this->load->view('admin/links/add', '', true);
        $this->load->view('admin/admin_master', $data);
    }

     public function save() {
        $this->link_model->insert();
        $sdata = array();
        $sdata['massage'] = "Save Link Information Successfully !";
        $this->session->set_userdata($sdata);
        redirect('link/add');
    }
     public function manage_link() {
        $data = array();

        $data['all_link_info'] = $this->link_model->all_link_info();
        $data['admin_main_content'] = $this->load->view('admin/links/manage_link', $data, true);
        $this->load->view('admin/admin_master', $data);
    }
     public function edit_link($link_id) {
        $data = array();
        $data['link_info'] = $this->link_model->select_link_by_id($link_id);
        $data['admin_main_content'] = $this->load->view('admin/links/edit', $data, true);
        $this->load->view('admin/admin_master', $data);
    }
     public function update_link() {
        $this->link_model->update_link_info();
        redirect('link/manage_link');
    }
     public function delete_link($link_id) {
        $this->link_model->delete_link_info($link_id);
        redirect('link/manage_link');
    }

}

?>