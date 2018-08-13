<?php

class Adverstiment_model extends CI_Model {

    var $table = 'tbl_adds';

    public function index() {
        $query = $this->db->get_where($this->table);
        return $query->row();
    }

    private function upload_logo_image() {
        $config['upload_path'] = './product_images/';
        $config['allowed_types'] = 'gif|jpg|png|pdf';
        $config['max_size'] = 5000;
        $config['max_width'] = 290;
        $config['max_height'] = 250;

        $this->load->library('upload', $config);
        if ($this->upload->do_upload('file_name')) {
            $data = $this->upload->data();
            $image_path = "product_images/$data[file_name]";
            return $image_path;
        } else {
            $error = $this->upload->display_errors();
            //print_r($data);
        }
    }

    private function upload_add_image() {
        $config['upload_path'] = './product_images/';
        $config['allowed_types'] = 'gif|jpg|png|pdf';
        $config['max_size'] = 5000;
        $config['max_width'] = 290;
        $config['max_height'] = 250;

        $this->load->library('upload', $config);
        if ($this->upload->do_upload('file_name1')) {
            $data = $this->upload->data();
            $image_path = "product_images/$data[file_name]";
            return $image_path;
        } else {
            $error = $this->upload->display_errors();
            //print_r($data);
        }
    }

    public function insert() {
        $data['link'] = $this->input->post('link', true);
        $data['adverstiment'] = $this->input->post('adverstiment', true);
        $data['file_name'] = $this->upload_logo_image();
        $data['file_name1'] = $this->upload_add_image();



        $this->db->insert('tbl_adds', $data);
    }

    public function all_adverstiment_info() {
        $this->db->select('*');
        $this->db->from('tbl_adds');

        $query_result = $this->db->get();
        $baners_info = $query_result->result();
        return $baners_info;
    }

    public function select_adverstiment_by_id($id) {
        $this->db->select('*');
        $this->db->from('tbl_adds');
        $this->db->where('id', $id);
        $query_result = $this->db->get();
        $result = $query_result->row();
        return $result;
    }

    public function delete_adverstiment_info($id) {

        $this->db->where('id', $id);
        $this->db->delete('tbl_adds');
    }

    public function update_baners_info() {
        $data = array();
        $baners_id = $this->input->post('baners_id', TRUE);
        $data['baners_title'] = $this->input->post('baners_title', TRUE);
        $data['baners_image'] = $this->upload_logo_image();
        $this->db->where('baners_id', $baners_id);
        $this->db->update('tbl_baners', $data);
    }

    function slider_info() {
        $result = $this->db->select('*')->from('tbl_baners')
                ->get()
                ->result();
        return $result;
    }

}

?>