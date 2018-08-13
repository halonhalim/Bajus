
<?php

class Contact_model extends CI_Model {
    var $table = 'tbl_contact';

	public function index() {
		$query = $this->db->get_where($this->table);
		return $query->row();
	}
    
    
    private function upload_logo_image()
   
              {
                $config['upload_path']          = './product_images/';
                $config['allowed_types']        = 'gif|jpg|png';
                $config['max_size']             = 5000;
                $config['max_width']            = 578;
                $config['max_height']           = 70;

                $this->load->library('upload', $config);
                if($this->upload->do_upload('logo'))
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
        $data['logo']=$this->upload_logo_image();
        $data['company_name'] = $this->input->post('company_name', true);
        $data['mobile_no'] = $this->input->post('mobile_no', true);
        $data['phone_no'] = $this->input->post('phone_no', true);
        $data['email'] = $this->input->post('email', true);
        $data['address'] = $this->input->post('address', true);
        $data['facebook'] = $this->input->post('facebook', true);
        $data['twitter'] = $this->input->post('twitter', true);
        $data['googleplus'] = $this->input->post('googleplus', true);
        $data['youtube'] = $this->input->post('youtube', true);
        $data['googlemap'] = $this->input->post('googlemap', true);
       
        $this->db->update('tbl_contact', $data);
    }
    
    function contact_info()
    {
      $result=$this->db->select('*')->from('tbl_contact')
                            ->where('contact_id', 1)
                            ->get()
                            ->row();
                            return $result;
                            
    }
    
}

