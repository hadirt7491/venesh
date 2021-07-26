<?php
class category{
    public function __construct()
    {
        global $db;
        $this->db=$db;
    }


    function addcat($data){
        $sql=$this->db->query("INSERT INTO article_cat (title,status,sort) VALUES ('$data[title]','$data[status]','$data[sort]')");
    }

    public function listcat(){
        $sql=$this->db->query("SELECT * FROM article_cat");
        $result=$sql->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }

    public function deletecat($id){
        $this->db->query("delete from article_cat WHERE id = '$id'");
        echo "<a href='index.php?c=admin&a=dashbord&m=product_cat&p=list'>با موفقیت حذف شد </a>";
        //header('location:index.php?c=admin&a=dashbord&m=menu&p=list');

    }
    public function showeditcat($id){
        $sql=$this->db->query("SELECT * FROM article_cat WHERE id='$id'");
        $result=$sql->fetch(PDO::FETCH_ASSOC);
        return $result;
    }
    public function editcat($data,$id){
        $this->db->query("UPDATE article_cat SET title='$data[title]',sort='$data[sort]',status='$data[status]' WHERE id='$id'");
        //header('location:index.php?c=admin&a=dashbord&m=menu&p=list');
    }



}
