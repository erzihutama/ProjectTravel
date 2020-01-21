<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dbs extends CI_Model{

function cek_login($table,$where){
  return $this->db->get_where($table,$where);

}

function getUserid($username){
  $dml = "SELECT id_user, nama from admin where username = '$username'";
  $query = $this->db->query($dml)->row();
  return $query;
}


function getUserIdagen($username){
  $dml = "SELECT id_agen, nama_agen from agen where username = '$username'";
  $query = $this->db->query($dml)->row();
  return $query;
}

function ubahpasswordUser($data,$table,$where,$value){
		$this->db->where($where,$value);
		$this->db->update($table,$data);
		if($this->db->affected_rows()>0){
			return true;
		}else{
			return false;
		}
	}

  function resetpasswordUser($data,$table,$where,$value){
		$this->db->where($where,$value);
		$this->db->update($table,$data);
		if($this->db->affected_rows()>0){
			return true;
		}else{
			return false;
		}
	}


}
