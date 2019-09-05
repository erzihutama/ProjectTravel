<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dbs extends CI_Model{

  public function __construct()
  {
    parent::__construct();
    //Codeigniter : Write Less Do More
  }

 //  function getdata($from,$where=null,$limit=9,$offset=0){
 //    if($where!=null){
 //      $this->db->where($where);
 //    }
 //    $this->db->limit($limit, $offset);
 //    $db=$this->db->get($from);
 //    return $db;
 //  }
 //
 //  function insert($data,$table){
 //   $insert = $this->db->insert($table, $data);
 //   if ($this->db->affected_rows()>0) {
 //     return true;
 //     }else{
 //     return false;
 //     }
 // }
 // function update($data,$table,$where){
 //    $this->db->where($where);
 //    $db=$this->db->update($table,$data);
 //    if ($this->db->affected_rows()>0) {
 //      return true;
 //      }else{
 //      return false;
 //      }
 //  }
 //
 //    function budaya(){
 //      $dml = "SELECT * FROM t_tempat_budaya WHERE `penilaian` = '8'";
 //      $query = $this->db->query($dml)->result();
 //      return $query;
 //    }

    function gettagline(){
      $dml ="SELECT`taglineweb1`, `taglineweb2`, `taglineweb3`FROM`dbdreamworld`.`profilweb`;";
      $query =$this->db->query($dml)->row();
       return$query;
  }

function getwhychoose(){
$dml =" SELECT
    `whychoose_deskripsi`
    , `whychoose_judul`
    , `whychoose_tagline`
FROM
    `dbdreamworld`.`profilweb_config` LIMIT 4;";
    $query =$this->db->query($dml)->row();
     return$query;


}
function getprofil(){
$dml = " SELECT * From `dbdreamworld`.`profilweb`;";
$query =$this->db->query($dml)->result();
return $query;
}
function getalamat(){
$dml = " SELECT * From `dbdreamworld`.`profil_alamat`LIMIT 3;";
$query =$this->db->query($dml)->result();
return $query;
}
function gettelepon(){
$dml = " SELECT `telepon_perusahaan` From `dbdreamworld`.`profil_alamat`;";
$query =$this->db->query($dml)->row();
return $query;
}

function gettaglineimg(){
    $dml ="SELECT`taglineimage1`,`taglineimage2`,`taglineimage3`FROM`dbdreamworld`.`profilweb`;";
    $query =$this->db->query($dml)->row();
    return $query;

}
      function getdeskperusahaan(){
          $dml = "SELECT`judul_perusahaan`,`deskripsi_perusahaan`FROM`dbdreamworld`.`profilweb`;";
             $query =$this->db->query($dml)->row();
              return$query;

      }


}
