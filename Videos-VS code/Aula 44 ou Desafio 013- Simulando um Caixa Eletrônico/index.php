<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio php</title>
    <link rel="stylesheet" href="style.css">
    <style>
        img.nota{
            height: 50px;
        }
    </style>
</head>
<body>
        
        <?php
        $saque = $_GET['saq'] ?? 0;
        $resto = $saque;

        $total100 = floor($resto / 100);
        $resto %= 100;

        $total50 = floor($resto / 50);
        $resto %= 50;
        
        $total20 = floor($resto / 20);
        $resto %= 20;

        $total10 = floor($resto / 10);
        $resto %= 10;

        $total5 = floor($resto / 5);
        $resto %= 5;

        $total2 = floor($resto / 2);
        $resto %= 2;
        
        $total1 = floor($resto / 1);
        $resto %= 1 

        ?>
        <main>
        <h1>Caixa Eletrônico</h1>
        <form action="<?php $_SERVER['PHP_SELF']?>" method="get">
            <label for="saq">Quantos voçê quer sacar</label>
            <input type="number" name="saq" id="saq">
            <input type="submit" value="enviar">
            <p style="font-size: 0.6em;">notas disponieis R$100, R$50, R$20, R$10, R$5, R$2 e R$1</p>
    </form>
    </main>
    <section>
        <h2>O saque de <strong> R$<?=number_format("$saque", 2,",", ".")?> </strong> realizado</h2>
        <p>O caixa vai entregar as seguintes notas:</p>
        <ul>
            <li><img src="imagens/100-reais.jpg" class="nota"> x <?=$total100?></li>
            <li><img src="imagens/50-reais.jpg" class="nota"> x <?=$total50?></li>
           <li><img src="imagens/20-reais.jpg" class="nota"> x <?=$total20?> </li>
           <li><img src="imagens/10-reais.jpg" class="nota"> x <?=$total10?> </li>
           <li><img src="imagens/5-reais.jpg" class="nota"> x <?=$total5?> </li>
           <li><img src="imagens/2-reais.jpg" class="nota"> x <?=$total2?> </li>
           <li><img src="imagens/1-real.jpg" class="nota"> x <?=$total1?></li>
        
        </ul>
    </section>
</body>
</html>