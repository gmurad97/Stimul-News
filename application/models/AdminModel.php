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
        return $this->db->order_by(self::PARTNERS_ID_NAME, "DESC")->get(self::PARTNERS_TABLE_NAME)->result_array();
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

    /*=====CATEGORIES MODEL - START=====*/
    private const CATEGORIES_TABLE_NAME = "categories";
    private const CATEGORIES_ID_NAME = "c_uid";

    public function categories_admin_db_insert($data)
    {
        $this->db->insert(self::CATEGORIES_TABLE_NAME, $data);
    }

    public function categories_admin_db_get_results()
    {
        return $this->db->order_by(self::CATEGORIES_ID_NAME, "DESC")->get(self::CATEGORIES_TABLE_NAME)->result_array();
    }

    public function categories_admin_db_get($id)
    {
        return $this->db->where(self::CATEGORIES_ID_NAME, $id)->get(self::CATEGORIES_TABLE_NAME)->row_array();
    }

    public function categories_admin_db_update($id, $data)
    {
        $this->db->update(self::CATEGORIES_TABLE_NAME, $data, self::CATEGORIES_ID_NAME . "=" . $id);
    }

    public function categories_admin_db_delete($id)
    {
        $this->db->delete(self::CATEGORIES_TABLE_NAME, self::CATEGORIES_ID_NAME . "=" . $id);
    }
    /*=====CATEGORIES MODEL - ENDED=====*/

    /*=====NEWS MODEL - START=====*/
    private const NEWS_TABLE_NAME = "news";
    private const NEWS_ID_NAME = "n_uid";

    public function news_admin_db_insert($data)
    {
        $this->db->insert(self::NEWS_TABLE_NAME, $data);
    }

    public function news_admin_db_get_results()
    {
        return $this->db->order_by(self::NEWS_ID_NAME, "DESC")->get(self::NEWS_TABLE_NAME)->result_array();
    }

    public function news_admin_db_get($id)
    {
        return $this->db->where(self::NEWS_ID_NAME, $id)->get(self::NEWS_TABLE_NAME)->row_array();
    }

    public function news_admin_db_update($id, $data)
    {
        $this->db->update(self::NEWS_TABLE_NAME, $data, self::NEWS_ID_NAME . "=" . $id);
    }

    public function news_admin_db_delete($id)
    {
        $this->db->delete(self::NEWS_TABLE_NAME, self::NEWS_ID_NAME . "=" . $id);
    }
    /*=====NEWS MODEL - ENDED=====*/

    /*=====NEWS MODEL - START=====*/
    private const SUBSCRIBERS_TABLE_NAME = "subscribers";
    private const SUBSCRIBERS_ID_NAME = "s_uid";

    public function subscribers_admin_db_insert($data)
    {
        $this->db->insert(self::SUBSCRIBERS_TABLE_NAME, $data);
    }

    public function subscribers_admin_db_get_results()
    {
        return $this->db->order_by(self::SUBSCRIBERS_ID_NAME, "DESC")->get(self::SUBSCRIBERS_TABLE_NAME)->result_array();
    }

    public function subscribers_admin_db_get($id)
    {
        return $this->db->where(self::SUBSCRIBERS_ID_NAME, $id)->get(self::SUBSCRIBERS_TABLE_NAME)->row_array();
    }

    public function subscribers_admin_db_update($id, $data)
    {
        $this->db->update(self::SUBSCRIBERS_TABLE_NAME, $data, self::SUBSCRIBERS_ID_NAME . "=" . $id);
    }

    public function subscribers_admin_db_delete($id)
    {
        $this->db->delete(self::SUBSCRIBERS_TABLE_NAME, self::SUBSCRIBERS_ID_NAME . "=" . $id);
    }
    /*=====NEWS MODEL - ENDED=====*/

    /*=====SLIDER MODEL - START=====*/
    private const SLIDER_TABLE_NAME = "slider";
    private const SLIDER_ID_NAME = "s_uid";

    public function slider_admin_db_insert($data)
    {
        $this->db->insert(self::SLIDER_TABLE_NAME, $data);
    }

    public function slider_admin_db_get_results()
    {
        return $this->db->order_by(self::SLIDER_ID_NAME, "DESC")->get(self::SLIDER_TABLE_NAME)->result_array();
    }

    public function slider_admin_db_get($id)
    {
        return $this->db->where(self::SLIDER_ID_NAME, $id)->get(self::SLIDER_TABLE_NAME)->row_array();
    }

    public function slider_admin_db_update($id, $data)
    {
        $this->db->update(self::SLIDER_TABLE_NAME, $data, self::SLIDER_ID_NAME . "=" . $id);
    }

    public function slider_admin_db_delete($id)
    {
        $this->db->delete(self::SLIDER_TABLE_NAME, self::SLIDER_ID_NAME . "=" . $id);
    }
    /*=====SLIDER MODEL - ENDED=====*/

    /*=====CONTACTS MODEL - START=====*/
    private const CONTACTS_TABLE_NAME = "contacts";
    private const CONTACTS_ID_NAME = "c_uid";

    public function contacts_admin_db_insert($data)
    {
        $this->db->insert(self::CONTACTS_TABLE_NAME, $data);
    }

    public function contacts_admin_db_get($id)
    {
        return $this->db->where(self::CONTACTS_ID_NAME, $id)->get(self::CONTACTS_TABLE_NAME, 1)->row_array();
    }

    public function contacts_admin_db_edit($id, $data)
    {
        $this->db->update(self::CONTACTS_TABLE_NAME, $data, self::CONTACTS_ID_NAME . "=" . $id);
    }

    public function contacts_admin_db_delete($id)
    {
        $this->db->delete(self::CONTACTS_TABLE_NAME, self::CONTACTS_ID_NAME . "=" . $id);
    }
    /*=====CONTACTS MODEL - ENDED=====*/
    
    /*=====GALLERY MODEL - START=====*/
    private const GALLERY_TABLE_NAME = "gallery";
    private const GALLERY_ID_NAME = "g_uid";

    public function gallery_admin_db_insert($data)
    {
        $this->db->insert(self::GALLERY_TABLE_NAME, $data);
    }

    public function gallery_admin_db_get($id)
    {
        return $this->db->where(self::GALLERY_ID_NAME, $id)->get(self::GALLERY_TABLE_NAME, 1)->row_array();
    }

    public function gallery_admin_db_get_results()
    {
        return $this->db->order_by(self::GALLERY_ID_NAME, "DESC")->get(self::GALLERY_TABLE_NAME)->result_array();
    }

    public function gallery_admin_db_edit($id, $data)
    {
        $this->db->update(self::GALLERY_TABLE_NAME, $data, self::GALLERY_ID_NAME . "=" . $id);
    }

    public function gallery_admin_db_delete($id)
    {
        $this->db->delete(self::GALLERY_TABLE_NAME, self::GALLERY_ID_NAME . "=" . $id);
    }
    /*=====GALLERY MODEL - ENDED=====*/
}
    /*==========CRUD MODEL - ENDED==========*/