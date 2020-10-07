<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Menu extends CI_Controller
{
  public function __construct(){
  	parent::__construct();
    $this->load->model('Menu_model');
  }

  public function delete($id){
    $this->Menu_model->hapus($id);
    redirect('menu/submenu');
  }

  public function deleteMenu($id){
    $this->Menu_model->hapusMenu($id);
    redirect('menu/index');
  }

  public function delete_order($id){
    $this->Menu_model->hapus_order($id);
    redirect('menu/list_order');
  }

  public function editSubMenu($id)
  {
    $data['id'] = $id;
    $data['title'] = 'Edit Sub Menu';
    $data['user']=$this->db->get_where('user',['email'=>
    $this->session->userdata('email')])->row_array();
    $data['menu']= $this->db->get('user_menu')->result_array();


    $this->load->view('templates/header', $data);
    $this->load->view('templates/sidebar', $data);
    $this->load->view('templates/topbar', $data);
    $this->load->view('menu/edit', $data);
    $this->load->view('templates/footer');

  }

public function update(){

      $id=$this->input->post('id');
      $title=$this->input->post('title');
      $menu_id=$this->input->post('menu_id');
      $url=$this->input->post('url');
      $icon=$this->input->post('icon');
      $is_active=$this->input->post('is_active');
      $this->Menu_model->editSubMenu($id,$title,$menu_id,$url,$icon,$is_active);
      redirect('menu/submenu');

  }

  public function editMenu($id)
  {
    $data['id'] = $id;
    $data['title'] = 'Edit Menu';
    $data['user']=$this->db->get_where('user',['email'=>
    $this->session->userdata('email')])->row_array();
    $data['menu']= $this->db->get('user_menu')->result_array();


    $this->load->view('templates/header', $data);
    $this->load->view('templates/sidebar', $data);
    $this->load->view('templates/topbar', $data);
    $this->load->view('menu/editMenu', $data);
    $this->load->view('templates/footer');

  }

  public function updateMenu(){

        $id=$this->input->post('id');
        $title=$this->input->post('title');

        $this->Menu_model->editMenu($id,$title);
        redirect('menu/index');

  }

  public function list_order()
  {

    $data['user']=$this->db->get_where('user',['email'=>
    $this->session->userdata('email')])->row_array();
    $data['title'] = 'List of Order';
    $list['order']=  $this->Menu_model->getTransaksi();
    $data['menu']= $this->db->get('user_menu')->result_array();


    $this->load->view('templates/header', $data);
    $this->load->view('templates/sidebar', $data);
    $this->load->view('templates/topbar', $data);
    $this->load->view('menu/transaksi', $list);
    $this->load->view('templates/footer');

  }

  public function lunas($id){
        $UploadedFileName=$_FILES['bukti']['name'];
        $upload_directory = "uploads/"; //This is the folder which you created just now
        $TargetPath=$upload_directory.$UploadedFileName;

        $tanggal=$this->input->post('tanggal');
        $waktu_bayar=$tanggal;
        $status=$this->input->post('status');

        $this->Menu_model->lunas($id,$TargetPath,$waktu_bayar,$status);
        redirect('menu/list_order');

    }

  public function index()
  {
    $data['title'] = 'Menu Management';
    $data['user']=$this->db->get_where('user',['email'=>
    $this->session->userdata('email')])->row_array();

    $data['menu']= $this->db->get('user_menu')->result_array();

    $this->form_validation->set_rules('menu','Menu','required|trim');

    if($this->form_validation->run()==false){
      $this->load->view('templates/header', $data);
      $this->load->view('templates/sidebar', $data);
      $this->load->view('templates/topbar', $data);
      $this->load->view('menu/index', $data);
      $this->load->view('templates/footer');
    }
    else
    {
      $this->db->insert('user_menu',['menu'=>$this->input->post('menu')]);
      $this->session->set_flashdata('message','<div class="alert alert-success" role="alert">
       New Menu added!
      </div>');
      redirect('menu');
    }

  }

  public function submenu()
  {
    $data['title'] = 'SubMenu Management';
    $data['user']=$this->db->get_where('user',['email'=>
    $this->session->userdata('email')])->row_array();

    $this->load->model('Menu_model','menu');
    //'menu' dibuat untuk alias dari menu yang di = $this->menu->getSubMenu('');
    // jadi tidak perlu $this->Menu_model->getSubMenu('');
    $data['subMenu']=$this->menu->getSubMenu();
    $data['menu']=$this->db->get('user_menu')->result_array();

    $this->form_validation->set_rules('title','Title','required');
    $this->form_validation->set_rules('menu_id','Menu','required');
    $this->form_validation->set_rules('url','Url','required');
    $this->form_validation->set_rules('icon','Icon','required');


    if($this->form_validation->run()==false){
    $this->load->view('templates/header', $data);
    $this->load->view('templates/sidebar', $data);
    $this->load->view('templates/topbar', $data);
    $this->load->view('menu/submenu', $data);
    $this->load->view('templates/footer');
    }
    else
    {
    $data=[
      'title'=>$this->input->post('title'),
      'menu_id'=>$this->input->post('menu_id'),
      'url'=>$this->input->post('url'),
      'icon'=>$this->input->post('icon'),
      'is_active'=>$this->input->post('is_active')
    ];
    $this->db->insert('user_sub_menu',$data);
    $this->session->set_flashdata('message','<div class="alert alert-success" role="alert">
     New Sub Menu added!
    </div>');
    redirect('menu/submenu');

    }

  }





}
