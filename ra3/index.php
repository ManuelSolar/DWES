<?php
/**
 * Indexación de los ejercicios mediante un array
 * 
 * @author Manuel Solar Bueno
 */

 //Ejemplo de estructura de array que podría servir
 $aEjercicios = array(
     array('id' => 1, 'titulo' => 'Ejercicio 1', 'descripcion' => 'Ejercicio 1. Número aleatorio.', 'url' => '/~sobuma/ra3/ej1.php', 'url2' => '/~sobuma/ra3/ej5.php'),
     array('id' => 2, 'titulo' => 'Ejercicio 2', 'descripcion' => 'Ejercicio 2. Reescritura de contraseñas.', 'url' => '/~sobuma/ra3/ej2.php', 'url2' => '/~sobuma/ra3/ej5.php'),
     array('id' => 3, 'titulo' => 'Ejercicio 3', 'descripcion' => 'Ejercicio 3. Operaciones aritméticas.', 'url' => '/~sobuma/ra3/ej3.php', 'url2' => '/~sobuma/ra3/ej5.php'),
     array('id' => 4, 'titulo' => 'Ejercicio 4', 'descripcion' => 'Ejercicio 4. Encuesta.', 'url' => '/~sobuma/ra3/ej4.php', 'url2' => '/~sobuma/ra3/ej5.php'),
     array('id' => 5, 'titulo' => 'Ejercicio 5', 'descripcion' => 'Ejercicio 5. Figuras geométricas.', 'url' => '/~sobuma/ra3/ej5.php', 'url2' => '/~sobuma/ra3/ej5.php')
 );

 ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manuel Solar Bueno - Listado de ejercicios</title>
</head>
<body>
    <h1>Ejercicios PHP</h1>
    <?php
    foreach ($aEjercicios as $ejercicio) {
        echo '<a href="'.$ejercicio['url'].'" target="blank"><h2>'.$ejercicio['titulo'].'</h2></a>';
        echo '<p>'.$ejercicio['descripcion'].'</p>';
        echo '<a href="'.$ejercicio['url2'].'" target="blank"><b>'.$ejercicio['titulo'].'</b></a>';
    }
    ?>
</body>
</html>