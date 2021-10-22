<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<title>Formulário</title>
	</head>
<body>
<?php
include_once('conn.php');
include_once('biblioteca.php');
	  // Cria uma variável que terá os dados do erro
     $mensagem_erro = "";
	 $erro=0;
    // Cria variaveis para receber os dados do formulário
	$id=$_POST["id"];
	$area="";
	$destino="";
	$nome = $_POST["nome"];
	$CPF= verifica($_POST["cpf"]);
	$endereco = $_POST["endereco"];
    $cidade=$_POST["cidade"];
    $estado=$_POST["uf"];
	$url=$_POST["arquivo"];
	
	//verifica se o arquivo foi enviado
	if(isset($_FILES['arquivo2'] ['name']) && $_FILES["arquivo2"]["error"]==0){
		$arquivo_tmp=$_FILES['arquivo2']['tmp_name'];
        $nomeImage=$_FILES['arquivo2']['name'];
    //pega a extenção
    $extensao= pathinfo($nomeImage, PATHINFO_EXTENSION);
    //converte a extesao para minusculo
	$extensao= strtolower($extensao);
	if(strstr('.jpg;.jpeg;.gif;.png', $extensao)){
		//cria um nome unico que duplique a imagem e evita nome com acento e caractere alfa numérico
		$novoNome= uniqid(time()).'.'.$extensao;
		//concatena a pasta com o nome
		$destino = 'imagens/'.$novoNome;
		//tenta mover o arquivo para o destino
		if($_FILES["arquivo2"]["type"] == "image/jpeg"){
		@move_uploaded_file($arquivo_tmp, $destino);
		}
		elseif($_FILES["arquivo2"]["type"] == "image/gif"){
		@move_uploaded_file($arquivo_tmp, $destino);
		}
		elseif($_FILES["arquivo2"]["type"] == "image/png"){
		@move_uploaded_file($arquivo_tmp, $destino);
		}
		else {
		$mensagem_erro = "Erro ao salvar imagem";
	}}else{
		$mensagem_erro = "Apenas arquivos .jpg .jpeg .gif .png <br>";
	}
	print unlink("$url");
	}else{
		$destino=$url;
		
	}
	    $cargo=$_POST["cargo"];
	if(!empty($_POST["computacao"])){
		$area=$area.$_POST["computacao"];
	}
	if(!empty($_POST["biologia"])){
		$area=$area.$_POST["biologia"];
	}
	if(!empty($_POST["meio_ambiente"])){
		$area=$area.$_POST["meio_ambiente"];
	}
   
    if(!empty($_POST["engenharia"])){
		$area=$area.$_POST["engenharia"];
	}   
	$obs=$_POST["obs"];
	// Verifica se o POST tem algum valor
    if(!isset($_POST)||empty($_POST)){
	$mensagem_erro = "Nada foi postado";
    }
	//Verifica se o campo nome não está em branco.
    if(empty($nome)) {
    $mensagem_erro=$mensagem_erro."Favor digitar seu nome"; 
	$erro =$erro+1;  
    }
	//Verifica se o CPF não está errado.
	if($CPF){ 
	$mensagem_erro=$mensagem_erro."Erro ao validar CPF"; 
	$erro=$erro+1;	
		}else{ 
		$CPF=$_POST["cpf"];
	}
		//Verifica se o campo endereço não está em branco.
    if(empty($endereco) )
    {
   $mensagem_erro=$mensagem_erro."Favor digitar seu endereço"; $erro ==$erro+1;  
    }
		//Verifica se o campo cidade não está em branco.
    if(empty($cidade))
    {
     $mensagem_erro=$mensagem_erro."Favor digitar a cidade"; $erro ==$erro+1;  
    }
		//Verifica se o campo estado não está em branco.
   if(empty($estado))
    {
     $mensagem_erro=$mensagem_erro."Favor digitar estado"; $erro ==$erro+1;  
    }
		//Verifica se o campo cargo não está em branco.
    if(empty($cargo))
    {
     $mensagem_erro=$mensagem_erro."Favor digitar seu cargo"; $erro ==$erro+1;  
    }
	if($erro>=1){
		print "<h3>Seu formulário contém $erro erro(s) descritos (s) a seguir:<h3><br>";
		print $mensagem_erro;
		print "<br/><INPUT TYPE='BUTTON' VALUE='Corrigir erros' ONCLICK='javascipt:history.go(-1)'>";
	}else{
	echo "Os dados:<br>";
    echo "<b>Nome: </b>$nome<br>";
	echo "<b>CPF: </b>$CPF<br>";
    echo "<b>Endereço: </b>$endereco<br>";
    echo "<b>Cidade: </b>$cidade<br>";
    echo "<b>Estado: </b>$estado<br>";
	echo "<b>URL Imagem: </b>$destino<br>";
	echo "<b>Cargo: </b>$cargo<br>";
    echo "<b>Área: </b>$area<br>";
    echo "<b>Observações: </b>$obs<br>";
	$query=mysqli_query($conn,"UPDATE `cadastro2` SET `nome` = '$nome', `endereco` = '$endereco', `cidade` = '$cidade', `estado` = '$estado', `imagem` = '$destino', `cargo` = '$cargo', `area` = '$area', `obs` = '$obs' WHERE `cadastro2`.`id` ='$id';");
	mysqli_close($conn);
		echo "Dados alterados com sucesso";
		}
echo "<br><a href='form3.php'><button type='button' class='btn btn-primary'>Visualizar</button>";
		?>
		</body>
</html>