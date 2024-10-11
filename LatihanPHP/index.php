<?php
require_once('domain_object/node_role.php');

$objRole = [];
$objRole[] = new Role(1,"super admin","mengatur admin",1);
$objRole[] = new Role(2,"admin","mengatur kasir",0);
$objRole[] = new Role(3,"kasir","mengatur uang",1);
$objRole[] = new Role(4,"customer","beli barang",1);

include ('views/role_list.php')
?>