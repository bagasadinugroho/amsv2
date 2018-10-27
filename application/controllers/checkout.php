<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class checkout extends CI_Controller {

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
		$this->load->model('MCheckout');
		$this->load->model('MData');

		if($this->session->userdata('status') != "login"){
			redirect(base_url("login"));
		}
	}

	public function index($id_master)
	{
        
    }

	public function checkout_asset($id_master)
    {
        $this->load->view('body/header');
		$this->load->view('body/navbar');
		$this->load->view('body/sidebar');
		$data['asset'] = $this->MCheckout->pilih_asset($id_master);
		$data['stasiun'] = $this->MCheckout->getStasiun();
        $this->load->view('checkout',$data);
        $this->load->view('body/footer');
    }

    public function proses_checkout()
    {
        $id = $this->MNew->getIdRegister()->nextval;
        $data = array(
			'id_master' => $this->input->post('id_master'),
			'name_asset' => $this->input->post('name_asset'),
			'ticket' => $this->input->post('ticket'),
			'checkout_date' => $this->input->post('checkout_date'),
			'note' => $this->input->post('note'),
			'location' => $this->input->post('location')
			);
		$hasil = $this->MCheckout->doCheckout($data);
		// $id_master=$this->uri->segment(3);
		$status='2';
		$where = array ('id_master' => $this->input->post('id_master'));
        $data = array ('status' => $status);
		// var_dump($where); die;
		$hasil1=$this->MData->update($data, $where);
		// var_dump($hasil1); die;
        if ($hasil && $hasil1) {
			echo "
			<script>	
			alert('Sebuah asset baru berhasil dicheckout');
				document.location.href='".base_url('deployed')."';
			</script>
			";			
		}
	}
	
}
