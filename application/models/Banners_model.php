<?php

class Banners_model extends CI_Model {
    var $table = 'tbl_baners';

	public function index() {
		$query = $this->db->get_where($this->table);
		return $query->row();
	}
        private function upload_logo_image()
   
              {
                $config['upload_path']          = './baners_images/';
                $config['allowed_types']        = 'gif|jpg|png|pdf';
                $config['max_size']             = 5000;
                $config['max_width']            = 1163;
                $config['max_height']           = 361;

                $this->load->library('upload', $config);
                if($this->upload->do_upload('baners_image'))
                {
                  $data=$this->upload->data();
                  $image_path="baners_images/$data[file_name]";
                  return $image_path;
                }
                else {
                  $error=$this->upload->display_errors();
                  //print_r($data);
                }

      }
      public function insert() {
          $data['baners_title'] = $this->input->post('baners_title', true);
        $data['baners_image']=$this->upload_logo_image();
        
        
       
        $this->db->insert('tbl_baners', $data);
    }
     public function all_baners_info() {
        $this->db->select('*');
        $this->db->from('tbl_baners');

        $query_result = $this->db->get();
        $baners_info = $query_result->result();
        return $baners_info;
    }
    
     public function select_baners_by_id($baners_id) {
        $this->db->select('*');
        $this->db->from('tbl_baners');
        $this->db->where('baners_id', $baners_id);
        $query_result = $this->db->get();
        $result = $query_result->row();
        return $result;
    }
     public function delete_baners_info($baners_id) {

        $this->db->where('baners_id', $baners_id);
        $this->db->delete('tbl_baners');
    }
    
    
     public function update_baners_info() {
        $data = array();
        $baners_id = $this->input->post('baners_id', TRUE);
        $data['baners_title'] = $this->input->post('baners_title', TRUE);
       $data['baners_image']=$this->upload_logo_image();
        $this->db->where('baners_id', $baners_id);
        $this->db->update('tbl_baners', $data);
    }
    function slider_info()
    {
       $result=$this->db->select('*')->from('tbl_baners')
                           ->get()
                           ->result();
                           return $result;      
    }
    
}?>