<?php
function addFlow($data)
{
    $connection = config();
    $sql = "INSERT INTO work_tbl (title,text,status,parent,sort) VALUES ('$data[title]','$data[txt]','$data[status]','$data[parent]','$data[sort]')";
    mysqli_query($connection, $sql);
}

function listwork_flow()
{
    $connection = config();
    $sql = "SELECT * FROM work_tbl";
    $row = mysqli_query($connection, $sql);
    while ($res = mysqli_fetch_assoc($row)) {
        $result[] = $res;
    }
    return $result;
}

function deletework_flow($id)
{
    $connection = config();
    $sql = "DELETE FROM work_tbl WHERE id='$id'";
    $row = mysqli_query($connection, $sql);
}

function showeditwork($id)
{
    $connection = config();
    $sql = "SELECT * FROM work_tbl WHERE id='$id'";
    $row = mysqli_query($connection, $sql);
    $res = mysqli_fetch_assoc($row);
    return $res;
}

function editwork($data, $id)
{
    $connection = config();
    $sql = "UPDATE work_tbl SET title='$data[title]',text='$data[txt]',status='$data[status]',parent='$data[parent]',sort='$data[sort]' WHERE id='$id'";
    mysqli_query($connection, $sql);
}
function listworkdefault(){
    $connection=config();
    $sql="SELECT * FROM work_tbl WHERE status='1' AND parent='1' ORDER BY sort ASC";
    $row=mysqli_query($connection,$sql);
    while($res=mysqli_fetch_assoc($row)){
        $result[]=$res;
    }
    return $result;
}