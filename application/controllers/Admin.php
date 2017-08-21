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
            $this->session->set_flashdata('msg', 'ოპერაცია ვერ შესრულდა');
            redirect('admin/catalog');
        }
        else{


            $this->catalog_model->create_catalog();
            $this->session->set_flashdata('success', 'კატალოგი წარმატებით დაემატა;');
            redirect('admin/catalog', $data);


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

    public function upload(){
        $config['upload_path']='./public/images/';
        $config['allowed_types']='jpg|jpeg|gif|png';
        $this->load->library('upload',$config);

        if (!$this->upload->do_upload()){

            $this->session->set_flashdata('msg', 'სურათი ვერ დაემატა');
            redirect('admin/catalog');
        }
        else{

            $file_data=$this->upload->data();
            $data['image']=base_url().'public/images'.$file_data['file_name'];

            $this->image_model->image_upload($file_data['file_name'], $_POST['catalog_id']);
            $this->session->set_flashdata('success', 'სურათი წარმატებით დაემატა');
            redirect('admin/catalog');



        }
    }


    public function edit_catalog($id)
    {
        header('Content-Type: application/json; charset=utf-8');
        echo($this->catalog_model->get_catalogs($id));

    }

    public function edit_save_catalog(){
        $id=$_POST['catalog_id'];
         $this->catalog_model->edit_save_catalog_m($id);
        $this->session->set_flashdata('success', 'ოპერაცია შესრულდა წარმატებით');
         redirect('admin/catalog');
    }


}