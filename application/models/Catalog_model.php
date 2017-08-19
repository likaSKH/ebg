<?php
class Catalog_model extends CI_Model{
    public function __construct()
    {
        $this->load->database();
    }

    public function get_catalogs($slug =FALSE){
        if ($slug===FALSE){
            $query=$this->db->get('catalogs');
            return $query->result_array();
        }
        $query=$this->db->get_where('catalogs', array('slug'=>$slug));
        return $query->row_array();
    }
}