<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Queue extends CI_Controller {

	function __construct()
    {
        parent::__construct();
        // check_not_login();
        $this->load->model('poli_m');
    }

	public function index()	
	{
		// $data['row'] = $this->queue_m->get();
		// $this->template->load('toptemplate','queue/queue_data', $data);
		$this->load->view('templates/header');
		$data['row'] = $this->poli_m->get();
		$this->load->view('queue/queue_index', $data);
		$this->load->view('templates/footer');
        // $this->template->load('toptemplate','queue/queue_form');

	}
	
	public function show()	
    {
		$this->load->view('templates/header');
		$data['row'] = $this->queue_m->get();
		$this->load->view('queue/queue_index', $data);
		$this->load->view('templates/footer');
	}
    
    
    public function print()	
    {
		$this->load->view('templates/header');
		// $data['row'] = $this->queue_m->get();
		$this->load->view('queue/queue_form');
		$this->load->view('templates/footer');
	}

	public function add () {
		$queue = new stdClass();
		$queue->queue_id=null;
		$queue->name=null;
		$data = array(
				'page'=> 'add',
				'row' => $queue
		);
		$this->template->load('template','queue/queue_form', $data);
	}

	public function del($id)
    {
			$this->queue_m->del($id);
			if ($this->db->affected_rows() > 0 ){
				$this->session->set_flashdata('success', 'Data berhasil Dihapus');
			}
			echo "<script>window.location='".site_url('queue')."';</script>";
	}

	public function edit($id) 
	{
		$query = $this->queue_m->get($id);
		if($query->num_rows() >0 ) {
			$queue = $query->row();
			$data = array(
				'page' =>'edit',
				'row' => $queue
			);
			$this->template->load('template','queue/queue_form', $data);
		}else{

			echo "<script> alert('Data Tidak detemukan');";
			echo "window.location='".site_url('queue')."';</script>";

		}
	}
	
	public function process()
	{
		$post = $this->input->post(null,TRUE);
		if(isset($_POST['add'])) {
			$this->queue_m->add($post);
		}

		else if (isset($_POST['edit'])) {
			$this->queue_m->edit($post);
		}

		if ($this->db->affected_rows() > 0 ){
			$this->session->set_flashdata('success', 'Data berhasil Disimpan');
		}
		redirect('queue');
	}


}
