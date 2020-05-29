<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Poli extends CI_Controller {

	function __construct()
    {
        parent::__construct();
        check_not_login();
        $this->load->model('poli_m');
    }

	public function index()	
	{
		$data['row'] = $this->poli_m->get();
        $this->template->load('template','poli/poli_data', $data);
	}

	public function add () {
		$poli = new stdClass();
		$poli->poli_id=null;
		$poli->name=null;
		$data = array(
				'page'=> 'add',
				'row' => $poli
		);
		$this->template->load('template','poli/poli_form', $data);
	}

	public function del($id)
    {
			$this->poli_m->del($id);
			if ($this->db->affected_rows() > 0 ){
				$this->session->set_flashdata('success', 'Data berhasil Dihapus');
			}
			echo "<script>window.location='".site_url('poli')."';</script>";
	}

	public function edit($id) 
	{
		$query = $this->poli_m->get($id);
		if($query->num_rows() >0 ) {
			$poli = $query->row();
			$data = array(
				'page' =>'edit',
				'row' => $poli
			);
			$this->template->load('template','poli/poli_form', $data);
		}else{

			echo "<script> alert('Data Tidak detemukan');";
			echo "window.location='".site_url('poli')."';</script>";

		}
	}
	
	public function process()
	{
		$post = $this->input->post(null,TRUE);
		if(isset($_POST['add'])) {
			$this->poli_m->add($post);
		}

		else if (isset($_POST['edit'])) {
			$this->poli_m->edit($post);
		}

		if ($this->db->affected_rows() > 0 ){
			$this->session->set_flashdata('success', 'Data berhasil Disimpan');
		}
		redirect('poli');
	
	}


}
