<?php
$id=$_GET['id'];
deletework_flow($id);
header("location:dashbord.php?m=work-flow&p=list");
?>