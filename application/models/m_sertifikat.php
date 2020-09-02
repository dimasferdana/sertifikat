<?php
defined('BASEPATH') or exit('No direct script access allowed');

class m_sertifikat extends CI_Model
{
    function __construct(){
        parent::__construct();
        $this->db2 = $this->load->database('second', TRUE);
    }

    function tampil_kelas(){
        return $this->db->query('SELECT id,judul FROM kelas')->result_array();
        
    }
    function tampil_kelas_alumni(){
        return $this->db2->query('SELECT id,judul FROM tema')->result_array();
        
    }
    function cari_data($nosertif,$idkelas){
        return $this->db->query("select s.no_sertif,m.nama,k.judul from sertifikat as s INNER JOIN member as m on m.id=s.id_member INNER join kelas as k on k.id=s.id_kelas  WHERE s.no_sertif='$nosertif' or s.id_kelas='$idkelas'")->result_array();
    }
    function cari_data_sertif_alumni($nosertif,$idkelas){
        return $this->db2->query("select s.no_sertif,m.nama,k.judul from sertifikat_global as s INNER JOIN alumni as m on m.id=s.id_alumni INNER join tema as k on k.id=s.id_tema  WHERE s.no_sertif='$nosertif' or s.id_tema='$idkelas'")->result_array();
    }
}