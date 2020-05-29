<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

	public function login()
	{
		check_already_login();
		$this->load->view('login');
	}

	public function process()
	{

		$post = $this->input->post(null, TRUE);

		if(isset($_POST['login'])){
			$this->load->model('user_m');
			$query = $this->user_m->login($post);
			
			if($query->num_rows() > 0){
				$row = $query->row();
				// echo $row->username;
				$params = array(
					'userid' => $row->user_id,
					'level' => $row->level
				);
				$this->session->set_userdata($params);
				echo "<script>
					alert('Selamat Berhasil');
					window.location='".site_url('dashboard')."';
				</script>";

				// echo "login Berhasil";
			}else {
				echo "<script>
				alert('Gagal Login');
				window.location='".site_url('auth/login')."';
			</script>";

			}
		}
	}

	public function logut()
	{
		$params = array('userid','level');
		// var_dump ($params);
		// die();
		$this->session->unset_userdata($params);
		redirect('auth/login');
	}
}
