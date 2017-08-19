<?php
class Pages extends CI_Controller{
    public function index(){
        $this->load->helper('text');
        $data['catalogs']=$this->catalog_model->get_catalogs();
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

        $data['title']=$data['catalog']['title'];

        $this->load->view('layouts/header', $data);
        $this->load->view('pages/catalog_detail', $data);
        $this->load->view('layouts/footer');
    }
}