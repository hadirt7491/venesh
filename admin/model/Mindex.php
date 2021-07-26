<?php
class main{
    public function __construct()
    {
        global $db;
        $this->db=$db;
    }
        public function lists(){
        echo "s";
        $results=$this->db->query("SELECT * FROM menu_tbl");
        return $results;
    }
//    public function menu_list(){
//        $results=$this->db->query("SELECT * FROM menu_tbl where status='1'");
//        return $results;
//    }
//    public function listservice(){
//        $sql=$this->db->query("SELECT * FROM services_cat where status='1'");
//        $result=$sql->fetchAll(PDO::FETCH_ASSOC);
//        return $result;
//
//    }
//    public function listproadmin(){
//        $sql=$this->db->query("SELECT * FROM product_tbl where status='1'");
//        $result=$sql->fetchAll(PDO::FETCH_ASSOC);
//        return $result;
//
//    }
//
//    public function listServiceFlow(){
//        $sql=$this->db->query("SELECT * FROM services_tbl where status='1'");
//        $result=$sql->fetchAll(PDO::FETCH_ASSOC);
//        return $result;
//
//    }
//    public function list_customer(){
//        $sql=$this->db->query("SELECT * FROM customer_tbl");
//        $result=$sql->fetchAll(PDO::FETCH_ASSOC);
//        return $result;
//
//    }


}