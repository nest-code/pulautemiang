<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CategoryArticle extends CI_Controller {

	function __construct()
    {
        parent::__construct();
        check_not_login();
        $this->load->model('categoryarticle_m');
    }

	public function index()	
	{
		$data['row'] = $this->categoryarticle_m->get();
        $this->template->load('template','category_article/category_article_data', $data);
	}

	public function add () {
		$categoryarticle = new stdClass();
		$categoryarticle->c_article_id=null;
		$categoryarticle->name=null;

		$data = array(
				'page'=> 'add',
				'row' => $categoryarticle
		);
		$this->template->load('template','category_article/category_article_form', $data);
	}

	public function del($id)
    {
			$this->categoryarticle_m->del($id);
			if ($this->db->affected_rows() > 0 ){
				$this->session->set_flashdata('success', 'Data berhasil Dihapus');
			}
			echo "<script>window.location='".site_url('categoryarticle')."';</script>";
	}

	public function edit($id) 
	{
		$query = $this->categoryarticle_m->get($id);
		if($query->num_rows() >0 ) {
			$categoryarticle = $query->row();
			$data = array(
				'page' =>'edit',
				'row' => $categoryarticle
			);
			$this->template->load('template','category_article/category_article_form', $data);
		}else{
			echo "<script> alert('Data Tidak detemukan');";
			echo "window.location='".site_url('categoryarticle')."';</script>";
		}
    }
    






	
	public function process()
	{
		$post = $this->input->post(null,TRUE);
		if(isset($_POST['add'])) {
			$this->categoryarticle_m->add($post);
		}

		else if (isset($_POST['edit'])) {
			$this->categoryarticle_m->edit($post);
		}

		if ($this->db->affected_rows() > 0 ){
			// echo "<script>
			// alert('Data Berhasil Disimpan');
			// </script>";

			$this->session->set_flashdata('success', 'Data berhasil Disimpan');
		}
		// echo "<script>window.location='".site_url('categoryarticle')."';</script>";
		redirect('categoryarticle');
	
	}


}
