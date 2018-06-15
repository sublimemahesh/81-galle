<?php

include_once(dirname(__FILE__) . '/../../class/include.php');

if (isset($_POST['create'])) {

    $MENU_TYPE = new MenuType(NULL);
    $VALID = new Validator();

    $MENU_TYPE->name = mysql_real_escape_string($_POST['name']);

    $VALID->check($MENU_TYPE, [
        'name' => ['required' => TRUE],
    ]);

    if ($VALID->passed()) {
        $MENU_TYPE->create();

        if (!isset($_SESSION)) {
            session_start();
        }
        $VALID->addError("Your data was saved successfully", 'success');
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

if (isset($_POST['update'])) {

    $MENU_TYPE = new MenuType(NULL);

    $MENU_TYPE->id = $_POST['id'];
    $MENU_TYPE->name = mysql_real_escape_string($_POST['name']);


    $VALID = new Validator();
    $VALID->check($MENU_TYPE, [
        'name' => ['required' => TRUE],
    ]);

    if ($VALID->passed()) {
        $MENU_TYPE->update();

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
