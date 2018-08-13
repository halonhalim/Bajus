<?php

class Super_admin_model extends CI_Model {

    public function save_category_info() {
        $data = array();
        $data['category_name'] = $this->input->post('category_name', true);
        $data['category_description'] = $this->input->post('category_description', true);
        $data['category_name'] = $this->input->post('category_name', true);
        $data['publication_status'] = $this->input->post('publication_status', true);
        
        $this->db->insert('tbl_category', $data);
    }

    public function select_all_published_category() {
        $this->db->select('*');
        $this->db->from('tbl_category');
        $this->db->where('publication_status', 1);
        $query_result = $this->db->get();
        $category_info = $query_result->result();
        return $category_info;
    }

    public function all_category_info() {
        $this->db->select('*');
        $this->db->from('tbl_category');

        $query_result = $this->db->get();
        $category_info = $query_result->result();
        return $category_info;
    }

    public function select_category_by_id($category_id) {
        $this->db->select('*');
        $this->db->from('tbl_category');
        $this->db->where('category_id', $category_id);
        $query_result = $this->db->get();
        $result = $query_result->row();
        return $result;
    }

    public function update_category_info() {
        $data = array();
        $category_id = $this->input->post('category_id', TRUE);
        $data['category_name'] = $this->input->post('category_name', TRUE);
        $data['category_description'] = $this->input->post('category_descrition', TRUE);
        $this->db->where('category_id', $category_id);
        $this->db->update('tbl_category', $data);
    }

    public function unpublish_category_info($category_id) {
        $this->db->set('publication_status', 0);
        $this->db->where('category_id', $category_id);
        $this->db->update('tbl_category');
    }

    public function publish_category_info($category_id) {
        $this->db->set('publication_status', 1);
        $this->db->where('category_id', $category_id);
        $this->db->update('tbl_category');
    }

    public function delete_category_info($category_id) {

        $this->db->where('category_id', $category_id);
        $this->db->delete('tbl_category');
    }

    public function select_all_published_category_info() {
        $this->db->select('*');
        $this->db->from('tbl_category');
        $this->db->where('publication_status', 1);
        $query_result = $this->db->get();
        $result = $query_result->result();
        return $result;
    }

    public function select_all_published_manufacture_info() {
        $this->db->select('*');
        $this->db->from('tbl_manufacture');
        $this->db->where('publication_status', 1);
        $query_result = $this->db->get();
        $result = $query_result->result();
        return $result;
    }

    public function save_manufacture_info() {
        $data = array();
        $data['manufacture_name'] = $this->input->post('manufacture_name', true);
        $data['manufacture_description'] = $this->input->post('manufacture_description', true);

        $data['publication_status'] = $this->input->post('publication_status', true);
        $this->db->insert('tbl_manufacture', $data);
    }

    public function all_manufacture_info() {
        $this->db->select('*');
        $this->db->from('tbl_manufacture');

        $query_result = $this->db->get();
        $manufacture_info = $query_result->result();
        return $manufacture_info;
    }

    public function unpublish_manufacture_info($manufacture_id) {
        $this->db->set('publication_status', 0);
        $this->db->where('manufacture_id', $manufacture_id);
        $this->db->update('tbl_manufacture');
    }

    public function publish_manufacture_info($manufacture_id) {
        $this->db->set('publication_status', 1);
        $this->db->where('manufacture_id', $manufacture_id);
        $this->db->update('tbl_manufacture');
    }

    public function delete_manufacture_info($manufacture_id) {

        $this->db->where('manufacture_id', $manufacture_id);
        $this->db->delete('tbl_manufacture');
    }

    public function select_all_published_manufacture() {
        $this->db->select('*');
        $this->db->from('tbl_manufacture');
        $this->db->where('publication_status', 1);
        $query_result = $this->db->get();
        $manufacture_info = $query_result->result();
        return $manufacture_info;
    }

    public function select_manufacture_by_id($manufacture_id) {
        $this->db->select('*');
        $this->db->from('tbl_manufacture');
        $this->db->where('manufacture_id', $manufacture_id);
        $query_result = $this->db->get();
        $result = $query_result->row();
        return $result;
    }

    public function update_manufacture_info() {
        $data = array();
        $manufacture_id = $this->input->post('manufacture_id', TRUE);
        $data['manufacture_name'] = $this->input->post('manufacture_name', TRUE);
        $data['manufacture_description'] = $this->input->post('manufacture_descrition', TRUE);
        $this->db->where('manufacture_id', $manufacture_id);
        $this->db->update('tbl_manufacture', $data);
    }

    public function save_products_info() {
        $data = array();
        $data['product_name'] = $this->input->post('product_name', true);
        $data['category_id'] = $this->input->post('category_id', true);
        $data['manufacture_id'] = $this->input->post('manufacture_id', true);
        $data['product_short_description'] = $this->input->post('product_short_description', true);
        $data['product_long_description'] = $this->input->post('product_long_description', true);
        $data['product_price'] = $this->input->post('product_price', true);
        $data['product_new_price'] = $this->input->post('product_new_price', true);
        $data['product_quantity'] = $this->input->post('product_quantity', true);
        $is_featured = $this->input->post('is_featured', true);
        if ($is_featured == 'on') {
            $data['is_featured'] = 1;
        } else {
            $data['is_featured'] = 0;
        }
        $sdata = array();
        $error = "";
        $config['upload_path'] = 'product_images/';
        $config['allowed_types'] = 'gif|jpg|png|pdf';
        $config['max_size'] = 10000;
        $config['max_width'] = 100024;
        $config['max_height'] = 1900;

        $this->load->library('upload', $config);

        if (!$this->upload->do_upload('product_image')) {
            $error = $this->upload->display_errors();
            echo $error;
            exit();

            //$this->load->view('upload_form', $error);
        } else {
            $sdata = $this->upload->data();


            $data['product_image'] = $config ['upload_path'] . $sdata['file_name'];
            //$this->load->view('upload_success', $data);
        }
         $sdata = array();
        $error = "";
        $config['upload_path'] = 'product_images/';
        $config['allowed_types'] = 'gif|jpg|png|pdf';
        $config['max_size'] = 10000;
        $config['max_width'] = 100024;
        $config['max_height'] = 1900;

        $this->load->library('upload', $config);

        if (!$this->upload->do_upload('pic1')) {
            $error = $this->upload->display_errors();
            echo $error;
            exit();

            //$this->load->view('upload_form', $error);
        } else {
            $sdata = $this->upload->data();


            $data['pic1'] = $config ['upload_path'] . $sdata['file_name'];
            //$this->load->view('upload_success', $data);
        }
        $data['publication_status'] = $this->input->post('publication_status', true);
        $this->db->insert('tbl_products', $data);
    }
     public function all_products_info() {
        $this->db->select('*');
        $this->db->from('tbl_products');

        $query_result = $this->db->get();
        $products_info = $query_result->result();
        return $products_info;
    }

}
