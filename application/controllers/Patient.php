<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Patient extends CI_Controller {

	function __construct()
    {
        parent::__construct();
        check_not_login();
        $this->load->model('patient_m');
    }

	public function index()	
	{
		$data['row'] = $this->patient_m->get();
        $this->template->load('template','patient/patient_data', $data);
	}

	public function add () {
		$patient = new stdClass();
		$patient->patient_id=null;
		$patient->name=null;
		$patient->num_ktp=null;
		$patient->birthday=null;
		$patient->address=null;
		$patient->email=null;
		$patient->phone=null;
		$data = array(
				'page'=> 'add',
				'row' => $patient
		);
		$this->template->load('template','patient/patient_form', $data);
	}

	public function del($id)
    {
			$this->patient_m->del($id);
			if ($this->db->affected_rows() > 0 ){
				$this->session->set_flashdata('success', 'Data berhasil Dihapus');
			}
			echo "<script>window.location='".site_url('patient')."';</script>";
	}

	public function edit($id) 
	{
		$query = $this->patient_m->get($id);
		if($query->num_rows() >0 ) {
			$patient = $query->row();
			$data = array(
				'page' =>'edit',
				'row' => $patient
			);
			$this->template->load('template','patient/patient_form', $data);
		}else{

			echo "<script> alert('Data Tidak detemukan');";
			echo "window.location='".site_url('patient')."';</script>";

		}
	}
	
	public function process()
	{
		$post = $this->input->post(null,TRUE);
		if(isset($_POST['add'])) {
			$this->patient_m->add($post);
		}

		else if (isset($_POST['edit'])) {
			$this->patient_m->edit($post);
		}

		if ($this->db->affected_rows() > 0 ){
			// echo "<script>
			// alert('Data Berhasil Disimpan');
			// </script>";

			$this->session->set_flashdata('success', 'Data berhasil Disimpan');
		}
		// echo "<script>window.location='".site_url('patient')."';</script>";
		redirect('patient');
	
	}


}
