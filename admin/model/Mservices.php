<?php
class service{
    public function __construct()
    {
        global $db;
        $this->db=$db;
    }


    function addservice($data){
        $sql=$this->db->query("INSERT INTO services_cat (title,text,status,sort) VALUES ('$data[title]','$data[text]','$data[status]','$data[sort]')");
    }

    public function listservice(){
        $sql=$this->db->query("SELECT * FROM services_cat");
        $result=$sql->fetchAll(PDO::FETCH_ASSOC);
        return $result;

    }
    public function deleteser($id){
        $this->db->query("delete from services_cat WHERE id = '$id'");
        //header('location:index.php?c=admin&a=dashbord&m=menu&p=list');

    }
    public function showeditser($id){
        $sql=$this->db->query("SELECT * FROM services_cat WHERE id='$id'");
        $result=$sql->fetch(PDO::FETCH_ASSOC);
        return $result;
    }
    public function editser($data,$id){
        $this->db->query("UPDATE services_cat SET title='$data[title]',text='$data[text]',sort='$data[sort]',status='$data[status]' WHERE id='$id'");
        //header('location:index.php?c=admin&a=dashbord&m=menu&p=list');
    }



}
