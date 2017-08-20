<?php
class Pages extends CI_Controller{
    public function index(){
        $this->load->helper('text');
        $data['catalogs']=$this->catalog_model->get_catalogs();

        for ($i=0; $i<sizeof($data['catalogs']);$i++){
            $data['catalogs'][$i]['image']=$this->image_model->get_images($data['catalogs'][$i]['id']);

            if (empty($data['catalogs'][$i]['image'])){
                $data['catalogs'][$i]['image'][0]['url']='noimage.png';
            }


        }



        $data['title']='კატალოგი';

        $this->load->view('layouts/header', $data);
        $this->load->view('pages/catalogs', $data);
        $this->load->view('layouts/footer');
    }

    public function view( $slug = NULL){
        $data['catalog']=$this->catalog_model->get_catalogs($slug);

        if (empty($data['catalog'])){
            show_404();
        }

        $data['images']=$this->image_model->get_images($data['catalog']['id']);

        if (empty($data['images'])){
            $data['images'][0]['url']='noimage.png';
        }

        $data['title']=$data['catalog']['title'];
        $this->load->view('layouts/header', $data);
        $this->load->view('pages/catalog_detail', $data);
        $this->load->view('layouts/footer');
    }
}