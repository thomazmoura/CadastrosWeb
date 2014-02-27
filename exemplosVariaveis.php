	
	
	
	
<!-- Podemos criar código PHP fora da tag HTML, contanto que não desejemos mostrar nada na página, como no exemplo da declaração/atribuição a seguir(isso é muito comum para atribuições iniciais) -->
<?php
	//Criação de uma variável nome e atribuição do valor 'Fulanosvaldo' a ela, como esse valor é uma string, a variável $nome será tratada como string
	$nome = 'Filanosvaldo';
	//No exemplo a seguir passamos um valor inteiro, logo a variável será do tipo inteiro
	$idade = 35;
	$idade = 35.3;
	$idade = 'trinta e três';
	//Também podemos passar valores de pnto flutuante (float)
	if(isset($_GET['dinheiro']))
		$dinheiro = $_GET['dinheiro'];
	else
		$dinheiro = 75.5;
	
	
	if($dinheiro > 1000000)
		$eRico = true;
	else
		$eRico = false;

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<!-- Podemos inserir código php em qualquer trecho do html, usando as tags <?php ?> para código ou < ?= ?>-->
<title>Página do <?=$nome ?></title>
</head>

<body>
	<p>
    	<!-- Quando queremos inserir valores php dentro do corpo da página colocamos eles dentro do elemento referente -->
    	Tenho <?= $idade ?> anos, possuo <strong> R$ <?= $dinheiro ?> </strong> e sou rico.
        <?php 
			if($eRico) {
				//echo é utilizado para enviar dados HTML a partir do PHP
				echo '<p>(Isso é verdade - por incrível que pareça)</p>';
			}else {
				echo '<p>(Isso é uma mentira descarada - não tem um tostão furado esse cara)</p>';
			}
		?>
    </p>
</body>
</html>
