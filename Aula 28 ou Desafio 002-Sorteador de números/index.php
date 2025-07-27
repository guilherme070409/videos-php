<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <h1></h1>
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