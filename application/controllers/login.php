<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class login extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	function __construct(){
		parent::__construct();
		$this->load->model('Mlogin');

	}

	public function index()
	{
		$this->load->view('body/header');
		$this->load->view('login');
		
		if($this->session->userdata('status') == "login"){
			redirect(base_url("dashboard"));
		}
	}
	
	function aksi_login(){
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$where = array(
			'username' => $username,
			'password' => md5(md5(md5($password)))
			);
		$cek = $this->MLogin->cek_login("asset.asset_user",$where);
		// var_dump($cek[0]->name); die;
		if(sizeof($cek) > 0){
 
			$data_session = array(
				'nama' => $cek[0]->name,
				'status' => "login"
				);
 
			$this->session->set_userdata($data_session);
 
			redirect(base_url("dashboard"));
 
		}else{
			// echo "
			// <script>
			// $.toast({
			// 	heading: 'Error!',
			// 	text: 'Username and Password incorrect.',
			// 	position: 'top-right',
			// 	loaderBg: '#ff6849',
			// 	icon: 'error',
			// 	hideAfter: 3500,
			// 	stack: 6
			// });
			// </script>
			// ";
			echo "
			<script>	
			alert('Username dan Password salah!');
				document.location.href='".base_url()."';
			</script>
			";
		}
	}
 
	function logout(){
		// echo "test"; die;
		$data = $this->session->sess_destroy();
		redirect(base_url('login'));
	}

}
