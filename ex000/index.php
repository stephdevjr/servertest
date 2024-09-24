<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href= "main.css" rel="stylesheet">
</head>
<body>
    <header>
        <h1> Olá, Bem-Vindo! </h1>
    </header>
    <section>
        <form action="cad.php" method="get">
        <label for="usuário">Nome</label>
           <input type="text" name="nome" id="idnome">
        <label for="email">Email</label>
        <input type="email" name="email" id="idemail">
        <label for="senha">Senha</label>
        <input type="text" name="password" id="idpassword">
        <input type="submit" value="Entrar">
        </form>
    </section>
</body>
</html>