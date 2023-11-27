<?php
defined('BASEPATH') or exit('No direct script access allowed');

class UserModel extends CI_Model
{
    /*==========GLOBAL MODEL - START==========*/
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
    /*==========GLOBAL MODEL - ENDED==========*/

    /*==========CRUD MODEL - START==========*/
    public function topbar_user_db_get()
    {
        return $this->db
            ->order_by("t_uid", "DESC")
            ->get("topbar", 1)
            ->row_array();
    }

    public function branding_user_db_get()
    {
        return $this->db
            ->order_by("b_uid", "DESC")
            ->get("branding", 1)
            ->row_array();
    }

    public function categories_user_db_get($limit = NULL)
    {
        return $this->db
            ->order_by("c_uid", "DESC")
            ->get_where("categories", "c_status=" . TRUE, $limit)
            ->result_array();
    }

    public function slider_user_db_get()
    {
        return $this->db
            ->order_by("s_uid", "DESC")
            ->get_where("slider", "s_status=" . TRUE)
            ->result_array();
    }

    public function news_user_db_get($limit = NULL)
    {
        return $this->db
            ->order_by("n_uid", "DESC")
            ->join("categories", "c_uid = n_category_uid", "left")
            ->get_where("news", "n_status=" . TRUE, $limit)
            ->result_array();
    }

    public function news_pagination_user_db_get($limit, $offset, $n_category_uid = NULL)
    {
        if ($n_category_uid) {
            return $this->db
                ->order_by("n_uid", "DESC")
                ->join("categories", "c_uid = n_category_uid", "left")
                ->limit($limit, $offset)
                ->where("n_status", TRUE)
                ->where("c_uid", $n_category_uid)
                ->get("news")
                ->result_array();
        } else {
            return $this->db
                ->order_by("n_uid", "DESC")
                ->join("categories", "c_uid = n_category_uid", "left")
                ->limit($limit, $offset)
                ->where("n_status", TRUE)
                ->get("news")
                ->result_array();
        }
    }

    public function news_count_user_db_get($category_uid = NULL)
    {
        if ($category_uid) {
            return $this->db
                ->where('n_category_uid', $category_uid)
                ->where('n_status', TRUE)
                ->from('news')
                ->count_all_results();
        } else {
            return $this->db
                ->where('n_status', TRUE)
                ->from('news')
                ->count_all_results();
        }
    }

    public function partners_user_db_get()
    {
        return $this->db
            ->order_by("p_uid", "DESC")
            ->get_where("partners", "p_status=" . TRUE)
            ->result_array();
    }

    public function contacts_user_db_get()
    {
        return $this->db
            ->order_by("c_uid", "DESC")
            ->get("contacts", 1)
            ->row_array();
    }

    public function subscribers_user_db_insert($data)
    {
        $this->db
            ->insert("subscribers", $data);
    }

    public function subscribers_user_db_update($id, $data)
    {
        return $this->db
            ->where("s_uid", $id)
            ->update("subscribers", $data);
    }

    public function subscribers_user_db_get()
    {
        return $this->db
            ->get("subscribers")->result_array();
    }

    public function about_user_db_get()
    {
        return $this->db
            ->order_by("a_uid", "DESC")
            ->get("about", 1)
            ->row_array();
    }

    public function news_single_db_get($id)
    {
        return $this->db
            ->join("categories", "c_uid = n_category_uid", "left")
            ->where("n_uid", $id)
            ->get("news")
            ->row_array();
    }

    public function settings_db_get()
    {
        return $this->db
            ->order_by("s_uid", "DESC")
            ->get("settings", 1)
            ->row_array();
    }
    /*==========CRUD MODEL - ENDED==========*/
}
