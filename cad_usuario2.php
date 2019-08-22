<?php
session_start();
?>
<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8">
		<title>CRUD - Cadastrar</title>		
	</head>
	<body>
		<a href="cad_usuario.php">Cadastrar</a><br>
		<a href="index.php">Listar</a><br>
		<h1>Cadastrar Usuário - Gustavo Testando</h1>
		<?php
		if(isset($_SESSION['msg'])){
			echo $_SESSION['msg'];
			unset($_SESSION['msg']);
		}
		?>
		<form method="POST" action="proc_cad_usuario.php">
			<label>Nome: </label>
			<input type="text" name="nome" placeholder="Digite o nome completo"><br><br>
			
			<label>E-mail: </label>
			<input type="email" name="email" placeholder="Digite o seu melhor e-mail"><br><br>
			
			<fieldset>
                <legend>A sua empresa atende pessoa jurídica ou pessoa física?</legend>
         		<div>
                    <input type="radio" name="tipo" value="b2b" checked>PJ (B2B)<br>
                </div>
    
                <div>
                    <input type="radio" name="tipo" value="b2c">PF (B2C)<br>
                </div>
            </fieldset>

			<input type="submit" value="Cadastrar">
		</form>
	</body>
</html>