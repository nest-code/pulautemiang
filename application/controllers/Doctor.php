<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Doctor extends CI_Controller {

	function __construct()
    {
        parent::__construct();
        check_not_login();
        $this->load->model(['doctor_m','poli_m']);
    }

	public function index()	
	{
		$data['row'] = $this->doctor_m->get();
        $this->template->load('template','doctor/doctor_data', $data);
	}

	public function add () {
		$doctor = new stdClass();
		$doctor->doctor_id=null;
		$doctor->num_idi=null;
		$doctor->name=null;
		$doctor->gender=null;
		$doctor->birthday=null;
		$doctor->address=null;
		$doctor->email=null;
		$doctor->phone=null;

		$query_poli = $this->poli_m->get();
		$poli[null] = '-Pilih-';
		foreach($query_poli->result() as $pol ) {
			$poli[$pol->poli_id] = $pol->name;
		}

		$data = array(
				'page'=> 'add',
				'row' => $doctor,
				'poli' => $poli, 'selectedpoli' => null,
		);
		$this->template->load('template','doctor/doctor_form', $data);	

	}

	public function del($id)
    {
			$this->doctor_m->del($id);
			if ($this->db->affected_rows() > 0 ){
				$this->session->set_flashdata('success', 'Data berhasil Dihapus');
			}
			echo "<script>window.location='".site_url('doctor')."';</script>";
	}


	
	public function edit($id) 
	{
		$query = $this->doctor_m->get($id);
		
		if($query->num_rows() >0 ) {

			$doctor = $query->row();

			$query_poli = $this->poli_m->get();
			$poli[null] = '-Pilih-';
			foreach($query_poli->result() as $pol ) {
				$poli[$pol->poli_id] = $pol->name;
			}


			$data = array(
					'page'=> 'edit',
					'row' => $doctor,
					'poli' => $poli, 'selectedpoli' => $doctor->poli_id,				
			);

			
			$this->template->load('template','doctor/doctor_form', $data);
		}else{
			echo "<script> alert('Data Tidak detemukan');";
			echo "window.location='".site_url('item')."';</script>";

		}
	}
	
	public function process()
	{
		$post = $this->input->post(null,TRUE);
		if(isset($_POST['add'])) {
			$this->doctor_m->add($post);
		}
		else if (isset($_POST['edit'])) {
			$this->doctor_m->edit($post);
		}

		if ($this->db->affected_rows() > 0 ){
			$this->session->set_flashdata('success', 'Data berhasil Disimpan');
		}
		redirect('doctor');
	
	}


}
