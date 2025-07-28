<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio php</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php
    $num = $_GET["num"] ?? 1; 
    $raizqua = $num ** (1/2);
    $raizcu = $num ** (1/3);
    ?>
    <main>
        <h1>Informe um Número</h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            <label for="num">Número</label>
            <input type="number" name="num" id="num">
            <input type="submit" value="enviar">
             </form>
    </main>
    <section>
        <h2>Resultado final</h2>
        <?php 
        echo "Analisando o número <strong> " . $num . "<strong>, temos:";
        echo"<ul><li>A sua raiz quadrada é <stong>" .  number_format($raizqua, 3, ",", ".") . "</strong></li>";
        echo"<li>A sua raiz cúbica é <strong>" . number_format($raizcu, 3, "," , ".") . "</strong></li></ul>"
        ?>
    </section>
    
</body>
</html>