<!doctype html>
<html>

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<title>Formulários em HTML</title>
    <link rel="stylesheet" type="text/css" href="estilo/estilo.css">
	<script type="text/javascript">
		function validar(){
			var msg = "Erro! Preencha os seguintes campos:\n";
			if(document.getElementById("nome").value.length <= 0){
				msg += "\nPreencha o campo nome";
			}
			
			if(document.getElementById("email").value.length <= 0){
				msg += "\nPreencha o campo email";
			}
			
			if(document.getElementById("senha").value.length <= 0){
				msg += "\nPreencha o campo senha";
			}
			
			if(document.getElementById("nascimento").value.length <= 0){
				msg += "\nPreencha o campo data de nascimento";
			}
			
			if(msg != "Erro! Preencha os seguintes campos:\n"){
				alert(msg);
				return false;
			}
		}
		
		function validarCampo(field){
			
		}
		
		function mascara_data(inputData, e){
			if(document.all) // Internet Explorer
				var tecla = event.keyCode;
			else //Outros Browsers
				var tecla = e.which;
			
			if(tecla >= 48 && tecla < 58){ // numeros de 0 a 9 e "/"
				var data = inputData.value;
				if (data.length == 2 || data.length == 5){
					data += '/';
					inputData.value = data;
				}
			}
			else if(tecla == 8 || tecla == 0) // Backspace, Delete e setas direcionais(para mover o cursor, apenas para FF)
				return true;
			else
				return false;
		}
	</script>
</head>

<body>
	<div id="cadastro">
        <fieldset>
            <legend>Cadastro Web</legend>

            <form name = "frm_cadastro" method = "POST" action="salvarReserva.php" onSubmit="return validar();">
            
                <label for="nome" >Nome: </label><br />
                <input id="nome" type="text" name="txtNome" required placeholder="Digite seu nome"/><br />
                
                <label for="email" >E-mail: </label><br />
                <input id="email" type="email" name="txtEmail" required placeholder="Digite seu e-mail"/><br />
                
                <label for="senha" >Senha:</label><br />
                <input id="senha" type="password" name="txtSenha" required placeholder="Digite sua senha"/><br />
                
                <label for="nascimento">Data de nascimento: </label><br />
                <input id="nascimento" name="txtNascimento" type="text" onKeyPress="return mascara_data(this, event);" maxlength="10"/><br />
                
                <label for="idade" >Idade: </label><br />
                <input id="idade" type="number" min="13" max="120"/><br />
                
                <label for="portfolio" >Portfolio:</label><br />
                <input id="portfolio" type="url" name="urlPortfolio"/><br />
                
                <label for="estados" >Estados:</label><br />
                <select id="estados" name="cbxEstados" multiple="multiple">
                    <option value="RS">Rio Grande do Sul</option>
                    <option value="SP" selected>São Paulo</option>
                    <option value="RJ">Rio de Janeiro</option>
                    <option value="SC">Santa Catarina</option>
                    <option value="PE">Pernambuco</option>
                    <option value="DF">Distrito Federal</option>
                </select><br/>
                
                <label for="cidade" >Cidade:</label>
                <select id="cidade" name="cbxCidades"><br />
                    <option value="0" selected>-- Selecione --</option>
                    <option value="RS">Rio Grande do Sul</option>
                    <option value="SP">São Paulo</option>
                    <option value="RJ">Rio de Janeiro</option>
                    <option value="SC">Santa Catarina</option>
                </select><br />
                
                <label for="descricao" >Breve descrição sobre sua experiência: </label><br />
                <textarea id="descricao" name ="txtMsg" rows="5" cols="30"></textarea><br />
                
                <input type="submit" value="Cadastrar"/>
                <input type="reset" value="Limpar"/>

            </form>

        </fieldset>
        
        <fieldset>
            <legend>Cadastro Web Alternativo</legend>
        </fieldset>
    </div>
</body>

</html>