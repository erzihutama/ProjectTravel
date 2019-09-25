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

  function getpaket9(){
    $dml ="SELECT*FROM `dbdreamworld`.`paket` WHERE id_paket = 1;";
    $query =$this->db->query($dml)->row();
     return$query;
}

function getpaket10(){
  $dml ="SELECT*FROM `dbdreamworld`.`paket` WHERE id_paket = 2;";
  $query =$this->db->query($dml)->row();
   return$query;
}
function getpaket11(){
  $dml ="SELECT*FROM `dbdreamworld`.`paket` WHERE id_paket = 3;";
  $query =$this->db->query($dml)->row();
   return$query;
}
function getpaket12(){
  $dml ="SELECT*FROM `dbdreamworld`.`paket` WHERE id_paket = 4;";
  $query =$this->db->query($dml)->row();
   return$query;
}

      function getpaket(){
        $dml ="SELECT*FROM `dbdreamworld`.`paket`;";
        $query =$this->db->query($dml)->row();
         return$query;
    }

          function getpaketidx(){
            $dml ="SELECT*FROM `dbdreamworld`.`paket` limit 3;";
            $query =$this->db->query($dml)->result();
             return$query;
        }


    function getperusahaan(){
      $dml ="SELECT*FROM `dbdreamworld`.`profil_alamat`;";
      $query =$this->db->query($dml)->result();
       return$query;
    }

    function getinrenerary(){
      $dml ="  SELECT
            `hari`
            , `keterangan`
        FROM
            `dbwordl`.`intenary`;";
      $query =$this->db->query($dml)->result();
       return$query;
  }

  function getintenerary10(){
    $dml ="  SELECT
          `hari`
          , `keterangan`
      FROM
          `dbwordl`.`intenary` where id_paket = 2;";
    $query =$this->db->query($dml)->result();
     return$query;
}



        function gethotel(){
          $dml ="SELECT hotel.namahotel,kota_hotel.nama_kota,hotel.deskripsi FROM hotel JOIN kota_hotel WHERE hotel.id_hotel = kota_hotel.id_kota limit 15;";
          $query =$this->db->query($dml)->result();
           return$query;
      }

  // get image services
            //
            // function get_imgser(){
            // $dml="SELECT servicegambar from profilweb_config";
            // $query = $this->db->query($dml);
            // return $query->row();
            //       }




function getmaps(){
$dml = "SELECT`maps`FROM`dbdreamworld`.`profil_alamat`;";
$query =$this->db->query($dml)->row();
return $query;
}

function getwhychoose(){
$dml =" SELECT
  `whychoose_tagline`,
  `service_tagline`
FROM
    `dbdreamworld`.`profilweb_config` LIMIT 1;";
    $query =$this->db->query($dml)->row();
     return$query;


}

function getdatachose(){
$dml =" SELECT
    `whychoose_deskripsi`
    , `whychoose_judul`,
    `service_deskripsi`
    , `service_judul`
FROM
    `dbdreamworld`.`profilweb_config` LIMIT 4;";
    $query =$this->db->query($dml)->result();
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
      function getvisimisi(){
        $dml = "SELECT`visi`,`misi`FROM`dbdreamworld`.`profilweb`;";
           $query =$this->db->query($dml)->row();
            return$query;
      }

      function getconfig(){
        $dml = "SELECT`service_judul`, `service_deskripsi`,`service_tagline`,`whychoose_judul`,`whychoose_deskripsi`,`whychoose_deskripsi`FROM`dbdreamworld`.`profilweb_config`";
           $query =$this->db->query($dml)->row();
            return$query;
      }


}
