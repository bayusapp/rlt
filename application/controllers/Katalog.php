<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Katalog extends CI_Controller
{

  public function index()
  {
    $this->load->view('add_catalog');
  }

  public function simpan()
  {
    $nama = $this->input->post('nama_miner');
    $url = $this->input->post('url_img_miner');
    $cell = $this->input->post('cell_miner');
    $input  = array(
      'nama_miner'    => $nama,
      'url_img_miner' => $url,
      'cell_miner'    => $cell
    );
    $cek = $this->db->get_where('miner', $input)->row();
    if ($cek) {
      echo 'ada';
    } else {
      $this->db->insert('miner', $input);
      echo 'Sukses';
    }
  }
}
