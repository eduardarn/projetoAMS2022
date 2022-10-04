<?php
    $pNumero = floatval($_GET['txtpNumero']);
    $sNumero = floatval($_GET['txtsNumero']);
    $soma = $sNumero + $pNumero;
    if ($soma > 20){
        echo "Sua soma foi: " . $soma . "<br>";
        echo "Sua soma foi maior que vinte, logo no final, ela assume o valor de: " . $soma + 8 . "<br>";
    }
    else{
        echo "Sua soma foi: " . $soma . "<br>";
        echo "Sua soma foi menor que vinte, logo no final, ela assume o valor de: " . $soma - 5 . "<br>";
    }

?>