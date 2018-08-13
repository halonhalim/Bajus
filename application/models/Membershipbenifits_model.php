<?php

class Membershipbenifits_model extends CI_Model {
    var $table = ' tbl_membershipbenifits';

	public function index() {
		$query = $this->db->get_where($this->table);
		return $query->row();
	}     
    public function insert() {
       
        $data['membershipbenifits_title'] = $this->input->post('membershipbenifits_title', true);
        $data['description'] = $this->input->post('description', true);
       
       
        $this->db->update('tbl_membershipbenifits', $data);
    }
    function membershipbenifits_info()  {
      $result=$this->db->select('*')->from(' tbl_membershipbenifits')
                            ->where('membershipbenifits_id', 1)
                            ->get()
                            ->row();
                            return $result;
                            
    }
}
?>
