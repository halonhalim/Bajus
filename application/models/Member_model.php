<?php

class Member_model extends CI_Model {

    var $table = 'tbl_member';

    public function index() {
        $query = $this->db->get_where($this->table);
        return $query->row();
    }

    private function upload_logo_image() {
        $config['upload_path'] = './comitee/';
        $config['allowed_types'] = 'gif|jpg|png|jpeg';
        $config['max_size'] = 5000;
        $config['max_width'] = 169;
        $config['max_height'] = 189;

        $this->load->library('upload', $config);
        if ($this->upload->do_upload('file_name')) {
            $data = $this->upload->data();
            $image_path = "comitee/$data[file_name]";
            return $image_path;
        } else {
            $error = $this->upload->display_errors();
            //print_r($data);
        }
    }
    
    
     public function insert() {
        $data['file_name'] = $this->upload_logo_image();  
        $data['slug'] = slug($this->input->post('category'));
        $data['category'] = $this->input->post('category', true);
        $data['name'] = $this->input->post('name', true);
        $data['designation'] = $this->input->post('designation', true);
        $data['company'] = $this->input->post('company', true);
        $data['member'] = $this->input->post('member', true);
        $data['mobile'] = $this->input->post('mobile', true);
        $data['email'] = $this->input->post('email', true);
        $data['adress'] = $this->input->post('adress', true);
        $this->db->insert('tbl_member', $data);
    }
     public function all_member_info() {
        $this->db->select('*');
        $this->db->from('tbl_member');

        $query_result = $this->db->get();
        $member_info = $query_result->result();
        return $member_info;
    }
     public function select_member_by_id($id) {
        $this->db->select('*');
        $this->db->from('tbl_member');
        $this->db->where('id', $id);
        $query_result = $this->db->get();
        $result = $query_result->row();
        return $result;
    }
     public function update_member_info() {
        
        $id = $this->input->post('id', TRUE);
        $data['file_name'] = $this->upload_logo_image();  
        $data['slug'] = slug($this->input->post('category'));
        $data['category'] = $this->input->post('category', true);
        $data['name'] = $this->input->post('name', true);
        $data['designation'] = $this->input->post('designation', true);
        $data['company'] = $this->input->post('company', true);
        $data['member'] = $this->input->post('member', true);
        $data['mobile'] = $this->input->post('mobile', true);
        $data['email'] = $this->input->post('email', true);
        $data['adress'] = $this->input->post('adress', true);
        $this->db->where('id', $id);
        $this->db->update('tbl_member', $data);
    }
     public function delete_member_info($id) {

        $this->db->where('id', $id);
        $this->db->delete('tbl_member');
    }
     public function ec_memmber(){
        $this->db->select('*');
        $this->db->from('tbl_member');
        $this->db->where('slug', 'general-members');
        $this->db->order_by('id', 'ASC');
        return $this->db->get()->result();
    }
     public function general(){
        $this->db->select('*');
        $this->db->from('tbl_member');
        $this->db->where('slug','ecmembers');
        $this->db->order_by('id', 'ASC');
        return $this->db->get()->result();
    }
    public function district(){
        $this->db->select('*');
        $this->db->from('tbl_member');
        $this->db->where('slug','district-members');
        $this->db->order_by('id', 'ASC');
        return $this->db->get()->result();
    }
    public function newmember(){
        $this->db->select('*');
        $this->db->from('tbl_member');
        $this->db->where('slug','new-members');
        $this->db->order_by('id', 'ASC');
        return $this->db->get()->result();
    }
}?>