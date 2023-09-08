<?php
defined('BASEPATH') or exit('No direct script access allowed');

class AdminModel extends CI_Model
{
    /*=====GLOBAL MODEL - START=====*/

    public function table_row_id($table){
        return $this->db->count_all_results($table);
    }

    /*=====GLOBAL MODEL - ENDED=====*/


    /*=====TOPBAR MODEL - START=====*/
    public function topbar_data_insert($data)
    {
        $this->db->insert("topbar",$data);
    }

    /*=====TOPBAR MODEL - ENDED=====*/
}
