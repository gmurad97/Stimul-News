<?php
defined('BASEPATH') or exit('No direct script access allowed');

class UserModel extends CI_Model
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

    public function topbar_user_db_get($id)
    {
        return $this->db->where("t_uid", $id)->get("topbar")->row_array();
    }

    public function branding_user_db_get($id)
    {
        return $this->db->where("b_uid", $id)->get("branding")->row_array();
    }

    public function categories_user_db_get($limit)
    {
        return $this->db->order_by("c_uid", "DESC")->where("c_status", 1)->get("categories", $limit)->result_array();
    }

    public function slider_user_db_get()
    {
        return $this->db->order_by("s_uid", "DESC")->where("s_status", 1)->get("slider")->result_array();
    }

    public function news_user_db_get($limit)
    {
        return $this->db->order_by("n_uid", "DESC")
            ->where("n_status", 1)
            ->join("categories", "c_uid=n_category_uid", "left")
            ->get("news", $limit)
            ->result_array();
    }

    public function partners_user_db_get()
    {
        return $this->db->order_by("p_uid", "DESC")->where("p_status", 1)->get("partners")->result_array();
    }
}
