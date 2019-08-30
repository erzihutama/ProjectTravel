<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Profilweb_model extends CI_Model
{

    public $table = 'profilweb';
    public $id = 'id_profil';
    public $order = 'DESC';

    function __construct()
    {
        parent::__construct();
    }

    // get all
    function get_all()
    {
        $this->db->order_by($this->id, $this->order);
        return $this->db->get($this->table)->result();
    }

    //get field

    function get_field(){
      $table=$this->table;
      $sql=$this->db->query("SELECT * FROM `$table`"); //ganti * untuk custom field yang ditampilkan pada table
      return $sql->list_fields();
    }

    // get data by id
    function get_by_id($id)
    {
        $this->db->where($this->id, $id);
        return $this->db->get($this->table)->row();
    }

    // get total rows
    function total_rows($q = NULL) {
        $this->db->like('id_profil', $q);
	$this->db->or_like('id_config', $q);
	$this->db->or_like('id_alamat', $q);
	$this->db->or_like('judul_perusahaan', $q);
	$this->db->or_like('deskripsi_perusahaan', $q);
	$this->db->or_like('taglineweb1', $q);
	$this->db->or_like('taglineweb2', $q);
	$this->db->or_like('taglineweb3', $q);
	$this->db->or_like('taglineimage1', $q);
	$this->db->or_like('taglineimage2', $q);
	$this->db->or_like('taglineimage3', $q);
	$this->db->or_like('visi', $q);
	$this->db->or_like('misi', $q);
	$this->db->or_like('website', $q);
	$this->db->from($this->table);
        return $this->db->count_all_results();
    }

    // get data with limit and search
    function get_limit_data($limit, $start = 0, $q = NULL) {
        $this->db->order_by($this->id, $this->order);
        $this->db->like('id_profil', $q);
	$this->db->or_like('id_config', $q);
	$this->db->or_like('id_alamat', $q);
	$this->db->or_like('judul_perusahaan', $q);
	$this->db->or_like('deskripsi_perusahaan', $q);
	$this->db->or_like('taglineweb1', $q);
	$this->db->or_like('taglineweb2', $q);
	$this->db->or_like('taglineweb3', $q);
	$this->db->or_like('taglineimage1', $q);
	$this->db->or_like('taglineimage2', $q);
	$this->db->or_like('taglineimage3', $q);
	$this->db->or_like('visi', $q);
	$this->db->or_like('misi', $q);
	$this->db->or_like('website', $q);
	$this->db->limit($limit, $start);
        return $this->db->get($this->table)->result();
    }

    // insert data
    function insert($data)
    {
        $this->db->insert($this->table, $data);
    }

    // update data
    function update($id, $data)
    {
        $this->db->where($this->id, $id);
        $this->db->update($this->table, $data);
    }

    // delete data
    function delete($id)
    {
        $this->db->where($this->id, $id);
        $this->db->delete($this->table);
    }

}

/* End of file Profilweb_model.php */
/* Location: ./application/models/Profilweb_model.php */
/* Please DO NOT modify this information : */
/* Generated by Harviacode Codeigniter CRUD Generator 2019-08-30 04:33:25 */
/* http://harviacode.com */