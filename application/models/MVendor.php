<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MVendor extends CI_Model {

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
		return $this->db->insert("asset.asset_vendor",$data);
		// var_dump($data); exit;
	}

	public function getIdRegister()
	{
		$data = $this->db->query("select nextval('asset.asset_vendor_id_vendor_seq')");
		// var_dump($data->row()); exit;
		return $data->row();
	}
}
