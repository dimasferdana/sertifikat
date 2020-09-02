<?php
defined('BASEPATH') or exit('No direct script access allowed');

class sertifikat extends CI_Controller
{
    public function index()
    {

        $this->load->model("m_sertifikat");
        $nosertif = $this->input->post('nosertif');
        $idkelas = $this->input->post('id_kelas');
        $kelas = array_merge($this->m_sertifikat->tampil_kelas(), $this->m_sertifikat->tampil_kelas_alumni());
        $data['kelas'] = $kelas;
        if (preg_match('/[A-Za-z]/', $nosertif)) {
            $nosertif = explode("/", $nosertif);
            $data['pencarian'] = $this->m_sertifikat->cari_data_sertif_alumni($nosertif[0], $idkelas);
        } else {
            $data['pencarian'] = $this->m_sertifikat->cari_data($nosertif, $idkelas);
        }

        $this->load->view("v_sertifikat", $data);
    }
}
