<!DOCTYPE html>
<html lang="">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">]<link rel="stylesheet" href="style.css">
    <title>Desafio php</title>
</head>
<body>
    <main>
    <h1>Resultado final</h1>
    <p>
    <?php 
    $n = $_REQUEST["num"] ?? 0;
    $a = $n - 1;
    $s = $n + 1;
    echo"o numero escolido foi $n";
    echo"<br>seu antecessor é $a";
    echo"<br> seu sucesor é $s";

    ?>
    </p>
    <button onclick="javascript:window.location.href='index.html'">&#65513;Voltar</button>
    </main>
</body>
</html>