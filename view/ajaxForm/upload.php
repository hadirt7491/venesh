<?php
$servername='localhost';
$username='root';
$password='';
$dbname = "cms";
$conn=mysqli_connect($servername,$username,$password,"$dbname");
if(!$conn){
    die('Could not Connect MySql Server:' .mysql_error());
}


$name = mysqli_real_escape_string($conn, $_POST['name']);
$email = mysqli_real_escape_string($conn, $_POST['email']);
$mobile = mysqli_real_escape_string($conn, $_POST['mobile']);
if(mysqli_query($conn, "INSERT INTO contact_us(fname, lname, comment) VALUES('" . $name . "', '" . $email . "', '" . $mobile . "')")) {
    echo '1';
} else {
    echo "Error: " . $sql . "" . mysqli_error($conn);
}
mysqli_close($conn);
?>