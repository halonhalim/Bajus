<?php

class Link_model extends CI_Model {
    
    public function index () {
		$this->db->select('*');
		$this->db->from('tbl_link');
		$this->db->order_by('link_id', 'DESC');
		return $this->db->get()->result();		
	}
       public function insert() {
       
        $data['title'] = $this->input->post('title', true);
        $data['link'] = $this->input->post('link', true);
       
       
        $this->db->insert('tbl_link', $data);
    }
    
    public function all_link_info() {
        $this->db->select('*');
        $this->db->from('tbl_link');

        $query_result = $this->db->get();
        $link_info = $query_result->result();
        return $link_info;
    }
    public function select_link_by_id($link_id) {
        $this->db->select('*');
        $this->db->from('tbl_link');
        $this->db->where('link_id', $link_id);
        $query_result = $this->db->get();
        $result = $query_result->row();
        return $result;
    }
     public function update_link_info() {
        $data = array();
        $link_id = $this->input->post('link_id', TRUE);
        $data['title'] = $this->input->post('title', TRUE);
        $data['link'] = $this->input->post('link', TRUE);
        $this->db->where('link_id', $link_id);
        $this->db->update('tbl_link', $data);
    }
    public function delete_link_info($link_id) {
        $this->db->where('link_id', $link_id);
        $this->db->delete('tbl_link');
    }
}

?>
