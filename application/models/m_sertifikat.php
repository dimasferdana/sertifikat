<?php
defined('BASEPATH') or exit('No direct script access allowed');

class m_sertifikat extends CI_Model
{

    function tampil_kelas(){
        return $this->db->query('SELECT id,judul FROM kelas')->result();
        
    }
    function cari_data($nosertif,$idkelas){
        return $this->db->query("select s.no_sertif,m.nama,k.judul from sertifikat as s INNER JOIN member as m on m.id=s.id_member INNER join kelas as k on k.id=s.id_kelas  WHERE s.no_sertif='$nosertif' or s.id_kelas='$idkelas'")->result();
    }
}