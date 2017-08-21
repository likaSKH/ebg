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

    public function image_upload($url, $catalog_id){
        $data=array(
            'catalog_id'=>$catalog_id,
            'url'=>$url,
        );

        return $this->db->insert('images', $data);

    }
}