<form method="post">
    ¿Cuántos números de fibonacci quieres ver?: <input type="number" name="numero" required>
    <input type="submit" value="Comprobar">
</form>
<?php
/**
 * Nombre: Kelian Bilbao Zalbidea
 * Pedimos el número con el formulario en método "post"
 * Especificamos el tipo de entrada (input) como número,
 * el nombre de la variable (numero) y lo hacemos obligatorio.
 * El texto del botón será Comprobar.
 */
if (isset($_POST['numero'])) { //Verificamos si numero está definido
    $numero = $_POST['numero']; //Pasamos el número insertado a la variable local
    $arr = fibonacci($numero); //Pasamos el nuevo array a la variable arr
    if (isset($arr)) { //Verificamos si arr está definido
        mostrarArray($arr); //Mostramos el array
    }
}
function fibonacci($n) {
    $arr = [0, 1]; //Creamos el array con los dos primeros números para que sume
    if ($n >= 2) { //if de control del número introducido
        for ($i = 1; $i < $n - 1; $i++) {
            $arr[$i + 1] = $arr[$i] + $arr[$i - 1]; //Sumamos el número actual y el anterior y lo insertamos en el siguiente
        }
        return $arr; //devolvemos el array
    } else if ($n == 1) {
        return [$arr[0]]; //devolvemos el array solo con un número
    } else if ($n == 0) {
        echo "No quieres mostrar números."; //No hacemos nada
    } else {
        echo "Número no válido."; //Mensaje de error
    }
}
function mostrarArray($array) {
    echo "[";
    foreach ($array as $i => $numero) {
        if ($i == count($array) - 1) {
            echo $numero . "]";
        } else {
            echo $numero . ", ";
        }
    }
}
?>