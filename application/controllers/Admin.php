<?php
class Admin extends CI_Controller{
    public function create(){
        $data['title']='Users';
        $this->load->helper('text');
        $data['catalogs']=$this->catalog_model->get_catalogs();

        for ($i=0; $i<sizeof($data['catalogs']);$i++){
            $data['catalogs'][$i]['image']=$this->image_model->get_images($data['catalogs'][$i]['id']);

            if (empty($data['catalogs'][$i]['image'])){
                $data['catalogs'][$i]['image'][0]['url']='noimage.png';
            }


        }

        $this->form_validation->set_rules('title','Title','required');
        $this->form_validation->set_rules('text','Text','required');
        $data['danger']='';
        if ($this->form_validation->run()===FALSE){
            $data['danger']="ოპერაცია ვერ შესრულდა წარმატებით";
            $data['success']="";
            $this->load->view('admin/layouts/header',$data);
            $this->load->view('admin/catalogs',$data);
            $this->load->view('layouts/footer');
        }
        else{
            $config['upload_path']   = base_url().'public/images';
            $config['allowed_types'] = 'gif|jpg|png';
            $this->load->library('upload', $config);

            if ( ! $this->upload->do_upload()) {
                $error = array('error' => $this->upload->display_errors());
                $this->load->view('pages/error', $error);
            }
else {
    $data = array('upload_data' => $this->upload->data());
    $this->catalog_model->create_catalog();
    $this->load->view('pages/success', $data);
}


        }




    }

    public function select(){
        $this->load->helper('text');
        $data['catalogs']=$this->catalog_model->get_catalogs();

        for ($i=0; $i<sizeof($data['catalogs']);$i++){
            $data['catalogs'][$i]['image']=$this->image_model->get_images($data['catalogs'][$i]['id']);

            if (empty($data['catalogs'][$i]['image'])){
                $data['catalogs'][$i]['image'][0]['url']='noimage.png';
            }


        }



        $data['title']='კატალოგი';


        $this->load->view('admin/layouts/header', $data);
        $this->load->view('admin/catalogs', $data);
        $this->load->view('admin/layouts/footer');




    }

    public function delete(){
        $this->catalog_model->delete_catalog();
        redirect('admin/catalog');
    }

}