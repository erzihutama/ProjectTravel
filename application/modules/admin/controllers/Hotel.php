<?php

    if (!defined('BASEPATH'))
        exit('No direct script access allowed');

    class Hotel extends MY_Controller
    {
        function __construct()
        {
            parent::__construct();
            $this->load->model('Hotel_model');
            $this->load->library('form_validation');
            // if($method != 'ajax_list'){
            //   if($this->session->userdata('status')!='login'){
            //     redirect(base_url('login'));
            //   }
            // }
        }

        public function index()
        {$datahotel=$this->Hotel_model->get_all();//panggil ke modell
          $datafield=$this->Hotel_model->get_field();//panggil ke modell

           $data = array(
             'content'=>'admin/hotel/hotel_list',
             'sidebar'=>'admin/sidebar',
             'css'=>'admin/hotel/css',
             'js'=>'admin/hotel/js',
             'datahotel'=>$datahotel,
             'datafield'=>$datafield,
             'module'=>'admin',
             'titlePage'=>'hotel',
             'controller'=>'hotel'
            );
          $this->template->load($data);
        }

        //DataTable
        public function ajax_list()
      {
          $list = $this->Hotel_model->get_datatables();
          $data = array();
          $no = $_POST['start'];
          foreach ($list as $Hotel_model) {
              $no++;
              $row = array();
              $row[] = $no;
							$row[] = $Hotel_model->namahotel;
							$row[] = $Hotel_model->deskripsi;
							$row[] = $Hotel_model->maps;
							
              $row[] ="
              <a href='hotel/edit/$Hotel_model->id_hotel'><i class='m-1 feather icon-edit-2'></i></a>
              <a class='modalDelete' data-toggle='modal' data-target='#responsive-modal' value='$Hotel_model->id_hotel' href='#'><i class='feather icon-trash'></i></a>";
              $data[] = $row;
          }

          $output = array(
                          "draw" => $_POST['draw'],
                          "recordsTotal" => $this->Hotel_model->count_all(),
                          "recordsFiltered" => $this->Hotel_model->count_filtered(),
                          "data" => $data,
                  );
          //output to json format
          echo json_encode($output);
      }


        public function create(){
           $data = array(
             'content'=>'admin/hotel/hotel_create',
             'sidebar'=>'admin/sidebar',
             'action'=>'admin/hotel/create_action',
             'module'=>'admin',
             'titlePage'=>'hotel',
             'controller'=>'hotel'
            );
          $this->template->load($data);
        }

        public function edit($id_hotel){
          $dataedit=$this->Hotel_model->get_by_id($id_hotel);
           $data = array(
             'content'=>'admin/hotel/hotel_edit',
             'sidebar'=>'admin/sidebar',
             'action'=>'admin/hotel/update_action',
             'dataedit'=>$dataedit,
             'module'=>'admin',
             'titlePage'=>'hotel',
             'controller'=>'hotel'
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
					'namahotel' => $this->input->post('namahotel',TRUE),
					'deskripsi' => $this->input->post('deskripsi',TRUE),
					'maps' => $this->input->post('maps',TRUE),
					
);

            $this->Hotel_model->insert($data);
            $this->session->set_flashdata('message', 'Create Record Success');
            redirect(site_url('admin/hotel'));
        }
    }




    public function update_action()
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->edit($this->input->post('id', TRUE));
        } else {
            $data = array(
					'namahotel' => $this->input->post('namahotel',TRUE),
					'deskripsi' => $this->input->post('deskripsi',TRUE),
					'maps' => $this->input->post('maps',TRUE),
					
);

            $this->Hotel_model->update($this->input->post('id_hotel', TRUE), $data);
            $this->session->set_flashdata('message', 'Update Record Success');
            redirect(site_url('admin/hotel'));
        }
    }

    public function delete($id_hotel)
    {
        $row = $this->Hotel_model->get_by_id($id_hotel);

        if ($row) {
            $this->Hotel_model->delete($id_hotel);
            $this->session->set_flashdata('message', 'Delete Record Success');
            redirect(site_url('admin/hotel'));
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('admin/hotel'));
        }
    }

    public function _rules()
    {
$this->form_validation->set_rules('namahotel', 'namahotel', 'trim|required');
$this->form_validation->set_rules('deskripsi', 'deskripsi', 'trim|required');
$this->form_validation->set_rules('maps', 'maps', 'trim|required');


	$this->form_validation->set_rules('id_hotel', 'id_hotel', 'trim');
	$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');

    }

}