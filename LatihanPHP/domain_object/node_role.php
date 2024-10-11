<?php

class Role {
    public $role_id;
    public $role_name;
    public $role_desc;
    public $role_status;

    public function __construct($id, $name, $desc, $status){
        $this->role_name = $name;
        $this->role_id = $id;
        $this->role_desc = $desc;
        $this->role_status = $status;
    }
}

?>