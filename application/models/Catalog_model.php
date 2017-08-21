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
        $this->db->where('catalogs.slug like "'.$slug.'"');
        $this->db->or_where('catalogs.id = "'.$slug.'"');
        $query = $this->db->get('catalogs');
        $catalog_result = $query->first_row('array');
        $this->db->where('images.catalog_id = "'.$catalog_result['id'].'"');

        $result = array_merge($catalog_result, ['images' => $this->db->get('images')->result_array('array') ]);
        return json_encode($result);
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


        return $this->db->update('catalogs', array('slug' => $slug));





       /* $image=array(
          'url'=>$this->input->post('image'),
            'catalog_id'=>$id
        ); $this->db->insert('images',$image);*/




     }


    public function delete_catalog(){
        $id=$this->input->post('catalog_id');
        $this->db->where('id',$id);
        return $this->db->delete('catalogs');
    }
    public function edit_save_catalog_m($id){

        $title=$this->input->post('title');
        $text=$this->input->post('text');

        $data=array(
            'title'=>$title,
            'text'=>$text

        );

        $this->db->where('id',$id);
        $this->db->update('catalogs', $data);

        $images= $this->db->get('images')->num_rows();
        if (isset($_POST['images']) && is_array($_POST['images'])){

            foreach ($_POST['images'] as $key => $value){
              $this->db->where('id',$key);
              $this->db->delete('images');
            }
        }
        return $images;




    }

}