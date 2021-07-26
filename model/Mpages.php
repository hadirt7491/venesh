<?php
class page{
    public function __construct()
    {
        global $db;
        $this->db=$db;
    }
    public function menu_list(){
        $results=$this->db->query("SELECT * FROM menu_tbl where status='1' order by sort");
        return $results;
    }
    public function list_customer(){
        $sql=$this->db->query("SELECT * FROM customer_tbl");
        $result=$sql->fetchAll(PDO::FETCH_ASSOC);
        return $result;

    }
    public function listproadmin(){
        $sql=$this->db->query("SELECT * FROM product_tbl where status='1'");
        $result=$sql->fetchAll(PDO::FETCH_ASSOC);
        return $result;

    }

    function select_page($data){
        $sql=$this->db->query("SELECT * FROM pages_tbl where slug='$data'");
        $result=$sql->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }


}
