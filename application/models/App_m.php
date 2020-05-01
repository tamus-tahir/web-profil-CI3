<?php

class App_m extends CI_Model
{

    function getBeritaHome()
    {
        $this->db->limit(3);
        $this->db->order_by('id_berita', 'DESC');
        return $this->db->get('tabel_berita');
    }

    function getCrew($table, $order)
    {
        $this->db->order_by($order, "ASC");
        return $this->db->get($table);
    }
}
