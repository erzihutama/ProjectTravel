<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Profil_alamat extends MY_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Profil_alamat_model');
        $this->load->library('form_validation');
    }

    public function index()
    {

      $dataprofil_alamat=$this->Profil_alamat_model->get_all();//panggil ke modell
      $datafield=$this->Profil_alamat_model->get_field();//panggil ke modell

      $data = array(
        'contain_view' => 'admin/profil_alamat/profil_alamat_list',
        'sidebar'=>'admin/sidebar',
        'css'=>'admin/crudassets/css',
        'script'=>'admin/crudassets/script',
        'dataprofil_alamat'=>$dataprofil_alamat,
        'datafield'=>$datafield,
        'module'=>'admin',
        'titlePage'=>'profil_alamat',
        'controller'=>'profil_alamat'
       );
      $this->template->load($data);
    }


    public function create(){
      $data = array(
        'contain_view' => 'admin/profil_alamat/profil_alamat_form',
        'sidebar'=>'admin/sidebar',//Ini buat menu yang ditampilkan di module admin {DIKIRIM KE TEMPLATE}
        'css'=>'admin/crudassets/css',//Ini buat kirim css dari page nya  {DIKIRIM KE TEMPLATE}
        'script'=>'admin/crudassets/script',//ini buat javascript apa aja yang di load di page {DIKIRIM KE TEMPLATE}
        'action'=>'admin/profil_alamat/create_action',
        'module'=>'admin',
        'titlePage'=>'profil_alamat',
        'controller'=>'profil_alamat'
       );
      $this->template->load($data);
    }

    public function edit($id){
      $dataedit=$this->Profil_alamat_model->get_by_id($id);
      $data = array(
        'contain_view' => 'admin/profil_alamat/profil_alamat_edit',
        'sidebar'=>'admin/sidebar',//Ini buat menu yang ditampilkan di module admin {DIKIRIM KE TEMPLATE}
        'css'=>'admin/crudassets/css',//Ini buat kirim css dari page nya  {DIKIRIM KE TEMPLATE}
        'script'=>'admin/crudassets/script',//ini buat javascript apa aja yang di load di page {DIKIRIM KE TEMPLATE}
        'action'=>'admin/profil_alamat/update_action',
        'dataedit'=>$dataedit,
        'module'=>'admin',
        'titlePage'=>'profil_alamat',
        'controller'=>'profil_alamat'
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
		'alamat_perusahaan' => $this->input->post('alamat_perusahaan',TRUE),
		'telepon_perusahaan' => $this->input->post('telepon_perusahaan',TRUE),
		'email_perusahaan' => $this->input->post('email_perusahaan',TRUE),
		'maps' => $this->input->post('maps',TRUE),
	    );

            $this->Profil_alamat_model->insert($data);
            $this->session->set_flashdata('message', 'Create Record Success');
            redirect(site_url('admin/profil_alamat'));
        }
    }



    public function update_action()
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->edit($this->input->post('id_alamat', TRUE));
        } else {
            $data = array(
		'alamat_perusahaan' => $this->input->post('alamat_perusahaan',TRUE),
		'telepon_perusahaan' => $this->input->post('telepon_perusahaan',TRUE),
		'email_perusahaan' => $this->input->post('email_perusahaan',TRUE),
		'maps' => $this->input->post('maps',TRUE),
	    );

            $this->Profil_alamat_model->update($this->input->post('id_alamat', TRUE), $data);
            $this->session->set_flashdata('message', 'Update Record Success');
            redirect(site_url('admin/profil_alamat'));
        }
    }

    public function delete($id)
    {
        $row = $this->Profil_alamat_model->get_by_id($id);

        if ($row) {
            $this->Profil_alamat_model->delete($id);
            $this->session->set_flashdata('message', 'Delete Record Success');
            redirect(site_url('admin/profil_alamat'));
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('admin/profil_alamat'));
        }
    }

    public function _rules()
    {
	$this->form_validation->set_rules('alamat_perusahaan', 'alamat perusahaan', 'trim|required');
	$this->form_validation->set_rules('telepon_perusahaan', 'telepon perusahaan', 'trim|required');
	$this->form_validation->set_rules('email_perusahaan', 'email perusahaan', 'trim|required');
	$this->form_validation->set_rules('maps', 'maps', 'trim|required');

	$this->form_validation->set_rules('id_alamat', 'id_alamat', 'trim');
	$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
    }

}
