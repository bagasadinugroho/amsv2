<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class dashboard extends CI_Controller {

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
		$this->load->model('MDashboard');

		if($this->session->userdata('status') != "login"){
			redirect(base_url("login"));
		}
	}


	public function index()
	{
		$this->load->view('body/header');
		$this->load->view('body/navbar');
		$this->load->view('body/sidebar');
		$data['all'] = $this->MDashboard->getCount();
		$data['ready'] = $this->MDashboard->getReady();
		$data['deployed'] = $this->MDashboard->getDeployed();
		$data['broken'] = $this->MDashboard->getBroken();
		$data['chart'] = $this->MDashboard->getChart();
		$this->load->view('dashboard',$data);
		$this->load->view('body/footer');
    }
}