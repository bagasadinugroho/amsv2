<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class data extends CI_Controller {

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
		$this->load->model('MData');
		$this->load->model('MNew');
		$this->load->model('MEdit');
		$this->load->model('MCheckout');

		if($this->session->userdata('status') != "login"){
			redirect(base_url("login"));
		}
	}

	public function index()
	{
		$this->load->view('body/header');
		$this->load->view('body/navbar');
		$this->load->view('body/sidebar');
		$data['data'] = $this->MData->getData();
		$data['vendor'] = $this->MNew->getVendor();
		$data['stasiun'] = $this->MCheckout->getStasiun();
		$this->load->view('data',$data);
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
        $hasil=$this->MData->update($data, $where);
        if($hasil) {
            echo "
			<script>	
			alert('Sayang sekali, sebuah asset berubah status menjadi rusak.');
				document.location.href='".base_url('data')."';
			</script>
			";
        }
	}

	// <--Script delete data di DB-->
	// public function delete()
	// {
	// 	$id_master=$this->uri->segment(3);
	// 	$where = array ('id_master' => $id_master);
	// 	$hasil=$this->MData->delete($where,'asset.asset_master');
	// 	if($hasil) {
	// 		echo "
	// 		<script>
	// 		alert('Sebuah asset berhasil dihapus');
	// 			document.location.href='".base_url('CData')."';
	// 		</script>
	// 		";
	// 	}
	// }

	public function delete()
	{
		$id_master=$this->uri->segment(3);
		// var_dump($id_master); exit;
		$status='3';
		$where = array ('id_master' => $id_master);
        $data = array ('status' => $status
		);
		// var_dump($data); die;
        $hasil=$this->MData->update($data, $where);
        if($hasil) {
            echo "
			<script>	
			alert('Sebuah asset berhasil dihapus');
				document.location.href='".base_url('data')."';
			</script>
			";
        }
	}

	public function proses_edit()
    {
        $id_master=$_POST['id_master'];
        $name_asset=$_POST['name_asset'];
        $sn=$_POST['sn'];
        $merk=$_POST['merk'];
        $model=$_POST['model'];
        $purchasing_date=$_POST['purchasing_date'];
        $status=$_POST['status'];
        $supplier=$_POST['supplier'];
        $attachment=$_POST['attachment'];
        $where = array ('id_master' => $id_master);
        $data = array ('id_master' => $id_master,
        'name_asset' => $name_asset,
        'sn' => $sn,
        'merk' => $merk,
        'model' => $model,
        'purchasing_date' => $purchasing_date,
        'status' => $status,
        'supplier' => $supplier,
        'attachment' => $attachment,
        );
        $hasil=$this->MEdit->proses_edit($data, $where);
        if($hasil) {
            echo "
			<script>	
			alert('Sebuah asset berhasil diupdate');
				document.location.href='".base_url('data')."';
			</script>
			";
        }
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
