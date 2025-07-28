<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio php</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1></h1>
    <?php 
    $saminimo = 1518;
   $salario = $_GET["Sa"] ?? 1518;
    $result =  intdiv($salario, $saminimo);
    $dif = $salario % $saminimo;
    ?>
    <main>
        <h1>Informe seu salário</h1>
        <form action="<?= $_SERVER['PHP_SELF'] ?> " method="get">
            <label>salário(R$)</label>
            <input type="number" name="Sa" id="Sa" step="0.01">
            <p>Considerando o salario minimo de <strong>$<?=number_format($saminimo, 2,"," ,".")?></strong></p>
            <input type="submit" value="Enviar">
            
        </form>
</main>
        <section>
        <h2>Resultado final</h2>
        <p><?="quem recebe ". number_format($salario, 2,",",".") ." ganha <strong>". $result ."</strong> salarios minimos mais R$" . number_format($dif, 2, ",",".") ?></p>
        </section>
</body>
</html>