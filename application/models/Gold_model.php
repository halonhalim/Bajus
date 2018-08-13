<?php

class Gold_model extends CI_Model {

    var $table = 'tbl_gold';

    public function index() {
        $query = $this->db->get_where($this->table);
        return $query->row();
    }

    private function upload_logo_image() {
        $config['upload_path'] = './baners_images/';
        $config['allowed_types'] = 'gif|jpg|png|pdf|jpeg';
        $config['max_size'] = 10000;
        $config['max_width'] = 1660;
        $config['max_height'] = 2020;

        $this->load->library('upload', $config);
        if ($this->upload->do_upload('file_name')) {
            $data = $this->upload->data();
            $image_path = "baners_images/$data[file_name]";
            return $image_path;
        } else {
            $error = $this->upload->display_errors();
            //print_r($data);
        }
    }

    public function insert() {

        $data['number'] = $this->input->post('number', true);
        $data['title'] = $this->input->post('title', true);
        $data['price'] = $this->input->post('price', true);
        $data['file_name'] = $this->upload_logo_image();
        $this->db->insert('tbl_gold', $data);
    }

    function gold_info() {
        $result = $this->db->select('*')->from('tbl_gold')
                ->get()
                ->result();
        return $result;
    }
     public function select_gold_by_id($id) {
        $this->db->select('*');
        $this->db->from('tbl_gold');
        $this->db->where('id', $id);
        $query_result = $this->db->get();
        $result = $query_result->row();
        return $result;
    }
     public function delete_gold_info($id) {

        $this->db->where('id', $id);
        $this->db->delete('tbl_gold');
       
    }

}

?>