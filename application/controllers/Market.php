
<?php

defined('BASEPATH') OR exit('Whow are You!');

Class Market extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model('Market_model');
    }

    public function add() {
        $data = array();
        $data['admin_main_content'] = $this->load->view('admin/market/add', '', true);
        $this->load->view('admin/admin_master', $data);
    }
     public function save() {
        $this->market_model->insert();
        $sdata = array();
        $sdata['massage'] = "Upload Market Rate Successfully !";
        $this->session->set_userdata($sdata);
        redirect('market/add');
    }
     public function manage_market() {
        $data = array();
        $data['all_market_info'] = $this->market_model->market_info();
        $data['admin_main_content'] = $this->load->view('admin/market/index', $data, true);
        $this->load->view('admin/admin_master', $data);
    }
     public function delete_market($id) {
        $this->market_model->delete_market_info($id);
        redirect('/manage-market');
    }
    

}
?>