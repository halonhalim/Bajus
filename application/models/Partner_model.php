<?php

class Partner_model extends CI_Model {

    var $table = 'tbl_partner';
    public function index() {
        $query = $this->db->get_where($this->table);
        return $query->row();
    }
    private function upload_logo_image() {
        $config['upload_path'] = './product_images/';
        $config['allowed_types'] = 'gif|jpg|png|pdf';
        $config['max_size'] = 5000;
        $config['max_width'] = 240;
        $config['max_height'] = 99;

        $this->load->library('upload', $config);
        if ($this->upload->do_upload('image')) {
            $data = $this->upload->data();
            $image_path = "product_images/$data[file_name]";
            return $image_path;
        } else {
            $error = $this->upload->display_errors();
            //print_r($data);
        }
    }
    public function insert() {
        $data['title'] = $this->input->post('title', true);
        $data['image'] = $this->upload_logo_image();
        $this->db->insert('tbl_partner', $data);
    }
    public function all_partner_info() {
        $this->db->select('*');
        $this->db->from('tbl_partner');

        $query_result = $this->db->get();
        $baners_info = $query_result->result();
        return $baners_info;
    }
    public function select_partner_by_id($id) {
        $this->db->select('*');
        $this->db->from('tbl_partner');
        $this->db->where('id', $id);
        $query_result = $this->db->get();
        $result = $query_result->row();
        return $result;
    }
    public function update_partner_info() {
        $data = array();
        $id = $this->input->post('id', TRUE);
        $data['title'] = $this->input->post('title', TRUE);
        $data['image'] = $this->upload_logo_image();
        $this->db->where('id', $id);
        $this->db->update('tbl_partner', $data);
    }
    public function delete_partner_info($id) {
        $this->db->where('id', $id);
        $this->db->delete('tbl_partner');
    }
    function partner_info() {
        $result = $this->db->select('*')->from('tbl_partner')
                ->get()
                ->result();
        return $result;
    }
}

?>