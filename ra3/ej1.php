<?php
/**
 * Ejercicio 1. Número aleatorio.
 * Escribe un script que muestre al usuario un número aleatorio comprendido entre dos números que
 * han sido solicitados previamente mediante un formulario.
 * 
 * @author Manuel Solar Bueno
 */

$num1=0;
$num2=0;

 if(isset($_POST['send'])){
    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];
    $numeroAleatorio = rand($num1, $num2);
     echo '<p>El número aleatorio es: '.$numeroAleatorio.'</p>';
 }
 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        <input type="number" name="num1" placeholder="Primer número" value="<?php echo $num1; ?>">
        <input type="number" name="num2" placeholder="Segundo número" value="<?php echo $num2; ?>">
        <input type="submit" value="send" name="send">
    </form>
</body>
</html>
