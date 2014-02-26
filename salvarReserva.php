<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Resultados de cadastro</title>
</head>

<body>
	<?php if(isset($_POST['txtNome'])){ ?>
		<h3>Seja bem-vindo, </h3><?=$POST['txtNome']; ?>
	<?php } ?>
</body>
</html>
