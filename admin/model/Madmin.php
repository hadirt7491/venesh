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


    public function lists(){
        $results=$this->db->query("SELECT * FROM admin_tbl");
        return $results;
    }
    function addmenu($data){
        $sql=$this->db->query("INSERT INTO admin_tbl (title,url,status,chid,sort) VALUES ('$data[title]','$data[url]','$data[status]','$data[parent]','$data[sort]')");
    }
    public function delete_menu($id){
        $this->db->query("delete from admin_tbl WHERE id = '$id'");
        //header('location:index.php?c=admin&a=dashbord&m=menu&p=list');

    }


}