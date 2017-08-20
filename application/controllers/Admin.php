<?php
class Admin extends CI_Controller{
    public function create(){
        $data['title']='Users';

        $this->load->view('admin/layouts/header',$data);
        $this->load->view('admin/catalogs',$data);
        $this->load->view('layouts/footer');

    }

    public function select(){

        $data['catalogs']=$this->catalog_model->get_catalogs();

        for ($i=0; $i<sizeof($data['catalogs']);$i++){
            $data['catalogs'][$i]['image']=$this->image_model->get_images($data['catalogs'][$i]['id']);

            if (empty($data['catalogs'][$i]['image'])){
                $data['catalogs'][$i]['image'][0]['url']='';
            }

        }

      $query=$data['catalogs'];
        return json_encode($query->result());

    }
}