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

foreach($exemploarray as $chave => $valor){
    echo "O valor com a chave ".  $chave  . " é " . $valor ."<br>";
}
?>
</body>
</html>