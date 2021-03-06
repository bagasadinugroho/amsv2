<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class api extends CI_Controller {

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
	}

	public function index()
	{   
		if($this->session->userdata('status') != "login"){
			redirect(base_url("login"));
		}
		
        $chart = $this->MDeployed->getChart();
        // print_r($chart);
        echo json_encode($chart);
	}
	
	public function grafik()
	{   
		if($this->session->userdata('status') != "login"){
			redirect(base_url("login"));
		}
		
        $grafik = $this->MDeployed->getGrafik();
        // print_r($chart);
        echo json_encode($grafik);
	}
}