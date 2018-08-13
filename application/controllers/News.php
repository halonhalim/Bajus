<?php

defined('BASEPATH') OR exit('Whow are You!');

Class News extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model('News_model');
    }
    public function add() {    
        $data = array();
        $data['admin_main_content'] = $this->load->view('admin/news/add', '', true);
        $this->load->view('admin/admin_master', $data);
    }
    
     public function save_news() {
        $this->news_model->insert();
        $sdata = array();
        $sdata['massage'] = "Save News Information Successfully !";
        $this->session->set_userdata($sdata);
        redirect('news/add');
    }
    public function manage_news() {
        $data = array();
        $data['all_news_info'] = $this->news_model->all_news_info();
        $data['admin_main_content'] = $this->load->view('admin/news/index', $data, true);
        $this->load->view('admin/admin_master', $data);
    }
    
     public function delete_news($news_id) {
        $this->news_model->delete_news_info($news_id);
        redirect('/manage-news');
    }
     public function edit_news($news_id) {
        $data = array();
        $data['news_info'] = $this->news_model->select_news_by_id($news_id);
        $data['admin_main_content'] = $this->load->view('admin/news/edit', $data, true);
        $this->load->view('admin/admin_master', $data);
    }
    
     public function update_news() {
        $this->news_model->update_news_info();
        redirect('/manage-news');
    }
}
?>