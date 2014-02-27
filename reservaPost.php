<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>
	<?php
    	if(isset($_POST['nome']))
			echo 'Página d@ '.$_POST['nome'];
		else
			echo 'Resultados de cadastro';
	?>
</title>
</head>

<body>
	<form name="frm_cadastro" method="post" action="receber.php">
    	<label for="nome"> Nome: </label>
    	<input name="nome" id="nome" type="text" placeholder="Digite seu nome" />
        
        <input type="submit" value="Enviar" />
    </form>
</body>
</html>
