<?php
/**
 * Ejercicio 4. Encuesta.
 * Escribe un script que muestre un formulario que permita la votación de 10 items (item1, item2, …)
 * mediante un radio button de 1 a 5. La respuesta al formulario mostrará el item mejor valorado.

 * 
 * @author Manuel Solar Bueno
 */
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ejercicio 4</title>
</head>
<body>
    
        <?php
        $items = array('item1', 'item2', 'item3', 'item4', 'item5', 'item6', 'item7', 'item8', 'item9', 'item10');
        echo '<form action="" method="post">';
        foreach ($items as $item) {
            
            echo '<label>'.$item.'</label>   ';
            echo '1<input type="radio" name="'.$item.'" value="1">';
            echo '2<input type="radio" name="'.$item.'" value="2">';
            echo '3<input type="radio" name="'.$item.'" value="3">';
            echo '4<input type="radio" name="'.$item.'" value="4">';
            echo '5<input type="radio" name="'.$item.'" value="5">';
            echo '<br>';

        }
        echo '<input type="submit" value="send" name="send">';
        echo '</form>';

        if (isset($_POST['send'])) {
            $item1 = $_POST['item1'];
            $item2 = $_POST['item2'];
            $item3 = $_POST['item3'];
            $item4 = $_POST['item4'];
            $item5 = $_POST['item5'];
            $item6 = $_POST['item6'];
            $item7 = $_POST['item7'];
            $item8 = $_POST['item8'];
            $item9 = $_POST['item9'];
            $item10 = $_POST['item10'];

            $votos = array($item1, $item2, $item3, $item4, $item5, $item6, $item7, $item8, $item9, $item10);
            $votosMejorValorados = [];

            foreach ($_POST as $nombre => $voto) {
                if ($voto == max($votos)) {
                    array_push($votosMejorValorados, $nombre);
                }
                
            }

            foreach ($votosMejorValorados as $item) {
                echo '<p>El item mejor valorado es: '.$item.'</p>';
            }

        }
        ?>
    
</body>
</html>