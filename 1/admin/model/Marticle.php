<?php
class article{
    private $id;
    private  $Title;
    private  $Description;
    private  $Author;
    private  $CreatedOn;
    private  $listcat;
    private  $to;
    private  $oldpic;


    function setId($id){$this->id=$id;}
    function getId(){return $this->id;}
    function setTitle($title){$this->Title=$title;}
    function getTitle(){return $this->title;}
    function setDescription($description){$this->Description=$description;}
    function getDescription(){return $this->Description;}
    function setAuthor($author){$this->Author=$author;}
    function getAuthor(){return $this->Author;}
    function setCreatedOn($createdOn){$this->CreatedOn=$createdOn;}
    function getCreatedOn(){return $this->CreatedOn;}
    function setlistcat($listcat){$this->listcat=$listcat;}
    function getlistcat(){return $this->listcat;}
    function setTo($to){$this->to=$to;}
    function getTo(){return $this->to;}
    function setOldpic($oldpic){$this->oldpic=$oldpic;}
    function getOldpic(){return $this->oldpic;}


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

    public function save()
    {
        $sql=$this->db->query("INSERT INTO articles_tbl (id,title,description,author,createdOn,category,img) VALUES (null,'$this->Title','$this->Description','$this->Author','$this->CreatedOn','$this->listcat','$this->to')");
    }
    public function listcat(){
        $sql=$this->db->query("SELECT * FROM article_cat");
        $result=$sql->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }

    function select_article(){
        $sql=$this->db->query("SELECT * FROM articles_tbl");
        $result=$sql->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }
    public function delete_article($id){
        $this->db->query("delete from articles_tbl WHERE id = '$id'");
        //header('location:index.php?c=admin&a=dashbord&m=menu&p=list');

    }
    public function showedit_article($id){
        $sql=$this->db->query("SELECT * FROM articles_tbl WHERE id='$id'");
        $result=$sql->fetch(PDO::FETCH_ASSOC);
        return $result;
    }
    function selectCat($catid){
        $sql=$this->db->query("SELECT * FROM article_cat WHERE id=$catid");
        $result=$sql->fetch(PDO::FETCH_ASSOC);
        return $result['title'];
    }

    function edit_article($id){
        if($_FILES['img']['name']!=''){
            $a=explode("/",$this->oldpic);
            $total=count($a);
            $folder=$a[$total-2];
            $pic=$this->uploader('img',"../public/articles/",$folder,"article");
        }
        else{
            $pic=$this->oldpic;
        }
        $this->db->query("UPDATE articles_tbl SET title='$this->Title',description='$this->Description',author='$this->Author',category='$this->listcat',img='$pic' WHERE id='$id'");
    }

}