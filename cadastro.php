
<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="style.css">
<title>Cadastro</title>
</head>
<body>

<div class="cadastro-mae">
    <div class="card-form">
        <img class="cadastro-logo" src="img/image 1.svg" alt="logo" width="100" height="100">
        <h1>Cadastro de Usuário</h1>
        <form class="cadastro-form" name="form-cadastro" action="#" method="post">
             <label class="cadastro_label" for="nome">Nome:</label>
             <input class="cadastro-input" type="text" id="nome" name="nome" required>
             <br>
             <label class="cadastro_label" for="email">E-mail:</label>
             <input class="cadastro-input" type="email" id="email" name="email" required>
             <br>
             <label class="cadastro_label" for="senha">Senha:</label>
             <input class="cadastro-input" type="password" id="senha" name="senha" required>
             <br>
             <label class="cadastro_label3" for="confirmar-senha">Confirmar Senha:</label>
             <input class="cadastro-input" type="password" id="confirmar-senha" name="confirmar-senha" required>
             <br>
             <div class="flex-row">
                 <label class="cadastro_label1" for="genero">Gênero:</label>
                 <input class="cadastro-input3" type="radio" id="genero-masculino" name="genero" value="Masculino">
                 <label class="cadastro_label1" for="genero-masculino">Masculino</label>
                 <input class="cadastro-input3" type="radio" id="genero-feminino" name="genero" value="Feminino">
                 <label class="cadastro_label1" for="genero-feminino">Feminino</label>
                 <input class="cadastro-input3" type="radio" id="genero-outro" name="genero" value="Outro">
                 <label class="cadastro_label1" for="genero-outro">Outros</label>
                 </div>
                 <br>
            <label class="cadastro_label2" for="data-nascimento">Data de Nascimento:</label>
            <input class="cadastro-input" type="date" id="data-nascimento" name="data-nascimento" required>
            <br>
            <label class="cadastro_label" for="cidade">Cidade:</label>
            <input class="cadastro-input" type="text" id="cidade" name="cidade">
            <br>
            <label class="cadastro_label" for="pais">País:</label>
            <input class="cadastro-input" type="text" id="pais" name="pais">
            <br>
            <div class="move-btn">
                <button OnClick="myButtonSubmited()" name="cadastro-button" class="cadastro-btn" type="submit">Cadastrar</button>
            </div>

        </form>
    </div>
</div>
<script>
    
function myButtonSubmited(){

            alert(" O Formulário foi enviado com sucesso!");
            
    }

</script>
</body>
</html>
