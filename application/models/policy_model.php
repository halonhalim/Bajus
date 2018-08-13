<?php

class Policy_model extends CI_Model {
   var $table = 'tbl_policy';

	public function index() {
		$query = $this->db->get_where($this->table);
		return $query->row();
	}
	
         function policy_info()  {
      $result=$this->db->select('*')->from('tbl_policy')
                            ->where('id',1)
                            ->get()
                            ->row();
                            return $result;
                            
    }
    public function insert() {
        
        $data['title'] = $this->input->post('title', true);
        $data['description'] = $this->input->post('description', true);
       
       
        $this->db->update('tbl_policy', $data);
    }
        
        
}?>