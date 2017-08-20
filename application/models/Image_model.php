<?php
class Image_model extends CI_Model{
    public function __construct()
    {
        $this->load->database();
    }

    public function get_images($id =FALSE){
        if ($id===FALSE){

            return '';
        }
        $object=$this->db->select('*')->where('catalog_id',$id)->get('images')->result();
        $query = json_decode(json_encode($object), True);
        return $query;
    }
}