<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
       <?php 
            $valor1 = $_GET['1val'] ?? '1';
            $peso1 = $_GET['1pe'] ?? '1';
            $valor2 = $_GET['2val'] ?? '1';
            $peso2 = $_GET['2pe'] ?? '1';
            $mediasimp = ($valor1 + $valor2)/2;
          $mediapon = (($valor1 * $peso1) + ($valor2 * $peso2)) / ($peso1 + $peso2);
            ?>
    <main>
        <h1>Médias Aritméticas</h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            <label for="1val">1° valor</label>
            <input type="number" name="1val" id="1val" value="<?=$valor1 ?>">
            <label for="1pe">1° peso</label>
            <input type="number" name="1pe" id="
            1pe" value="<?=$peso1?>">
            <label for="2val">2° valor</label>
            <input type="number" name="2val" id="2val" value="<?=$valor2?>">
            <label for="2pe">2° peso</label>
            <input type="number" name="
            2pe" id="2pe" value="<?=$peso2?>">
            <input type="submit" value="enviar">
            <section>
            <h2>Cálculo das Médias</h2>    
            <p>Analisando  os valores <?=$valor1?> e <?=$valor2?>:</p>
            <ul>
                <li>A <strong>Média Aritmética Simples</strong> entre os valores é igual a <?=number_format($mediasimp, 2,",",".")?></li>
                <li>A <strong>Média Aritmética</strong> com pesos <?=$peso1?> e <?=$peso2?> <?=number_format($mediapon, 2, ",",".")?></li>
            </ul>
            </section>

        </form>
    </main>
</body>
</html>