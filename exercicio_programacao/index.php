<!DOCTYPE html>
<html>
<head>
	<title>Exercício</title>
</head>
<body>
<?php
    require_once 'app/models/CategoriaCrud.php';
	session_start();

?>
	<ul>
        <li><a href="app/controller/IndexController.php">Categorias</a></li>
		<!--<li><a href="produtos.php?categoria=1">Eletrônicos</a>
		<li><a href="produtos.php?categoria=2">Esportes</a>
		<li><a href="produtos.php?categoria=3">Móveis</a>
		<li><a href="produtos.php?categoria=4">Roupas</a>-->
	</ul>


	<form method="post" action="produtos.php">
		
		<input type="search" name="busca">
		<input type="submit" value="buscar">


	</form>

<?php
	if (!isset($_SESSION['nome'])) {
		# code...
?>
	<form method="post" action="valida.php">
		<input type="text" name="usuario" placeholder="usuario">
		<input type="password" name="senha" placeholder="senha">
		<input type="submit" name="Entrar">


	</form>
<?php
	}else{
?>

	<p>Olá <?= $_SESSION['nome'] ?> <a href="logout.php">Sair</a></p>

<?php
	}
?>





</body>
</html>