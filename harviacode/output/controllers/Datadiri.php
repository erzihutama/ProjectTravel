<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Datadiri extends MY_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Datadiri_model');
        $this->load->library('form_validation');
    }

    public function index()
    {

      $datadatadiri=$this->Datadiri_model->get_all();//panggil ke modell
      $datafield=$this->Datadiri_model->get_field();//panggil ke modell

      $data = array(
        'contain_view' => 'admin/datadiri/datadiri_list',
        'sidebar'=>'admin/sidebar',
        'css'=>'admin/crudassets/css',
        'script'=>'admin/crudassets/script',
        'datadatadiri'=>$datadatadiri,
        'datafield'=>$datafield,
        'module'=>'admin',
        'titlePage'=>'datadiri',
        'controller'=>'datadiri'
       );
      $this->template->load($data);
    }


    public function create(){
      $data = array(
        'contain_view' => 'admin/datadiri/datadiri_form',
        'sidebar'=>'admin/sidebar',//Ini buat menu yang ditampilkan di module admin {DIKIRIM KE TEMPLATE}
        'css'=>'admin/crudassets/css',//Ini buat kirim css dari page nya  {DIKIRIM KE TEMPLATE}
        'script'=>'admin/crudassets/script',//ini buat javascript apa aja yang di load di page {DIKIRIM KE TEMPLATE}
        'action'=>'admin/datadiri/create_action',
        'module'=>'admin',
        'titlePage'=>'datadiri',
        'controller'=>'datadiri'
       );
      $this->template->load($data);
    }

    public function edit($id){
      $dataedit=$this->Datadiri_model->get_by_id($id);
      $data = array(
        'contain_view' => 'admin/datadiri/datadiri_edit',
        'sidebar'=>'admin/sidebar',//Ini buat menu yang ditampilkan di module admin {DIKIRIM KE TEMPLATE}
        'css'=>'admin/crudassets/css',//Ini buat kirim css dari page nya  {DIKIRIM KE TEMPLATE}
        'script'=>'admin/crudassets/script',//ini buat javascript apa aja yang di load di page {DIKIRIM KE TEMPLATE}
        'action'=>'admin/datadiri/update_action',
        'dataedit'=>$dataedit,
        'module'=>'admin',
        'titlePage'=>'datadiri',
        'controller'=>'datadiri'
       );
      $this->template->load($data);
    }


    public function create_action()
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->create();
        } else {
            $data = array(
		'nama' => $this->input->post('nama',TRUE),
		'kelamin' => $this->input->post('kelamin',TRUE),
		'keahlian' => $this->input->post('keahlian',TRUE),
	    );

            $this->Datadiri_model->insert($data);
            $this->session->set_flashdata('message', 'Create Record Success');
            redirect(site_url('admin/datadiri'));
        }
    }



    public function update_action()
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->edit($this->input->post('idnama', TRUE));
        } else {
            $data = array(
		'nama' => $this->input->post('nama',TRUE),
		'kelamin' => $this->input->post('kelamin',TRUE),
		'keahlian' => $this->input->post('keahlian',TRUE),
	    );

            $this->Datadiri_model->update($this->input->post('idnama', TRUE), $data);
            $this->session->set_flashdata('message', 'Update Record Success');
            redirect(site_url('admin/datadiri'));
        }
    }

    public function delete($id)
    {
        $row = $this->Datadiri_model->get_by_id($id);

        if ($row) {
            $this->Datadiri_model->delete($id);
            $this->session->set_flashdata('message', 'Delete Record Success');
            redirect(site_url('admin/datadiri'));
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('admin/datadiri'));
        }
    }

    public function _rules()
    {
	$this->form_validation->set_rules('nama', 'nama', 'trim|required');
	$this->form_validation->set_rules('kelamin', 'kelamin', 'trim|required');
	$this->form_validation->set_rules('keahlian', 'keahlian', 'trim|required');

	$this->form_validation->set_rules('idnama', 'idnama', 'trim');
	$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
    }

}
