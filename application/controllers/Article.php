<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Article extends CI_Controller {

	function __construct()
    {
        parent::__construct();
        check_not_login();
        $this->load->model(['article_m','categoryarticle_m']);
    }

	public function index()	
	{
		$data['row'] = $this->article_m->get();
        $this->template->load('template','article/article_data', $data);
	}


	public function show()	
	{
		$this->load->view('templates/header');
		$data['row'] = $this->article_m->get();
		$this->load->view('article/article_index', $data);
		$this->load->view('templates/footer');
	}

	public function add () {
		$article = new stdClass();
		$article->article_id=null;
		$article->title=null;
		$article->c_article_id=null;
		$article->text=null;

		$query_cac = $this->categoryarticle_m->get();
		$cac[null] = '-Pilih-';
		foreach($query_cac->result() as $ac ) {
			$cac[$ac->c_article_id] = $ac->name;
		}	

		$data = array(
				'page'=> 'add',
				'row' => $article,
				'cac' => $cac, 'selectedcac' => null,
		);
		$this->template->load('template','article/article_form', $data);
	}

	public function del($id)
    {
			$this->article_m->del($id);
			if ($this->db->affected_rows() > 0 ){
				$this->session->set_flashdata('success', 'Data berhasil Dihapus');
			}
			echo "<script>window.location='".site_url('article')."';</script>";
	}

	public function edit($id) 
	{
		$query = $this->article_m->get($id);

        if($query->num_rows() >0 ) {
            
            $article = $query->row();

            $query_cac = $this->categoryarticle_m->get();
            $cac[null] = '-Pilih-';
            foreach($query_cac->result() as $ac ) {
                $cac[$ac->c_article_id] = $ac->name;
            }	


            $data = array(
                    'page'=> 'edit',
                    'row' => $article,
                    'cac' => $cac, 'selectedcac' => $article->c_article_id,
                    
            );
            $this->template->load('template','article/article_form', $data);
        }else{

            echo "<script> alert('Data Tidak detemukan');";
            echo "window.location='".site_url('article')."';</script>";

        }
	}
	
	public function process()
	{
		$post = $this->input->post(null,TRUE);
		if(isset($_POST['add'])) {
			$this->article_m->add($post);
		}

		else if (isset($_POST['edit'])) {
			$this->article_m->edit($post);
		}

		if ($this->db->affected_rows() > 0 ){
			$this->session->set_flashdata('success', 'Data berhasil Disimpan');
		}
		redirect('article');
	
	}


}
