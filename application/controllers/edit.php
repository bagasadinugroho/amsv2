<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class edit extends CI_Controller {

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
        $this->load->model('MEdit');
        
        if($this->session->userdata('status') != "login"){
			redirect(base_url("login"));
		}
	}

	public function index($id_master)
	{
        
    }

	public function edit_asset($id_master)
    {
        $this->load->view('body/header');
		$this->load->view('body/navbar');
		$this->load->view('body/sidebar');
        $data['asset'] = $this->MEdit->pilih_asset($id_master);
        $this->load->view('edit',$data);
        $this->load->view('body/footer');
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
}
