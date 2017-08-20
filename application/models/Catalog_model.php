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

    public function create_catalog()
    {


        $base_slug='catalog-';

        $data=array(
            'title'=>$this->input->post('title'),
            'text'=>$this->input->post('text'),
        );
        $this->db->insert('catalogs',$data);
        $id=$this->db->insert_id();
        $slug=$base_slug.$id;

        $this->db->where('id', $id);


        $this->db->update('catalogs', array('slug' => $slug));





        $image=array(
          'url'=>$this->input->post('image'),
            'catalog_id'=>$id
        );

        return $this->db->insert('images',$image);



     }


    public function delete_catalog(){
        $id=$this->input->post('catalog_id');
        $this->db->where('id',$id);
        return $this->db->delete('catalogs');
    }

}