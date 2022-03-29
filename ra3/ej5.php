<?php
/**
 * Ejercicio 5. Figuras geométricas.
 * Escribe un script que muestre una figura geométrica utilizando el formato svg. Para ello el script
 * mostrará formulario con un radio button con las figuras disponibles: círculo, rectángulo, cuadrado y
 * un cuadro de texto para seleccionar el color. En función de la figura elegida, el script solicitará los
 * datos necesarios para su visualización.
 * 
 * @author Manuel Solar Bueno
 */
 ?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 5 - Manuel Solar Bueno</title>
</head>
<body>
    <form action="" method="post">
    <input type="radio" name="figura" value="circulo">Círculo<br>
    <input type="radio" name="figura" value="rectangulo">Rectángulo<br>
    <input type="radio" name="figura" value="cuadrado">Cuadrado<br>
    <input type="text" name="color" value="" placeholder="Color">
    <input type="submit" value="send" name="send">
    </form> 
    <?php

    if (isset($_POST['send'])) {
        $figura = $_POST['figura'];
        $color = $_POST['color'];

        if ($figura == 'circulo') {
            $radio = 0;
            echo '<form action="" method="post">';
            echo '<input type="hidden" name="figura" value="circulo">';
            echo '<input type="hidden" name="color" value="'.$color.'" placeholder="'.$color.'">';
            echo '<input type="number" name="radio" value="radio" placeholder="Radio">';
            echo '<input type="submit" value="send" name="send">';
            echo '</form>';
            if(isset($_POST['send'])) {
                $radio = $_POST['radio'];
                $color = $_POST['color'];
                echo '<svg width="'.$radio*2 .'px" height="'.$radio* 2 .'px">';
                echo '<circle cx="'.$radio.'" cy="'.$radio.'" r="'.$radio.'" fill="'.$color.'"></circle>';
                echo '</svg>';
            }
            
        } elseif ($figura == 'rectangulo') {
            echo '<form action="" method="post">';
            echo '<input type="hidden" name="figura" value="rectangulo">';
            echo '<input type="hidden" name="color" value="'.$color.'" placeholder="'.$color.'">';
            echo '<input type="number" name="base" value="base" placeholder="Base">';
            echo '<input type="number" name="altura" value="altura" placeholder="Altura">';
            echo '<input type="submit" value="send" name="send">';
            echo '</form>';
            if(isset($_POST['send'])) {
                $base = $_POST['base'];
                $altura = $_POST['altura'];
                $color = $_POST['color'];
                echo '<svg width="'.$base*2 .'px" height="'.$altura* 2 .'px">';
                echo '<rect x="0" y="0" width="'.$base.'" height="'.$altura.'" fill="'.$color.'"></rect>';
                echo '</svg>';
            }
        } elseif ($figura == 'cuadrado') {
            echo '<form action="" method="post">';
            echo '<input type="hidden" name="figura" value="cuadrado">';
            echo '<input type="hidden" name="color" value="'.$color.'" placeholder="'.$color.'">';
            echo '<input type="number" name="lado" value="lado" placeholder="Lado">';
            echo '<input type="submit" value="send" name="send">';
            echo '</form>';
            if(isset($_POST['send'])) {
                $lado = $_POST['lado'];
                $color = $_POST['color'];
                echo '<svg width="'.$lado*2 .'px" height="'.$lado* 2 .'px">';
                echo '<rect x="0" y="0" width="'.$lado.'" height="'.$lado.'" fill="'.$color.'"></rect>';
                echo '</svg>';
            }
        }
    }
    ?>
    
</body>
</html>