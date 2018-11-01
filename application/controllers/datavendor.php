<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class datavendor extends CI_Controller {

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
		$this->load->model('MDatavendor');
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
		$data['data'] = $this->MDatavendor->getData();
		$this->load->view('datavendor',$data);
		$this->load->view('body/footer');
	}
	
	// <--Delete data dari DB-->
    // public function delete()
	// {
	// 	$id_vendor=$this->uri->segment(3);
	// 	$where = array ('id_vendor' => $id_vendor);
	// 	$hasil=$this->MData->delete($where,'asset.asset_vendor');
	// 	if($hasil) {
	// 		echo "
	// 		<script>
	// 		alert('Sebuah vendor berhasil dihapus');
	// 			document.location.href='".base_url('datavendor')."';
	// 		</script>
	// 		";
	// 	}
	// }

	public function delete()
	{
		$id_vendor=$this->uri->segment(3);
		// var_dump($id_master); exit;
		$status='6';
		$where = array ('id_vendor' => $id_vendor);
        $data = array ('status' => $status
		);
		// var_dump($data); die;
        $hasil=$this->MDatavendor->proses_edit($data, $where);
        if($hasil) {
            echo "
			<script>	
			alert('Sebuah vendor berhasil dihapus');
				document.location.href='".base_url('datavendor')."';
			</script>
			";
        }
	}

	public function registrasi(){
		// $id = $this->MNew->getIdRegister()->nextval;
		// var_dump($id); exit;
		$data = array(
		'name_vendor' => $this->input->post('name_vendor'),
		'address' => $this->input->post('address'),
		'status' => 4
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

	public function proses_edit()
    {
        $id_vendor=$_POST['id_vendor'];
        $name_vendor=$_POST['name_vendor'];
        $address=$_POST['address'];
        $where = array ('id_vendor' => $id_vendor);
        $data = array ('id_vendor' => $id_vendor,
        'name_vendor' => $name_vendor,
        'address' => $address
        );
        $hasil=$this->MDatavendor->proses_edit($data, $where);
        if($hasil) {
            echo "
			<script>	
			alert('Sebuah vendor berhasil diupdate');
				document.location.href='".base_url('datavendor')."';
			</script>
			";
        }
	}
}
