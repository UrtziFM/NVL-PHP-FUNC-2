/* Practica en PHP */



<?php
    
function cuentaletras(string $palabra, string $letra){
    $suma_letra = substr_count(strtoupper($palabra), strtoupper($letra));
    echo "El numero total de letra buscada es: " + $suma_letra;    
}

cuentaletras("Aceitunas en Madrid", "A")
    
?>