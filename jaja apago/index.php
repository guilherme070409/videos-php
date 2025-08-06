<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php 
$exem = "sou um exemplo:)";
$exemploarray = array("teste",1 ,false,"oiii", $exem);
var_dump($exemploarray);

array_push($exemploarray, "oi cheguei", true, 15);
echo"<p>"; 
var_dump($exemploarray);
?>
</body>
</html>