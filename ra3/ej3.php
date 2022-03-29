<?php
/**
 * Ejercicio 3. Operaciones aritméticas.
 * Escribe un script que muestre al usuario un formulario con una operación aritmética básica,
 * generada aleatoriamente. Una vez completado el formulario, el script indicará si la operación se
 * realizó correctamente.

 * 
 * @author Manuel Solar Bueno
 */

$resultado = '';

$num1 = rand(1, 10);
$num2 = rand(1, 10);

$operador = ['+', '-', '*', '/'];
$operadorAleatorio = $operador[rand(0, 3)];

echo '<form action="" method="post">
<input type="hidden" name="num1" placeholder="operando1" value="'.$num1.'">
<input type="hidden" name="operacion" placeholder="operacion" value="'.$operadorAleatorio.'">
<input type="hidden" name="num2" placeholder="operando2" value="'.$num2.'">
<p>'.$num1. $operadorAleatorio .$num2.' = </p>
<input type="number" name="resultado" placeholder="Resultado" value="'.$_POST['resultado'].'">
<input type="submit" value="send" name="send">    
</form>';

    if(isset($_POST['send'])){
        $num1 = $_POST['num1'];
        $num2 = $_POST['num2'];
        $operadorAleatorio = $_POST['operacion'];
        $resultado = $_POST['resultado'];
        switch ($operadorAleatorio) {
            case '+':
                $resultadoCorrecto = $num1 + $num2;
                if(intval($resultado) == floor($resultadoCorrecto)){
                    echo '<p>La operación se realizó correctamente</p>';
                }else{
                    echo '<p>La operación no se realizó correctamente</p>';
                }
                break;
            case '-':
                $resultadoCorrecto = $num1 - $num2;
                if(intval($resultado) == floor($resultadoCorrecto)){
                    echo '<p>La operación se realizó correctamente</p>';
                }else{
                    echo '<p>La operación no se realizó correctamente</p>';
                }
                break;
            case '*':
                $resultadoCorrecto = $num1 * $num2;
                if(intval($resultado) == floor($resultadoCorrecto)){
                    echo '<p>La operación se realizó correctamente</p>';
                }else{
                    echo '<p>La operación no se realizó correctamente</p>';
                }
                break;
            case '/':
                $resultadoCorrecto = $num1 / $num2;
                if(intval($resultado) == floor($resultadoCorrecto)){
                    echo '<p>La operación se realizó correctamente</p>';
                }else{
                    echo '<p>La operación no se realizó correctamente</p>';
                }
                break;
        }
    }