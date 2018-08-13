<?php

class Market_model extends CI_Model {

    var $table = 'tbl_market';

    public function index() {
        $query = $this->db->get_where($this->table);
        return $query->row();
    }

    public function insert() {
        $data['number'] = $this->input->post('number', true);
        $data['title'] = $this->input->post('title', true);
        $data['price'] = $this->input->post('price', true);
        $this->db->insert('tbl_market', $data);
    }
     public function market_info(){
        $this->db->select('*');
        $this->db->from('tbl_market');
         $query_result = $this->db->get();
         $market_info = $query_result->result();
         return $market_info;
    }
     public function select_market_by_id($id) {
        $this->db->select('*');
        $this->db->from('tbl_market');
        $this->db->where('id', $id);
        $query_result = $this->db->get();
        $result = $query_result->row();
        return $result;
    }
    public function delete_market_info($id) {
        $this->db->where('id', $id);
        $this->db->delete('tbl_market');
       
    }


}

?>