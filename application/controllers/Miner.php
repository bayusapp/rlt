<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Miner extends CI_Controller
{

  public function index()
  {
    $data['data'] = $this->db->get('miner')->result();
    $this->load->view('add_miner', $data);
  }

  public function simpan()
  {
    $id_miner     = $this->input->post('id_miner');
    $lvl_miner    = $this->input->post('lvl_miner');
    $power_miner  = $this->input->post('power_miner');
    $bonus_power  = $this->input->post('bonus_power');
    $input  = array(
      'id_miner'    => $id_miner,
      'lvl_miner'   => $lvl_miner,
      'power_miner' => $power_miner,
      'bonus_power' => $bonus_power
    );
    $this->db->insert('daftar_miner', $input);
    echo 'Sukses';
  }
}
