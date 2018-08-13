<?php

class News_model extends CI_Model {

    var $table = 'tbl_news';

     public function index () {
		$this->db->select('*');
		$this->db->from('tbl_news');
		$this->db->order_by('news_id', 'DESC');
		return $this->db->get()->result();		
	}
        public function introduce() {
		$query = $this->db->get_where($this->table);
		return $query->row();
	}

    private function upload_logo_image() {
        $config['upload_path'] = './product_images/';
        $config['allowed_types'] = 'gif|jpg|png|pdf';
        $config['max_size'] = 5000;
        $config['max_width'] = 286;
        $config['max_height'] = 246;

        $this->load->library('upload', $config);
        if ($this->upload->do_upload('images')) {
            $data = $this->upload->data();
            $image_path = "product_images/$data[file_name]";
            return $image_path;
        } else {
            $error = $this->upload->display_errors();
            //print_r($data);
        }
    }
     public function insert() {
        $data['images']=$this->upload_logo_image();
        $data['date'] = $this->input->post('date', true);
        $data['title'] = $this->input->post('title', true);
        $data['description'] = $this->input->post('description', true);
       
       
        $this->db->insert('tbl_news', $data);
    }
    public function all_news_info() {
        $this->db->select('*');
        $this->db->from('tbl_news');

        $query_result = $this->db->get();
        $news_info = $query_result->result();
        return $news_info;
    }
    
     public function delete_news_info($news_id) {

        $this->db->where('news_id', $news_id);
        $this->db->delete('tbl_news');
    }
     public function select_news_by_id($news_id) {
        $this->db->select('*');
        $this->db->from('tbl_news');
        $this->db->where('news_id', $news_id);
        $query_result = $this->db->get();
        $result = $query_result->row();
        return $result;
    }
    
    public function get_by_id($id) {
		$query = $this->db->get_where('tbl_news', array('news_id' => $id));
		return $query->row();
	}
     public function update_news_info() {
        $data = array();
        $news_id = $this->input->post('news_id', TRUE);
        $data['date'] = $this->input->post('date', TRUE);
        $data['title'] = $this->input->post('title', TRUE);
         $data['description'] = $this->input->post('description', TRUE);
       $data['images']=$this->upload_logo_image();
        $this->db->where('news_id', $news_id);
        $this->db->update('tbl_news', $data);
    }

    function news_details_info_by_id($news_id)
   {
      $result=$this->db->select('*')->from('tbl_news')
                            ->where('news_id', $news_id)
                            ->get()
                            ->row();
                            return $result;
   }
}

?>
