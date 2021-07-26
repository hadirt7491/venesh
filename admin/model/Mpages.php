<?php
class page{
    public function __construct()
    {
        global $db;
        $this->db=$db;
    }


    function addPage($data){
        $sql=$this->db->query("INSERT INTO pages_tbl (title,label,slug,body) VALUES ('$data[title]','$data[label]','$data[slug]','$data[editor1]')");
    }

    public function select_pages(){
        $sql=$this->db->query("SELECT * FROM pages_tbl");
        $result=$sql->fetchAll(PDO::FETCH_ASSOC);
        return $result;

    }
    public function delete_menu($id){
        $this->db->query("delete from pages_tbl WHERE id = '$id'");
        //header('location:index.php?c=admin&a=dashbord&m=menu&p=list');

    }
    public function show_edit($id){
        $sql=$this->db->query("SELECT * FROM pages_tbl WHERE id='$id'");
        $result=$sql->fetch(PDO::FETCH_ASSOC);
        return $result;
    }
    public function edit_menu($data,$id){
        $this->db->query("UPDATE pages_tbl SET title='$data[title]',label='$data[label]',slug='$data[slug]',body='$data[editor1]' WHERE id='$id'");
        //header('location:index.php?c=admin&a=dashbord&m=menu&p=list');
    }



}
