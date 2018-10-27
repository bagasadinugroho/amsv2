<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class vendor extends CI_Controller {

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
		$this->load->model('MVendor');

		if($this->session->userdata('status') != "login"){
			redirect(base_url("login"));
		}
	}

	public function index()
	{
		$this->load->view('body/header');
		$this->load->view('body/navbar');
		$this->load->view('body/sidebar');
		$this->load->view('vendor');
		$this->load->view('body/footer');
    }

    public function registrasi(){
		// $id = $this->MVendor->getIdRegister()->lastval;
		// var_dump($id); exit;
		$data = array(
		'name_vendor' => $this->input->post('name_vendor'),
        'address' => $this->input->post('address')
        );
		$hasil = $this->MVendor->doRegister($data);
		if ($hasil) {
			echo "
			<script>	
			alert('Sebuah vendor berhasil ditambahkan ke sistem.');
				document.location.href='".base_url('datavendor')."';
			</script>
			";			
		}
	}
}
