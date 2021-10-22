<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <title>Formulário</title>
    <style>
        .principal {
            border: 5px solid purple; 
            padding: 25px; 
            border-radius: 15px;
        }

        legend.scheduler-border {
            width: inherit; /* Or auto */
            padding: 0 10px; /* To give a bit of padding on the left and right */
            border-bottom: none;
            font-weight: bold;
        }
    </style>
	<?PHP 
	$id=$_GET['id'];
	$nome=$_GET['nome'];
	$cpf=$_GET['cpf'];
	$endereco=$_GET['endereco'];
	$cidade=$_GET['cidade'];
	$estado=$_GET['estado'];
	$cargo=$_GET['cargo'];
	$interesse=$_GET['interesse'];
	$mini=$_GET['mini'];
	$url=$_GET['url'];
			?>
	
	
</head>
<body>
    <div class="container">
        <h1>Cadastro de Curso</h1>
        <br><br>
    </div>

    <div class="container">
        <form name="form1" method="POST" action="dados5.php" enctype="multipart/form-data">
           
		   <input type="hidden" name="id" id="id" value="<?php print $id ?>">
			
			<fieldset class="principal form-group">
                <legend class="scheduler-border">Dados Pessoais</legend>
                <div class="form-group row">
                    <label for="nome" class="col-sm-2 col-form-label">Nome: </label>
                    <div class="col-sm-10">
                    <input type="text" class="form-control" name="nome" id="nome"  value="<?php print $nome; ?>" required>
                    </div>
                </div>
				 <div class="form-group row">
                    <label for="cpf" class="col-sm-2 col-form-label">CPF: </label>
                    <div class="col-sm-10">
                    <input type="text" class="form-control" name="cpf" id="cpf"  value="<?php print $cpf; ?>" required>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="endereco" class="col-sm-2 col-form-label">Endereço: </label>
                    <div class="col-sm-10">
                    <input type="text" class="form-control" name="endereco" id="endereco"  value="<?php print $endereco; ?>" required>
                    </div>
                </div>
                <div class="form-group row">
                        <label for="cidade" class="col-sm-2 col-form-label">Cidade: </label>
                        <div class="col-sm-10">
                        <input type="text" class="form-control" name="cidade" id="cidade" value="<?php print $cidade; ?>"  required>
                        </div>
                </div>
				<?php 
				$arrCombobox = array(
                "ES" => "Espírito Santo",
                "MG" => "Minas Gerais",
                "RJ" => "Rio de Janeiro",
				"SP" => "São Paulo");


$valor_selecionado = $_GET['estado'];
                          
                     
                          
				?>
				
				
                <div class="form-group row">
                    <label for="uf" class="col-sm-2 col-form-label">Estado: </label>
                    <div class="col-sm-5">
                        <select id="uf" name="uf" class="form-control" required>
                            <option> </option>
							<?php foreach ($arrCombobox as $key => $value): 
							  $selected = ($valor_selecionado == $key) ?
                                          "selected=\"selected\"" :
                                          null; 
							echo "<option value=\"$key\"  $selected>$value</option>";
							endforeach;
							?>

                        </select>
                    </div>
				</div>
				<div class="form-group row"> 
				<div class="col-sm-10">
				<label for="endereco" >Imagem: </label>
                <?php echo "<img src='$url'  heigth='150' width='150' >"?> 
				<input type="hidden" name="arquivo" id="arquivo" value="<?php print $url ?>">
              </div>
			  <div class="col-sm-10">              
				<label for="arquivo2" >Atualizar Imagem: </label>
				<input type="file"  name="arquivo2" id="arquivo2" >
					
				</div>
					
				</div>
                
            </fieldset>

            <fieldset class="principal form-group">
                <legend class="scheduler-border">Dados Profissionais</legend>
            <div class="row">
            <legend class="col-form-label col-sm-4 pt-0">Natureza do cargo</legend>
            <div class="col-sm-10">
                <div class="form-check-inline">
                    <input class="form-check-input" type="radio" name="cargo" value="gerencia" <?php echo ($cargo == "gerencia") ? "checked" : null; ?>>
                    <label class="form-check-label" for="gridRadios1"    />Gerência</label>
                </div>
                <div class="form-check-inline">
                    <input class="form-check-input" type="radio" name="cargo" value="financeiro" <?php echo ($cargo == "financeiro") ? "checked" : null; ?>>
                    <label class="form-check-label" for="gridRadios2"   />Financeiro</label>
                </div>
                <div class="form-check-inline">
                    <input class="form-check-input" type="radio" name="cargo" value="recepcao" <?php echo ($cargo == "recepcao") ? "checked" : null; ?>>
                    <label class="form-check-label" for="gridRadios3"  />Recepção</label>
                </div>
                <div class="form-check-inline">
                        <input class="form-check-input" type="radio" name="cargo" value="administracao" <?php echo ($cargo == "administraca") ? "checked" : null; ?>>
                        <label class="form-check-label" for="gridRadios4"  />Administração</label>
                    </div>
                    <div class="form-check-inline">
                        <input class="form-check-input" type="radio" name="cargo" value="juridico" <?php echo ($cargo == "juridico") ? "checked" : null; ?>>
                        <label class="form-check-label" for="gridRadios5" />Jurídico</label>
                    </div>
                </div>
            </div>

            <br>    
			<?php
            $computacao=false;
			$biologia=false;
			$meio_ambiente=false;
			$engenharia=false;
			if((substr($interesse, 0,10)=="computacao")){
			$computacao=true;
			}
			if((substr($interesse, 0,8)=="biologia")or(substr($interesse, 10,8)=="biologia")){
			$biologia=true;
			}
			if((substr($interesse, 0,13)=="meio_ambiente")or(substr($interesse, 10,13)=="meio_ambiente")or(substr($interesse, 18,13)=="meio_ambiente")or(substr($interesse, 8,13)=="meio_ambiente")){
			$meio_ambiente=true; 
			}
			if((substr($interesse, 0,10)== "engenharia")or(substr($interesse, 10,10)=="engenharia")or(substr($interesse, 18,10)=="engenharia")or(substr($interesse, 31,10)=="engenharia")or(substr($interesse, 8,10)=="engenharia")or(substr($interesse, 13,10)=="engenharia")or(substr($interesse, 21,10)=="engenharia")or(substr($interesse, 23,10)=="engenharia")){
			$engenharia=true;
			}
			?>
            <div class="form-group row">
                    <legend class="col-form-label col-sm-4 pt-0">Área de interesse</legend>
                <div class="col-sm-10">
                    <div class="form-check-inline">
                        <input class="form-check-input" type="checkbox" name="computacao" id="computacao" value="computacao" <?php if($computacao){echo "checked";}?>>
                        <label class="form-check-label" for="area">Computação</label>
                    </div>
                    <div class="form-check-inline">
                        <input class="form-check-input" type="checkbox" name="biologia" id="biologia" value="biologia" <?php if($biologia){echo "checked";}?>>
                        <label class="form-check-label" for="area">Biologia</label>
                    </div>
                    <div class="form-check-inline">
                        <input class="form-check-input" type="checkbox" name="meio_ambiente" value="meio_ambiente" <?php if($meio_ambiente){echo "checked";}?>>
                        <label class="form-check-label" for="area">Meio Ambiente</label>
                    </div>
                    <div class="form-check-inline">
                        <input class="form-check-input" type="checkbox" name="engenharia" value="engenharia" <?php if($engenharia){echo "checked";}?>>
                        <label class="form-check-label" for="area">Engenharia</label>
                    </div>
                </div>
            </div>

            <div class="form-group">
                <label for="obs">Mini-curso</label>
                <textarea class="form-control" name="obs" id="obs" rows="3" ><?php echo $mini; ?></textarea>
            </div>

            <br>

            <div class="form-group row">
                <div class="col-sm-10">
                    <button type="submit" class="btn btn-success">Alterar</button>
                    
                </div>
            </div>
        </form>
    </fieldset>
    </div>

    <script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
</body>
</html>