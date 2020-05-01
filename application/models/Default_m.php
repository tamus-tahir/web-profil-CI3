<?php

class Default_m extends CI_Model
{

    function getAll($table, $order)
    {
        $this->db->order_by($order, "DESC");
        return $this->db->get($table);
    }

    function insert($table, $data)
    {
        $this->db->insert($table, $data);
    }

    function getWhere($table, $where)
    {
        return $this->db->get_where($table, $where);
    }

    function getWhereOrder($table, $where, $order)
    {
        $this->db->order_by($order, "DESC");
        return $this->db->get_where($table, $where);
    }

    function getPagination($table, $order, $limit, $start)
    {
        $this->db->order_by($order, 'DESC');
        return $this->db->get($table, $limit, $start);
    }

    function getWherePagination($table, $where, $order, $limit, $start)
    {
        $this->db->order_by($order, 'DESC');
        $this->db->where($where);
        return $this->db->get($table, $limit, $start);
    }

    function update($table, $where, $data)
    {
        $this->db->where($where);
        $this->db->update($table, $data);
    }

    function delete($table, $where)
    {
        $this->db->where($where);
        $this->db->delete($table);
    }

    function import_data($tabel, $data)
    {
        $this->db->insert_batch($tabel, $data);
    }

    // ======= upload =======
    public function upload($path, $type, $size, $name)
    {
        $config['upload_path']   = $path;
        $config['allowed_types'] = $type;
        $config['max_size']      = $size;
        $config['encrypt_name']  = TRUE;

        $this->load->library('upload', $config);

        if (!$this->upload->do_upload($name)) {
            $error = array('error' => $this->upload->display_errors());
            $this->session->set_flashdata('error', $error['error']);
            redirect($this->siteURL());
        } else {
            $data = $this->upload->data();
            return $data['file_name'];
        }
    }

    public function siteURL()
    {
        $protocol = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off' || $_SERVER['SERVER_PORT'] == 443) ? "https://" : "http://";
        $domainName = $_SERVER['HTTP_HOST'];
        $uri = $_SERVER['REQUEST_URI'];
        return $protocol . $domainName . $uri;
    }
    // ======= end upload =======

    // ======= join 2 table =======
    function getAllTwoTable($table1, $table2, $on, $order)
    {
        $this->db->join($table2, $on);
        $this->db->order_by($order, 'DESC');
        return $this->db->get($table1);
    }

    function getWhereTwoTable($table1, $table2, $on, $where)
    {
        $this->db->join($table2, $on);
        return $this->db->get_where($table1, $where);
    }

    function getWhereOrderTwoTable($table1, $table2, $on, $where, $order)
    {
        $this->db->join($table2, $on);
        $this->db->order_by($order, "DESC");
        return $this->db->get_where($table1, $where);
    }

    function getPaginationTwoTable($table1, $table2, $on, $order, $limit, $start)
    {
        $this->db->join($table2, $on);
        $this->db->order_by($order, 'DESC');
        return $this->db->get($table1, $limit, $start);
    }

    function getPaginationWhereTwoTable($table1, $table2, $on, $where, $order, $limit, $start)
    {
        $this->db->join($table2, $on);
        $this->db->where($where);
        $this->db->order_by($order, 'DESC');
        return $this->db->get($table1, $limit, $start);
    }
    // ======= end join 2 table =======

    // ======= join 3 table =======
    function getAllThreeTable($table1, $table2, $table3, $on1, $on2, $order)
    {
        $this->db->join($table2, $on1);
        $this->db->join($table3, $on2);
        $this->db->order_by($order, 'DESC');
        return $this->db->get($table1);
    }

    function getWhereThreeTable($table1, $table2, $table3, $on1, $on2, $where)
    {
        $this->db->join($table2, $on1);
        $this->db->join($table3, $on2);
        return $this->db->get_where($table1, $where);
    }

    function getWhereOrderThreeTable($table1, $table2, $table3, $on1, $on2, $where, $order)
    {
        $this->db->join($table2, $on1);
        $this->db->join($table3, $on2);
        $this->db->order_by($order, "DESC");
        return $this->db->get_where($table1, $where);
    }
    // ======= end join 3 table =======

    // ======= join 4 table =======
    function getAllFourTable($table1, $table2, $table3, $table4, $on1, $on2, $on3, $order)
    {
        $this->db->join($table2, $on1);
        $this->db->join($table3, $on2);
        $this->db->join($table4, $on3);
        $this->db->order_by($order, 'DESC');
        return $this->db->get($table1);
    }

    function getWhereFourTable($table1, $table2, $table3, $table4, $on1, $on2, $on3, $where)
    {
        $this->db->join($table2, $on1);
        $this->db->join($table3, $on2);
        $this->db->join($table4, $on3);
        return $this->db->get_where($table1, $where);
    }

    function getWhereOrderFourTable($table1, $table2, $table3, $table4, $on1, $on2, $on3, $where, $order)
    {
        $this->db->join($table2, $on1);
        $this->db->join($table3, $on2);
        $this->db->join($table4, $on3);
        $this->db->order_by($order, 'DESC');
        return $this->db->get_where($table1, $where);
    }
    // ======= end join 4 table =======

    // ======= join 5 table =======
    function getAllFiveTable($table1, $table2, $table3, $table4, $table5, $on1, $on2, $on3, $on4, $order)
    {
        $this->db->join($table2, $on1);
        $this->db->join($table3, $on2);
        $this->db->join($table4, $on3);
        $this->db->join($table5, $on4);
        $this->db->order_by($order, 'DESC');
        return $this->db->get($table1);
    }

    function getWhereFiveTable($table1, $table2, $table3, $table4, $table5, $on1, $on2, $on3, $on4, $where)
    {
        $this->db->join($table2, $on1);
        $this->db->join($table3, $on2);
        $this->db->join($table4, $on3);
        $this->db->join($table5, $on4);
        return $this->db->get_where($table1, $where);
    }

    function getWhereOrderFiveTable($table1, $table2, $table3, $table4, $table5, $on1, $on2, $on3, $on4, $where, $order)
    {
        $this->db->join($table2, $on1);
        $this->db->join($table3, $on2);
        $this->db->join($table4, $on3);
        $this->db->join($table5, $on4);
        $this->db->order_by($order, 'DESC');
        return $this->db->get_where($table1, $where);
    }
    // ======= end join 5 table =======

    // ======= join 6 table =======
    function getAllSixTable($table1, $table2, $table3, $table4, $table5, $table6, $on1, $on2, $on3, $on4, $on5, $order)
    {
        $this->db->join($table2, $on1);
        $this->db->join($table3, $on2);
        $this->db->join($table4, $on3);
        $this->db->join($table5, $on4);
        $this->db->join($table6, $on5);
        $this->db->order_by($order, 'DESC');
        return $this->db->get($table1);
    }

    function getWhereSixTable($table1, $table2, $table3, $table4, $table5, $table6, $on1, $on2, $on3, $on4, $on5, $where)
    {
        $this->db->join($table2, $on1);
        $this->db->join($table3, $on2);
        $this->db->join($table4, $on3);
        $this->db->join($table5, $on4);
        $this->db->join($table6, $on5);
        return $this->db->get_where($table1, $where);
    }

    function getWhereOrderSixTable($table1, $table2, $table3, $table4, $table5, $table6, $on1, $on2, $on3, $on4, $on5, $where, $order)
    {
        $this->db->join($table2, $on1);
        $this->db->join($table3, $on2);
        $this->db->join($table4, $on3);
        $this->db->join($table5, $on4);
        $this->db->join($table6, $on5);
        $this->db->order_by($order, 'DESC');
        return $this->db->get_where($table1, $where);
    }
    // ======= end join 6 table =======
}
