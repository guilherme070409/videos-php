<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    <header>
        <h1>Resultado do procesamento</h1>
    </header>
    <main>
        <?php 
    $n = $_GET["nome"] ??"sem nome";
    $s = $_GET["sobrenome"] ??"sem sobrenome";
    echo"<p>É um prazer de conhecer, <strong>$n $s</strong>!!! esse é meu site";
    ?>
    <p><a href="javascript:history.go(-1)">Voltar para a pagia anterior</a>
    </main>
    
</body>
</html>