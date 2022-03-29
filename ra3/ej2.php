<?php
/**
 * Ejercicio 2. Reescritura de contraseñas.
 * Escribe un script que muestre un formulario con dos inputs de tipo password y verifique en el
 * servidor que las entradas coinciden.
 * 
 * @author Manuel Solar Bueno
 */

echo '<form action="" method="post">
<input type="password" name="password1" placeholder="password" >
<input type="password" name="password2" placeholder="password" >
<input type="submit" value="send" name="send">    
</form>';

    if(isset($_POST['send'])){
        $password = $_POST['password1'];
        $password2 = $_POST['password2'];
        if($password == $password2){
            echo '<p>Las contraseñas coinciden</p>';
        }else{
            echo '<p>Las contraseñas no coinciden</p>';
        }
    }