<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Hospital extends CI_Controller {

	function __construct()
    {
        parent::__construct();
		check_not_login();
		$this->load->model('hospital_m');

    }

	public function index()	
	{

		$data['row'] = $this->hospital_m->get();
        $this->template->load('template','hospital/hospital_form', $data);
	}

	public function add () {
		$hospital = new stdClass();
		$hospital->hospital_id=null;
		$hospital->name=null;

		$data = array(
				'page'=> 'add',
				'row' => $hospital
		);
		$this->template->load('template','hospital/hospital_form', $data);
	}

	public function del($id)
    {
			$this->hospital_m->del($id);
			if ($this->db->affected_rows() > 0 ){
				$this->session->set_flashdata('success', 'Data berhasil Dihapus');
			}
			echo "<script>window.location='".site_url('hospital')."';</script>";
	}

	public function edit($id) 
	{
		$query = $this->hospital_m->get($id);
		if($query->num_rows() >0 ) {
			$hospital = $query->row();
			$data = array(
				'page' =>'edit',
				'row' => $hospital
			);
			$this->template->load('template','product/hospital/hospital_form', $data);
		}else{

			echo "<script> alert('Data Tidak detemukan');";
			echo "window.location='".site_url('hospital')."';</script>";

		}
	}
	
	public function process()
	{
		$post = $this->input->post(null,TRUE);
		if(isset($_POST['add'])) {
			$this->hospital_m->add($post);
		}

		else if (isset($_POST['edit'])) {
			$this->hospital_m->edit($post);
		}

		if ($this->db->affected_rows() > 0 ){
			// echo "<script>
			// alert('Data Berhasil Disimpan');
			// </script>";

			$this->session->set_flashdata('success', 'Data berhasil Disimpan');
		}
		// echo "<script>window.location='".site_url('hospital')."';</script>";
		redirect('hospital');
	
	}


}
