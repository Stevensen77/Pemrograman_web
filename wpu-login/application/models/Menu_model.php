<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Menu_model extends CI_Model
{
  function __construct(){
	parent::__construct();
	$this->load->helper(array('form', 'url'));
  }



  public function getSubMenu()
  {
    $query="SELECT user_sub_menu.*,user_menu.menu
    FROM user_sub_menu JOIN user_menu
    ON user_sub_menu.menu_id = user_menu.id
    ";

    return $this->db->query($query)->result_array();
  }

  public function getTransaksi()
  {
    $query="SELECT * FROM order_pmhm ORDER BY waktu DESC
    ";
    return $this->db->query($query)->result_array();
  }

  public function getProduct()
  {
  $query="SELECT * FROM ecatalog";
  return $this->db->query($query)->result_array();
  }

  public function getProduct_specific($id)
  {
    $query="SELECT * FROM ecatalog WHERE id_produk=$id";
    return $this->db->query($query)->result_array();
  }


  public function getCategoric()
  {
    $query="SELECT * FROM kategori";
    return $this->db->query($query)->result_array();
  }

  public function getUnit()
  {
    $query="SELECT * FROM satuan";
    return $this->db->query($query)->result_array();
  }

  public function getRoleId()
  {
    $query="SELECT *
    FROM user_role
    ";
    return $this->db->query($query)->result_array();
  }

  public function insertCatalog($image,$nama,$kategori,$harga,$satuan,$stok,$deskripsi)
  {
    $query="INSERT INTO ecatalog (nama_produk,kategori,harga,satuan_beli,link_gambar,stok_produk,deskripsi)
    VALUES (?,?,?,?,?,?,?)";
    return $this->db->query($query,[$nama,$kategori,$harga,$satuan,$image,$stok,$deskripsi]);
  }


  public function getUser()
  {
    $query="SELECT user.*,user_role.role FROM user JOIN user_role ON user.role_id= user_role.id
    ";
    return $this->db->query($query)->result_array();
  }

    public function getUserSpecific($id_user)
    {
      $query="SELECT user.*,user_role.role FROM user join user_role ON user.role_id= user_role.id WHERE user.id=$id_user
      ";
      return $this->db->query($query)->result_array();

    }



    public function lunas($id,$image,$tanggal,$status)
    {
      $sql="UPDATE order_pmhm
      SET gambar='$image' ,tanggal_bayar = '$tanggal', status_pembayaran= '$status'
      WHERE id_order=$id";
      return $this->db->query($sql);
    }


    public function ubah_status($id,$status)
    {
          $sql="UPDATE order_pmhm
          SET status_pembayaran= '$status'
          WHERE id_order=$id";
          return $this->db->query($sql);
    }

    public function edit_catalog($id,$TargetPath,$nama,$kategori,$harga,$satuan,$stok,$deskripsi)
    {

      $sql="UPDATE ecatalog
      SET nama_produk='$nama' ,kategori = '$kategori', harga= $harga,
      satuan_beli='$satuan',link_gambar='$TargetPath',stok_produk=$stok,deskripsi='$deskripsi'
      WHERE id_produk=$id";

      return $this->db->query($sql);
    }

  public function editSubMenu($id,$title,$menu_id,$url,$icon,$is_active)
  {
    $sql="UPDATE user_sub_menu
    SET menu_id=$menu_id ,title = '$title', url= '$url',
    icon='$icon',is_active=$is_active
    WHERE id=?";
    return $this->db->query($sql,$id);
  }

  public function editProfile($user,$nama,$role_id,$email,$password,$is_active,$gambar)
  {
    $sql="UPDATE user
    SET name='$nama' ,email = '$email', is_active= $is_active,
    image='$gambar',role_id='$role_id',password='$password'
    WHERE email=?";
    return $this->db->query($sql,$user);
  }

  public function editProfileUser($id,$nama,$gambar,$email,$role_id,$password)
  {
  /*  $config['hostname'] = 'localhost';
    $config['username'] = 'root';
    $config['password'] = '';
    $config['database'] = 'pmhm';
    $config['dbdriver'] = 'mysqli';
    $config['dbprefix'] = '';
    $config['pconnect'] = FALSE;
    $config['db_debug'] = TRUE;
    $config['cache_on'] = FALSE;
    $config['cachedir'] = '';
    $config['char_set'] = 'utf8';
    $config['dbcollat'] = 'utf8_general_ci';

    $db2 = $this->load->database($config,TRUE);
    */

    $sql="UPDATE user
    SET name='$nama' ,email = '$email',role_id=$role_id,image= '$gambar',
    password='$password'
    WHERE id=?";

    return $this->db->query($sql,$id);
  }

  public function editMenu($id,$title)
  {
    $sql="UPDATE user_menu
    SET menu='$title'
    WHERE id=?";
    return $this->db->query($sql,$id);
  }


  public function hapus($id)
  {
  $sql="DELETE FROM user_sub_menu WHERE id=?";
  return $this->db->query($sql,$id);
  }

  public function hapus_order($id)
  {
  $sql="DELETE FROM order_pmhm WHERE id_order=?";
  return $this->db->query($sql,$id);
  }


  public function hapusMenu($id)
  {
  $sql="DELETE FROM user_menu WHERE id=?";
  return $this->db->query($sql,$id);
  }

  public function hapus_catalog($id)
  {
  $sql="DELETE FROM ecatalog WHERE id_produk=?";
  return $this->db->query($sql,$id);
  }

  public function hapus_user($id)
  {
  $sql="DELETE FROM user WHERE id=?";
  return $this->db->query($sql,$id);
  }

  public function grafik_penjualan()
  {
    $query=$this->db->query("SELECT waktu,count(no_order) AS total_order FROM order_pmhm GROUP BY waktu DESC");
    if($query->num_rows()>0){
      foreach($query->result() as $data){
          $hasil[]=$data;
      }
      return $hasil;
    }
  }

  public function upload_payment($gambar,$no_order,$status_pembayaran)
  {
    $sql="UPDATE order_pmhm
    SET bukti_bayar='$gambar' ,status_pembayaran = '$status_pembayaran'
    WHERE no_order=?";
    return $this->db->query($sql,$no_order);
  }

  public function get_count_order_today()
  {
    date_default_timezone_set('Asia/Jakarta');
    $today=date('Y-m-d');

    $query="SELECT COUNT(*) FROM order_pmhm WHERE tanggal_pesan='$today' ";
    return $this->db->query($query)->row_array();
  }





}

 ?>
