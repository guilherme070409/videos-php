<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php 
$duvidoso = "<h1><script> alert('hackei você muahhahahahahahahahahahahahahhahahahahahahaahahahahhahahahaahhahaahahhahahahahahaahhahahahahahahahahahahahahahahahhahahhhhhhhahaahahahahhahaahhahahaha')</script></h1>";
$seguro = htmlspecialchars($duvidoso);
echo "$seguro";
?>
</body>
</html>