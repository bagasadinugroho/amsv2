<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MCheckout extends CI_Model {

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

	public function getStasiun()
	{
		$this->db->order_by('location_name', 'ASC');
		$stasiun = $this->db->get("asset.asset_location");
		return $stasiun->result();
	}

	public function pilih_asset($id_master)
    {
        $data=$this->db->get_where('asset.asset_master', array('id_master'=>$id_master));
		// var_dump($data->row()); exit;
		return $data->row_array();
    }

    public function doCheckout($data)
	{
		return $this->db->insert("asset.asset_transaction",$data);
		// var_dump($data); exit;
    }
    
    public function getIdRegister()
	{
		$data = $this->db->query("select nextval('asset.asset_transaction_id_transaction_seq')");
		// var_dump($data->row()); exit;
		return $data->row();
	}


}
