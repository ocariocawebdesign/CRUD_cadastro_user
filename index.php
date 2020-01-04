<!DOCTYPE html>
<html lang="pt_br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cadastro 02 - CRUD</title> 
</head>
<body>

    <h1>Cadastrar usuários</h1>

    <form method="POST" action="processa.php">

    <label>Digite se nome</label>
    <input type="text" name="nome" placeholder="Digite o nome completo" alt="Digitar o nome">
    <br>
    <br>
    <label>Digite seu melhor email</label>
    <input type="email" name="email" placeholder="Digite seu melhor email" alt="Digitar o email" >
    <br>
    <br>

    <input type="submit" name="botao" value="Cadastrar" >
    
    
    
    
    </form>
    
</body>
</html>