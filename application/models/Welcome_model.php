<?php


class Welcome_model extends CI_Model {
    public function all_published_products_info(){
         $this->db->select('*');
        $this->db->from('tbl_products');
        $this->db->where('publication_status',1);
        $query_result = $this->db->get();
        $products_info = $query_result->result();
        return $products_info;
    }
    public function all_featured_image(){
         $this->db->select('*');
        $this->db->from('tbl_products');
        $this->db->where('is_featured',1);
        $query_result = $this->db->get();
        $all_featured = $query_result->result();
        return $all_featured;
        
    }
     public function all_products_published_info_by_category($category_id){
        
         $this->db->select('*');
        $this->db->from('tbl_products');
        $this->db->where('publication_status',1);
        $this->db->where('category_id',$category_id);
        $query_result = $this->db->get();
        $products_info = $query_result->result();
        return $products_info;
    }
    public function select_product_by_product_id($product_id){
        $this->db->select('tbl_products.*,tbl_manufacture.manufacture_name');
        $this->db->from('tbl_products');
        $this->db->join('tbl_manufacture', 'tbl_manufacture.manufacture_id= tbl_products.manufacture_id');
        $this->db->where('Product_id', $product_id);
        $query_result = $this->db->get();
        $product_info = $query_result->row();    
        return $product_info;
    }
}
