<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MEdit extends CI_Model {

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

	public function pilih_asset($id_master)
    {
        $data=$this->db->get_where('asset.asset_master', array('id_master'=>$id_master));
		// var_dump($data->row()); exit;
		return $data->row_array();
    }
    public function proses_edit($data,$where)
    {
		$data=$this->db->update('asset.asset_master',$data,$where);
		// var_dump($data); exit;
        return true;
	}
}
