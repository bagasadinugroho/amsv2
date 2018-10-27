<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MData extends CI_Model {

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
		// $data = $this->db->get("asset.asset_master");
		// $this->db->select('id_master, name_asset, sn, model, status');
		// $data = $this->db->get('asset.asset_master');
		// var_dump($data->result()); exit;
		
		$data = $this->db->query("SELECT *
			FROM asset.asset_master, asset.asset_status
			WHERE asset_master.status = asset_status.kode AND asset_master.status='1'" );
			// AND t_m_user.b_active = true');
		//Query Biasa
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

	public function delete($where,$data)
	{
		$this->db->where($where);
		$this->db->delete($data);
		// $this->db->delete('asset.asset_master', array('id_master' => $id_master));
		return true;
	}
}
