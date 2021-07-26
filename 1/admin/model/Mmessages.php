<?php
class message{
    public function __construct()
    {
        global $db;
        $this->db=$db;
    }

    public function select_message(){
        $sql=$this->db->query("SELECT * FROM messages");
        $result=$sql->fetchAll(PDO::FETCH_ASSOC);
        return $result;

    }

}
