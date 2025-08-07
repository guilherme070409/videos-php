<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio php</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<?php
    $atual =  date("Y");
    $nasceu = $_GET['nasc'] ?? '2000';
    $data = $_GET['ano'] ?? $atual;

    ?>
    <main>
        <h1>Maquina do Tempo</h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
        <label for="nasc">Em que ano voçê nasceu?</label>
        <input type="number" name="nasc" id="nasc" min="1900" max="<?=$atual?>" value="<?=$nasceu?>">
        <label for="ano">Quer saber sua idade em que ano?(atualmente estamos em <strong><?=$data?></strong></label>
        <input type="number" name="ano" id="ano" min="1900" value="<?=$atual?>">
        <input type="submit" value="Qual será minha idade">    
    </form>
    </main>
    <?php 
    $idade = $data - $nasceu;

    ?>
    <section>
        <h2>Resultado</h2>
        <p>Quem nasceu em <?=$nasceu?> vai ter <strong><?=$idade?></strong> em <?=$data?></p>
    </section>
</body>
</html>