<?php
defined('BASEPATH') or exit('No direct script access allowed');

class sertifikat extends CI_Controller
{
    public function index()
    {
        $this->load->model("m_sertifikat");
        $nosertif = $this->input->post('nosertif');
        $idkelas = $this->input->post('id_kelas');

        $data['kelas'] = $this->m_sertifikat->tampil_kelas(); 
        $data['pencarian'] = $this->m_sertifikat->cari_data($nosertif,$idkelas);
        $this->load->view("v_sertifikat",$data);
    }
}