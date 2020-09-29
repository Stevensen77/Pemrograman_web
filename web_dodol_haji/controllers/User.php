<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller
{

  public function __construct(){
  	parent::__construct();


    $this->load->model('Menu_model');

    if(empty($this->session->userdata('email')))
         {
         redirect(site_url(),'refresh');
         }
  }


  public function index()
  {

    $data['jumlah_keranjang']=$this->Menu_model->dapatkan_jumlah_item();


    $this->load->view('templates/header_catalog', $data);
    $this->load->view('user/halaman_utama', $data);
    $this->load->view('templates/footer_catalog');
  }

  public function produk()
  {
      $data['jumlah_keranjang']=$this->Menu_model->dapatkan_jumlah_item();


    $this->load->view('templates/header_catalog', $data);
    $this->load->view('user/produk');
    $this->load->view('templates/footer_catalog');

  }


  public function keranjang()
  {

  $data['jumlah_keranjang']=$this->Menu_model->dapatkan_jumlah_item();
    $data['keranjang']=$this->Menu_model->dapatkan_keranjang();

    $this->load->view('templates/header_catalog',$data);
    $this->load->view('user/keranjang',$data);
    $this->load->view('templates/footer_catalog');

  }

  public function masukkan_ke_keranjang()
  {
    $query_get_user=$this->db->get_where('user',['email'=>
    $this->session->userdata('email')]);
    //$list['data_produk']= $this->Menu_model->dapatkan_detail_produk($id_produk);
    $id_produk=$this->input->post('id_produk');
    $query_dapatkan_detail_produk= $this->db->get_where('produk', array('id' => $id_produk));

    $jumlah=$this->input->post('jumlah');
    $email=	$this->session->userdata('email');

    foreach ($query_dapatkan_detail_produk->result() as $row)
    {
         $data=[
        'id_produk'=>$row->id,
        'nama_produk'=>$row->nama_produk,
        'jumlah'=>$jumlah,
        'harga'=>$row->harga,
        'link_gambar'=>$row->link_gambar,
        'email_user'=>$email
        ];
    }

    $this->db->insert('keranjang',$data);

    $data['keranjang']=$this->Menu_model->dapatkan_keranjang();

     redirect('user/keranjang');


  }


  public function contact()
    {
        $data['jumlah_keranjang']=$this->Menu_model->dapatkan_jumlah_item();


        $this->load->view('templates/header_catalog',$data);
        $this->load->view('user/contact');
        $this->load->view('templates/footer_catalog');

    }


    /*  public function update_jumlah()
      {
          $jumlah=$this->input->post('jumlah');
          $id_keranjang=$this->input->post('id_keranjang');

          $this->Menu_model->update_jumlah($id_keranjang,$jumlah);
          redirect('user/keranjang');

      }
*/
public function delete_keranjang()
 {

     $id_keranjang=$this->input->post('id_keranjang');

     $this->Menu_model->delete_keranjang($id_keranjang);
     redirect('user/keranjang');

 }




}
