<?php

class Aboutus_model extends CI_Model {
    var $table = 'tbl_aboutus';

	public function index() {
		$query = $this->db->get_where($this->table);
		return $query->row();
	}
        
         private function upload_logo_image()
   
              {
                $config['upload_path']          = './product_images/';
                $config['allowed_types']        = 'gif|jpg|png';
                $config['max_size']             = 5000;
                $config['max_width']            = 286;
                $config['max_height']           = 246;

                $this->load->library('upload', $config);
                if($this->upload->do_upload('file_name'))
                {
                  $data=$this->upload->data();
                  $image_path="product_images/$data[file_name]";
                  return $image_path;
                }
                else {
                  $error=$this->upload->display_errors();
                  //print_r($data);
                }

      }

       
    public function insert() {
        $data['file_name']=$this->upload_logo_image();
        $data['about_title'] = $this->input->post('aboutus_title', true);
        $data['description'] = $this->input->post('description', true);
       
       
        $this->db->update('tbl_aboutus', $data);
    }
    function aboutus_info()  {
      $result=$this->db->select('*')->from('tbl_aboutus')
                            ->where('about_id', 1)
                            ->get()
                            ->row();
                            return $result;
                            
    }
}
?>