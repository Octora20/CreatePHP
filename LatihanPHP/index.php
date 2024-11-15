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
            case 'delete' :
                if (isset ($_GET['role_id'])) {
                    $role_id = $_GET ['role_id'];
                    $obj_Role->deleteRole($role_id);
                }
                header('location: index.php?modul=role');
                break;
            case 'update' :
                if (isset($_GET['role_id'])) {
                    $role_id = $_GET['role_id'];
                    $role = $obj_Role->getRoleById($role_id);
                    print_r($role);
                }
                include 'views/role_edit.php';
                break;
            case 'edit' :
                if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                    
                    $role_name = $_POST['role_name'];
                    $role_desc = $_POST['role_desc'];
                    $role_status = $_POST['role_status'];
                    $obj_Role->updateRole($role_id, $role_name, $role_desc, $role_status);
                    print_r($obj_Role->getAllRoles());
                    // header('location: index.php?modul=role');
                    exit;
                } else {
                        include 'views/role_list.php';
                }
                break;
            default:
            $roles = $obj_Role->getAllRoles();
            include 'views/role_list.php';
        }
        break;
}
?>