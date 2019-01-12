<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MDeployed extends CI_Model {

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

	// public function getData()
	// {
	// 	$data = $this->db->query("SELECT *
	// 		FROM asset.asset_master, asset.asset_status
	// 		WHERE asset_master.status = asset_status.kode AND asset_master.status = '2'" );
	// 	return $data->result();
	// }

	public function update($data,$where)
    {
		$this->db->set($data);
		$this->db->where($where);
		$this->db->update('asset.asset_master');
		// $data=$this->db->update('asset.asset_master',$data,$where);
		// var_dump($data); exit;
        return true;
	}
	public function getData()
	{
		$this->db->select ( '*' ); 
		$this->db->from ( 'asset.asset_master' );
		$this->db->join ( 'asset.asset_status', 'asset_status.kode = asset_master.status' , 'right' );
		$this->db->join ( 'asset.asset_transaction', 'asset_transaction.id_master = asset_master.id_master' , 'right' );
		$data = $this->db->get ();
		// var_dump($data); die;
		return $data->result ();
	}
	public function getChart()
	{
		$data = $this->db->query('SELECT location, COUNT (*) as jumlah FROM asset.asset_transaction group by location');
		return $data->result();
	}
	public function getGrafik()
	{
		$data = $this->db->query("SELECT asset_status.keterangan, COUNT (*) as jumlah FROM asset.asset_master LEFT JOIN asset.asset_status
		on asset_master.status=asset_status.kode 
		WHERE asset_master.status in ('1','5','2') group by asset_status.keterangan");
		return $data->result();
	}
}
