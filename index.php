<?php 

require_once('backend/Usuarios.php');
require_once('backend/GerarTxt.php');
require_once('backend/GerarArquivos.php');

if (isset($_GET['cadastrar'])) {
	$nome = $_POST['nome'];
	$nascimento = $_POST['nascimento'];
	$cpf = $_POST['cpf'];

	$usuarios = new Usuarios();
	$usuarios->setNome($nome);
	$usuarios->setNascimento($nascimento);
	$usuarios->setCpf($cpf);

	$gerarTxt = new GerarTxt();

	$gerarAquivos = new GerarArquivos();
	$gerarAquivos->setUsuarios($usuarios);
	$gerarAquivos->setGerarTxt($gerarTxt);
	$gerarAquivos->gerarArquivoTxt();
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Teste</title>
</head>
<body>

<center>
	<h2>This is a test</h2>
	<form method="post" action="index.php?cadastrar">
		<input type="text" name="nome" placeholder="Digite o Nome"> <br><br>
		<input type="text" name="nascimento" placeholder="Digite a sua Data de Nascimento"> <br><br>
		<input type="text" name="cpf" placeholder="Digite o seu CPF"> <br><br>

		<button id="cadastrar">Cadastrar</button>
	</form>
</center>
</body>
</html>