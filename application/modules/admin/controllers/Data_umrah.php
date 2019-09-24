<?php

    if (!defined('BASEPATH'))
        exit('No direct script access allowed');

    class Data_umrah extends MY_Controller
    {
        function __construct()
        {
            parent::__construct();
            $this->load->model('Data_umrah_model');
            $this->load->library('form_validation');
            // if($method != 'ajax_list'){
            //   if($this->session->userdata('status')!='login'){
            //     redirect(base_url('login'));
            //   }
            // }
        }

        public function index()
        {$datadata_umrah=$this->Data_umrah_model->get_all();//panggil ke modell
          $datafield=$this->Data_umrah_model->get_field();//panggil ke modell

           $data = array(
             'content'=>'admin/data_umrah/data_umrah_list',
             'sidebar'=>'admin/sidebar',
             'css'=>'admin/data_umrah/css',
             'js'=>'admin/data_umrah/js',
             'datadata_umrah'=>$datadata_umrah,
             'datafield'=>$datafield,
             'module'=>'admin',
             'titlePage'=>'data_umrah',
             'controller'=>'data_umrah'
            );
          $this->template->load($data);
        }

        //DataTable
        public function ajax_list()
      {
          $list = $this->Data_umrah_model->get_datatables();
          $data = array();
          $no = $_POST['start'];
          foreach ($list as $Data_umrah_model) {
              $no++;
              $row = array();
              $row[] = $no;
							$row[] = $Data_umrah_model->airport_price;
							$row[] = $Data_umrah_model->logistik;
							$row[] = $Data_umrah_model->bus;
							$row[] = $Data_umrah_model->driver_tip;
							$row[] = $Data_umrah_model->hotel_handling;
							$row[] = $Data_umrah_model->billboy;
							$row[] = $Data_umrah_model->mutawwif;
							$row[] = $Data_umrah_model->mutawwifa;
							$row[] = $Data_umrah_model->muassasa;
							$row[] = $Data_umrah_model->visa;
							
              $row[] ="
              <a href='data_umrah/edit/$Data_umrah_model->id_data_umrah'><i class='m-1 feather icon-edit-2'></i></a>
              <a class='modalDelete' data-toggle='modal' data-target='#responsive-modal' value='$Data_umrah_model->id_data_umrah' href='#'><i class='feather icon-trash'></i></a>";
              $data[] = $row;
          }

          $output = array(
                          "draw" => $_POST['draw'],
                          "recordsTotal" => $this->Data_umrah_model->count_all(),
                          "recordsFiltered" => $this->Data_umrah_model->count_filtered(),
                          "data" => $data,
                  );
          //output to json format
          echo json_encode($output);
      }


        public function create(){
           $data = array(
             'content'=>'admin/data_umrah/data_umrah_create',
             'sidebar'=>'admin/sidebar',
             'action'=>'admin/data_umrah/create_action',
             'module'=>'admin',
             'titlePage'=>'data_umrah',
             'controller'=>'data_umrah'
            );
          $this->template->load($data);
        }

        public function edit($id_data_umrah){
          $dataedit=$this->Data_umrah_model->get_by_id($id_data_umrah);
           $data = array(
             'content'=>'admin/data_umrah/data_umrah_edit',
             'sidebar'=>'admin/sidebar',
             'action'=>'admin/data_umrah/update_action',
             'dataedit'=>$dataedit,
             'module'=>'admin',
             'titlePage'=>'data_umrah',
             'controller'=>'data_umrah'
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
					'airport_price' => $this->input->post('airport_price',TRUE),
					'logistik' => $this->input->post('logistik',TRUE),
					'bus' => $this->input->post('bus',TRUE),
					'driver_tip' => $this->input->post('driver_tip',TRUE),
					'hotel_handling' => $this->input->post('hotel_handling',TRUE),
					'billboy' => $this->input->post('billboy',TRUE),
					'mutawwif' => $this->input->post('mutawwif',TRUE),
					'mutawwifa' => $this->input->post('mutawwifa',TRUE),
					'muassasa' => $this->input->post('muassasa',TRUE),
					'visa' => $this->input->post('visa',TRUE),
					
);

            $this->Data_umrah_model->insert($data);
            $this->session->set_flashdata('message', 'Create Record Success');
            redirect(site_url('admin/data_umrah'));
        }
    }




    public function update_action()
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->edit($this->input->post('id', TRUE));
        } else {
            $data = array(
					'airport_price' => $this->input->post('airport_price',TRUE),
					'logistik' => $this->input->post('logistik',TRUE),
					'bus' => $this->input->post('bus',TRUE),
					'driver_tip' => $this->input->post('driver_tip',TRUE),
					'hotel_handling' => $this->input->post('hotel_handling',TRUE),
					'billboy' => $this->input->post('billboy',TRUE),
					'mutawwif' => $this->input->post('mutawwif',TRUE),
					'mutawwifa' => $this->input->post('mutawwifa',TRUE),
					'muassasa' => $this->input->post('muassasa',TRUE),
					'visa' => $this->input->post('visa',TRUE),
					
);

            $this->Data_umrah_model->update($this->input->post('id_data_umrah', TRUE), $data);
            $this->session->set_flashdata('message', 'Update Record Success');
            redirect(site_url('admin/data_umrah'));
        }
    }

    public function delete($id_data_umrah)
    {
        $row = $this->Data_umrah_model->get_by_id($id_data_umrah);

        if ($row) {
            $this->Data_umrah_model->delete($id_data_umrah);
            $this->session->set_flashdata('message', 'Delete Record Success');
            redirect(site_url('admin/data_umrah'));
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('admin/data_umrah'));
        }
    }

    public function _rules()
    {
$this->form_validation->set_rules('airport_price', 'airport_price', 'trim|required');
$this->form_validation->set_rules('logistik', 'logistik', 'trim|required');
$this->form_validation->set_rules('bus', 'bus', 'trim|required');
$this->form_validation->set_rules('driver_tip', 'driver_tip', 'trim|required');
$this->form_validation->set_rules('hotel_handling', 'hotel_handling', 'trim|required');
$this->form_validation->set_rules('billboy', 'billboy', 'trim|required');
$this->form_validation->set_rules('mutawwif', 'mutawwif', 'trim|required');
$this->form_validation->set_rules('mutawwifa', 'mutawwifa', 'trim|required');
$this->form_validation->set_rules('muassasa', 'muassasa', 'trim|required');
$this->form_validation->set_rules('visa', 'visa', 'trim|required');


	$this->form_validation->set_rules('id_data_umrah', 'id_data_umrah', 'trim');
	$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');

    }

}