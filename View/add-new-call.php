<?php require_once dirname(_DIR_) ."/Controller/Auth_Verify.php"; ?>
<!DOCTYPE html>
<html lang="pt-br">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

</head>

<body class="d-flex justify-content-center align-items-center vh-100">
    
    <main class="card bg-warning w-50 h-80 d-flex justify-content-center align-items-center">
          
        <form method="post" action="" class="m-3" style="min-width:500px; min-height: 100px;">
        
        <label for="Nome">Digite o seu Nome de Usuário</label>
        <input type="text" id="nome_User" name="nome_User" class="form-control" placeholder="Nome do Usuário" required> 
        <br>

        <label for="Email">Digite o seu E-Mail</label>
        <input type="email" id="email_user" name="email_user" class="form-control" placeholder="Digite o seu E-Mail" required> <br>

        <label for="Numero">Digite o Numero do seu PC</label>
        <input type="number" id="number_pc" name="number_pc" class="form-control" placeholder="Digite o Número do seu PC" required> <br>

        <label for="Andar">Digite o Numero da sua Sala</label>
        <input type="number" id="number_andar" name="number_andar" class="form-control" placeholder="Digite o Número da sua Sala" required> <br>

        <label for="Nome">Digite o Andar da sua Sala</label>
        <input type="number" id="number_sala" name="number_sala" class="form-control" placeholder="Digite o seu Andar" required><br>

        <label for="Chamado">Selecione o Nivel do Chamado</label>
        <select class="form-select" id="select_nivel" name="select_nivel" required>
            <option value="Baixo">Baixo</option>
            <option value="Medio">Médio</option>
            <option value="Alto">Alto</option> 
        </select><br>

        <label for="Problema">Diga a o seu Problema</label>
        <textarea id="areatext_problema" name="areatext_problema" class="form-control" placeholder="Descreva o seu Problema" required></textarea><br>

        <label for="Notas">Deixe alguma nota ou informação relevante sobre o problema</label>
        <textarea id="areatext_problema" name="areatext_notas" class="form-control" placeholder="Deixe alguma nota ou informação relevante sobre o problema" required></textarea><br>

        <button type="submit">Enviar Chamado</button> 
    </form>

</main>

</body>

</html>