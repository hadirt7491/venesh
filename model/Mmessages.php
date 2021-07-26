<?php
class message{
    public function __construct()
    {
        global $db;
        $this->db=$db;
    }

    function addmessage($data){

        $sql=$this->db->query("INSERT INTO messages (name,email,subject,text) VALUES ('$data[name]','$data[email]','$data[subject]','$data[text]')");
    }


}
