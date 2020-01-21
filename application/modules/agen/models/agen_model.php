<?php

    if (!defined('BASEPATH'))
        exit('No direct script access allowed');

    class agen_model extends CI_Model
    {
      function get_mekah(){
        $dml = "SELECT * FROM hotel where id_kota='1'";
        $query = $this->db->query($dml);
        return $query->result();
      }
      function get_madinah(){
        $dml = "SELECT * FROM hotel where id_kota='2'";
        $query = $this->db->query($dml);
        return $query->result();
      }
      function get_jeddah(){
        $dml = "SELECT * FROM hotel where id_kota='3'";
        $query = $this->db->query($dml);
        return $query->result();
      }
      function get_paket(){
        $dml = "SELECT * FROM paket";
        $query = $this->db->query($dml);
        return $query->result();
      }

      // function get_harga_mekah($tipe_kamar){
      //   $dml = "SELECT * FROM subtipehotel where id_kota = '1' and nama_subtipe = '$tipe_kamar'";
      //   $query = $this->db->query($dml)->row();
      //   return $query;
      // }
      // function get_harga_madinah($tipe_kamar){
      //   $dml = "SELECT * FROM subtipehotel where id_kota = '2' and nama_subtipe = '$tipe_kamar'";
      //   $query = $this->db->query($dml)->row();
      //   return $query;
      // }
      // function get_harga_jeddah($tipe_kamar){
      //   $dml = "SELECT * FROM subtipehotel where id_kota = '3' and nama_subtipe = '$tipe_kamar'";
      //   $query = $this->db->query($dml)->row();
      //   return $query;
      // }

            function getkota(){
              $dml = "SELECT * FROM hotel";
              $query = $this->db->query($dml);
              return $query->row();
            }
              function gethoteljedah(){
                $dml="SELECT
    `hotel`.`namahotel`
    , `hotel`.`id_hotel`
    , `hotel`.`reguler_quad`
    , `hotel`.`requler_triple`
    , `hotel`.`reguler_double`
    , `hotel`.`high_quad`
    , `hotel`.`high_triple`
    , `hotel`.`high_double`
    , `kota_hotel`.`nama_kota`
FROM
    `dbdreamworld`.`hotel`
    INNER JOIN `dbdreamworld`.`kota_hotel`
        ON (`hotel`.`id_kota` = `kota_hotel`.`id_kota`)
        WHERE nama_kota = 'JEDDAH'";
        $query = $this->db->query($dml);
        return $query->result();
              }

              function gethoteljedah1(){
                $dml="SELECT
    `hotel`.`namahotel`
    , `hotel`.`id_hotel`
    , `hotel`.`reguler_quad`
    , `hotel`.`requler_triple`
    , `hotel`.`reguler_double`
    , `hotel`.`high_quad`
    , `hotel`.`high_triple`
    , `hotel`.`high_double`
    , `kota_hotel`.`nama_kota`
  FROM
    `dbdreamworld`.`hotel`
    INNER JOIN `dbdreamworld`.`kota_hotel`
        ON (`hotel`.`id_kota` = `kota_hotel`.`id_kota`)
        WHERE nama_kota = 'JEDDAH'";
        $query = $this->db->query($dml);
        return $query->row();
              }

            function gethotelmadinah(){
              $dml = "SELECT
    `hotel`.`namahotel`
    , `hotel`.`id_hotel`
    , `hotel`.`reguler_quad`
    , `hotel`.`requler_triple`
    , `hotel`.`reguler_double`
    , `hotel`.`high_quad`
    , `hotel`.`high_triple`
    , `hotel`.`high_double`
    , `kota_hotel`.`nama_kota`
FROM
    `dbdreamworld`.`hotel`
    INNER JOIN `dbdreamworld`.`kota_hotel`
        ON (`hotel`.`id_kota` = `kota_hotel`.`id_kota`)
        WHERE nama_kota = 'MADINAH'";
        $query = $this->db->query($dml);
        return $query->result();
            }

      function gethotelmekah(){
        $dml = "SELECT
        `hotel`.`namahotel`
        , `hotel`.`id_hotel`
        , `hotel`.`reguler_quad`
        , `hotel`.`requler_triple`
        , `hotel`.`reguler_double`
        , `hotel`.`high_quad`
        , `hotel`.`high_triple`
        , `hotel`.`high_double`
        , `kota_hotel`.`nama_kota`
    FROM
        `dbdreamworld`.`hotel`
        INNER JOIN `dbdreamworld`.`kota_hotel`
            ON (`hotel`.`id_kota` = `kota_hotel`.`id_kota`)
            WHERE nama_kota = 'MEKAH'";
        $query = $this->db->query($dml);
        return $query->result();
      }

      function gethotelmekah1(){
        $dml = "SELECT
        `hotel`.`namahotel`
        , `hotel`.`id_hotel`
        , `hotel`.`reguler_quad`
        , `hotel`.`requler_triple`
        , `hotel`.`reguler_double`
        , `hotel`.`high_quad`
        , `hotel`.`high_triple`
        , `hotel`.`high_double`
        , `kota_hotel`.`nama_kota`
    FROM
        `dbdreamworld`.`hotel`
        INNER JOIN `dbdreamworld`.`kota_hotel`
            ON (`hotel`.`id_kota` = `kota_hotel`.`id_kota`)
            WHERE nama_kota = 'MEKAH'";
        $query = $this->db->query($dml);
        return $query->row();
      }

      function get_data_umrah(){
        $dml = "SELECT * FROM data_umrah";
        $query = $this->db->query($dml);
        return $query->row();
      }

      function get_harga_hotel($id_hotel){
        $dml = "SELECT * from hotel where id_hotel = $id_hotel";
        $query = $this->db->query($dml);
        return $query->row();
      }

// tambah ini
      function get_hotel_by_id($id_hotel){
        $dml = $this->db->get_where('hotel', array('id_hotel' => $id_hotel ));
        return $dml->row();
      }

    }

    /* Crudlab by Kostlab */
    /* Please DO NOT modify this information : */
    /* Learn and Earn */
