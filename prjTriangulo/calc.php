<?php
    $altura = $_POST['txtAltura'];
    $base = $_POST['txtBase'];
    $triangulo = ($base * $altura) / 2;
    echo "Área do Triângulo: " . $triangulo;
?>