<?php
class member{
    public function __construct()
    {
        global $db;
        $this->db=$db;
    }


    function addmember($data){
        $sql=$this->db->query("INSERT INTO admin_tbl (name,lastname,username,password,role) VALUES ('$data[name]','$data[lname]','$data[username]','$data[password]','$data[role]')");
    }

    public function listmember(){
        $sql=$this->db->query("SELECT * FROM admin_tbl");
        $result=$sql->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }

    public function deletmember($id){
        $this->db->query("delete from admin_tbl WHERE id = '$id'");
        echo "<a href='index.php?c=admin&a=dashbord&m=member&p=list'>با موفقیت حذف شد </a>";
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
