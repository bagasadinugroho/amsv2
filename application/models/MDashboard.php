<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MDashboard extends CI_Model {

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
    public function getChart()
    {
        $chart = $this->db->query('SELECT COUNT (*) FROM asset.asset_transaction GROUP BY location');
        // var_dump($count); die;
        return $chart;
    }

    public function getCount()
    {
        $count = $this->db->count_all_results('asset.asset_master');
        // var_dump($count); die;
        return $count;
    }

    public function getReady()
    {
        $this->db->where('asset_master.status', '1');
        $this->db->from('asset.asset_master');
        $count = $this->db->count_all_results();
        // var_dump($count); die;
        return $count;
    }

    public function getDeployed()
    {
        $this->db->where('asset_master.status', '2');
        $this->db->from('asset.asset_master');
        $count = $this->db->count_all_results();
        // var_dump($count); die;
        return $count;
    }

    public function getBroken()
    {
        $this->db->where('asset_master.status', '5');
        $this->db->from('asset.asset_master');
        $count = $this->db->count_all_results();
        // var_dump($count); die;
        return $count;
    }
}
