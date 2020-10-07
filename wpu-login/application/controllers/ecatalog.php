<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ecatalog extends CI_Controller
{
  public function __construct(){
  	parent::__construct();
    $this->load->model('Menu_model');
    $this->load->helper(array('form', 'url'));
  }




  public function index()
  {
    $data['title'] = 'Menu e-Catalog';
    $data['user']=$this->db->get_where('user',['email'=>
    $this->session->userdata('email')])->row_array();
    $list['product']=  $this->Menu_model->getProduct();

    $list['categoric']= $this->Menu_model->getCategoric();
    $data['jumlah_order_hari_ini']= $this->Menu_model->get_count_order_today();



      $this->load->view('templates/header', $data);
      $this->load->view('templates/sidebar', $data);
      $this->load->view('templates/topbar', $data);
      $this->load->view('menu/catalog', $list);
      $this->load->view('templates/footer');


  }

  public function chart()
  {
    $data['title'] = 'Chart of Sales';
    $data['user']=$this->db->get_where('user',['email'=>
    $this->session->userdata('email')])->row_array();

    $list['grafik']= $this->Menu_model->grafik_penjualan();
    $data['jumlah_order_hari_ini']= $this->Menu_model->get_count_order_today();


      $this->load->view('templates/header', $data);
      $this->load->view('templates/sidebar', $data);
      $this->load->view('templates/topbar', $data);
      $this->load->view('menu/grafik', $list);
      $this->load->view('templates/footer');


  }

  public function insert()
  {
    $data['title'] = 'Menu e-Catalog';
    $data['user']=$this->db->get_where('user',['email'=>
    $this->session->userdata('email')])->row_array();
    $list['product']=  $this->Menu_model->getProduct();
    $list['categoric']= $this->Menu_model->getCategoric();
    $data['jumlah_order_hari_ini']= $this->Menu_model->get_count_order_today();


    $this->form_validation->set_rules('nama','Nama','required');
    $this->form_validation->set_rules('kategori','Kategori','required');
    $this->form_validation->set_rules('harga','Harga','required');
    $this->form_validation->set_rules('stok','Stok','required');
    $this->form_validation->set_rules('satuan','Satuan','required');
    $this->form_validation->set_rules('deskripsi','Deskripsi','required');
  //  $this->form_validation->set_rules('gambar','Gambar','required');


    if($this->form_validation->run()==false){

            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('menu/catalog', $list);
            $this->load->view('templates/footer');
    }
    else
    {
    //  $image = $_FILES['userfile']['tmp_name'];
     $UploadedFileName=$_FILES['userfile']['name'];
     $upload_directory = "uploads/"; //This is the folder which you created just now
     $TargetPath=$upload_directory.$UploadedFileName;

    $nama=$this->input->post('nama');
    $kategori=$this->input->post('kategori');
    $harga=$this->input->post('harga');
    $satuan=$this->input->post('satuan');
    $stok=$this->input->post('stok');
    $deskripsi=$this->input->post('deskripsi');


    $this->Menu_model->insertCatalog($TargetPath,$nama,$kategori,$harga,$satuan,$stok,$deskripsi);
    $this->session->set_flashdata('message','<div class="alert alert-success" role="alert">
     New Product of e-Catalog added!
    </div>');
    redirect('ecatalog');


    }
  }

  public function delete_catalog($id){
    $this->Menu_model->hapus_catalog($id);
    redirect('ecatalog');
  }



public function edit_catalog($id){

  $data['id'] = $id;
  $data['title'] = 'Edit Product eCatalog';
  $data['user']=$this->db->get_where('user',['email'=>
  $this->session->userdata('email')])->row_array();
  $data['jumlah_order_hari_ini']= $this->Menu_model->get_count_order_today();
  $list['product_specific']=  $this->Menu_model->getProduct_specific($id);
  $list['categoric']= $this->Menu_model->getCategoric();
  $list['unit']= $this->Menu_model->getUnit();

  $this->form_validation->set_rules('nama','Nama','required');
  $this->form_validation->set_rules('kategori','Kategori','required');
  $this->form_validation->set_rules('harga','Harga','required');
  $this->form_validation->set_rules('stok','Stok','required');
  $this->form_validation->set_rules('satuan','Satuan','required');
  $this->form_validation->set_rules('deskripsi','Deskripsi','required');
//  $this->form_validation->set_rules('gambar','Gambar','required');

      if($this->form_validation->run()==false)
      {

                    $this->load->view('templates/header', $data);
                    $this->load->view('templates/sidebar', $data);
                    $this->load->view('templates/topbar', $data);
                    $this->load->view('menu/edit_catalog', $list);
                    $this->load->view('templates/footer');
      }
      else
      {

      $UploadedFileName=$_FILES['gambar']['name'];
      $upload_directory = "uploads/";
      $TargetPath=$upload_directory.$UploadedFileName;

      $id=$this->input->post('id');
      $nama=$this->input->post('nama');
      $kategori=$this->input->post('kategori');
      $harga=$this->input->post('harga');
      $satuan=$this->input->post('satuan');
      $stok=$this->input->post('stok');
      $deskripsi=$this->input->post('deskripsi');
      $this->Menu_model->edit_catalog($id,$TargetPath,$nama,$kategori,$harga,$satuan,$stok,$deskripsi);

      $this->session->set_flashdata('message','<div class="alert alert-success" role="alert">
       Update Product is successfully!
      </div>');

      redirect('ecatalog');
    }

  }



}

?>
