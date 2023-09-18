<?php
defined('BASEPATH') or exit('No direct script access allowed');

class AdminModel extends CI_Model
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

    /*=====TOPBAR MODEL - START=====*/
    private const TOPBAR_TABLE_NAME = "topbar";
    private const TOPBAR_ID_NAME = "t_id";

    public function topbar_admin_db_insert($data)
    {
        $this->db->insert(self::TOPBAR_TABLE_NAME, $data);
    }

    public function topbar_admin_db_get($id)
    {
        return $this->db->where(self::TOPBAR_ID_NAME, $id)->get(self::TOPBAR_TABLE_NAME, 1)->row_array();
    }

    public function topbar_admin_db_edit($id, $data)
    {
        $this->db->update(self::TOPBAR_TABLE_NAME, $data, self::TOPBAR_ID_NAME . "=" . $id);
    }

    public function topbar_admin_db_delete($id)
    {
        $this->db->delete(self::TOPBAR_TABLE_NAME, self::TOPBAR_ID_NAME . "=" . $id);
    }
    /*=====TOPBAR MODEL - ENDED=====*/

    /*=====BRANDING MODEL - START=====*/
    public function branding_admin_db_insert($data)
    {
        $this->db->insert("branding", $data);
    }

    public function branding_admin_db_get($id)
    {
        return $this->db->where("b_id", $id)->get("branding", 1)->row_array();
    }

    public function branding_admin_db_update($id, $data)
    {
        $this->db->where("b_id", $id)->update("branding", $data);
    }

    public function branding_admin_db_delete($id)
    {
        $this->db->where("b_id", $id)->delete("branding");
    }
    /*=====BRANDING MODEL - ENDED=====*/

    /*=====PARTNERS MODEL - START=====*/
    public function partners_admin_db_insert($data)
    {
        $this->db->insert("partners", $data);
    }

    public function partners_admin_db_get_results()
    {
        return $this->db->get("partners")->result_array();
    }

    public function partners_admin_db_get($id)
    {
        return $this->db->where("p_id", $id)->get("partners")->row_array();
    }

    public function partners_admin_db_update($id, $data)
    {
        $this->db->where("p_id", $id)->update("partners", $data);
    }

    public function partners_admin_db_delete($id)
    {
        $this->db->where("p_id", $id)->delete("partners");
    }

    /*=====PARTNERS MODEL - ENDED=====*/








    /*=====PARTNERS MODEL - START=====*/
    public function categories_admin_db_insert($data)
    {
        $this->db->insert("categories", $data);
    }

    public function categories_admin_db_get_results()
    {
        return $this->db->get("categories")->result_array();
    }

    public function categories_admin_db_get($id)
    {
        return $this->db->where("c_id", $id)->get("categories")->row_array();
    }

    public function categories_admin_db_update($id, $data)
    {
        $this->db->where("c_id", $id)->update("categories", $data);
    }

    public function categories_admin_db_delete($id)
    {
        $this->db->where("c_id", $id)->delete("categories");
    }

    /*=====PARTNERS MODEL - ENDED=====*/
}
    /*==========CRUD MODEL - ENDED==========*/