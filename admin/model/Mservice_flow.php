<?php
class serviceflow{
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

    function addflow($data,$img){
        $sql=$this->db->query("INSERT INTO services_tbl (icon,title,text,status,parent,sort) VALUES ('$img','$data[title]','$data[txt]','$data[status]','$data[parent]','$data[sort]')");
    }



    public function listServiceFlow(){
        $sql=$this->db->query("SELECT * FROM services_tbl order by sort asc");
        $result=$sql->fetchAll(PDO::FETCH_ASSOC);
        return $result;

    }


    public function deleteServiceFlow($id){
        $this->db->query("delete from services_tbl WHERE id = '$id'");
        //header('location:index.php?c=admin&a=dashbord&m=menu&p=list');

    }
    public function showeditser($id){
        $sql=$this->db->query("SELECT * FROM services_tbl WHERE id='$id'");
        $result=$sql->fetch(PDO::FETCH_ASSOC);
        return $result;
    }

    function editService($data,$id,$img,$oldpic){
        $class=new serviceflow();
        if($_FILES[$img]['name']!=''){
            $a=explode("/",$oldpic);
            $total=count($a);
            $folder=$a[$total-2];
            $pic=$class->uploader($img,"../public/services/",$folder,"service");
        }
        else{
            $pic=$oldpic;
        }
        $this->db->query("UPDATE services_tbl SET icon='$pic',title='$data[title]',text='$data[txt]',status='$data[status]',parent='$data[parent]',sort='$data[sort]' WHERE id='$id'");
    }


}
