<!doctype html>
<html>

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<title>Formulários em HTML</title>
    <link rel="stylesheet" type="text/css" href="estilo/estilo.css">
</head>

<body>
	<div id="cadastro">
        <fieldset>
            <legend>Cadastro Web</legend>

            <form name = "frm_cadastro" method = "post" action="salvarReserva.php">
            
                <label for="nome" >Nome: </label><br />
                <input id="nome" type="text" name="txtNome" required placeholder="Digite seu nome"/><br />

                <input type="submit" value="Cadastrar"/>

            </form>

        </fieldset>
    </div>
</body>

</html>