<?php
class customer{
    public function __construct()
    {
        global $db;
        $this->db=$db;
    }
    function uploader($file,$dir,$folder,$name){
        $file=$_FILES[$file];
        if(!file_exists($folder)){
            mkdir($dir.$folder);
        }
        $filename=$file['name'];
        $array=explode(".",$filename);
        $ext=end($array);
        $newname=$name."-".rand().".".$ext;
        $from=$file['tmp_name'];
        $to=$dir.$folder."/".$newname;
        move_uploaded_file($from,$to);
        return $to;
    }

    function add_customer($data,$img){
        echo $data['title'];
        $sql=$this->db->query("INSERT INTO customer_tbl (name,img) VALUES ('$data[title]','$img')");
    }


    public function list_customer(){
        $sql=$this->db->query("SELECT * FROM customer_tbl");
        $result=$sql->fetchAll(PDO::FETCH_ASSOC);
        return $result;

    }

    public function delete_customer($id){
        $this->db->query("delete from customer_tbl WHERE id = '$id'");
        //header('location:index.php?c=admin&a=dashbord&m=menu&p=list');

    }
    public function showedit_customer($id){
        $sql=$this->db->query("SELECT * FROM customer_tbl WHERE id='$id'");
        $result=$sql->fetch(PDO::FETCH_ASSOC);
        return $result;
    }

    function edit_customer($data,$id,$img,$oldpic){
        $class=new customer();
        if($_FILES[$img]['name']!=''){
            $a=explode("/",$oldpic);
            $total=count($a);
            $folder=$a[$total-2];
            $pic=$class->uploader($img,"../public/customers/",$folder,"customer");
        }
        else{
            $pic=$oldpic;
        }
        $this->db->query("UPDATE customer_tbl SET name='$data[title]',img='$pic' WHERE id='$id'");
    }


}
