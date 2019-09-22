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

      function get_harga_mekah($tipe_kamar){
        $dml = "SELECT * FROM subtipehotel where id_kota = '1' and nama_subtipe = '$tipe_kamar'";
        $query = $this->db->query($dml)->row();
        return $query;
      }
      function get_harga_madinah($tipe_kamar){
        $dml = "SELECT * FROM subtipehotel where id_kota = '2' and nama_subtipe = '$tipe_kamar'";
        $query = $this->db->query($dml)->row();
        return $query;
      }
      function get_harga_jeddah($tipe_kamar){
        $dml = "SELECT * FROM subtipehotel where id_kota = '3' and nama_subtipe = '$tipe_kamar'";
        $query = $this->db->query($dml)->row();
        return $query;
      }

      function get_data_umrah(){
        $dml = "SELECT * FROM data_umrah";
        $query = $this->db->query($dml);
        return $query->row();
      }




    }

    /* Crudlab by Kostlab */
    /* Please DO NOT modify this information : */
    /* Learn and Earn */
