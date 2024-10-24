<?php
require_once 'models/role_model.php';
session_start();

$obj_Role = new modelRole();

if (isset($_GET['modul'])) {
    $modul = $_GET['modul'];
}else{
    $modul = 'dashboard';
}

switch ($modul) {
    case 'dashboard' :
        include 'views/kosong.php';
        break;
    case 'role' :
        if (isset($_GET['fitur'])) {
            $fitur = $_GET['fitur'];
        }else{
            $fitur = null;
        }
        switch ($fitur) {
            case 'add' :
                $role_name = $_POST['role_name'];
                $role_desc = $_POST['role_desc'];
                $role_status = $_POST['role_status'];
                $obj_Role->addRole($role_name, $role_desc, $role_status);
                header('location: index.php?modul=role');
                break;
            default:
            $roles = $obj_Role->getAllRoles();
            include 'views/role_list.php';
        }
        break;
}
?>