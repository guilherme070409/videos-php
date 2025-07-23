<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Teste de tipos primitivos</h1>
    <?php 
    //0x = hexadecimal 0b = binario 0 = Octal
    $num = 010;
        echo"O valor da variavel é $num <br>";

    $v = "Gustavo";
    var_dump($v) ;
       
    $num = (integer) 3e2; //3 x 10(2) coerção
     echo"<br> O valor é $num <br>";
     var_dump($num);
       
     $num =(float)"950";
     echo"<br>";
      var_dump($num);
  
      $casado = false;
      echo"<br>";
      var_dump($casado);
      print "<br> O valor para casado é $casado <br>";

    $vet = [6 , 2.5, "Maria", 3, false];
    var_dump($vet);
    echo"<br>";

    class Pessoa {
        private string $nome;
    }


    ?>
</body>
</html>