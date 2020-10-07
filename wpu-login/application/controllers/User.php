<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller
{

  public function __construct(){
  	parent::__construct();
    $this->load->model('Menu_model');
  }
  public function index()
  {
    $data['title']='My Profile';
    $data['user']=$this->db->get_where('user',['email'=>
    $this->session->userdata('email')])->row_array();
    $data['jumlah_order_hari_ini']= $this->Menu_model->get_count_order_today();


    $this->load->view('templates/header', $data);
    $this->load->view('templates/sidebar', $data);
    $this->load->view('templates/topbar', $data);
    $this->load->view('user/index', $data);
    $this->load->view('templates/footer');

  }

  public function edit()
  {
    $data['title']='Edit Menu';
    $data['user']=$this->db->get_where('user',['email'=>
    $this->session->userdata('email')])->row_array();
    $list['role_id']= $this->Menu_model->getRoleId();
    $data['jumlah_order_hari_ini']= $this->Menu_model->get_count_order_today();


    $this->load->view('templates/header', $data);
    $this->load->view('templates/sidebar', $data);
    $this->load->view('templates/topbar', $data);
    $this->load->view('user/edit', $list);
    $this->load->view('templates/footer');

  }

  public function update(){

      $this->form_validation->set_rules('password1','Password','required|trim|min_length[3]|matches[password2]',[
      'matches'=>'password dont match!',
      'min_length'=>'password too short'
      ]);
      $this->form_validation->set_rules('password2','Password','required|trim|matches[password1]');

    if ($this->form_validation->run()==false) {
      $data['title']='Edit Menu';
      $data['user']=$this->db->get_where('user',['email'=>
      $this->session->userdata('email')])->row_array();
      $list['role_id']= $this->Menu_model->getRoleId();
      $data['jumlah_order_hari_ini']= $this->Menu_model->get_count_order_today();


      $this->load->view('templates/header', $data);
      $this->load->view('templates/sidebar', $data);
      $this->load->view('templates/topbar', $data);
      $this->load->view('user/edit', $list);
      $this->load->view('templates/footer');
    }
    else{
        $gambar=$_FILES['gambar']['name'];
        $user=$this->session->userdata('email');
        $nama=$this->input->post('nama');
        $role_id=$this->input->post('role_id');
        $email=$this->input->post('email');
        $password=password_hash($this->input->post('password1'),PASSWORD_DEFAULT);
        $is_active=1;
        $this->Menu_model->editProfile($user,$nama,$role_id,$email,$password,$is_active,$gambar);
        redirect('user/edit');
      }
    }

    public function get_payment_page()
    {
      $data['title']='Upload Proof of Payment';
      $data['user']=$this->db->get_where('user',['email'=>
      $this->session->userdata('email')])->row_array();
      $data['jumlah_order_hari_ini']= $this->Menu_model->get_count_order_today();



      $this->load->view('templates/header', $data);
      $this->load->view('templates/sidebar', $data);
      $this->load->view('templates/topbar', $data);
      $this->load->view('user/proof_payment', $data);
      $this->load->view('templates/footer');

    }

    public function upload_payment()
    {
      $this->form_validation->set_rules('no_order','No_order','required');


      if ($this->form_validation->run()==false) {
        $data['title']='Upload Proof of Payment';
        $data['user']=$this->db->get_where('user',['email'=>
        $this->session->userdata('email')])->row_array();
        $data['jumlah_order_hari_ini']= $this->Menu_model->get_count_order_today();



        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('user/proof_payment', $data);
        $this->load->view('templates/footer');
      }
      else{
          $nama_gambar=$_FILES['gambar']['name'];
          $no_order=$this->input->post('no_order');
          $status_pembayaran="Sudah Bayar(Lunas?)";
          $upload_directory = "uploads/"; //This is the folder which you created just now
          $gambar=$upload_directory.$nama_gambar;


          $this->Menu_model->upload_payment($gambar,$no_order,$status_pembayaran);
          $this->session->set_flashdata('message','<div class="alert alert-success" role="alert">
    			 Congratulation! Your Proof of Payment has been uploaded. Thank You!
    				</div>');
          redirect('user/proof_payment');
        }
      }



}
