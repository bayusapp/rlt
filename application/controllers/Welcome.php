<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Welcome extends CI_Controller
{

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
	 * @see https://codeigniter.com/userguide3/general/urls.html
	 */
	public function index()
	{
		// $this->load->view('welcome_message');
		// $data['data'] = $this->db->select('*')->from('daftar_miner')->order_by('power_miner', 'desc')->get()->result();
		$query = $this->db->query('SELECT miner.nama_miner, miner.url_img_miner, miner.cell_miner, daftar_miner.lvl_miner, daftar_miner.power_miner, daftar_miner.bonus_power FROM daftar_miner JOIN miner ON daftar_miner.id_miner = miner.id_miner ORDER BY daftar_miner.power_miner DESC')->result();
		$data['data']	= $query;
		$this->load->view('view_rlt', $data);
	}
}
