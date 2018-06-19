<?php

include_once(dirname(__FILE__) . '/../../class/include.php');

if (isset($_POST['create'])) {

    $MENU = new Menu(NULL);
    $VALID = new Validator();

    $MENU->type = mysql_real_escape_string($_POST['type']);
    $MENU->name = mysql_real_escape_string($_POST['name']);
    $MENU->price = mysql_real_escape_string($_POST['price']);
    $MENU->description = mysql_real_escape_string($_POST['description']);

    $dir_dest = '../../upload/menu/';

    $handle = new Upload($_FILES['image_name']);

    $imgName = null;

    if ($handle->uploaded) {
        $handle->image_resize = true;
        $handle->file_new_name_ext = 'jpg';
        $handle->image_ratio_crop = 'C';
        $handle->file_new_name_body = Helper::randamId();
        $handle->image_x = 900;
        $handle->image_y = 500;

        $handle->Process($dir_dest);

        if ($handle->processed) {
            $info = getimagesize($handle->file_dst_pathname);
            $imgName = $handle->file_dst_name;
        }
    }

    $MENU->image_name = $imgName;

    $VALID->check($MENU, [
        'type' => ['required' => TRUE],
        'name' => ['required' => TRUE],
        'image_name' => ['required' => TRUE],
        'description' => ['required' => TRUE],
        'price' => ['required' => TRUE],
    ]);

    if ($VALID->passed()) {
        $MENU->create();

        if (!isset($_SESSION)) {
            session_start();
        }
        $VALID->addError("Your data was saved successfully", 'success');
        $_SESSION['ERRORS'] = $VALID->errors();
        header("location: ../view-menu.php?id=" . $MENU->id);
    } else {

        if (!isset($_SESSION)) {
            session_start();
        }

        $_SESSION['ERRORS'] = $VALID->errors();

        header('Location: ' . $_SERVER['HTTP_REFERER']);
    }
}

if (isset($_POST['update'])) {
    $dir_dest = '../../upload/menu/';

    $handle = new Upload($_FILES['image_name']);

    $imgName = null;

    if ($handle->uploaded) {
        $handle->image_resize = true;
        $handle->file_new_name_body = TRUE;
        $handle->file_overwrite = TRUE;
        $handle->file_new_name_ext = FALSE;
        $handle->image_ratio_crop = 'C';
        $handle->file_new_name_body = $_POST ["oldImageName"];
        $handle->image_x = 900;
        $handle->image_y = 500;

        $handle->Process($dir_dest);

        if ($handle->processed) {
            $info = getimagesize($handle->file_dst_pathname);
            $imgName = $handle->file_dst_name;
        }
    }
    $MENU = new Menu(NULL);

    $MENU->id = $_POST['id'];
    $MENU->type = $_POST['type'];
    $MENU->image_name = $_POST['oldImageName'];
    $MENU->name = mysql_real_escape_string($_POST['name']);
    $MENU->price = mysql_real_escape_string($_POST['price']);
    $MENU->description = mysql_real_escape_string($_POST['description']);



    $VALID = new Validator();
    $VALID->check($MENU, [
        'type' => ['required' => TRUE],
        'name' => ['required' => TRUE],
        'description' => ['required' => TRUE],
        'price' => ['required' => TRUE],
        'price' => ['required' => TRUE],
        'image_name' => ['required' => TRUE]
    ]);

    if ($VALID->passed()) {
        $MENU->update();

        if (!isset($_SESSION)) {
            session_start();
        }
        $VALID->addError("Your changes saved successfully", 'success');
        $_SESSION['ERRORS'] = $VALID->errors();

        header('Location: ' . $_SERVER['HTTP_REFERER']);
    } else {

        if (!isset($_SESSION)) {
            session_start();
        }

        $_SESSION['ERRORS'] = $VALID->errors();

        header('Location: ' . $_SERVER['HTTP_REFERER']);
    }
}
if (isset($_POST['save-data'])) {

    foreach ($_POST['sort'] as $key => $img) {
        $key = $key + 1;

        $MENU = Menu::arrange($key, $img);

        header('Location: ' . $_SERVER['HTTP_REFERER']);
    }
}