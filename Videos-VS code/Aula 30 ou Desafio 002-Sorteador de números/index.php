<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio php</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <h1>Numero aleatorio</h1>
        <?php
         $min = 0;
         $max =  100;
         $num = rand($min, $max);
         echo"<p>O numero aleatorio entre $min e $max  é <strong>$num</strong></p>"
        ?>
        <button onclick="javascript:document.location.reload()">&#x1F504; Gerar outro</button>
    </main>
</body>
</html>