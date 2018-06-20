<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class MenuType {

    public $id;
    public $name;
    public $image_name;
    public $queue;

    public function __construct($id) {
        if ($id) {

            $query = "SELECT `id`,`name`,`image_name`,`queue` FROM `menu_type` WHERE `id`=" . $id;

            $db = new Database();

            $result = mysql_fetch_array($db->readQuery($query));

            $this->id = $result['id'];
            $this->name = $result['name'];
            $this->image_name = $result['image_name'];
            $this->queue = $result['queue'];


            return $this;
        }
    }

    public function create() {

        $query = "INSERT INTO `menu_type` (`name`,`image_name`) VALUES  ('"
                . $this->name . "','"
                . $this->image_name . "')";

        $db = new Database();

        $result = $db->readQuery($query);

        if ($result) {
            $last_id = mysql_insert_id();

            return $this->__construct($last_id);
        } else {
            return FALSE;
        }
    }

    public function all() {

        $query = "SELECT * FROM `menu_type` ORDER BY queue ASC";
        $db = new Database();
        $result = $db->readQuery($query);
        $array_res = array();

        while ($row = mysql_fetch_array($result)) {
            array_push($array_res, $row);
        }

        return $array_res;
    }

    public function update() {

        $query = "UPDATE  `menu_type` SET "
                . "`name` ='" . $this->name . "', "
                . "`image_name` ='" . $this->image_name . "' "
                . "WHERE `id` = '" . $this->id . "'";

        $db = new Database();

        $result = $db->readQuery($query);

        if ($result) {
            return $this->__construct($this->id);
        } else {
            return FALSE;
        }
    }

    public function delete() {

        $this->deletePhotos();

        unlink(Helper::getSitePath() . "upload/menu-type/" . $this->image_name);

        $query = 'DELETE FROM `menu_type` WHERE id="' . $this->id . '"';

        $db = new Database();

        return $db->readQuery($query);
    }

    public function deletePhotos() {

        $MENU = new Menu(NULL);

        $allPhotos = $MENU->getMenusById($this->id);

        foreach ($allPhotos as $photo) {

            $IMG = $MENU->image_name = $photo["image_name"];
            unlink(Helper::getSitePath() . "upload/menu-type/menu/" . $IMG);

            $MENU->id = $photo["id"];
            $MENU->delete();
        }
    }

    public function arrange($key, $img) {
        $query = "UPDATE `menu_type` SET `queue` = '" . $key . "'  WHERE id = '" . $img . "'";
        $db = new Database();
        $result = $db->readQuery($query);
        return $result;
    }

}
