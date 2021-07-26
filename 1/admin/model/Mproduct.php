<?php
class product{
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

    function addpro($data,$img){
        $date=jdate('y/m/d');
        $sql=$this->db->query("INSERT INTO product_tbl (title,text,procat,img,status,createdOn) VALUES ('$data[title]','$data[text]','$data[procat]','$img','$data[status]','$date')");
    }

    public function procat(){
        $sql=$this->db->query("SELECT * FROM product_cat");
        $result=$sql->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }



    public function listproadmin(){
        $sql=$this->db->query("SELECT * FROM product_tbl");
        $result=$sql->fetchAll(PDO::FETCH_ASSOC);
        return $result;

    }

    function selectProCat($catid){
        $sql=$this->db->query("SELECT * FROM product_cat WHERE id=$catid");
        $result=$sql->fetch(PDO::FETCH_ASSOC);
        return $result['title'];
    }


    public function deletepro($id){
        $this->db->query("delete from product_tbl WHERE id = '$id'");
        //header('location:index.php?c=admin&a=dashbord&m=menu&p=list');

    }
    public function showeditpro($id){
        $sql=$this->db->query("SELECT * FROM product_tbl WHERE id='$id'");
        $result=$sql->fetch(PDO::FETCH_ASSOC);
        return $result;
    }

    function editpro($data,$id,$img,$oldpic){
        $class=new product();
        if($_FILES[$img]['name']!=''){
            $a=explode("/",$oldpic);
            $total=count($a);
            $folder=$a[$total-2];
            $pic=$class->uploader($img,"../public/products/",$folder,"product");
        }
        else{
            $pic=$oldpic;
        }
        $this->db->query("UPDATE product_tbl SET title='$data[title]',text='$data[text]',procat='$data[procat]',img='$pic',status='$data[status]' WHERE id='$id'");
    }


}
