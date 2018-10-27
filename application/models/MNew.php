<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MNew extends CI_Model {

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

	public function doRegister($data)
	{
		return $this->db->insert("asset.asset_master",$data);
		// var_dump($data); exit;
	}

	public function getIdRegister()
	{
		$data = $this->db->query("select nextval('asset.asset_master_id_master_seq')");
		// var_dump($data->row()); exit;
		return $data->row();
	}

	public function getVendor()
	{
		$stasiun = $this->db->get("asset.asset_vendor");
		return $stasiun->result();
	}
}
