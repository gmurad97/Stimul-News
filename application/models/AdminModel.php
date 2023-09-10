<?php
defined('BASEPATH') or exit('No direct script access allowed');

class AdminModel extends CI_Model
{
    /*=====GLOBAL MODEL - START=====*/

    public function table_row_id($tableName, $idName)
    {
        $rows_count = $this->db->count_all_results($tableName, TRUE);
        if ($rows_count === 1) {
            return $this->db->get($tableName, 1)->row_array()[$idName];
        } else if ($rows_count > 1) {
            return $this->db->order_by($idName, "DESC")->get($tableName, 1)->row_array()[$idName];
        } else {
            return -1;
        }
    }

    /*=====GLOBAL MODEL - ENDED=====*/



    /*=====CRUD MODEL - START=====*/

    /*=====TOPBAR MODEL - START=====*/

    public function topbar_admin_db_insert($data)
    {
        $this->db->insert("topbar", $data);
    }

    public function topbar_admin_db_get($id)
    {
        return $this->db->where("t_id", $id)->get("topbar")->row_array();
    }

    public function topbar_admin_db_edit($id, $data)
    {
        $this->db->where("t_id", $id)->update("topbar", $data);
    }

    public function topbar_admin_db_delete($id)
    {
        $this->db->where("t_id", $id)->delete("topbar");
    }

    /*=====TOPBAR MODEL - ENDED=====*/
}

    /*=====CRUD MODEL - ENDED=====*/