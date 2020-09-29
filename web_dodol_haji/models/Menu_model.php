<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Menu_model extends CI_Model
{
  function __construct(){
	parent::__construct();
	$this->load->helper(array('form', 'url'));
  }

  public function dapatkan_keranjang()
   {
     $query="SELECT * FROM keranjang";
      return $this->db->query($query)->result_array();

   }

  public function update_jumlah($id_keranjang,$jumlah)
  {
        $sql="UPDATE keranjang
        SET jumlah= $jumlah
        WHERE id_keranjang=$id_keranjang";
        return $this->db->query($sql);
  }

  public function delete_keranjang($id_keranjang)
  {
        $sql="DELETE FROM keranjang
        WHERE id_keranjang=$id_keranjang";
        return $this->db->query($sql);
  }

  public function dapatkan_jumlah_item()
  {
        $sql="SELECT COUNT(*) FROM keranjang";
        return $this->db->query($sql)->row_array();
  }




}

 ?>
