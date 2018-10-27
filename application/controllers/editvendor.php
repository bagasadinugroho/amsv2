<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class editvendor extends CI_Controller {

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
		$this->load->model('MEditvendor');

		if($this->session->userdata('status') != "login"){
			redirect(base_url("login"));
		}
	}

	public function index($id_vendor)
	{
        
    }

	public function edit_vendor($id_vendor)
    {
        $this->load->view('body/header');
		$this->load->view('body/navbar');
		$this->load->view('body/sidebar');
        $data['vendor'] = $this->MEditvendor->pilih_vendor($id_vendor);
        $this->load->view('editvendor',$data);
        $this->load->view('body/footer');
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
        $hasil=$this->MEditvendor->proses_edit($data, $where);
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
