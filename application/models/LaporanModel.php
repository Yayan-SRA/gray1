<?php

class LaporanModel extends CI_Model
{

    public function get()
    {
        return $this->db->get('laporan')->result_array();
    }
}
