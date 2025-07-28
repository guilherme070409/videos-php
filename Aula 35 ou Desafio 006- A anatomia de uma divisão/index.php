<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio php</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <h1>Estrutura da Divisão</h1>
        <form action="<?= $_SERVER['PHP_SELF'] ?>" method="get">
            <label for="d1">Dividendo</label>
            <input type="number" name="d1" id="d1">
            <label for="d2">Divisor</label>
            <input type="number" name="d2" id="d2">
            <input type="submit" value="analisar">
            <?php
            $dividendo = $_GET["d1"] ?? 1;
            $divisor = $_GET["d2"] ?? 1;  
            $quociente = intdiv($dividendo, $divisor);
            $resto = $dividendo % $divisor;
            
            ?>
            <h2>Estrutura de uma Divisão</h2>
            <table class="divisao">
                <tr>
                    <td><?=$dividendo?></td>
                    <td><?=$divisor?></td>
                </tr>
                <tr>
                    <td><?=$resto?></td>
                    <td><?=$resto?></td>
                </tr>

            </table>
        </form>
    </main>
</body>
</html>