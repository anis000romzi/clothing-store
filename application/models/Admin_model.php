<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin_model extends CI_Model
{
    public function getSubMenu($menu_id)
    {
        $query = "SELECT `user_sub_menu`.*, `user_menu`.`menu` 
                    FROM `user_sub_menu` JOIN `user_menu`
                      ON `user_sub_menu`.`menu_id` = `user_menu`.`id`
                   WHERE `user_sub_menu`.`menu_id` = $menu_id";

        return $this->db->query($query)->result_array();
    }

    public function getUser()
    {
        $query = "SELECT `user`.*, `user_role`.`role` 
                    FROM `user` JOIN `user_role`
                      ON `user`.`role_id` = `user_role`.`id`
                ORDER BY `user`.`id` ASC";

        return $this->db->query($query)->result_array();
    }

    public function getUserById($user_id)
    {
        $query = "SELECT `user`.*, `user_role`.`role` 
                    FROM `user` JOIN `user_role`
                      ON `user`.`role_id` = `user_role`.`id`
                   WHERE `user`.`id` != $user_id";

        return $this->db->query($query)->result_array();
    }

    public function getClothing()
    {
        $query = "SELECT `clothing`.*, `type`.`type` 
                    FROM `clothing` JOIN `type`
                      ON `clothing`.`type_id` = `type`.`id`
                ORDER BY `clothing`.`id` ASC";

        return $this->db->query($query)->result_array();
    }

    public function getClothingById($item_id)
    {
        $query = "SELECT `clothing`.*, `type`.`type` 
                    FROM `clothing` JOIN `type`
                      ON `clothing`.`type_id` = `type`.`id`
                   WHERE `clothing`.`id` = $item_id";

        return $this->db->query($query)->row_array();
    }
}
