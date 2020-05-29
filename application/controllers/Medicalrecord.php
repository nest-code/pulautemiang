<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Medicalrecord extends CI_Controller {

	function __construct()
    {
        parent::__construct();
        check_not_login();
        $this->load->model(['medical_record_m','category_m']);
    }

	public function index()	
	{
		$data['row'] = $this->medical_record_m->get();
        $this->template->load('template','medical_record/medical_record/medical_record_data', $data);
	}

	public function add () {
		$medical_record = new stdClass();
		$medical_record->medical_record_id=null;
		$medical_record->name=null;

		$query_category = $this->category_m->get();
		$category[null] = '-Pilih-';
		foreach($query_category->result() as $cat ) {
			$category[$cat->category_id] = $cat->name;
		}

		$data = array(
				'page'=> 'add',
				'row' => $medical_record,
				'cat' => $cat, 'selectedcat' => null,
		);
		$this->template->load('template','medical_record/medical_record/medical_record_form', $data);
	}

	public function del($id)
    {
			$this->medical_record_m->del($id);
			if ($this->db->affected_rows() > 0 ){
				$this->session->set_flashdata('success', 'Data berhasil Dihapus');
			}
			echo "<script>window.location='".site_url('medical_record')."';</script>";
	}

	public function edit($id) 
	{
		$query = $this->medical_record_m->get($id);

        if($query->num_rows() >0 ) {
            
            $category = $query->row();

            $query_cad = $this->category_m->get();
            $cad[null] = '-Pilih-';
            foreach($query_cad->result() as $ac ) {
                $cad[$ac->category_id] = $ac->name;
            }	


            $data = array(
                    'page'=> 'edit',
                    'row' => $category,
                    'cad' => $cad, 'selectedcad' => $category->category_id,
                    
            );
            $this->template->load('template','medical_record/medical_record/medical_record_form', $data);
        }else{

            echo "<script> alert('Data Tidak detemukan');";
            echo "window.location='".site_url('category')."';</script>";

        }
	}
	
	public function process()
	{
		$post = $this->input->post(null,TRUE);
		if(isset($_POST['add'])) {
			$this->medical_record_m->add($post);
		}
		else if (isset($_POST['edit'])) {
			$this->medical_record_m->edit($post);
		}
		if ($this->db->affected_rows() > 0 ){
			$this->session->set_flashdata('success', 'Data berhasil Disimpan');
		}
			redirect('medical_record');
	}


}
