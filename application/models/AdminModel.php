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
    private const TOPBAR_ID_NAME = "t_uid";

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
    private const BRANDING_TABLE_NAME = "branding";
    private const BRANDING_ID_NAME = "b_uid";

    public function branding_admin_db_insert($data)
    {
        $this->db->insert(self::BRANDING_TABLE_NAME, $data);
    }

    public function branding_admin_db_get($id)
    {
        return $this->db->where(self::BRANDING_ID_NAME, $id)->get(self::BRANDING_TABLE_NAME, 1)->row_array();
    }

    public function branding_admin_db_update($id, $data)
    {
        $this->db->update(self::BRANDING_TABLE_NAME, $data, self::BRANDING_ID_NAME . "=" . $id);
    }

    public function branding_admin_db_delete($id)
    {
        $this->db->delete(self::BRANDING_TABLE_NAME, self::BRANDING_ID_NAME . "=" . $id);
    }
    /*=====BRANDING MODEL - ENDED=====*/

    /*=====PARTNERS MODEL - START=====*/
    private const PARTNERS_TABLE_NAME = "partners";
    private const PARTNERS_ID_NAME = "p_uid";

    public function partners_admin_db_insert($data)
    {
        $this->db->insert(self::PARTNERS_TABLE_NAME, $data);
    }

    public function partners_admin_db_get_results()
    {
        return $this->db->get(self::PARTNERS_TABLE_NAME)->result_array();
    }

    public function partners_admin_db_get($id)
    {
        return $this->db->where(self::PARTNERS_ID_NAME, $id)->get(self::PARTNERS_TABLE_NAME)->row_array();
    }

    public function partners_admin_db_update($id, $data)
    {
        $this->db->update(self::PARTNERS_TABLE_NAME, $data, self::PARTNERS_ID_NAME . "=" . $id);
    }

    public function partners_admin_db_delete($id)
    {
        $this->db->delete("partners", self::PARTNERS_ID_NAME . "=" . $id);
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