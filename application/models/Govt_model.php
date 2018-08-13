<?php

class Govt_model extends CI_Model {

    var $table = 'tbl_govt';

    public function index() {
        $query = $this->db->get_where($this->table);
        return $query->row();
    }

    private function upload_logo_image() {
        $config['upload_path'] = './baners_images/';
        $config['allowed_types'] = 'gif|jpg|png|pdf|jpeg';
        $config['max_size'] = 10000;
        $config['max_width'] = 1163;
        $config['max_height'] = 361;

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
        $data['file_name'] = $this->upload_logo_image();
        $this->db->insert('tbl_govt', $data);
    }
    public function govt_info(){
        $this->db->select('*');
        $this->db->from('tbl_govt');
         $query_result = $this->db->get();
         $govt_info = $query_result->result();
         return $govt_info;
    }
    public function select_govt_by_id($id) {
        $this->db->select('*');
        $this->db->from('tbl_govt');
        $this->db->where('id', $id);
        $query_result = $this->db->get();
        $result = $query_result->row();
        return $result;
    }
     public function delete_govt_info($id) {

        $this->db->where('id', $id);
        $this->db->delete('tbl_govt');
       
    }

     function report_info()
    {
       $result=$this->db->select('*')->from('tbl_report')
                           ->get()
                           ->result();
                           return $result;      
    }
}

?>