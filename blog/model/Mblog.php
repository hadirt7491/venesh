<?php
class blog{
    public function __construct()
    {
        global $db;
        $this->db=$db;
    }
    public function listproadmin(){
        $sql=$this->db->query("SELECT * FROM product_tbl where status='1'");
        $result=$sql->fetchAll(PDO::FETCH_ASSOC);
        return $result;

    }
    public function menu_list(){
        $results=$this->db->query("SELECT * FROM menu_tbl where status='1' order by sort");
        return $results;
    }
    public function select_article($id){
        $sql=$this->db->query("SELECT * FROM articles_tbl WHERE id='$id'");
        $result=$sql->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }
    public function list_customer(){
        $sql=$this->db->query("SELECT * FROM customer_tbl");
        $result=$sql->fetchAll(PDO::FETCH_ASSOC);
        return $result;

    }
    public function select_articleCat(){
        $sql=$this->db->query("SELECT * FROM article_cat");
        $result=$sql->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }
    public function select_last(){
        $sql=$this->db->query("SELECT *FROM articles_tbl ORDER BY id DESC LIMIT 3");
        $result=$sql->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }
    public function select_posts($id,$page){
        $start=($page-1)*5;
        $sql=$this->db->query("SELECT * FROM articles_tbl WHERE category='$id' LIMIT ".$start.','.'5');
        $result=$sql->fetchAll(PDO::FETCH_ASSOC);
        return $result;

    }
    public function select_AllPosts($page){
        $start=($page-1)*5;
        $sql=$this->db->query("SELECT * FROM articles_tbl LIMIT ".$start.','.'5');
        $result=$sql->fetchAll(PDO::FETCH_ASSOC);
        return $result;

    }

    public function select_search($page,$s){
        $start=($page-1)*5;
        $sql=$this->db->query("SELECT * FROM articles_tbl WHERE title LIKE '%$s%' LIMIT ".$start.','.'5');
        $result=$sql->fetchAll(PDO::FETCH_ASSOC);
        return $result;

    }
    public function count()
    {
        $sql=$this->db->query("SELECT COUNT(id) FROM articles_tbl");
        $result=$sql->fetchAll(PDO::FETCH_ASSOC);
        return $result;

    }
    public function countId($id)
    {
        $sql=$this->db->query("SELECT COUNT(id) FROM articles_tbl WHERE category='$id'");
        $result=$sql->fetchAll(PDO::FETCH_ASSOC);
        return $result;

    }

}
