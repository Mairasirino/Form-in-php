<?php 
include_once('conn.php');
$id=$_GET['id'];
$url=$_GET['url'];
$delete="DELETE FROM cadastro2 WHERE id = '".$id."'";
mysqli_query($conn, $delete);
print unlink("$url");
print "<meta HTTP-EQUIV='Refresh' CONTENT='0;URL=form3.php'>";
?>