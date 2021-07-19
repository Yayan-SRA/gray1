<?php

class Hotel_Model extends CI_Model
{

    public function get_kamar()
    {
        $data = $this->db->get('kamar');
        return $data;
    }
    public function get_fasilitas()
    {
        $data = $this->db->get('fasilitas');
        return $data;
    }
    public function get_ballroom()
    {
        $data = $this->db->get('ballroom');
        return $data;
    }
    public function get_pemesanan()
    {
        return $this->db->get('pemesanan')->result_array();
    }
}
