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
         <h1>Conversor de numero V1</h1>
    <?php 
    $cotação = 5.56;
    $real = $_GET["din"] ?? 0;
    $dolar = $real / $cotacao;

    $padrao = numfmt_create("pt_BR", NumberFormatter::CURRENCY);

    echo "<p>Seus " . numfmt_format_currency($padrao, $real, "BRL"). " equivalem a  <strong>" . numfmt_format_currency($padrao, $dolar, "USD") . "</strong></p>";

    ?>
    </main>
</body>
</html>