<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Resultados de cadastro</title>
</head>

<body>
	<?php
		if(isset($_GET['nome']))
			echo('<h3>Seja bem-vindo, ' . $_GET['nome'] . '</h3>'); 
		else
			echo('<h3>Não foi informado nenhum cadastro.</h3>'); 
	?>
</body>
</html>
