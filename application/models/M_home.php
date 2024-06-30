<?php
/*
	This Script was created by Annash ZM
	annash.muhendra@gmail.com
 */
class M_home extends CI_Model
{

    function __construct()
	{
		parent::__construct();
	}

    function getData($table, $where = '', $result){
        if ($where !== ''){
            $this->db->where($where);
        }

        if ($result == 'row'){
            return $this->db->get($table)->row_array();
        }
        else {
            return $this->db->get($table)->result();
        }
    }

    function saveNewData($data){

    }
}