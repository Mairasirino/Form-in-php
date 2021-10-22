<?php 
// no botão delete.php?id=valor&url=valor
include_once('conn.php');
//Recupera o id e a imagem que é passado pelo botão 
$id=$_GET['id'];
$url=$_GET['url'];
$delete="DELETE FROM cadastro2 WHERE id = '".$id."'";
//query que deleta
mysqli_query($conn, $delete);
//apaga a imagem na pasta
print unlink("$url");
//volta para pagina anterior
print "<meta HTTP-EQUIV='Refresh' CONTENT='0;URL=form3.php'>";
?>
 
