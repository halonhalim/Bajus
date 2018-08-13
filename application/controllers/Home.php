<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

    public function __construct() {
        parent::__construct();
    }

    public function index() {
        $data['contact'] = $this->contact_model->index();
        $data['baners'] = $this->banners_model->slider_info();
        $data['about'] = $this->aboutus_model->index();
        $data['link'] = $this->link_model->index();
        $data['news'] = $this->news_model->index();
        $data['partner'] = $this->partner_model->partner_info();
        $data['membershipbenifits'] = $this->membershipbenifits_model->index();
        $data['adverstiment'] = $this->adverstiment_model->index();
        $this->load->view('header', $data);
        $this->load->view('index');
        $this->load->view('footer');
    }

    public function contact() {
        $data['contact'] = $this->contact_model->index();
        $this->load->view('header', $data);
        $this->load->view('contact-us');
        $this->load->view('footer');
    }

    public function contactEmail() {
        $message = $this->input->post('comments') . '<br/> Contact From <br/>' .
                $this->input->post('company_name') . '<br/>' .
                $this->input->post('phone_no');
        $this->input->post('address');

        $contact = $this->contact_model->index();

        $this->email->from($this->input->post('email'), $this->input->post('name'));
        $this->email->to($contact->email, $contact->company_name);
        $this->email->subject("Contact via website");
        $this->email->message($message);

        if ($this->email->send()) {
            $this->session->set_tempdata("msg", "<span style='color:green'> Successfully submitted. </span>", 5);
        } else {
            $this->session->set_tempdata("msg", "<span style='color:red'> Submission fail. Please try again ! </span>", 5);
        }
        redirect('home/contact');
    }

    public function about() {
        $data['about'] = $this->aboutus_model->index();
        $data['contact'] = $this->contact_model->index();
        $this->load->view('header', $data);
        $this->load->view('about');
        $this->load->view('footer');
    }

    public function membershipbenifits() {
        $data['membershipbenifits'] = $this->membershipbenifits_model->index();
        $data['contact'] = $this->contact_model->index();
        $this->load->view('header', $data);
        $this->load->view('membership');
        $this->load->view('footer');
    }
    
    public function comitee() {
         $data['contact'] = $this->contact_model->index();
        $data['comitee'] = $this->comitee_model->general_comitee();
        $this->load->view('header', $data);
        $this->load->view('central-com');
        $this->load->view('footer');
    }
     public function sub() {
         $data['contact'] = $this->contact_model->index();
        $data['sub'] = $this->comitee_model->sub_comitee();
        $this->load->view('header', $data);
        $this->load->view('sub-com');
        $this->load->view('footer');
    }
     public function district() {
         $data['contact'] = $this->contact_model->index();
        $data['sub'] = $this->comitee_model->district();
        $this->load->view('header', $data);
        $this->load->view('district-com');
        $this->load->view('footer');
    }
     public function office() {
         $data['contact'] = $this->contact_model->index();
        $data['sub'] = $this->comitee_model->office();
        $this->load->view('header', $data);
        $this->load->view('office-stuff');
        $this->load->view('footer');
    }
     public function ecmember() {
         $data['contact'] = $this->contact_model->index();
        $data['member'] = $this->member_model->ec_memmber();
        $this->load->view('header', $data);
        $this->load->view('ec-members');
        $this->load->view('footer');
    }
     public function general() {
         $data['contact'] = $this->contact_model->index();
        $data['general'] = $this->member_model->general();
        $this->load->view('header', $data);
        $this->load->view('ge-members');
        $this->load->view('footer');
    }
     public function districtmember() {
         $data['contact'] = $this->contact_model->index();
        $data['district'] = $this->member_model->district();
        $this->load->view('header', $data);
        $this->load->view('dis-members');
        $this->load->view('footer');
    }
    public function newmember() {
         $data['contact'] = $this->contact_model->index();
        $data['newmember'] = $this->member_model->newmember();
        $this->load->view('header', $data);
        $this->load->view('new-members');
        $this->load->view('footer');
    }
     public function report() {
         $data['contact'] = $this->contact_model->index();
        $data['report'] = $this->report_model->report_info();
        $this->load->view('header', $data);
        $this->load->view('annual-report');
        $this->load->view('footer');
    }
    public function govt() {
         $data['contact'] = $this->contact_model->index();
        $data['govt'] = $this->govt_model->govt_info();
        $this->load->view('header', $data);
        $this->load->view('govt-circular');
        $this->load->view('footer');
    }
    public function market() {
         $data['contact'] = $this->contact_model->index();
        $data['market'] = $this->market_model->market_info();
        $this->load->view('header', $data);
        $this->load->view('market-rates');
        $this->load->view('footer');
    }

     public function gold() {
         $data['contact'] = $this->contact_model->index();
        $data['gold'] = $this->gold_model->gold_info();
        $this->load->view('header', $data);
        $this->load->view('gold-price');
        $this->load->view('footer');
    }
     public function policy() {
         $data['contact'] = $this->contact_model->index();
        $data['policy'] = $this->policy_model->index();
        $this->load->view('header', $data);
        $this->load->view('Policy');
        $this->load->view('footer');
    }

    /* function  new_details($news_id)
      {
      $data['news']=$this->news_model->news_details_info_by_id($news_id);
      $this->load->view('header',$data);
      $this->load->view('news-detail');
      $this->load->view('footer');

      } */

    public function news_details($id = NULL) {
        $data['contact'] = $this->contact_model->index();
        $data['news_details'] = $this->news_model->get_by_id($id);
        $this->load->view('header', $data);
        $this->load->view('news-detail');
        $this->load->view('footer');
    }

    public function category_product($category_id) {
        $data = array();
        $data['all_products_published_info_by_category'] = $this->welcome_model->all_products_published_info_by_category($category_id);
        $data['all_featured_image'] = $this->welcome_model->all_featured_image();
        $data['main_content'] = $this->load->view('pages/category_product', $data, true);
        $this->load->view('master', $data);
    }

    public function checkout() {
        $data = array();
        $data['main_content'] = $this->load->view('pages/checkout', '', true);
        $this->load->view('master', $data);
    }

    public function product_details($product_id) {
        $data = array();
        $data['product_info'] = $this->welcome_model->select_product_by_product_id($product_id);
        $data['all_featured_image'] = $this->welcome_model->all_featured_image();
        $data['main_content'] = $this->load->view('pages/product_details', $data, true);
        $this->load->view('master', $data);
    }

}
