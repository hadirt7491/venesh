<?php
class admin{
    public function __construct()
    {
        global $db;
        $this->db=$db;
    }

    public function select_admin($username){
        $sql=$this->db->query("SELECT * FROM admin_tbl WHERE username='$username'");
        $result=$sql->fetch(PDO::FETCH_ASSOC);
        return $result;

    }

}