<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MBroken extends CI_Model {

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

	public function getData()
	{
		$data = $this->db->query("SELECT *
			FROM asset.asset_master, asset.asset_status
			WHERE asset_master.status = asset_status.kode AND asset_master.status = '5'" );
		return $data->result();
	}

	public function update($data,$where)
    {
		$this->db->set($data);
		$this->db->where($where);
		$this->db->update('asset.asset_master');
		// $data=$this->db->update('asset.asset_master',$data,$where);
		// var_dump($data); exit;
        return true;
	}
}
