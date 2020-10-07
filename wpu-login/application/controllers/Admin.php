<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller
{
  public function __construct(){
  	parent::__construct();
    $this->load->model('Menu_model');
  }

  public function index()
  {
    $data['title'] = 'Dashboard';
    $data['user']=$this->db->get_where('user',['email'=>
    $this->session->userdata('email')])->row_array();
    $data['jumlah_order_hari_ini']= $this->Menu_model->get_count_order_today();


    $this->load->view('templates/header', $data);
    $this->load->view('templates/sidebar', $data);
    $this->load->view('templates/topbar', $data);
    $this->load->view('admin/index', $data);
    $this->load->view('templates/footer');

  }

  public function management_user_ecatalog()
  {
    $data['title'] = 'Account User Management';
    $data['user']=$this->db->get_where('user',['email'=>
    $this->session->userdata('email')])->row_array();
      $data['jumlah_order_hari_ini']= $this->Menu_model->get_count_order_today();

    $data['user_ecatalog']=$this->Menu_model->getUser();
    $data['role_id']=$this->Menu_model->getRoleId();

    $this->load->view('templates/header', $data);
    $this->load->view('templates/sidebar', $data);
    $this->load->view('templates/topbar', $data);
    $this->load->view('admin/manage_user_ecatalog', $data);
    $this->load->view('templates/footer');

    }



  public function add_new_user()
    	{
    		$this->form_validation->set_rules('nama','Nama','required|trim');
    		$this->form_validation->set_rules('email','Email','required|trim|valid_email|is_unique[user.email]',
    		[
    		'is_unique'=>'This email has already registered!'
    		]
    		);
    		$this->form_validation->set_rules('password1','Password','required|trim|min_length[3]|matches[password2]',[
    			'matches'=>'password dont match!',
    			'min_length'=>'password too short'
    			]);
    		$this->form_validation->set_rules('password2','Password','required|trim|matches[password1]');


    		if ($this->form_validation->run()==false) {
          $data['title'] = 'Account User Management';
          $data['user']=$this->db->get_where('user',['email'=>
          $this->session->userdata('email')])->row_array();
          $data['jumlah_order_hari_ini']= $this->Menu_model->get_count_order_today();

          $data['user_ecatalog']=$this->Menu_model->getUser();
          $data['role_id']=$this->Menu_model->getRoleId();


          $this->load->view('templates/header', $data);
          $this->load->view('templates/sidebar', $data);
          $this->load->view('templates/topbar', $data);
          $this->load->view('admin/manage_user_ecatalog', $data);
          $this->load->view('templates/footer');
    		}
    		else{
          date_default_timezone_set('Asia/Jakarta');
          $gambar=$_FILES['gambar']['name'];
    			$data=[

    				'name'=>htmlspecialchars($this->input->post('nama',true)),
    				'email'=>htmlspecialchars($this->input->post('email',true)),
            'image'=>$gambar,
    				'password'=>password_hash($this->input->post('password1'),PASSWORD_DEFAULT),
            'role_id'=>htmlspecialchars($this->input->post('role_id',true)),
    				'is_active'=>1,
    				//'date_created'=>time(),
    				'date_created'=>date('Y-m-d H:i:s')

    			];


    			$this->db->insert('user',$data);
    			$this->session->set_flashdata('message','<div class="alert alert-success" role="alert">
    			 Congratulation! Your account has been created. Please login
    				</div>');
    			redirect('admin/management_user_ecatalog');

    		}

    	}

public function edit_user_ecatalog($id_user)
      {
        $data['title']='Edit User Account';
        $data['user']=$this->db->get_where('user',['email'=>
        $this->session->userdata('email')])->row_array();
        $list['user_data']= $this->Menu_model->getUserSpecific($id_user);
        $list['role_id']=$this->Menu_model->getRoleId();
        $data['jumlah_order_hari_ini']= $this->Menu_model->get_count_order_today();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('admin/edit_user', $list);
        $this->load->view('templates/footer');

      }

public function delete_user($id){
        $this->Menu_model->hapus_user($id);
        redirect('admin/management_user_ecatalog');
      }

public function update_user($id){

          $this->form_validation->set_rules('password1','Password','required|trim|min_length[3]|matches[password2]',[
          'matches'=>'password dont match!',
          'min_length'=>'password too short'
          ]);
          $this->form_validation->set_rules('password2','Password','required|trim|matches[password1]');
          $this->form_validation->set_rules('role_id','Role_id','required');

        if ($this->form_validation->run()==false) {
          $data['title']='Edit User Account';
          $data['user']=$this->db->get_where('user',['email'=>
          $this->session->userdata('email')])->row_array();
          $list['user_data']= $this->Menu_model->getUserSpecific($id_user);
          $data['jumlah_order_hari_ini']= $this->Menu_model->get_count_order_today();

          $this->load->view('templates/header', $data);
          $this->load->view('templates/sidebar', $data);
          $this->load->view('templates/topbar', $data);
          $this->load->view('admin/edit_user', $list);
          $this->load->view('templates/footer');
        }
        else{
            $gambar=$_FILES['gambar']['name'];
            $nama=$this->input->post('nama');
            $email=$this->input->post('email');
            $role_id=$this->input->post('role_id');
            $password=password_hash($this->input->post('password1'),PASSWORD_DEFAULT);

            $this->Menu_model->editProfileUser($id,$nama,$gambar,$email,$role_id,$password);

            redirect('admin/management_user_ecatalog');
          }
        }

  }
