<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Super_admin extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('super_admin_model');
        $admin_id = $this->session->userdata('admin_id');
        if ($admin_id = NULL) {
            redirect('management');
        }
    }

    public function index() {
        $data = array();
        $data['admin_main_content'] = $this->load->view('admin/pages/dashboard', '', true);
        $this->load->view('admin/admin_master', $data);
    }

    public function add_category() {
        $data = array();
        $data['admin_main_content'] = $this->load->view('admin/category/add', '', true);
        $this->load->view('admin/admin_master', $data);
    }

    public function save_category() {
        $this->super_admin_model->save_category_info();
        $sdata = array();
        $sdata['massage'] = "Save Category Information Successfully !";
        $this->session->set_userdata($sdata);
        redirect('add-category');
    }

    public function manage_category() {
        $data = array();

        $data['all_category_info'] = $this->super_admin_model->all_category_info();
        $data['admin_main_content'] = $this->load->view('admin/category/manage_category', $data, true);
        $this->load->view('admin/admin_master', $data);
    }

    public function unpublish_category($category_id) {
        $this->super_admin_model->unpublish_category_info($category_id);
        redirect('/manage-category');
    }

    public function publish_category($category_id) {
        $this->super_admin_model->publish_category_info($category_id);
        redirect('/manage-category');
    }

    public function delete_category($category_id) {
        $this->super_admin_model->delete_category_info($category_id);
        redirect('/manage-category');
    }

    public function edit_category($category_id) {
        $data = array();
        $data['category_info'] = $this->super_admin_model->select_category_by_id($category_id);
        $data['admin_main_content'] = $this->load->view('admin/category/edit_category', $data, true);
        $this->load->view('admin/admin_master', $data);
    }

    public function update_category() {
        $this->super_admin_model->update_category_info();
        redirect('/manage-category');
    }

    public function add_manufacture() {
        $data = array();
        $data['admin_main_content'] = $this->load->view('admin/manufacture/add', '', true);
        $this->load->view('admin/admin_master', $data);
    }

    public function save_manufacture() {
        $this->super_admin_model->save_manufacture_info();
        $sdata = array();
        $sdata['massage'] = "Save Manufacture Information Successfully !";
        $this->session->set_userdata($sdata);
        redirect('add-manufacture');
    }

    public function manage_manufacture() {
        $data = array();

        $data['all_manufacture_info'] = $this->super_admin_model->all_manufacture_info();
        $data['admin_main_content'] = $this->load->view('admin/manufacture/manage_manufacture', $data, true);
        $this->load->view('admin/admin_master', $data);
    }

    public function unpublish_manufacture($manufacture_id) {
        $this->super_admin_model->unpublish_manufacture_info($manufacture_id);
        redirect('/manage-manufacture');
    }

    public function publish_manufacture($manufacture_id) {
        $this->super_admin_model->publish_manufacture_info($manufacture_id);
        redirect('/manage-manufacture');
    }

    public function delete_manufacture($manufacture_id) {
        $this->super_admin_model->delete_manufacture_info($manufacture_id);
        redirect('/manage-manufacture');
    }

    public function edit_manufacture($manufacture_id) {
        $data = array();
        $data['manufacture_info'] = $this->super_admin_model->select_manufacture_by_id($manufacture_id);
        $data['admin_main_content'] = $this->load->view('admin/manufacture/edit_manufacture', $data, true);
        $this->load->view('admin/admin_master', $data);
    }

    public function update_manufacture() {
        $this->super_admin_model->update_manufacture_info();
        redirect('/manage-manufacture');
    }

    public function add_products() {

        $data = array();
        $data['published_category_info'] = $this->super_admin_model->select_all_published_category_info();
        $data ['published_manufacture_info'] = $this->super_admin_model->select_all_published_manufacture_info();
        $data['admin_main_content'] = $this->load->view('admin/products/add',$data, true);
        $this->load->view('admin/admin_master', $data);
    }

     public function save_products() {
        $this->super_admin_model->save_products_info();
        $sdata = array();
        $sdata['massage'] = "Save Products Information Successfully !";
        $this->session->set_userdata($sdata);
        redirect('add-products');
    }
    public function logout() {
        $this->session->unset_userdata('admin_id'); 
        $this->session->unset_userdata('admin_name');
        $sdata = array();
        $sdata['message'] = "you successfully logout !";
        $this->session->set_userdata($sdata);
        redirect('management');
    }
     public function manage_products() {
        $data = array();

        $data['all_products_info'] = $this->super_admin_model->all_products_info();
        $data['admin_main_content'] = $this->load->view('admin/products/manage_product', $data, true);
        $this->load->view('admin/admin_master', $data);
    }

}
