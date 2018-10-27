<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class deployed extends CI_Controller {

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
		$this->load->model('MDeployed');
		$this->load->model('MNew');

		if($this->session->userdata('status') != "login"){
			redirect(base_url("login"));
		}
	}

	public function index()
	{
		$this->load->view('body/header');
		$this->load->view('body/navbar');
		$this->load->view('body/sidebar');
		$data['data'] = $this->MDeployed->getData();
		$data['vendor'] = $this->MNew->getVendor();
		$this->load->view('deployed',$data);
		$this->load->view('body/footer');
	}

	public function broken()
	{
		$id_master=$this->uri->segment(3);
		// var_dump($id_master); exit;
		$status='5';
		$where = array ('id_master' => $id_master);
        $data = array ('status' => $status
		);
		// var_dump($data); die;
        $hasil=$this->MDeployed->update($data, $where);
        if($hasil) {
            echo "
			<script>	
			alert('Sayang sekali, sebuah asset berubah status menjadi rusak.');
				document.location.href='".base_url('data')."';
			</script>
			";
        }
	}
}
