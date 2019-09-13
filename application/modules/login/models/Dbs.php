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
}
