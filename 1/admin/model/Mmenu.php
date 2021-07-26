<?php
class menu{
    public function __construct()
    {
        global $db;
        $this->db=$db;
    }


    function addmenu($data){
        $sql=$this->db->query("INSERT INTO menu_tbl (title,url,status,chid,sort) VALUES ('$data[title]','$data[url]','$data[status]','$data[parent]','$data[sort]')");
    }

    public function select_menu(){
        $sql=$this->db->query("SELECT * FROM menu_tbl  order by sort asc ");
        $result=$sql->fetchAll(PDO::FETCH_ASSOC);
        return $result;

    }
    public function delete_menu($id){
        $this->db->query("delete from menu_tbl WHERE id = '$id'");
        //header('location:index.php?c=admin&a=dashbord&m=menu&p=list');

    }
    public function show_edit($id){
        $sql=$this->db->query("SELECT * FROM menu_tbl WHERE id='$id'");
        $result=$sql->fetch(PDO::FETCH_ASSOC);
        return $result;
    }
    public function edit_menu($data,$id){
        $this->db->query("UPDATE menu_tbl SET title='$data[title]',url='$data[url]',sort='$data[sort]',chid='$data[parent]',status='$data[status]' WHERE id='$id'");
        //header('location:index.php?c=admin&a=dashbord&m=menu&p=list');
    }



}
